import './scss/main.scss';
import team from './js/team.js';
import slider from './js/slider.js';
import menu from './js/menu.js';
import headerAnim from './js/headerAnimation.js';
import animations from 'create-keyframe-animation';


window.onload = function(){
	menu.init();

	if(document.querySelector('.team-panel')){
		team.init();
	}

	if(document.querySelector('.work-slider')){
		slider.init();
	}

	if(document.querySelector('.animating-header')){
		headerAnim.init();
	}

	// var animations = require('create-keyframe-animation')
	const yVal = document.querySelector('.website-scroll').clientHeight;
	const yDelta = document.querySelector('.phone-anim-phone').clientHeight;
	// this creates the animation above
	animations.registerAnimation({
	  name: 'move',
	  // the actual array of animation changes
	  animation: [
		[0,0], 
		[0, -(yVal - yDelta)]
	  ],
	  // optional presets for when actually running the animation
	  presets: {
	    duration: 1000,
	    easing: 'linear',
	    delay: 500,
	    resetWhenDone: true
	  }
	})

	// then run it
	const el = document.querySelector('.website-scroll');

	animations.runAnimation(el, 'move', startAnim);

	function startAnim(){
		el.style.transform = '';
		el.style.animation = '';
		// animations.runAnimation(el, 'move', startAnim);
	}

	const pageLinks = document.querySelectorAll('.pageLink');

	pageLinks.forEach(function(link){
		link.addEventListener('click', goToPage, {passive : false});
	});

	function goToPage(e){
		window.location.href = e.target.dataset.location + '.html';
	}
}
