const megamenu_types = ['products', 'solutions'];
var main_overlay = document.getElementById('main_overlay');

megamenu_types.forEach( type => {
    var dropdown_button = document.getElementById(type + '-dropdown-button');
    var dropdown = document.getElementById(type + '-dropdown');

    dropdown_button.addEventListener("mouseenter", function (event) {
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            main_overlay.classList = "fixed w-full h-full top-0 left-0 bg-dark-overlay z-10";
        }
    });
    dropdown.addEventListener("mouseleave", function (event) {
        if (!dropdown.classList.contains('hidden')) {
            dropdown.classList.add('hidden');
            main_overlay.classList = "";
        }
    });
});

// dropdown_button.addEventListener("mouseleave", function (event) {
//     // console.log(dropdown);
//     if (!dropdown.classList.contains('hidden')) {
//         dropdown.classList.add('hidden');
//     }
        
// });

// dropdown.addEventListener("mouseenter", function (event) {
//     // console.log(dropdown);
//     if (dropdown.classList.contains('hidden')) {
//         dropdown.classList.remove('hidden');
//     }
        
// });


// var rect = dropdown_button.getBoundingClientRect();
// var left_offset = Math.floor(rect.left);
// console.log(left_offset);

// document.getElementById('abcd').classList.add('pl-['+left_offset+'px]');