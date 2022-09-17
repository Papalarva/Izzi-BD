<?php
    include("conexion.php");
    $con=conectar();

    $id_servicio=$_GET['id'];

    $sql="DELETE FROM servicio WHERE id_servicio='$id_servicio'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicio.php");
    }
?>
