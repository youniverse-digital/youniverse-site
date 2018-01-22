function init(){

    // documentation for slider here http://ruyadorno.github.io/simple-slider/

    var isNext = true;
    let direction = 'forwards';
    var sliderElem = document.getElementById('myslider');
    var slider = simpleslider.getSlider({
        container: sliderElem,
        prop: 'left',
        init: 100,
        show: 0,
        end: -100,
        unit: '%',
        delay: 3,
        duration: 1,
        onChange: changeDots
    });
    var manager = new Hammer.Manager(sliderElem);
    var Swipe = new Hammer.Swipe();
    manager.add(Swipe);

    manager.on('swipeleft', function() {
        nextSlide();
    });

    manager.on('swiperight', function() {
        prevSlide();
    });

    document.querySelector('.next').addEventListener('click', nextSlide, {passive : true});
    document.querySelector('.prev').addEventListener('click', prevSlide, {passive : true});

    function nextSlide(){
        if (!isNext) {
            slider.reverse();
            isNext = true;
        }
        slider.next();
    }

    function prevSlide(){
        if (isNext) {
            slider.reverse();
            isNext = false;
        }
        slider.next();
    }

    function changeDots(){
        // const activeDot = document.querySelector('.dots li.active');

        // if(direction == 'forwards'){
        //     activeDot.nextElementSibling.classList.add('active');
        // }else {
        //     activeDot.prevElementSibling.classList.add('active');
        // }

        // activeDot.classList.remove('active');
    }

}

module.exports = {
    init : init
}
