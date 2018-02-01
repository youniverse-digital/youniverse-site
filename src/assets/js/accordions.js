function init(){
	const accordions = document.querySelectorAll('.accordion h3');

	accordions.forEach(function(accordion){
		accordion.addEventListener('click', changeAccordion, {passive : true});
	});
}

function changeAccordion(e){

	if(document.querySelector('.accordion .active') && !e.target.classList.contains('active')){
		if(document.querySelector('.accordion .content.active')){
			document.querySelector('.accordion .content.active').classList.remove('active');
		}

		if(document.querySelector('.accordion h3.active')){
			document.querySelector('.accordion h3.active').classList.remove('active');
		}
	}

	e.target.nextElementSibling.classList.toggle('active');
	e.target.classList.toggle('active');
}

module.exports = {
	init : init
}