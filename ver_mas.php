<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--link css-->
    <link rel="stylesheet" href="css/estilos.css">



    <!-- Link a font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Dekanor</title>
</head>
<body>
    
<!--Header comienza-->
<header class="header">

    <a href="index.html" class="logo">
        <img src="Logos/logo-header.png" alt="">
    </a>

    
    <nav class="navbar">
        <a href="productos.html">Productos</a>
        <a href="sobrenosotros.html">Sobre Dekanor</a>
        <a href="noticias.php" class="seleccionado">Noticias</a>
        <a href="contacto.html" >Contacto</a>
    
    </nav>

    <div class="icons">
         <a href="https://api.whatsapp.com/send?phone=+543731 40-7634" target="_blank"><div class="fa-brands fa-whatsapp"></div></a>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

</header>
 <!--Header termina-->




 <h1 class="titulo-noticias">DEKANOR NOTICIAS</h1>


 
<div class="desplegable" id="desplegable">
        
    <div class="mes"><a href="meses/marzo2022.php">Marzo 2022</a></div>
    <div class="mes"><a href="meses/febrero2022.php">Febrero 2022</a></div>


</div>



<!-- vermas section starts  -->

<?php include ("crud/db.php");
$titulo = '';
$fecha= '';
$title = '';
$descripcion= '';
$imagen_nombrenuevo= '';

$id= $_GET ['id'];
$query = "SELECT * FROM noticia WHERE id=$id";
$result= mysqli_query($conexion, $query); 


$row = mysqli_fetch_array ($result);
        $titulo = $row ['titulo'];
        $fecha = $row ['fecha'];
        $descripcion = $row ['texto'];
        $imagen_nombre = $row ['imagen_nombre'];

?>


<section class="vermas" id="vermas">

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="crud/imagenes/<?php echo $row ['imagen_nombre'] ?>" alt="">
            </div>
            <div class="content">
                <h3><?php echo $row ['fecha'] ?><span> | <?php echo $row ['titulo'] ?></span></h3>
                <p><?php echo $row ['texto'] ?></p>
            </div>
        </div>

        
    </div>

</section>

<!-- vermas section ends  -->


 <!-- footer empieza -->
<section class="footer">
    <div class="share">
        <a href="#" class="fa-solid fa-phone-flip">
        <a href="#" class="fa-solid fa-envelope"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>

</section>

<!-- footer termine -->

 <script src="script.js"></script>
</body>
</html>