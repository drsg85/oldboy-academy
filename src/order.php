<?php 
    $subject            = 'Заявка в академию';

    $str_json           = file_get_contents('php://input');
    $response           = json_decode($str_json, true);
    $content            = $response['content'];
    $__from             = $response['email'];

    $to  = "<info@oldboyacademy.com>, ";
    $to .= "info@oldboyacademy.com";

    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: Заявка в Академию <" . $__from . ">\r\n"; 
    $headers .= "Reply-To: info@oldboyacademy.com\r\n"; 

    mail($to, $subject, $content, $headers);
?>

// <?php

// // echo 'start<br>';

// require('./orders/mail/PHPMailerAutoload.php');
// require_once('./orders/mail/config.php');

// $mail = new PHPMailer;

// $mail->isSMTP();

// try {
//     $subject            = 'New request';
//     $str_json           = file_get_contents('php://input');
//     $response           = json_decode($str_json, true);
//     $content            = $response['content'];

//     $to                 = $__smtp['mailto'];
//     $mail->Host         = $__smtp['host'];
//     $mail->SMTPDebug    = $__smtp['debug'];
//     $mail->SMTPAuth     = $__smtp['auth'];
//     $mail->Port         = $__smtp['port'];
//     $mail->Username     = $__smtp['username'];
//     $mail->Password     = $__smtp['password'];

//     $mail->AddReplyTo($__smtp['addreply'], $__smtp['nickname']);
//     $mail->AddAddress($to);
//     $mail->SetFrom($__smtp['addreply'], $__smtp['nickname']);

//     $mail->isHTML(true);
//     $mail->Subject = utf8_encode(htmlspecialchars($subject));
//     $mail->Body = $content;
//     $mail->Send();

// } catch(phpmailerException $e) {
//     echo $e->errorMessage();
// } catch(Exception $e) {
//     echo $e->getMessage();
// }

// // echo $subject . '<br>';
// // echo $content . '<br>';

// echo $content;

// 