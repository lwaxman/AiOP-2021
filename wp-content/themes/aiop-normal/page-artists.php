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
	    'posts_per_page' => 10
	);

	$artistQuery = new WP_Query($artistsArgs);
	
?>

<div id="primary" class="site-content artists">
	<div id="content" role="main">
	    <section class="artistListing">
	    <h1>ARTISTS</h1>

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
						<div class="artistContainer">
							<h3 class="artistTitle"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></h3>
							<p class="p1 artistTitle"><?php echo $project_title ?></p>
							<a class="artistLink" href="<?php echo the_permalink(); ?>">View Project</a>
						</div>
					<?php endif ?>
				<?php endwhile ?>
			<?php endif ?>
		</section>
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>