@extends('layouts.app')
@php
    $post = get_post($post_ID);
@endphp
@section('content')
    <section class="main-article-content">
        <div class="container">
            <div class="row">
                <div class="large-col">
                    @php
                        $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                        $post_date = date('F dd Y', strtotime($post->post_date) );
                        $post_link = get_permalink($post->ID);
                        $categories = get_the_terms($post->ID, 'category');
                    @endphp
                    <article class="aside">
                        <div class="article-header article-row ">
                            {{--<div class="article-cats article-row">--}}
                                {{--<x-categories  cats="$cats"></x-categories>--}}
                                {{--<a class="cat " href="#">Animated Explainer</a>--}}
                                {{--<a class="cat" href="#">B2B</a>--}}
                                {{--<a class="cat" href="#">Video Marketing</a>--}}
                            {{--</div>--}}
                            <div class="article-title article-row ">
                                <h1>{!! $title !!}</h1>
                            </div>
                            <div class="article-meta article-row-2">
                                @php
                                    $author_display_name = get_the_author_meta('display_name', $post->post_author);
                                    $nickname = get_the_author_meta('nickname', $post->post_author);
                                    $avatar = get_avatar_url($post->post_author);
                                    $post_date = date('F d Y', strtotime($post->post_date) );
                                @endphp
                                <div class="post-meta article-author">
                                    <div class="pic article-pic">
                                        @if($avatar)
                                            <div class="pic-inner article-pic-inner" style="background: url({{$avatar}});
                                            background-size: cover;">

                                            </div>
                                            @else
                                        <div class="pic-inner article-pic-inner" style="background: url(@asset('images/author.jpg')); background-size: cover;">

                                        </div>
                                            @endif
                                    </div>
                                    <div class="meta article-data">
                                        @if($author_display_name && $post_date)
                                        <div class="author-name"><p>{!! $author_display_name !!}</p></div>
                                        <div class="date"><p>{!! $post_date !!}</p></div>
                                            @endif
                                    </div>
                                </div>
                                <div class="post-social">
                                    <div class="blurb"><p>Share on</p></div>
                                    <div class="links">
                                        <ul>
                                            <li><a target="_blank"
                                                   href="https://www.facebook.com/sharer/sharer.php?u=<?=
	                                               urlencode
	                                               ( $permalink )
	                                               ?>"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" href="http://twitter.com/share?<?= urlencode
		                                        ( $permalink ) ?>"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank"
                                                   href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode
	                                               ( $permalink )
	                                               ?>"><i class="fa
                                        fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($thumbnail_url)
                            <div class="article-featured-image">
                                <img src="{{$thumbnail_url}}" alt=""/>
                            </div>
                        @endif

                        @if($main_content)
                            <div class="article-body">
                                <div class="article-body-inner">
                                    {!! $main_content !!}
                                </div>
                            </div>
                        @endif
                    </article>
                </div>
                <div class="small-col">
                    <div class="sidebar">

                        @include('components.quick-quote')

                        <div class="post-roll">
                            <div class="post-roll-wrapper">
                                <div class="post-roll-inner">
                                    <h3 class="header-tag center">Other Case Studies</h3>
                                    <div class="post-roll-post">
                                        <div class="post-roll-image">
                                            <img src="@asset('images/case-study-two.jpg')" alt="Remote Video Capture
                            Client"/>
                                        </div>
                                        <div class="post-roll-header">
                                            <div class="post-roll-title">
                                                <a href="#">How a 70 Yr Manufacturing Co. Closes Sales with B2B Video Production</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-roll-post">
                                        <div class="post-roll-image">
                                            <img src="@asset('images/case-study-three.jpg')" alt="Remote Video Capture
                            Client"/>
                                        </div>
                                        <div class="post-roll-header">
                                            <div class="post-roll-title">
                                                <a href="#">The 4 Day Manufacturing Video Production Deliverable – Making it Happen for the Haydon Corporation</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-roll-post">
                                        <div class="post-roll-image">
                                            <img src="@asset('images/case-study-four.jpg')" alt="Remote Video Capture
                            Client"/>
                                        </div>
                                        <div class="post-roll-header">
                                            <div class="post-roll-title">
                                                <a href="#">Commercial Real Estate Video Content Marketing Services in NY City for Breather</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-roll-post">
                                        <div class="post-roll-image">
                                            <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client"/>
                                        </div>
                                        <div class="post-roll-header">
                                            <div class="post-roll-title">
                                                <a href="#">Video for Manufacturing Companies – B2B Sales Plan</a>
                                            </div>
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
@endsection
