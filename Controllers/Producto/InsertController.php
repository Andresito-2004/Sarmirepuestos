<?php
include("../../conexion.php");
$con=conectar();
    $Nompro = $_POST['Nombre'];
    $prec = $_POST['Precio'];
    $desc = $_POST['Descripcion'];
    $esta = $_POST['Estado'];


$sql="INSERT INTO producto VALUES('','$Nompro',' $prec',' $desc',' $esta')";
$query= mysqli_query($con,$sql);

if($query){
    echo "<script> alert('Se ingreso correctamente');
         location.href = '../../views/producto/Producto.php';
        </script>";
    
}else {
}
?>