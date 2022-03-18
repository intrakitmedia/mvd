{{--
  Template Name: Portfolios
--}}


@extends('layouts.app')


@section('content')

    <section class="services-banner section-alt">
        <div class="container">
            <div class="row">
                <div class="two-col">
                    <div class="services-header">
                        <span class="header-tag">Portfolio</span>
                        <h1 class="services-header-title">{{$title}}</h1>
                    </div>
                    <div class="services-video-wrapper">
                        <div class="services-video">
                            <img src="{{ $thumbnail_url }}" alt="{{$thumbnail_alt}}"/>
                        </div>
                    </div>
                </div>
                <div class="two-col">
                    <div class="services-content-lead">
                        <p>Marketing with video using Remote Video Capture allows your firm to provide the video quality
                            content your clients expect.
                        </p>
                        <p>One of the best things that marketers at accounting firms like about video marketing content is that an investment in professional video production can be used for many years and can be integrated into many other digital marketing tactics – like thought leadership, client alerts email, blogs, bio pages, social media and in press releases.
                            <p>Thus an investment into video marketing for accountants has a high return on Investment.
                            Some of the tangible benefits that you should see from a professional video production project include: </p>
                    </div>
                    <div class="banner-list">
                        <ul class="smaller checklist-board grid grid-cols-2 gap-2">
                            <li>Lead conversion from referrals</li>
                            <li>More time spent on your website</li>
                            <li>Showcase partners’ expertise</li>
                            <li>Build personal connections faster</li>
                            <li>Higher ranking on search engines</li>
                            <li>Stronger thought leadership</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sizzle-reel-wide">
        <div class="container">
            <div class="row">
                <div class="grid grid-cols-3 gap-2">
                    @php

                        // Check value exists.
if( have_rows('sizzle_reel') ):

                    @endphp
                    <div class="services-sizzle-reel grid grid-cols-2 gap-2">
                        @php
                            // Loop through rows.
                            while ( have_rows('sizzle_reel') ) : the_row();


                                // Case: Paragraph layout.
                                if( get_row_layout() == 'video' ):
                                    $video = get_sub_field('video');
                                    $video_url = get_sub_field('video', false, false) ?? 'hey';
                                    $video_title = get_sub_field('video_title') ?? 'hi';
                                    $image = get_sub_field('video_cover_image');
                                    $url = $image['url'];
                                endif;

                        @endphp


                        <div class="s-vid"
                             data-field="@php echo
                            $video_url;
                             @endphp">
                            <div class="s-vid-inner">
                                <div class="video-container video-thumbnail" style="background-image: url('@php echo $url; @endphp');
                                        background-size: cover;">
                                    {{--<img src="@php echo $url; @endphp" alt="Remote Video Capture--}}
                                </div>
                                {{--Client"/>--}}
                                <div class="s-vid-title">
                                    <h4>@php echo $video_title; @endphp</h4>
                                </div>
                            </div>
                        </div>

                        @php

                            // End loop.
                            endwhile;
                                            endif;

                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

