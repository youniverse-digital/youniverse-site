import animations from 'create-keyframe-animation';

function init(){
	const yVal = document.querySelector('.website-scroll').clientHeight;
	const yDelta = document.querySelector('.phone-anim-phone').clientHeight;
	const duration = yVal*20;
	console.log(duration);

	animations.registerAnimation({
		name: 'move',
	  	// the array of animation changes
	  	animation: [
			[0,0],
			[0, -(yVal - yDelta)],
			[0, 0],
	  	],
	  	// optional presets for when running the animation
	  	presets: {
			duration:duration ,
	    	easing: 'linear',
	    	delay: 500,
	    	iterations: 100,
	  	}
	});

	// then run the animation
	const el = document.querySelector('.website-scroll');
	animations.runAnimation(el, 'move', animFinished);

	function animFinished(){

	}
}

module.exports = {
	init : init
};
