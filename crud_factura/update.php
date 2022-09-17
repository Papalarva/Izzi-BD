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

    $sql="UPDATE factura SET fecha_factura='$fecha_factura',id_usuarioFactura='$id_usuarioFactura',costo='$costo', paquete_internet='$paquete_internet',metodo_pago='$metodo_pago', fecha_contratacion='$fecha_contratacion' WHERE id_factura='$id_factura'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: factura.php");
    }
?>