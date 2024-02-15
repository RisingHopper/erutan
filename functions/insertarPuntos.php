<?php 
session_start();
require("../models/BaseModel.php");


if(!isset($_SESSION['nivel_usuario'])){
    header ("location:../index.php");
}else{
    $_SESSION['questionCard']="false";
    $id_usuario=$_SESSION["idUser"];
    $puntos=1;

    $baseModel = new BaseModel();
    $baseModel->insertarPuntos($id_usuario,$puntos);
    header ("location:../index.php");
}

?>