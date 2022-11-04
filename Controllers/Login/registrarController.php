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
$tipo =$_POST['rol'];
switch($tipo) {
  case '1':
    $tipo_usu = '1';
    break;
  case '2':
    $tipo_usu = '2';
    break;
  case '3':
    $tipo_usu = '3';
    break;
  }

$insertar1 = "INSERT INTO usuario VALUES 
('','$nombre','$apellido','$Identificacion','$Tide','$Celular','$Direccion','$usuario','$contraseña','$estado','$tipo_usu') ";
$query = mysqli_query($conexion, $insertar1);

if($query){
  echo "<script> alert('correcto');
   location.href = '../../views/Home/inicio/pagina_login.php';
  </script>";

}else{
   echo "<script> alert('incorrecto, vuelve a intentarlo');
   location.href = 'registrarController.php';
   </script>";
}
