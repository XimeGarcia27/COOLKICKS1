<?php
    include('assets/data/conexion.php');

    $obj = new Conexion;

    $res =  $obj->detallesH();

    $temp = array();

    $temp =$res;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coolkicks</title>
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/estilospares.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<header>
    <div class="contenedor">
        <a href="Index.html">
            <h1>Coolkicks</h1>
        </a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
            <a href="Hombre.php">Hombres</a>
            <a href="Mujeres.php">Mujeres</a>
            <a href="formulario.php">Contactanos</a>
            <a href="liquidacion.html">liquidaciones</a>
        </nav>
    </div>
</header>