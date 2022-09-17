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

    $sql="UPDATE servicio SET fecha_realizacion='$fecha_realizacion',nombre_servicio='$nombre_servicio', especializacion='$especializacion',id_trabajadorServicio='$id_trabajadorServicio', id_usuarioServicio='$id_usuarioServicio',costo='$costo' WHERE id_servicio='$id_servicio'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicio.php");
    }
?>