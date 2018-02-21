function init(){
	const teamBtns = document.querySelectorAll('.team-list li');

	teamBtns.forEach(function(memberBtn){
		memberBtn.addEventListener('click', showTeamInfo, {passive:true});
	});

	function showTeamInfo(e){
		document.querySelector('.team-list li.active').classList.remove('active');
		e.target.classList.add('active');
		document.querySelector('.team-member-info.active').classList.remove('active');
		document.getElementById(e.target.dataset.target).classList.add('active');
	}
}


export default {
	init : init
};
