<?php 

$mysqli = new mysqli("localhost", "root", "root", "clase");

 
if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
	$info = $mysqli->query("SELECT * FROM usuarios");

	while($re=mysqli_fetch_assoc($info)){
		$r2[] = $re;
	}

	echo json_encode($r2);
}

$mysqli->close();

?>