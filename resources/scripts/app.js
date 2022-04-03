import {domReady} from '@scripts/components';
import $ from "jquery";
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import Video from "./components/native-youtube-player";
import Splide from '@splidejs/splide';


/**
 * Run the application when the DOM is ready.
 */
domReady(() => {
    library.add(fas);
    new Splide( '.splide', {
        arrows: false,
        autoplay: true,
        intersection: false,
    } ).mount();

    // Application code
    if(window.matchMedia('(max-width: 1119px)').matches) {
        $('.nav-wrapper').addClass('is-mobile')
    }

    $('#mobile-navi').on('click', function () {
        let $mainNav = $('#main-navi');
        if ( ! $mainNav.hasClass('mobile-open') ) {
            $('#main-navi').addClass('mobile-open');
            $('#main-navi-wrapper').addClass('sh-overlay');
        }  else {
            $('#main-navi').removeClass('mobile-open');
            $('#main-navi-wrapper').removeClass('sh-overlay');
            $('#main-navi').removeClass('mobile-sub-open');
        }
    })



    $(window).on('resize', function () {
        if ( window.matchMedia('(max-width: 1119px)').matches ) {
            $('.nav-wrapper').addClass('is-mobile');
        } else {
            $('.mega-menu').removeClass('.mobile-open');
            $('.nav-wrapper').removeClass('is-mobile');
            $('.nav-wrapper').removeClass('mobile-open');
            $('#main-navi-wrapper').removeClass('sh-overlay');
            $('#mobile-navi').prop('checked', false);
        }
    })

    // $('.s-vid').on('click', function (e) {
    //     e.preventDefault();
    //     let id = $(this).attr('data-field');
    //
    //     if(id) {
    //         $('.video-iframe').html('');
    //         $('<iframe width="420" height="315" frameborder="0" allowfullscreen></iframe>')
    //             .attr("src", id)
    //             .appendTo(".video-iframe");
    //         $('.video-modal').addClass('active');
    //     }
    // });

    // $('#ex-out').on('click', function (e) {
    //     e.preventDefault();
    //
    //     $('.video-modal').removeClass('active');
    //
    // });

    $(".mega-menu").mouseenter(function() {
            $(this).css('display', 'block');
    }).mouseleave(function(){
        $(".mega-menu").css('display', '');
    });

    $('#main-navi-wrapper').on('click', '.is-mobile.mobile-open ul#menu-primary-navigation >' +
        ' li.menu-item-has-children > a, .is-mobile.mobile-open ul#menu-primary-navigation > li.menu-item-has-children > i', function (e) {
        e.preventDefault();

        let $megaMenu = $(this).siblings('.mega-menu');

        $megaMenu.toggleClass('mobile-open');
    })

    new Video();
});

/**
 * Accept module updates
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
import.meta.webpackHot?.accept(console.error);
