jQuery(document).ready(function(){
  jQuery('.slider-1').owlCarousel({
    stopOnHover : true,
    autoplay: true,
    lazyLoad: true,
    loop:true,
    autoHeight: true,
    autoplayTimeout: 10000,
    smartSpeed: 800,
    nav: false,
    dots:false,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true
      },
      640:{
        items:3,
        nav:true
      },
      992:{
        items:3,
        nav:true,
      }
    }
  });
  jQuery('.slider-2').owlCarousel({
    stopOnHover : true,
    autoplay: true,
    lazyLoad: true,
    loop:true,
    autoHeight: false,
    autoplayTimeout: 10000,
    smartSpeed: 800,
    nav: false,
    dots:false,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true
      },
      640:{
        items:1,
        nav:true
      },
      992:{
        items:1,
        nav:true,
      }
    }
  });
  jQuery('.slider-3').owlCarousel({
    stopOnHover : true,
    autoplay: true,
    lazyLoad: true,
    loop:true,
    autoHeight: true,
    autoplayTimeout: 10000,
    smartSpeed: 800,
    nav: false,
    dots:false,
    responsiveClass:true,
    responsive:{
      0:{
        items:1,
        nav:true
      },
      640:{
        items:1,
        nav:true
      },
      992:{
        items:3,
        nav:true,
      }
    }
  });
});


