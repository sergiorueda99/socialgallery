<?php
session_start();
include "services/connection.php";

$nombre=$_POST['usuario'];
$contra=$_POST['contra'];




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$result = mysqli_query($conn, "SELECT user, password FROM usuarios WHERE user='$nombre' AND password='$contra'"); 

    /* determinar el número de filas del resultado */
    $contador = mysqli_num_rows($result);

	if($contador==0){
    $_SESSION['message']="Usuario o contraseña incorrectos!";
    header("Location: http://localhost/sesiones/index.php");
	}else{
    $row=mysqli_fetch_array($result);
		$_SESSION['id']=$row['userid'];
    header("Location: http://localhost/sesiones/misitio.php");
}
	?>
	<br>
	
</body>
</html>