<!-- <?php
        require_once('../../api/conexion/conexion.php');
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
</head>
<style>
    #userTable_filter{
        margin-right: 10px;
    }
</style>
<body>

    <?php include('../../components/navbar.php') ?>

    <div class="container" style="max-width: 100%;">
    <?php include('../../components/company/tablaEmpresas.php') ?>

        
    </div>



    <?php include('../../components/footer.php') ?>
    <script type="text/javascript" src="js/company.js"></script>
</body>

</html>