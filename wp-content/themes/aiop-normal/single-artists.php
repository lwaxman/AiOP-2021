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

	$all_posts = new WP_Query(array(
		'post_type' => 'artists',
	    'meta_key' => 'last_name',
		'orderby' => 'meta_value',
        'order' => 'ASC',
        'posts_per_page' => -1
    ));

    foreach($all_posts->posts as $key => $value) {
        if($value->ID == $post->ID){
            $nextID = $all_posts->posts[$key + 1]->ID;
            $prevID = $all_posts->posts[$key - 1]->ID;
            break;
        }
    }
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
			$project_link			= get_field('project_link', $thisID);




		    ?> 
    		<img src="<?php bloginfo('template_url'); ?>/assets/Grid-Home.svg" id="background-grid" alt="grid" class="background-img">		
		    <main class="artist-single">	
			    <h1 class="hidden"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></h1>	    	
			    <section class="banner">
			    	<div class="banner-image">
				    	<img src="<?php bloginfo('template_url'); ?>/assets/Artist_BG_Blob_01.png" class="blob blob-01" role="presentation">
				    	<img src="<?php bloginfo('template_url'); ?>/assets/Artist_BG_Blob_02.png" class="blob blob-02" role="presentation">
				    	<div class="feature-box">
					    	<img src="<?php echo esc_url($project_image['url']); ?>" class="feature-img" alt="<?php echo esc_attr($project_image['alt']); ?>" />
					    	<div class="feature-shadow"></div>
				    	</div>
			    	</div>
				    <div class="banner-text">
						<span class="h1 project-artists"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></span>
						<span class="h2 project-title"><?php echo $project_title ?></span>
				    </div>
			    </section>
			    <section class="project">
					<p class="p2"><?php echo $project_description ?></p>
					<?php 
					if($project_link){
		    			echo "<a class='button primary' target='blank' href='" . esc_url($project_link['url']) . "'>" . esc_attr( $project_link['title'] ) . "</a>";
		    		}
					?>
				</section>
				<section class="schedule">
			    	<h5>DATE & TIME</h5>
					<p class="p1"><?php echo $project_schedule ?></p>
				</section>
				<section class="location">
					<h5>LOCATION</h5>
					<p class="p1"><?php echo $project_location ?></p>
			    </section>
			    <section class="bios">
			    	<?php 
			    		
			    		if($artist_1_bio){
			    			echo "<p>" . $artist_1_bio . "</p>";
			    		}
			    		if($artist_1_link){
			    			echo "<a target='blank' class='test' href='" . esc_url($artist_1_link['url']) . "'>" . esc_attr( $artist_1_link['title'] ) . "</a>";
			    		}
			    		if($artist_2_bio){
			    			echo "<p>" . $artist_2_bio . "</p>";
			    		}
			    		if($artist_2_link){
			    			echo "<a target='blank' class='test' href='" . esc_url($artist_2_link['url']) . "'>" . esc_attr( $artist_2_link['title'] ) . "</a>";
			    		}
			    		if($artist_3_bio){
			    			echo "<p>" . $artist_3_bio . "</p>";
			    		}
			    		if($artist_3_link){
			    			echo "<a target='blank' class='test' href='" . esc_url($artist_3_link['url']) . "'>" . esc_attr( $artist_3_link['title'] ) . "</a>";
			    		}
			    	?>
			    </section>
			    <section class="artist-nav">
			    	
				    <div class="arrow prev">
				    	<?php if($prevID): ?>
			    	        <a href="<?= get_the_permalink($prevID) ?>" rel="prev"><img src="<?php bloginfo('template_url'); ?>/assets/Arrow-Previous.png"><span> </span></a>
				    	<?php endif; ?>
				    </div>
		    		<div class="arrow next">
				    	<?php if($nextID): ?>
			    	        <a href="<?= get_the_permalink($nextID) ?>" rel="next"><span> </span><img src="<?php bloginfo('template_url'); ?>/assets/Arrow-Next.png"></a>
				    	<?php endif; ?>
	    	    	</div>
			    </section>
		    </main>
	<?php endif ?>
<?php endwhile ?>


<?php get_footer(); ?>