<?php
    include("conexion.php");
    $con=conectar();

    $id_empleado=$_GET['id'];

    $sql="DELETE FROM empleados WHERE id_empleado='$id_empleado'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>
