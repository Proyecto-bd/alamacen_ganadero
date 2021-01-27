
		<header>			
		<div class="container">
			<div class="row contenedor_logo_menu">

				<div class="logo col-xs-12 col-md-6">
				<h1 class="primera_linea">Almacen Ganadero</h1>
				</div>

			<div class="menu col-xs-12 col-md-6">
				<p class="info">Colombia, <?php echo fechaC();?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['usuario']?></span>

				<a href=""></a><img class="photouser" src="image/user.png" alt="Usuario"></a>
				<a href="cerrar.php"><img class="close" src="image/salir.png" alt="Salir del sistema" title="Salir"></a>
		</div>
 <?php 
     include 'nav.php';
	?> 
	</div>
			<div class="row textos">
				<div class="col-md-12">
					<h2 class="primera_linea">Un almacen pensado para tí</h2>
					<h3 class="segunda_linea">Bienvenido al sistema</h3>

				</div>
			</div>
		</div>	
	</header>
