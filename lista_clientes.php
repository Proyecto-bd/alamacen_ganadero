<?php
session_start();


?>


<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">

<head>
    <?php
    include 'includes/scripts.php';
    ?>
    <title>Listado Clientes</title>
</head>

<body class="formulario">
    <?php
    include 'includes/header2.php';
    ?>
    <?php
    include 'includes/lista_cli.php';
    ?>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>