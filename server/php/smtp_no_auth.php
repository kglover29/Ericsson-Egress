<?php

    require 'PHPMailerAutoload.php';

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //$name = $_POST["name"];
    $email = $_POST['email1'];
    //$subject = $_POST["subject"];
    //$message = $_POST["message"];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug = 3;
    $mail->Host = "tls.smtp.gmail.com:587"; // Your SMTP PArameter
    $mail->Port = 587; // Your Outgoing Port
    $mail->SMTPAuth = true; // This Must Be True
    $mail->Username = "moglo.wedding@gmail.com"; // Your Email Address
    $mail->Password = "DizabethJones8920"; // Your Password
    $mail->SMTPSecure = 'tls'; // Check Your Server's Connections for TLS or SSL

    $mail->From = "moglo.wedding@gmail.com";
    $mail->FromName = "Kevin G";
    $mail->AddAddress($email);

    $mail->IsHTML(true);

    $mail->Subject = "Analysis Shuttle Tool";

    $mail->Body = $mail_body = "<html> <body>";
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
