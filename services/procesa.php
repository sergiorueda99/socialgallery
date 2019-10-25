<?php
include "connection.php";

$titulo=$_REQUEST['titulo'];
$tipo=$_FILES['imagen']['type'];
$tamano = $_FILES['imagen']['size'];
$destination="./fotos/".basename($_FILES['imagen']['name']);



$nombre_fichero = $destination;

if (file_exists("../".$destination)) {
    echo "El fichero $destination existe";
} else {
    if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 300000))) {
echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 300 kb como máximo.</b></div>';
}
else {
     	if(move_uploaded_file($_FILES['imagen']['tmp_name'], "../".$destination)){
mysqli_query($conn,"INSERT INTO galeria (name,path)VALUES('$titulo','$destination')");
echo "La imagen se ha subido correctamente";
}else{
	echo "Error!";
	echo "<a href='../index.php'> HOME </a>";
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br>
	<a href="../index.php">VOLVER A LA GALERIA</a>
</body>
</html>


