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

    $sql="INSERT INTO empleados VALUES('$id_empleado','$curp','$nombre','$apellido','$puesto_trabajo','$salario','$turno')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: empleados.php");
    }else {}
?>