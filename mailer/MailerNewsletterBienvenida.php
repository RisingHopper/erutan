<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Crear una instancia. Con true permitimos excepciones
$mail = new PHPMailer(true);

try {
    // $email="joelbrayan77@gmail.com";
    $mail->isSMTP();                                           //Para usaar SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Nuestro servidor SMTMP smtp.gmail.com en caso de usar gmail
    $mail->SMTPAuth   = true;    
    /* SMTP username y password */
    $mail->Username   = 'theErutan5@gmail.com';             
    $mail->Password   = 'wdkg qncc xikr jkak';  
    /* Encriptación a usar ssl o tls, dependiendo cual usemos hay que utilizar uno u otro puerto */            
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   
    $mail->Port = "465";

    $mail->setFrom('theErutan5@gmail.com', 'Admin');         //Remitente
    $mail->addAddress($email);                               //Receptor

    //Contenido
    $mail->isHTML(true);                                     //Si enviamos HTML
    $mail->CharSet = "UTF8";    
    $mail->Subject = "¡Bienvenid@ a nuestra newsletter!";    //Asunto

    $htmlRoute = 'http://erutan.test/mailer/newsletterBienvenida/newsletterBienvenida.html';
    $content = file_get_contents($htmlRoute);
    $content = str_replace('%s', $name, $content);
    $mail->Body    = $content;

    //Contenido alternativo en texto simple
    $mail->AltBody = '<b>Hola<b><br>Bienvenido a nuestra Newsletter';

    //Enviar correo
    $mail->send();
    // echo '--enviado--';
} catch (Exception $e) {
    // echo "--error--";    
}
?>