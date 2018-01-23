import './scss/main.scss';
import team from './js/team.js';
import slider from './js/slider.js';
import menu from './js/menu.js';

window.onload = function(){
	menu.init();

	if(document.querySelector('.team-panel')){
		team.init();
	}

	if(document.querySelector('.work-slider')){
		slider.init();
	}

	const pageLinks = document.querySelectorAll('.pageLink');

	pageLinks.forEach(function(link){
		console.log('hey');
		link.addEventListener('click', goToPage, {passive : false});
	});

	function goToPage(e){
		console.log(e.target);
		window.location.href = e.target.dataset.location + '.html';
	}
}
