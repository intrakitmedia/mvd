import {domReady} from '@scripts/components';
import $ from "jquery";
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'


/**
 * Run the application when the DOM is ready.
 */
domReady(() => {
    library.add(fas);
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
        }
    })



    $(window).on('resize', function () {
        let $win = $(this);
        console.log($win.width());

        if ( window.matchMedia('(max-width: 1119px)').matches ) {
            $('.nav-wrapper').addClass('is-mobile');
        } else {
            $('.nav-wrapper').removeClass('is-mobile');
            $('.nav-wrapper').removeClass('mobile-open');
            $('#main-navi-wrapper').removeClass('sh-overlay');
            $('#mobile-navi').prop('checked', false);
        }
    })

    $('.s-vid').on('click', function (e) {
        e.preventDefault();
        let id = $(this).attr('data-field');

        if(id) {
            $('.video-iframe').html('');
            $('<iframe width="420" height="315" frameborder="0" allowfullscreen></iframe>')
                .attr("src", id)
                .appendTo(".video-iframe");
            $('.video-modal').addClass('active');
        }

        console.log(id);
    });

    $('#ex-out').on('click', function (e) {
        e.preventDefault();

        $('.video-modal').removeClass('active');

    })

    $('#main-navi-wrapper').on('click', '.is-mobile.mobile-open .menu-item-has-children a', function (e) {
        alert('work in progress')
        e.preventDefault();
        console.log('hello');
    })
});

/**
 * Accept module updates
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
import.meta.webpackHot?.accept(console.error);
