{{--<div class="utility">--}}
{{--<ul>--}}
{{--<li>Facebook</li>--}}
{{--<li>Twitter</li>--}}
{{--<li>Instagram</li>--}}
{{--<li>206-605-8551</li>--}}
{{--</ul>--}}
{{--</div>--}}

<header class="header-banner">
    <div class="container">
        <div class="header-inner xs:py-2 sm:py-1 lg:py-0">
            <a class="brand" href="{{ home_url('/') }}">
                <img width="250" src="@asset('images/multivision-digital-video-production-logo-trans.png')" alt="Multivision
    Digital
    Production Logo"/>
            </a>

            @if (has_nav_menu('primary_navigation'))
                <div id="menuToggle" class="primary-menu-wrapper">

                    <div class="ham-wrapper sm:block lg:hidden">
                        <input id="mobile-navi" type="checkbox"/>

                        <!--
                        Some spans to act as a hamburger.

                        They are acting like a real hamburger,
                        not that McDonalds stuff.
                        -->
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div id="main-navi-wrapper">
                    <div id="main-navi"  class="nav-wrapper">
                        <nav class="nav-primary sm:hidden lg:block"
                             aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'desktop-nav',
                            'echo'
                             => false]) !!}
                        </nav>
                    </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</header>
