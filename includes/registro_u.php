<section id="container">

        <div class="form_register">

            <h1 id="titulor">Registro de Usuarios</h1>
            <hr>
            <div class="alert"></div>

            <form   action="" method="post">

                <label for="nombre1">Nombres</label>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="nombre1" id="nombre1" placeholder="Primer Nombre">
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
                            <input type="text" name="apellido1" id="apellido1" placeholder="Primer Apellido">
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
                            <input type="number" name="identificacion" id="identificacion" placeholder="Documento">
                        </div>
                        <div class="col-6 ml-auto">
                            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
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
                            <input type="text" name="username" id="username" placeholder="Usuario">
                        </div>
                    </div>
                </div>


                <label for="clave">Contraseña</label>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="password" name="clave" id="clave" placeholder="Contraseña">
                        </div>
                        <div class="col-6 ml-auto">

                        </div>
                    </div>
                </div>


                <label for="rol">Tipo Usuario</label>
                <select name="rol" id="rol">
                    <option value="1">Administrador</option>
                    <option value="2">Vendedor</option>
                </select>

                <input type="submit" value="Registrar" class="btn_save">
            </form>

        </div>

    </section>
