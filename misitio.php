<?php
	session_start();
	include "services/connection.php";
	$userid=$_SESSION['id'];
 
	$userq=mysqli_query($conn,"SELECT user FROM usuarios WHERE user='$userid'");
	$userrow=mysqli_fetch_array($userq);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>GALERIA DE PAISAJES</h1>
	<form method="post" enctype="multipart/form-data" action="services/procesa.php">
		<input type="text" name="titulo" id="titulo" style="width: 200px; height: 20px; font-size: 15px" placeholder="titulo..." required>
		<br><br>
		<input type="file" name="imagen" placeholder="imagen..." required>
		<br><br>
		<input type="submit" value="Enviar" style="width: 100px; height: 30px; font-size: 20px">
	</form>
<br>
	<?php
	include "services/connection.php";
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
	?>

</body>
</html>