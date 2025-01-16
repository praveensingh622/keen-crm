<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinyMCE Editor with File Upload</title>
    <!-- TinyMCE CDN -->
    <script src="https://cdn.tiny.cloud/1/v6edcpl9bl0acbvq9pl684uq2qeh0ienjq9istj802ofpl78/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>

<h2>Rich Text Editor with File Upload</h2>

<!-- Textarea for TinyMCE editor -->
<textarea id="mytextarea"></textarea>

<script>
tinymce.init({
  selector: '#mytextarea',  // Yeh ID aap apne textarea ko denge
  plugins: 'image media',    // Image aur media (PDF, videos) plugins enable karna
  toolbar: 'undo redo | styleselect | bold italic | link image media | alignleft aligncenter alignright | code', // Toolbar buttons define karna
  automatic_uploads: true,   // Image aur file upload automatically handle karega
  file_picker_types: 'image media', // Image aur media files ko allow karna
  file_picker_callback: function(callback, value, meta) {
    if (meta.filetype === 'image') {
      // Image upload dialog box ko handle karna
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');
      input.onchange = function() {
        var file = input.files[0];
        var reader = new FileReader();
        reader.onload = function() {
          callback(reader.result, {alt: file.name});
        };
        reader.readAsDataURL(file);
      };
      input.click();
    } else if (meta.filetype === 'media') {
      // Media file (like PDF) ko handle karna
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'application/pdf');
      input.onchange = function() {
        var file = input.files[0];
        var formData = new FormData();
        formData.append('file', file);
        // Send file to PHP for upload
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'upload.php', true);
        xhr.onload = function() {
          if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            callback(response.fileUrl); // Callback with the uploaded file URL
          }
        };
        xhr.send(formData);
      };
      input.click();
    }
  }
});
</script>

</body>
</html>
