@php

    $args = [
        "post_type" => "portfolios",
        "post_status" => "publish",
        "posts_per_page" => -1
    ];

    $query = new \WP_Query($args);
    $posts = $query->posts;

@endphp

@extends('layouts.app')


@section('content')

    <section class="parent the-page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title  blog-page-header text-center">
                    <h1>Portfolio</h1>
                    <h2>Over 1000+ business videos produced for our clients</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="serie-section page-header">
        <div class="container">
            <div class="row center">
                <div class="portfolio-archive grid sm:grid-cols-1 md:grid-cols-3 gap-6">

                    @include('components.play-circle')

                    @if($query->found_posts)
                        @foreach($posts as $post)
                            @php
                                $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                                $post_link = get_permalink($post->ID);

                            $banner_bold = get_field('banner_bold_content', $post->ID);

                            $video = get_field('featured_video_object', $post->ID);
                                        if($video) {
                                            $youtube_id = get_field('youtube_id', $video->ID);
                                            $youtube_id = preg_replace('/\s+/', '', $youtube_id);
                                        }


                            @endphp
                            <div class="text-center">

                                <div class="port-feat" style="height: 212px; position: relative; margin-bottom: 15px; background-image: url({{$image_url}}); background-size: cover;">
                                    <a style="position: absolute; top: 0; left: 0; display: block; width: 100%; height: 100%;" title="{!! $post->post_title !!}" href="{{$post_link}}"></a>
                                </div>
                                <div class="service-title">
                                    <h3 class="blue">
                                        <a title="{!! $post->post_title !!}" href="{{$post_link}}">{!! $post->post_title  !!}</a> </h3>
                                    <p>{!! $banner_bold !!}</p>
                                    <a title="{!! $post->post_title !!}" href="{{$post_link}}"
                                       class="orange-underline">See Examples</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                @include('components.modal')
            </div>
        </div>
    </section>


@endsection
