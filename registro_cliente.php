<!-- <?php
session_start();
if (!empty($_POST)) {
    $alert = '';

    if (
        !empty($_post['nombre1']) || !empty($_post['apellido1']) || !empty($_post['identificacion']) ||
        !empty($_post['telefono']) || !empty($_post['correo'])
        
    ) {

        $alert = '<p class="msg_error">Los campos con (*) son obligatorios.</p>';
    } else {
        include "../conexion.php";
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $identificacion = $_POST['identificacion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];


        $clave = hash('sha512', $clave);
    }
}
?>
 -->


<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<head>
   
    <?php
    include 'includes/scripts.php';
    ?>
    <title>Registro Clientes</title>
</head>

<body class="formulario">
    <?php
    include 'includes/header2.php';
    ?>
      <?php
    include 'includes/registro_c.php';
    ?>

    <?php
    include 'includes/footer.php';
    ?>

</body>

</html>