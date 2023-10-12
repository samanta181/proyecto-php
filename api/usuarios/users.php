<?php
include '../conexion/conexion.php';

// Permitir solicitudes desde cualquier origen
header("Access-Control-Allow-Origin: *");
// Permitir métodos HTTP específicos
header("Access-Control-Allow-Methods: GET");
// Permitir ciertos encabezados en la solicitud
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// Establecer el encabezado Content-Type como JSON
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["action"])) {
        $action = $_GET["action"];

        switch ($action) {
            case "listar":
                try {
                    echo json_encode(obtenerUsuarios());
                } catch (Exception $e) {
                    echo json_encode(["error" => $e->getMessage()]);
                }
                break;
            default:
                echo json_encode(["error" => "Acción no válida"]);
        }
    } else {
        echo json_encode(["error" => "Acción no especificada"]);
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Guardar un nuevo usuario en la base de datos
    $nombre_user = $_POST["nombre"];
    $apellido_paterno = $_POST["apeP"];
    $apellido_materno = $_POST["apeM"];
   
   
    try {
        guardarUsuarios($nombre_user, $apellido_paterno, $apellido_materno);
        echo json_encode(["mensaje" => "Usuario guardado correctamente"]);
    } catch (Exception $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
}



function obtenerUsuarios() {
    $conn = conectarDB();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
    
    $conn->close();
    return $users;
}

function guardarUsuarios($nombre, $apellido_paterno, $apellido_materno) {
    $conn = conectarDB();
    $sql = "INSERT INTO users (name_user, apep_user, apem_user) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nombre, $apellido_paterno, $apellido_materno);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
