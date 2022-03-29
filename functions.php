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

add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry, $ajax ) {
	GFCommon::log_debug( 'gform_confirmation: running.' );

	$forms = array( 6 ); // Target forms with id 3, 6 and 7. Change this to fit your needs.

	if ( ! in_array( $form['id'], $forms ) || empty( $confirmation['redirect'] ) ) {
		return $confirmation;
	}

	$url = esc_url_raw( $confirmation['redirect'] );
	GFCommon::log_debug( __METHOD__ . '(): Redirect to URL: ' . $url );
	$confirmation = 'Thanks for contacting us! We will get in touch with you shortly.';
	$confirmation .= GFCommon::get_inline_script_tag( "window.open('$url', '_blank');" );

	return $confirmation;
}, 10, 4 );

add_theme_support( 'sage' );

add_action('plugins_loaded', 'my_coupon_init');


add_filter( 'gform_confirmation', function ( $confirmation, $form, $entry, $ajax ) {

	$forms = array( 6 ); // Target forms with id 3, 6 and 7. Change this to fit your needs.

	if ( ! in_array( $form['id'], $forms ) || empty( $confirmation['redirect'] ) ) {
		return $confirmation;
	}

	$url = esc_url_raw( $confirmation['redirect'] );
	GFCommon::log_debug( __METHOD__ . '(): Redirect to URL: ' . $url );
	$confirmation = 'Thanks for contacting us! We will get in touch with you shortly.';
	$confirmation .= GFCommon::get_inline_script_tag( "window.open('$url', '_blank');" );

	echo "Hello";
	die();

	return $confirmation;
}, 10, 4 );

@ini_set( 'upload_max_size', '64M' );
@ini_set( 'post_max_size', '64M' );
@ini_set( 'max_execution_time', '300' );
