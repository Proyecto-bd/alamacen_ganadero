<!-- 
session_start();
if (!empty($_POST)) {
    $alert = '';

    if (
        !empty($_post['Razon_social']) ||  !empty($_post['Nit']) ||
        !empty($_post['Telefono']) || !empty($_post['correo']) || 
    ) {

        $alert = '<p class="msg_error">Los campos con (*) son obligatorios.</p>';
    } else {
        include "../conexion.php";
        $Razon_social = $_POST['Razon_social'];
        $Nit = $_POST['Nit'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];


        $clave = hash('sha512', $clave);
    }
} -->


<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<head>
   
    <?php
    include 'includes/scripts.php';
    ?>
    <title>Registro Usuarios</title>
</head>

<body class="formulario">
    <?php
    include 'includes/header2.php';
    ?>
    <?php
    include 'includes/registro_provee.php';
    ?>
    <?php
    include 'includes/footer.php';
    ?>

</body>

</html>