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

<div class="d-none">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="plyr-play" viewbox="0 0 18 18"><path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1
.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z" /></symbol><symbol id="plyr-restart" viewbox="0 0 18 18"><path d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z" /></symbol><symbol id="plyr-rewind" viewbox="0 0 18 18"><path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z" /></symbol><symbol id="plyr-settings" viewbox="0 0 18 18"><path d="M16.135 7.784a2 2 0 01-1.23-2.969c.322-.536.225-.998-.094-1.316l-.31-.31c-.318-.318-.78-.415-1.316-.094a2 2 0 01-2.969-1.23C10.065 1.258 9.669 1 9.219 1h-.438c-.45 0-.845.258-.997.865a2 2 0 01-2.969 1.23c-.536-.322-.999-.225-1.317.093l-.31.31c-.318.318-.415.781-.093 1.317a2 2 0 01-1.23 2.969C1.26 7.935 1 8.33 1 8.781v.438c0 .45.258.845.865.997a2 2 0 011.23 2.969c-.322.536-.225.998.094 1.316l.31.31c.319.319.782.415 1.316.094a2 2 0 012.969 1.23c.151.607.547.865.997.865h.438c.45 0 .845-.258.997-.865a2 2 0 012.969-1.23c.535.321.997.225 1.316-.094l.31-.31c.318-.318.415-.781.094-1.316a2 2 0 011.23-2.969c.607-.151.865-.547.865-.997v-.438c0-.451-.26-.846-.865-.997zM9 12a3 3 0 110-6 3 3 0 010 6z" /></symbol><symbol id="plyr-volume" viewbox="0 0 18 18"><path d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z" /><path d="M11.282 5.282a.909.909 0 000 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 000 1.316c.145.145.636.262 1.018.156a.725.725 0 00.298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 00-1.316 0zm-7.496.726H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z" /></symbol></svg>
</div>

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
<div data-field="{{$youtube_id}}" class="s-vid">
    <div class="s-vid-inner">
        <div class="video-container video-thumbnail"
        style="background-image: url('<?php echo "https://img.youtube.com/vi/$youtube_id/maxresdefault.jpg"; ?>');
                background-size: 103%;
                background-position: -2px;">
            <div class="player-button">
                <svg aria-hidden="true" focusable="false">
                    <use xlink:href="#plyr-play"></use>
                </svg>
            </div>

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
