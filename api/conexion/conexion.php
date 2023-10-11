<?php
function conectarDB() {
    $servername = "localhost"; // Cambia esto por el nombre de tu servidor MySQL
    $username = "root"; // Cambia esto por tu nombre de usuario de MySQL
    $password = "12345678"; // Cambia esto por tu contraseña de MySQL
    $database = "erp--php"; // Cambia esto por el nombre de tu base de datos
    
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
?>
