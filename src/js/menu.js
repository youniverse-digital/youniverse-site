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
	const menuBtn 	= document.querySelector('.mobile-menu');
	const menu 		= document.querySelector('.menu');
	const menuList 	= document.querySelector('.menu ul');
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
	}

	window.addEventListener('scroll', function(){
		if(!scrolling){
			scrolling = true;
			document.querySelector('.menu').classList.add('nav-hide');
			menuBg.classList.remove('active');
		}

		if(window.innerWidth < 768) {
			if(document.scrollingElement.scrollTop > window.innerHeight/2){
				document.querySelector('.menu').classList.add('scrolled');
			}else {
				document.querySelector('.menu').classList.remove('scrolled');
			}
		}

	}, {passive : true});

	scrollStop(function () {
		if(scrolling){
			document.querySelector('.menu').classList.remove('nav-hide');
			scrolling = false;
			menuBtn.classList.remove('active');
			menu.classList.remove('active');
			menuList.classList.remove('active');
		}
	});

	menuBtn.addEventListener('click', function(e){
		menuBtn.classList.toggle('active');
		menu.classList.toggle('active');
		menuList.classList.toggle('active');
		menuBg.classList.toggle('active');
	}, {passive : true});
}

module.exports = {
    init : init
}
