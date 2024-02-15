<?php

session_start();
require("../models/BaseModel.php");

$baseModel = new BaseModel();
$userData = $baseModel->consultarUsuario($user);


if($baseModel->consultarUsuarioId($user)){
    if(verificarContrasena($pass, $userData['password'])){
        $_SESSION['idUser'] = $userData['id'];
        $_SESSION['nombreUsuario'] = $userData['username'];
        // $_SESSION['fotoPerfil'] = $userData['fotoPerfil'] ;
        $_SESSION['nivel_usuario'] = $userData['lvl']; 
        header('Location: ../index.php');
    }else{
        header('Location: ../index.php?user=ko');
    }
}else{
    header('Location: ../index.php?user=ko');
}

?>