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

    $sql="INSERT INTO usuario VALUES('$id_usuario','$nombre','$apellido','$codigo_postal','$direccion','$telefono','$correo')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }else {}
?>