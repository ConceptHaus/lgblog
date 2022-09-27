<?php
function lg_blog_child_setup() {
  //Lenguajes
  // load_child_theme_textdomain( 'lg_blog-child', get_stylesheet_directory() . '/languages/' );
  //Corte de imágenes
  add_theme_support( 'post-thumbnails' );
  if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'homepage-twitter', 280, 150, true );
    add_image_size( 'thumb-blog', 470, 235, true );
  }
  //Registro de Menús
  register_nav_menus( array(
      'menu-sidebar' => esc_html__( 'Menu Sidebar', 'lg_blog-child' ),
      'menu-productos' => esc_html__( 'Menu Productos', 'lg_blog-child' ),
  ) );
  //Función para cargar logo
  add_theme_support( 'custom-logo', array(
    'flex-width' => true,
    'flex-height' => true,
  ) );
  //función para activar extensiones extras al WP
  function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
  add_filter('upload_mimes', 'add_file_types_to_uploads');
}
add_action( 'after_setup_theme', 'lg_blog_child_setup' );
//Se agregan recursos CSS & JS del tema hijo.
function lg_blog_head() {
  $versionFiles = '1.0.0';
  // wp_enqueue_style( 'google-lg_blog-fonts', 'https://fonts.googleapis.com/css?family=Abel|Amatic+SC:400,700|Special+Elite|Julius+Sans+One|Syncopate|Gruppo|Buda:300|Dosis:400,500,700', array(), null );
  // CSS
	wp_enqueue_style('bootstrap',  get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), $versionFiles);
	wp_enqueue_style('style-min',  get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), $versionFiles);
  wp_enqueue_style('animate',  get_stylesheet_directory_uri() . '/assets/css/animate.css', array(), $versionFiles);
  wp_enqueue_style('menu-siderbar-css',  get_stylesheet_directory_uri() . '/assets/css/slide-menu.min.css', array(), $versionFiles);
  // jQuery
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/assets/vendor/jquery/dist/jquery.min.js' );
  wp_enqueue_script('jquery');
  // AJAX
  // wp_register_script('script_handle', get_stylesheet_directory_uri().'/assets/js/scripts/ajaxScriptPost.min.js', array('jquery'), $versionFiles, true);
  // wp_localize_script('script_handle', 'ajx_objt', array('ajax_url'=>admin_url('admin-ajax.php')));
  // wp_enqueue_script('script_handle');
  //Scrips
	wp_enqueue_script( 'popper.min', get_stylesheet_directory_uri() . '/assets/vendor/popper.js/dist/umd/popper.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'tweenmax', get_stylesheet_directory_uri() . '/assets/js/TweenMax.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'wow.min', get_stylesheet_directory_uri() . '/assets/js/wow.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'slick.min', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'menu-siderbar-js', get_stylesheet_directory_uri() . '/assets/js/slide-menu.min.js', array(), $versionFiles, true);
	wp_enqueue_script( 'layout.min', get_stylesheet_directory_uri() . '/assets/js/layoutScripts.min.js', array(), $versionFiles, true);	
}
add_action( 'wp_enqueue_scripts', 'lg_blog_head' );

add_filter( 'pre_option_link_manager_enabled', '__return_true' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Post ajax
 */
// require get_stylesheet_directory() . '/inc/post-ajax.php';

/**
 * Customizer additions.
 */
// require get_stylesheet_directory() . '/inc/cutomizer.php';

/**
 * Mailings
 */
// require get_stylesheet_directory() . '/inc/mail-contact.php';