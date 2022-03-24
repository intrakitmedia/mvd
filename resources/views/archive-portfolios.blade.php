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

    <section class="parent section-alt">
        <div class="container">
            <div class="row center">
                <div class="page-header-title blog-page-header text-center">
                    <h1>Portfolio</h1>
                    <h2>Over 900+ business videos produced for our clients</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="serie-section page-header">
        <div class="container">
            <div class="row center">
                <div class="services">
                    @if($query->found_posts)
                        @foreach($posts as $post)
                            @php
                                $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                                $post_link = get_permalink($post->ID);

                            $banner_bold = get_field('banner_bold_content', $post->ID);
                            @endphp
                            <div class="service">
                                <div class="service-title">
                                    <h2 class="blue"><a title="{!! $post->post_title !!}"
                                                        href="{{$post_link}}">{!! $post->post_title
                                 !!}</a></h2>
                                    <p>{!! $banner_bold !!}</p>

                                    <a title="{!! $post->post_title !!}" href="{{$post_link}}"
                                       class="orange-underline">See Examples</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>


@endsection
