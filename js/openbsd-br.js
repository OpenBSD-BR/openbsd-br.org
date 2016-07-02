/*
 * openbsd-br.org
 */

$(document).ready(function () {
    var menu = $('#menu');
    var origOffsetY = menu.offset().top;
    
    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('#menu').addClass('navbar-fixed-top');
            $('#menu').addClass('menu-fixed-style');
        } else {
            $('#menu').removeClass('navbar-fixed-top');
            $('#menu').removeClass('menu-fixed-style');
        }
    }
    
    document.onscroll = scroll;
});
