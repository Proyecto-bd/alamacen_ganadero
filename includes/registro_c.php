<section id="container">

    <div class="form_register">

        <h1 id="titulor">Registro de Clientes</h1>
        <hr>
        <form class="cli" action="" method="post">

            <label for="nombre1">Nombres</label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="nombre1" id="nombre1" autocomplete="off" required="true" placeholder="Primer Nombre">
                    </div>
                    <div class="col-6 ml-auto">
                        <input type="text" name="nombre2" id="nombre2" autocomplete="off" placeholder="Segundo Nombre">
                    </div>
                </div>

            </div>

            <label for="apellido1">Apellidos</label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="apellido1" id="apellido1" autocomplete="off" required="true" placeholder="Primer Apellido">
                    </div>
                    <div class="col-6 ml-auto">
                        <input type="text" name="apellido2" id="apellido2" autocomplete="off" placeholder="Segundo Apellido">
                    </div>
                </div>
            </div>


            <label for="identificacion">Identificación y tipo </label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="identificacion" id="identificacion" autocomplete="off" required="true" placeholder="Documento">
                    </div>
                    <div class="col-6">
                        <?php
                        include_once 'conexion.php';
                        $stmt = $conexion->prepare('SELECT * FROM TIPO_IDENTIFICACION');
                        $stmt->execute();

                        ?>

                        <!--<label for="rol">Tipo Documento</label>-->
                        <select name="documento" id="documento">
                            <?php
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                extract($row);
                            ?>
                                <option value="<?php echo $row["ID_TIPO"]; ?>"><?php echo $row["NOMBRE"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>


            <label for="email">Tipo de cliente y Razón Social </label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <?php
                        include_once 'conexion.php';
                        $stmt = $conexion->prepare('SELECT * FROM TIPO_CLIENTE');
                        $stmt->execute();

                        ?>
                        <!--<label for="rol">Tipo Documento</label>-->
                        <select name="tipoCliente" id="tipoCliente">
                            <?php
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                extract($row);
                            ?>
                                <option value="<?php echo $row["ID_TIPO"]; ?>"><?php echo $row["TIPO"] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <input type="text" name="razon_social" id="razon_social" autocomplete="off" placeholder="Razón Social">
                    </div>
                </div>
            </div>


            <label for="Telefono">Datos de contacto </label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="number" name="telefono" id="telefono" autocomplete="off" required="true" placeholder="Teléfono">
                    </div>
                    <div class="col-6">
                        <input type="email" name="correo" id="email" autocomplete="off" placeholder="Correo electrónico">
                    </div>
                </div>
            </div>




            <input class="rcli" type="submit" value="Registrar">
        </form>

    </div>

</section>