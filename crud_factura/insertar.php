<?php
    include("conexion.php");
    $con=conectar();

    $id_factura=$_POST['id_factura'];
    $fecha_factura=$_POST['fecha_factura'];
    $id_usuarioFactura=$_POST['id_usuarioFactura'];
    $costo=$_POST['costo'];
    $paquete_internet=$_POST['paquete_internet'];
    $metodo_pago=$_POST['metodo_pago'];
    $fecha_contratacion=$_POST['fecha_contratacion'];

    $sql="INSERT INTO factura VALUES('$id_factura','$fecha_factura','$id_usuarioFactura','$costo','$paquete_internet','$metodo_pago','$fecha_contratacion')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }else {}

?>