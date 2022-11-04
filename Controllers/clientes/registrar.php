<?php
require ('../conexion.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$Tide  = $_POST['Tide'];
$Identificacion  = $_POST['identificacion'];
$Celular  = $_POST['celular'];
$Direccion  = $_POST['direccion'];
$usuario = $_POST['usuario'];
$contraseña  = $_POST['contraseña'];
$estado = 'Activo';
$tipo_usu = '3';

$insertar1 = "INSERT INTO usuario VALUES 
('','$nombre','$apellido','$Identificacion','$Tide','$Celular','$Direccion','$usuario','$contraseña','$estado','$tipo_usu') ";


$query = mysqli_query($conexion, $insertar1);

if($query){
  echo "<script> alert('correcto');
   location.href = '../../Views/Home/compra/compra.php';
  </script>";

}else{
   echo "<script> alert('incorrecto, vuelve a intentarlo');
   location.href = '../../Views/Home/compra/compra.php';
   </script>";
}
