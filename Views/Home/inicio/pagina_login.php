<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN CLIENTES</title>
    <link rel="stylesheet" href="../../../css/index.css">
    <link rel=icon href='../../../image/Logo-8.jpg' sizes="32x32" type="image/png">
</head>
<body><div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Iniciar sesion </h2>
    <a href="registrar.php"><h2 class="active" > Registrarse </a></h2>

    <!-- Login Form -->
    <form action="logear.php" method="POST" autocomplete="off">

      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Usuario"  required>
      <input type="password" id="password" class="fadeIn third" name="contraseña" placeholder="Contraseña"  required>
      <input type="submit" class="fadeIn fourth" value="Enviar">
      <a href="pagina_productos.php">Regresar</a>
    </form>

  
  </div>
</div>
</body>
</html>



