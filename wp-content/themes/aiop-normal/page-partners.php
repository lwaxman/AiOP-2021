<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-artist
 *
 * @package AiOP_2021
 * @copyright  AiOP, Laurie Waxman
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();
	
?>

<?php
    wp_reset_query();

?>

<img src="<?php bloginfo('template_url'); ?>/assets/Grid-Home.svg" id="background-grid" alt="grid" class="background-img">		

<main class="site-content partners">

    <h1 class="hidden">PARTNERS</h1>	

    <?php while ( have_posts() ) : the_post(); ?>
    	 <!-- <span class="h5 page-title">PARTNERS</span> -->

    	<div class="partner_images popwalk">
    		<img src="<?php bloginfo('template_url'); ?>/assets/Partners-Mockup_Popwalk-2.png" alt="Popwalk app sreenshot" class="sreenshot img_popwalk">
    	</div>
    	<div class="partner popwalk">
	    	<img src="<?php bloginfo('template_url'); ?>/assets/Partners_popwalk-logo.png" alt="Popwalk logo" class="logo">
	    	<p class="h2">Popwalk</p>
			<p class="p2r"><?php the_field('partners_popwalk'); ?></p>
			<div class="links">
                <a href=" https://sitessetforknowledge.org/2020/10/16/art-in-odd-places-popwalk/" class="button primary">Festival map</a>
				<a href="http://www.popwalkapp.com/" class="button secondary">View website</a>
			</div>
    	</div>

	  	<div class="partner_images pollinate">
    		<img src="<?php bloginfo('template_url'); ?>/assets/Partners-Mockup_Pollinate-2.png" alt="Pollinate app sreenshot" class="sreenshot img_pollinate">
    	</div>
    	<div class="partner pollinate">
    		<img src="<?php bloginfo('template_url'); ?>/assets/Partners_pollinate-logomark.png" alt="Pollinate logo" class="logo">
	    	<p class="h2">Pollinate</p>
			<p class="p2r"><?php the_field('partners_pollinate'); ?></p>
			<div class="links">
				<a href="https://events.pollinate.co/#/exhibition/168" class="button primary">Festival map</a>
                <a href="https://www.pollinate.co/" class="button secondary">View website</a>
			</div>
    	</div>

    </section>

	<?php endwhile; // end of the loop. ?>
</main><!-- #primary -->

<?php get_footer(); ?>