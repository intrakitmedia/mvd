@extends('layouts.app')


@section('content')
<section class="main-article-content">
    <div class="container">
        <div class="row">
            <div class="large-col">
                <article class="aside">
                    <div class="article-header article-row ">
                        <div class="article-cats article-row">
                            <a class="cat pinned " href="#">Top News</a>
                            <a class="cat" href="#">Online Video Marketing</a>
                        </div>
                        <div class="article-title article-row ">
                            <h1>Remote Video Production: An Affordable, High-Quality Solution</h1>
                        </div>
                        <div class="article-meta article-row-2">
                            <div class="post-meta article-author">
                                <div class="pic article-pic">
                                    <div class="pic-inner article-pic-inner" style="background: url(@asset('images/author.jpg')); background-size: cover;">

                                    </div>
                                </div>
                                <div class="meta article-data">
                                    <div class="author-name"><p>Robert Weiss</p></div>
                                    <div class="date"><p>February 20, 2022</p></div>
                                </div>
                            </div>
                            <div class="post-social">
                                <div class="blurb"><p>Share on</p></div>
                                <div class="links">
                                    <ul>
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-featured-image">
                        <img src="@asset('images/remote-vid-cap.jpg')" alt="" />
                    </div>
                    <div class="article-body">
                        <div class="article-body-inner">
                            <p>A good director will do more than properly setting up the camera, light, and objects
                               within the frame. They will be able to bring out the best possible performance from the subjects, giving thoughtful and experience-backed critiques in between takes, ensuring that you look your best.

                            <h3>Effective Editing Services</h3>

                            <p>Without an educated and knowledgeable editor, scenes would not flow seamlessly, and important messages would not be emphasized effectively. The goal of an editor is to utilize the footage accumulated and structure it in a way that maintains relevance to your message—while keeping your audience engaged. After all, there’s a reason you chose a visual medium to market your product/service rather than producing a radio ad.
                            <p>Through a visual medium, audiences become engaged with your content and are much more likely to receive your message through attention-grabbing editing techniques. Editors utilize industry-standard editing software that allows for seamless scene transition and a visual structure that follows the script’s timeline. Through expert practices, efficient methods, and professional editing techniques, an editor can be the difference between professional and sloppy.</p>

                            <h2>Effective Editing Services</h2>
                        </div>
                    </div>
                </article>
            </div>
            <div class="small-col">
                <div class="sidebar">
                    <div class="magnet-bar"><div class="peak">
                            <div class="lead-in left alt">
                                <div class="peak-card">
                                    <div class="peak-card-top" style="background: url(@asset('images/video-production-lights-center.jpg'));
                    background-position: center center;">
                                        <div class="peak-card-bg"></div>
                                        <div class="peak-card-title">
                                            <span>12</span>
                                            <h3>Tips for Making Your Videos Look More Professional</h3>
                                        </div>
                                    </div>

                                    <div class="peak-card-logo"><img
                                                src="@asset('images/multivision-digital-video-production-logo-trans.png')"
                                                alt="Multivision Digitial Logo"/></div>
                                </div>
                            </div>
                            <div class="lead-in-right">
                                <div class="wide-form">
                                    <h2 class="preheader">Download Free PDF</h2>
                                    <h3 class="follow-up smaller">Nothing comes close to the effectiveness of a well designed video
                                        communications
                                        project.</h3>
                                    <p>Improve your search engine rankings by driving and keeeping traffic on your site and
                                        generate quality leads with professional video</p>
                                    <form>
                                        <div class="form-row">
                                            <label class="two-col even-space" id="wide-form-first-name-label">
                                                <input id="peak-email" type="email" value="" placeholder="Enter Email Address"
                                                       required/>
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <button class="call-to-action" id="wide-form-submit">Download</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div></div>
                    <div class="post-roll">
                        <div class="post-roll-wrapper">
                            <div class="post-roll-inner">
                                <h3 class="header-tag center">Latest</h3>
                                <div class="post-roll-post">
                                    <div class="post-roll-image">
                                        <img src="@asset('images/remote-video-capture-client.jpg')" alt="Remote Video Capture
                            Client"/>
                                    </div>
                                    <div class="post-roll-header">
                                        <div class="post-roll-title">
                                            <a href="#">Video Marketing</a>
                                        </div>
                                        <div class="post-date">
                                            <p>Feburary 2022, 2022</p>
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
                                            <a href="#">Video Marketing</a>
                                        </div>
                                        <div class="post-date">
                                            <p>Feburary 2022, 2022</p>
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
                                            <a href="#">Video Marketing</a>
                                        </div>
                                        <div class="post-date">
                                            <p>Feburary 2022, 2022</p>
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

    <section class="blog-articles section-alt">
        <div class="container">
            <div class="row center">
                <h2>You might like these too</h2>
            </div>
            <div class="row block">
                <div class="related-posts grid sm:grid-cols-1 lg:grid-cols-3 gap-4">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
