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

  @if($banner_posts)


    @if( $banner_posts->found_posts > 0 )
      <section class="blog-banner small">
        <div class="container">
          <div class="row blog-card">
            <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
              @foreach($banner_posts->posts as $post)


                @php
                  if(property_exists($post, 'ID')) {
                      	$image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                       	$post_date = date('F dd Y', strtotime(get_the_date($post->ID)) );
                       	$post_link = get_permalink($post->ID);
                       	$categories = get_the_terms($post->ID, 'category');
                   		$post_title         = get_the_title($post->ID);
                   		$content = get_the_content('', true, $post->ID);
                  }

                @endphp



                <div class="feat-card-wrapper">
                  @if($image_url)
                    <div class="blog-card-image-wapper blog-card-row">

                      <div class="blog-featured-image"
                           style="background: url({{$image_url}}); background-size:cover;"><a class="link-fill" title="{{$post_title}}" href="{{$post_link}}"></a>
                      </div>
                    </div>
                  @endif

                  <div class="blog-content-card top-news">
                    <div class="blog-roll-header blog-card-row">
                      <div class="blog-roll-cats blog-card-row">
                        <span class="cat pinned">Top News</span>
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
                        <h3><a title="{{$post_title}}"
                               href="{{$post_link}}">{{$post_title}}</a></h3>
                      </div>
                    </div>
                    <div class="blog-roll-body blog-card-row">
                      <p><?php echo wp_trim_words( $content, 40, " ..."); ?></p>
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
                      <div class="meta">

                        <div class="author-name"><p>by {{$author_display_name}}</p></div>

                      </div>
                    </div>

                  </div>


                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
    @endif

  @endif

  <section class="blog-articles small">
    <div class="container">
      <div class="row block">
        <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-4">
          @if( $posts->found_posts > 0 )


            @foreach($posts->posts as $post)


              @php
                $post = get_post($post);
                          $image_url = get_the_post_thumbnail_url($post->ID) ?? null;
                          $post_date = date('F dd Y', strtotime(get_the_date($post->ID)) );
                          $post_link = get_permalink($post->ID);
                          $categories = get_the_terms($post->ID, 'category');
                      $content = get_the_content('', true, $post->ID);
              @endphp



              <div class="blog-card">
                <div class="blog-card-image-wapper blog-card-row">
                  @if($image_url)
                    <div class="blog-featured-image"
                         style="background: url({{$image_url}}); background-size:cover;"><a class="link-fill" title="{{get_the_title($post->ID)}}" href="{{$post_link}}"></a></div>
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
                      <h3><a title="{{get_the_title($post->ID)}}" href="{{$post_link}}">{{get_the_title($post->ID)}}</a>
                      </h3>
                    </div>
                  </div>
                  <div class="blog-roll-body blog-card-row">
                    <p><?php echo wp_trim_words( $content, 40, " ..."); ?></p>
                  </div>
                  <div class="blog-roll-author blog-card-row">
                    @php
                      $author_id = get_post($post->ID)->post_author;
                      $author_display_name = get_the_author_meta('display_name',$author_id);
                      $nickname = get_the_author_meta('nickname', $author_id);
                      $avatar = get_avatar_url($author_id);
                      $post_date = date('F d Y', strtotime(get_the_date($post->ID)) );
                    @endphp
                    <div class="meta">

                      <div class="author-name"><p>by {{$author_display_name}}</p></div>
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

  <section class="pagination extra-bottom">
    <div class="container">
      <div class="row flex-end">
        <div class="post-pagination">
          @php

            the_posts_pagination()

          @endphp
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

              echo do_shortcode('[gravityform id="4" title="false"]');

            @endphp
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
