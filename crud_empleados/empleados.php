<?php
    include("conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM empleados";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> PAGINA EMPLEADOS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingrese datos del empleado</h1>
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="curp" placeholder="CURP">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                        <input type="text" class="form-control mb-3" name="puesto_trabajo" placeholder="Puesto de Trabajo">
                        <input type="text" class="form-control mb-3" name="salario" placeholder="Salario">
                        <input type="text" class="form-control mb-3" name="turno" placeholder="Turno">
                        <input type="submit" class="btn btn-primary">
                        <a href="../index.php" class="btn btn-primary">INICIO</a>
                    </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>ID</th>
                                <th>DNI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Puesto de Trabajo</th>
                                <th>Salario</th>
                                <th>Turno</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $row['id_empleado'] ?></th>
                                            <th><?php echo $row['curp'] ?></th>
                                            <th><?php echo $row['nombre'] ?></th>
                                            <th><?php echo $row['apellido'] ?></th>
                                            <th><?php echo $row['puesto_trabajo'] ?></th>
                                            <th><?php echo $row['salario'] ?></th>
                                            <th><?php echo $row['turno'] ?></th>
                                            <th><a href="actualizar.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="delete.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-danger">Eliminar</a></th>
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