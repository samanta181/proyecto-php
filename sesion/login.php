<?php
session_start();
$_SESSION['user']= $_POST['user'];

$respuesta='correcto';
echo $respuesta;
?>