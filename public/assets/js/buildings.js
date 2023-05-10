document.addEventListener("DOMContentLoaded", function () {
    var elem = document.getElementById('bul_div');
    var elem_for_scroll = document.getElementById('for_scroll');
    var navbar_height = document.getElementById('navbar').clientHeight;
    var navbar2_height = document.getElementById('bul_div').clientHeight;
    var nav_height_sum = navbar_height + navbar2_height;
    window.addEventListener('scroll', function () {
        var elmTop = elem.getBoundingClientRect().top ;
        var elem_for_scroll_top = elem_for_scroll.getBoundingClientRect().top ;
        if (elmTop <= navbar_height && elem_for_scroll_top < nav_height_sum) {
            elem.classList.add('fixed-top');
        } else {
            elem.classList.remove('fixed-top');
        }
    });
});
