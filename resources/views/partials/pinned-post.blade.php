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
                            efficient…</p>
                    </div>
                    <div class="blog-roll-author blog-card-row">
                        @php
                            $author_display_name = get_the_author_meta('display_name', $pinned_post->post_author);
                            $nickname = get_the_author_meta('nickname', $pinned_post->post_author);
                            $avatar = get_avatar_url($pinned_post->post_author);
                            $post_date = date('F d Y', strtotime($pinned_post->post_date) );
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
        </div>
    </div>
</section>
