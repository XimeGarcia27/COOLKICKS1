<?php
	 include('assets/data/conexion.php');

	 $obj = new Conexion;

	 $res =  $obj->buscarProductoM();
 
	 $temp = array();
 
	 $temp =$res;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="assets/img/logo.jpg">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>Mujeres</title>
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

    <main>
        <section id="catalogo">
            <div class="contenedor">
                
                <article class="mov">
                   <a href="detallesM.php"><img src="assets/img/<?php print($temp[0]['imagen']);?>"></a> 
                    <h3><?php print  $temp[0]['nombre'];?></h3>
                    <p><?php print "$". $temp[0]['precio'];?></p>
                </article>

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[1]['imagen']);?>"></a> 
                    <h3><?php print  $temp[1]['nombre'];?></h3>
                    <p><?php print "$". $temp[1]['precio'];?></p>
                </article>

                <article class="mov">
                <a href="detallesM.php"><img src="assets/img/<?php print($temp[2]['imagen']);?>"></a> 
                    <h3><?php print  $temp[2]['nombre'];?></h3>
                    <p><?php print "$". $temp[2]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[3]['imagen']);?>">
                    <h3><?php print  $temp[3]['nombre'];?></h3>
                    <p><?php print "$". $temp[3]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[4]['imagen']);?>">
                    <h3><?php print  $temp[4]['nombre'];?></h3>
                    <p><?php print "$". $temp[4]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[5]['imagen']);?>">
                    <h3><?php print  $temp[5]['nombre'];?></h3>
                    <p><?php print "$". $temp[5]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[6]['imagen']);?>">
                    <h3><?php print  $temp[6]['nombre'];?></h3>
                    <p><?php print "$". $temp[6]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[7]['imagen']);?>">
                    <h3><?php print  $temp[7]['nombre'];?></h3>
                    <p><?php print "$". $temp[7]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[8]['imagen']);?>">
                    <h3><?php print  $temp[8]['nombre'];?></h3>
                    <p><?php print "$". $temp[8]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[9]['imagen']);?>">
                    <h3><?php print  $temp[9]['nombre'];?></h3>
                    <p><?php print "$". $temp[9]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[10]['imagen']);?>">
                    <h3><?php print  $temp[10]['nombre'];?></h3>
                    <p><?php print "$". $temp[10]['precio'];?></p>
                </article>

                <article class="mov">
                    <img src="assets/img/<?php print($temp[11]['imagen']);?>">
                    <h3><?php print  $temp[11]['nombre'];?></h3>
                    <p><?php print "$". $temp[11]['precio'];?></p>
                </article>

            </div>
        </section>
    </main>
</body>

</html>