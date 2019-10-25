<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>INICIO DE SESIÓN</h1>

	<form method="post" enctype="multipart/form-data" action="login.proc.php">
		<input type="text" name="usuario" id="usuario" style="width: 200px; height: 20px; font-size: 15px" placeholder="usuario..." required>
		<br><br>
		<input type="text" name="contra" id="contra" style="width: 200px; height: 20px; font-size: 15px" placeholder="contraseña..." required>
		<br><br>
		<input type="submit" value="Enviar" style="width: 100px; height: 30px; font-size: 20px">
	</form>
<br>
<?php
 
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
	<?php
	/*include "services/connection.php";
	$result=mysqli_query($conn,"SELECT galeria.name, galeria.path from galeria");

	if (!empty($result) && mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_array($result)) {
			echo "<div>";
			echo "<img src=".$row['path']." width='400' height=200'>";
			echo "<h2>".$row['name']."</h2>";
			echo "</div>";
		}
	}else{
		echo "0 resultados";
	}
	*/

	?>


</body>
</html>