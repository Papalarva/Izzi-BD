<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];
    $sql="SELECT * FROM factura WHERE id_factura='$id'";

    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
            <div class="container mt-5">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id_factura" value="<?php echo $row['id_factura']  ?>">
                    <label for="">Fecha de factura</label>
                    <input type="date" class="form-control mb-3" name="fecha_factura" placeholder="Fecha de factura" value="<?php echo $row['fecha_factura']  ?>">
                    <input type="text" class="form-control mb-3" name="id_usuarioFactura" placeholder="ID usuario" value="<?php echo $row['id_usuarioFactura']  ?>">
                    <input type="text" class="form-control mb-3" name="costo" placeholder="Costo" value="<?php echo $row['costo']  ?>">
                    <input type="text" class="form-control mb-3" name="paquete_internet" placeholder="Paquete de internet" value="<?php echo $row['paquete_internet']  ?>">
                    <input type="text" class="form-control mb-3" name="metodo_pago" placeholder="Método de pago" value="<?php echo $row['metodo_pago']  ?>">
                    <input type="date" class="form-control mb-3" name="fecha_contratacion" placeholder="Fecha de contratación" value="<?php echo $row['fecha_contratacion']  ?>">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>
            </div>
    </body>
</html>