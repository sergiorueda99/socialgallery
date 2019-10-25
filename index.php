<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center style="border: solid; margin-left: 300px; margin-right: 300px;">
<h1>INICIO DE SESIÓN</h1>

	<form method="post" enctype="multipart/form-data" action="login.proc.php">
		<input type="text" name="usuario" id="usuario" style="width: 200px; height: 20px; font-size: 15px" placeholder="usuario..." required>
		<br><br>
		<input type="text" name="contra" id="contra" style="width: 200px; height: 20px; font-size: 15px" placeholder="contraseña..." required>
		<br><br>
		<input type="submit" value="Enviar" style="width: 100px; height: 30px; font-size: 20px">
	</form>
	<?php
 
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
<br>
<p>Bienvenido al proyecto de galeria de imagenes, introduce tu nombre de usuario<br> y tu contraseña para entrar y poder subir tus fotos. Si el usuario es incorrecto, te <br> volverá a esta pagina mostrandote un mensaje de error y si lo haces correctamente,<br> te redirigirá a la pagina para poder colgar tus fotos.</p>
</center>
<?php
 
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</body>
</html>