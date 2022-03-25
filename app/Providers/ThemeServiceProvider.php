<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'init', [ $this, 'register_post_types' ] );
		add_action( 'wp_nav_menu_item_custom_fields', [ $this, 'mega_menu' ], 10, 2 );
		add_action( 'wp_update_nav_menu_item', [ $this, 'kia_nav_update' ], 10, 2 );
		add_theme_support( 'responsive-embeds' );
		add_filter( 'render_block', [ $this, 'wrap_embed' ], 10, 2 );
	}

	public function mega_menu( $item_id, $item ) {
		$menu_item_desc = get_post_meta( $item_id, '_menu_item_desc', true );

		?>
        <div style="clear: both;">
            <span class="description"><?php _e( "Item Description", 'menu-item-desc' ); ?></span><br/>
            <input type="hidden" class="nav-menu-id" value="<?php echo $item_id; ?>"/>
            <div class="logged-input-holder">
				<textarea cols="45" type="text" name="menu_item_desc[<?php echo $item_id; ?>]" id="menu-item-desc-<?php
				echo
				$item_id; ?>"><?php echo esc_attr( $menu_item_desc ); ?></textarea>
            </div>
        </div>
		<?php
	}

	public function wrap_embed( $block_content, $block ) {
		if ( 'core/embed' === $block['blockName'] ) {
			$block_content = '<div class="video-container video-iframe">' . $block_content . '</div>';
		}

		return $block_content;
	}

	/**
	 * Save the menu item meta
	 *
	 * @param int $menu_id
	 * @param int $menu_item_db_id
	 */
	function kia_nav_update( $menu_id, $menu_item_db_id ) {

		if ( isset( $_POST['menu_item_desc'][ $menu_item_db_id ] ) ) {
			foreach ( $_POST['menu_item_desc'] as $menu_item_id => $menu_item_desc ) {
				$sanitized_data = sanitize_text_field( $menu_item_desc );
				update_post_meta( $menu_item_id, '_menu_item_desc', $sanitized_data );
			}
		} else {
			delete_post_meta( $menu_item_db_id, '_menu_item_desc' );
		}
	}

	public
	function register_post_types() {
		register_post_type( 'services',
			array(
				'labels'       => array(
					'name'          => __( 'Services', 'textdomain' ),
					'singular_name' => __( 'Service', 'textdomain' ),
					'view_item'     => __( 'View Service', 'services' ),
					'view_items'    => __( 'View Services', 'services' ),
					'edit_item'     => __( 'Edit Service', 'services' ),
					'all_items'     => __( 'All Services', 'services' ),
					'add_new_item'  => __( 'Add New Service', 'services' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'rewrite'      => array( 'slug' => 'services' ),
				'show_in_rest' => true,
				'supports'     => array( 'title', 'thumbnail' ),
			)
		);

		register_post_type( 'portfolios',
			array(
				'labels'       => array(
					'name'          => __( 'Portfolio', 'textdomain' ),
					'singular_name' => __( 'Portfolio', 'textdomain' ),
					'view_item'     => __( 'View Portfolio', 'portfolios' ),
					'view_items'    => __( 'View Portfolio', 'portfolios' ),
					'edit_item'     => __( 'Edit Portfolio', 'portfolios' ),
					'all_items'     => __( 'All Portfolio Items', 'portfolios' ),
					'add_new_item'  => __( 'Add New Portfolio', 'portfolios' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'rewrite'      => array( 'slug' => 'portfolio' ),
				'show_in_rest' => true,
				'supports'     => array( 'title', 'thumbnail' ),
			)
		);

		register_post_type( 'case_studies',
			array(
				'labels'       => array(
					'name'          => __( 'Case Studies', 'textdomain' ),
					'singular_name' => __( 'Case Study', 'textdomain' ),
					'view_item'     => __( 'View Case Study', 'portfolios' ),
					'view_items'    => __( 'View Case Studies', 'case_studies' ),
					'edit_item'     => __( 'Edit Case Study', 'case_studies' ),
					'all_items'     => __( 'All Case Studies', 'case_studies' ),
					'add_new_item'  => __( 'Add New Case Study', 'case_studies' ),
				),
				'public'       => true,
				'has_archive'  => true,
				'rewrite'      => array( 'slug' => 'case-studies' ),
				'show_in_rest' => true,
				'supports'     => array( 'title', 'thumbnail', 'categories', 'editor' ),
			)
		);

		register_post_type( 'videos',
			array(
				'labels'       => array(
					'name'          => __( 'Videos', 'textdomain' ),
					'singular_name' => __( 'Video', 'textdomain' ),
					'view_item'     => __( 'View Video', 'portfolios' ),
					'view_items'    => __( 'View Videos', 'case_studies' ),
					'edit_item'     => __( 'Edit Video', 'case_studies' ),
					'all_items'     => __( 'All Videos', 'case_studies' ),
					'add_new_item'  => __( 'Add New Video', 'case_studies' ),
				),
				'public'       => false,
				'has_archive'  => true,
				'show_ui' => true,
				'rewrite'      => array( 'slug' => 'videos' ),
				'show_in_rest' => true,
				'supports'     => array( 'title', 'thumbnail' ),
			)
		);

		register_taxonomy(
			'examples',
			'videos',
			array(
				'labels' => array(
					'name' => 'Examples',
					'add_new_item' => 'Add Example',
					'new_item_name' => "New Example"
				),
				'public' => false,
				'show_ui' => true,
				'show_tagcloud' => false,
				'hierarchical' => false,
				'hasArchive' => true,
				'show_admin_column' => true,

			)
		);

//		register_post_type('videos',
//			array(
//				'labels'      => array(
//					'name'          => __( 'Videos', 'textdomain' ),
//					'singular_name' => __( 'Video', 'textdomain' ),
//					'view_item' => __( 'View Video', 'portfolios' ),
//					'view_items' =>__( 'View Videos', 'videos' ),
//					'edit_item' =>  __( 'Edit Video', 'videos' ),
//					'all_items' => __( 'All Videos', 'videos' ),
//					'add_new_item' => __( 'Add New Video', 'videos' ),
//				),
//				'public'      => false,
//				'has_archive' => true,
//				'rewrite'     => array( 'slug' => 'videos' ),
//				'show_in_rest' => true,
//				'show_ui' => true,
//				'supports' => array('title', 'thumbnail'),
//			)
//		);
	}
}
