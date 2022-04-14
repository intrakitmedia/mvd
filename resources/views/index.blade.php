{{--
  Template Name: Blog
--}}


@extends('layouts.app')


@section('content')

    <section class="small page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title blog-page-header text-center">
                    <h1>{!! $title !!}</h1>
                    <h2>Insights and Updates from our expert team</h2>
                </div>
            </div>
        </div>
    </section>



    @if($pinned_post)
        @php
            $image_url = get_the_post_thumbnail_url($pinned_post->ID) ?? null;
            $post_date = date('F dd Y', strtotime($pinned_post->post_date) );
            $post_link = get_permalink($pinned_post->ID);
            $categories = get_the_terms($pinned_post->ID, 'category');
        @endphp



        <section class="blog-banner small">
            <div class="container">
                <div class="row blog-card">
                    <div class="two-col">
                        <div class="blog-card-image-wapper">
                            @if($image_url)
                                <div class="blog-featured-image"
                                     style="background: url({{$image_url}}); background-size:cover;"><a class="link-fill" title="{{$pinned_post->post_title}}" href="{{$post_link}}"></a>
                                </div>
                            @else
                                <div class="blog-featured-image"
                                     style="background: url(@asset('images/default-image.jpg')); background-size:cover;"><a class="link-fill" title="{{$pinned_post->post_title}}" href="{{$post_link}}"></a>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="two-col">
                        <div class="blog-content-card top-news">
                            <div class="blog-roll-header blog-card-row">
                                <div class="blog-roll-cats blog-card-row">
                                    <a class="cat pinned">Top News</a>
                                    @if($categories)
                                        @foreach($categories as $category)
                                            @php
                                                $term_link = get_term_link($category->term_id);
                                            @endphp

                                            <a class="cat" title="{{$category->name}}"
                                               href="{{$term_link}}">{{$category->name}}</a>


                                        @endforeach
                                    @endif
                                </div>
                                <div class="blog-roll-title">
                                    <h3><a title="{{$pinned_post->post_title}}"
                                           href="{{$post_link}}">{{$pinned_post->post_title}}</a></h3>
                                </div>
                            </div>
                            <div class="blog-roll-body blog-card-row">
                                <p>NYC Video production services often come with a hefty price tag. Granted, the investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient…</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                @php
                                   $gravatar_default= "https://secure.gravatar
                                .com/avatar/53a7057b864b47e834e2986aaf9549ff?s=96&d=mm&r=g";
                                    $author_display_name = get_the_author_meta('display_name', $pinned_post->post_author);
                                    $nickname = get_the_author_meta('nickname', $pinned_post->post_author);
                                    $avatar = get_avatar_url($pinned_post->post_author);
                                    $post_date = date('F d Y', strtotime($pinned_post->post_date) );
                                @endphp

                                @if( $author_display_name == 'Robert Weiss' )
                                    @php
                                        $avatar = \Roots\asset('images/robert-weiss.png')->uri();
                                    @endphp
                                @endif
                                {{--<div class="pic">--}}
                                    {{--@if($avatar)--}}
                                        {{--<div class="pic-inner" style="background: url({{$avatar}});--}}
                                                {{--background-size:cover;"></div>--}}
                                    {{--@else--}}
                                        {{--<div class="pic-inner" style="background: url(@asset('images/default-author.jpg'));--}}
                                {{--background-size:cover;"></div>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                                <div class="meta">

                                    <div class="author-name"><p>by {{$author_display_name}}</p></div>
                                    {{--<div class="date"><p>{{$post_date}}</p></div>--}}
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    @endif

    <section class="blog-articles small">
        <div class="container">
            <div class="row block">
                <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-4">
                    @if( $posts->found_posts > 0 )
                        @foreach($posts->posts as $post)
                            @php
                                $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                                $post_date = date('F dd Y', strtotime($post->post_date) );
                                $post_link = get_permalink($post->ID);
                                $categories = get_the_terms($post->ID, 'category');
                            $content = get_the_content('', true, $post->ID);
                            @endphp



                            <div class="blog-card">
                                <div class="blog-card-image-wapper blog-card-row">
                                    @if($image_url)
                                        <div class="blog-featured-image"
                                             style="background: url({{$image_url}}); background-size:cover;"><a class="link-fill" title="{{$post->post_title}}" href="{{$post_link}}"></a></div>
                                    @else
                                        <div class="blog-featured-image"
                                             style="background: url(@asset('images/default-image.jpg')); background-size:cover;"><a class="link-fill" title="{{$post->post_title}}" href="{{$post_link}}"></a></div>
                                    @endif
                                </div>
                                <div class="blog-content-card top-news blog-card-row">
                                    <div class="blog-roll-header blog-card-row">

                                        <div class="blog-roll-cats blog-card-row">
                                            @if($categories)
                                                @foreach($categories as $category)
                                                    @php
                                                        $term_link = get_term_link($category->term_id);
                                                    @endphp

                                                    <a class="cat" title="{{$category->name}}"
                                                       href="{{$term_link}}">{{$category->name}}</a>


                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="blog-roll-title">
                                            <h3><a title="{{$post->post_title}}" href="{{$post_link}}">{{$post->post_title}}</a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="blog-roll-body blog-card-row">
	                                   <p><?php echo wp_trim_words( $content, 40, " ..."); ?></p>
                                    </div>
                                    <div class="blog-roll-author blog-card-row">
                                        @php
                                            $author_display_name = get_the_author_meta('display_name', $post->post_author);
                                            $nickname = get_the_author_meta('nickname', $post->post_author);
                                            $avatar = get_avatar_url($post->post_author);
                                            $post_date = date('F d Y', strtotime($post->post_date) );
                                        @endphp
                                        {{--<div class="pic">--}}
                                            {{--@if($avatar)--}}
                                                {{--<div class="pic-inner" style="background: url({{$avatar}});--}}
                                                        {{--background-size:cover;"></div>--}}
                                            {{--@else--}}
                                                {{--<div class="pic-inner" style="background: url(@asset('images/default-author.jpg'));--}}
                                {{--background-size:cover;"></div>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                        <div class="meta">

                                            <div class="author-name">by  <p>{{$author_display_name}}</p></div>
                                            <div class="date"><p>{{$post_date}}</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="No Posts">
                            <h1>No posts yet!</h1>
                        </div>
                    @endif
                </div>


            </div>
        </div>
    </section>

    <section class="pagination">
        <div class="container">
            <div class="row flex-end">
    <div class="post-pagination">
        @php(the_posts_pagination())
    </div>
            </div>
        </div>
    </section>

    <section class="section-alt">
        <div class="container">
            <div class="row"></div>
        </div>
    </section>

    <section class="wide-form-section">
        <div class="row wide-form-wrapper-90">
            <div class="peak">
                <div class="lead-in left alt">
                    <div class="peak-card">
                        <div class="peak-card-top" style="background: url(@asset('images/video-production-lights-center.jpg'));
                    background-position: center center;">
                            <div class="peak-card-bg"></div>
                            <div class="peak-card-title">
                                <h3>How Much Does a Video Cost?</h3>
                            </div>
                        </div>

                        <div class="peak-card-logo"><img
                                    src="@asset('images/multivision-digital-video-production-logo-trans.png')"
                                    alt="Multivision Digitial Logo"/></div>
                    </div>
                </div>
                <div class="lead-in-right">
                    <div class="wide-form wide-form-download">
                        <h2 class="preheader">Download Free PDF</h2>
                        <h3 class="follow-up smaller">What is the most common question about video?</h3>
                        <p>The answer is "how much does a video cost?" Download this free PDF and learn what goes
                            into video production.</p>

                       {!!   do_shortcode('[gravityform id="6" title="false"]') !!}

                        {{--<form>--}}
                            {{--<div class="form-row">--}}
                                {{--<label class="two-col even-space" id="wide-form-first-name-label">--}}
                                    {{--<input id="peak-email" type="email" value="" placeholder="Enter Email Address"--}}
                                           {{--required/>--}}
                                {{--</label>--}}
                                {{--<button class="call-to-action" id="wide-form-submit">Download</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
