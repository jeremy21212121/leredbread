<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
<!-- <div class="hero">
  <img id="lered-home-bg" src="<?php echo get_template_directory_uri(); ?>/images/hero-bread.jpg" alt="Collection of fresh artisinal breads">
</div> -->
