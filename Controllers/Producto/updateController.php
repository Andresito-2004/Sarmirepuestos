<?php
require ('../../Conexion.php');
$con=conectar();
    $id = $_POST['codigo'];
    $Nompro = $_POST['Nombre'];
    $prec = $_POST['Precio'];
    $desc = $_POST['Descripcion'];
    $esta = $_POST['Estado'];

    $sql="UPDATE Producto SET Cod_pro='$id', Nom_pro='$Nompro',Prec_Pro='$prec',
    Des_pro='$desc',Est_Pro='$esta' WHERE Cod_pro='$id'";
    $query=mysqli_query($con,$sql);
    
    if($query){
        echo "<script> alert('Se actualizo correctamente');
         location.href = '../../views/producto/Producto.php';
        </script>";
      
      }
?>
