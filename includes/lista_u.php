<section id="container">

    <div class="form_listar">

        <table class="pure-table pure-table-horizontal">
            <thead>
                <tr>
                    <th style="text-align:left;">Id</th>
                    <th style="text-align:left;">Nombre</th>
                    <th style="text-align:left;">Identificación</th>
                    <th style="text-align:left;">Tipo Documento</th>
                    <th style="text-align:left;">Email</th>
                    <th style="text-align:left;">Usuario</th>
                    <th style="text-align:left;">Rol</th>
                    <th style="text-align:left;">Acción</th>

                </tr>
                <?php
                include 'conexion.php';
                try {
                    $stmt = $conexion->prepare("SELECT * FROM listarUsuario");
                    $stmt->execute();
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $ex) {
                    echo "Ocurrió un error<br>";
                    echo $ex->getMessage();
                    exit;
                }

                foreach ($rows as $row) {
                ?> <tr>
                        <td> <style="text-align:left;"> <?php echo $row["id"] ?> </td>
                        <td> <style="text-align:left;"> <?php echo $row["Nombre"] ?> </td>
                        <td> <style="text-align:left;"> <?php echo $row["identificacion"] ?> </td>
                        <td> <style="text-align:left;"> <?php echo $row["tipo_documento"] ?> </td>
                        <td> <style="text-align:left;"> <?php echo $row["email"] ?> </td>
                        <td> <style="text-align:left;"> <?php echo $row["username"] ?> </td>
                        <td> <style="text-align:left;"> <?php echo $row["rol"] ?> </td>
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