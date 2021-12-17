<?php

$server = 'localhost';
$username = 'imaxcoma_fran';
$password = '020500Francisco';
$database = 'imaxcoma_imaxdb';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    /* echo "conexion exitosa"; */
} catch (PDOException $e) {
    die('Conexion fallida: lo sentimos mucho.'.$e->getMessage());
}



?>