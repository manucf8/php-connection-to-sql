<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "tarea1";
$connection = "";
 
try {
    $db = new PDO("mysql:host=$db_server;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos. <br>";

} catch (PDOException $e) {
    echo "No se pudo conectar a la base de datos: " . $e->getMessage();
}