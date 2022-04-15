{{--
  Template Name: Portfolios
--}}


@extends('layouts.app')


@section('content')

    <section class="services-banner section-alt">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <span class="header-tag">Portfolio</span>
                    <h1 class="services-header-title">{!! $title !!}</h1>
                </div>
            </div>
            <div class="row">
                <div class="two-col">
                    <div class="services-video-wrapper">
                        <div class="services-video">
                            <img src="{{ $thumbnail_url }}" alt="{{$thumbnail_alt}}"/>
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

    <section class="services-sizzle section-alt">
        <div class="container">
            <div class="row center">
                <div class="header-two blue">
                    <h2>Video Production Examples</h2>
                </div>
            </div>
            <div class="row center">

                    <div class="services-reel-content grid sm:grid-cols-1 md:grid-cols-3 gap-6">


                        @php
                            if( have_rows('video_gallery') ):
                        @endphp
                            @php
                                while ( have_rows('video_gallery') ) : the_row();
                                    if( get_row_layout() == 'videos' ) {
                                        $video = get_sub_field('video');

                                        if($video) {
                                            $youtube_id = get_field('youtube_id', $video->ID);
                                            $youtube_id = preg_replace('/\s+/', '', $youtube_id);
                                        }
                            }
                        @endphp

                        @if($video)
                            <div data-field="{{$youtube_id}}" class="s-vid">
                                @include('components.s-vid')
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

    <section class="section-alt-2 extra-bottom">
        <div class="container">
            <div class="row">
                <div class="two-col extra-gap-right">


                        @php
                            $main_bold_content = get_field('main_bold_content');
                            $main_regular_content = get_field('main_regular_content');
                        @endphp
                        @if($main_bold_content)
                            <div class="header-two blue">
                                <h2 id="main-content">{!! $main_bold_content !!}</h2>
                            </div>
                        @endif
                    @if($main_regular_content)
                        <div class="main-regular-content">
                            {!! $main_regular_content !!}
                        </div>
                    @endif
                </div>
                <div class="two-col">
                    @php
                        $portfolio_video = get_field('video_content');
                    @endphp

                    @if($portfolio_video)
                    <div class="video-container video-iframe">
                        {!!  $portfolio_video !!}
                    </div>
                        @endif
                </div>
            </div>
        </div>
    </section>

    @include('components.lead-gen')

@endsection

