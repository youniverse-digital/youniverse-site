import './scss/main.scss';
import team from './js/team.js';
import slider from './js/slider.js';
import menu from './js/menu.js';

window.onload = function(){
	team.init();
	slider.init();
	menu.init();
}
