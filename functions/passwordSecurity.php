<?php 

function encriptarContrasena($contrasena) {
    $contrasenaEncriptada = password_hash($contrasena, PASSWORD_BCRYPT);
    return $contrasenaEncriptada;
}


function verificarContrasena($contrasena, $contrasenaEncriptada) {
    return password_verify($contrasena, $contrasenaEncriptada);
}

?>