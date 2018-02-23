import jQuery from 'jquery';

function init() {
    (function($) {
        var aboutCircle = $('.about-lead-circle');
        var howCircles  = $('.how-circle');

        if (aboutCircle) {
            aboutCircle.innerHeight(aboutCircle.innerWidth());
        }

        if (howCircles) {
            howCircles.each(function(i) {
                var circle = $(this);
                circle.innerHeight(circle.innerWidth());
            })
        }

    })(jQuery);
}

export default {
    init: init
}