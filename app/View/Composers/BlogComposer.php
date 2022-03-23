<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class BlogComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        //
	    'template-blog',
	    'archive',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'posts' => $this->posts(),
	        'pinned_post' => $this->pinned_post(),
        ];
    }

    public function posts() {
    	$args = [
    		'post_type' => 'post',
		    'status' => 'publish',
		    'posts_per_page' => 9
	    ];

    	if(is_archive()) {

		    $category = get_category( get_query_var( 'cat' ) );
		    $cat_id = $category->cat_ID;

    		$cat = [
				'category__in' => $cat_id,
		    ];

    		$args = array_merge($args, $cat);
	    }
    	

    	$query = new \WP_Query($args);


    	return $query;
    }

    public function pinned_post() {
    	$blog = get_page_by_title('Blog');

    	return get_field('pinned_post', $blog->ID);
    }
}
