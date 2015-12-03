$(window).scroll(function() {
    if ($(this).scrollTop() > $('#nav-container').offset().top) {
         $('.tabs').addClass('fixed');
       
    } else {
         $('.tabs').removeClass('fixed');
        
    }
});