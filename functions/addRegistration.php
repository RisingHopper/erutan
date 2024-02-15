<?php

    require("inc-dbconnect.php");
    require("passwordSecurity.php");
    require_once ("getLang.php");

    $name  = $_POST["name"];
    $username = $_POST["username"]; 
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $country = $_POST["country"]; 
    $city = $_POST["city"];
    $password = $_POST["password"];
    $password = encriptarContrasena($password);

    $sql = "INSERT INTO users_web (name, username, email, phone, country, city, password) VALUES ( :name, :username, :email, :phone, :country, :city, :password )";
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':password', $password);
        $response = $stmt->execute();
        $result = array('success' => true, 'dataError' => "0", "lang" => $lang);
        $result = json_encode($result);
        echo $result;
    } catch(PDOException $e) {
        $result = array('success' => false, 'dataError' => $e->getMessage());
        $result = json_encode($result);
        echo $result;
    }




    
   