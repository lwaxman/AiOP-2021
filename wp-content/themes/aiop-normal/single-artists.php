<?php
/**
 *
 * Template Post Type: artist, artists
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
	$args = array(
	    'post_type' => 'artists',
	    'posts_per_page' => 1
	);
	$artistQuery = new WP_Query($args);

	while($artistQuery->have_posts()): $artistQuery->the_post();
	    ?>
	    <?php if (function_exists('get_field')): ?>
			    <?php 
				
				$first_name				= get_field('first_name');
				$last_name 				= get_field('last_name');
				$additional_names 		= get_field('additional_names');
				$project_title			= get_field('project_title');
				$project_description	= get_field('project_description');
				$project_schedule		= get_field('project_schedule');
				$project_location		= get_field('project_location');
				$artist_1_bio			= get_field('artist_1_bio');
				$artist_1_link			= get_field('artist_1_weblink');
				$artist_2_bio			= get_field('artist_2_bio');
				$artist_2_link			= get_field('artist_2_weblink');
				$artist_3_bio			= get_field('artist_3_bio');
				$artist_3_link			= get_field('artist_3_weblink');
				$artist_3_link			= get_field('artist_3_weblink');
				$project_image			= get_field('project_image');

			    ?> 
			    <section class="headerImage">
			    	<img src="<?php bloginfo('template_url'); ?>/assets/Artist_BG_Blob_01.png" alt="">
			    	<img src="<?php bloginfo('template_url'); ?>/assets/Artist_BG_Blob_02.png" alt="">
			    	<img src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_image['alt']); ?>" />
			    </section>
			    <section class="header">
					<h1 class="projectArtists"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></h1>
					<h3 class="projectTitle"><?php echo $project_title ?></h3>

			    </section>
			    <section class="project">
					<p class="p2 description"><?php echo $project_description ?></p>
			    	<h5>DATE & TIME</h5>
					<p class="p1 schedule"><?php echo $project_schedule ?></p>
					<h5>LOCATION</h5>
					<p class="p1 location"><?php echo $project_location ?></p>
			    </section>
			    <section class="bios">
			    	<p><?php echo $artist_1_bio ?></p>
			    	<p><?php echo $artist_2_bio ?></p>
			    	<p><?php echo $artist_3_bio ?></p>
			    </section>
		<?php endif ?>
	<?php endwhile ?>


<?php get_footer(); ?>