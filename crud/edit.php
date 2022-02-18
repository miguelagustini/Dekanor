<?php 
    include ('db.php');

    $titulo = '';
    $fecha= '';
    $title = '';
    $descripcion= '';
    $imagen_nombrenuevo= '';


    if  (isset($_GET['id'])) {
    $id= $_GET ['id'];
    $query = "SELECT * FROM noticia WHERE id=$id";
    $result = mysqli_query($conexion, $query);
    
    if (mysqli_num_rows ($result) ==1) {
        $row = mysqli_fetch_array ($result);
        $titulo = $row ['titulo'];
        $fecha = $row ['fecha'];
        $descripcion = $row ['texto'];
      }

    }

 if (isset($_POST['actualizar'])) {
      $id = $_GET['id'];

      $imagen = $_FILES['imagen'];
      $imagen_name = $_FILES['imagen'] ['name'];
      $imagen_tmpname = $_FILES['imagen'] ['tmp_name'];
      $fileExt = explode('.', $imagen_name);
      $fileActualExt = strtolower(end($fileExt));
      $fileExt = explode('.', $imagen_name);
      $imagen_nombrenuevo = uniqid('',true).".".$fileActualExt;
          $imagen_carpeta = 'imagenes/'.$imagen_nombrenuevo;
           move_uploaded_file($imagen_tmpname, $imagen_carpeta);
      $imagen_nombre = $imagen_nombrenuevo;

      $fileExt = explode('.', $imagen_name);
      $fileActualExt = strtolower(end($fileExt));

      $allowed = array ('jpg', 'jpeg', 'png');

      if (in_array($fileActualExt, $allowed)){
        $titulo= $_POST['titulo'];
        $fecha= $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $query = "UPDATE noticia set titulo = '$titulo', fecha = '$fecha', texto = '$descripcion', imagen_nombre = '$imagen_nombre' WHERE id=$id";
     
        $resultado = mysqli_query($conexion, $query);
        header('Location: administrador.php');
      }
      else {
        $titulo= $_POST['titulo'];
        $fecha= $_POST['fecha'];
        $descripcion = $_POST['descripcion'];
        $query = "UPDATE noticia set titulo = '$titulo', fecha = '$fecha', texto = '$descripcion' WHERE id=$id";

        $resultado = mysqli_query($conexion, $query);
        header('Location: administrador.php');
      }

    } 

    
?>


<?php include ("includes/header.php") ?>

<h1 id="titulo_editar">Actualizar noticia</h1>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">


        <div class="form-group">
          <input name="titulo" type="text" class="form-control" value="<?php echo $titulo; ?>" placeholder="Actualizar titulo">
        </div>


        <div class="form-group">
          <textarea name="fecha" class="form-control" ><?php echo $fecha; ?></textarea>
        </div>

        <div class="form-group">
          <textarea name="descripcion"class="form-control" id="form_description"><?php echo $descripcion; ?></textarea>
        </div> 

        <div class="form-group">
          <input name="imagen" type="file" class="form-control" value="" placeholder="Actualizar foto">
        </div>

        <button class="btn btn-success" name="actualizar" type="submit" id="botoncito">  Actualizar </button>
      </form>
      </div>
    </div>
  </div>
</div>


<?php include ("includes/footer.php") ?>