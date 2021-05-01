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

   	$artistsArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'last_name',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => 100
	);

	$artistQuery = new WP_Query($artistsArgs);

	$last_letter = ' ';

?>
<img src="<?php bloginfo('template_url'); ?>/assets/Grid-Home.svg" id="background-grid" alt="grid" class="background-img">	
<main class="site-content artists artist-listing">
	    <h1 class="hidden">ARTISTS</h1>

	    <section class="artists">
		    <!-- <span class="h5 page-title">ARTISTS</span> -->
		<?php 
		    if($artistQuery->have_posts()): ?>
				<?php while($artistQuery->have_posts()): $artistQuery->the_post(); ?>

				    <?php if (function_exists('get_field')): ?>
					    <?php 
						
						$first_name			= get_field('first_name');
						$last_name 			= get_field('last_name');
						$additional_names 	= get_field('additional_names');
						$project_title		= get_field('project_title');

						?>
						<div class="artist-container">
							<?php 
							if( ($last_name[0] != $last_letter) ):
								echo "<span class='d1 artist-letter'>".$last_name[0]."</span>";
							endif;
							$last_letter = $last_name[0]; 
							?>
							<div class="artist-copy">
								<span class="h3 artist-title">
									<?php echo $first_name . " " . $last_name . " " . $additional_names ?>
								</span>
								<p class="artist-title">
									<?php echo $project_title ?>
								</p>
								<a class="button inline" title="view <?php echo $first_name . ' ' . $last_name . ' ' . $additional_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
							</div>
						</div>
					<?php endif ?>
				<?php endwhile ?>
			<?php endif ?>
	    </section>
</main><!-- #primary -->

<?php get_footer(); ?>