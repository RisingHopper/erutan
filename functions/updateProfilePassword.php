<?php
session_start();
require("../models/BaseModel.php");
require("passwordSecurity.php");

$password     = $_POST["newPassword"];
$password = encriptarContrasena($password);
$idUser       = $_SESSION['idUser'];

$baseModel = new BaseModel();
$baseModel->actualizarPasswordUsuario($idUser, $password);
header('Location: ../pages/userProfile.php?user='.$idUser.'&update=ok');

?>