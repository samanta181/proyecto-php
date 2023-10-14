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
                <label for="mascota">Nombre:</label>
                <input type="text" class="form-control" id="mascota" name="mascota" placeholder="Ingrese su nombre">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="especie">Especie:</label>
                <input type="text" class="form-control" id="especie" name="especie" placeholder="Ingrese su apellido paterno">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese su apellido materno">
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4">
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Ingrese su sexo">
            </div>
        </div>
        <div class=" col-md-4 form-group">
            <label for="tamaño">Tamaño:</label>
            <input type="date" class="form-control" id="tamaño" name="tamaño">
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="dni_dueño">Dueño:</label>
                <input type="text" class="form-control" id="dni_dueño" name="dni_dueño">
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




    <button onclick="registrarMascotas()" class="btn">
        <i class="fas fa-save"></i> Guardar
    </button>
</body>

</html>