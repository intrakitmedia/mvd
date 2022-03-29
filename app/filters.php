<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

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
