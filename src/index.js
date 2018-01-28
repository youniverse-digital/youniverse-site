import './scss/main.scss';
import team from './js/team.js';
import slider from './js/slider.js';
import menu from './js/menu.js';
import headerAnim from './js/headerAnimation.js';
import animations from 'create-keyframe-animation';
import phoneAnimation from './js/phoneAnimation.js';

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

	if(document.querySelector('.website-scroll')){
		phoneAnimation.init();
	}

	const pageLinks = document.querySelectorAll('.pageLink');

	pageLinks.forEach(function(link){
		link.addEventListener('click', goToPage, {passive : false});
	});

	function goToPage(e){
		window.location.href = e.target.dataset.location + '.html';
	}
};
