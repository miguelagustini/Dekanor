<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--link css-->
    <link rel="stylesheet" href="css/fonts.css">

    <!--link css-->
    <link rel="stylesheet" href="../css/estilos.css">



    <!-- Link a font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dekanor</title>
</head>
<body>
<!--Header comienza-->
<header class="header">

    <a href="../index.html" class="logo">
        <img src="../Logos/logo-header.png" alt="">
    </a>

    
    <nav class="navbar">
        <a href="../productos.html">Productos</a>
        <a href="../sobrenosotros.html">Sobre Dekanor</a>
        <a href="../noticias.php" class="seleccionado">Noticias</a>
        <a href="../contacto.html">Contacto</a>
    
    </nav>

    <div class="icons">
        <div class="fa-brands fa-whatsapp"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

</header>
 <!--Header termina-->

 <?php include ("../crud/db.php") ?>


 <h1 class="titulo-noticias">DEKANOR NOTICIAS | Febrero</h1>


 
<div class="desplegable" id="desplegable">
    <div class="mes"><a href="marzo2022.php">Marzo 2022</a></div>
    <div class="mes"><a href="febrero2022.php" id="mes_actual">Febrero 2022</a></div>
    <div class="mes"><a href="">Enero 2022</a></div>
    <div class="mes"><a href="">Diciembre 2021</a></div>

</div>


<?php $query = "SELECT * FROM noticia WHERE MONTH (fecha) = 2 AND YEAR (fecha) = 2022 ORDER BY id DESC;";
    $result_fecha= mysqli_query($conexion, $query); ?>

 <section class="noticias" id="noticias">

 <?php while ($row = mysqli_fetch_array($result_fecha)) { ?>

        <div class="row-noticias">

            <div class="contenido">
                <h3><?php echo $row ['fecha'] ?><span> | <?php echo $row ['titulo'] ?></span></h3>
                <p><?php echo $row ['texto'] ?></p>
                <a href="../ver_mas.php?id= <?php echo $row ['id']?>" class="btn-content">VER MAS</a>

            </div>

            <div class="image">
                <img src="../crud/imagenes/<?php echo $row ['imagen_nombre'] ?>" alt="">
            </div>

        </div>

 <?php } ?>

</section>


<!-- footer empieza -->
<section class="footer">
    <div class="share">
        <a href="#" class="fa-solid fa-phone-flip">
        <a href="#" class="fa-solid fa-envelope"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

</section>

<!-- footer termina -->

 <script src="../script.js"></script>
 

</body>

</html>