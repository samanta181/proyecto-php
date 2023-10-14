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

function obtenerPropietario() {
    $conn = conectarDB();
    $sql = "SELECT * FROM propietarios";
    $result = $conn->query($sql);
    $propietario = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $propietario[] = $row;
        }
    }
    
    $conn->close();
    return $propietario;
}
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["action"])) {
        $action = $_GET["action"];

        switch ($action) {
            case "listarM":
                try {
                    echo json_encode(obtenerMascotas());
                } catch (Exception $e) {
                    echo json_encode(["error" => $e->getMessage()]);
                }
                break;
           case "listarP":
                    try {
                        echo json_encode(obtenerPropietario());
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
    $nombre_dueño = $_POST["nombre_dueño"];
    $apellido_paterno_dueño = $_POST["apellido_paterno_dueño"];
    $apellido_materno_dueño = $_POST["apellido_materno_dueño"];
    $dni = $_POST["dni"];
    $celular = $_POST["celular"];
    $domicilio = $_POST["domicilio"];
   
   
    try {
        guardarDueños($nombre_dueño, $apellido_paterno_dueño, $apellido_materno_dueño, $dni, $celular,$domicilio);
        echo json_encode(["mensaje" => "Propietario guardado correctamente"]);
    } catch (Exception $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
}





function guardarDueños($nombre_dueño, $apellido_paterno_dueño, $apellido_materno_dueño, $dni, $celular, $domicilio) {
    $conn = conectarDB();
    $sql = "INSERT INTO propietarios (nombre_dueño, ape_pat_dueño, ape_mat_dueño, dni_dueño, celular_dueño, domicilio_dueño) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nombre_dueño, $apellido_paterno_dueño, $apellido_materno_dueño, $dni, $celular, $domicilio);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}


function guardarMascotas($nombre_dueño, $apellido_paterno_dueño, $apellido_materno_dueño, $dni, $celular, $domicilio) {
    $conn = conectarDB();
    $sql = "INSERT INTO mascotas (nombre_mascota, sexo, especie, dni_propietario, edad_mascota, tamanio_mascota) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nombre_dueño, $apellido_paterno_dueño, $apellido_materno_dueño, $dni, $celular, $domicilio);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
