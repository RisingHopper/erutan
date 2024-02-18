<?php
//Carga de las clases necesarias
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// include "/../../modelo/classBiblioteca.php";


//Crear una instancia. Con true permitimos excepciones
$mail = new PHPMailer(true);

try {
    //Valores dependientes del servidor que utilizamos
    
    $mail->isSMTP();                                           //Para usaar SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Nuestro servidor SMTMP smtp.gmail.com en caso de usar gmail
    $mail->SMTPAuth   = true;    
    /* 
    * SMTP username y password Poned los vuestros. La contraseña es la que nos generó GMAIL
    */
    $mail->Username   = 'theErutan5@gmail.com';             
    $mail->Password   = 'wdkg qncc xikr jkak';    
    /*
    * Encriptación a usar ssl o tls, dependiendo cual usemos hay que utilizar uno u otro puerto
    */            
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   
    $mail->Port = "465";
    /**TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`                         
     * $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     * $mail->Port       = 587;  
     */


    /*
    Receptores y remitente
    */
//Remitente
    $mail->setFrom('theErutan5@gmail.com', 'Admin');
//Receptores. Podemos añadir más de uno. El segundo argumento es opcional, es el nombre{

    foreach($allEmails as $valor){
        $mail->addAddress($valor['email']);
    }
    //$mail->addAddress(allEmails($allEmails));     //Add a recipient
    //$mail->addAddress('ejemplo@example.com'); 

    //Copia
    //$mail->addCC('cc@example.com');
    //Copia Oculta
    //$mail->addBCC('bcc@example.com');

    //Archivos adjuntos
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Contenido
    //Si enviamos HTML
    $mail->isHTML(true);    
    $mail->CharSet = "UTF8";    
    //Asunto
    $mail->Subject = $params['noticias']['asunto'];
    //Conteido HTML
    $mail->Body    = '<body style="background-color:rgb(0,0,0);margin:0;padding:50px">
    <img src="http://vps793825.ovh.net/~jquispe/logoWhite.png" style="width:300px;">
    <div style="color:white; font-size:22px">'.$params["noticias"]["mensaje"].'
    </div>
    <br>
    <img src="https://ci6.googleusercontent.com/proxy/Kn75a8ifoSTLQ8WL-qk9-YEaWv_N-mQh2ICAisKMq3RK2Cp1nFzZd9I_rVQVsjDCQBcLR3lHC0F5Ym1ILZ9DJdg=s0-d-e1-ft#http://vps793825.ovh.net/~jquispe/Captura.webp" width="100%" style="margin-top:30px" class="CToWUd" data-bit="iit">
    <hr>
    <p style="text-align:center;color:#ff74fc;font-size:18px">With love, The Erutan</p>
 
</body>'
;
    
    
    
    
    
    
    //Contenido alternativo en texto simple
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //Enviar correo
    $mail->send();
    echo 'El mensaje se ha enviado con exito';
} catch (Exception $e) {
    echo "El mensaje no se ha enviado: {$mail->ErrorInfo}";
    
}
?>