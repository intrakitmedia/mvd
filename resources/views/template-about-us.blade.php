{{--
  Template Name: About Us
--}}


@extends('layouts.app')


@section('content')

    <section class="section-alt page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title text-center">
                    <h1>About Us</h1>
                    <h2>Our mission from day one &#8212;</h2>
                    <p>Provide quality video proudction services that did not break the bank and allow them to invest in different types of video marketing content multiple times a year.</p>
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
                                    <a href="" class="call-to-action">View Customer Studies</a>
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
                <div class="page-header-title text-center">
                    <a class="orange-link" href=""><i class="fa-solid fa-play orange-play"></i> <span>Watch 10th
                            ANNIVERSARY
                                PROMOTIONAL VIDEO</span></a>
                </div>
            </div>
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.</p>

                        <a class="call-to-action inline-block">View Portfolio</a>
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
                        <p>To ourselvse, clients, family, time-off, health, side projects & hobbies.</p>
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
                    <a class="call-to-action">View Portfolio</a>
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
        <div class="row center">
            <div class="accolades-img">

                <a title="Top 10 Corporate Video Production Companies in New York
" href="https://giggster.com/blog/corporate-video-production-companies-new-york/"><img
                            src="@asset('images/giggster-corporate-2021.jpg')" alt="Top 10 Corporate Video Production
                            Companies in New York
" /></a>
                <a title="
Top NYC Video Production Companies" href="https://www.designrush.com/agency/video-production/new-york/new-york-city"><img
                            src="@asset('images/Accredited-Agency-2022.jpeg')" alt="Top 10 Corporate Video Production
                            Companies in New York
" /></a>
                <a title="Verified Agency 2022" href="https://agencyvista
                .com/agency/multivision-digital/marketing-agency-new-york-new-york-us"><img width="800" src="@asset
                ('images/recog.jpeg')" alt="Verified Agency 2022"/></a>
            </div>
        </div>
        </div>
    </section>

    <section class="wide-form-section section-alt-2">
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

