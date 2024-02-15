<?php
session_start();
require("../models/BaseModel.php");

$name     = $_POST["nombreCompleto"];
$phone     = $_POST["phone"];
$username = $_POST["username"];
$email    = $_POST["email"];
$country  = $_POST["pais"];
$city     = $_POST["ciudad"];

$idUser   = $_SESSION['idUser'];


$baseModel = new BaseModel();

$baseModel->actualizarUsuario($idUser, $name, $phone, $username, $email, $city, $country);
header('Location: ../pages/userProfile.php?user='.$idUser.'&update=ok');



?>