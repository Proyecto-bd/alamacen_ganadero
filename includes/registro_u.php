<section id="container">

    <div class="form_register">

        <h1 id="titulor">Registro de Usuarios</h1>
        <hr>
        <div class="alert"></div>

        <form action="" method="post">

            <label for="nombre1">Nombres</label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="nombre1" id="nombre1" required="true" placeholder="Primer Nombre">
                    </div>
                    <div class="col-6 ml-auto">
                        <input type="text" name="nombre2" id="nombre2" placeholder="Segundo Nombre">
                    </div>
                </div>

            </div>
            <label for="apellido1">Apellidos</label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="apellido1" id="apellido1" required="true" placeholder="Primer Apellido">
                    </div>
                    <div class="col-6 ml-auto">
                        <input type="text" name="apellido2" id="apellido2" placeholder="Segundo Apellido">
                    </div>
                </div>
            </div>
            <label for="identificacion">Identificación y teléfono</label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="number" name="identificacion" id="identificacion" requiered="true" placeholder="Documento">
                    </div>
                    <div class="col-6 ml-auto">
                        <input type="number" name="telefono" id="telefono" required="true" placeholder="Teléfono">
                    </div>
                </div>
            </div>
            <label for="email">Email y usuario</label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="email" name="correo" id="email" placeholder="Correo">
                    </div>
                    <div class="col-6 ml-auto">
                        <input type="text" name="username" id="username" required="true" placeholder="Usuario">
                    </div>
                </div>
            </div>
            <label for="clave">Contraseña</label>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <input type="password" name="clave" id="clave" required="true" placeholder="Contraseña">
                    </div>
                    <div class="col-6 ml-auto">
                        <div class="col-6">
                            <input type="password" name="clave2" id="clave2" required="true" placeholder="Repita la Contraseña">
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include_once 'conexion.php';
            $stmt = $conexion->prepare('SELECT * FROM ROL');
            $stmt->execute();

            ?>

            <label for="rol">Tipo Usuario</label>
            <select name="rol" id="rol">
                <?php
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);

                ?>
                    <option value="<?php echo $row["ID_ROL"]; ?>"><?php echo $row["NOMBRE"] ?></option>
                <?php
                }

                ?>
            </select>

            <?php
            include_once 'conexion.php';
            $stmt = $conexion->prepare('SELECT * FROM TIPO_IDENTIFICACION');
            $stmt->execute();

            ?>

            <label for="rol">Tipo Documento</label>
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

            <div>
                <input type="submit" value="Registrar" class="btn_save">
            </div>

        </form>

    </div>

</section>