import jQuery from 'jquery';

function init() {
    (function($) {
        const stars    = $('.star');
        const whatWeDo = $('.what-we-do');
        const popup    = $('.stars-content');
        const closeBtn = $('.stars-content-panel .close-btn');

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
    })(jQuery)
    
}

export default {
    init: init
}