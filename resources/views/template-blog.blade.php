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

                @if( $banner_posts->found_posts > 0 )
                    @foreach($banner_posts->posts as $post)
                        @php
                            $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                            $post_date = date('F dd Y', strtotime($post->post_date) );
                            $post_link = get_permalink($post->ID);
                            $categories = get_the_terms($post->ID, 'category');
                        @endphp


    <section class="blog-banner small">
        <div class="container">
            <div class="row blog-card">
                <div class="two-col">
                    <div class="blog-card-image-wapper">
                        @if($image_url)
                        <div class="blog-featured-image"
                             style="background: url({{$image_url}}); background-size:cover;">
                        </div>
                            @else
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/default-image.jpg')); background-size:cover;">
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
                                efficient???</p>
                        </div>
                        <div class="blog-roll-author blog-card-row">
                            @php
                                $author_display_name = get_the_author_meta('display_name', $pinned_post->post_author);
                                $nickname = get_the_author_meta('nickname', $pinned_post->post_author);
                                $avatar = get_avatar_url($pinned_post->post_author);
                                $post_date = date('F d Y', strtotime($pinned_post->post_date) );


                            @endphp



                            @if( $author_display_name == 'Robert Weiss' && ! $avatar )
                                @php
                                    $avatar = @asset('images/robert-weiss.png');
                                @endphp
                            @endif
                            <div class="pic">
                                @if($avatar)
                                    <div class="pic-inner" style="background: url({{$avatar}});
                                            background-size:cover;"></div>
                                @else
                                    <div class="pic-inner" style="background: url(@asset('images/default-author.jpg'));
                                background-size:cover;"></div>
                                @endif
                            </div>
                            <div class="meta">

                                <div class="author-name"><p>{{$author_display_name}}</p></div>
                                <div class="date"><p>{{$post_date}}</p></div>
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
                                <p>NYC Video production services often come with a hefty price tag. Granted, the
                                    investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient???</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                @php
                                    $author_display_name = get_the_author_meta('display_name', $post->post_author);
                                    $nickname = get_the_author_meta('nickname', $post->post_author);
                                    $avatar = get_avatar_url($post->post_author);
                                    $post_date = date('F d Y', strtotime($post->post_date) );
                                @endphp
                                <div class="pic">
                                    @if($avatar)
                                        <div class="pic-inner" style="background: url({{$avatar}});
                                background-size:cover;"></div>
                                        @else
                                    <div class="pic-inner" style="background: url(@asset('images/default-author.jpg'));
                                background-size:cover;"></div>
                                        @endif
                                </div>
                                <div class="meta">

                                    <div class="author-name"><p>{{$author_display_name}}</p></div>
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

    <div class="post-pagination">
        @php(the_posts_pagination())
    </div>

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
                            $sc = get_field('gravity_forms_shortcode') ?? null;
                            if ($sc) {
                                echo do_shortcode($sc);
                            }

                        @endphp
                        {{--<h4>Contact Us</h4>--}}
                        {{--<form>--}}
                        {{--<div class="form-row">--}}
                        {{--<label class="two-col even-space" id="wide-form-first-name-label"--}}
                        {{--for="wide-form-first-name"><p>First--}}
                        {{--Name<span class="required">*</span></p>--}}
                        {{--<input id="wide-form-first-name" type="text" value="" required/>--}}
                        {{--</label>--}}
                        {{--<label class="two-col even-space" id="wide-form-first-name-label"><p>Last Name<span--}}
                        {{--class="required">*</span></p>--}}
                        {{--<input id="wide-form-last-name" type="text" value="" required/>--}}
                        {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="form-row">--}}
                        {{--<label class="two-col even-space" id="wide-form-first-name-label"><p>Phone<span--}}
                        {{--class="required">*</span></p>--}}
                        {{--<input id="wide-form-first-name" type="phone" value="" required/>--}}
                        {{--</label>--}}
                        {{--<label class="two-col even-space" id="wide-form-first-name-label"><p>Email<span--}}
                        {{--class="required">*</span></p>--}}
                        {{--<input id="wide-form-last-name" type="email" value="" required/>--}}
                        {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="form-row">--}}
                        {{--<label class="two-col even-space only" id="wide-form-first-name-label"><p>Company<span--}}
                        {{--class="required">*</span></p>--}}
                        {{--<input id="wide-form-first-name" type="phone" value="" required/>--}}
                        {{--</label>--}}
                        {{--</div>--}}
                        {{--<div class="row center">--}}
                        {{--<button class="call-to-action" id="wide-form-submit">Submit</button>--}}
                        {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
