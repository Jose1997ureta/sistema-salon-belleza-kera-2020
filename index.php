<!-- <?php
session_start();
require 'requirelanguage.php';
?> -->
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	<title>Productos cosméticos naturales</title>
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
				<!-- <a href="changelanguage.php?language=es" class="btnCambiarLanguaje" data-lang="es">ES</a>
				<a href="changelanguage.php?language=en" class="btnCambiarLanguaje" data-lang="en">EN</a>
				<a href="changelanguage.php?language=ru" class="btnCambiarLanguaje" data-lang="ru">RU</a>
				<a href="changelanguage.php?language=fr" class="btnCambiarLanguaje" data-lang="fr">FR</a> -->
			</div>
		</div>
	</header>
	<main>
		<section class="intro">
          <div class="container2">
            <div class="container2-logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70.779 23.485">
					<g class="ke" transform="translate(-45.922 -162.016)">
						<path d="M267.6,185.5h-30.43V162.016H267.6V164.7H244.464v7.289h22.245v2.688H244.464v8.1H267.6Z" transform="translate(-150.9)"/>
						<path d="M82.414,185.5H73.247L53.214,173.985V185.5H45.922V162.016h7.292v10.927l19.615-10.927h8.633L60.338,173.182Z" transform="translate(0)"/>
					</g>
				</svg>
				<div class="line">
					<span class="line_1"></span>
					<span class="line_2"></span>
				</div>
            </div>
          </div>
        </section>
        <section>
			<div class="swiper-container swiper1">
		        <div class="swiper-wrapper general">
		            <div class="swiper-slide" data-hash="home"> <!-- data-hash="home" -->
		            	<div class="sect1">
		            		<div class="swiper-container swiper2">
		            			<div class="swiper-wrapper">
		            				<div class="swiper-slide">
			                             <div class="portada1 animacion">
			                             	<picture>
			                                    <source srcset="images/portada.jpg" media="(min-width:1024px)">
			                                    <source srcset="images/portada-phone.jpg" media="(min-width: 768px)">
			                                    <img src="images/portada-phone.jpg" alt="">
			                                </picture>
			                                <div class="portada1_text">
			                                	<?php echo $banner; ?>
			                                	<div>
			                                		<a class="buttom" href="productos.php"><?php echo $verproductos; ?></a>
			                                	</div>
			                                </div>
			                             </div>
		            				</div>
		            				<div class="swiper-slide">
			                             <div class="portada1 animacion">
			                             	<picture>
			                                    <source srcset="images/portada.jpg" media="(min-width:1024px)">
			                                    <source srcset="images/portada-phone.jpg" media="(min-width: 768px)">
			                                    <img src="images/portada-phone.jpg" alt="">
			                                </picture>
			                                <div class="portada1_text">
			                                	<?php echo $banner; ?>
			                                	<div>
			                                		<a class="buttom" href="productos.php"><?php echo $verproductos; ?></a>
			                                	</div>
			                                </div>
			                             </div>
		            				</div>
		            			</div>
		            		</div>
		            	</div>
		            </div>
		            <div class="swiper-slide" data-hash="product">
		            	<div class="sect2">
		            		<div class="sect2_info animacion">
		            			<div class="title">
		            				<?php echo $title1; ?>
		            			</div>
		            			<p><?php echo $text1; ?></p>
		            			<div class="sect2_info_button">
                            		<a class="buttom" href="productos.php"><?php echo $verproductos; ?></a>
                            	</div>
                            	<h4>liss intense</h4>
		            		</div>
		            		<div class="sect2_img animacion">
								<a href=""><img src="images/liss-intense.png" alt=""></a>
		            		</div>
		            		<div class="puntos2 animacion">
								<img src="icon/puntos.svg" alt="">
							</div>
		            	</div>
		            </div>
		            <div class="swiper-slide" data-hash="liss-intense">
		            	<div class="sect3">
		            		<div class="swiper-container swiper3">
		            			<div class="swiper-wrapper" id="containerSliderImgenHome">
		            			</div>
		            		</div>
			            	<div class="flecha">
				    			<div class="swiper-button-prev swiper-button-prev3"><span class="flecha1"></span></div>
			            		<div class="swiper-button-next swiper-button-next3"><span class="flecha2"></span></div>
			            	</div>
		            	</div>
		            </div>
		            <div class="swiper-slide" data-hash="contacto">
		            	<div class="sect4">
		            		<img src="images/cabello-kera.jpg" alt="">
		            		<div class="sect4_info">
		            			<div class="title_center animacion">
		            				<b>CONTACT US</b>
		            				<p>AT ANY TIME 24/7</p>
		            			</div>
                            	<div class="sect4_info_form animacion">
                            		<div class="sect4_info_data">
                            			<div class="sect4_info_data_text">
                            				<b>PHONE:</b>
                            				<p>+51 987 654 321 <br>+51 987 654 321</p>
                            			</div>
                            			<div class="sect4_info_data_text">
                            				<b>EMAIL:</b>
                            				<p>contacto@kerasilk.com <br>ventas@kerasilk.com</p>
                            			</div>
                            			<div class="sect4_info_data_text">
                            				<b>ADDRESS:</b>
                            				<p>Intisuyo 165 Urb Maranga San Miguel</p>
                            			</div>
                            		</div>
                            		<form class="form" action="enviar.php" method="post">
                            			<div class="form_data">
    										<input class="input" type="text" id="nombre" required="" name="nombre" placeholder=" "/>
    										<label class="hola" for="nombre">Your Name:</label>
	    			            		</div>
	    			            		<div class="form_data">
    										<input class="input" type="email" id="input-2" required="" name="email" placeholder=" "/>
    										<label class="hola" for="input-2">Your email:</label>
	    			            		</div>
	    			            		<div class="form_data">
    										<input pattern="[0-9]{7,9}" class="input" type="telf" id="input-3" required="" name="telefono"placeholder=" "/>
    										<label class="hola" for="input-3">Your phone</label>
	    			            		</div>
	    			            		<div class="form_data">
    										<textarea class="input" type="text" id="input-4" required="" name="mensaje" placeholder=" "></textarea>
    										<label class="hola" for="input-4">Your message:</label>
	    			            		</div>
	    			            		<div class=""><button value="enviar" type="submit" class="form_bottom">enviar mensaje</button></div>
                            		</form>
                            	</div>
		            		</div>
		            	</div>
		            </div>
		            <div class="swiper-slide" data-hash="redes">
		            	<div class="sect5">
		            		<img src="images/modelo-redes2.jpg" alt="">
		            		<div class="sect5_data">
		            			<div class="title_center animacion">
		            				<b>FOLLOW US</b>
		            				<p>ON INSTAGRAM</p>
		            			</div>
		            			<div class="sect5_data_redes animacion">
		            				<a href=""><i class="fa fa-facebook-f"></i></a>
		            				<a href=""><i class="fa fa-instagram"></i></a>
		            				<a href=""><i class="fa fa-youtube"></i></a>
		            			</div>
		            			<div class="sect5_data_script animacion">
		            				<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		            				<div class="elfsight-app-f44f4c3c-c837-4b67-8ac6-74f625d4857b"></div>
		            			</div>
		            			<div class="footer">
		            				<a target="_blank" href="https://www.johandurand.com">DISEÑADO POR JOHAN DURAND © 2020 ALL RIGHTS RESERVED.</a>
		            			</div>
		            		</div>
		            	</div>
		            </div>
		        </div>
		        <!-- Add Pagination -->
		        <div class="swiper-pagination swiper-pagination1"></div>
		    </div>
		</section>
	</main>
	<a target="_blank" href="https://api.whatsapp.com/send?phone=51947317493&amp;text=Hola Kerasilk, me interesa el servicio de ">
		<div class="hamburger">
		  <img src="images/whatsapp-logo.png">
		</div>
	</a>
	<script src="function/config-function.js"></script>
	<script src="js/languajeIndex.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/swiper.js"></script>
	<script src="js/web.js"></script>
	
	<!-- PRELOADED INTRO -->
    <script>
     
    </script>
    <!-- PRELOADED INTRO -->
    <script>
   //  	$('.contacto').on('click', function() {
			// $('.sect4_info').toggleClass('mostrar_contact');
	  //   });
	  //   $('.back').on('click', function() {
			// $('.sect4_info').removeClass('mostrar_contact');
	  //   });
    </script>
    <div id="cursor4"></div>
	<script>
    	var cursor = document.getElementById('cursor4');
    	document.addEventListener('mousemove', function(e) {
    		var x = e.clientX;
    		var y = e.clientY;
    		cursor.style.left = x + 'px';
    		cursor.style.top = y + 'px';
    	});
    </script>
</body>
</html>