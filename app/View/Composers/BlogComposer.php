<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class BlogComposer extends Composer {
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		//
		'index',
		'archive',
		'template-tips',
	];

	/**
	 * Data to be passed to view before rendering.
	 *
	 * @return array
	 */
	public function with() {
		return [
			'banner_posts'  => $this->banner_posts(),
			'posts'         => $this->posts(),
			'pinned_post'   => $this->pinned_post(),
			'title'         => $this->title(),

		];
	}

	public function banner_posts() {
		if (is_post_type_archive('case_studies')) {
			return;
		}

		if ( is_page( 'Blog' ) ) {
			$post_type = 'post';
		} elseif ( is_page( 'Business Video Tips' ) ) {
			$post_type = 'tips';
		} else {
			$post_type = get_post_type();
		}


		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

		if ($paged != 1) {
			return;
		}

		$args = [
			'post_type'      => $post_type,
			'post_status'         => 'publish',
			'posts_per_page' => 2,
			'paged' => $paged
		];

		$query = new \WP_Query( $args );


		return $query;

	}

	public function posts() {
		if (is_post_type_archive('case_studies')) {
			return;
		}

		$tips = false;

		if ( is_page( 'Blog' ) ) {
			$post_type = 'post';
		} elseif ( is_page( 'Business Video Tips' ) ) {
			$post_type = 'tips';
			$tips = true;
		} else {
			$post_type = get_post_type();
		}

		$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;



		$args = [
			'post_type'      => $post_type,
			'post_status'         => 'publish',
			'posts_per_page' => 18,
			'paged' => $paged
		];

		if ($paged == 1  && ! $tips) {
			$offset = [
				'offset' => 2
			];

			$args = array_merge($args, $offset);
		}

		if ( is_archive() && ! is_post_type_archive('case_studies') && ! is_tag() && ! is_author() ) {

			$category = get_category( get_query_var( 'cat' ) );
			$cat_id   = $category->term_ID;

			$cat = [
				'category__in' => $cat_id,
			];

			$args = array_merge( $args, $cat );
		}

		$query = new \WP_Query( $args );


		return $query;
	}

	public function pinned_post() {
		$blog = get_page_by_title( 'Blog' );

		return get_field( 'pinned_post', $blog->ID );
	}

	/**
	 * Returns the post title.
	 *
	 * @return string
	 */
	public function title() {
		if ( is_home() ) {
			return "Our Blog";
		}

		if ( is_archive() ) {
			return get_the_archive_title();
		}

		return get_the_title();
	}

}
