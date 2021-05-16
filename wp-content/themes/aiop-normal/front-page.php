<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page
 *
 * @package AiOP_2021
 * @copyright  AiOP, Laurie Waxman
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();

?>

		<img src="<?php bloginfo('template_url'); ?>/assets/Grid-Home.svg" id="background-grid" alt="grid" class="background-img">		
		<!-- <canvas id="header"></canvas> -->
		<main class="home">
			<div class="header">
				<div id="placeholder" alt="Normal"></div>
			</div>
			<div class="scroll">
				<img src="<?php bloginfo('template_url'); ?>/assets/Down-Arrow.png" alt="scroll down">
			</div>
			<img class="schedule" src="<?php bloginfo('template_url'); ?>/assets/Blob-2021.png" alt="2021">
			<div class="schedule">
				<h2>May 14-16</h2>
				<!-- <a class="button primary" href="/schedule">View schedule</a> -->
			</div>
			<div class="about">
				<p class="p1">Curated by Furusho von Puttkammer, <span class="italic">AiOP 2021: NORMAL</span> will present artists who seek to critique the mythos of the American Dream and the history of American politics.</p>
				<a class="button primary" href="<?php bloginfo('template_url'); ?>/about">Read more</a>
			</div>
			<img class="artists" src="<?php bloginfo('template_url'); ?>/assets/Blob-62.png" alt="62">
			<div class="artists">
				<h2>Participating </br>artists & groups</h2>
				<a class="button primary" href="<?php bloginfo('template_url'); ?>/artists">Explore projects</a>
				<a class="button secondary" href="<?php bloginfo('template_url'); ?>/schedule">View schedule</a>
			</div>
		</main>
		<section class="home-covid">
			<img src="<?php bloginfo('template_url'); ?>/assets/Blob-Social-Distance.png" alt="Two stylized red figures stand with space apart">	
			<div class="text">
				<p class="p2">This year, the festival will follow New York City social distancing guidelines.</p>
			</div>
		</section>
		
<?php get_footer(); ?>


