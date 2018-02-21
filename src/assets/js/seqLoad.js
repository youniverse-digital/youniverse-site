import jQuery from 'jquery';
import ScrollMagic from 'scrollmagic';

let teamImagesLoaded = false;
let workItemsLoaded  = false;

const scrollController = new ScrollMagic.Controller();

function init() {
    (function($) {
        const teamImageSection = $('.team-images');
        const teamImages       = $('.team-images img');
        const workItems        = $('.work-item');

        function showTeamImages() {
            if (!teamImagesLoaded) {
                teamImages.each(function(i) {
                    let item = $(this);
                    setTimeout(function() {
                        item.css('opacity', '1');
                    }, i * 450);
                    teamImagesLoaded = true;
                })
            }
        }

        function showWorkItems() {
            if (!workItemsLoaded) {
                workItems.each(function(i) {
                    let item = $(this);
                    setTimeout(function() {
                        item.css('opacity', '1');
                    }, i * 300);
                })
            }
        }
        

        const teamImagesScrollDetection = new ScrollMagic.Scene({
            triggerElement: '.team-images',
            triggerHook: 1,
            duration: '100%'
        })
        .on('enter', showTeamImages)
        .addTo(scrollController);

        const workItemScrollDetection = new ScrollMagic.Scene({
            triggerElement: '.work-item',
            triggerHook: 1,
            duration: '100%'
        })
        .on('enter', showWorkItems)
        .addTo(scrollController);

    })(jQuery);
}

export default {
    init: init
}