<?php get_header(); ?>

		<!-- <img src="<?php bloginfo('template_url'); ?>/assets/Grid-Home.svg" id="background-grid" alt="grid" class="background-img">		 -->
		<!-- <canvas id="header"></canvas> -->
		<main class="artist-list">
			<?php 

				if ( have_posts() ){

					echo "<h1>found posts!</h1>"
				}

			?>
		</main>
		
<?php get_footer(); ?>


