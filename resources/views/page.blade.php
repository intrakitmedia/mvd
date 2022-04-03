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
            <div class="small-row">
                {{--<span class="header-tag">{!! $page_tag !!}</span>--}}
                <div class="services-header text-center">
                    <h1 class="services-header-title">{!! $title !!}</h1>

                       @php
                           $main_bold_content = get_field('main_bold_content');
                           $excerpt = ($main_bold_content) ? $main_bold_content : $excerpt;
                       @endphp
                    @if($excerpt)
                        <div class="page-excerpt">
                            <p>{!! $excerpt !!}</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

    <section  class="the-content">
        <div class="container">
            <div class="small-row">
                {!! the_content() !!}
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


                        {{--<ul class="smaller checklist-board" style="display: grid; gap: 15px; grid-template-columns: repeat(3,minmax(0,1fr));">--}}
                        {{--<li>Embracing diversity and inclusion </li>--}}
                        {{--<li>Building a more equitable workplace</li>--}}
                        {{--<li>Focus on your diversity groups</li>--}}
                        {{--<li>How you support hiring to feed diversity</li>--}}
                        {{--<li>Overcoming bias</li>--}}
                        {{--<li>Steps to stop harassment and bullying </li>--}}
                        {{--<li>Creating an organization built on meritocracy </li>--}}
                        {{--<li>How you foster a more equitable workplace</li>--}}
                        {{--<li>Motion graphics video</li>--}}
                        {{--</ul>--}}

                        {!! $checklist !!}


                    </div>
                </div>
            </div>
        </section>
    @endif

    @php
        $alternate_content = get_field('alternate_content');
    @endphp

    @if($alternate_content)

    <section class="different remote-bg"
             style="background: url(@asset('images/remote-bg.jpg')); background-size: cover;">
        <div class="container">
            <div class="different-bg"></div>

            <div class="row">

                    <div class="different-content">
                        <div class="different-text">
                            {!! $alternate_content !!}
                        </div>
                    </div>

            </div>
            <div class="row center">
                <div class="different-content lead-out">
                    <div class="call-to-actions-group">
                        <div class="cta-button-wrapper js-watch">
                            <a class="call-to-action" href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif

    @php

        // Check value exists.
if( have_rows('video_gallery') ):

    @endphp
    <div class="services-sizzle-reel grid sm:grid-cols-1 md:grid-cols-2 gap-2">




    <section class="services-sizzle section-alt">
        <div class="container">
            <div class="row">
                <div class="large-col">
                    <div class="services-reel-content">
                        <div class="header-two blue">
                            <h2>Video Production Examples</h2>
                        </div>

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


                                <div data-field="{{$youtube_id}}" class="s-vid">
                                    <div class="s-vid-inner">
                                        <div class="video-container video-thumbnail"
                                             style="background-image: url('<?php echo "https://img.youtube.com/vi/$youtube_id/maxresdefault.jpg"; ?>');
                                                     background-size: 103%;
                                                     background-position: -2px;">

                                        </div>
                                        <div class="s-vid-title">
                                            <h4>{{$video->post_title}}</h4>
                                        </div>

                                    </div>
                                    @endif
                                </div>
                        @php

                            // End loop.
                            endwhile;
                                            endif;

                        @endphp
                        </div>


                        <div class="video-modal">
                            <div class="bg-shadow-video">

                                <div class="video-modal-inner video-container video-iframe">
                                    <div class="ex-out-wrapper">
                                        <div id="ex-out" class="ex-out"></div>
                                    </div>
                                    <div id="youtube_video_source">
                                        <div class="video-container video-iframe"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            );--}}
                {{--background-size: cover;">--}}
                {{--<img src="@php echo $url; @endphp" alt="Remote Video Capture--}}
                {{--</div>--}}
                {{--Client"/>--}}
                {{--<div class="s-vid-title">--}}
                {{--<h4>@php echo $video_title; @endphp</h4>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--@php--}}

                {{--// End loop.--}}
                {{--endwhile;--}}
                {{--endif;--}}

                {{--@endphp--}}
                {{--</div>--}}


                {{--<div class="video-modal">--}}
                {{--<div class="bg-shadow-video">--}}

                {{--<div class="video-modal-inner">--}}
                {{--<div class="ex-out-wrapper">--}}
                {{--<div id="ex-out" class="ex-out"></div>--}}
                {{--</div>--}}
                {{--<div class="video-container video-iframe"></div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}


                <div class="small-col">

                    @if($query->found_posts)

                        <div class="small-content other-services">
                            <div class="other-services-wrapper">
                                <div class="other-services-inner">
                                    <h3 class="header-tag center">Other Services</h3>

                                    @php
                                        $posts = $query->posts;
                                    @endphp
                                    @foreach($posts as $post)

                                        @php

                                        $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                                        $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                                        $post_link = get_permalink($post->ID);
                                        @endphp

                                        <div class="other-service">
                                            <div class="other-service-image">
                                                @if($image_url)
                                                    <img src="{{$image_url}}" alt="{{$post->post_title}}"/>
                                                @else
                                                    <img src="@asset('images/default-image.jpg')" alt="{{$post->post_title}}"/>
                                                @endif
                                            </div>
                                            <div class="other-service-title">
                                                <a title="{{$post->post_title}}" href="{{$post_link}}">{{$post->post_title}}</a>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>



@endsection
