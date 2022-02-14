<?php 
    include ('db.php');
    $id= $_GET ['id'];
    $query = "DELETE FROM noticia WHERE id=$id";
    $result = mysqli_query($conexion, $query);

header("Location: administrador.php")
?>