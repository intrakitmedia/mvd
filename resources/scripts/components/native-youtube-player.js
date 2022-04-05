import $ from "jquery";
import YouTubePlayer from 'youtube-player'

export default class Video {
    player;

    constructor() {
        if ($('#youtube_video_source').length) {
            this.player = YouTubePlayer('youtube_video_source', {
                height: '100%',
                width: '100%',
                videoId: '',
                playerVars: {'controls': 1, 'theme': 'light', 'showinfo': 0, 'rel': 0},
            });

            this.loadById();

            this.player.on('ready', (event) => {
                $('.bg-shadow-video').on('click', function () {
                    event.target.pauseVideo();
                    $('.video-modal').removeClass('active');
                });
            });

            this.player.playVideo();

            this.player.on('stateChange', (event) => {
                if (event.data === 0) {
                    $('.video-modal').addClass('active');
                }
            });


            this.loadById();

            this.player.on('ready', (event) => {
                $('.reveal-overlay').on('click', function () {
                    event.target.pauseVideo();
                    $('.video-modal').removeClass('active');
                });
            });

            this.player.playVideo();

            this.player.on('stateChange', (event) => {
                if (event.data === 0) {
                    $('.video-modal').removeClass('active');
                }
            });
        }
    }

    loadById(){
        let self = this;

        $('.s-vid').on('click', function(e){
            e.preventDefault();
            let videoId = $(this).attr('data-field');
            $('.video-modal').addClass('active');
            self.player.loadVideoById({'videoId': videoId, 'startSeconds': 0});
        });

        $('.s-vid-link').on('click', function(e){
            e.preventDefault();
            let videoId = $(this).attr('data-field');
            $('.video-modal').addClass('active');
            self.player.loadVideoById({'videoId': videoId, 'startSeconds': 0});
        });
    }
}


