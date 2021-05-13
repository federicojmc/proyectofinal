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
      <li><a href="contacto.php">Contacto</a></li>
      <li><a href="subscripcion.php">Subscripcion</a></li>
      <li class="active"><a href="login.php">Ingresar</a></li>
    </ul>
  </div>
</nav>

</header>

<div class="container">
<div class="row">
	<h3>Iniciar sesión</h3>
	<form action="#" method="post">
	  <div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" id="email" placeholder="ingresar Email" required>
	  </div>
	  <div class="form-group">
		<label for="password">Clave</label>
		<input type="password" class="form-control" id="password" placeholder="Clave" required>
	  </div>
	  <button type="submit" class="btn btn-primary">Ingresar</button>
	</form>
</div>
</div>


</body>
</html>