const megamenu_types = ['products', 'solutions', 'blog'];
var main_overlay = document.getElementById('main_overlay');
function getOffset() {
    const rect = document.getElementById(megamenu_types[0] + '-dropdown-button').getBoundingClientRect();
    return {
      left: rect.left + window.scrollX,
      top: rect.top + window.scrollY
    };
}

megamenu_types.forEach( type => {
    var dropdown_button = document.getElementById(type + '-dropdown-button');
    var dropdown = document.getElementById(type + '-dropdown');
    var leftColumn = document.getElementById(type + '-left-wrapper');
    var leftOffset = getOffset().left;

    console.log(leftColumn);
    console.log(leftOffset);
    leftColumn.style.marginLeft = (leftOffset+150) + 'px';    

    dropdown_button.addEventListener("mouseenter", function (event) {        
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            main_overlay.classList = "fixed w-full h-full top-0 left-0 bg-dark-overlay z-10";
        }
    });
    dropdown_button.addEventListener("mouseleave", function (event) {
        if (!dropdown.classList.contains('hidden')) {
            dropdown.classList.add('hidden');
            main_overlay.classList = "";
        }
    });
});

window.addEventListener("resize", (event) => {
    alert('Window Resize Event');
    var leftOffset = getOffset().left;
    console.log(leftColumn);
    console.log(leftOffset);
    leftColumn.style.marginLeft = (leftOffset+150) + 'px';
}, true);
