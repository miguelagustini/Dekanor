<?php 
$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$telefono = $_POST ['telefono'];
$consulta = $_POST ['consulta'];


$para = "miguelagustini2015@gmail.com";
$mensaje_nombre = "Nombre: " . $nombre;
$mensaje_telefono = "Telefono: " . $telefono . " Consulta: " . $consulta;
$header = "From: dekanor@gmail.com" . "\r\n" . "CCsomebodyelse@example.com";
$header .= "Content-type: text/html\r\n";


mail ($para, $mensaje_nombre, $mensaje_telefono, $header);

echo ($para .' ' . $mensaje_nombre . ' ' . $mensaje_telefono);



/*

$to = "miguelagustini2015@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
$header .= "Content-type: text/html\r\n";

mail($to,$subject,$txt,$headers);

header('Location: contacto.html');

?>*/

?>