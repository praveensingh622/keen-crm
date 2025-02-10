<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';  
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

$projectRoot = rtrim(dirname($_SERVER['PHP_SELF']), '/php//');
define('BASE_URL', $protocol . '://' . $_SERVER['HTTP_HOST'] . $projectRoot . '/');


if (isset($_GET['email'])) {
	

	$to = $_GET['email'];
	$client_name = $_GET['name'];
 $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'praveenrajgtb@gmail.com';
            $mail->Password = 'mabc ycus hqhq vbcw';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->setFrom('your_email@example.com', "$client_name Thanks For Connecting Us");
            $mail->addAddress($to);
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
                                                        Please log in with your assigned password (password). You will receive communications that you can answer by logging in, or by responding to this email. 
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

   
   $date = date("d-m-Y");


            $template = str_replace('{{client_name}}', $client_name, $template);

            $template = str_replace('{{date}}', $date, $template);
            $template = str_replace('{{base_url}}',BASE_URL, $template);

            $mail->isHTML(true);
            $mail->Body = $template;

            $mail->send();
            echo 'Email has been sent';
            header("Location:../client.php");
        } catch (Exception $e) {
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

}


?>