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
                    <div class="banner-list-wide"
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
                            @php
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

    @endif


@endsection
