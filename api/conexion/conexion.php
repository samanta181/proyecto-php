<?php
$servername = "localhost"; // Cambia esto por el nombre de tu servidor MySQL
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = "12345678"; // Cambia esto por tu contraseña de MySQL
$database = "erp--php"; // Cambia esto por el nombre de tu base de datos

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos!";
}

// A partir de aquí, puedes realizar consultas a la base de datos utilizando esta conexión

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>
