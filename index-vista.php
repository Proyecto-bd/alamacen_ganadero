<?php
//session_start();
if (isset($_SESSION['usuario'])) {
	//header('location: index-vista.php');
} else {
	header('location: login-vista.php');
}

?>

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<?php
	include 'includes/scripts.php';
	?>
	<title>Almacen ganadero</title>
</head>

<body>
	<?php
	include 'includes/header.php';
	?>
</body>

</html>