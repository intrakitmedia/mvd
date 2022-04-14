<?php

namespace app;

if ( ! class_exists( 'MegaMenu' ) ) {
	class MegaMenu extends \Walker_Nav_Menu {
		private $currentMenuItem;

		function start_lvl( &$output, $depth = 0, $args = null ) {
			$menu_title = $this->currentMenuItem->title;
			$indent = str_repeat( "\t", $depth );
			$output .= "\n$indent<div class=\"mega-menu\"><div class='container'><div class='mega-menu-inner'><div 
class='mega-menu-content'><div 
class='sub-menu-title'><h2>$menu_title</h2></div><ul 
class=\"sub-menu\">\n";
		}

		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$asset_url = \Roots\asset( 'images/services-menu.jpg' )->uri();
			$indent    = str_repeat( "\t", $depth );
			$output    .= "$indent</ul></div><div class='image-wrapper-menu'><img src='$asset_url' /></div></div></div></div>\n";
		}

		function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
			$this->currentMenuItem = $data_object;

			parent::start_el($output,$data_object,$depth,$args,$current_object_id);
		}

		function end_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
			$item        = get_post_meta( $data_object->ID );
			$item_url = $data_object->url;
			$desc = '';

			if (array_key_exists('_menu_item_desc', $item)) {
				$desc = $item['_menu_item_desc'][0];
			}
			$classes     = empty( $data_object->classes ) ? array() : (array) $data_object->classes;
			$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

			if ( $depth == 0 ) {
				if ( in_array( 'menu-item-has-children', $classes ) ) {
					$output .= "<i class=\"main-menu-icon fa-solid fa-angle-down\"></i></li>";
				}
			}

			if ( $depth == 1 ) {
				$output .= "<p><a href='$item_url'>$desc</a></p></li>";
			}
		}
	}
}
