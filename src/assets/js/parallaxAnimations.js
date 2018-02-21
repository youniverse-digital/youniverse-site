import jQuery from 'jquery';
import ScrollMagic from 'scrollmagic'
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';   
import TweenMax from 'gsap';
import TimelineMax from 'gsap';

// import ScrollMagic from 'scrollmagic/scrollmagic/uncompressed/ScrollMagic';  
// import 'scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';  
// import 'scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators';  
// import TweenMax from 'gsap/src/uncompressed/TweenMax';  
// import TimelineMax from 'gsap/src/uncompressed/TimelineMax';

function init() {

    const controller = new ScrollMagic.Controller();

    (function($) {
        const header = $('.header');
        const bg_image  = $('.header .bg-image');
    
        const bannerParallax = new ScrollMagic.Scene({
            triggerElement: header,
            triggerHook: 1,
            duration: '100%'
        })
        .setTween(TweenMax.from(bg_image, 1, {y: '-23%', ease: Power0.easeNone}))
        .addTo(controller);

    })(jQuery)
}



export default {
    init: init
}