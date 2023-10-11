<!-- <?php
        require_once('../api/conexion/conexion.php');
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP-USUARIOS</title>
    <link rel="icon" href="./img/iconovet.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <?php include('../components/navbar.php') ?>

    <div class="container" style="max-width: 100%;">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#datos-personales">Datos Personales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#documentos">Documentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#referencias">Referencias</a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="datos-personales" class="tab-pane fade">
            <?php include('../components/usuarios/datosPersonales.php') ?>
                <!-- Contenido de la pestaña Datos Personales -->
            </div>
            <div id="documentos" class="tab-pane fade">
                <h3>Documentos</h3>
                <!-- Contenido de la pestaña Documentos -->
            </div>
            <div id="referencias" class="tab-pane fade">
                <h3>Referencias</h3>
                <!-- Contenido de la pestaña Referencias -->
            </div>
        </div>
    </div>

    <?php include('../components/footer.php') ?>
    <script type="text/javascript" src="js/usuarios.js"></script>
</body>

</html>