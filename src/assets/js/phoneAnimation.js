import animations from 'create-keyframe-animation';

function init(){
	const yVal = document.querySelector('.website-scroll').clientHeight;
	const yDelta = document.querySelector('.phone-anim-phone').clientHeight;

	animations.registerAnimation({
		name: 'move',
	  	// the actual array of animation changes
	  	animation: [
			[0,0],
			[0, -(yVal - yDelta)],
			[0, 0],
	  	],
	  	// optional presets for when actually running the animation
	  	presets: {
			duration: 30000,
	    	easing: 'linear',
	    	delay: 500,
	    	iterations: 100,
	  	}
	});

	// then run it
	const el = document.querySelector('.website-scroll');

	animations.runAnimation(el, 'move', animFinished);

	function animFinished(){
		// el.style.transform = '';
		// el.style.animation = '';
	}
}

module.exports = {
	init : init
};
