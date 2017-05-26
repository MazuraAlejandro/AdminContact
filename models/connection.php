<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=contact;host=127.0.0.1';
$user = 'root';
$pass = '';

try {
    $con = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>