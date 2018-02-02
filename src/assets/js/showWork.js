function init() {
	const viewMoreBtn = document.querySelector('.view-more-work');
	viewMoreBtn.addEventListener('click', function(){
		document.querySelector('.work-panels').classList.toggle('show-all');
		viewMoreBtn.innerText = (viewMoreBtn.innerText == 'View more' ? 'View less' : 'View more');
	}, {passive : true});
}

module.exports = {
	init : init
}