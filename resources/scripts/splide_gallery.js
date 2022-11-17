// The function to initialize each thumbnail.
function initThumbnail(thumbnail, index) {
    thumbnail.addEventListener('click', function () {
        splide.go(index);
    });    
}

function createSplide() {
    var splide = new Splide('#main-carousel', {
        pagination: false,
        arrows : false,
    });
    splide.mount();
}
