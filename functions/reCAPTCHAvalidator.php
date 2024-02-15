<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include("claves.php");
$token                  = $_POST["token"];
$url                    = "https://www.google.com/recaptcha/api/siteverify";
$recaptchaResponse      = file_get_contents( "$url?secret=$claves[privada]&response=$token" );
$json                   = json_decode($recaptchaResponse, true);
$recaptchaValidator     = $json["success"];
if( $recaptchaValidator === false ){
    /**Algo salio mal*/
    $result = array('success' => false, 'dataError' => "1");
    $result = json_encode($result);
    echo $result;
    die();
}
if( $json["score"] < 0.7 ){
    /**SPAM*/
    $result = array('success' => false, 'dataError' => "2");
    $result = json_encode($result);
    echo $result;
    die();
}
/**Todo OK*/
$result = array('success' => true, 'dataError' => "0");
$result = json_encode($result);
echo $result;
?>
