@extends('layouts.app')

@php
    $post = get_post($post_ID);
@endphp


@section('content')
    <section class="main-article-content">
        <div class="container">
            <div class="row">
                <div class="large-col">
                    <article class="aside">
                        <div class="article-header article-row ">
                            @if($categories)
                                <div class="article-cats article-row">
                                    @foreach($categories as $category)

                                        @php
                                            $term_link = get_term_link($category->term_id);
                                        @endphp

                                        <a class="cat" title="{{$category->name}}"
                                           href="{{$term_link}}">{{$category->name}}</a>
                                    @endforeach
                                </div>
                            @endif
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
                                    {{--@if($avatar)--}}
                                    {{--<div class="pic article-pic">--}}
                                    {{--<div class="pic-inner article-pic-inner"--}}
                                    {{--style="background: url({{$avatar}}); background-size: cover;">--}}

                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--@else--}}
                                    {{--<div class="pic article-pic">--}}
                                    {{--<div class="pic-inner article-pic-inner"--}}
                                    {{--style="background: url(@asset('images/author.jpg')); background-size: cover;">--}}

                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--@endif--}}

                                    @if($author_display_name && $post_date)
                                        <div class="meta article-data">
                                            <div class="author-name"><p> by {!! $author_display_name !!}</p></div>
                                        </div>
                                    @endif
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
                        <div class="magnet-bar">
                            <div class="peak">
                                <div class="lead-in left alt">
                                    <div class="peak-card">
                                        <div class="peak-card-top" style="background: url(@asset('images/video-production-lights-center.jpg'));
                    background-position: center center;">
                                            <div class="peak-card-bg"></div>
                                            <div class="peak-card-title">
                                                <span>5</span>
                                                <h3>Main Cost Factors to a Business Video</h3>
                                            </div>
                                        </div>

                                        <div class="peak-card-logo"><img
                                                    src="@asset('images/multivision-digital-video-production-logo-trans.png')"
                                                    alt="Multivision Digitial Logo"/></div>
                                    </div>
                                </div>
                                <div class="lead-in-right">
                                    <div class="wide-form wide-form-download">
                                        <h2 class="preheader">How Much Does a Video Cost?</h2>
                                        <h3 class="follow-up smaller">Nothing comes close to the effectiveness of a well
                                            designed video
                                            communications
                                            project.</h3>
                                        <p>The impact video has in driving everyday sales and marketing results is unmatched, which makes it easy to understand why business video communications have been gaining momentum.</p>
                                        {!!   do_shortcode('[gravityform id="6" title="false" ajax="true"]') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-roll">
                            <div class="post-roll-wrapper">
                                <div class="post-roll-inner">
                                    <h3 class="header-tag center">Latest</h3>


                                    @foreach($recent_posts as $post)
                                        @php
                                            $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                                       $post_date = date('F d Y', strtotime($post->post_date) );
                                        $post_link = get_permalink($post->ID);
                                        @endphp
                                        <div class="post-roll-post">
                                            <div class="post-roll-image">
                                                @if($image_url)
                                                    <img src="@php echo get_the_post_thumbnail_url($post->ID) @endphp"
                                                         alt="{{$post->post_title}}"/>
                                                @endif
                                            </div>
                                            <div class="post-roll-header">
                                                <div class="post-roll-title">
                                                    <a title="{{$post->post_title}}"
                                                       href="{{$post_link}}">{{$post->post_title}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-articles section-alt extra-bottom">
        <div class="container">
            <div class="row center">
                <h2>You might like these too</h2>
            </div>
            <div class="row block">
                @php
                    //TODO make conditional for categories
                @endphp
                <div class="related-posts grid sm:grid-cols-1 lg:grid-cols-3 gap-4">
                    @foreach($related_posts as $post)

                        @php
                          $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                          $cats = get_the_terms($post->ID, 'category');
                          $related_post_date = date('F d Y', strtotime($post->post_date) );
                          $related_post_link = get_permalink($post->ID);
                          $related_content  = get_the_content($post->ID);
                        @endphp

                        <div class="blog-card">
                            <div class="blog-card-image-wapper blog-card-row">
                                @if($image_url)
                                    <div class="blog-featured-image"
                                         style="background: url('{{$image_url}}'); background-size:cover;">
                                        @else
                                            <div class="blog-featured-image"
                                                 style="background: url(@asset('images/default-image.jpg'));
                                         background-size:cover;">
                                                @endif
                                            </div>
                                    </div>
                                    <div class="blog-content-card top-news blog-card-row">
                                        <div class="blog-roll-header blog-card-row">
                                            {{--<div class="blog-roll-cats blog-card-row">--}}
                                                {{--@foreach($cats as $cat)--}}

                                                    {{--@php--}}
                                                        {{--$cat_link = get_term_link($cat->term_id);--}}
                                                    {{--@endphp--}}

                                                    {{--<a class="cat" title="{{$cat->name}}"--}}
                                                       {{--href="{{$cat_link}}">{{$cat->name}}</a>--}}
                                                {{--@endforeach--}}
                                            {{--</div>--}}
                                            <div class="blog-roll-title">
                                                <h3><a title="{{$post->post_title}}"
                                                       href="{{$related_post_link}}">{{$post->post_title}}</a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="blog-roll-body blog-card-row">
                                            <p>{!! wp_trim_words( $related_content, 40, " ...") !!}</p>
                                        </div>
                                    </div>
                            </div>


                            @endforeach


                        </div>
                </div>
            </div>
    </section>

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

                            echo do_shortcode('[gravityform id="4" title="false" ajax="true"]');

                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
