<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if ( ! file_exists( $composer = __DIR__ . '/vendor/autoload.php' ) ) {
	wp_die( __( 'Error locating autoloader. Please run <code>composer install</code>.', 'sage' ) );
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

\Roots\bootloader();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect( [ 'setup', 'filters', 'mega_menu' ] )
	->each( function ( $file ) {
		if ( ! locate_template( $file = "app/{$file}.php", true, true ) ) {
			wp_die(
			/* translators: %s is replaced with the relative file path */
				sprintf( __( 'Error locating <code>%s</code> for inclusion.', 'sage' ), $file )
			);
		}
	} );

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support( 'sage' );

add_action('plugins_loaded', 'my_coupon_init');

@ini_set( 'upload_max_size', '64M' );
@ini_set( 'post_max_size', '64M' );
@ini_set( 'max_execution_time', '300' );



add_action('pre_get_posts', 'set_posts_per_page');

function set_posts_per_page( $query ) {
	flush_rewrite_rules();

	global $wp_the_query;

	if ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_search() ) ) {
		$query->set( 'posts_per_page', 3 );
	}
	elseif ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_post_type_archive('case_studies') ) ) {
		$query->set( 'posts_per_page', 5 );
	}
	// Etc..

	return $query;
}




add_filter( 'gform_confirmation_anchor', function() {
	return true;
} );





