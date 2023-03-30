<?php 

/**
 * Crupi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Crupi
 */

/**
* Enqueue scripts and styles.
*/
function crupi_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
	wp_enqueue_script( 'fa-js','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js');
	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'slick-carousel','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');	 
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.4.1', 'all' );
 	// Theme's main stylesheet

 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
	wp_enqueue_script('crupi-js', get_template_directory_uri() . '/js/all.js', array('jquery'), filemtime(get_template_directory() . '/js/all.js'), true);
	wp_enqueue_style('crupi-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);
	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/inc/galeria.css', array(), '4.4.1', 'all' );
	wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900');

}
add_action( 'wp_enqueue_scripts', 'crupi_scripts' );

function crupi_config(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

	register_nav_menus(
		array(
			'crupi_main_menu'	=> 'Crupi Main Menu',
			'crupi_footer_menu'	=> 'Crupi Footer Menu'
		)
	);

	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width'		=> 255,
		'single_image_width'		=> 255,
		'product_grid'				=> array(
	            'default_rows'    => 10,
	            'min_rows'        => 5,
	            'max_rows'        => 10,
	            'default_columns' => 1,
	            'min_columns'     => 1,
	            'max_columns'     => 1,			
		)
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}

}
add_action( 'after_setup_theme', 'crupi_config', 0 );

if( class_exists( 'WooCommerce' )){
	require get_template_directory() . '/inc/modificacoes-loja.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'crupi_woocommerce_header_add_to_cart_fragment' );

function crupi_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="quantidade"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.quantidade'] = ob_get_clean();
	return $fragments;
}



add_action('widgets_init','crupi_sidebars');

function crupi_sidebars(){
	register_sidebar(array(
		'name'				=>	'Loja Sidebar',
		'id'				=> 	'crupi-sidebar-1',
		'description'		=>	'Insira seus Widgets aqui',
		'before_widget'		=>	'<div id="%1$s" class="widget %2$s widget-wrapper"> ',
		'after_widget'		=>	'</div>',
		'before_title'		=>	'<h4 class="widget-title"> ',
		'after_title'		=>	'</h4>',

	)
);
}

