// import animations from 'create-keyframe-animation';

import {TweenMax, Power2, TimelineMax} from "gsap";


function init(){

	var options = {
		delay: 2,
		paused: false,
		repeat: -1,
		repeatDelay: 1,
		onComplete: animationEnded
	}

	const phone = document.querySelector('.website-scroll');
	const scrollAmount = 500;
	let yVal = phone.clientHeight - scrollAmount;
	let amountOfScrolls = yVal / scrollAmount;

	// const tl = new TimelineMax({options});
	const tl = new TimelineMax({repeat:-1, repeatDelay:1, yoyo:true});


	for (var i = amountOfScrolls - 1; i >= 0; i--) {
		tl.add( TweenLite.to(phone, 2, {ease: Power2.easeInOut, top: '-=' + scrollAmount}) );
	}


	// const yVal = document.querySelector('.website-scroll').clientHeight;
	// const yDelta = document.querySelector('.phone-anim-phone').clientHeight;
	// const duration = yVal*20;
	// let newPos = -100;
	// console.log(duration);

	// animations.registerAnimation({
	// 	name: 'moveUp',
	//   	// the array of animation changes
	//   	animation: [
	// 		[0,0],
	// 		[0, newPos]
	// 		// [0, -(yVal - yDelta)],
	// 		// [0, 0],
	//   	],
	//   	// optional presets for when running the animation
	//   	presets: {
	// 		// duration:duration,
	// 		duration 	: 5,
	//     	easing		: 'linear',
	//     	delay		: 500,
	//     	iterations	: 1,
	//   	}
	// });

	// // then run the animation
	// const el = document.querySelector('.website-scroll');
	// // animations.runAnimation(el, 'move', animFinished);
	// animations.runAnimation(el, 'moveUp')
	// .then(function () {
	// 	newPos -= 100;
	// 	return animations(el, 'moveUp');
	// })
	// .then(function () {
	// 	newPos -= 100;
	// 	return animations(el, 'moveUp');
	// })
	// .then(function () {
	// 	newPos -= 100;
	// 	return animations(el, 'moveUp');
	// })
	// .then(function () {
	// 	newPos -= 100;
	// 	return animations(el, 'moveUp');
	// })
	// .catch(function (err) {
	// 	console.error(err)
	// })

	// function animFinished(){
	// 	console.log('animation ended');
	// }
}

function animationEnded(){
	console.log('go back now please');
}

module.exports = {
	init : init
};
