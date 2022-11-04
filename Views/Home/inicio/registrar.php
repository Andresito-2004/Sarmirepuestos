<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=icon href='../../../image/Logo-8.jpg' sizes="32x32" type="image/png">
    <link rel="stylesheet" href="../../../css/registrarse.css">
    <title>REGISTRARSE</title>
</head>
<body>
		<form action="../../../Controllers/clientes/registrar.php" method="POST">
      <br><br>
			<div id="tabla-formulario">
        <label for="nombre">Nombres</label>
				<input placeholder="Ingrese su nombre..." name="nombre" type="text"     id="tabla" required>
        
        <label for="apellido">Apellidos</label>
				<input placeholder="Ingrese su apellido..." name="apellido" type="text" id="tabla" required>

        <label for="correo">Tipo de identificacion</label>
				<input placeholder="Escriba su tipo de identificacion..." name="Tide" type="text" id="tabla" required>

        <label for="contra">Identificacion</label>
				<input placeholder="Escriba contraseña..." name="identificacion" type="number" id="tabla" required>

        <label for="fecha">Celular </label>
				<input placeholder="Escriba su celular..." name="celular" type="number" min="1"  id="tabla"  required>

        <label for="genero">Direccion</label>
				<input placeholder="Escriba su direccion..." name="direccion" type="text" id="tabla" required>

        <label for="genero">Usuario</label>
				<input placeholder="Escriba un usuario..." name="usuario" type="text" id="tabla" required>

        <label for="genero">Contraseña</label>
				<input placeholder="Escriba una contraseña..." name="contraseña" type="password" id="tabla" required>

			  <button name="registro" type="submit" id="button"> ¡Registrarse! </button><br><br>
		</form>
     
</html>
</body>
</html>