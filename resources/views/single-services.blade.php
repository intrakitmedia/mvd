{{--
  Template Name: Services
--}}


@extends('layouts.app')


@section('content')

    <section class="services-banner section-alt">
        <div class="container">
            <div class="row">
                <div class="two-col">
                    <div class="services-header">
                        <span class="header-tag">Services</span>
                        <h1 class="services-header-title">{{$title}}</h1>
                    </div>
                    <div class="services-video-wrapper">
                        <div class="services-video video-container video-iframe">
                            @php
                                $field = get_field('featured_video');

                                echo $field;
                            @endphp
                        </div>
                    </div>
                </div>
                <div class="two-col">
                    <div class="services-content-lead">
                        <p>Marketing with video using Remote Video Capture allows your firm to provide the video quality
                            content your clients expect.
                        </p>
                        <p>Video recording remotely has never been easier with Remote Video Capture, a remote video
                            production solution for marketing with video. <p>It reduces the cost, time and effort of
                            creating quality video content by eliminating the on-location equipment, crew and set up of
                            traditional corporate video production.</p>
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
                        <div class="header-two">
                            <h2>Capture up to 4k video with the help of a professional director without the on-location
                                cost.</h2>
                        </div>

                        <p>Letting you record up to 4k video anywhere / anytime with either a smartphone, tablet or from
                            your
                            computer. After downloading an App to your smartphone, you will start a unique session and
                            get guidance from the director. You can even roll a teleprompter on screen if you need.

                        <p>While the director guides you to look and sound your best on camera, they can control a
                            number of features on the camera.

                        <p>For marketing teams that need to service teams across different locations, our remote video
                            production solution lets multiple users can join the session to further collaborate in real
                            time.

                        <p>When your remote video recording session is finished, we will upload the footage to the cloud
                            and the start the professional editing – including lower thirds, text, motion graphics,
                            background music, voice over and other professional editing techniques.
                    </div>
                </div>
                <div class="small-col">
                    <div class="quick-quote">
                        <div class="quick-quote-wrapper">
                            <div class="quick-quote-inner">
                                <div class="quick-quote-title">
                                    <h4 class="header-tag">Quick Quote</h4>
                                    <p>Ask about our special low-investment remote video production services</p>
                                </div>
                                <form>
                                    <div class="form-row">
                                        <label id="quick-name"><p>Name <span class="required">*</span></p>
                                            <input type="text" placeholder="Jane Doe" value="" id="quick-quote-name">
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <label id="quick-name"><p>Phone <span class="required">*</span></p>
                                            <input type="text" placeholder="Jane Doe" value="" id="quick-quote-name">
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <label id="quick-name"><p>Email <span class="required">*</span></p>
                                            <input type="text" placeholder="Jane Doe" value="" id="quick-quote-name">
                                        </label>
                                    </div>
                                    <div class="form-row last">
                                        <label id="quick-name"><p>Company <span class="required">*</span></p>
                                            <input type="text" placeholder="Jane Doe" value="" id="quick-quote-name">
                                        </label>
                                    </div>
                                    <div class="form-row">
                                        <button class="quick-quote-button">REQUEST A QUOTE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="different remote-bg" style="background: url(@asset('images/remote-bg.jpg')); background-size: cover;">
        <div class="different-bg"></div>

        <div class="row">
            <div class="different-content">
                <div class="different-text">
                    <p>Video recording remotely has never been easier because <span class="orange">Remote Video
                            Capture</span>
                        maintains the professional service of a director and a professional editor so you look and sound your best.</div>
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

    </section>

    <section class="services-sizzle section-alt">
        <div class="container">
            <div class="row">
                <div class="large-col">
                    <div class="services-reel-content">
                        <div class="header-two blue">
                            <h2>Sizzle Reels Made for Our Partners</h2>
                        </div>

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


                        <div class="video-modal">
                            <div class="bg-shadow-video">

                            <div class="video-modal-inner">
                                <div class="ex-out-wrapper">
                                <div id="ex-out" class="ex-out"></div>
                                </div>
                                <div class="video-container video-iframe"></div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="small-col">
                    <div class="small-content other-services">
                        <div class="other-services-wrapper">
                            <div class="other-services-inner">
                                <div class="other-service">
                                    <div class="other-service-image">
                                        <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client"/>
                                    </div>
                                    <div class="other-service-title">
                                        <a href="#">Video Strategy</a>
                                    </div>
                                </div>
                                <div class="other-service">
                                    <div class="other-service-image">
                                        <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client"/>
                                    </div>
                                    <div class="other-service-title">
                                        <a href="#">Video Production Services</a>
                                    </div>
                                </div>
                                <div class="other-service">
                                    <div class="other-service-image">
                                        <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client"/>
                                    </div>
                                    <div class="other-service-title">
                                        <a href="#">Video Marketing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
