<?php 
    include('../../Conexion.php');
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Producto WHERE Cod_pro='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../css/nicepage.css" media="screen">
        <link rel="stylesheet" href="../../css/Productos.css" media="screen">
        <link rel="stylesheet" href="../../css/bootstrap.min.css" media="screen">
        <script class="u-script" type="text/javascript" src="../../js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="../../js/nicepage.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="../../js/Productos.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="../../js/bootstrap.min.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Productos">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-2612"><div class="u-clearfix u-sheet u-sheet-1">    
  <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90" href="../Administrador/Pagina_principal.php" style="padding: 10px 0px;">Pagina Principal</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90" href="Producto.php" data-page-id="109880665" style="padding: 10px 0px;">productos</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90" href="../Administrador/Pagina_clientes.php" data-page-id="109880665" style="padding: 10px 0px;">Clientes</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90"href="../Home/Iniciar_sesion/pagina_login.php">Cerrar sesión</a>
</li></ul>
          </div>
        </nav>
        <a href="../../views/inicio/inicio.php" class="u-image u-logo u-image-1" data-image-width="412" data-image-height="385">
          <img src="../../image/Logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
      </div>    
    </head>
    <section class="text-center"> <h2 class="text-primary">Actualizar</h2></section>
    <body>
                <div class="container mt-5">
                    <form action="../../Controllers/Producto/updateController.php" method="POST">
                    <input type="hidden" name="codigo" value="<?php echo $row['Cod_pro']  ?>">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control mb-3" name="Nombre"  value="<?php echo $row['Nom_pro']  ?>">
                                <label for="Nombre">Precio</label>
                                <input type="text" class="form-control mb-3" name="Precio" value="<?php echo $row['Prec_Pro']  ?>">
                                <label for="Nombre">Descripcion</label>
                                <input type="text" class="form-control mb-3" name="Descripcion" value="<?php echo $row['Des_pro']  ?>">
                                <label for="Nombre">Estado</label>
                                <input type="text" class="form-control mb-3" name="Estado" value="<?php echo $row['Est_Pro']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>