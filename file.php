<?php 

$email = $_POST['email'];
$password = $_POST['password'];
$year = $_POST['year'];

$mysqli = new mysqli("localhost", "root", "root", "clase");

 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
	 $sentencia = $mysqli->prepare("INSERT INTO usuarios(email, password, year) VALUES (?, ?, ?)");
	 $sentencia->bind_param("ssi", $email, $password, $year);
	 $sentencia->execute();

}



$mysqli->close();

?>