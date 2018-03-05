import jQuery from 'jquery';
import Cycle from 'jquery.cycle2';
import browserCheck from './browserCheck';

const ACCESS_TOKEN = "183277518.34121a6.a34287018fb5491cb13e92fdeff785d1";
const INSTAGRAM_API = "https://api.instagram.com/v1/";
let instagramCount = 0;

function init() {
    (function($) {
        console.log("Initalising Cycle...");

        $.ajax({
            url: INSTAGRAM_API + "users/self/media/recent/?access_token=" + ACCESS_TOKEN,
            success: function(data) {
                populateInstaImages(data);
            },
            error: function(err) {
                console.log(err);
            }
        })

        function populateInstaImages(data) {
            const INSTA_CONTAINER = $('.insta-container');
            const SLIDESHOWS = $('.slideshow');

            const IS_MOBILE = browserCheck.isMobile();

            

            INSTA_CONTAINER.each(function(index) {

                if (!IS_MOBILE) {
                    let instaCount = $(this).data('insta-count');

                    for (let i = 0; i < instaCount; i++) {

                        const IMG_SOURCE = data['data'][instagramCount]['images']['standard_resolution']['url'];
        

                        $(INSTA_CONTAINER[index]).append('<img src="' + IMG_SOURCE + '" alt="" />');
        
                        instagramCount++;
        
                        if (instagramCount == 21) {
                            instagramCount = 0;
                        }
                    }
                } else {

                    const IMG_SOURCE = data['data'][instagramCount]['images']['standard_resolution']['url'];

                    $(this).html('<img src="' + IMG_SOURCE + '" alt="" />');

                    instagramCount++;
                }
            })

            if (!browserCheck.isMobile()) {
                SLIDESHOWS.each(function(i) {
                    const CYCLE_SPEED = Math.floor(Math.random() * 6000) + 1000 
                    $(this).cycle({
                        fx: 'none',
                        speed: CYCLE_SPEED
                    });
                })
            }

            
            // const INSTA_IMAGES = $('.insta-img');
            // const IMG_LENGTH = INSTA_IMAGES.length;

            // for (let i = 0; i < IMG_LENGTH; i++) {
            //     INSTA_IMAGES[i].src = data['data'][i]['images']['standard_resolution']['url'];
            // }
        }
    })(jQuery)
}

export default {
    init: init
}