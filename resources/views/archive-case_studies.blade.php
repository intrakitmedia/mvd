@extends('layouts.app')

@php

$args = [
'post_type' => 'case_studies',
'publish' => -1,
'posts_per_page' => 5,

];

$query = \WP_Query($args);

@endphp

@section('content')
    <section class="small page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title text-center">
                    <h1>Case Studies</h1>
                    <h2>Get in-depth information from our Video Marketing Case Studies</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-banner small">
        <div class="container">
            <div class="row blog-card post-card case-card">

                @if($query->found_posts)
                    @php
                    $posts = $query->posts;
                    @endphp

                @foreach($posts as $post)

                        @php
                            $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                            $post_link = get_permalink($post->ID);
                        @endphp

                <div class="two-col">
                    <div class="blog-card-image-wapper">
                        @if($image_url)
                        <div class="blog-featured-image"
                             style="background: url(@asset('images/case-study-1.jpg')); background-size:cover;">
                        </div>
                            @else
                        @endif
                    </div>
                </div>
                <div class="two-col">
                    <div class="blog-content-card top-news">
                        <div class="blog-roll-header blog-card-row">
                            <div class="blog-roll-cats blog-card-row">
                                <a class="cat">Animated Explainer Videos</a>
                                <a class="cat">Business Video Blog</a>
                                <a class="cat">Video Marketing</a>
                            </div>
                            <div class="blog-roll-title">
                                <h3><a href="">Animated Holiday Cards Increase Awareness & Engagement</a></h3>
                            </div>
                        </div>
                        <div class="blog-roll-body blog-card-row">
                            <p>Just like animated videos for business are highly effective to convert leads, animated holiday cards as they make a memorable impression on their customers and prospects.  So, if your goal…</p>
                        </div>
                        <div class="blog-roll-author blog-card-row">
                            <a class="orange-link" href="">Read More</a>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
