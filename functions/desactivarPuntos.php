<?php 

session_start();
if(!isset($_SESSION['nivel_usuario'])){
    header ("location:../index.php");
}else{
    $_SESSION['questionCard']="false";
    header ("location:../index.php");
}

?>