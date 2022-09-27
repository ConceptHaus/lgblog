<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LG_Blog_Child
 */

?>

<div class="no-results not-found">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'No se encontro', 'lg_blog-child' ); ?></h1>
				</header><!-- .page-header -->
			
				<div class="page-content">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) :
			
						printf(
							'<p>' . wp_kses(
								/* translators: 1: link to WP admin new post page. */
								__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'lg_blog-child' ),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url( admin_url( 'post-new.php' ) )
						);
			
					elseif ( is_search() ) :
						?>
			
						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lg-blog' ); ?></p>
						<?php			
					else :
						?>
			
						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lg-blog' ); ?></p>
						<?php			
					endif;
					?>
				</div><!-- .page-content -->
			</div><!-- end.col-* -->
		</div><!-- end.row -->
	</div><!-- end.container -->
</div><!-- .no-results -->
