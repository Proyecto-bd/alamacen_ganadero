<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('location: index.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $clave2 = $_POST['clave2'];

    $clave = hash('sha512', $clave);
    $clave2 = hash('sha512', $clave2);

    $error = '';

    if (empty($correo) or empty($usuario) or empty($clave) or empty($clave2)) {

        $error .= '<i>Debes llenar todos los campos</i>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=asesoriasprueba', 'root', '');
        } catch (PDOException $prueba_error) {
            echo "Error: " . $prueba_error->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultado = $statement->fetch();


        if ($resultado != false) {
            $error .= '<i>El usuario ya existe</i>';
        }

        if ($clave != $clave2) {
            $error .= '<i> Las contraseñas no coinciden</i>';
        }
    }

    if ($error == '') {
        $statement = $conexion->prepare('INSERT INTO usuario (id, nombres, apellidos, correo, usuario, clave) VALUES (null, :nombres, :apellidos, :correo, :usuario, :clave)');
        $statement->execute(array(

            ':nombres' => $nombres,
            ':apellidos' => $apellidos,
            ':correo' => $correo,
            ':usuario' => $usuario,
            ':clave' => $clave

        ));

        $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
    }
}


require 'frontend/register-vista.php';

?>























<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('location: index.php');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $identificacion = $_POST['identificacion'];
    $correo = $_POST['correo'];
    $username = $_POST['identificacion'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];
    $tipoid = $_POST['tipo_id'];

    $clave = hash('sha512', $clave);
    $error = '';

    if (
        !empty($_post['nombre1']) || !empty($_post['apellido1']) || !empty($_post['identificacion']) ||
        !empty($_post['correo']) || !empty($_post['clave']) || !empty($_post['rol'])
    ) {
        $alert = '<p class="msg_error">Los campos con (*) son obligatorios.</p>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=asesorias', 'root', '');
        } catch (PDOException $prueba_error) {
            echo "Error: " . $prueba_error->getMessage();
        }


        $statement = $conexion->prepare('SELECT * FROM USUARIO WHERE identificacion= :identificacion LIMIT 1');
        $statement->execute(array(':identificacion' => $identificacion));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $error .= '<i> EL USUARIO YA EXISTE</i>';
        }

        if ($resultado <> 0) {
            $alert = '<p class="msg_error">El usuario ya se encuentra registrado</p>';
        } else {
            $statement = $conexion->prepare('INSERT INTO USUARIO (USERNAME,PASSWORD,1ER_NOMBRE,2DO_NOMBRE,
                1ER_APELLIDO,2DO_APELLIDO,EMAIL_UD,IDENTIFICACION,TIPO_ID) 
                VALUES (:identificacion, :clave, :nombre1, :nombre2, :apellido1, :apellido2, :correo, :identificacion, :tipoid)');
            $statement->execute(array(

                ':nombre1' =>  $nombre1,
                ':nombre2' => $nombre2,
                ':apellido1' => $apellido1,
                ':apellido2' => $apellido2,
                ':identificacion' => $identificacion,
                ':correo' => $correo,
                ':username' => $username,
                ':tipoid' => $tipoid,
                ':clave' => $clave
            ));
            echo "ESTA MIERDA NO FUNCIONAA";
        }
    }
}


require 'register-vista.php';
