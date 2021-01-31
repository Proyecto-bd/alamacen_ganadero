<?php
session_start();
if (!empty($_POST)) {
    $alert = '';

    include_once 'conexion.php';
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $identificacion = $_POST['identificacion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $username = $_POST['username'];
    $clave = $_POST['clave'];
    $clave2 = $_POST['clave2'];
    $rol = $_POST['rol'];
    $clave = hash('sha512', $clave);
    $clave2 = hash('sha512', $clave2);
    $tipoid = $_POST['documento'];

    if ($clave != $clave2) {
        echo '<script type="text/javascript">alert("LAS CONTRASEÑAS NO COINCIDEN");</script>';
    } else {
        $statement = $conexion->prepare('SELECT username FROM USUARIO WHERE usuario.username= :username');
        $statement->execute(array(':username' => $username));

        $resultado = $statement->fetch();

        if ($resultado !== false) {
            $error .= '<i> EL NOMBRE DE USUARIO YA EXISTE</i>';
        } else {
            $statement = $conexion->prepare('INSERT INTO PERSONA (ID, 1ER_NOMBRE, 2DO_NOMBRE, 1ER_APELLIDO, 2DO_APELLIDO, IDENTIFICACION, EMAIL,  TIPO_ID) 
                VALUES (null, :nombre1, :nombre2, :apellido1, :apellido2, :identificacion, :correo, :tipoid)');
            $statement->execute(array(
                ':nombre1' =>  $nombre1,
                ':nombre2' => $nombre2,
                ':apellido1' => $apellido1,
                ':apellido2' => $apellido2,
                ':identificacion' => $identificacion,
                ':correo' => $correo,
                ':tipoid' => $tipoid,
            ));

            $stmt = $conexion->query("select LAST_INSERT_ID() as id");
            if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
                $id = trim($row[0]);
            }

            $statement = $conexion->prepare('INSERT INTO usuario (id_usuario, username, password, persona_id, rol_id) 
            VALUES (null, :username, :password, :persona_id, :rol_id)');
            $statement->execute(array(
                ':username' => $username,
                ':password' => $clave2,
                ':persona_id' => $id,
                ':rol_id' => $rol
            ));


            if (!empty($telefono)) {
                $statement = $conexion->prepare('INSERT INTO TELEFONO (id_telefono, telefono, persona_id) 
                VALUES (null, :telefono, :persona_id)');
                $statement->execute(array(
                    ':telefono' => $telefono,
                    ':persona_id' => $id
                ));
            }
        }
        echo '<script type="text/javascript">alert("USUARIO REGISTRADO");</script>';
    }
}

?>


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
    include 'includes/registro_u.php';
    ?>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>