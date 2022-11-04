<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Agregar Producto</title>
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
		<script src="../../js/bootstrap.min.js" ></script>
	</head>
	
	<body><br><br>
		<div class="container">
			<center><h1>Agregar Producto</h1></center>
			
			<form action="../../Controllers/Producto/InsertController.php" method="POST">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Ingrese el nombre">
                                <label for="Nombre">Precio</label>
                                <input type="number" class="form-control mb-3" name="Precio"  placeholder="Ingrese el Precio">
                                <label for="Nombre">Descripcion</label>
                                <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Ingrese la Descripcion">
                                <label for="Nombre">Estado (Activo,Inactivo)</label>
                                <input type="text" class="form-control mb-3" name="Estado" placeholder="Ingrese el Estado">
                            <input type="submit" class="btn btn-primary btn-block" value="Confirmar">
                    </form>
		</div>
	</body>
</html>