<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<header class="header">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FedeWeb</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Inicio</a></li>
      <li class="active"><a href="contacto.php">Contacto</a></li>
      <li><a href="subscripcion.php">Subscripcion</a></li>
      <li><a href="login.php">Ingresar</a></li>
    </ul>
  </div>
</nav>

</header>

<div class="container">
<div class="row">
	<h3>Formulario de contacto</h3>
	<form action="mail_contacto.php" method="post">
	  <div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar Nombre" required>
	  </div>
	  <div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" id="email" name="email" placeholder="Ingresar Email" required>
	  </div>
	  <div class="form-group">
		<label for="mensaje">Mensaje</label>
		<textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
	  </div>
	  <input type="submit" value="Enviar Mensaje">
	</form>
</div>
</div>
	
</body>
</html>