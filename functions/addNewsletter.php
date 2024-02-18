<?php

    require("inc-dbconnect.php");
    require_once ("getLang.php");


    $name  = $_POST["name"];
    $phone = $_POST["phone"]; 
    $email = $_POST["email"];
    $lang = $_POST["idioma"];
    

    $sql = "INSERT INTO newsletter (name, email, phone) VALUES ( :name, :email, :phone )";
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $response = $stmt->execute();
        $result = array('success' => true, 'dataError' => "0", "lang" => $lang);
        $result = json_encode($result);

        if($lang=='en'){
            require ('../mailer/MailerNewsletterBienvenidaEn.php');
        }else{
            require ('../mailer/MailerNewsletterBienvenida.php');
        }

        echo $result;
    } catch(PDOException $e) {
        $result = array('success' => false, 'dataError' => $e->getMessage());
        $result = json_encode($result);
        echo $result;
    }