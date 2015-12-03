<?php
/**
 * Template Name: Contact Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php get_sidebar(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content-contact.php', 'page' ); ?>

			<?php endwhile; // End of the loop. ?> -->
<?php the_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
