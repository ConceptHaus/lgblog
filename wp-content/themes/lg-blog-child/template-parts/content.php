<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LG_Blog_Child
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('contentGen'); ?>>
	<?php lg_blog_post_thumbnail(); ?>

	<div class="contentGen__descFull">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="entry-content">
						<div class="entry-header">
							<?php
							if ( is_singular() ) :
								the_title( '<h1 class="entry-title">', '</h1>' );
							else :
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							endif;
					
							if ( 'post' === get_post_type() ) :
								?>
								<div class="entry-meta">
									<?php
									lg_blog_posted_on();
									lg_blog_posted_by();
									?>
								</div><!-- .entry-meta -->
							<?php endif; ?>
						</div><!-- .entry-header -->				
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lg-blog' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lg-blog' ),
				'after'  => '</div>',
			)
		);
		?>
					</div><!-- end.entry-content -->
				</div><!-- end.col-* -->
				<div class="col-12">
					<div class="entry-footer">
						<?php lg_blog_entry_footer(); ?>
					</div><!-- .entry-footer -->
				</div><!-- end.col-* -->
			</div><!-- end.row -->
		</div><!-- end.container -->
	</div><!-- end.singleCt__descFull -->

</section><!-- #post-<?php the_ID(); ?> -->
