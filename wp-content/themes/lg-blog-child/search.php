<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package LG_Blog_Child
 */

get_header();
?>
<section id="post-<?php the_ID(); ?>" <?php post_class('contentSear'); ?>>
<?php if ( have_posts() ) : ?>
	<div class="contentSear__descFull">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="entry-content">
					<div class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Resultados de búsqueda: %s', 'lg_blog-child' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</div><!-- .page-header -->
					</div><!-- end.entry-content -->
				</div><!-- end.col-* -->
			</div><!-- end.row -->
			<div class="row">
		<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );

		endwhile;

		the_posts_navigation();

		else :

		get_template_part( 'template-parts/content', 'none' );
		?>

			</div><!-- end.row -->
		</div><!-- end.container -->
	</div><!-- end.contentSear__descFull -->
<?php endif; ?>
</section><!-- #post-<?php the_ID(); ?> -->
<?php
get_footer();
