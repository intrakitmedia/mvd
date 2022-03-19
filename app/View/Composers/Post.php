<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
	    'single-services',
	    'single-portfolios',
	    'template-blog',
	    'archive-case-studies'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
	        'thumbnail_url' => $this->thumbnail_url(),
	        'thumbnail_alt' => $this->thumbnail_alt(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

	/**
	 * Returns the post thumbnail url.
	 *
	 * @return string
	 */
    public function thumbnail_url() {
	    return get_the_post_thumbnail_url();
    }

    public function thumbnail_alt() {
	    $thumbnail_id = get_post_thumbnail_id();
	    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	    return $alt;
    }
}
