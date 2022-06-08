{{--
  Template Name: Tips
--}}


@extends('layouts.app')


@section('content')

    <section class="small page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title blog-page-header text-center">
                    <h1>{!! $title !!}</h1>
                    @php
                        $subtitle  = get_field('subtitle') ? : "Business Video Tips from our expert team";
                    @endphp

                    <h2>{!!  $subtitle !!}</h2>
                </div>
            </div>
        </div>
    </section>



                <section class="blog-articles small" style="margin-bottom: 220px;">
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
                                        $content = get_the_content($post->ID);
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
                   @php
                    the_posts_pagination();
                   @endphp
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
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


@endsection
