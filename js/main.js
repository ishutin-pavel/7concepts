jQuery(document).ready(function() {

  jQuery(".show-projects").on('click', function() {
    jQuery(this).parent().find(".projects__gallery .projects__holder:nth-of-type(7)").show();
    jQuery(this).parent().find(".projects__gallery .projects__holder:nth-of-type(8)").show();
    jQuery(this).parent().find(".projects__gallery .projects__holder:nth-of-type(9)").show();
    jQuery(this).parent().find(".projects__gallery .projects__holder:nth-of-type(10)").show();
    jQuery(this).parent().find(".projects__gallery .projects__holder:nth-of-type(11)").show();
    jQuery(this).hide();
    return false;
  });

  jQuery(".plan-slider").owlCarousel({
    items: 1,
    nav: true,
    navText: ["<img src=\"/wp-content/themes/concepts/img/chevron-left-dark.svg\">", "<img src=\"/wp-content/themes/concepts/img/chevron-right-dark.svg\">"],
    dots: false,
    lazyLoad: true,
    margin:10
  });


  jQuery(".rp-slider, .cost-slider, .otziv-slider").owlCarousel({
    items: 5,
    nav: true,
    // loop: true,
    navText: ["<img src=\"/wp-content/themes/concepts/img/chevron-left-light.svg\">", "<img src=\"/wp-content/themes/concepts/img/chevron-right-light.svg\">"],
    dots: false,
    lazyLoad: true,
    responsive : {
        // breakpoint from 0 up
        0 : {
          items: 1
        },
        480 : {
          items: 2
        },
        768 : {
          items: 4
        },
        1199 : {
          items: 5,
        }
    }
  });

    //Меню.....................................................................................................

    var pullmob = jQuery("#navigation--buttonmob");
    var pulldesk = jQuery("#navigation--buttondesk");
    var menuElement = jQuery(".menu__link");
    var close = jQuery("#close");
    var menu = jQuery(".header__menu");

    jQuery(pullmob).on("click", function(e) {
        e.preventDefault();

        menu.slideToggle();

    })

    jQuery(pulldesk).on("click", function(e) {
        e.preventDefault();

        menu.slideToggle();

    })

    jQuery(menuElement).on("click", function(e) {
        e.preventDefault();

        menu.slideToggle();

    })


    jQuery(".menu__link").mPageScroll2id({
        highlightSelector: ".header .menu__link a"
    });

    //
    //    jQuery(window).resize(function(){
    //        var w = jQuery(window).width();
    //        if(w > 720 && menu.is(":hidden")) {
    //         menu.removeAttr("style");   
    //        }
    //    });
    //    
    //    var w = jQuery(window).width();
    //    if (w<992){
    //        jQuery('nav.navigation a').on("click", function(){
    //            menu.slideToggle();
    //        });
    //    }

    //Меню.....................................................................................................
    jQuery('.show-cf-498').on('click', function(e) {
        e.preventDefault();
        jQuery('.cf-498').fadeIn();

    });
    jQuery('.show-cf-499').on('click', function(e) {
        e.preventDefault();
        jQuery('.cf-499').fadeIn();

    });
    jQuery('.show-cf-500').on('click', function(e) {
        e.preventDefault();
        jQuery('.cf-500').fadeIn();

    });

    document.addEventListener( 'wpcf7mailsent', function( event ) {
      if ( '498' == event.detail.contactFormId ) {
        console.log( "Отправлена форма 498." );
        location = 'https://7concepts.kz/wp-content/uploads/2020/05/chek-list.-osnovnye-stili-intererov.pdf';
      }
    }, false );
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      if ( '499' == event.detail.contactFormId ) {
        console.log( "Отправлена форма 499." );
        location = 'https://7concepts.kz/wp-content/uploads/2020/05/chek-list.-top-10-oshibok-v-chertezhah.pdf';
      }
    }, false );
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      if ( '500' == event.detail.contactFormId ) {
        console.log( "Отправлена форма 500." );
        location = 'https://7concepts.kz/wp-content/uploads/2020/05/chek-list.-oshibki-pri-remonte.pdf';
      }
    }, false );

    //Модальное окно..............................................................................................

    jQuery('.show-modal').on('click', function(e) {
        e.preventDefault();
        jQuery('.modal-fade').fadeIn();

    });

    jQuery('.close').on('click', function(e) {
        e.preventDefault();
        jQuery('.modal-fade').fadeOut();
    });

    //Модальное окно..............................................................................................

    // jQuery(".phone").mask("+9(999) 999-9999");

    // jQuery(".modal__input--phone").mask("+9(999) 999-9999");

					jQuery(".blog .more").on("click", function () {
						jQuery(this).parents('.blog').find('.hidden').fadeIn();
						jQuery(this).fadeOut(0);
						return false;
					});


});
