<!-- <?php
session_start();
require 'requirelanguage.php';
?> -->
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>PRODUCTOS KERAESSENCE</title>
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
	<link rel="stylesheet" href="css/producto.css">
</head>
<body>
	<header>
		<div class="header">
			<div class="header_menu">
				<div class="header_menu_burguer">
					<span></span>
					<span></span>
				</div>
				<nav class="header_menu_nav" id="mySidebar2">
					<ul id="containerMenu">
						<!-- <li><a href="index.php" class="active"><?php echo $home; ?></a></li>
						<li><a href="productos.php"><?php echo $productos; ?></a></li>
						<li><a href="index.php#contacto"><?php echo $contacto; ?></a></li> -->
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
				<a href="#" class="btnCambiarLanguaje" data-lang="es">ES</a>
				<a href="#" class="btnCambiarLanguaje" data-lang="en">EN</a>
				<a href="#" class="btnCambiarLanguaje" data-lang="ru">RU</a>
				<a href="#" class="btnCambiarLanguaje" data-lang="fr">FR</a>
				<!-- <a href="changelanguage.php?language=es">ES</a>
				<a href="changelanguage.php?language=en">EN</a>
				<a href="changelanguage.php?language=ru">RU</a>
				<a href="changelanguage.php?language=fr">FR</a> -->
			</div>
		</div>
	</header>
	<main>
		<section>
			<div class="sup">
				<img src="images/bann.jpg" alt="">
				<div class="sup_link">
					<a href="index.php"><img src="icon/house.svg" alt=""></a>
					<p>/ Products</p>
				</div>
			</div>
		</section>
		<section>
			<div class="contenido">
				<div class="title">
    				<h3>PRODUCTS</h3>
    				<p>KERAESSÉNCE</p>
    			</div>
    			<div class="lista" id="containerListaProducto">
    				<a href="detalle.php" class="lista_item">
    					<div class="lista_item_img">
    						<img src="images/products/repair2.png" alt="">
    						<span>01</span>
    					</div>
    					<div class="lista_item_nombre">
            				<b>LISS INTENSE</b>
            				<p>CLARIFYING SHAMPOO</p>
    					</div>
    				</a>
    				<a href="detalle.php" class="lista_item">
    					<div class="lista_item_img">
    						<img src="images/products/repair2.png" alt="">
    						<span>02</span>
    					</div>
    					<div class="lista_item_nombre">
            				<b>LISS INTENSE</b>
            				<p>CLARIFYING SHAMPOO</p>
    					</div>
    				</a>
    				<a href="detalle.php" class="lista_item">
    					<div class="lista_item_img">
    						<img src="images/products/repair2.png" alt="">
    						<span>03</span>
    					</div>
    					<div class="lista_item_nombre">
            				<b>LISS INTENSE</b>
            				<p>CLARIFYING SHAMPOO</p>
    					</div>
    				</a>
    				<a href="detalle.php" class="lista_item">
    					<div class="lista_item_img">
    						<img src="images/products/repair2.png" alt="">
    						<span>04</span>
    					</div>
    					<div class="lista_item_nombre">
            				<b>LISS INTENSE</b>
            				<p>CLARIFYING SHAMPOO</p>
    					</div>
    				</a>
    				<a href="detalle.php" class="lista_item">
    					<div class="lista_item_img">
    						<img src="images/products/repair2.png" alt="">
    						<span>05</span>
    					</div>
    					<div class="lista_item_nombre">
            				<b>LISS INTENSE</b>
            				<p>CLARIFYING SHAMPOO</p>
    					</div>
    				</a>
    				<a href="detalle.php" class="lista_item">
    					<div class="lista_item_img">
    						<img src="images/products/repair2.png" alt="">
    						<span>06</span>
    					</div>
    					<div class="lista_item_nombre">
            				<b>LISS INTENSE</b>
            				<p>CLARIFYING SHAMPOO</p>
    					</div>
    				</a>
    				<a href="detalle.php" class="lista_item">
    					<div class="lista_item_img">
    						<img src="images/products/repair2.png" alt="">
    						<span>07</span>
    					</div>
    					<div class="lista_item_nombre">
            				<b>LISS INTENSE</b>
            				<p>CLARIFYING SHAMPOO</p>
    					</div>
    				</a>
    			</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="footer">
			<a target="_blank" href="https://www.johandurand.com">DISEÑADO POR JOHAN DURAND © 2020 ALL RIGHTS RESERVED.</a>
		</div>
	</footer>
	<a target="_blank" href="https://api.whatsapp.com/send?phone=51947317493&amp;text=Hola Kerasilk, me interesa el servicio de ">
		<div class="hamburger">
		  <img src="images/whatsapp-logo.png">
		</div>
	</a>
	<script src="function/config-function.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/swiper.js"></script>
	<script src="js/web.js"></script>
	<script src="js/producto.js"></script>
	
</script>
</body>
</html>