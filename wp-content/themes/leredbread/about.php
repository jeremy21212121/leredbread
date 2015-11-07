<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php get_sidebar(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- <?php while ( have_posts() ) : the_post(); ?> -->
<?php the_content(); ?>


			<!-- <?php endwhile; // End of the loop. ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
