@extends('layouts.app')


@section('content')
    <section class="main-article-content">
        <div class="container">
            <div class="row">
                <div class="large-col">
                    <article class="aside">
                        <div class="article-header article-row ">
                            <div class="article-cats article-row">
                                <a class="cat " href="#">Animated Explainer</a>
                                <a class="cat" href="#">B2B</a>
                                <a class="cat" href="#">Video Marketing</a>
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
                            <img src="@asset('images/case-study-1.jpg')" alt="" />
                        </div>
                        <div class="article-body">
                            <div class="article-body-inner">
                                <p>A good director will do more than properly setting up the camera, light, and objects
                                    within the frame. They will be able to bring out the best possible performance from the subjects, giving thoughtful and experience-backed critiques in between takes, ensuring that you look your best.

                                <h3>Effective Editing Services</h3>

                                <p>Without an educated and knowledgeable editor, scenes would not flow seamlessly, and important messages would not be emphasized effectively. The goal of an editor is to utilize the footage accumulated and structure it in a way that maintains relevance to your message—while keeping your audience engaged. After all, there’s a reason you chose a visual medium to market your product/service rather than producing a radio ad.
                                <p>Through a visual medium, audiences become engaged with your content and are much more likely to receive your message through attention-grabbing editing techniques. Editors utilize industry-standard editing software that allows for seamless scene transition and a visual structure that follows the script’s timeline. Through expert practices, efficient methods, and professional editing techniques, an editor can be the difference between professional and sloppy.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="small-col">
                    <div class="sidebar">
                        <div class="quick-quote">
                            <div class="quick-quote-wrapper">
                                <div class="quick-quote-inner">
                                    <div class="quick-quote-title">
                                        <h4 class="header-tag">Quick Quote</h4>
                                        <p>Ask about our special low-investment remote video production services</p>
                                    </div>
                                    <form>
                                        <div class="form-row">
                                            <label id="quick-name"><p>Name <span class="required">*</span></p>
                                                <input type="text" placeholder="Jane Doe" value="" id="quick-quote-name">
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label id="quick-name"><p>Phone <span class="required">*</span></p>
                                                <input type="text" placeholder="555-555-555" value="" id="quick-quote-name">
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <label id="quick-name"><p>Email <span class="required">*</span></p>
                                                <input type="text" placeholder="hello@example.com" value=""
                                                       id="quick-quote-name">
                                            </label>
                                        </div>
                                        <div class="form-row last">
                                            <label id="quick-name"><p>Company <span class="required">*</span></p>
                                                <input type="text" placeholder="Company Name" value=""
                                                       id="quick-quote-name">
                                            </label>
                                        </div>
                                        <div class="form-row">
                                            <button class="quick-quote-button">REQUEST A QUOTE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
