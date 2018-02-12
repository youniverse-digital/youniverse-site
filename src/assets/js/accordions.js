function init(){
	const accordions = document.querySelectorAll('.accordion h3');

	accordions.forEach(function(accordion){
		const accHeight = accordion.nextElementSibling.clientHeight;
		accordion.nextElementSibling.setAttribute('data-height', accHeight);
		accordion.nextElementSibling.style.height = 0;
		accordion.addEventListener('click', changeAccordion, {passive : true});
	});
}

function changeAccordion(e){

	if(document.querySelector('.accordion .active') && !e.target.classList.contains('active')){
		if(document.querySelector('.accordion .content.active')){
			document.querySelector('.accordion .content.active').style.height = 0;
			document.querySelector('.accordion .content.active').classList.remove('active');
		}

		if(document.querySelector('.accordion h3.active')){
			document.querySelector('.accordion h3.active').classList.remove('active');
		}
	}

	if(e.target.nextElementSibling.classList.contains('active')){
		e.target.nextElementSibling.style.height = 0;
	}else {
		e.target.nextElementSibling.style.height = e.target.nextElementSibling.dataset.height + 'px';
	}

	e.target.nextElementSibling.classList.toggle('active');
	e.target.classList.toggle('active');

}


// function collapseSection(element) {
// 	// get the height of the element's inner content, regardless of its actual size
// 	var sectionHeight = element.scrollHeight;
// 	// temporarily disable all css transitions
// 	var elementTransition = element.style.transition;
// 	element.style.transition = '';
// 	// on the next frame (as soon as the previous style change has taken effect),
// 	// explicitly set the element's height to its current pixel height, so we
// 	// aren't transitioning out of 'auto'
// 	requestAnimationFrame(function() {
// 		element.style.height = sectionHeight + 'px';
// 		element.style.transition = elementTransition;
// 		// on the next frame (as soon as the previous style change has taken effect),
// 		// have the element transition to height: 0
// 		requestAnimationFrame(function() {
// 			  element.style.height = 0 + 'px';
// 		});
// 	});

// 	// mark the section as "currently collapsed"
// 	element.setAttribute('data-collapsed', 'true');
// }

// function expandSection(element) {
// 	// get the height of the element's inner content, regardless of its actual size
// 	var sectionHeight = element.scrollHeight;
// 	// have the element transition to the height of its inner content
// 	element.style.height = sectionHeight + 'px';
// 	// when the next css transition finishes (which should be the one we just triggered)
// 	element.addEventListener('transitionend', function(e) {
// 	// remove this event listener so it only gets triggered once
// 	element.removeEventListener('transitionend', arguments.callee);
// 		// remove "height" from the element's inline styles, so it can return to its initial value
// 		element.style.height = null;
// 	});

// 	// mark the section as "currently not collapsed"
// 	element.setAttribute('data-collapsed', 'false');
// }

// document.querySelector('#toggle-button').addEventListener('click', function(e) {
// 	var section = document.querySelector('.section.collapsible');
// 	var isCollapsed = section.getAttribute('data-collapsed') === 'true';

// 	if(isCollapsed) {
// 		expandSection(section)
// 		section.setAttribute('data-collapsed', 'false')
// 	} else {
// 		collapseSection(section)
// 	}
// });

module.exports = {
	init : init
}
