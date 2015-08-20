<?php
  require 'PHPMailerAutoload.php';

  error_reporting(E_ALL);
  ini_set('display_errors', '1');

  $email = $_POST['email1'];
  $message = $_POST['message1'];
  $files = $_POST['files1'];

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 3;
  $mail->Host = 'email-smtp.us-west-2.amazonaws.com'; // Your SMTP PArameter
  $mail->Port = 587; // Your Outgoing Port
  $mail->SMTPAuth = true; // This Must Be True
  $mail->Username = 'AKIAJDXG47X3YWVEDK2Q'; // Your Email Address
  $mail->Password = 'AknjLljrfzLMuqUo7U94zlwBPzIRHpJBWXUVc2L/20K4'; // Your Password
  $mail->SMTPSecure = 'tls'; // Check Your Server's Connections for TLS or SSL

  $mail->From = 'kglover29@gmail.com';
  $mail->FromName = 'Dev';
  $mail->AddAddress($email);

  $mail->IsHTML(true);

  $mail->Subject = 'Analysis Shuttle Tool';
  if(is_array($files)) {
	$mail->AddAttachment($files['attachmentFile']['tmp_name'],$files['attachmentFile']['name']); 
  }

  $mail->Body = $mail_body = '<html> <body>';
  $mail_body = "<b>Hello Admin,</b><br><br>You have got email from your website.<br><br>";
  $mail_body .= '<table style="" cellpadding="3">';
  $mail_body .= "
                  <tr>
                  <td width='50'> <strong> Name </strong> </td>
                  <td width='5'> : </td>
                  <td>Kevin</td>
                  </tr>
                  <tr>
                  <td> <strong> Email </strong> </td>
                  <td> : </td>
                  <td>kglover29@gmail.com</td>
                  </tr>
                  <tr>
                  <td> <strong> Message </strong> </td>
                  <td> : </td>
                  <td>This is a test</td>
                  </tr>
                  </table>
                  </body> </html>";

  if(!$mail->Send())
  {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  }
  else
  {
      echo 'success';
  }
 ?>
