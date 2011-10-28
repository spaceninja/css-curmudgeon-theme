<?php

/**
 * Add Favicon
 */
function favicon_link() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/img/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );

/**
 * Set Pagination Options
 */
function csscurmudgeon_pagination_show_first_link() { return false; }
function csscurmudgeon_pagination_show_last_link() { return false; }
add_filter( 'flatline_pagination_show_first_link', 'csscurmudgeon_pagination_show_first_link' );
add_filter( 'flatline_pagination_show_last_link', 'csscurmudgeon_pagination_show_last_link' );

/**
 * Override Copyright
 */
function csscurmudgeon_copyright_by() { return 'Scott Vandehey'; }
add_filter( 'flatline_copyright_by', 'csscurmudgeon_copyright_by' );

/**
 * Add CSS Links
 * This function adds links to additional CSS files.
 */
function csscurmudgeon_styles() {
	$csscurmudgeon_stylesheetdir = get_stylesheet_directory_uri(); ?>
	<link rel="stylesheet" href="<?php echo $csscurmudgeon_stylesheetdir; ?>/css/reset.css" />
	<link rel="stylesheet" href="<?php echo $csscurmudgeon_stylesheetdir; ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo $csscurmudgeon_stylesheetdir; ?>/css/csscurmudgeon.css" />
	<!--[if IE 8]><link rel="stylesheet" href="<?php echo $csscurmudgeon_stylesheetdir; ?>/css/ie8bugs.css" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="<?php echo $csscurmudgeon_stylesheetdir; ?>/css/ie7bugs.css" /><![endif]-->
<?php }
add_action( 'wp_head', 'csscurmudgeon_styles' );

/**
 * Add Script Links
 * This function adds links to additional JS files.
 */
function flatline_scripts() {
	wp_register_script ( 'csscurmudgeon', get_stylesheet_directory_uri() . '/js/csscurmudgeon.js', array('jquery'), '1.0.0', true );
  if (!is_admin()):
		wp_enqueue_script( 'modernizr' );
		wp_enqueue_script( 'csscurmudgeon' );
	endif;
}
