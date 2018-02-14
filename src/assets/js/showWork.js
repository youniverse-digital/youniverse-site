import scrollToElement from 'scroll-to-element';

function init() {
	const viewMoreBtn = document.querySelector('.view-more-work');
	viewMoreBtn.addEventListener('click', function(){
		const prevPos = document.scrollingElement.scrollTop;
		document.querySelector('.work-panels').classList.toggle('show-all');

		if(viewMoreBtn.innerText == 'View less'){
			scrollToElement('.view-more-work', {
			    offset: 0,
			    align: 'bottom'
			});
		}else {
			scrollToElement('.work-item:nth-of-type(7)', {
			    offset: 0,
			    align: 'top'
			});
		}

		viewMoreBtn.innerText = (viewMoreBtn.innerText == 'View more' ? 'View less' : 'View more');

	}, {passive : true});
}

module.exports = {
	init : init
};
