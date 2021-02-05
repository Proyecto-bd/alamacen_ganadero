<section id="container">
    <form action="" method="GET">
        <div class="row">
            <div class="col-md8">
                <input type="text" name="razonSocial" placeholder="Razón Social">
                <input type="text" name="documento" placeholder="Documento">
                <div>
                    <div class="col-md4">
                        <input type="submit" value="Buscar" name="buscarProveedor">
                    </div>
                </div>
    </form>
    <div class="form_listar">

        <table class="pure-table pure-table-horizontal">
            <thead>
                <tr>
                    <th style="text-align:left;">Id</th>
                    <th style="text-align:left;">Nombre</th>
                    <th style="text-align:left;">Identificación</th>
                    <th style="text-align:left;">Tipo Documento</th>
                    <th style="text-align:left;">Razón Social</th>
                    <th style="text-align:left;">Email</th>
                    <th style="text-align:left;">Teléfono</th>
                    <th style="text-align:left;">Acción</th>

                </tr>
                <?php
                include 'conexion.php';

                # Por defecto hacemos la consulta de todas las personas
                $consulta = "SELECT * from ListaProveedores";

                $busqueda1 = null;
                $busqueda2 = null;
                if (isset($_GET["razonSocial"])) {
                    $busqueda1 = $_GET["razonSocial"];
                    $busqueda2 = $_GET["documento"];
                    $consulta = "CALL obtenerProveedores_Social(?)";
                }


                $sentencia = $conexion->prepare($consulta, [
                    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
                ]);

                if ($busqueda1 === null && $busqueda2 === null) {
                    $sentencia->execute();
                } else if ($busqueda1 != null) { 
                    $parametro = ["$busqueda1"];
                    $sentencia -> execute($parametro);
                }else{
                    $consulta = "CALL obtenerProveedores_Documento(?)";
                    $sentencia = $conexion->prepare($consulta, [
                        PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
                    ]);
                    $parametro = ["$busqueda2"];
                    $sentencia -> execute($parametro);
                }



                while ($cliente = $sentencia->fetchObject()) { ?>
                    <tr>
                        <td><?php echo $cliente->id ?></td>
                        <td><?php echo $cliente->Nombre ?></td>
                        <td><?php echo $cliente->identificacion ?></td>
                        <td><?php echo $cliente->tipo_documento ?></td>
                        <td><?php echo $cliente->razon_social ?></td>
                        <td><?php echo $cliente->email ?></td>
                        <td><?php echo $cliente->telefono ?></td>
                        <td>
                            <a href="#">Editar</a>
                            <a class="link_delete" href="#">Eliminar</a>
                        <td>
                    </tr>
                <?php
                }
                ?>
            </thead>
        </table>
    </div>
</section>