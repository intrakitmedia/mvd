{{--
  Template Name: Services
--}}


@extends('layouts.app')

<?php
$args = [
	'post_type'      => 'services',
	'status'         => 'publish',
	'posts_per_page' => -1
];

$query = new \WP_Query( $args );

?>



@section('content')

    <section class="services-banner section-alt">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <span class="header-tag">Services</span>
                    <h1 class="services-header-title">{!! $title !!}</h1>
                </div>
            </div>
            <div class="row">
                <div class="two-col">
                    <div class="services-video-wrapper">
                        <div class="services-video video-container video-iframe">
                            @php
                                $field = get_field('featured_video');
                            @endphp
                            @if($field)
                                {!! $field !!}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="two-col">
                    <div class="services-content-lead">
                        @php
                            $banner_bold_content = get_field('banner_bold_content');
                            $banner_regular_content = get_field('banner_regular_content');
                        @endphp
                        @if($banner_bold_content)
                            <p>{!! $banner_bold_content !!}

                            </p>
                        @endif
                        @if($banner_regular_content)
                            <p>{!! $banner_regular_content !!}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quick-quote-content quick-quote-up">
        <div class="container">
            <div class="row">
                <div class="large-col">
                    <div class="services-add-content">
                        @php
                            $main_bold_content = get_field('main_bold_content');
                            $main_regular_content = get_field('main_regular_content');
                        @endphp
                        @if($main_bold_content)
                            <div class="header-two">
                                <h2 id="main-content">{!! $main_bold_content !!}</h2>
                            </div>
                        @endif
                        @if($main_regular_content)
                            <div class="main-regular-content">
                                {!! $main_regular_content !!}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="small-col">
                   @include('components.quick-quote')
                </div>
            </div>
        </div>
    </section>

    @php
        $center_image = get_field('center_image') ?? null;

        if($center_image) :
        $center_image_url = $center_image['url'];
    @endphp

    <section class="middle-image">
        <div class="container">
            <div class="row center">
                <div class="middle-image text-center">
                    <img style="max-width: 800px; margin:0 auto;" src="{{ $center_image_url }}" alt=""/>
                </div>
            </div>
        </div>
    </section>

    @php

        endif;

    @endphp

    @php
        $checklist = get_field('checklist') ??  null;
    @endphp
    @if($checklist)

        <section class="section-alt-2">
            <div class="container">
                <div class="row center">
                    <div class="banner-list-wide">


                        {!! $checklist !!}


                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="different remote-bg"
             style="background: url(@asset('images/remote-bg.jpg')); background-size: cover;">
        <div class="container">
            <div class="different-bg"></div>

            <div class="row">
                @php
                    $alternate_content = get_field('alternate_content');
                @endphp

                @if($alternate_content)
                    <div class="different-content">
                        <div class="different-text">
                            {!! $alternate_content !!}
                        </div>

                    </div>
                @endif
            </div>
            <div class="row center">
                <div class="different-content lead-out">
                    <div class="call-to-actions-group">
                        <div class="cta-button-wrapper js-watch">
                            @php
                                $contact_us = get_page_by_title('Contact Us') ? get_page_by_title('Contact Us')
                                         : get_page_by_title('Contact');
                                          $contact_us_link = get_permalink($contact_us->ID);
                                    if($contact_us_link) {
                                        $link = $contact_us_link;
                                    } else {
                                    $link =  '#';
                                    }
                            @endphp
                            <a title="Contact Us" class="call-to-action" href="{{$link}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="services-sizzle section-alt">
        <div class="container">
            <div class="row">
                <div class="vid">
                    <div class="services-reel-content">
                        <div class="header-two blue">
                            <h2 class="text-center">Video Production Examples</h2>
                        </div>

                        @php

                            // Check value exists.
    if( have_rows('video_gallery') ):

                        @endphp
                        <div class="services-sizzle-reel grid sm:grid-cols-1 md:grid-cols-3 gap-6">
                            @php
                                // Loop through rows.
                                while ( have_rows('video_gallery') ) : the_row();
                                    // Case: Paragraph layout.
                                    if( get_row_layout() == 'videos' ):
                                        $video = get_sub_field('video');
                                        if($video) {
                                        $youtube_id = get_field('youtube_id', $video->ID);
                                        $youtube_id = preg_replace('/\s+/', '', $youtube_id);
                                        }

                                    endif;

                            @endphp

                            @if($video)
@include('components.s-vid')
    @endif

                            @php

                                // End loop.
                                endwhile;
                                                endif;

                            @endphp
                        </div>


                        @include('components.modal')
                    </div>
                </div>

            </div>
        </div>
    </section>

    @if(get_post()->post_content)

        <section class="the-content">
            <div class="container">
                <div class="small-row">
                    {{ the_content() }}
                </div>
            </div>
        </section>
    @endif

    @include('components.services')
    <section class="the-content section-alt-2 extra-bottom">
        <div class="container">
            <div class="small-row">
            </div>
        </div>
    </section>
    @include('components.lead-gen')



@endsection
