<?php 
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$titulo="From: $nombre \n mensaje: $mensaje";
$recibe = "federicojmc10@gmail.com";
$asunto = "Formulario de Contacto";
$mailheader = "From: $email \r\n";
mail($recibe, $asunto, $titulo, $mailheader) or die("Error!");
header("Location: gracias.php");
exit();
?>