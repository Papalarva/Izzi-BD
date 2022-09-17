<?php
    include("conexion.php");
    $con=conectar();

    $id_servicio=$_POST['id_servicio'];
    $fecha_realizacion=$_POST['fecha_realizacion'];
    $nombre_servicio=$_POST['nombre_servicio'];
    $especializacion=$_POST['especializacion'];
    $id_trabajadorServicio=$_POST['id_trabajadorServicio'];
    $id_usuarioServicio=$_POST['id_usuarioServicio'];
    $costo=$_POST['costo'];

    $sql="INSERT INTO servicio VALUES('$id_servicio','$fecha_realizacion','$nombre_servicio','$especializacion','$id_trabajadorServicio','$id_usuarioServicio','$costo')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: servicio.php");
    }else {}
?>