<?php 
    include ('db.php');

    $id= $_GET ['id'];
    $query2 = "SELECT * FROM noticia WHERE id=$id";
    $result = mysqli_query($conexion, $query2);
    
    if (mysqli_num_rows ($result) ==1) {
        $row = mysqli_fetch_array ($result);
        $imagen = $row ['imagen_nombre'];
      }

      unlink ('imagenes/'.$imagen);


    $query = "DELETE FROM noticia WHERE id=$id";
    $result = mysqli_query($conexion, $query);

header("Location: administrador.php")
?>