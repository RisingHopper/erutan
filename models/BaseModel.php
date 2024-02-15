<?php
require ("DataBaseConection.php");
class BaseModel extends DataBaseConection {

    public function consultarUsuario($nombreUsuario) {
        $consulta = "SELECT * FROM users_web WHERE username=:nombreUsuario";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':nombreUsuario', $nombreUsuario);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function consultarUsuarioId($nombreUsuario) {
        $consulta = "SELECT * FROM users_web WHERE id=:nombreUsuario";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':nombreUsuario', $nombreUsuario);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarUsuario($idUser, $nombreCompleto, $telefono,$nombreUsuario,$email, $ciudad, $pais){
        $consulta="UPDATE users_web SET  name=:nombreCompleto, phone=:telefono, username=:nombreUsuario, email=:email, city=:ciudad, country=:pais WHERE id=:idUser";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':nombreCompleto', $nombreCompleto);
        $result->bindParam(':telefono', $telefono);
        $result->bindParam(':email', $email);
        $result->bindParam(':nombreUsuario', $nombreUsuario);
        // $result->bindParam(':fotoPerfil', $fotoPerfil);
        $result->bindParam(':idUser', $idUser);
        $result->bindParam(':ciudad', $ciudad);
        $result->bindParam(':pais', $pais);
        // $result->bindParam(':contrasenya', $newPassword);
        $result->execute();
        return $result;
    }
   
    public function actualizarImagenUsuario($idUser, $imagen){
        $consulta="UPDATE users_web SET  profile_picture=:fotoPerfil WHERE id=:idUser";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUser', $idUser);
        $result->bindParam(':fotoPerfil', $imagen);
        $result->execute();
        return $result;
    }


    public function insertarPuntos($idUsuario, $puntos){
        $consulta="INSERT INTO ranking_users (id_user, points) VALUES (:idUser, :points)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUser', $idUsuario);
        $result->bindParam(':points', $puntos);
        $result->execute();
        return $result;
    }

    public function actualizarPasswordUsuario($idUser, $password){
        $consulta="UPDATE users_web SET  password=:contrasenya WHERE id=:idUser";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':idUser', $idUser);
        $result->bindParam(':contrasenya', $password);
        $result->execute();
        return $result;
    }



}

    
?>