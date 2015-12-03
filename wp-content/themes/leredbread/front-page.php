<?php
/**
 * The template for displaying the front page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<?php get_sidebar(); ?>
<div class="lered-hero">
  <span>Baked to perfection.</span>
  <!-- <img id="lered-home-bg" src="<?php echo get_template_directory_uri(); ?>/images/hero-bread.jpg" alt="Collection of fresh artisinal breads"> -->
</div>

<?php
$terms = get_terms("product-type");
if ($terms) {?>
    <ul class="product-type">
    <?php foreach($terms as $term) { ?>
        <li class="product">
            <img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.png"
                 alt="<?php echo $term->slug ?>">
            <h3><?php echo $term->name ?></h3>
            <p><?php echo $term->description;?>
                <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
            </p>
        </li><?php
    }
} ?>


<ul id="latest">
<?php
$args = array( 'posts_per_page' => 4);

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li class="latest">
    <div class="lered-post-wrapper">
    <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <span class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</span>
  </div>
	</li>
<?php endforeach;
wp_reset_postdata();?>

</ul>

<?php get_footer(); ?>
