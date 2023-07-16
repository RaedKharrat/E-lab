<?php

include_once(__DIR__ . "/../services/ReponseService.php");
include_once(__DIR__ . "/../Entities/Reponse.php");
require_once __DIR__ . '/../vendor/autoload.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ayariwiem27@gmail.com';             // SMTP username
    $mail->Password = 'huiunglptwmoecky';              // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ayariwiem27@gmail.com', 'Sound Space');
    $mail->addAddress('wiem.ayari@esprit.tn', 'Recipient Name');     // Add a recipient
    $mail->addReplyTo('wiem.ayari@esprit.tn', 'Sound Space');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'SoundSpace Notification';
    $mail->Body    = '<table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tr>
        <td align="center" bgcolor="#frf3f1" style="padding: 40px 0 30px 0;">
            
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px;">
            <p>Hello,</p>
            <p>This is an a reponse for your reclamation </p>
            <p>'.$_POST["description"].'</p>
            <p>Dear wiem</p>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f8f8f8" style="padding: 20px 30px 20px 30px; font-family: Arial, sans-serif; font-size: 12px; line-height: 18px;">
            <p>If you no longer wish to receive these emails, you can <a href="#">unsubscribe</a> at any time.</p>
            <p>&copy; 2023 Example Company. All rights reserved.</p>
        </td>
    </tr>
</table>
';

    $mail->send();
    echo 'Message has been sent succesfuly ';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}







?>