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
                    echo json_encode(obtenerMascotas());
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
}

function obtenerMascotas() {
    $conn = conectarDB();
    $sql = "SELECT * FROM mascotas";
    $result = $conn->query($sql);
    $mascota = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $mascota[] = $row;
        }
    }
    
    $conn->close();
    return $mascota;
}
?>
