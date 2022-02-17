<?php 
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$consulta = $_POST ['consulta'];


$from = $email;
$para = "miguelagustini2015@gmail.com";
$mensaje_nombre = "Nombre: " . $nombre;
$mensaje_telefono = "Telefono: " . $telefono;
$mensaje_consulta = "Consulta: " . $nombre;
$header = $from;


mail ($para, $mensaje_nombre, $mensaje_telefono, $mensaje_consulta, $header);


?>