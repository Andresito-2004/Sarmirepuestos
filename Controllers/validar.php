<?php
session_start();
include ('../Conexion.php');
$con=conectar();
$Identificacion=$_POST['Ide'];;
$sql = "SELECT Nom_Usu,Ape_Usu,Cel_Usu FROM usuario where Ide_Usu=$Identificacion";
$query=mysqli_query($con,$sql);
$filas=mysqli_num_rows($query);
if($filas == 1){
    echo "<script> alert('Bienvenido');
    location.href = '../views/home/pagina_principal.php';</script>";
        $_SESSION['Nombre'] =  'Nom_Usu';
        $_SESSION['Apellido'] =  'Ape_Usu';
        $_SESSION['Celular'] =  'Cel_Usu';
  }
  else if ($filas == 0) {
    echo "<script> alert('incorrecto');</script>";
 }
?>
