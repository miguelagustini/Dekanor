<?php include ("db.php") ?>


<?php include ("includes/header.php") ?>


<form class="formulario"  action="save.php" method="post" enctype="multipart/form-data">
  <h1 class="titulo">CARGAR NOTICIA</h1>

  <div class="form-group">
    <label>Titulo</label> <br>
    <input type="text" class="form-control" name="titulo" placeholder="Titulo de la noticia" autofocus>
  </div>
  

  <div class="form-group">
    <label>Fecha de hoy</label> <br>
    <input type="date" class="form-control" name="fecha" placeholder="Fecha de hoy" autofocus>
  </div>

  <div class="form-group">
    <label>Noticia  (Para dejar un renglón escribir &lt;br&gt;)</label> <br>
    <textarea class="form-control" name="descripcion" rows="3" autofocus id="administrador-description"></textarea>
  </div>

  <div class="form-group">
    <label>Imagen</label> <br>
    <input type="file" class="form-control" name="imagen" id="imagen">
  </div>

  <button type="submit" class="btn btn-dark btn-lg btn-block" name="Cargar">Cargar noticia</button>
  
</form>



<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Noticia</th>
      <th scope="col">Fecha</th>
      <th scope="col">Imagen</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>

    <?php $query = "SELECT * FROM noticia ORDER BY id DESC;";
    $result_noticias= mysqli_query($conexion, $query);
    
    while ($row = mysqli_fetch_array($result_noticias)) { ?>


    <tr>
      <th scope="row"><?php echo $row ['id'] ?></th>
      <td><?php echo $row ['titulo'] ?></td>
      <td><?php echo $row ['texto'] ?></td>
      <td><?php echo $row ['fecha'] ?></td>
      <td><img src="imagenes/<?php echo $row ['imagen_nombre'] ?>" alt="" height="180rem" width="200rem"></td>
      <td>
          <a href="edit.php?id= <?php echo $row ['id']?>" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
          <a href="delete.php?id= <?php echo $row ['id']?>" class="btn btn-secondary"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>

        <?php } ?>
    
  </tbody>
</table>

<div class="blanco"></div>
<?php include ("includes/footer.php") ?>
