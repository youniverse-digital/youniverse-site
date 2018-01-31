import './assets/scss/styles.scss';
import team from './assets/js/team.js';
import slider from './assets/js/slider.js';
import menu from './assets/js/menu.js';
import headerAnim from './assets/js/headerAnimation.js';
import phoneAnimation from './assets/js/phoneAnimation.js';
import accordions from './assets/js/accordions.js';

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

	if(document.querySelector('.accordion')){
		accordions.init();
	}

	const pageLinks = document.querySelectorAll('.pageLink');

	pageLinks.forEach(function(link){
		link.addEventListener('click', goToPage, {passive : false});
	});

	function goToPage(e){
		window.location.href = e.target.dataset.location + '.html';
	}
};
