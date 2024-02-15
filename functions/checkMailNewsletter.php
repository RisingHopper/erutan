<?php

require_once ("inc-dbconnect.php");

try {
    $consulta = $db->prepare("SELECT COUNT(*) FROM newsletter WHERE email = :email");
    $consulta->bindParam(':email', $_POST["email"]);
    $consulta->execute();

    $resultado = $consulta->fetchColumn();

    $result = array('exist' => $resultado > 0, 'dataError' => "0");

} catch (PDOException $e) {
    $result = array('exist' => false, 'dataError' => "1");
    // echo "Error: " . $e->getMessage();
}
// $result = array('data' => true, 'dataError' => "0");
$result = json_encode($result);
echo $result;
?>