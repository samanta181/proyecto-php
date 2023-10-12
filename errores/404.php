<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/iconovet.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/error.css" />
    <title>Page not found - EnrosVet</title>

</head>

<body>
    <?php include('../components/navbar.php') ?>
    <div class="container">
        <div class="caja">
            <div class="row">
                <div class="col-md-6">
                    <img class="error-image img-fluid" src="./img/404e.jpg" alt="Error 404">
                </div>
                <div class="col-md-6">
                    <p class="error-message">
                        <span class="sp">Hemos buscado <br> a conciencia.</span><br>
                        Sin embargo, parece que la página que buscas ya no existe.<br>
                        Puedes volver a la página de inicio dando clic en el siguiente enlace<br>
                        <a href="./home" class="back-button"><i class="fa fa-undo fa-2x"></i> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php include('../components/footer.php') ?>
</body>

</html>