<?php
require "Conexion2.php";
session_start();
$usuario = $_POST["usuario"];
$contraseña  = $_POST["contraseña"];
$sql = "SELECT COUNT(*) as cantidad FROM usuario WHERE Usu_usu='$usuario' AND Cla_usu='$contraseña'";
$consulta = mysqli_query($conexion,$sql);
$array = mysqli_fetch_array($consulta);
$row3=mysqli_fetch_array($consulta);
if ($array['cantidad'] > 0) {
    $_SESSION['username'] = $usuario;
    $_SESSION['contra'] = $contraseña;
    echo "<script>
     location.href = '../compra/compra.php ';
    </script>";
}
else if ($array['cantidad'] == 0 ) {
     echo "<script> alert('incorrecto');
     location.href = 'pagina_login.php';
     </script>";
  }
?>