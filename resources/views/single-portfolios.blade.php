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
                    <h1 class="services-header-title">{{$title}}</h1>
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
                        <p>Marketing with video using Remote Video Capture allows your firm to provide the video quality
                            content your clients expect.
                        </p>
                        <p>One of the best things that marketers at accounting firms like about video marketing content is that an investment in professional video production can be used for many years and can be integrated into many other digital marketing tactics – like thought leadership, client alerts email, blogs, bio pages, social media and in press releases.
                        <p>Thus an investment into video marketing for accountants has a high return on Investment.
                            Some of the tangible benefits that you should see from a professional video production project include: </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section-alt-2">
        <div class="container">
            <div class="row center">
                <div class="banner-list-wide">
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
    </section>


    <section class="sizzle-reel-wide">
        <div class="container">
            <div class="row center">
                <div class="header-two blue">
                    <h2>
                        Ask us why these are some of our favorite accounting videos.
                    </h2>
                </div>
            </div>
            <div class="row block">
                <div class="grid grid-cols-3 gap-2">
                    @php

                        // Check value exists.
if( have_rows('sizzle_reel') ):

                    @endphp
                    @php
                        // Loop through rows.
                        while ( have_rows('sizzle_reel') ) : the_row();


                            // Case: Paragraph layout.
                            if( get_row_layout() == 'video' ):
                                $video = get_sub_field('video');
                                $video_url = get_sub_field('video', false, false) ?? 'hey';
                                $video_title = get_sub_field('video_title') ?? null;
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
                            @if($video_title)
                                <div class="s-vid-title">
                                    <h4>@php echo $video_title; @endphp</h4>
                                </div>
                            @endif
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

    <section class="section-alt-2 extra-bottom">
        <div class="container">
            <div class="row">
                <div class="two-col extra-gap-right">
                    <div class="header-two blue no-margin">
                        <h2>Let's talk about a business video production project for your
                            accounting firm.</h2>
                        <p>Business video production for accounting firms is the perfect compliment to your traditional process of winning new business. Video content of your partners allows prospective clients to get a real feel for them, their expertise and their skill sets.</p>
                    </div>
                </div>
                <div class="two-col">
                    <div class="video-container video-iframe">
                        <iframe width="auto" src="https://www.youtube.com/embed/h8g9eM9Dwxw"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-form-section">
        <div class="row wide-form-wrapper">
            <div class="peak">
                <div class="lead-in left alt">
                    <div class="peak-card">
                        <div class="peak-card-top" style="background: url(@asset('images/video-production-lights-center.jpg'));
                    background-position: center center;">
                            <div class="peak-card-bg"></div>
                            <div class="peak-card-title">
                                <span>12</span>
                                <h3>Tips for Making Your Videos Look More Professional</h3>
                            </div>
                        </div>

                        <div class="peak-card-logo"><img
                                    src="@asset('images/multivision-digital-video-production-logo-trans.png')"
                                    alt="Multivision Digitial Logo"/></div>
                    </div>
                </div>
                <div class="lead-in-right">
                    <div class="wide-form">
                        <h2 class="preheader">Download Free PDF</h2>
                        <h3 class="follow-up smaller">Nothing comes close to the effectiveness of a well designed video
                            communications
                            project.</h3>
                        <p>Improve your search engine rankings by driving and keeeping traffic on your site and
                            generate quality leads with professional video</p>
                        <form>
                            <div class="form-row">
                                <label class="two-col even-space" id="wide-form-first-name-label">
                                    <input id="peak-email" type="email" value="" placeholder="Enter Email Address"
                                           required/>
                                </label>
                                <button class="call-to-action" id="wide-form-submit">Download</button>
                            </div
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

