<?php

$user = $_POST ['user'];
$pass = $_POST ['password'];

$usuario = "Dekanor2022";
$contra = "abc1234";


if ($usuario == $user && $contra == $pass) {

  header ("location: ../administrador.php");
}

else {
  header ("location: incorrecto.html");
}


 ?>