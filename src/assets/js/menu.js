import scrollToElement from 'scroll-to-element';
/*! scrollStop.js | (c) 2017 Chris Ferdinandi | MIT License | http://github.com/cferdinandi/scrollStop */
/**
 * Run functions after scrolling has stopped
 * @param  {Function} callback The function to run after scrolling
 */
var scrollStop = function ( callback ) {
	// Make sure a valid callback was provided
	if ( !callback || Object.prototype.toString.call( callback ) !== '[object Function]' ) return;
	// Setup scrolling variable
	var isScrolling;
	// Listen for scroll events
	window.addEventListener('scroll', function ( event ) {
		// Clear our timeout throughout the scroll
		window.clearTimeout( isScrolling );
		// Set a timeout to run after scrolling ends
		isScrolling = setTimeout(function() {
			// Run the callback
			callback();
		}, 100);
	}, false);
};
///////////////////////////////////////////////////////////////////////////////////

function init(){
	const menuItems = document.querySelectorAll('.menu ul li:not(.home-link) a');
	let scrolling 	= false;
	const menuBtn 	= document.querySelector('#menuToggle');
	const menu 		= document.querySelector('.menu');
	const closeMenu = document.querySelector('#close-menu');

	menuItems.forEach(function(item){
		item.addEventListener('click', scrollToLink, {passive : false});
	});

	window.addEventListener('scroll', function(e){
		if(!scrolling){
			scrolling = true;
			menu.classList.add('nav-hide');
		}
		if(menuBtn.classList.contains('show-on-scroll')) {
			checkMenuPos();
		}
	}, {passive : false});

	scrollStop(function () {
		if(scrolling){
			menu.classList.remove('nav-hide');
			scrolling = false;
		}
	});

	menuBtn && menuBtn.addEventListener('click', function(e){
		toggleMenuSystem();
	}, {passive : true});

	closeMenu && closeMenu.addEventListener('click', function(e){
		toggleMenuSystem();
	}, {passive : true});
}

function checkMenuPos(){
	const menuBtn = document.querySelector('#menuToggle');
	if(document.scrollingElement.scrollTop > window.innerHeight/4){
		menuBtn.classList.add('scrolled');
	}else {
		menuBtn.classList.remove('scrolled');
	}
}

function toggleMenuSystem(){
	const menu = document.querySelector('.menu');
	menu.classList.toggle('active');
	// if(!menu.classList.contains('playbook-menu')){
		document.body.classList.toggle('fixed');
	// }
}

function scrollToLink(e){
	const element = e.target.getAttribute('href');
	const parent = document.querySelector('.top-menu');
	scrollToElement(element);
	if(!isDescendant(parent, e.target)){
		toggleMenuSystem();
	}
}

function isDescendant(parent, child) {
     var node = child.parentNode;
     while (node != null) {
         if (node == parent) {
             return true;
         }
         node = node.parentNode;
     }
     return false;
}

export default  {
    init : init
}
