{{--
  Template Name: About Us
--}}

@php
    $portfolio = get_post_type_archive_link('portfolios');
@endphp


@extends('layouts.app')


@section('content')

    <section class="section-alt page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title text-center">
                    <h1>About Us</h1>
                    <h2>Our mission from day one &#8212;</h2>
                    <p>Provide quality video production services that did not break the bank and allow them to invest in different types of video marketing content multiple times a year.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="right-up">
        <div class="right-up-inner">
            <div class="container">
                <div class="row">
                    <div class="large-col">
                        <div class="checklist-board">
                            <div class="checklist-board-inner" style="padding-top: 90px;">

                                <div class="header-two">

                                    <h2>Our Clients rely on us to:</h2>

                                </div>

                                <ul>
                                    <li>Provide a quick turn around while maintaining a high level of quality and
                                        customer
                                        service
                                    </li>
                                    <li>Give them back more value than the $ amount invested</li>
                                    <li>Produce a wide range of videos that include almost every type of business video
                                        possible – talking head, green screen, human resources, animation, product
                                        video, case study videos, etc
                                    </li>
                                    <li>Make their talent look great in front of the camera</li>
                                    <li>Challenge their thinking on executing the right video for the right objective
                                    </li>
                                    <li>Plan complex, multi day / location / camera shoot to simple business video
                                        production projects
                                    </li>
                                    <li>Work in their budget parameters, but still produce quality professional work
                                    </li>
                                    <li>Collaborate with them to make the most efficient and productive use out of their
                                        budget
                                    </li>
                                </ul>

                                <div class="cta-button-wrapper">
                                    <a href="/case-studies/" class="call-to-action">View Customer Studies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-col">
                        <div class="right-up-image">
                            <img src="@asset('images/video-production-meet.jpeg')" alt="Video Production Meet"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-alt-2 page-header">
        <div class="container">
            <div class="row center">
                <div style="width: 100%;">
                  <h2 class="blue text-center">Watch 10th Anniversery Promotional Video</h2>
                  <div class="video" style="height: auto;">
                    <div class="video-container" style="position: relative; height: 0;">
                      <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/9RFWNmu8H3E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
{{--                    <a data-field="9RFWNmu8H3E" class="s-vid-link orange-link"><i class="fa-solid fa-play--}}
{{--                    orange-play"></i>--}}
{{--                        <span>Watch 10th ANNIVERSARY PROMOTIONAL VIDEO</span></a>--}}
                </div>

                @include('components.modal')
            </div>
        </div>
    </section>

    <section class="section-alt sizzle-reel section-up-next">
        <div class="container">
            <div class="row center">
                <div class="two-col">
                    <div class="image-flex-roll">
                        <div class="image-row">
                            <img width="308" src="@asset('images/video-production-action.jpeg')" alt="Video Production
                        Action"/>
                            <img width="252" src="@asset('images/video-production-camera.jpeg')" alt="Video Production
                        Camera"/>
                        </div>
                        <div class="image-row">
                            <img class="sizzle-only" src="@asset('images/video-production-lights.jpeg')" alt="Video
                            Production
                            Lights"/>
                        </div>

                    </div>

                </div>
                <div class="two-col">
                    <div class="sizzle-content-top">
                        <p><a title="Multivision Digital Team" href="/our-team/">Our team</a> started our business with
                            that vision and we
                            keep
                            that
                                vision in our back
                            pockets in
                            every engagement.  Over the course of hundreds of video production projects, spanning every business objective and video production skill set, MultiVision Digital has been hired by global multinational firms to solo-entrepreneurs across almost every industry.  Over this time we have amassed a wealth of knowledge in executing successful video projects every single business objective.</p>

                        <p>Working with marcom teams and executive level talent, we’ve come to understand the nuances, challenges, and opportunities that people have with video marketing.  Leveraging our broad experience, and diverse skill sets that span sales, marketing and digital content creation, we have allowed clients to achieve quantifiable increases in sales, lead generation, improved SEO rankings, increased awareness and client loyalty.
                        </p>

                        <a class="call-to-action inline-block"title="Portfolio" href="{{ $portfolio }}" >View Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{--<section class="post-roll">--}}

    {{--<div class="post-image">--}}
    {{--<image src="" />--}}
    {{--</div>--}}
    {{--<div class="post-content">--}}
    {{--<div class="post-categories">--}}
    {{--<div class="post-cat">--}}
    {{--<a href="">Animated Explainer</a>--}}
    {{--</div>--}}
    {{--<div class="post-cat">--}}
    {{--<a href="">Business Video Blog</a>--}}
    {{--</div>--}}
    {{--<div class="post-cat">--}}
    {{--<a href="">Video Marketing Case Studies</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="post-title">--}}
    {{--<h3>Animated Holiday Cards Increase Awareness & Engagement</h3>--}}
    {{--<p>Just like animated videos for business are highly efffective to convert leads, animated hoiday--}}
    {{--cards as they make a memorable impressions on their customers and prospects. So, if your goal...</p>--}}
    {{--</div>--}}
    {{--<div class="read-more">--}}
    {{--<a class="read-more">Read More</a>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--</section>--}}



    <section class="core-values section-alt-2">
        <div class="container">
            <div class="row center">
                <div class="header-two">
                    <h2>Our Core Values</h2>
                </div>
            </div>

            <div class="row">
                <div class="small-card">
                    <div class="small-card-icon">
                        <div class="icon-off">
                            <img src="@asset('images/scale.png')">
                        </div>

                    </div>
                    <div class="small-card-text">
                        <h4>Fairness</h4>
                        <p>To ourselves, clients, family, time-off, health, side projects & hobbies.</p>
                    </div>
                </div>
                <div class="small-card">
                    <div class="small-card-icon">
                        <div class="icon-off">
                            <img src="@asset('images/Vector.png')">
                        </div>

                    </div>
                    <div class="small-card-text">
                        <h4>Quality of Work</h4>
                        <p>Client Satisfaction and Customer Service</p>
                    </div>
                </div>
                <div class="small-card">
                    <div class="small-card-icon">
                        <div class="icon-off">
                            <img src="@asset('images/time.png')">
                        </div>

                    </div>
                    <div class="small-card-text">
                        <h4>Evolution</h4>
                        <p>Continue to evolve as individuals, in our service offerings to our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="paragraph">
        <div class="container">
            <div class="small-row">
                <div class="the-content">
                    <p>We set out on our journey in 2011 and today our value proposition remains the same as it will tomorrow.  Our client
                        base and core offering is now expanded into video strategy, video production and video distribution, allowing us to offer a full turnkey service to work clients across the spectrum of video content.

                    <p>Regardless of the size of the company, or budget attached, all the people at these companies needed a trusted resource to ensure their business video production was on time, on budget and achieved the business objectives they were after.

                    <p>Reach out say hello and will be seeing you in front of a camera.
                </div>
                <div class="cta-button-wrapper text-center">
                    <a class="call-to-action" title="Portfolio"  href="{{$portfolio}}">View Portfolio</a>
                </div>
            </div>
        </div>
    </section>


    <section class="accolades next-up-312">
        <div class="container">
        <div class="row center">
            <div class="different-content">
                <div class="lead-in">
                    <h2>Our Recognitions</h2>
                    <p>A few of the recognitions we have been awarded that we are very proud of -</p>
                </div>
            </div>
        </div>
        <div class="row about-img center">
            <div class="accolades-img">

                <a title="Top 10 Corporate Video Production Companies in New York" href="https://giggster.com/blog/corporate-video-production-companies-new-york/">
                    <img src="@asset('images/giggster-corporate-2021.jpg')" alt="Top 10 Corporate Video ProductionCompanies in New York" />
                </a>
                <a title="Top NYC Video Production Companies" href="https://www.designrush.com/agency/video-production/new-york/new-york-city">
                    <img src="@asset('images/Accredited-Agency-2022.jpeg')" alt="Top 10 Corporate Video Production Companies in New York" />
                </a>
                <a title="Verified Agency 2022" href="https://agencyvista.com/agency/multivision-digital/marketing-agency-new-york-new-york-us">
                    <img src="@asset('images/verified-agency-vista-badge.png')" alt="Verified Agency 2022"/>
                </a>
                <a href="https://www.expertise.com/ny/nyc/law-firm-marketing" style="display:inline-block; border:0;">
                    <img src="https://res.cloudinary.com/expertise-com/image/upload/f_auto,fl_lossy,q_auto/w_auto/remote_media/awards/ny_nyc_law-firm-marketing_2022_transparent.svg" />
                </a>
                <a href="https://upcity.com/profiles/multivision-digital/locations/multivision-digital">
                  <img src="https://upcity-marketplace.s3.amazonaws.com/excellenceaward/314/best_of_full_color/f654ab6c21ed36197c982ed28d85fed0.png" width="300px" height="300px" alt="2022 Best Of New York" />
                </a>
            </div>
        </div>
        </div>
    </section>

    @include('components.lead-gen')

@endsection

