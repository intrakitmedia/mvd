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
});

/**
 * Accept module updates
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
import.meta.webpackHot?.accept(console.error);
