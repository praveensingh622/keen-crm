<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';  
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

$projectRoot = rtrim(dirname($_SERVER['PHP_SELF']), '/php//');
define('BASE_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . $projectRoot . '/');
if (isset($_POST['submit'])) {
 $mail = new PHPMailer(true);
    include_once("config.php");
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST["username"];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $job_title = $_POST['job_title'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone1 = $_POST['phone1'];
    $dob = $_POST['dob'];
    $description = $_POST['description'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $facebook = $_POST['facebook'];
    $skype = $_POST['skype'];
    $linkedin = $_POST['linkedin'];
    $twitter = $_POST['twitter'];
    $whatsapp = $_POST['whatsapp'];
    $instagram = $_POST['instagram'];
    $role = $_POST['role'];
    $assignable = $_POST['assignable'];

    // Check if the username or email already exists in the database
    $checkQuery = "SELECT * FROM admin WHERE username = '$username' OR email = '$email'";
    $checkResult = mysqli_query($conn, $checkQuery);
    
    if (mysqli_num_rows($checkResult) > 0) {
        echo "Error: The username or email is already taken. Please choose a different one.";
        exit(); // Stop further script execution
    }

    // Default value for profile picture
    $target_file = '';

    // Check if a file is uploaded
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["name"] != '') {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a valid image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // If everything is ok, upload the file
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            // If upload failed, set $target_file to an empty string to skip storing image
            $target_file = '';
        }
    }

    // Insert data into the database, even if no file is uploaded
    $sql = "INSERT INTO admin (`name`, `lname`, `username`, `password`, `email`, `skype`, `phone`, `role`, `job_title`, `phone2`, `fax`, `description`, `street`, `city`, `state`, `country`, `zipcode`, `profile`, `subrole`) 
            VALUES ('$fname', '$lname', '$username', '$hashed_password', '$email', '$skype', '$phone', '$role', '$job_title', '$phone1', '$fax', '$description', '$street', '$city', '$state', '$country', '$zipcode', '$target_file', '$assignable')";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {

            try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'praveenrajgtb@gmail.com';
            $mail->Password = 'mabc ycus hqhq vbcw';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set email details
            $mail->setFrom('your_email@example.com', "$fname $lname Welcome To Our Team");
            $mail->addAddress($email);
            $mail->addCC('pavan@keensites.com');
            $mail->Subject = "Welcome to keensites";

            $template = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <style>
        /* Some resets and issue fixes */
        
        #outlook a {
            padding: 0;
        }
        
        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }
        
        table {
            border: none;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        
        a,
        a:link,
        a:visited {
            text-decoration: none;
            color: #00788a
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        h2,
        h2 a,
        h2 a:visited,
        h3,
        h3 a,
        h3 a:visited,
        h4,
        h5,
        h6,
        .t_cht {
            color: #000 !important
        }
        
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td {
            line-height: 100%
        }
        
        .ExternalClass {
            width: 100%;
        }
        
        img {
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }
    </style>
    <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
        <o:AllowPNG></o:AllowPNG>
        <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

    <!--[if mso]>
    <style type="text/css">
    .td,img {margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important;}
    </style>
    <![endif]-->

</head>

<body bgcolor="#f0f3ff" style="margin: 0; padding: 0; min-width: 100%!important">
    <table width="100%" bgcolor="#f0f3ff" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" valign="top" bgcolor="#f0f3ff">
                <table width="448" border="0" cellpadding="0" cellspacing="0" align="center" style="background-color:#000000; width:448px; max-width:448px;margin:0 auto" class="deviceWidth">
                    <tr>
                        <td align="center" valign="top" width="448" bgcolor="#f0f3ff">
                            <table width="448" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td height="50" style="font-size:50px; line-height:50px">&nbsp;</td>
                                      </tr>
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#f0f3ff">
                                            <a href="#" target="_blank"><img src="https://www.keeninsites.com/assets/images/webp/keeninsite-logo-resize.webp" width="190" height="59" alt="Super Saving Yatra" title="" border="0" style="display:block" /></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="50" style="font-size:50px; line-height:50px">&nbsp;</td>
                                      </tr>
                                    <tr>
                                        <td align="center" valign="top" bgcolor="#f0f3ff" style=" color: #5d1775; font-family: sans-serif; font-size: 18px; font-weight: 600; ">
                                            Keen CRM Management
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20" style="font-size:20px; line-height:20px">&nbsp;</td>
                                    </tr>
                                   
                                      <tr><td width="448" style="padding:3px;background-color:#39b4e6;border-radius:8px 8px 0px 0px;max-width:calc(100vw - 48px)"></td></tr>
                                  
                                      <tr>
                                        <td align="center" valign="middle" height="70" bgcolor="#ffffff">
                                            <table width="85%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td height="30" style="font-size:30px; line-height:30px">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" valign="middle" style="font-size:18px;font-family:Poppins,Arial,sans-serif;font-weight:600;color:#323338;line-height:167%;font-weight:400">{{client_name}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="10" style="font-size:10px; line-height:10px">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" valign="middle" style="font-size:14px;font-family:Poppins,Arial,sans-serif;font-weight:600;color:#343537;line-height:167%;font-weight:400">You have been granted access to your account in the Keen Insites CRM. Please find the attached document with instructions and tips for how best to communicate with the Keen Insites team. 
                                                        Please log in with your username {{username}} and assigned password {{password}}. You will receive communications that you can answer by logging in, or by responding to this email. 
                                                        <br>
                                                        You may reply to this email to add a note in CRM. You must send this reply from your email address associated with the CRM. You may write END NOTE in the body of your email to terminate the note. This can be used to stop your email signature from showing up in the imported note. In addition, for your convenience, you may attach files in your email reply which will then be attached to the task in the CRM. The total message size including all text and attachments must not exceed approximately 20MB.
                                                        </td>
                                                    </tr> 
                                                    <tr>
                                                        <td height="10" style="font-size:10px; line-height:10px">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" valign="middle" style="font-size:14px;font-family:Poppins,Arial,sans-serif;font-weight:600;color:#969697;line-height:167%;font-weight:400">{{date}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="20" style="font-size:20px; line-height:20px">&nbsp;</td>
                                                    </tr>
                                                     
                                                    <tr>
                                                        <td height="20" style="font-size:20px; line-height:20px">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" bgcolor="#ffffff" valign="middle">
                                                           <table width="60%" border="0" cellspacing="0" cellpadding="2">
                                                              <tbody>
                                                                 
                                                                 <tr>
                                                                    <td bgcolor="#7a3096" align="center" height="30" valign="middle" style="font-size:16px;line-height:18px;font-family:Arial, sans-serif; color: #ffffff;">
                                                                       <a href="{{base_url}}login.php" style="font-size:16px;line-height:18px;font-family:Arial, sans-serif; color: #ffffff;text-decoration:n{{task}}one; display: block;"><strong>Reply on KeenCRM</strong></a> 
                                                                    </td>
                                                                 </tr>
                                                                
                                                              </tbody>
                                                           </table>
                                                        </td>
                                                     </tr>
                                                     <tr>
                                                        <td height="50" style="font-size:50px; line-height:50px">&nbsp;</td>
                                                      </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr><td width="448" style="padding:3px;background-color:#39b4e6;border-radius:0px 0px 8px 8px;max-width:calc(100vw - 48px)"></td></tr>
                                  
                                    <tr>
                                        <td height="50" style="font-size:50px; line-height:50px">&nbsp;</td>
                                      </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>';

// $description = make_image_urls_absolute($description, $base_url);
   // require_once('base_url.php');
   $date = date("d-m-Y");
// echo BASE_URL;

            $template = str_replace('{{client_name}}', $fname, $template);

            $template = str_replace('{{date}}', $date, $template);
            $template = str_replace('{{base_url}}', BASE_URL, $template);
            $template = str_replace('{{username}}', $username, $template);
            $template = str_replace('{{password}}', $password, $template);

            $mail->isHTML(true);
            $mail->Body = $template;

            $mail->send();
            echo 'Email has been sent';
            // header("Location:../client.php");
        } catch (Exception $e) {
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        header("Location:../create-panel.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
ob_flush();
?>
