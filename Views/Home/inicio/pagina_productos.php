<?php 
    include('../../../Conexion.php');
    $con=conectar();
	$sql = "SELECT Cod_pro,Nom_pro,Prec_Pro,Des_pro FROM producto";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_row($query);

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>SARMIREPUESTOS S.A</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/nicepage.css" media="screen">
	<link rel=icon href='../../../image/Logo-8.jpg' sizes="32x32" type="image/png">	
	<link rel="stylesheet" href="../../../css/Productos.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../../js/nicepage.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../../js/Productos.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
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
          <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90" href="pagina_principal.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90" href="pagina_productos.php" data-page-id="109880665" style="padding: 10px 0px;">productos</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90" href="pagina_principal.php#sec-930e" data-page-id="109880665" style="padding: 10px 0px;">Contactanos</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-grey-90 u-text-hover-grey-90" href="../Iniciar_sesion/pagina_login.php">Iniciar sesión</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="pagina_principal.php" class="u-image u-logo u-image-1" data-image-width="412" data-image-height="385">
          <img src="../../../image/Logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-c7a4">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
  <body>
	<!-- Insertar Aquí contenido -->
  <center>
	<div class="contenedor">
		<div class="titulo">
			<div class="shape right-skew">
				<i class="fas fa-laptop"></i>
				<h2>Productos</h2>
			</div>
		</div>
		<div class="slider carousel">
			<div class="producto item">
				<div class="contenedor-imagen">
					<img src="../../../image/turbo1.jpg">
				</div>				
				<div class="datos">
					<div class="starrr"></div>
					<small><?php echo  $row['1']?></small><br> 
					<h7><?php  echo $row['3']?></h7>
				</div>
				<div class="precios">
					<div class="internet">
						<small>Internet</small>
						<span>$<?php  echo $row['2']?></span>
					</div>
					<div>
						<small>Normal</small>
						<span>$6.898,125</span>
					</div>
				</div>
				<a href="pagina_login.php" class="btn-carrito"><i class="fas fa-shopping-basket"></i> Ir a comprar..</a>
			</div>
			<div class="producto item">
				<div class="contenedor-imagen">
					<img src="../../../image/turbo3.jpg">
				</div>				
				<div class="datos">
					<div class="starrr"></div>
					<small></small></small><br>
					 <h7></h7>
				</div>
				<div class="precios">
					<div class="internet">
						<small>Internet</small>
						<span>$12.352,950</span>
					</div>
					<div>
						<small>Normal</small>
						<span>$37.525,800</span>
					</div>
				</div>
				<a href="pagina_login.php" class="btn-carrito"><i class="fas fa-shopping-basket"></i> Ir a comprar..</a>
			</div>
			<div class="producto item">
				<div class="contenedor-imagen">
					<img src="../../../image/Supercharller1.jpg">
				</div>				
				<div class="datos">
					<div class="starrr"></div>
					<small>Kit de supercargador</small><br>
					<h7>Tipo roots para motor V8 a carburador, mas de 100 hps directo al motor</h7>
				</div>
				<div class="precios">
					<div class="internet">
						<small>Internet</small>
						<span>$5.219,340</span>
					</div>
					<div>
						<small>Normal</small>
						<span>$8.029,760</span>
					</div>
				</div>
				<a href="pagina_login.php" class="btn-carrito"><i class="fas fa-shopping-basket"></i> Ir a comprar..</a>
			</div>
			<div class="producto item">
				<div class="contenedor-imagen">
					<img src="../../../image/stage.png">
				</div>				
				<div class="datos">
					<div class="starrr"></div>
					<small>Reprogramacion</small><br>
					<h7>STAGE 2</h7>
				</div>
				<div class="precios">
					<div class="internet">
						<small>Internet</small>
						<span>$2.000,000</span>
					</div>
					<div>
						<small>Normal</small>
						<span>$2.800,000</span>
					</div>
				</div>
				<a href="pagina_login.php" class="btn-carrito"><i class="fas fa-shopping-basket"></i> Ir a comprar..</a>
			</div>
			<div class="producto item">
				<div class="contenedor-imagen">
					<img src="../../../image/bomba_gaolina1.jpg"> 
				</div>				
				<div class="datos">
					<div class="starrr"></div>
					<small>Bomba de gasolina</small><br>
					<h7>D2 Racing RS</h7>
				</div>
				<div class="precios">
					<div class="internet">
						<small>Internet</small>
						<span>$1.020,000</span>
					</div>
					<div>
						<small>Normal</small>
						<span>$1.800,000</span>
					</div>
				</div>
				<a href="pagina_login.php" class="btn-carrito"><i class="fas fa-shopping-basket"></i>Ir a comprar..</a>
			</div>
			<div class="producto item">
				<div class="contenedor-imagen">
					<img src="../../../image/metanol1.jpg">
				</div>				
				<div class="datos">
					<div class="starrr"></div>
					<small>Sistema de metanol</small><br>
					<h7>Sistema de metanol para vehiculos aspirados naturalmente</h7>
				</div>
				<div class="precios">
					<div class="internet">
						<small>Internet</small>
						<span>$1.089,000</span>
					</div>
					<div>
						<small>Normal</small>
						<span>$1.500,000</span>
					</div>
				</div>
				<a href="#" class="btn-carrito"><i class="fas fa-shopping-basket"></i> Ir a comprar..</a>
			</div>
		</div>
	</div>
	</body>
  </center>
  </body>
</html>