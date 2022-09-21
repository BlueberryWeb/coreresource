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
/*ANIMACIONES */
$(document).ready(function() {
  ScrollToInit();
  ActiveSectionNavigation();
  InitWaypointAnimations({
      offset: "60%",
      animateClass: "wp-animated",
      animateGroupClass: "wp-animated-group"
  });
  InitCounterWayPointAnimation();
});
function ScrollToInit() {
  $(document).on("click", "a[href^='#']", function(event) {
      var $anchor = $(this);
      $("html, body").stop().animate({
          scrollTop: $($anchor.attr("href")).offset().top
      }, 1500, "easeInOutExpo");
      event.preventDefault();
  });
}
function ActiveSectionNavigation() {
  function getNavItemsMap() {
      const navItemsMap = $("#main-nav").find(".nav-item").map((index, item) => {
          const $item = $(item);
          const name = $item.find(".nav-link").attr("href").substring(1);
          return {
              key: name,
              val: $item
          };
      })
      .toArray()
      .reduce((map, obj) => {
          map[obj.key] = obj.val;
          return map;
      }, {});

      return navItemsMap;
  }
  function deactivateCurrentNavItem() {
      $("#main-nav").find(".nav-item.active").removeClass("active");
  }
  const navItemsMap = getNavItemsMap();
  $("section").each((index, element) => {
      const $element = $(element);
      const sectionName = $element.attr("id");
      if(sectionName in navItemsMap) {
          
          $element.waypoint((direction) => {
              if(direction === "down") {
                  deactivateCurrentNavItem();
                  navItemsMap[sectionName].addClass("active");
              }
          },{
              offset: "50%"
          });
          
          $element.waypoint((direction) => {
              if(direction === "up") {
                  deactivateCurrentNavItem();
                  navItemsMap[sectionName].addClass("active");
              }
          },{
              offset: "-20%"
          })
      }
  });
}
function InitCounterWayPointAnimation() {
  $('.counter').each(function () {
      var $this = $(this);
      var stop = parseInt($this.text().replace(/,/g, ""));
      $this.text(0);
      $this.waypoint(function (direction) {
          animateNumbers($this, 0, stop);
          this.destroy();
      },{
          triggerOnce: true,
          offset: "80%"
      });
  });  
}
function animateNumbers(element, start, stop, commas, duration, ease) {
  var $this = element;
  commas = (commas === undefined) ? true : commas;
  $({value: start}).animate({value: stop}, {
      duration: duration == undefined ? 4000 : duration,
      easing: ease == undefined ? "swing" : ease,
      step: function() {
          $this.text(Math.floor(this.value));
          if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
      },
      complete: function() {
         if (parseInt($this.text()) !== stop) {
             $this.text(stop);
             if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
         }
      }
  });
}
/*TERMINA ANIMACIONES */