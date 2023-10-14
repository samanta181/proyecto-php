<!-- <?php
        require_once('../api/conexion/conexion.php');
        ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP-EMPRESAS</title>
    <link rel="icon" href="./img/iconovet.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
       
       

        .con {
            background-color: #d9d9db;

        }

        .na {
            color: black;

        }
        .na:hover {
         color: black; 
         font-weight: bold;
        }

       
    </style>
</head>

<body>

    <?php include('../components/navbar.php') ?>

    <?php include('../components/cargador.php') ?>

    <div class="container con" style="max-width: 95%;">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link na" onclick="mostrarTab('datos-personales')">Datos de Empresa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link na" onclick="mostrarTab('documentos')">Datos de la Mascota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link na" onclick="mostrarTab('referencias')">Referencias</a>
            </li>
        </ul>


        <div class="tab-content contenedor-form">
            <div id="datos-personales" class="tab-pane fade">
            <?php include('../components/mascotas/datosPropietario.php') ?>
               
            </div>
            <div id="documentos" class="tab-pane fade">
               
              
                <?php include('../components/mascotas/datosMascotas.php') ?>
            </div>
            <div id="referencias" class="tab-pane fade">
                <h3>Referencias</h3>
                <!-- Contenido de la pestaña Referencias -->
            </div>
        </div>
    </div>



    <?php include('../components/footer.php') ?>
    <script type="text/javascript">
        function mostrarTab(tabId) {
            // Ocultar todas las pestañas
            console.log(tabId);
            var tabs = document.getElementsByClassName("tab-pane");
            for (var i = 0; i < tabs.length; i++) {
                tabs[i].style.display = "none";
            }

            // Mostrar la pestaña seleccionada
            var tabToShow = document.getElementById(tabId);
            if (tabToShow) {
                tabToShow.style.display = "contents";
            }
        }
    </script>
     <script type="text/javascript" src="js/mascotas.js"></script>
</body>

</html>