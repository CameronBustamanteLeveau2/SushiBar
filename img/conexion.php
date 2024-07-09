<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";

// Crear conexión
$conex = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conex->connect_error) {
    die("Connection failed: " . $conex->connect_error);
}
?>
