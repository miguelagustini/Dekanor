<?php 


    include ("db.php");

   
        
   
    //Cargar imagen
   
    $imagen = $_FILES['imagen'];

    $imagen_name = $_FILES['imagen'] ['name'];
    $imagen_tmpname = $_FILES['imagen'] ['tmp_name'];
    $imagen_size = $_FILES['imagen'] ['size'];
    $imagen_error = $_FILES['imagen'] ['error'];
    $imagen_type= $_FILES['imagen'] ['type'];

    $fileExt = explode('.', $imagen_name);
    $fileActualExt = strtolower(end($fileExt));


    $allowed = array ('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)){
        if($imagen_error === 0){
            if ($imagen_size <5000000){
                $imagen_nombrenuevo = uniqid('',true).".".$fileActualExt;
                $imagen_carpeta = 'imagenes/'.$imagen_nombrenuevo;
                move_uploaded_file($imagen_tmpname, $imagen_carpeta);



                
                $titulo = $_POST['titulo'];
                $fecha = date('Y-m-d', strtotime($_POST['fecha']));
                $descripcion = $_POST['descripcion'];
                $imagen_nombre = $imagen_nombrenuevo;

                $query= "INSERT INTO noticia (titulo, texto, fecha, imagen_nombre) VALUES ('$titulo', '$descripcion', '$fecha', '$imagen_nombre')";
                $result = mysqli_query($conexion, $query);


                header("Location: administrador.php");
   

            } 
            
            else {echo "Tu imagen es demasiado grande";}

        } else { echo "Hubo un error cargando el archivo";}
    }
    else {
        echo "No puedes subir este tipo de archivos";
    }


?>