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

add_action( 'gform_after_submission', 'post_to_third_party', 10, 2 );
function post_to_third_party( $entry, $form ){
	if ( rgar( $entry, 'status' ) === 'spam' ) {
		return false;
	}
	$body = [];
	function dupeCheck($fieldName, $bodyData) {
		$cleanLabel = substr(preg_replace("/[^a-zA-Z0-9]+/", "", $fieldName), 0, 24);
		for ($x = 0; $x <= 20; $x++) {
			if(array_key_exists($cleanLabel, $bodyData)) {
				$cleanLabel = $cleanLabel . $x;
			} else { break; }
		}
		return $cleanLabel;
	}
	$formFields = $form['fields'];
	foreach($formFields as $formField):
		if($formField['label'] == 'sharpspring_base_uri') {
			$base_uri = rgar( $entry, $formField['id']);
			$sendToSharpSpring = true;
		} elseif($formField['label'] == 'sharpspring_endpoint') {
			$post_endpoint = rgar( $entry, $formField['id']);
		} elseif($formField['type'] == 'multiselect') {
			$fieldNumber = $formField['id'];
			$fieldLabel = dupeCheck($formField['label'], $body);
			$tempValue = rgar ( $entry, strval($fieldNumber) );
			$trimmedValue = str_replace('[', '', $tempValue);
			$trimmedValue = str_replace(']', '', $trimmedValue);
			$trimmedValue = str_replace('"', '', $trimmedValue);
			$body[preg_replace("/[^a-zA-Z0-9]+/", "", $fieldLabel)] = $trimmedValue;
		} elseif($formField['inputs']) {
			if($formField['type'] == 'checkbox') {
				$fieldNumber = $formField['id'];
				$fieldLabel = dupeCheck($formField['label'], $body);
				$checkBoxField = GFFormsModel::get_field( $form, strval($fieldNumber) );
				$tempValue = is_object( $checkBoxField ) ? $checkBoxField->get_value_export( $entry ) : '';
				$trimmedValue = str_replace(', ', ',', $tempValue);
				$body[preg_replace("/[^a-zA-Z0-9]+/", "", $fieldLabel)] = $trimmedValue;
			} elseif($formField['type'] == 'time') {
				$fieldNumber = $formField['id'];
				$fieldLabel = dupeCheck($formField['label'], $body);
				$body[preg_replace("/[^a-zA-Z0-9]+/", "", $fieldLabel)] = rgar( $entry, strval($fieldNumber) );
			} elseif($formField['type'] == 'date') {
				$fieldNumber = $formField['id'];
				$fieldLabel = dupeCheck($formField['label'], $body);
				$body[preg_replace("/[^a-zA-Z0-9]+/", "", $fieldLabel)] = rgar( $entry, strval($fieldNumber) );
			} else {
				foreach($formField['inputs'] as $subField):
					$fieldLabel = dupeCheck($subField['label'], $body);
					$fieldNumber = $subField['id'];
					$body[preg_replace("/[^a-zA-Z0-9]+/", "", $fieldLabel)] = rgar( $entry, strval($fieldNumber) );
				endforeach;
			} } else {
			$fieldNumber = $formField['id'];
			$fieldLabel = dupeCheck($formField['label'], $body);
			$body[preg_replace("/[^a-zA-Z0-9]+/", "", $fieldLabel)] = rgar( $entry, strval($fieldNumber) );
		};
	endforeach;
	$body['form_source_url'] = $entry['source_url'];
	if(array_key_exists($_COOKIE['__ss_tk'])) {
		$body['trackingid__sb'] = $_COOKIE['__ss_tk']; //DO NOT CHANGE THIS LINE... it collects the tracking cookie to establish tracking
	}
//	$body['trackingid__sb'] = $_COOKIE['__ss_tk']; //DO NOT CHANGE THIS LINE... it collects the tracking cookie to establish tracking
	$post_url = $base_uri . $post_endpoint;
	if($sendToSharpSpring) {
		$request = new WP_Http();
		$response = $request->post( $post_url, array( 'body' => $body ) );
	}
}





