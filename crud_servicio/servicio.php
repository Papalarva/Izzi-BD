<?php
    include("conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM servicio";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> PAGINA SERVICIO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingrese datos del servicio</h1><br>
                    <form action="insertar.php" method="POST">
                        <label for="" >Fecha de realización</label>
                        <input type="date" class="form-control mb-3" name="fecha_realizacion" placeholder="Fecha de realización">
                        <input type="text" class="form-control mb-3" name="nombre_servicio" placeholder="Nombre del servicio">
                        <input type="text" class="form-control mb-3" name="especializacion" placeholder="Especialización">
                        <input type="text" class="form-control mb-3" name="id_trabajadorServicio" placeholder="ID Trabajador">
                        <input type="text" class="form-control mb-3" name="id_usuarioServicio" placeholder="ID Usuario">
                        <input type="text" class="form-control mb-3" name="costo" placeholder="Costo">
                        <input type="submit" class="btn btn-primary">
                        <a href="../index.php" class="btn btn-primary">INICIO</a>
                    </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Fecha de realización</th>
                                <th>Nombre del servicio</th>
                                <th>Especialización</th>
                                <th>ID Trabajador</th>
                                <th>ID Usuario</th>
                                <th>Costo</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $row['id_servicio'] ?></th>
                                            <th><?php echo $row['fecha_realizacion'] ?></th>
                                            <th><?php echo $row['nombre_servicio'] ?></th>
                                            <th><?php echo $row['especializacion'] ?></th>
                                            <th><?php echo $row['id_trabajadorServicio'] ?></th>
                                            <th><?php echo $row['id_usuarioServicio'] ?></th>
                                            <th><?php echo $row['costo'] ?></th>
                                            <th><a href="actualizar.php?id=<?php echo $row['id_servicio'] ?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="delete.php?id=<?php echo $row['id_servicio'] ?>" class="btn btn-danger">Eliminar</a></th>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>