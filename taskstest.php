<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinyMCE File Upload</title>
    <!-- TinyMCE CDN -->
    <script src="https://cdn.tiny.cloud/1/v6edcpl9bl0acbvq9pl684uq2qeh0ienjq9istj802ofpl78/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>

    <!-- TinyMCE Editor Textarea -->
    <textarea id="editor"></textarea>

    <!-- Form for file upload (hidden for TinyMCE) -->
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="file" id="fileInput" style="display: none;" />
    </form>

    <!-- Script to initialize TinyMCE -->
    <script>
        tinymce.init({
            selector: '#editor',
            height: 400,
            plugins: 'image link media',
            toolbar: 'undo redo | styleselect | bold italic | link image | uploadfile',
            images_upload_handler: function (blobInfo, success, failure) {
                var formData = new FormData();
                formData.append('file', blobInfo.blob());

                // Send the file to the server using AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'output.php', true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.location) {
                            success(response.location); // Insert the image URL into the editor
                        } else {
                            failure('Failed to upload image');
                        }
                    } else {
                        failure('HTTP Error: ' + xhr.status);
                    }
                };
                xhr.onerror = function () {
                    failure('Request failed');
                };
                xhr.send(formData);
            },
            file_picker_callback: function (callback, value, meta) {
                // Check the file type (image or file)
                if (meta.filetype === 'file' || meta.filetype === 'image') {
                    document.getElementById('fileInput').click();
                    document.getElementById('fileInput').onchange = function () {
                        var fileInput = document.getElementById('fileInput');
                        var formData = new FormData();
                        formData.append('file', fileInput.files[0]);

                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'output.php', true);
                        xhr.onload = function () {
                            if (xhr.status === 200) {
                                var response = JSON.parse(xhr.responseText);
                                if (response.location) {
                                    // Handle image files
                                    if (response.type === 'image') {
                                        callback(response.location); // Insert the image URL
                                    } 
                                    // Handle PDF files
                                    else if (response.type === 'pdf') {
                                        callback('<a href="' + response.location + '" target="_blank">' + response.location + '</a>');
                                    }
                                } else {
                                    alert('Failed to upload file');
                                }
                            }
                        };
                        xhr.send(formData);
                    };
                }
            }
        });
    </script>

</body>
</html>
