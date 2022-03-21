<?php

namespace app;

if (! class_exists('MegaMenu')) {
	class MegaMenu extends \Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = null ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<div class=\"mega-menu\"><div class='container'><div class='row'><ul class=\"sub-menu\">\n";
		}

		function end_lvl( &$output, $depth = 0, $args = null ) {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</ul></div></div></div>\n";
		}

		function end_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
			$output .= "<p>Hello there</p></li>";
		}
	}
}
