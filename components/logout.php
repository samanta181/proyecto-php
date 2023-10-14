<?php
session_start();

// Comprueba si existe una sesión activa
if (isset($_SESSION['user'])) {
    // Destruye la sesión
    session_destroy();

    // Redirige a la página de inicio de sesión o a donde desees
    header("Location: ../login");
    exit();
} else {
    // Si no hay una sesión activa, simplemente redirige a la página de inicio de sesión
    header("Location: ../login");
    exit();
}
?>
