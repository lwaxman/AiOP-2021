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

<main class="site-content donate">

    <h1 class="hidden">DONATE</h1>	

    <?php while ( have_posts() ) : the_post(); ?>
    	<!-- <span class="h5 page-title">DONATE</span> -->

        <div class="payment-method paypal">
            <h2>PayPal</h2>
            <p class="p2">Donations are made through our fiscal sponsor GOH/Seven Loaves Productions. Be sure to select the amount and the program: Art in Odd Places.</p>
            <a href="https://www.paypal.com/us/fundraiser/charity/1474262" class="button primary">Donate now</a>
        </div>

        <div class="payment-method mail">
            <h2>Mail us a check</h2>
            <p class="p2">Make checks payable to GOH Productions (our 5013c fiscal sponsor) with Art in Odd Places in the note & send to:</p>
            <p class="p2r">
                GOH Productions</br>
                309 East 4th Street, Suite 3-B</br>
                New York, NY 10009-6911</br>
                Attention: Art in Odd Places 
            </p>
        </div>

	<?php endwhile; // end of the loop. ?>
</main><!-- #primary -->

<?php get_footer(); ?>