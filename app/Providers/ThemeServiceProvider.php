<?php

namespace App\Providers;

use Roots\Acorn\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		add_action('init', [$this, 'register_post_types']);
	}

	public function register_post_types() {
		register_post_type('services',
			array(
				'labels'      => array(
					'name'          => __( 'Services', 'textdomain' ),
					'singular_name' => __( 'Service', 'textdomain' ),
					'view_item' => __( 'View Service', 'services' ),
					'view_items' =>__( 'View Services', 'services' ),
					'edit_item' =>  __( 'Edit Service', 'services' ),
					'all_items' => __( 'All Services', 'services' ),
					'add_new_item' => __( 'Add New Service', 'services' ),
				),
				'public'      => true,
				'has_archive' => true,
				'rewrite'     => array( 'slug' => 'services' ),
				'show_in_rest' => true,
				'supports' => array('title', 'thumbnail'),
			)
		);

		register_post_type('portfolios',
			array(
				'labels'      => array(
					'name'          => __( 'Portfolios', 'textdomain' ),
					'singular_name' => __( 'Portfolio', 'textdomain' ),
					'view_item' => __( 'View Portfolio', 'portfolios' ),
					'view_items' =>__( 'View Portfolios', 'portfolios' ),
					'edit_item' =>  __( 'Edit Portfolio', 'portfolios' ),
					'all_items' => __( 'All Portfolios', 'portfolios' ),
					'add_new_item' => __( 'Add New Portfolio', 'portfolios' ),
				),
				'public'      => true,
				'has_archive' => true,
				'rewrite'     => array( 'slug' => 'portfolios' ),
				'show_in_rest' => true,
				'supports' => array('title', 'thumbnail'),
			)
		);

		register_post_type('case_studies',
			array(
				'labels'      => array(
					'name'          => __( 'Case Studies', 'textdomain' ),
					'singular_name' => __( 'Case Study', 'textdomain' ),
					'view_item' => __( 'View Case Study', 'portfolios' ),
					'view_items' =>__( 'View Case Studies', 'case_studies' ),
					'edit_item' =>  __( 'Edit Case Study', 'case_studies' ),
					'all_items' => __( 'All Case Studies', 'case_studies' ),
					'add_new_item' => __( 'Add New Case Study', 'case_studies' ),
				),
				'public'      => true,
				'has_archive' => true,
				'rewrite'     => array( 'slug' => 'case-studies' ),
				'show_in_rest' => true,
				'supports' => array('title', 'thumbnail'),
			)
		);
	}
}
