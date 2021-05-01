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

   	$fridayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'sched_friday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => 100
	);
	$fridayQuery = new WP_Query($fridayArtistArgs);

	$saturdayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'sched_saturday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => 100
	);
	$saturdayQuery = new WP_Query($saturdayArtistArgs);

	$sundayArtistArgs = array(
	    'post_type' => 'artists',
	    'meta_key' => 'sched_sunday_start',
		'orderby' => 'meta_value',
	    'order'	=> 'ASC',
	    'posts_per_page' => 100
	);
	$sundayQuery = new WP_Query($sundayArtistArgs);


?>
<img src="<?php bloginfo('template_url'); ?>/assets/Grid-Home.svg" id="background-grid" alt="grid" class="background-img">	
<main class="site-content schedule">
	    <h1 class="hidden">ARTISTS</h1>

	    <section class="artists">

			<div class="day" id="friday">
				<h2>Friday</h2>
				<?php if($fridayQuery->have_posts()): ?>
					<?php while($fridayQuery->have_posts()): $fridayQuery->the_post(); ?>
					    <?php if (function_exists('get_field')): ?>

						    <?php 
							$first_name			= get_field('first_name');
							$last_name 			= get_field('last_name');
							$additional_names 	= get_field('additional_names');
							$project_title		= get_field('project_title');
							$project_location 	= get_field('project_location');
							$sched_friday_start		= get_field('sched_friday_start');
							$sched_friday_end		= get_field('sched_friday_end');
							?>

							<?php if($sched_friday_start): ?>
								<div class="artist-container">
									<p class="h3 artist-time"><?php echo $sched_friday_start."&ndash;".$sched_friday_end ?></p>
									<div class="project">
										<span class="h3 artist-title"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></span>
										<p class="artist-title"><?php echo $project_title ?></p>
									</div>
									<p class="location"><?php echo $project_location ?></p>
									<a class="button inline" title="view <?php echo $first_name . ' ' . $last_name . ' ' . $additional_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
								</div>
							<?php endif ?>

						<?php endif ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>

			<div class="day" id="saturday">
				<h2>Saturday</h2>
				<?php if($saturdayQuery->have_posts()): ?>
					<?php while($saturdayQuery->have_posts()): $saturdayQuery->the_post(); ?>
					    <?php if (function_exists('get_field')): ?>

						    <?php 
							$first_name			= get_field('first_name');
							$last_name 			= get_field('last_name');
							$additional_names 	= get_field('additional_names');
							$project_title		= get_field('project_title');
							$project_location 	= get_field('project_location');
							$sched_saturday_start		= get_field('sched_saturday_start');
							$sched_saturday_end		= get_field('sched_saturday_end');
							?>

							<?php if($sched_friday_start): ?>
								<div class="artist-container">
									<p class="h3 artist-time"><?php echo $sched_saturday_start."&ndash;".$sched_saturday_end ?></p>
									<div class="project">
										<span class="h3 artist-title"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></span>
										<p class="artist-title"><?php echo $project_title ?></p>
									</div>
									<p class="location"><?php echo $project_location ?></p>
									<a class="button inline" title="view <?php echo $first_name . ' ' . $last_name . ' ' . $additional_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
								</div>
							<?php endif ?>

						<?php endif ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>

			<div class="day" id="sunday">
				<h2>Sunday</h2>
				<?php if($sundayQuery->have_posts()): ?>
					<?php while($sundayQuery->have_posts()): $sundayQuery->the_post(); ?>
					    <?php if (function_exists('get_field')): ?>

						    <?php 
							$first_name			= get_field('first_name');
							$last_name 			= get_field('last_name');
							$additional_names 	= get_field('additional_names');
							$project_title		= get_field('project_title');
							$project_location 	= get_field('project_location');
							$sched_sunday_start		= get_field('sched_sunday_start');
							$sched_sunday_end		= get_field('sched_sunday_end');
							?>

							<?php if($sched_friday_start): ?>
								<div class="artist-container">
									<p class="h3 artist-time"><?php echo $sched_sunday_start."&ndash;".$sched_sunday_end ?></p>
									<div class="project">
										<span class="h3 artist-title"><?php echo $first_name . " " . $last_name . " " . $additional_names ?></span>
										<p class="artist-title"><?php echo $project_title ?></p>
									</div>
									<p class="location"><?php echo $project_location ?></p>
									<a class="button inline" title="view <?php echo $first_name . ' ' . $last_name . ' ' . $additional_names ?>" href="<?php echo the_permalink(); ?>">View project</a>
								</div>
							<?php endif ?>

						<?php endif ?>
					<?php endwhile ?>
				<?php endif ?>
			</div>
			
	    </section>
</main><!-- #primary -->

<?php get_footer(); ?>