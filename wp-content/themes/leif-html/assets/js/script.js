/** Testimonials **/
$(document).ready(function () {
   if($('#testimonial-slider').length) {
       $('#testimonial-slider').owlCarousel({
           loop:true,    
           margin:10,
           nav:false,
           dots: false,
           autoplay:true,
           autoplayTimeout:3000,
           autoplayHoverPause:true,
           responsive:{
               0:{
                   items:1
               },
               600:{
                   items:1
               },
               1000:{
                   items:1
               }
           }
       });
   }
});


$(function () {
   $(window).on("scroll", function () {
       if ($(window).scrollTop() > 200) {
               $(".header").addClass("header-sticky");
           } else {
               //remove the background property so it comes transparent again (defined in your css)
               $(".header").removeClass("header-sticky");
           }
   });
});
