<?php

class DataBaseConection extends PDO {

    protected $conexion;

    public function __construct() {
        
        // Local
        $dbHost = 'localhost';
        $dbName = 'erutan';
        $dbUser = 'root';
        $dbPassword = '';
        // Produccion
        // $dbHost = 'localhost';
        // $dbName = 'u112313080_erutan';
        // $dbUser = 'u112313080_admin_erutan';
        // $dbPassword = '~vU7O&V%R=j=lNS=';

        $this->conexion = new PDO('mysql:host='.$dbHost.';dbname=' . $dbName . '', $dbUser, $dbPassword);
        // Realiza el enlace con la BD en utf-8
        $this->conexion->exec("set names utf8");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}