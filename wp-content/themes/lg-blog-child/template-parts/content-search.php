<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LG_Blog_Child
 */

?>

<div class="col-12 col-md-4">
	<figure class="boxEntry">
		<?php lg_blog_post_thumbnail(); ?>
		<figcaption>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php the_excerpt(); ?>
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="boxEntry__link"></a>
		</figcaption>
	</figure>
</div><!-- end.col-* -->
