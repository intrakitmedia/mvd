<section class="section block-services section-alt-2">
    <div class="block-services-inner">

        <div class="row center">
            <div class="lead-in">
                <h3>Explore our services for your business solutions</h3>
                <h4 class="header-alt">Cost-effective Corporate Video Production Services</h4>
            </div>
        </div>

        <div class="row wrap center">
            <div class="col-four services-block">
                <div class="services-block-inner">
                    <div class="block-flip">
                        @php
                            $page = get_page_by_title('Video Strategy', 'object', 'services');
                        @endphp

                        @if($page)
                            @php
                                $link = get_permalink($page->ID);
                            @endphp
                        @else
                            @php
                                $link = "#";
                            @endphp
                        @endif
                        <a title="{{$page->post_title}}" href="{{$link}}" class="block-link"
                           style="background: url(@asset('images/video-strategy.jpg')); background-size:
                                   cover;">
                            <div class="block-flip-inner">
                                <div class="block-content">
                                    <div class="block-header">
                                        <h4 class="initial">Video Strategy</h4>
                                    </div>
                                    <div class="block-text">
                                        <div class="block-text-inner">
                                            <h4>Video Strategy</h4>

                                            <p>Our holistic video marketing strategy lets you plan, budget and
                                                integrate all the
                                                different types video you need.</p>
                                            <p><span class="learn-more">Learn More</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-four services-block">
                <div class="services-block-inner">
                    <div class="block-flip">
                        @php
                            $page = get_page_by_title('Video Production', 'object', 'services');
                        @endphp

                        @if($page)
                            @php
                                $link = get_permalink($page->ID);
                            @endphp
                        @else
                            @php
                                $link = "#";
                            @endphp
                        @endif
                        <a title="{{$page->post_title}}" href="{{$link}}" class="block-link"
                           style="background: url(@asset('images/video-production.jpg')); background-size: cover;">
                            <div class="block-flip-inner">
                                <div class="block-content">
                                    <div class="block-header">
                                        <h4 class="initial">Video Production</h4>
                                    </div>
                                    <div class="block-text">
                                        <div class="block-text-inner">
                                            <h4>Video Production</h4>

                                            <p>Everything you need from the production skills to the
                                                marketing skills to the technical skill sets to deliver the
                                                final video product. </p>
                                            <p><span class="learn-more">Learn More</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-four services-block">
                <div class="services-block-inner">
                    <div class="block-flip">
                        @php
                            $page = get_page_by_title('Video Marketing', 'object', 'services');
                        @endphp

                        @if($page)
                            @php
                                $link = get_permalink($page->ID);
                            @endphp
                        @else
                            @php
                                $link = "#";
                            @endphp
                        @endif
                        <a title="{{$page->post_title}}" href="{{$link}}" class="block-link"
                           style="background: url(@asset('images/animation-studio.jpg')); background-size: cover;">
                            <div class="block-flip-inner">
                                <div class="block-content">
                                    <div class="block-header">
                                        <h4 class="initial">Video Marketing</h4>
                                    </div>
                                    <div class="block-text">
                                        <div class="block-text-inner">
                                            <h4>Video Marketing</h4>

                                            <p>With our Video 1st Strategy™ in place, getting qualified prospects to watch your video will ensure your ROI.						</p>
                                            <p><span class="learn-more">Learn More</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-four services-block">
                <div class="services-block-inner">
                    <div class="block-flip">
                        @php
                            $page = get_page_by_title('Animation/Motion Graphics', 'object', 'services');
                        @endphp

                        @if($page)
                            @php
                                $link = get_permalink($page->ID);
                            @endphp
                        @else
                            @php
                                $link = "#";
                            @endphp
                        @endif
                        <a title="{{$page->post_title}}" href="{{$link}}" class="block-link"
                           style="background: url(@asset('images/video-marketing.jpg')); background-size: cover;">
                            <div class="block-flip-inner">
                                <div class="block-content">
                                    <div class="block-header">
                                        <h4 class="initial">Animation</h4>
                                    </div>
                                    <div class="block-text">
                                        <div class="block-text-inner">
                                            <h4>Remote Video Production</h4>

                                            <p>Capture up to 4k video with the help of a professional director without the on-location cost.</p>
                                            <p><span class="learn-more">Learn More</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-four services-block">
                <div class="services-block-inner">
                    <div class="block-flip">
                        @php
                            $page = get_page_by_title('Remote Video Production', 'object', 'services');
                        @endphp

                        @if($page)
                            @php
                                $link = get_permalink($page->ID);
                            @endphp
                        @else
                            @php
                                $link = "#";
                            @endphp
                        @endif
                        <a title="{{$page->post_title}}" href="{{$link}}" class="block-link"
                           style="background: url(@asset('images/remote-video-capture.png'));
                                   background-size: cover;">
                            <div class="block-flip-inner">
                                <div class="block-content">
                                    <div class="block-header">
                                        <h4 class="initial">Remote Video Production</h4>
                                    </div>
                                    <div class="block-text">
                                        <div class="block-text-inner">
                                            <h4>Remote Video Production</h4>

                                            <p>Capture up to 4k video with the help of a professional director without the on-location cost..</p>
                                            <p><span class="learn-more">Learn More</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-four services-block">
                <div class="services-block-inner">
                    <div class="block-flip">
                        @php
                            $page = get_page_by_title('Live Stream & Events', 'object', 'services');
                        @endphp

                        @if($page)
                            @php
                                $link = get_permalink($page->ID);
                            @endphp
                        @else
                            @php
                                $link = "#";
                            @endphp
                        @endif
                        <a title="{{$page->post_title}}" title="Live Stream & Events" href="{{$link}}"
                           class="block-link"
                           style="background: url(@asset('images/events.jpeg'));
                                   background-size: cover;">
                            <div class="block-flip-inner">
                                <div class="block-content">
                                    <div class="block-header">
                                        <h4 class="initial">Live Stream & Events</h4>
                                    </div>
                                    <div class="block-text">
                                        <div class="block-text-inner">
                                            <h4>Live Stream & Events</h4>

                                            <p>Multiply your brand’s audience, reach, and engagement with the experience of our live streaming event video production services.</p>
                                            <p><span class="learn-more">Learn More</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div>

            </div>
        </div>

        <div class="row center">
            <div class="lead-out">
                <div class="call-to-actions-group">
                    <div class="cta-button-wrapper js-watch">
                        @php
                            $contact_us = get_page_by_title('Contact Us') ? get_page_by_title('Contact Us')
                                     : get_page_by_title('Contact');
                                      $contact_us_link = get_permalink($contact_us->ID);
                            if($contact_us_link) {
                                $link = $contact_us_link;
                            } else {
                            $link =  '#';
                            }
                        @endphp
                        <a class="call-to-action" title="Contact Us" href="{{$link}}">Contact Us</a>
                    </div>
                    <div class="cta-button-wrapper js-watch">
                        @php
                            $case_studies_link = get_post_type_archive_link('case_studies');
                                if($case_studies_link) {
                                    $link = $case_studies_link;
                                } else {
                                $link =  '#';
                                }
                        @endphp
                        <a class="call-to-action btn-alt-2" title="Case Studies" href="{{$link}}">View Customer
                            Case
                            Studies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
