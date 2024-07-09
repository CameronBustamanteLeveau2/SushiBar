<?php
include("conexion.php");

if (isset($_POST['send'])) {
    if (!empty($_POST['email'])) {
        $email = trim($_POST['email']);
        $consulta = "INSERT INTO correo (correo) VALUES ('$email')";
        $resultado = $conex->query($consulta);

        if ($resultado) {
            echo "Data inserted successfully.";
        } else {
            echo "Error inserting data: " . $conex->error;
        }
    } else {
        echo "Please fill in the email field.";
    }
}
?>
