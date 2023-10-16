<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP-LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">

    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&family=Young+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            background-image: linear-gradient(rgba(64, 64, 64, 0.4), rgba(64, 64, 64, 0.4)), url('./img/fondo.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #login-box {
            background-color: rgba(23, 73, 23, 0.3);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            height: 400px;
            align-items: center;
            justify-content: center;


        }

        .header {
            background-color: #86aa6e;
            /* Color del "techito" */
            height: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin-bottom: 80px;


        }

        .mb-3 {

            display: flex;

            padding-bottom: 26px;
            /* Espacio entre los campos */
        }

        .mb-3 label {
            width: 180px;
            /* Ancho del label (ajustar según tus necesidades) */
            text-align: right;
            /* Alineación a la derecha del texto del label */
            margin-right: 10px;
            /* Espacio entre el label y el input */
        }

        .form-label {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        h1 {

            font-family: 'Young Serif', serif;
            color: white;
            font-size: 76px;
            /* Tamaño de la fuente más grande */
            text-shadow: 2px 2px 4px #000;
            /* Sombreado de texto con borde negro */

        }

        span {
            color: #86aa6e;
        }

        .btn {
            background-color: #86aa6e;
            border: none;
            display: flex;
            float: right;
            margin-top: 30px;
            margin-right: 200px; 

        }

        .btn:hover {
            background-color: gray;
        }

        /* Estilos específicos para la vista de celular utilizando media queries */



        @media (max-width: 768px) {
            #login-box {
                background-color: rgba(23, 73, 23, 0.3);
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 90%;
                /* Cambio de width a max-width para que sea responsive */
                width: 300px;
                height: 250px;
                align-items: center;
                justify-content: center;
            }

            .header {
                background-color: #86aa6e;
                height: 10px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                margin-bottom: 20px;
                /* Reduje el margen para una apariencia más compacta */
            }

            .mb-3 {
                display: flex;
                flex-direction: column;
                /* Alinea los campos uno debajo del otro en dispositivos móviles */
                padding-bottom: 6px;
            }

            .mb-3 label {
                width: 100%;
                /* Aprovecha el ancho disponible en dispositivos móviles */
                text-align: left;
                /* Cambio a alineación izquierda */
                margin-right: 0;
            }

            .form-label {
                color: white;
                font-size: 20px;
                font-weight: bold;
            }

            h1 {
                font-family: 'Young Serif', serif;
                color: white;
                font-size: 36px;
                /* Reduje el tamaño de la fuente para dispositivos móviles */
                text-shadow: 2px 2px 4px #000;
            }

            span {
                color: #86aa6e;
            }

            .btn {
                background-color: #86aa6e;
                border: none;
                display: flex;
                margin-top: 20px;
                margin-right: 80px; 
                /* Reduje el margen superior */
            }
            .btn:hover {
            background-color: gray;
            }



        }
    </style>
</head>

<body>
    <?php include('./components/cargador.php'); ?>
    <h1>Enrost <span>Vet</span></h1>
    <div id="login-box">

        <div class="header"></div>

        <div class="mb-3">
            <label for="user" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="user" name="user">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button onclick="login()" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>