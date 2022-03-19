{{--
  Template Name: Blog
--}}


@extends('layouts.app')


@section('content')

    <section class="small page-header">
        <div class="container">
            <div class="row center">
                <div class="page-header-title blog-page-header text-center">
                    <h1>{{$title}}</h1>
                    <h2>Insights and Updates from our expert team</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-banner small">
        <div class="container">
            <div class="row blog-card">
                <div class="two-col">
                    <div class="blog-card-image-wapper">
                        <div class="blog-featured-image"
                             style="background: url(@asset('images/remote-vid-cap.jpg')); background-size:cover;">
                        </div>
                    </div>
                </div>
                <div class="two-col">
                    <div class="blog-content-card top-news">
                        <div class="blog-roll-header blog-card-row">
                            <div class="blog-roll-cats blog-card-row">
                                <a class="cat pinned">Top News</a>
                                <a class="cat">Content Marketing</a>
                            </div>
                            <div class="blog-roll-title">
                                <h3><a href="">Remote Video Production: An Affordable, High-Quality Solution</a></h3>
                            </div>
                        </div>
                        <div class="blog-roll-body blog-card-row">
                            <p>NYC Video production services often come with a hefty price tag. Granted, the investment
                                is worth it when the outcome is lucrative, but at certain times there are more
                                efficient…</p>
                        </div>
                        <div class="blog-roll-author blog-card-row">
                            <div class="pic">
                                <div class="pic-inner"
                                     style="background: url(@asset('images/author.jpg'));background-size:cover;"></div>
                            </div>
                            <div class="meta">
                                <div class="author-name"><p>Robert Weiss</p></div>
                                <div class="date"><p>February 2022</p></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="blog-articles small">
        <div class="container">
            <div class="row block">
                <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-4">
                    <div class="blog-card">
                        <div class="blog-card-image-wapper blog-card-row">
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/remote-vid-cap.jpg')); background-size:cover;">
                            </div>
                        </div>
                        <div class="blog-content-card top-news blog-card-row">
                            <div class="blog-roll-header blog-card-row">
                                <div class="blog-roll-cats blog-card-row">
                                    <a class="cat">Video Marketing Toolbox</a>
                                </div>
                                <div class="blog-roll-title">
                                    <h3><a href="">Remote Video Production: An Affordable, High-Quality Solution</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-roll-body blog-card-row">
                                <p>NYC Video production services often come with a hefty price tag. Granted, the
                                    investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient…</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                <div class="pic">
                                    <div class="pic-inner" style="background: url(@asset('images/author.jpg'));
                                background-size:cover;"></div>
                                </div>
                                <div class="meta">
                                    <div class="author-name"><p>Robert Weiss</p></div>
                                    <div class="date"><p>February 2022</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-card-image-wapper blog-card-row">
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/remote-vid-cap.jpg')); background-size:cover;">
                            </div>
                        </div>
                        <div class="blog-content-card top-news blog-card-row">
                            <div class="blog-roll-header blog-card-row">
                                <div class="blog-roll-cats blog-card-row">
                                    <a class="cat">Video Marketing Toolbox</a>
                                </div>
                                <div class="blog-roll-title">
                                    <h3><a href="">Remote Video Production: An Affordable, High-Quality Solution</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-roll-body blog-card-row">
                                <p>NYC Video production services often come with a hefty price tag. Granted, the
                                    investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient…</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                <div class="pic">
                                    <div class="pic-inner" style="background: url(@asset('images/author.jpg'));
                                background-size:cover;"></div>
                                </div>
                                <div class="meta">
                                    <div class="author-name"><p>Robert Weiss</p></div>
                                    <div class="date"><p>February 2022</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-card-image-wapper blog-card-row">
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/remote-vid-cap.jpg')); background-size:cover;">
                            </div>
                        </div>
                        <div class="blog-content-card top-news blog-card-row">
                            <div class="blog-roll-header blog-card-row">
                                <div class="blog-roll-cats blog-card-row">
                                    <a class="cat">Video Marketing Toolbox</a>
                                </div>
                                <div class="blog-roll-title">
                                    <h3><a href="">Remote Video Production: An Affordable, High-Quality Solution</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-roll-body blog-card-row">
                                <p>NYC Video production services often come with a hefty price tag. Granted, the
                                    investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient…</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                <div class="pic">
                                    <div class="pic-inner" style="background: url(@asset('images/author.jpg'));
                                background-size:cover;"></div>
                                </div>
                                <div class="meta">
                                    <div class="author-name"><p>Robert Weiss</p></div>
                                    <div class="date"><p>February 2022</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-card-image-wapper blog-card-row">
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/remote-vid-cap.jpg')); background-size:cover;">
                            </div>
                        </div>
                        <div class="blog-content-card top-news blog-card-row">
                            <div class="blog-roll-header blog-card-row">
                                <div class="blog-roll-cats blog-card-row">
                                    <a class="cat">Video Marketing Toolbox</a>
                                </div>
                                <div class="blog-roll-title">
                                    <h3><a href="">Remote Video Production: An Affordable, High-Quality Solution</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-roll-body blog-card-row">
                                <p>NYC Video production services often come with a hefty price tag. Granted, the
                                    investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient…</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                <div class="pic">
                                    <div class="pic-inner" style="background: url(@asset('images/author.jpg'));
                                background-size:cover;"></div>
                                </div>
                                <div class="meta">
                                    <div class="author-name"><p>Robert Weiss</p></div>
                                    <div class="date"><p>February 2022</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-card-image-wapper blog-card-row">
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/remote-vid-cap.jpg')); background-size:cover;">
                            </div>
                        </div>
                        <div class="blog-content-card top-news blog-card-row">
                            <div class="blog-roll-header blog-card-row">
                                <div class="blog-roll-cats blog-card-row">
                                    <a class="cat">Video Marketing Toolbox</a>
                                </div>
                                <div class="blog-roll-title">
                                    <h3><a href="">Remote Video Production: An Affordable, High-Quality Solution</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-roll-body blog-card-row">
                                <p>NYC Video production services often come with a hefty price tag. Granted, the
                                    investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient…</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                <div class="pic">
                                    <div class="pic-inner" style="background: url(@asset('images/author.jpg'));
                                background-size:cover;"></div>
                                </div>
                                <div class="meta">
                                    <div class="author-name"><p>Robert Weiss</p></div>
                                    <div class="date"><p>February 2022</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog-card-image-wapper blog-card-row">
                            <div class="blog-featured-image"
                                 style="background: url(@asset('images/remote-vid-cap.jpg')); background-size:cover;">
                            </div>
                        </div>
                        <div class="blog-content-card top-news blog-card-row">
                            <div class="blog-roll-header blog-card-row">
                                <div class="blog-roll-cats blog-card-row">
                                    <a class="cat">Video Marketing Toolbox</a>
                                </div>
                                <div class="blog-roll-title">
                                    <h3><a href="">Remote Video Production: An Affordable, High-Quality Solution</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="blog-roll-body blog-card-row">
                                <p>NYC Video production services often come with a hefty price tag. Granted, the
                                    investment
                                    is worth it when the outcome is lucrative, but at certain times there are more
                                    efficient…</p>
                            </div>
                            <div class="blog-roll-author blog-card-row">
                                <div class="pic">
                                    <div class="pic-inner" style="background: url(@asset('images/author.jpg'));
                                background-size:cover;"></div>
                                </div>
                                <div class="meta">
                                    <div class="author-name"><p>Robert Weiss</p></div>
                                    <div class="date"><p>February 2022</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
