{{--
  Template Name: Playlist
--}}


@extends('layouts.app')

@section('content')
    <section class="small page-header">
        <div class="container">
            <div class="row center">
                <div class="text-center">
                    <h1 class="bigger-than">
                        {!! $title !!}
                    </h1>
                    <p>Video marketing tips that answer some of the most common questions we receive on business
                        video production and video content marketing.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="playlist">
        <div class="container">
            <div class="row">
                <div class="tow-col">
                    <div class="video-container video-iframe">
                       <iframe src="https://www.youtube.com/embed/laO_nXueZpc"></iframe>
                    </div>
                    <div class="playlist-content">
                        <div class="playlist-title">
                            <h3>The Versatility of Business Video</h3>
                            <p>Learn how versatile business video content really is and why it makes a great investment for your content marketing strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tow-col">
                    <div class="video-container video-iframe">
                        <iframe src="https://www.youtube.com/embed/h8DxDNY-DDs"></iframe>
                    </div>
                    <div class="playlist-content">
                        <div class="playlist-title">
                            <h3>Two Rock Star Reasons to Invest in Video</h3>
                            <p>In this video, we give you two rock star reasons why investing in business video content today is an amazing idea.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tow-col">
                    <div class="video-container video-iframe">
                        <iframe src="https://www.youtube.com/embed/ANbWi2kxTmM"></iframe>
                    </div>
                    <div class="playlist-content">
                        <div class="playlist-title">
                            <h3>The Best Video for Your Business</h3>
                            <p>What kind of video is best to invest in? Watch this MultiVision Minute to find out the best video for your business.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tow-col">
                    <div class="video-container video-iframe">
                        <iframe src="https://www.youtube.com/embed/5oOr2w6P_iI"></iframe>
                    </div>
                    <div class="playlist-content">
                        <div class="playlist-title">
                            <h3>The Importance of B2B Video Marketing</h3>
                            <p>Learn how versatile business video content really is and why it makes a great investment for your content marketing strategies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tow-col">
                    <div class="video-container video-iframe">
                        <iframe src="https://www.youtube.com/embed/5oOr2w6P_iI"></iframe>
                    </div>
                    <div class="playlist-content">
                        <div class="playlist-title">
                            <h3>The Overlooked Part of Corporate Video Production</h3>
                            <p>The most overlooked part of corporate video production is...(drum roll)...your messaging! Learn why most people go about producing video the wrong way and how we're here to help.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tow-col">
                    <div class="video-container video-iframe">
                        <iframe src="https://www.youtube.com/embed/h6Wz8a6MPk8"></iframe>
                    </div>
                    <div class="playlist-content">
                        <div class="playlist-title">
                            <h3>How Much Does an Average Business Video Cost?</h3>
                            <p>In this MultiVision Minute, we discuss how much an average business video costs. However, there are so many factors that go into determining the cost of a video that it's hard to give a direct answer. It gets complicated!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tow-col">
                    <div class="video-container video-iframe">
                        <iframe src="https://www.youtube.com/embed/pBrXPkppTQY"></iframe>
                    </div>
                    <div class="playlist-content">
                        <div class="playlist-title">
                            <h3>What Makes Up the Cost of a Video?</h3>
                            <p>In this MultiVision Minute, we discuss how much an average business video costs. However, there are so many factors that go into determining the cost of a video that it's hard to give a direct answer. It gets complicated!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
