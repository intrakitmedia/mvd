{{--
  Template Name: Our Team
--}}


@extends('layouts.app')


@section('content')

    <section class="services-banner the-page-header section-alt">
        <div class="container">
            <div class="small-row">
                {{--<span class="header-tag">{!! $page_tag !!}</span>--}}
                <div class="services-header text-center">
                    <h1 class="services-header-title">{!! $title !!}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="the-content">
        <div class="container">
            <div class="row">
                <article>
                    {!! the_content() !!}
                </article>
            </div>


    @php

        if( have_rows('team_members') ):

        @endphp

                <div class="row wrap">

                    @php

                        // Loop through rows.
                        while ( have_rows('team_members') ) : the_row();
                            // Case: Paragraph layout.
                            if( get_row_layout() == 'team_member' ):
                                $name = get_sub_field('name');
                                $title = get_sub_field('title');
                                $bio = get_sub_field('bio');
                                $picture_url = get_sub_field('picture')['url'];
                            endif;

                @endphp
                @if($name && $title && $bio && $picture_url)
                    <div class="team-member">
                    <div class="team-member-content">
   <div class="team-member-name shout-out-sig">
                            <span class="team-member-name-name shout-out-name">{{$name}}</span>
                            <span class="team-member-title shout-out-co">{{$title}}
                            </span>
                        </div>
                        <div class="team-member-bio">
                            {!! $bio !!}
                        </div>

                    </div>
                    @if($picture_url)
                    <div class="team-member-photo">
                        <img width="400"  src="{{$picture_url}}" alt="Robert Weiss Bio" />
                    </div>
                    @endif
                </div>
                    @endif

                @php
                 endwhile;


                @endphp
            </div>

            @php

                endif;
            @endphp
        </div>
    </section>


@endsection
