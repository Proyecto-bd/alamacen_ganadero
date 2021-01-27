<section id="container">

        <div class="form_register">

        <h1 id="titulor">Registro de Productos</h1>
            <hr>
            <div class="alert"></div>

            <form  class="cli" action="" method="post">

                <label for="nombre">Nombre</label>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="nombre" id="nombre" placeholder=" Nombre">
                        </div>
                    </div>

                </div>

                <label for="apellido1">Descripción</label>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="Descripción" id="Descripción" placeholder="Descripción">
                        </div>
                    </div>
                </div>


                <label for="Cantidad">Cantidad</label>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="number" name="Cantidad" id="Cantidad" placeholder="Cantidad">
                        </div>
                    </div>
                </div>


                <label for="Estado">Estado</label>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="Estado" id="Estado" placeholder="Estado">
                        </div>
                    </div>
                </div>


                <label for="Valor">Valor</label>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <input type="number" name="Valor" id="Valor" placeholder="Valor">
                        </div>
                    </div>
                </div>



                <label for="rol">Categoria</label>
                <select name="rol" id="rol">
                    <option value="1">venenos</option>
                    <option value="2">concentrados</option>
                </select>

                <input type="submit" value="Registrar" class="btn_save">
            </form>

</div>

</section>
