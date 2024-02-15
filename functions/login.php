<?php

session_start();
require("../models/BaseModel.php");
require("passwordSecurity.php");

$user=$_POST["usuario"];
$pass=$_POST["contrasenya"];

$baseModel = new BaseModel();
$userData = $baseModel->consultarUsuario($user);


if($baseModel->consultarUsuario($user)){
    if(verificarContrasena($pass, $userData['password'])){
        $_SESSION['idUser'] = $userData['id'];
        $_SESSION['nombreUsuario'] = $userData['username'];
        $_SESSION['fotoPerfil'] = $userData['profile_picture'] ;
        $_SESSION['nivel_usuario'] = $userData['lvl']; 
        header('Location: ../index.php');
    }else{
        header('Location: ../index.php?user=ko');
    }
}else{
    header('Location: ../index.php?user=ko');
}

?>