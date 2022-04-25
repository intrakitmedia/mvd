@php
$image = get_the_post_thumbnail_url($video->ID) ?? null;
$image = (isset($image)) ?? "https://img.youtube.com/vi/$youtube_id/maxresdefault.jpg";
@endphp

<div data-field="{{$youtube_id}}" class="s-vid">
    <div class="s-vid-inner">
        <div class="video-img-container video-container video-thumbnail"
             style="background-image: url('{{$image}}');
                     background-size: 103%;
                     background-position: -2px;">
            <div class="abso-bg"></div>
            <div class="player-button-container">
                <div class="player-button">
                    <svg aria-hidden="true" focusable="false">
                        <use xlink:href="#plyr-play"></use>
                    </svg>
                </div>
            </div>

        </div>
    </div>
</div>
