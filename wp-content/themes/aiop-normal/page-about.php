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

<main class="site-content about">

    <h1 class="hidden">ABOUT</h1>	

    <?php while ( have_posts() ) : the_post(); ?>

    	<section class="header">
    		<div class="display">
    			<p class="lquo">“</p>
    			<div>
	    			<p>We will not go back to normal. Normal never was.”</p>
	    			<p class="credit">Sonya Renee Taylor</p>
    			</div>
    		</div>
    	</section>

    	<section class="about">

		    <section class="cs">
				<p class="p2r">
					<span class="p2"><?php the_field('about_cs_highlight'); ?></span>
					<?php the_field('about_cs_opening'); ?>
				</p>
				<p class="p2r cs_more_text"><?php the_field('about_cs_more'); ?></p>
				<div class="button primary" id="cs_read_more"><p>Read more</p></div>	
		    </section>

		    <section class="people">
		    	<img src="<?php bloginfo('template_url'); ?>/assets/About_People-Blob-1.png" class="blob-person-1" role="presentation">
		    	<img src="<?php bloginfo('template_url'); ?>/assets/About_People-Blob-2.png" class="blob-person-2" role="presentation">
		    	<h2>People</h2>
	    		<div class="staff curator">
		    		<p class="p1 staff_name">Furusho von Puttkammer</p>
		    		<p class="staff_title h5">Curator</p>
		    		<div class="staff_links">
		    			<a href="http://www.anchovyart.com">website</a>
		    		</div>
		    	</div>
		    	<div class="staff_col_1">
			    	<div class="staff">
			    		<p class="p1 staff_name">Yasmeen Abdallah</p>
			    		<p class="staff_title h5">Curatorial Assistant</p>
			    		<div class="staff_links">
			    			<a href="http://www.anchovyart.com">website</a>
			    		</div>
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Natalie J. Ortiz</p>
			    		<p class="staff_title h5">Curatorial Assistant</p>
			    		<div class="staff_links">
			    			<a href="https://cargocollective.com/njo">website</a>
			    		</div>
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Lorelle Pais</p>
			    		<p class="staff_title h5">Curatorial Assistant</p>
			    		<div class="staff_links">
			    			<a href="http://lorellepais.com">website</a>
			    		</div>
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Ed Woodham</p>
			    		<p class="staff_title h5">Founder & Director</p>
			    		<div class="staff_links">
			    			<a href="https://edwoodham.com/bio/">website</a>
			    		</div>
			    	</div>
		    	</div>
		    	<div class="staff_col_2">
			    	<div class="staff">
			    		<p class="p1 staff_name">Clara Grusq</p>
			    		<p class="staff_title h5">Admin Assistant</p>
			    		<div class="staff_links">
			    			<a href="https://claragrusq.squarespace.com/">website</a>
			    		</div>
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Anglea Liao</p>
			    		<p class="staff_title h5">Photography & Video Manager</p>
			    		<div class="staff_links">
			    			<a href="http://www.tianqi-liao.com">website</a>
			    		</div>
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Anika Rahman</p>
			    		<p class="staff_title h5">Intern</p>
			    		<!-- <div class="staff_links">
			    			<a href=""></a>
			    		</div> -->
			    	</div>	
			    	<div class="staff">
			    		<p class="p1 staff_name">Taylor Ryan</p>
			    		<p class="staff_title h5">PR Manager & Press Coordinator</p>
			    		<!-- <div class="staff_links">
			    			<a href=""></a>
			    		</div> -->
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Hannah Waskowitz</p>
			    		<p class="staff_title h5">Volunteer Coordinator</p>
			    		<!-- <div class="staff_links">
			    			<a href=""></a>
			    		</div> -->
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Laurie Waxman</p>
			    		<p class="staff_title h5">Graphic & Web Designer</p>
			    		<div class="staff_links">
			    			<a href="http://lauriewaxman.com/">website</a>
			    			<a href="https://www.instagram.com/waxles/">instagram</a>
			    		</div>
			    	</div>
			    	<div class="staff">
			    		<p class="p1 staff_name">Amanda Wu</p>
			    		<p class="staff_title h5">Social Media Manager</p>
			    		<div class="staff_links">
			    			<a href="http://www.awuart.com/">website</a>
			    		</div>
			    	</div>
		    	</div>

		    </section>
		    <section class="partners">
		    	<div class="partner_images">
		    		<img src="<?php bloginfo('template_url'); ?>/assets/Partners_Blob.png" role="presentation" class="img_blob">
		    		<img src="<?php bloginfo('template_url'); ?>/assets/Partners-Mockup_Popwalk.png" alt="Popwalk app sreenshot" class="img_popwalk">	 
		    		<img src="<?php bloginfo('template_url'); ?>/assets/Partners-Mockup_Pollinate.png" alt="Pollinate app sreenshot" class="img_pollinate">
		    	</div>
		    	<div class="partner_text">
			    	<h2>Partners</h2>
			    	<div class="partner popwalk">
				    	<img src="<?php bloginfo('template_url'); ?>/assets/Partners_popwalk-logo.png" alt="Popwalk logo">
				    	<p class="h3">Popwalk</p>
						<p><?php the_field('about_popwalk'); ?></p>
						<a href="http://www.popwalkapp.com/" class="button secondary">View website</a>
			    	</div>
			    	<div class="partner pollinate">
			    		<img src="<?php bloginfo('template_url'); ?>/assets/Partners_pollinate-logomark.png" alt="Pollinate logo">
				    	<p class="h3">Pollinate</p>
						<p><?php the_field('about_pollinate'); ?></p>
						<a href="https://www.pollinate.co/" class="button secondary">View website</a>
			    	</div>
		    	</div>
		    </section>
    	</section>

	<?php endwhile; // end of the loop. ?>
</main><!-- #primary -->

<?php get_footer(); ?>