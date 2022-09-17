<?php
    include("conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM factura";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAGINA FACTURA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <h1>Ingrese datos para la factura</h1>
                    <form action="insertar.php" method="POST">
                        <label for="">Fecha de la factura</label>
                        <input type="date" class="form-control mb-3" name="fecha_factura" placeholder="Fecha de la Factura">
                        <input type="text" class="form-control mb-3" name="id_usuarioFactura" placeholder="ID usuario">
                        <input type="text" class="form-control mb-3" name="costo" placeholder="Total a pagar">
                        <input type="text" class="form-control mb-3" name="paquete_internet" placeholder="Paquete de internet">
                        <input type="text" class="form-control mb-3" name="metodo_pago" placeholder="Método de pago">
                        <label for="">Fecha de contratación</label>
                        <input type="date" class="form-control mb-3" name="fecha_contratacion" placeholder="Fecha de contratación">
                        <input type="submit" class="btn btn-primary">
                        <a href="../index.php" class="btn btn-primary">INICIO</a>
                    </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Fecha de factura</th>
                                <th>ID usuario</th>
                                <th>Costo</th>
                                <th>Paquete de internet</th>
                                <th>Método de pago</th>
                                <th>Fecha de contratación</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $row['id_factura'] ?></th>
                                            <th><?php echo $row['fecha_factura'] ?></th>
                                            <th><?php echo $row['id_usuarioFactura'] ?></th>
                                            <th><?php echo $row['costo'] ?></th>
                                            <th><?php echo $row['paquete_internet'] ?></th>
                                            <th><?php echo $row['metodo_pago'] ?></th>
                                            <th><?php echo $row['fecha_contratacion'] ?></th>
                                            <th><a href="actualizar.php?id=<?php echo $row['id_factura'] ?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="delete.php?id=<?php echo $row['id_factura'] ?>" class="btn btn-danger">Eliminar</a></th>
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