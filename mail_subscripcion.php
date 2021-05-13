<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$para = 'federicojmc10@gmail.com';
$titulo = 'Formulario de Contacto';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://localhost/proyectoprimo/gracias.php';
</script>";
} else {
echo 'Falló el envio';
}
}
?>