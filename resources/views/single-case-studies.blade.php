{{--
  Template Name: Case Study
--}}


@extends('layouts.app')


@section('content')
    <section class="services-banner section-alt">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <span class="header-tag">Case Studies</span>
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
@endsection
