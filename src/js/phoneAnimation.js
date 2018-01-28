function init(){
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
	});

	// then run it
	const el = document.querySelector('.website-scroll');

	animations.runAnimation(el, 'move', startAnim);

	function startAnim(){
		el.style.transform = '';
		el.style.animation = '';
		// animations.runAnimation(el, 'move', startAnim);
	}
}

module.exports = {
	init : init
};