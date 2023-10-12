<!-- Contenido de la pestaña Datos Personales -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/tablaRegistro.css" />
</head>

<body>





    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="nombre_user">Nombre:</label>
                <input type="text" class="form-control" id="nombre_user" name="nombre_user" placeholder="Ingrese su nombre">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Ingrese su apellido paterno">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Ingrese su apellido materno">
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                <label for="dni">Dni:</label>
                <input type="text" class="form-control" id="dni" placeholder="Ingrese su dni">
            </div>
        </div>
        <div class=" col-md-4 form-group">
            <label for="cumpleanos">Fecha de Cumpleaños:</label>
            <input type="date" class="form-control" id="cumpleanos">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="text" class="form-control" id="edad">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <div>
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" placeholder="Ingrese su direccion">
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Ingrese su celular">
            </div>
        </div>
    </div>



    <!-- Agrega más campos de formulario según tus necesidades -->




    <button onclick="registrarUsuario()" class="btn">
        <i class="fas fa-save"></i> Guardar
    </button>
</body>

</html>