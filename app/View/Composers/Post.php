<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\Assets\Asset;

class Post extends Composer {
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'partials.page-header',
		'partials.content',
		'partials.content-*',
		'single-post',
		'single-services',
		'single-portfolios',
		'template-blog',
		'single-case_studies',
		'template-solutions',
		'archive',
	];

	public $post_ID;

	public function __construct() {
		$this->post_ID = $this->set_post_id();
	}

	/**
	 * Data to be passed to view before rendering, but after merging.
	 *
	 * @return array
	 */
	public function override() {
		return [
			'post_ID'       => $this->post_id(),
			'permalink'     => $this->permalink(),
			'title'         => $this->title(),
			'thumbnail_url' => $this->thumbnail_url(),
			'thumbnail_alt' => $this->thumbnail_alt(),
			'main_content'  => $this->main_content(),
			'categories'    => $this->categories(),
			'recent_posts'  => $this->recent_posts(),
			'related_posts' => $this->related_posts(),
			'default_image' => $this->default_image(),
		];
	}

	/**
	 * Set the post ID.
	 *
	 * @return string
	 */
	public function set_post_id() {
		return get_the_ID();
	}

	/**
	 * Returns the post ID.
	 *
	 * @return string
	 */
	public function post_id() {
		return $this->post_ID;
	}

	/**
	 * Returns the post title.
	 *
	 * @return string
	 */
	public function title() {
		if ( $this->view->name() !== 'partials.page-header' ) {
			return get_the_title();
		}

		if ( is_home() ) {
			if ( $home = get_option( 'page_for_posts', true ) ) {
				return get_the_title( $home );
			}

			return __( 'Latest Posts', 'sage' );
		}

		if ( is_archive() ) {
			return get_the_archive_title();
		}

		if ( is_search() ) {
			return sprintf(
			/* translators: %s is replaced with the search query */
				__( 'Search Results for %s', 'sage' ),
				get_search_query()
			);
		}

		if ( is_404() ) {
			return __( 'Not Found', 'sage' );
		}

		return get_the_title();
	}

	/**
	 * Returns the post thumbnail alt text.
	 *
	 * @return string
	 */

	public function thumbnail_alt() {
		$thumbnail_id = get_post_thumbnail_id();
		$alt          = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );

		return $alt;
	}

	/**
	 * Returns the main content.
	 *
	 * @return string
	 */
	public function main_content() {
		return get_the_content();
	}

	/**
	 * Returns the post thumbnail url.
	 *
	 * @return string
	 */
	public function thumbnail_url() {
		return get_the_post_thumbnail_url();
	}

	/**
	 * Returns the post terms.
	 *
	 * @return string
	 */
	public function categories() {
		return get_the_terms( $this->post_ID, 'category' );
	}

	/**
	 * Returns the permalink.
	 *
	 * @return string
	 */
	public function permalink() {
		return get_the_permalink();
	}

	public function recent_posts() {
		$args = array(
			'numberposts'  => 5,
			'offset'       => 0,
			'post__not_in' => array( $this->post_ID )
		);

		return get_posts( $args );
	}

	public function related_posts() {
		$related = get_posts(
			array(
				'category__in' => wp_get_post_categories( $this->post_ID ),
				'numberposts'  => 3,
				'post__not_in' => array( $this->post_ID )
			)
		);

		return $related;
	}

	public function default_image() {
		return Asset('images/default-image.jpg');
	}
}
