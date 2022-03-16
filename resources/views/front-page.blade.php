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
                        <h1 class="services-header-title">Remote Video Production</h1>
                    </div>
                    <div class="services-video-wrapper">
                        <div class="services-video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/9GJrrM_JH9k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="two-col">
                    <div class="services-content-lead">
                        <p>Marketing with video using Remote Video Capture allows your firm to provide the video quality
                            content your clients excpect.
                        </p>
                        <p>Video recording remotely has never been easier with Remote Video Capture, a remote video production solution for marketing with video. It reduces the cost, time and effort of creating quality video content by eliminating the on-location equipment, crew and set up of traditional corporate video production.</p>

                        <div class="services-images">
                            <img src="@asset('images/remote-video-capture-panel.jpg')" alt="Remote Video Capture Panel" />
                            <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                            <img src="@asset('images/remote-video-capture-client-three.jpg')" alt="Remote Video Capture
                            Client" />

                        </div>
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
                            <h2>Capture up to 4k video with the help of a professional director without the on-location cost.</h2>
                        </div>
                        <p>Letting you record up to 4k video anywhere / anytime with either a smartphone, tablet or from your
                            computer. After downloading an App to your smartphone, you will start a unique session and get guidance from the director. You can even roll a teleprompter on screen if you need.

                        <p>While the director guides you to look and sound your best on camera, they can control a number of features on the camera.

                        <p>For marketing teams that need to service teams across different locations, our remote video production solution lets multiple users can join the session to further collaborate in real time.

                        <p>When your remote video recording session is finished, we will upload the footage to the cloud and the start the professional editing – including lower thirds, text, motion graphics, background music, voice over and other professional editing techniques.
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

    <section class="services-sizzle section-alt">
        <div class="container">
            <div class="row">
                <div class="large-col">
                    <div class="services-reel-content">
                        <div class="header-two blue">
                        <h2>Sizzle Reels Made for Our Partners</h2>
                    </div>

                        <div class="services-sizzle-reel grid grid-cols-3 gap-2">

                            <div class="s-vid">
                                <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                                <div class="s-vid-title">
                                    <h4>Law Firm Marketing Video</h4>
                                </div>
                            </div>
                            <div class="s-vid">
                                <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                                <div class="s-vid-title">
                                    <h4>Law Firm Marketing Video</h4>
                                </div>
                            </div>
                            <div class="s-vid">
                                <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                                <div class="s-vid-title">
                                    <h4>Law Firm Marketing Video</h4>
                                </div>
                            </div>
                            <div class="s-vid">
                                <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                                <div class="s-vid-title">
                                    <h4>Law Firm Marketing Video</h4>
                                </div>
                            </div>
                            <div class="s-vid">
                                <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                                <div class="s-vid-title">
                                    <h4>Law Firm Marketing Video</h4>
                                </div>
                            </div>
                            <div class="s-vid">
                                <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                                <div class="s-vid-title">
                                    <h4>Law Firm Marketing Video</h4>
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
                            Client" />
                                    </div>
                                    <div class="other-service-title">
                                        <a href="#">Video Strategy</a>
                                    </div>
                                </div>
                                <div class="other-service">
                                    <div class="other-service-image">
                                        <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
                                    </div>
                                    <div class="other-service-title">
                                        <a href="#">Video Production Services</a>
                                    </div>
                                </div><div class="other-service">
                                    <div class="other-service-image">
                                        <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client" />
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
