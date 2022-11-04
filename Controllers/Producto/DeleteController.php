<?php

include("../../conexion.php");
$con=conectar();

$cod_pro=$_GET['id'];

$sql="DELETE FROM Producto  WHERE Cod_pro='$cod_pro'";
$query=mysqli_query($con,$sql);

    if($query){
        echo "<script> alert('Se elimino correctamente');
         location.href = '../../views/producto/Producto.php';
        </script>";
    }
?>