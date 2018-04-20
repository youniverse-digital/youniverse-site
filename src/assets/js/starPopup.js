import jQuery from 'jquery';
import ScrollMagic from 'scrollmagic';

function init() {
    (function($) {
        const stars    = $('.star');
        const whatWeDo = $('.what-we-do');
        const popup    = $('.stars-content');
        const closeBtn = $('.stars-content-panel .close-btn');
        const controller = new ScrollMagic.Controller();

        closeBtn.on('click', function(e) {
            whatWeDo.removeClass('stars-open');
        })

        stars.each(function(i) {
            let star = $(this);
            let starInfo = star.find('ul').html();
            let starName = star.find('.star-name').html();
            let popupName = popup.find('.popup-name');
            let popupData = popup.find('.stars-list');

            star.on('click', function() {
                popupName.html(starName);
                popupData.html(starInfo);
                whatWeDo.addClass('stars-open');
            })
        })

        const starReveal = new ScrollMagic.Scene({
            triggerElement: '.star',
            triggerHook: 1,
            duration: '100%'
        })
        .on('start', function() {
            let images = $('.star-img');

            images.each(function(i) {
                let image = $(this);
                setTimeout(function() {
                   image.addClass('animated');
                }, 200 * i)
            })
        })
        .addTo(controller);


    })(jQuery)
    
}

export default {
    init: init
}