<?php
/**
 * The Header template
 */
?>
<html>
	<head>
		<title>AiOP 2021: NORMAL</title>
		<!-- meta data -->
		<meta charset="UTF-8">
		<meta name="description" content="Art in Odd Places 2021: Normal">
		<meta name="keywords" content="AiOP, Festival, Performance, New York City">
		<meta name="author" content="Laurie Waxman">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;600&family=Roboto:ital,wght@0,100;0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.typekit.net/yxs1iyp.css">
		<!-- scripts & styles -->
		<?php wp_head(); ?>
		<!-- scripts -->

	</head>
	<body>
		<nav>
			<a href="<?php echo get_home_url(); ?>">
				<img src="<?php bloginfo('template_url'); ?>/assets/AiOP2021_classic_rgb_r.png" alt="" id="aiopLogo" alt="Art in Odd Places">
			</a>
			<div class="menu_container">
				<?php 
				wp_nav_menu( array( 
					'theme_location' => 'my-custom-menu', 
					'container_class' => 'main-menu' 
				) );
				wp_nav_menu( array( 
					'theme_location' => 'my-second-menu', 
					'container_class' => 'sub-menu' 
				) );
				?>
			</div>
			<div id="menuToggle"></div>
		</nav>