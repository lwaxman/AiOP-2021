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
	$thisId = $post->ID; 
	$args = array(
		'p'	=> $thisId,
	    'post_type' => 'artists',
	    'posts_per_page' => 1
	);
	$artistQuery = new WP_Query($args);
?>

<?php while($artistQuery->have_posts()): $artistQuery->the_post(); ?>
    <?php if (function_exists('get_field')): ?>
		    <?php 
			
			$first_name				= get_field('first_name', $thisID);
			$last_name 				= get_field('last_name', $thisID);
			$additional_names 		= get_field('additional_names', $thisID);
			$project_title			= get_field('project_title', $thisID);
			$project_description	= get_field('project_description', $thisID);
			$project_schedule		= get_field('project_schedule', $thisID);
			$project_location		= get_field('project_location', $thisID);
			$artist_1_bio			= get_field('artist_1_bio', $thisID);
			$artist_1_link			= get_field('artist_1_weblink', $thisID);
			$artist_2_bio			= get_field('artist_2_bio', $thisID);
			$artist_2_link			= get_field('artist_2_weblink', $thisID);
			$artist_3_bio			= get_field('artist_3_bio', $thisID);
			$artist_3_link			= get_field('artist_3_weblink', $thisID);
			$artist_3_link			= get_field('artist_3_weblink', $thisID);
			$project_image			= get_field('project_image', $thisID);

		    ?> 
		    <main class="artist-single">		    	
			    <section class="header-image">
			    	<img src="<?php bloginfo('template_url'); ?>/assets/Artist_BG_Blob_01.png" class="blob blob-01" alt="">
			    	<img src="<?php bloginfo('template_url'); ?>/assets/Artist_BG_Blob_02.png" class="blob blob-02" alt="">
			    	<div class="feature-box">
				    	<img src="<?php echo esc_url($project_image['url']); ?>" class="feature-img" alt="<?php echo esc_attr($project_image['alt']); ?>" />
				    	<div class="feature-shadow"></div>
			    	</div>

			    </section>
			    <section class="header">
					<h1 class="project-artists"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></h1>
					<h2 class="project-title"><?php echo $project_title ?></h2>

			    </section>
			    <section class="project">
					<p class="p2 description"><?php echo $project_description ?></p>
			    	<h5>DATE & TIME</h5>
					<p class="p1 schedule"><?php echo $project_schedule ?></p>
					<h5>LOCATION</h5>
					<p class="p1 location"><?php echo $project_location ?></p>
			    </section>
			    <section class="bios">
			    	<?php 
			    		
			    		if($artist_1_bio){
			    			echo "<p>" . $artist_1_bio . "</p>";
			    		}
			    		if($artist_1_link){
			    			echo "<a href='" . esc_url($artist_1_link['url']) . "'>" . esc_attr( $artist_1_link['title'] ) . "</a>";
			    		}
			    		if($artist_2_bio){
			    			echo "<p>" . $artist_2_bio . "</p>";
			    		}
			    		if($artist_2_link){
			    			echo "<a href='" . esc_url($artist_2_link['url']) . "'>" . esc_attr( $artist_2_link['title'] ) . "</a>";
			    		}
			    		if($artist_3_bio){
			    			echo "<p>" . $artist_3_bio . "</p>";
			    		}
			    		if($artist_3_link){
			    			echo "<a href='" . esc_url($artist_3_link['url']) . "'>" . esc_attr( $artist_3_link['title'] ) . "</a>";
			    		}
			    	?>
			    </section>
		    </main>
	<?php endif ?>
<?php endwhile ?>


<?php get_footer(); ?>