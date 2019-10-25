<?php
$conn=mysqli_connect('localhost','root','','users_db');
if (mysqli_connect_errno()) {
	die("Error al conectarnos a la base de datos " .mysqli_connect_error());
}else{
mysqli_set_charset($conn,"utf8");
}


?>