<?php
    include("conexion.php");
    $con=conectar();

    $id_factura=$_GET['id'];

    $sql="DELETE FROM factura WHERE id_usuario='$id_factura'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>
