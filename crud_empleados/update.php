<?php

    include("conexion.php");
    $con=conectar();

    $id_empleado=$_POST['id_empleado'];
    $curp=$_POST['curp'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $puesto_trabajo=$_POST['puesto_trabajo'];
    $salario=$_POST['salario'];
    $turno=$_POST['turno'];

    $sql="UPDATE empleados SET curp='$curp', nombre='$nombre',apellido='$apellido',puesto_trabajo='$puesto_trabajo', salario='$salario',turno='$turno' WHERE id_empleado='$id_empleado'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }
?>