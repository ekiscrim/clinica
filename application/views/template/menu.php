<body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/viewportchecker.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jasny-bootstrap.min.js"); ?>"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<div class="container">
		<header>
			<nav class="navbar navbar-default" role="navigation">
			<!-- El logotipo y el icono que despliega el menú se agrupan
			para mostrarlos mejor en los dispositivos móviles -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Desplegar navegación</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand logo" href="<?php echo base_url() ?>"><img src="<?php echo base_url("assets/img/logobarras.png") ?>"</img> <p>Dr. Manuel Sanchez Nebreda</p></a>
					<img class="inst" src="<?php echo base_url("assets/img/inst.png") ?>"</img>
				</div>

			<!-- Agrupar los enlaces de navegación, los formularios y cualquier
			otro elemento que se pueda ocultar al minimizar la barra -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="<?php echo active('somos'); ?>"><a href="<?php echo base_url();?>somos">Quiénes somos</a></li>
					<li class="<?php echo active('Servicios'); ?>"><a href="<?php echo base_url();?>servicios#nariz">Servicios</a></li>
					<li class="<?php echo active('equipo'); ?>"><a href="<?php echo base_url();?>equipo">Equipo</a></li>
					<li class="<?php echo active('galeria'); ?>"><a href="<?php echo base_url();?>galeria">Galería</a></li>
					<li class="<?php echo active('contacto'); ?>"><a href="<?php echo base_url();?>contacto">Contacto</a></li>
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menú #1 <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Acción #1</a></li>
							<li><a href="#">Acción #2</a></li>
							<li><a href="#">Acción #3</a></li>
							<li class="divider"></li>
							<li><a href="#">Acción #4</a></li>
							<li class="divider"></li>
							<li><a href="#">Acción #5</a></li>
						</ul>
					</li> -->
				</ul>
			</nav>
		</header>
	</div>


