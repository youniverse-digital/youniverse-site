import './assets/scss/app.scss';
import team from './assets/js/team.js';
import slider from './assets/js/slider.js';
import menu from './assets/js/menu.js';
import headerAnim from './assets/js/headerAnimation.js';
import phoneAnimation from './assets/js/phoneAnimation.js';
import accordions from './assets/js/accordions.js';
import showWork from './assets/js/showWork.js';
import scrollToElement from 'scroll-to-element';

window.onload = function(){
	elementExists('.menu') && menu.init();
	elementExists('.team-panel') && team.init();
	elementExists('.work-slider') && slider.init();
	elementExists('.animating-header') && headerAnim.init();
	elementExists('.website-scroll') && phoneAnimation.init();
	elementExists('.accordion') && accordions.init();
	elementExists('.view-more-work') && showWork.init();
	const scrollLoc = getQueryVariable("location");
	if(scrollLoc){
		scrollToElement('#' + scrollLoc);
	}
};

function getQueryVariable(variable){
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

function elementExists(selector){
	return document.querySelector(selector);
}
