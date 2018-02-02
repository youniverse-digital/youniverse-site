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
	const menuItems = document.querySelectorAll('.menu ul li a');
	let scrolling 	= false;
	const menuBtn 	= document.querySelector('#menuToggle');
	const menu 		= document.querySelector('.menu');
	const closeMenu = document.querySelector('#close-menu');
	const menuBg 	= document.querySelector('.menu-bg-alpha');

	menuItems.forEach(function(item){
		item.addEventListener('click', scrollToLink, {passive : false})
	});

	function scrollToLink(e){
		e.preventDefault();
		const element = e.target.getAttribute('href');
		document.querySelector(element).scrollIntoView({
			behavior: 'smooth'
		});
		toggleMenuSystem();
	}

	window.addEventListener('scroll', function(e){

		if(!scrolling){
			scrolling = true;
			document.querySelector('.menu').classList.add('nav-hide');
		}

		checkMenuPos();

	}, {passive : false});

	scrollStop(function () {
		if(scrolling){
			document.querySelector('.menu').classList.remove('nav-hide');
			scrolling = false;
		}
	});

	menuBtn && menuBtn.addEventListener('click', function(e){
		toggleMenuSystem();
	}, {passive : true});

	closeMenu && closeMenu.addEventListener('click', function(e){
		toggleMenuSystem();
	}, {passive : true});

	function toggleMenuSystem(){
		menu.classList.toggle('active');
		document.body.classList.toggle('fixed');
	}

	function checkMenuPos(){
		if(window.innerWidth < 768) {
			if(document.scrollingElement.scrollTop > window.innerHeight/4){
				menuBtn.classList.add('scrolled');
			}else {
				menuBtn.classList.remove('scrolled');
			}
		}
	}

	checkMenuPos();
}

module.exports = {
    init : init
}
