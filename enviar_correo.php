<?php 
/*$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$consulta = $_POST ['consulta'];


$para = "miguelagustini2015@gmail.com";
$mensaje_nombre = "Nombre: " . $nombre;
$mensaje_telefono = "Telefono: " . $telefono . " Consulta: " . $nombre;
$header = "From: dekanor@gmail.com" . "\r\n" . "CCsomebodyelse@example.com";


mail ($para, $mensaje_nombre, $mensaje_telefono, $header);

header('Location: contacto.html');*/



$to = "miguelagustini2015@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

?>