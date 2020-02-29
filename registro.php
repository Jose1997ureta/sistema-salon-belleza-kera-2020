<?php
session_start();
require 'requirelanguage.php';
?>
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Regístrate</title>
	<meta name="description" content="Cosméticos naturales">
    <meta name="keywords" content="cosméticos en lima, cosméticos naturales, productos de belleza en lima, aminoplastía capilar">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" sizes="192x192" href="images/favicon.png">
	<meta name="theme-color" content="#1a1a1a">
	<meta name="msapplication-navbutton-color" content="#1a1a1a">
	<meta name="apple-mobile-web-app-status-bar-style" content="#1a1a1a">
	
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/producto.css">
</head>
<body class="body">
	<header>
		<div class="header">
			<div class="header_menu">
				<div class="header_menu_burguer">
					<span></span>
					<span></span>
				</div>
				<nav class="header_menu_nav" id="mySidebar2">
					<ul>
						<li><a href="index.php" class="active"><?php echo $home; ?></a></li>
						<li><a href="productos.php"><?php echo $productos; ?></a></li>
						<li><a href="index.php#contacto"><?php echo $contacto; ?></a></li>
					</ul>
					<div class="header__nav_info">
						<div class="header__info_data">
							<b>PHONE:</b>
							<p>+51 987 654 321<br>+51 987 654 321</p>
						</div>
						<div class="header__info_data">
							<b>ADDRESS:</b>
							<p>Intisuyo 165 Urb Maranga San Miguel</p>
						</div>
						<div class="puntos">
							<img src="icon/puntos.svg" alt="">
						</div>
					</div>
					<div class="header__nav_redes">
						<a href="">facebook</a>
						<a href="">youtube</a>
						<a href="">instagram</a>
					</div>
				</nav>
			</div>
			<div class="header_logo">
				<a href="index.php">
					<img src="icon/logo-blanco.svg" alt="">
				</a>
			</div>
			<div class="header_idioma">
				<a href="changelanguage.php?language=es">ES</a>
				<a href="changelanguage.php?language=en">EN</a>
				<a href="changelanguage.php?language=ru">RU</a>
				<a href="changelanguage.php?language=fr">FR</a>
			</div>
		</div>
	</header>
	<main>
		<section class="registro_ant">
			<div class="registro">
				<div class="title_center">
    				<b>REGÍSTRATE</b>
    			</div>
    			<p>Completa tus datos para ser atendido por uno de nuestro especialistas:</p>
				<form action="" class="form">
					<div class="form_data">
						<input class="input" type="text" id="nombre" required="" name="nombre" placeholder=" "/>
						<label class="hola" for="nombre">Nombre y apellido:</label>
            		</div>
            		<div class="form_data">
						<input pattern="[0-9]{7,9}" class="input" type="telf" id="input-1" required="" name="telefono"placeholder=" "/>
						<label class="hola" for="input-1">Teléfono</label>
            		</div>
            		<div class="form_data">
						<input class="input" type="text" id="input-2" required="" name="salon" placeholder=" "/>
						<label class="hola" for="input-2">Nombre del salón:</label>
            		</div>
            		<div class="form_data">
						<input pattern="[0-9]{11}" class="input" type="telf" id="input-3" required="" name="RUC" placeholder=" "/>
						<label class="hola" for="input-3">RUC:</label>
            		</div>
            		<div class="form_data">
						<input class="input" type="text" id="input-4" required="" name="direccion" placeholder=" "/>
						<label class="hola" for="input-4">Dirección:</label>
            		</div>
            		<select name="soy" id="input-5" class="select" required="">
            			<option value="">--Seleccione una opción--</option>
            			<option value="distribuidor">Soy distribuidor</option>
            			<option value="usuario">Soy usuario final</option>
            			<option value="salón">Soy salon</option>
            			<option value="estilista">Soy estilista</option>
            			<option value="estudiante">Soy estudiante</option>
            			<option value="importador">Soy importador</option>
            			<label class="hola" for="input-5">Dirección:</label>
            		</select>
            		<div class=""><button value="enviar" type="submit" class="form_bottom">Finalizar registro</button></div>
				</form>
			</div>
		</section>
	</main>
	<footer class="footer_ant">
		<div class="footer">
			<a target="_blank" href="https://www.johandurand.com">DISEÑADO POR JOHAN DURAND © 2020 ALL RIGHTS RESERVED.</a>
		</div>
	</footer>
	<a target="_blank" href="https://api.whatsapp.com/send?phone=51947317493&amp;text=Hola Kerasilk, me interesa el servicio de ">
		<div class="hamburger">
		  <img src="images/whatsapp-logo.png">
		</div>
	</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>