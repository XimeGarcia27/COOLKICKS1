<?php
     include('assets/data/conexion.php');

	 $obj = new Conexion;

	 $res =  $obj->detallesM();
 
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

<main>

    <section id="contenedor-cat">
        
        <h3 class="titulo-us"><?php print($temp['id']['nombre']);?></h3>
        <div class="Contenedor-cat">    

            <img class="imagen-us" src="assets/img/<?php print($temp['id']['imagen']);?>">

            <div class="Contenedor-informacion">

                <p><?php print($temp['id']['precio']);?></p>
                <p><?php print($temp['id']['caracteristicas']);?></p>

                <a class="boton" target="_blank">Agregar al carrito de compra</a>
                <div class="desplegable">
                    <button class="boton2">Elige tu talla</button>
                    <div class="tallas">
                        <a href="#">2.5</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <body>

        <footer>
            <div class="contenedor">
                <p class="copy">Coolkicks &copy; 2020</p>
                <div class="sociales">
                    <a class="icon-facebook" href="https://www.facebook.com/"></a>
                    <a class="icon-twitter" href="https://www.twitter.com/"></a>
                    <a class="icon-instagram" href="https://www.instagram.com/"></a>
                </div>
            </div>
        </footer>
    </body>

</html>