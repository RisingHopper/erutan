<?php
//Carga de las clases necesarias
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
    /* Username y password */
    $mail->Username   = 'theErutan5@gmail.com';             
    $mail->Password   = 'wdkg qncc xikr jkak';  
    /* Encriptación a usar ssl o tls, dependiendo cual usemos hay que utilizar uno u otro puerto */            
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   
    $mail->Port = "465";
  
    $mail->setFrom('theErutan5@gmail.com', 'Admin');      //Remitente
    $mail->addAddress($email);                            //Receptores

    //Contenido
    $mail->isHTML(true);                                 //Si enviamos HTML
    $mail->CharSet = "UTF8";    
    $mail->Subject = "Welcome to out newsletter!";      //Asunto
    
    $rutaArchivo = 'http://erutan.test/mailer/newsletterBienvenida/newsletterBienvenidaEn.html';
    $contenido = file_get_contents($rutaArchivo);
    $contenidoConNombre = str_replace('%s', $name, $contenido);
    $mail->Body = $contenidoConNombre;

    //Contenido alternativo en texto simple
    $mail->AltBody = '<b>Hi<b><br>Welcome to our newsletter!';

    //Enviar correo
    $mail->send();
    // echo '--enviado--';
} catch (Exception $e) {
    // echo '--error--';
}
?>