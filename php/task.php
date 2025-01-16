<?php
ob_start();
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once("config.php");

$task = rand(1000000, 9999999999);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // PHPMailer installed via Composer

if (isset($_POST['submit'])) {
    $username12 = $_SESSION['name'];
    $title = $_POST['title'];
    $project = $_POST['project'];
    $start_date = $_POST['start_date'];
    $due_date = $_POST['due_date'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));
    $repeat_interval = $_POST['interval'];
    $user_assign = count($_POST['user_assign']);
    $task_category_id = $_POST['task_cateogry'];


    $sql_task_search = "SELECT * from task_category where id='$task_category_id'";
    $task_category_result = mysqli_query($conn, $sql_task_search);
    $rows_saerch_cat_row = mysqli_fetch_assoc($task_category_result);

    $task_category = $rows_saerch_cat_row["cat_name"];
    $next_run_date = date('Y-m-d H:i:s', strtotime($start_date . " + $repeat_interval days"));



    $project_sql_check = "SELECT * FROM projects where project_id='$project'";
    $pscr = mysqli_query($conn, $project_sql_check);
    $ps = mysqli_fetch_assoc($pscr);
    $prna = $ps["project_name"];

    for ($i = 0; $i < $user_assign; $i++) {
        $assigntous = $_POST['user_assign'][$i];

        // Insert assigned task
        $sql = "INSERT INTO assign_task (`task_ticket`, `emp_id`) VALUES ('$task', '$assigntous')";
        $result = mysqli_query($conn, $sql);

        // Fetch user email
        $mail_fetch = "SELECT * FROM admin where id = '$assigntous'";
        $mail_result = mysqli_query($conn, $mail_fetch);
        $mail_row = mysqli_fetch_assoc($mail_result);
        $to = $mail_row["email"];

        // PHPMailer setup
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'praveenrajgtb@gmail.com';
            $mail->Password = 'mabc ycus hqhq vbcw';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Set email details
            $mail->setFrom('your_email@example.com', "$username12 Assign You New Task");
            $mail->addAddress($to);
            $mail->addCC('pavan@keensites.com');
            $mail->Subject = $title;

            // Email HTML template
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
                                                        <td align="left" valign="middle" style="font-size:18px;font-family:Poppins,Arial,sans-serif;font-weight:600;color:#323338;line-height:167%;font-weight:400">{{task_title}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="10" style="font-size:10px; line-height:10px">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" valign="middle" style="font-size:14px;font-family:Poppins,Arial,sans-serif;font-weight:600;color:#343537;line-height:167%;font-weight:400">{{project}} >  {{task_category}}
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
                                                        <td align="left" valign="middle" style="font-size:14px;font-family:Poppins,Arial,sans-serif;font-weight:600;color:#3a3a3a;line-height:20px;font-weight:400">
                                                        {{task_description}}
                                                            
                                                        </td>
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
                                                                       <a href="{{base_url}}/task-details.php?ticket={{task}}" style="font-size:16px;line-height:18px;font-family:Arial, sans-serif; color: #ffffff;text-decoration:n{{task}}one; display: block;"><strong>Reply on KeenCRM</strong></a> 
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
// function make_image_urls_absolute($content) {
//     $base_url = "https://jamesl571.sg-host.com"; // Aapke server ka base URL
//     return preg_replace('/src="(?!http)([^"]+)"/', 'src="' . $base_url . '/$1"', $content);
// }
// $base_url = "https://jamesl571.sg-host.com";
// $description = make_image_urls_absolute($description);
   
   $date = date("d-m-Y");


            $template = str_replace('{{task_title}}', $title, $template);
            $template = str_replace('{{task_description}}', $description, $template);
            $template = str_replace('{{start_date}}', $start_date, $template);
            $template = str_replace('{{due_date}}', $due_date, $template);
            $template = str_replace('{{task_category}}', $task_category, $template);
            $template = str_replace('{{project}}', $prna, $template);
            $template = str_replace('{{priority}}', $priority, $template);
            $template = str_replace('{{date}}', $date, $template);
            $template = str_replace('{{task}}', $task, $template);
            $template = str_replace('{{base_url}}', $base_url, $template);

            $mail->isHTML(true);
            $mail->Body = $template;

            $mail->send();
            echo 'Email has been sent';
        } catch (Exception $e) {
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    // Insert task
    $sql1 = "INSERT INTO task (`project_id`, `start_date`, `due_date`, `priority`, `status`, `description`, `title`, `task_ticket`, `next_run_date`, `repeat_interval`, `category`) VALUES ('$project', '$start_date', '$due_date', '$priority', '$status', '$description', '$title', '$task', '$next_run_date', '$repeat_interval', '$task_category')";
    $result1 = mysqli_query($conn, $sql1);

    if ($result1) {
        header("Location:../task.php");
    }
}
?>
