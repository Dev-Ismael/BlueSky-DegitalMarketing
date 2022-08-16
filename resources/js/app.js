require('./bootstrap');


$(document).ready(function() {

    // toggle logo ( Dark ==> Light ) at nav-btn
    $("label.nav-btn").click(function (e) {
        // e.preventDefault();
        e.stopPropagation();
        setTimeout( function() {
            $('.header a.logo img').toggleClass('d-none');
        }, 1000);
    });
    



});
