<?php
require ('../../Conexion.php');
    $con=conectar();
    $id = $_POST['ID'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Tide = $_POST['Tide'];
    $Identificación = $_POST['Identificación'];
    $Celular = $_POST['Celular'];
    $Dirección = $_POST['Dirección'];
    $Usuario = $_POST['Usuario'];
    $Clave = $_POST['Clave'];

    $sql="UPDATE usuario SET Nom_Usu='$Nombre',Ape_Usu='$Apellido',Ide_Usu='$Tide', Ide_Usu='$Identificación',Cel_Usu='$Celular',
    Dir_Usu='$Dirección',Usu_usu='$Usuario',Cla_Usu='$Clave' WHERE Cod_Usu='$id'";
    $query=mysqli_query($con,$sql);
     if($query){
        echo "<script> alert('Se actualizo correctamente');
         location.href = '../../Views/Administrador/Pagina_principal.php';
        </script>";
      
      }
      else if (!$query ) {
        echo "<script> alert('incorrecto');
        location.href = '#';
        </script>";
     }
?>
