<?php 
include('../../Conexion.php');
session_start();
$name =  $_SESSION['username'];

if (!isset($name)) {
  header("location : '../Home/Iniciar_sesion/pagina_login.php");
}
$con=conectar();
$productos = "SELECT Cod_Usu,Nom_Usu,Ape_Usu,Ide_Usu,Tid_Usu,Cel_Usu,Dir_Usu,Usu_usu,Cla_Usu FROM usuario where Usu_Usu =  '$name' ";
$query=mysqli_query($con,$productos);
$row=mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="¡Bienvenido!">
    <meta name="description" content="">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="../../css/Pagina_adm.css" media="screen">
  <link rel="stylesheet" href="../../css/Pagina-Principal.css" media="screen">
  <link rel="stylesheet" href="../../css/bootstrap.min.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../js/jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../js/nicepage.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../js/bootstrap.min.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.15.11, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Logo.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Pagina Principal">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-521e"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Pagina_principal.php" class="u-image u-logo u-image-1" data-image-width="412" data-image-height="385">
          <img src="../../image/Logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-light-1" href="Pagina_Principal.php" style="padding: 10px 20px;">Pagina Principal</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-light-1" href="../Producto/Producto.php" style="padding: 10px 20px;">Productos</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-4-light-1" href="../../Controllers/Login/salir.php" style="padding: 10px 20px;">Cerrar Sesión</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-afcb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-lobster u-text u-text-default u-text-1">¡Bienvenido <?php echo $name  ?>!</h1>
        <div class="u-form u-form-1">
          <form action="../../Controllers/Usuario/update.php" method="POST" class="u-clearfix u-form-spacing-8 u-form-vertical u-inner-form" style="padding: 0px;" source="email" name="form-2">
          <div class="u-form-group">
              <label for="text-1fe3" class="u-label">ID</label>
              <input type="text" id="text-1fe3" name="ID" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12"  readonly='readonly' value="<?php echo $row['Cod_Usu']  ?>" >
            </div>
          <div class="u-form-group">
              <label for="text-1fe3" class="u-label">Nombre</label>
              <input type="text" id="text-1fe3" name="Nombre" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12" value="<?php echo $row['Nom_Usu']  ?>">
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="text-10ff" class="u-label">Apellido</label>
              <input type="text" placeholder="" id="text-10ff" name="Apellido" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12" value="<?php echo $row['Ape_Usu']  ?>">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-863c" class="u-label">Tipo de identificacion</label>
              <input type="text" placeholder="" id="text-863c" name="Tide" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12" value="<?php echo $row['Ide_Usu']  ?>">
            </div>
            <div class="u-form-group u-form-group-4">
              <label for="text-67b1" class="u-label">Identificación</label>
              <input type="text" placeholder="" id="text-67b1" name="Identificación" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12" value="<?php echo $row['Tid_Usu']  ?>">
            </div>
            <div class="u-form-group u-form-group-5">
              <label for="text-43b8" class="u-label">Celular</label>
              <input type="number" placeholder="" id="text-43b8" name="Celular" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12"  value="<?php echo $row['Cel_Usu']  ?>" >
            </div>
            <div class="u-form-group u-form-group-6">
              <label for="text-6fab" class="u-label">Dirección</label>
              <input type="text" placeholder="" id="text-6fab" name="Dirección" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12" value="<?php echo $row['Dir_Usu']  ?>" >
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2">
              <label for="name-da97" class="u-label" wfd-invisible="true">Usuario</label>
              <input type="text" id="name-da97" name="Usuario" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12" value="<?php echo $row['Usu_usu']  ?>">
            </div>
            <div class="u-form-email u-form-group u-form-partition-factor-2">
              <label for="email-da97" class="u-label" wfd-invisible="true">Clave</label>
              <input type="number" id="email-da97" name="Clave" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle u-radius-12" value="<?php echo $row['Cla_Usu']  ?>">
            </div>
            <div class="u-align-right u-form-group u-form-submit">
            <button  class="btn btn-primary">Actualizar</button>
          </form>
        </div>
      </div>
    </section>

  
</body></html>