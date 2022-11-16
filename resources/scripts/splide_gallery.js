var thumbnails = document.getElementsByClassName('thumbnail');
for (var i = 0; i < thumbnails.length; i++) {
    initThumbnail(thumbnails[i], i);
}

// The function to initialize each thumbnail.
function initThumbnail(thumbnail, index) {
    thumbnail.addEventListener('click', function () {
        splide.go(index);
    });
}

var splide = new Splide('#main-carousel', {
    pagination: false,
    arrows : false,
});

splide.mount();