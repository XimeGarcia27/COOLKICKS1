<?php
	 include('assets/data/conexion.php');

	 $obj = new Conexion;

	 $res =  $obj->buscarLiqui();
 
	 $temp = array();
 
	 $temp =$res;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <title>Liquidacion</title>
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>
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
    <br>
    <br>
    <br>
    <br>

    <main>
        <section id="bienvenidos">
            <h2>Nuevos Lanzamientos</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur soluta libero quod rem, ullam repellat minus aspernatur molestias perspiciatis atque.</p>
        </section>

        <section id="catalogo">
            <div class="contenedor">

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[0]['imagen_liq']);?>"></a>
                    <h3><?php print  $temp[0]['nombre_liq'];?></h3>
                    <p>Ahora:$<?php print  $temp[0]['precio_desp'];?></p>
                    <p>Antes:$<?php print  $temp[0]['precio_ant'];?></p>
                </article>

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[1]['imagen_liq']);?>"></a>
                    <h3><?php print  $temp[1]['nombre_liq'];?></h3>
                    <p>Ahora:$<?php print  $temp[1]['precio_desp'];?></p>
                    <p>Antes:$<?php print  $temp[1]['precio_ant'];?></p>
                </article>

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[2]['imagen_liq']);?>"></a>
                    <h3><?php print  $temp[2]['nombre_liq'];?></h3>
                    <p>Ahora:$<?php print  $temp[2]['precio_desp'];?></p>
                    <p>Antes:$<?php print  $temp[2]['precio_ant'];?></p>
                </article>

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[3]['imagen_liq']);?>"></a>
                    <h3><?php print  $temp[3]['nombre_liq'];?></h3>
                    <p>Ahora:$<?php print  $temp[3]['precio_desp'];?></p>
                    <p>Antes:$<?php print  $temp[3]['precio_ant'];?></p>
                </article>

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[4]['imagen_liq']);?>"></a>
                    <h3><?php print  $temp[4]['nombre_liq'];?></h3>
                    <p>Ahora:$<?php print  $temp[4]['precio_desp'];?></p>
                    <p>Antes:$<?php print  $temp[4]['precio_ant'];?></p>
                </article>

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[5]['imagen_liq']);?>"></a>
                    <h3><?php print  $temp[5]['nombre_liq'];?></h3>
                    <p>Ahora:$<?php print  $temp[5]['precio_desp'];?></p>
                    <p>Antes:$<?php print  $temp[5]['precio_ant'];?></p>
                </article>
            </div>
        </section>
    </main>
</body>

</html>