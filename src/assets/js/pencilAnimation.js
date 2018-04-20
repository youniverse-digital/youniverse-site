import jQuery from 'jquery'
import ScrollMagic from 'scrollmagic';

function init() {
    (function($) {
        const pencilLine = $('.how-we-do .cls-4');
        const pencil = $('.pencil-dash')
        const controller = new ScrollMagic.Controller();

        const pencilAnimation = new ScrollMagic.Scene({
            triggerElement: '.how-we-do',
            triggerHook: 0.5,
            duration: '100%'
        })
        .on('start', function() {
            pencilLine.addClass('animated');
            pencil.addClass('animated');
        })
        .addTo(controller);

    })(jQuery)
}

export default {
    init: init
}