<?php
session_start();
require("../models/BaseModel.php");

$idUser   = $_SESSION['idUser'];

$errores=array();
$extensiones=["jpg","png","webp"];
$directorio="../assets/upload/users";
// $directorio="../../app/public/uploads/user_web_profile_pictures";
$tamanyo=2000000;


function cFile(string $nombre, array $errores, array $extensionesValidas, string $directorio, int  $max_file_size)
{

    // En cualquier otro caso se comprueban los errores del servidor 
    $nombreArchivo = strip_tags($_FILES["$nombre"]['name']);


    /* Guardamos nombre del fichero en el servidor */
    $directorioTemp = $_FILES["$nombre"]['tmp_name'];
    /* Calculamos el tamaño del fichero */
    $tamanyoFile = filesize($directorioTemp);
    
    /* Extraemos la extensión del fichero, desde el último punto.*/
    $extension = strtolower(pathinfo($nombreArchivo, PATHINFO_EXTENSION));

    /* Comprobamos el tamaño del archivo  */
    if ($tamanyoFile > $max_file_size) {
        print_r("La imagen debe de tener un tamaño inferior a $max_file_size kb");
        return false;
    }

    /* Comprobamos si el directorio pasado es válido */
    if (is_dir($directorio)) {

        $nombreArchivo = is_file($directorio . DIRECTORY_SEPARATOR . $nombreArchivo) ? time() . $nombreArchivo : $nombreArchivo;
        $nombreCompleto = $directorio . DIRECTORY_SEPARATOR . $nombreArchivo;
        
        /* Movemos el fichero a la ubicación definitiva.*/
        if (move_uploaded_file($directorioTemp, $nombreCompleto)) {
            /* Si todo es correcto devuelve la ruta y nombre del fichero como se ha guardado */
            return $nombreCompleto;
        } else {
            $errores["$nombre"] = "Ha habido un error al subir el fichero";
            return false;
        }
    }else {
        $errores["$nombre"] = "Ha habido un error al subir el fichero";
        return false;
    }
}


$imagen =cFile("fotoPerfil",$errores,$extensiones,$directorio,$tamanyo);
$_SESSION['fotoPerfil']=$imagen;

$baseModel = new BaseModel();

$baseModel->actualizarImagenUsuario($idUser,$imagen);
header('Location: ../pages/userProfile.php?user='.$idUser.'&update=ok');


?>