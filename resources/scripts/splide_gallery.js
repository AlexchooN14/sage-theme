// The function to initialize each thumbnail.
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
