<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LG_Blog_Child
 */

?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="ConceptHaus">
  <meta name="robots" content="index, follow">
	<link rel="alternate" hreflang="es-mx" href="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php //wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Saltar contenido', 'lg_blog-child' ); ?></a>

  <header class="headerGen">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-5 col-md-3 col-lg-3">
          <div class="brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
            <?php if(has_custom_logo()) { echo '<img src="'. esc_url( $image[0] ) .'" alt="LG Blog">'; } ?>
            <?php if ( is_front_page() && is_home() ) : ?>
              <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
            <?php else: ?>
              <p class="site-title"><?php bloginfo( 'name' ); ?></p>
            <?php endif; ?>
            </a>
          </div><!-- end.brand -->
        </div><!-- end.col-* -->
        <div class="col-md-5 col-lg-5 d-none d-md-block">
          <a class="headerGen__logoTop" href="http://" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lg_family_logo.svg" alt="LG Family Club">
          </a>
        <?php
          wp_nav_menu( array(
            'items_wrap'     => '<ul class="listNavMain">%3$s</ul>',
            'theme_location' => 'menu-productos',
            'container'       => 'div',
            'container_class' => 'menuProd',
            'container_id'    => '',
            'before'          => '',
            'after'           => '',
          ) );
        ?><!-- end.menuProd -->
        </div><!-- end.col-* -->
        <div class="col-7 col-md-4 col-lg-4">
          <div class="toolsHeader">
            <button class="toolsHeader__search" data-search-open=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/search-icon.png" alt="Search icon"></button>
            <button class="toolsHeader__menu slide-menu-control" data-target="test-menu-right" data-action="toggle"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/menu-icon.png" alt="Menú icon"></button>
            <a class="toolsHeader__logo" href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lg_logo.svg" alt="LG"></a>
          </div><!-- end.toolsHeader -->
        </div><!-- end.col-* -->
      </div><!-- end.row -->
    </div><!-- end.container -->
    <div id="searchField" class="SearchCont">
      <form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="SearchCont__item">
          <div class="formBus">
            <div class="iconForm">
              <i class="fa fa-search"></i>
            </div><!-- end.iconForm -->
            <input type="search" placeholder="Buscar" aria-label="search lg" name="s" id="search-input" value="<?php echo esc_attr( get_search_query() ); ?>" autocomplete="off" autocorrect="off" autocapitalize="off">
          </div><!-- end.formBus -->
        </div><!-- end.SearchCont__item -->
        <div class="SearchCont__item">
          <button type="button" class="btnClose" data-action="close-search" data-label="Cerrar"><i class="fa fa-close"></i></button>
        </div><!-- end.SearchCont__item -->
      </form>
    </div><!-- end.SearchCont -->
  </header><!-- end.headerGen -->

  <nav class="slide-menu" id="test-menu-right">
    <div class="controls">
      <h3 class="titleCat">Categorías</h3>
      <button type="button" class="btnMenuClose slide-menu-control" data-action="close"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/menu-icon.png" alt="Menú icon"></button>
      <!-- <button type="button" class="btn slide-menu-control" data-action="back">Back</button> -->
    </div>
  <?php
    wp_nav_menu( array(
      'items_wrap'     => '<ul>%3$s</ul>',
      'theme_location' => 'menu-sidebar',
      'container'       => '',
      'container_class' => '',
      'container_id'    => '',
      'before'          => '',
      'after'           => '',
    ) );
  ?>
  </nav>

  <main>
    <article id="primary" class="content-area">
