import jQuery from 'jquery';
import Cycle from 'jquery.cycle2';
import browserCheck from './browserCheck';

const ACCESS_TOKEN = "183277518.34121a6.a34287018fb5491cb13e92fdeff785d1";
const INSTAGRAM_API = "https://api.instagram.com/v1/";
let instagramCount = 0;

function init() {
    (function($) {
        console.log("Initalising Cycle...");

        function populateInstaImages(data) {
            const INSTA_CONTAINER = $('.insta-container');
            const SLIDESHOWS = $('.slideshow');

            const IS_MOBILE = browserCheck.isMobile();

            if (!browserCheck.isMobile()) {
                SLIDESHOWS.each(function(i) {
                    const CYCLE_SPEED = Math.floor(Math.random() * 6000) + 1000 
                    $(this).cycle({
                        fx: 'none',
                        speed: CYCLE_SPEED
                    });
                })
            }
        }

        populateInstaImages();
    })(jQuery)
}

export default {
    init: init
}