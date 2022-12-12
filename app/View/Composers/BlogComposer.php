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

        $args = array ('exclude'=>1,'fields'=>'ids');

        $exclude_uncategorized = get_terms('category' , $args);

        $args = [
            'post_status' => 'publish',
            'posts_per_page' => 2,
            'category__not_in' => [108]
        ];

        $ex = [ 'category__in' => $exclude_uncategorized ];

        if ( is_page( 'Blog' ) ) {
            $post_type = 'post';
            $args = array_merge($args, $ex);
        } elseif ( get_field('use_as_tips_home_page') ) {
            $post_type = 'tips';
        } else {
            $post_type = get_post_type();
            $args = array_merge($args, $ex);
        }

        $args = array_merge($args, ['post_type'      => $post_type]);


        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;


        if ($paged != 1) {
            return;
        }

        $query = new \WP_Query( $args );


        return $query;

    }

    public function posts() {
        if (is_post_type_archive('case_studies')) {
            return;
        }

        $tips = false;


        $args = array ('exclude'=>1,'fields'=>'ids');
        $exclude_uncategorized = get_terms('category',$args);

        $args = [
            'post_status'         => 'publish',
            'posts_per_page' => 18,
            'category__not_in' => [108]
        ];

        $ex = [ 'category__in' => $exclude_uncategorized ];

        if ( is_page( 'Blog' ) ) {
            $post_type = 'post';
            $args = array_merge($args, $ex);
        } elseif ( get_field('use_as_tips_home_page') ) {
            $post_type = 'tips';
            $tips = true;
        } else {
            $post_type = get_post_type();
            $args = array_merge($args, $ex);
        }

        $args = array_merge($args, ['post_type'      => $post_type]);

        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $args = array_merge($args, ['paged' => $paged]);

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
                'category__not_in' => [108]
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
