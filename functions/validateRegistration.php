<?php
    // require("inc-dbconnect.php");
    require_once ("getLang.php");

    $name     = $_POST["name"];
    $username = $_POST["username"]; 
    $email    = $_POST["email"];
    $phone    = $_POST["phone"];
    $country  = $_POST["country"]; 
    $city     = $_POST["city"];
    $password = $_POST["password"];


    try {
        // Codigo que podria lanzar una excepcion    
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            throw new Exception("El valor no es un número válido.");
        }

        // Si llegamos aqui, el numero es valido
        $result = array('success' => true, 'dataError' => "0", "lang" => $lang);
        $result = json_encode($result);
        echo $result;
    } catch (Exception $e) {
        // Capturamos la excepcion y manejamos el error
        $result = array('success' => false, 'dataError' => $e->getMessage());
        $result = json_encode($result);
        echo $result;
    }