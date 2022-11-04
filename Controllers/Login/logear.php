<?php
require "../Conexion.php";
session_start();
$usuario = $_POST["usuario"];
$contraseña  = $_POST["contraseña"];
$sql = "SELECT COUNT(*) as cantidad FROM usuario WHERE (Usu_usu='$usuario' AND Cla_usu='$contraseña') AND (FK_Cod_rol='1')";
$consulta = mysqli_query($conexion,$sql);
$array = mysqli_fetch_array($consulta);
if ($array['cantidad'] > 0) {
    $_SESSION['username'] = $usuario;
    $_SESSION['cod'] = 'Cod_usu';
    echo "<script>
     location.href = '../../Views/Administrador/pagina_principal.php ';
    </script>";
}
else if ($array['cantidad'] == 0 ) {
     echo "<script> alert('incorrecto no estas autorizado');
     location.href = '../../Views/home/iniciar_Sesion/pagina_login.php';
     </script>";
  }
?>