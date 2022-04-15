@extends('layouts.app')


@section('content')
    <div class="hero">
        <div class="hero-inner" style="background: url(@asset('images/video-content-marketing.78582c.webp'));
        background-size: cover;
        background-position:
         center right">
            <div class="row">
                <div class="hero-container">
                    <div class="hero-body">
                        <div class="hero-text sm:w-full md:w-3/4 lg:w-1/2">
                            <h1 class="home-lead">Turn-Key Video Strategy, Production, and Marketing Services​</h1>
                            <p class="home-explainer">We help our clients with strategic guidance, cost-effective video
                                production, & video marketing services to reach their lead & sales goals.</p>
                            <div class="hero-cta">
                                <div class="cta-inner">

                                    @php
                                     $portfolio = get_post_type_archive_link('portfolios');
                                     $contact_us = get_page_by_title('Contact Us') ? get_page_by_title('Contact Us')
                                     : get_page_by_title('Contact');
                                    @endphp

                                    <div class="cta-button-wrapper js-watch">
                                        @if($contact_us)
                                            @php
                                                $contact_us_link = get_permalink($contact_us->ID);
$link = $contact_us_link;
                                             @endphp
                                        @else
                                            @php
                                                $link = "#";
                                            @endphp
                                        @endif

                                        <a class="call-to-action" title="Contact Us" href="{{$link}}">Contact Us</a>
                                    </div>
                                    <div class="cta-button-wrapper js-watch">
                                        @if($portfolio)
                                            @php
                                                $link = $portfolio;
                                            @endphp
                                        @else
                                            @php
                                                $link = "#";
                                            @endphp
                                        @endif
                                        <a class="call-to-action btn-alt" title="View Portfolio" href="{{$link}}">View
                                            Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="hero-link"><p><a data-field="9RFWNmu8H3E" class="s-vid-link">Click here to see our 10 year anniversay
                                highlight reel!</a></p></div>
                    @include('components.modal')
                </div>
            </div>
        </div>
    </div>

        <section class="">
            <div class="copy-inner">
                <div class="container">
                    <div class="row center">
                        <div class="lead-in">
                            <h3>A Solution for Every Stage of Video Adoption</h3>
                            <h4 class="header-alt">Perfectly made to every company size, industry, status, and
                                professional role</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four-col">
                            @php
                            $GettingStarted = get_page_by_title('Getting Started');
                            $DoublingDown = get_page_by_title('Doubling Down');
                            $NeedAStrategy = get_page_by_title('Need A Strategy');
                            $ForAgencies = get_page_by_title('For Agencies');
                            @endphp


                            <div class="short-copy">
                                <img src="@asset('images/getting-started.jpg')" alt="Getting Started"/>
                                <p>You're just getting started with video marketing; in any size of company or
                                    industry.</p>
                                <div class="call-to-action-group">
                                    @php
                                        if($GettingStarted) {
                                            $link =  get_permalink($GettingStarted->ID);
                                        } else {
                                            $link = "#";
                                        }
                                    @endphp
                                    <a class="orange-underline" title="Getting Started" href="{{$link}}">LEARN
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <img src="@asset('images/doubling-down.jpg')" alt="Doubling Down"/>
                                <p>You've done some video before, but now you need to focus more on it with an eye
                                    towards ROI.</p>
                                <div class="call-to-action-group">
                                    @php
                                        if($DoublingDown) {
                                            $link =  get_permalink($DoublingDown->ID);
                                        } else {
                                            $link = "#";
                                        }
                                    @endphp
                                    <a class="orange-underline" title="Doubling Down" href="{{$link}}">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <img src="@asset('images/need-strategy.jpg')" alt="Need a Strategy"/>
                                <p>You have many videos, but no strategy. You need a planned, thoughtful, and integrated
                                    approach.</p>
                                <div class="call-to-action-group">
                                    @php
                                        $page = get_page_by_title('Video Strategy', 'object', 'services');
                                    @endphp

                                    @if($page)
                                        @php
                                            $link = get_permalink($page->ID);
                                        @endphp
                                    @else
                                        @php
                                            $link = "#";
                                        @endphp
                                    @endif
                                    <a class="orange-underline" title="Need a Strategy" href="{{$link}}">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="four-col">
                            <div class="short-copy">
                                <img src="@asset('images/for-agencies.jpg')" alt="For Agencies"/>
                                <p>For agencies, PR firms, SEO and web developers looking for a trusted, value based
                                    company to rely on.</p>
                                @php
                                    if($ForAgencies) {
                                        $link =  get_permalink($ForAgencies->ID);
                                    } else {
                                        $link = "#";
                                    }
                                @endphp
                                <div class="call-to-action-group">
                                    <a class="orange-underline" title="For Angencies" href="{{$link}}">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="callout callout-center section-alt">
            <div class="callout-inner">
                <div class="container">
                    <div class="row center">
                        <div class="lead-in">
                            <h3>Remote Video Production Services</h3>
                            <h4 class="header-alt">Contact us today to learn about the most cost effective remote video
                                production solution for all your content marketing objectives like:</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="callout-body remote-video">
                            <div class="callout-text remote-video-left">
                                <ul class="checkmark ul-col-2">
                                    <li>
                                        Thought leadership
                                    </li>
                                    <li>
                                        Blog / content marketing
                                    </li>
                                    <li>
                                        eMail marketing
                                    </li>
                                    <li>Social media
                                    </li>
                                    <li>
                                        Client Testimonials
                                    </li>
                                    <li>
                                        Executive bios
                                    </li>
                                    <li>
                                        Product launch videos
                                    </li>
                                    <li>
                                        Internal communications
                                    </li>
                                </ul>
                            </div>
                            <div class="callout-video remote-video-right">
                                <div class="d-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="plyr-play" viewbox="0 0 18 18"><path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1
.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z" /></symbol><symbol id="plyr-restart" viewbox="0 0 18 18"><path d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z" /></symbol><symbol id="plyr-rewind" viewbox="0 0 18 18"><path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z" /></symbol><symbol id="plyr-settings" viewbox="0 0 18 18"><path d="M16.135 7.784a2 2 0 01-1.23-2.969c.322-.536.225-.998-.094-1.316l-.31-.31c-.318-.318-.78-.415-1.316-.094a2 2 0 01-2.969-1.23C10.065 1.258 9.669 1 9.219 1h-.438c-.45 0-.845.258-.997.865a2 2 0 01-2.969 1.23c-.536-.322-.999-.225-1.317.093l-.31.31c-.318.318-.415.781-.093 1.317a2 2 0 01-1.23 2.969C1.26 7.935 1 8.33 1 8.781v.438c0 .45.258.845.865.997a2 2 0 011.23 2.969c-.322.536-.225.998.094 1.316l.31.31c.319.319.782.415 1.316.094a2 2 0 012.969 1.23c.151.607.547.865.997.865h.438c.45 0 .845-.258.997-.865a2 2 0 012.969-1.23c.535.321.997.225 1.316-.094l.31-.31c.318-.318.415-.781.094-1.316a2 2 0 011.23-2.969c.607-.151.865-.547.865-.997v-.438c0-.451-.26-.846-.865-.997zM9 12a3 3 0 110-6 3 3 0 010 6z" /></symbol><symbol id="plyr-volume" viewbox="0 0 18 18"><path d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z" /><path d="M11.282 5.282a.909.909 0 000 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 000 1.316c.145.145.636.262 1.018.156a.725.725 0 00.298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 00-1.316 0zm-7.496.726H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z" /></symbol></svg>
                                </div>
                                <div data-field="9GJrrM_JH9k" class="s-vid">
                                    <div class="s-vid-inner">
                                        <div class="video-img-container video-container video-thumbnail"
                                             style="background-image: url('<?php echo "https://img.youtube.com/vi/9GJrrM_JH9k/maxresdefault.jpg"; ?>');
                                                     background-size: 103%;
                                                     background-position: -2px;">
                                            <div class="abso-bg"></div>
                                            <div class="player-button-container">
                                                <div class="player-button">
                                                    <svg aria-hidden="true" focusable="false">
                                                        <use xlink:href="#plyr-play"></use>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="lead-out">
                            <div class="call-to-actions-group">
                                <div class="cta-button-wrapper js-watch">

                                    <a class="call-to-action" title="Remote Video Production" href="/services/remote-video-production/">Learn
                                        More About
                                        Remore Video
                                        Capture</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="steps">
            <div class="container">
            <div class="row center">
                <div class="lead-in">
                    <h3>4 Steps Process</h3>
                    <h4 class="header-alt">Help Turn Your Visitors into Customers in 4 Easy Steps</h4>
                </div>
            </div>
            <div class="row steps-line">
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-one.png')" alt="Step One"/>
                    </div>
                    <div class="short-copy">
                        <h4>Aligning To Your Business Objectives
                        </h4>
                        <p>Video should work cohesively with your business goals so that your investment directly
                            supports those objectives. One video is not a video marketing strategy and most businesses
                            will create a wide array of video content.</p>
                    </div>
                </div>
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-two.png')" alt="Step Two"/>
                    </div>
                    <div class="short-copy">
                        <h4>Evaluating the ROI
                        </h4>
                        <p>Look at creative concepts, budget and distribution channels to evaluate the project that has
                            the highest ROI and business impact.</p>
                    </div>
                </div>
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-three.png')" alt="Step Three"/>
                    </div>
                    <div class="short-copy">
                        <h4>Professional Video Production Services
                        </h4>
                        <p>Everything you need to produce quality professional video. From pre-production, logistics
                            planning, personnel prep, and all the equipment and professional editing.</p>
                    </div>
                </div>
                <div class="four-col">
                    <div class="step">
                        <img src="@asset('images/step-four.png')" alt="Step Four"/>
                    </div>
                    <div class="short-copy">
                        <h4>Maximum Distribution
                        </h4>
                        <p>Our Video 1st Strategy™ gets the most out of your video marketing content. We align with web
                            teams, social media, email marketing, and SEO teams to make sure that your video content
                            gets to the right channels of distribution and into the eyes of the people that need to see
                            it for you to get a return on investment.</p>
                    </div>
                </div>
            </div>
            <div class="row center">
                <div class="lead-out">
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

                            <a class="call-to-action" title="Contact Us" href="{{$link}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        @include('components.services')

        <section class="different" style="background: url(@asset('images/bg-image.jpg')); background-size: cover;">
            <div class="container">
            <div class="different-bg"></div>
            <div class="row center">
                <div class="different-content">
                    <div class="lead-in">
                        <h3>How are we different from the rest?</h3>
                        <h4 class="header-alt">Professional Video Production & Strategy</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="different-content">
                    <div class="different-text">
                        <p>Having produced over 1000 business videos since our inception, our clients have come to rely
                            on
                            us to give them everything they need to get the most ROI from their investment in video
                            content
                            marketing services. From strategic guidance, cost-effective video production through to
                            thoughtful
                            video marketing services to reach their lead & sales objectives. As a NYC Video Production
                            company we understand that your business needs high quality video production services to
                            help
                            stand out among the competition.

                        <p>MultiVision Digital's talented team of interactive marketing professionals, producers,
                            editors
                            and animators leverages deep expertise in interactive marketing and video production with a
                            real
                            world understanding to drive quantifiable results. We've worked with solo entrepreneurs to
                            global Fortune 500 companies across almost every industry and have created video marketing
                            communications for every business objective.

                        <p>Regardless of the size or industry, these companies needed a trusted resource to ensure their
                            business video production was on time, on budget and achieved the business objectives they
                            were
                            after.</div>
                </div>
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
                            <a class="call-to-action" title="Contact Us" href="{{$link}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <section class="accolades">
            <div class="container">
            <div class="row center">
                <div class="different-content">
                    <div class="lead-in">
                        <h3>Video Production Awards based upon client reviews:</h3>
                    </div>
                </div>
            </div>
            <div class="row center">
                <div class="accolades-img">
                    <img width="800" src="@asset('images/smaller-nyc-video-production-awards-min-2.webp')" alt="Top
                    Video
                    Production
                    Awards"/>
                    <img width="800" src="@asset('images/nyc-video-production-second-min.webp')" alt="Best Video
                    Production
                    Awards"/>
                </div>
            </div>
            </div>
        </section>

        <section class="shout section-alt">
            <div class="container">
            <div class="row">
                <div class="lead-in left">
                    <h3>Hear from our satisfied clients who have achieved greater success with their businesses</h3>
                    <h4 class="header-alt">Testimonials from our Clients</h4>
                </div>
                <div class="shout-out lead-in-right">
                    <div class="shout-out-inner">
                        <div class="shout-out-single">
                            <div class="shout-out-body">
                                <div class="shout-out-quote">

                                    <!-- Slider main container -->
                                    <div class="splide">
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                <li class="splide__slide">"I’ve worked with the pros at MultiVision several times and continue to be impressed by their technical expertise and creative eye for getting the right shot. They come prepared, work efficiently, and get the job done. Robert is a perpetual source of ideas and is able to work well with very different personalities to get the best from them — a rare skill honed by experience and insight. They deliver for us!"

                                                <div class="shout-out-sig">
                                                    <img src="@asset('images/slide-one.jpeg')" alt="BERDON" />
                                                   <span class="shout-out-name">— Jim T., Marketing Manager (New
                                                       York,NY)</span>
                                                    <span class="shout-out-co">-INNERFLUENCE</span>
                                                </div>

                                                </li>
                                                <li class="splide__slide">"Working with MultiVision on our new product video was a great experience. Robert and his team walked us through the different types of video we could create based on our specific goals; took the time to understand our market; and created a video that we are proud to use as our first point of contact with customers. Robert makes you feel like you and your project are his top priority and I look forward to working with them again."
                                                    <div class="shout-out-sig">
                                                        <img src="@asset('images/slide-two.jpeg')" alt="BERDON" />
                                                        <span class="shout-out-name">— Neal J., Assoc. Director of Marketing (Waltham, MA)</span>
                                                        <span class="shout-out-co">- Wolters Kluwer</span>
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    "Robert took the time to understand my business and hone in on the goals of my videos to determine how video content could be positioned to more effectively support lead generation, nurturing existing contacts &amp; clients, and building a larger following. After only one consultation, he was able to offer simple, specific recommendations to improve the effectiveness of my existing videos, methods to track their reach, and ways to improve SEO. He is extremely generous, knowledgeable and well-versed in what makes an integrated marketing strategy effective, and he offered insights that helped me begin to rethink the bigger picture of how video can convey my offerings in a dynamic and impactful way that results in action."
                                                    <div class="shout-out-sig">
                                                        <span class="shout-out-name">— Jen S. Small business owner (New York, NY)</span>
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                "I found Robert to be focused, adaptable and resilent. Flexible enough to handle unforeseen situations (which always occur). Talented and knowledgeable enough to blend the technical and creative aspects. And wise enough to maintain a vigorous sense of control. These admirable traits mark Robert as a superior director/producer."
                                                    <div class="shout-out-sig">
                                                        <span class="shout-out-name">— Vic Schiff, Independent Idea Person</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @php
        $sc = get_field('gravity_forms_shortcode') ?? null;
        if ($sc) {
    @endphp

        <section class="wide-form-section section-alt-2">
            <div class="container">
            <div class="row wide-form-wrapper">
                <div class="lead-in left alt lead-in-form">
                    <div class="orange-bg-cover" style="background:url(@asset('images/orange-bg-cover.jpg'));">
                        <div class="wide-form-banner">
                            <h3>Nothing comes close to the effectiveness of a well designed video communications
                                project.</h3>
                            <p>Improve your search engine rankings by driving and keeping traffic on your site and
                                generate quality leads with professional video.</p>
                        </div>
                    </div>
                </div>
                <div class="lead-in-right">
                    <div class="wide-form">
                        <h4>Contact Us</h4>
                        @php

                        	echo do_shortcode($sc);

                        @endphp
                    </div>
                </div>
            </div>
            </div>
        </section>

    @php
        }
    @endphp
@endsection

