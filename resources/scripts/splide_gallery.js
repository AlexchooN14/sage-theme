// The function to initialize each thumbnail.

// import Splide from '@splidejs/splide';
var splide;
function initThumbnail(thumbnail, index) {
    thumbnail.addEventListener('click', function () {
        splide.go(index);
    });    
}

function createSplide() {
    splide = new Splide('#main-carousel', {
        pagination: false,
        arrows : false,
    });
    splide.mount();
}

