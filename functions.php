<!-- functions page -->
<!--this page makes all the theme pages of the project work-->
<!-- The functions.php is one of the main WordPress files and helps manage and increase the functionality of the entire platform.
Each theme has its own functions.php file, which is located in the root folder of the same and which is used to manage custom functions or to change the behavior of the theme in use.-->
<?php
if ( ! function_exists( 'miotema_setup' ) ) {
	function miotema_setup() {
		add_theme_support( "title-tag" );
		// Enable link
		add_theme_support( 'automatic-feed-links' );
		// Enable image
		add_theme_support( 'post-thumbnails' );
		// Thumbnail sizes
		add_image_size( 's_my_theme', 800, 493, true ); 
		add_image_size( 'miotema_big', 1400, 928, true ); 
		// Menu areas, all custom areas
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'project_theme' ),
		) );
	}
}
add_action( 'after_setup_theme', 'miotema_setup' );
/* Sidebars */
if ( ! function_exists( 'miotema_sidebars' ) ) {
	function miotema_sidebars()	{
		register_sidebar(array( 'name' => esc_html__( 'Primary', 'miotema' ),'id' => 'primary','description' => esc_html__( 'Normal full width sidebar.', 'miotema' ), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	}
}
add_action( 'widgets_init', 'miotema_sidebars' );
/*  Include style.css and scripts.js */
if ( ! function_exists( 'miotema_styles_scripts' ) ) {
	function miotema_style_scripts() {
		wp_enqueue_script( 'miotema-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );
		wp_enqueue_style( 'miotema-sourcesanspro','//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700');
		wp_enqueue_style( 'miotema', get_template_directory_uri().'/css/style.css');
	}
}
add_action( 'wp_enqueue_scripts', 'miotema_style_scripts' );
/* Integrated reactive */
add_filter( 'embed_oembed_html', 'miotema_oembed_filter', 10, 4 ) ;
function miotema_oembed_filter($html, $url, $attr, $post_ID) {
	$return = '<figure class="video-container">'.$html.'</figure>';
	return $return;
}
/* Unlike a plugin that works "independently", all customizations made on a specific functions.php will act only on a specific theme.*/