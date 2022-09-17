<?php 
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];
    $sql="SELECT * FROM servicio WHERE id_servicio='$id'";

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
                    <input type="hidden" name="id_servicio" value="<?php echo $row['id_servicio']  ?>">
                    <label>Fecha de realización</label>
                    <input type="date" class="form-control mb-3" name="fecha_realizacion" placeholder="Fecha de realización" value="<?php echo $row['fecha_realizacion']  ?>">
                    <input type="text" class="form-control mb-3" name="nombre_servicio" placeholder="Nombre del servicio" value="<?php echo $row['nombre_servicio']  ?>">
                    <input type="text" class="form-control mb-3" name="especializacion" placeholder="Especialización" value="<?php echo $row['especializacion']  ?>">
                    <input type="text" class="form-control mb-3" name="id_trabajadorServicio" placeholder="ID del trabajador" value="<?php echo $row['id_trabajadorServicio']  ?>">
                    <input type="text" class="form-control mb-3" name="id_usuarioServicio" placeholder="ID del usuario" value="<?php echo $row['id_usuarioServicio']  ?>">
                    <input type="text" class="form-control mb-3" name="costo" placeholder="Costo" value="<?php echo $row['costo']  ?>">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>
            </div>
    </body>
</html>