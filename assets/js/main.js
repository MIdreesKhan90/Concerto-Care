jQuery(document).ready(function($){

    jQuery('.f-p-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    var urlTo = window.location.hash;
    if(urlTo !== ''){
        $('html, body').animate({
            scrollTop: $(urlTo).offset().top - 80
        }, 1000);
    }
$('.navbar-toggler').click(function(){
   $('.navbar-toggler').toggleClass('is-active');
});
});// End of document ready function


