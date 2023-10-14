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
                <label for="nombre_dueño">Nombre:</label>
                <input type="text" class="form-control" id="nombre_dueño" name="nombre_dueño" placeholder="Ingrese su nombre">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="ape_paterno_dueño">Apellido Paterno:</label>
                <input type="text" class="form-control" id="ape_paterno_dueño" name="ape_paterno_dueño" placeholder="Ingrese su apellido paterno">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="ape_mater_dueño">Apellido Materno:</label>
                <input type="text" class="form-control" id="ape_mater_dueño" name="ape_mater_dueño" placeholder="Ingrese su apellido materno">
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                <label for="dni">Dni:</label>
                <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese su dni">
            </div>
        </div>
        <div class=" col-md-4 form-group">
            <label for="celular">Celular:</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Ingrese su celular">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ingrese su domicilio">
            </div>
        </div>

    </div>
    <!-- <div class="row">
        <div class="col-md-4">
            <div>
                <label for="direccion">Email:</label>
                <input type="text" class="form-control" id="direccion" placeholder="Ingrese su direccion">
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <label for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" placeholder="Ingrese su celular">
            </div>
        </div>
    </div> -->



    <!-- Agrega más campos de formulario según tus necesidades -->




    <button onclick="registrarPropietario()" class="btn">
        <i class="fas fa-save"></i> Guardar
    </button>
</body>

</html>