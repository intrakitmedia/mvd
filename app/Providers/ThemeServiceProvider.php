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
					'edit_item' =>  __( 'Edit Service', 'services' ),
				),
				'public'      => true,
				'has_archive' => true,
				'rewrite'     => array( 'slug' => 'services' ),
				'show_in_rest' => true,
				'supports' => array('title', 'thumbnail'),
			)
		);
	}
}
