@extends('layouts.app')

@php

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = [
    'post_type' => 'case_studies',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby'=>'date',
    'paged' => $paged

    ];

    $case_study_query = new WP_Query($args);



@endphp

@section('content')
    <section class="small page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title text-center">
                    <h1>
                        Case Studies
                    </h1>
                    <h2>Get in-depth information from our Video Marketing Case Studies</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-banner small">
        <div class="container">
            @if($case_study_query->found_posts)
                @php
                    $posts = $case_study_query->posts;
                @endphp

                @foreach($posts as $post)

                    @php
                        $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                        $post_link = get_permalink($post->ID);
                        $categories = get_the_terms($post->ID, 'category');
                        $content = get_the_content('', false, $post->ID);
                    @endphp
            <div class="row blog-card post-card case-card">
                <div class="two-col">
                    <div class="blog-card-image-wapper">
                        @if($image_url)
                        <div data-check="featured-image" class="blog-featured-image"
                             style="background: url({{$image_url}}); background-size:cover;"><a class="link-fill"
                                                                                                title="{{$post->post_title}}" href="{{$post_link}}"></a>
                        </div>
                            @else
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/default-image.jpg')); background-size:cover;
"><a class="link-fill" title="{{$post->post_title}}" href="{{$post_link}}"></a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="two-col">
                    <div class="blog-content-card top-news">
                        <div class="blog-roll-header blog-card-row">

                            @if($post_link && $post->post_title)
                            <div class="blog-roll-title">
                                <h3><a title="{{$post->post_title}}" href="{{$post_link}}">{{$post->post_title}}</a></h3>
                            </div>
                                @endif
                        </div>
                        <div class="blog-roll-body blog-card-row">
                            <p><?php echo wp_trim_words( $content, 40, " ..."); ?></p>
                        </div>
                        @if($post_link && $post->post_title)
                        <div class="blog-roll-author blog-card-row">
                            <a  title="{{$post->post_title}}" class="orange-link" href="{{$post_link}}">Read More</a>
                        </div>
                            @endif

                    </div>

                </div>
            </div>
            @endforeach
            @endif
        </div>
    </section>
    <section class="pagination extra-bottom">
        <div class="container">
            <div class="row flex-end">
                <div class="post-pagination">
                    @php(the_posts_pagination())
                </div>
            </div>
        </div>
    </section>

    @include('components.lead-gen')
@endsection
