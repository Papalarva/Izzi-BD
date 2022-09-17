<?php

    include("conexion.php");
    $con=conectar();

    $id_usuario=$_POST['id_usuario'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $codigo_postal=$_POST['codigo_postal'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $correo=$_POST['correo'];

    $sql="UPDATE usuario SET nombre='$nombre',apellido='$apellido',codigo_postal='$codigo_postal', direccion='$direccion',telefono='$telefono', correo='$correo' WHERE id_usuario='$id_usuario'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>