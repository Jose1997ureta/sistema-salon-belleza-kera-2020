<?php
session_start();
require 'requirelanguage.php';
?>
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
	<link rel="stylesheet" href="css/detalle.css">
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
		<section>
			<div class="sup" style="padding-top: 100px;">
				<div class="sup_link">
					<a href="index.php"><img src="icon/house.svg" alt=""></a><a href="productos.html">/ Products</a>
					<p>/ Detalle</p>
				</div>
			</div>
		</section>
		<section>
			<div class="detalle">
				<div class="detalle_cont">
					<div class="swiper-container gallery-top">
					    <div class="swiper-wrapper">
					      <!-- <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div> -->
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					    </div>
					    <!-- Add Arrows -->
						 <div class="flecha detalle_flecha">
						 	<div class="swiper-button-next swiper-button-white"><span class="flecha2"></span></div>
						    <div class="swiper-button-prev swiper-button-white"><span class="flecha1"></span></div>
						 </div>
					</div>
					<div class="swiper-container gallery-thumbs">
					    <div class="swiper-wrapper detalle_back">
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					      <div class="swiper-slide" style="background-image:url(images/products/producto_detalle.jpg)"></div>
					    </div>
					</div>
				</div>
				<div class="detalle_text">
					<div class="title detalle_title">
	    				<h3>PRODUCTS</h3>
	    				<p>KERAESSÉNCE</p>
	    			</div>
	    			<div class="detalle_text_info">
	    				<p>Deep cleansing shampoo, enriched with supreme Argan Cream (Argan Cream) and Quinoa Oil. This formulation contains the right balance of cleansing agents at the right pH to prepare hair for the straightening process but without drying it off or damaging it.</p>
	    				<ul>
	    					<li>PARABEN FREE</li>
	    					<li>SODIUM CHLORIDE FREE</li>
	    					<li>AMMONIA FREE</li>
	    					<li>FORMALDEHYDE FREE</li>
	    				</ul>
	    				<b>BENEFICIOS:</b>
	    				<ul>
	    					<li>Superior desempeño comparada con los líderes del mercado.</li>
	    					<li>Mejor peinabilidad en húmedo y seco.</li>
	    					<li>Restaura la hidrofobicidad del cabello = sedosidad.</li>
	    					<li>Mejora el brillo.</li>
	    					<li>Efecto duradero.</li>
	    					<li>Evita la pérdida excesiva de proteína del cabello.</li>
	    					<li>Compatible con cremas de coloración y cremas High Lift.</li>
	    					<li>Compatible con alisadores de Keratina.</li>
	    				</ul>
	    				<b>PRINCIPIOS ACTIVOS:</b>
	    				<ul>
	    					<li>Extracto natural de limón</li>
	    					<li>Extracto natural de salvia</li>
	    					<li>Extracto natural de menta</li>
	    					<li>Extracto natural de romero</li>
	    					<li>Niacina (vitamina B3)</li>
	    				</ul>
	    			</div>
				</div>
			</div>
		</section>
		<section>
			<div class="infografia">
				<div class="title_center animacion">
    				<b>PROTOCOLOS</b>
    				<p>DE USOS</p>
    			</div>
			    <div class='inscripcion'>
			        <p>Dejenos tus datos para que uno de nuestros especialistas pueda atenderlo</p>
			        <div>
			            <a href='registro.php' class="form_bottom">Regístrate</a>
			        </div>
			    </div>
    			<!--<div class="pasos">-->
    			<!--	<div class="pasos_line">-->
    			<!--		<span></span>-->
    			<!--	</div>-->
    			<!--	<div class="pasos_sect">-->
    			<!--		<div class="pasos_sect_item">-->
    			<!--			<img src="images/paso1.jpg" alt="">-->
    			<!--			<div class="pasos__item_text">-->
    			<!--				<span>01</span>-->
    			<!--				<p>Combinar el tinte en crema con el peróxido hasta formar una mezcla homogénea.</p>-->
    			<!--			</div>-->
    			<!--		</div>-->
    			<!--		<div class="pasos_sect_item">-->
    			<!--			<img src="images/paso1.jpg" alt="">-->
    			<!--			<div class="pasos__item_text">-->
    			<!--				<span>02</span>-->
    			<!--				<p>Combinar el tinte en crema con el peróxido hasta formar una mezcla homogénea.</p>-->
    			<!--			</div>-->
    			<!--		</div>-->
    			<!--		<div class="pasos_sect_item">-->
    			<!--			<img src="images/paso1.jpg" alt="">-->
    			<!--			<div class="pasos__item_text">-->
    			<!--				<span>03</span>-->
    			<!--				<p>Combinar el tinte en crema con el peróxido hasta formar una mezcla homogénea.</p>-->
    			<!--			</div>-->
    			<!--		</div>-->
    			<!--		<div class="pasos_sect_item">-->
    			<!--			<img src="images/paso1.jpg" alt="">-->
    			<!--			<div class="pasos__item_text">-->
    			<!--				<span>04</span>-->
    			<!--				<p>Combinar el tinte en crema con el peróxido hasta formar una mezcla homogénea.</p>-->
    			<!--			</div>-->
    			<!--		</div>-->
    			<!--	</div>-->
    			<!--</div>-->
    			<!--<div class="casa">-->
    			<!--	<b>Cuidado en casa</b>-->
    			<!--	<img src="images/products/producto_detalle.jpg" alt="">-->
    			<!--</div>-->
			</div>
		</section>
		<section>
			<div class="extras">
				<div class="title_center animacion">
					<b>RESULTADO:</b>
					<!-- <p>TIEMPO DE SERVICIO(40 min)</p> -->
				</div>
				<div class="resultado">
					<div>
						<img src="images/resultado.jpg" alt="">
					</div>
				</div>
				<div class="video">
					<iframe src="https://www.youtube.com/embed/cs0Vy0sT-DE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/swiper.js"></script>
	<script src="js/web.js"></script>
	
	<script>
		var galleryTop = new Swiper('.gallery-top', {
	      spaceBetween: 10,
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',
	      },
	    });
	    var galleryThumbs = new Swiper('.gallery-thumbs', {
	      spaceBetween: 10,
	      centeredSlides: true,
	      slidesPerView: 'auto',
	      touchRatio: 0.2,
	      slideToClickedSlide: true,
	    });
	    galleryTop.controller.control = galleryThumbs;
	    galleryThumbs.controller.control = galleryTop;

	</script>
</script>
</body>
</html>