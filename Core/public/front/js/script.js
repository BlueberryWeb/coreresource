/* CARROUSEL DE EMPRESAS */
$( document ).ready(function() {
    let prevSlide = null;
  
    $('.carousel').on('init', function(event, slick) {
      $('.slick-slide').find('h1, a, span').hide();
      $('.slick-current').find('h1, a, span').slideDown(500).delay(1500);
    });
  
    $('.carousel').slick({
        slidesToShow: 3,
        dots: false,
        arrows: true,
        speed: 500,
        slidesToScroll: 1,
        infinite: true,
        centerMode: true,
        centerPadding: '0',
        focusOnSelect: true,
        cssEase: 'cubic-bezier(.1, .2, .1, .02)',
        prevArrow: $('.nav__prev'),
        nextArrow: $('.nav__next'),
    });
  
    $('.carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {      
      if(currentSlide !== nextSlide) {
          $('.slick-current').find('h1, a, span').slideUp('fast');
      }
      liked();
    });
  
    $('.carousel').on('afterChange', function(event, slick, currentSlide) {
      if(currentSlide !== prevSlide) {
        $('.slick-current').find('h1, a, span').slideDown(500).delay(1000);
        prevSlide = currentSlide;
      };
    });
  
    const liked = () => {
      $('.slick-current').find('span').on('click', function() {
         if($(this).hasClass('liked')) {
           $(this).removeClass('liked');
         } else {
           $(this).addClass('liked');
         }
       });
    }
  
});
/* TERMINA CARROUSEL DE EMPRESAS */
/* CARGAR RÁPIDO MENU ANCLA  */
$(function(){
    $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });
})
/* TERMINA CARGAR RÁPIDO MENU ANCLA */