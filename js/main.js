$(document).ready(function(){

     //fancybox
    $('.fancybox').fancybox({
                padding: 20,
            helpers : {
                overlay : {
                    css : {
                        'background' : 'rgba(255, 255, 255, 0.80)'
                    }
                }
            }
    });

    $('.fancybox-image').fancybox({
                padding: 0,
                arrows: true,
            helpers : {
                overlay : {
                    css : {
                        'background' : 'rgba(255, 255, 255, 0.80)'
                    }
                }
            }
    });
    
    $('.fb-video').fancybox({
        padding: 0,
        width: "100%",
        height: 870,
        autoSize: false,
        helpers: {
            media: {}
        }
   });

    $('.tooltip-up').tooltip({html:true});


//smooth scroll

    $(function() {
          $('a[href*=#ss]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top-57
                }, 1000);
                return false;
              }
            }
          });
        });


    ////colappse menu


     $(window).scroll(function(){
     var divOffset = $('section :first-of-type').offset();
     if(window.scrollY > divOffset.top ){
        $('.main-nav').addClass('scrolled-nav');
     }
     if(window.scrollY < divOffset.top){
        $('.main-nav').removeClass('scrolled-nav');
     }
    });



     //accordian

    $( '#employee-accordion .panel a.open' ).click(function() {
    $(this).closest('.panel').siblings().removeClass('shadow');
    $(this).closest('.panel').toggleClass('shadow');
    });

    //map ui

        $( 'a.map-toggle' ).click(function() {

        $('.map-wrap').toggleClass('map-show');




    });


});



$(window).load(function(){ 


    //masonry grid

    $('.masonry-grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer'
      }
    });


     //masonry filter
    $( 'ul.filter-nav li:first-of-type ' ).addClass('active-link');


    $( 'a.filter-button' ).click(function() {

        $( 'ul.filter-nav li ' ).removeClass('active-link');
        $(this).closest('li').addClass('active-link');

        var id = '.' + $(this).attr('id')
    $('.masonry-grid').isotope({ filter: id });



    });


})
