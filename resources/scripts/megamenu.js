const megamenu_types = ['products', 'solutions', 'blog'];
var main_overlay = document.getElementById('main_overlay');
var navbar = document.getElementById('nav');

megamenu_types.forEach( type => {
    var dropdown_button = document.getElementById(type + '-dropdown-button');
    var dropdown = document.getElementById(type + '-dropdown');

    dropdown_button.addEventListener("mouseenter", function (event) {        
        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            main_overlay.classList = "fixed w-full h-full top-0 left-0 bg-dark-overlay z-10";
        }
    });
    dropdown_button.addEventListener("mouseleave", function (event) {
        navbar.addEventListener("mouseenter", function (event) {
            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
            }
        });
        if (!dropdown.classList.contains('hidden')) {
            dropdown.classList.add('hidden');
            main_overlay.classList = "";
        }
    });
});


// const megamenu_types = ['products', 'solutions', 'blog'];
// var main_overlay = document.getElementById('main_overlay');
// // var offset = getOffset();

// // function getOffset() {
// //     return document.getElementById(megamenu_types[0] + '-dropdown-button').offsetLeft;
// // }

// megamenu_types.forEach( type => {
//     var dropdown_button = document.getElementById(type + '-dropdown-button');
//     var dropdown = document.getElementById(type + '-dropdown');
//     // var leftColumn = document.getElementById(type + '-left-wrapper');
//     // console.log(leftColumn);
//     // console.log(offset);
//     // leftColumn.classList.add = 'left-[' + offset + 'px]';

//     dropdown_button.addEventListener("mouseenter", function (event) {        
//         if (dropdown.classList.contains('hidden')) {
//             dropdown.classList.remove('hidden');
//             main_overlay.classList = "fixed w-full h-full top-0 left-0 bg-dark-overlay z-10";
//         }
//     });
//     dropdown_button.addEventListener("mouseleave", function (event) {
//         console.log('there');
//         if (!dropdown.classList.contains('hidden')) {
//             dropdown.classList.add('hidden');
//             main_overlay.classList = "";
//         }
//     });
// });

