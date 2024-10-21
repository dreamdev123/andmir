(function($){
	$(document).ready(function(){
		if ($('.banner-slider').length) {
			$('.banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        arrows: true,
        dots: true
      });
		}

    if ($('.location-info-sc .right-wrp .slider-wrp').length) {
      $('.location-info-sc .right-wrp .slider-wrp').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        arrows: false,
        dots: true
      });
    }

    // fancybox
    $(".cseven-fancybox").fancybox();

    $(window).scroll(function(){
      if($(document).scrollTop() >= 140)
      {
        $('.site-header').addClass('shrinked');
        $('.nav-menu').addClass('sticky');

      } else {
        $('.site-header').removeClass('shrinked');
        $('.nav-menu').removeClass('sticky');
      }
    });
    if($(document).scrollTop() >= 140)
    {
      $('.site-header').addClass('shrinked');
      $('.nav-menu').addClass('sticky');

    } else {
      $('.site-header').removeClass('shrinked');
      $('.nav-menu').removeClass('sticky');
    }
    
    // meanmenu
    // $('.header-menu-wrp .menu-aco-menu-container').meanmenu({
    //   meanMenuContainer: '.mean-menu-holder', 
    //   meanScreenWidth: '678'
    // });

    $('.site-header .hamburger-menu').click(function() {
      if ($('.site-header .mobile-menu').hasClass('show-menu')) {
        $('.site-header .mobile-menu').removeClass('show-menu');
        $(this).removeClass('show-menu');
      } else {
        $('.site-header .mobile-menu').addClass('show-menu');
        $(this).addClass('show-menu');
      }
    });

    // Expanding areas action
    jQuery('.expanding_areas-sc .expanded_text').each(function(){
      jQuery(this).hide();
    });
    jQuery(document).on('click', '.expanding_areas-sc .more_read', function(){
      jQuery(this).parent().find('.expanded_text').eq(0).show();
      jQuery(this).removeClass('more_read').addClass('less_read').html('<< Less');
    });
    jQuery(document).on('click', '.expanding_areas-sc .less_read', function(){
      jQuery(this).parent().find('.expanded_text').eq(0).hide();
      jQuery(this).removeClass('less_read').addClass('more_read').html('Read More');
    });



    // anchor list
    var navigationFn = {
      goToSection: function(id) {
        if (id != '#undefined' && jQuery(id).length){
          jQuery('html, body').animate({
            scrollTop: jQuery(id).offset().top - 120
          }, 500); 
        }
      }
    } 
    jQuery('.anchor_list-sc .anchor_title_section li a').click(function(){
      var id = jQuery(this).attr('href');
      navigationFn.goToSection(id);
      return false;
    }); 

    // hero_nav
    var hero_nav = {
      goToSection: function(id) {
        if (id != '#undefined' && jQuery(id).length){
          jQuery('html, body').animate({
            scrollTop: jQuery(id).offset().top - 50
          }, 500); 
        }
      }
    } 
    jQuery('.hero-section .hero-link').click(function(){
      var id = jQuery(this).attr('href');
      hero_nav.goToSection(id);
      return false;
    }); 


    //popup
    var radio_button_name = jQuery('.popup-sc .ginput_container_radio').find('input').eq(0).attr('name');           

    jQuery('.popup-sc .ginput_container_radio input[name='+ radio_button_name +']').change(function(){
      var radio_checked_value = jQuery('.popup-sc .ginput_container_radio input[name='+ radio_button_name +']:checked').val();
      console.log(radio_checked_value);
      if (radio_checked_value == 'US') {
        jQuery('.popup-sc .image_for_us').show();
        jQuery('.popup-sc .image').hide();
      } else {
        jQuery('.popup-sc .image_for_us').hide();
        jQuery('.popup-sc .image').show();
      }
    });


    // logo bar section
    $('.customer-logos').each(function(){
      var col_num = $(this).parent().parent().find('.logo_bar_columns_of_display').eq(0).val();

      $('.customer-logos').slick({
        slidesToShow: col_num,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        speed: 5000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });

    if ( $(window).width() >= 520 && $(window).width() <= 768) {
      $('.logo_bar-sc .logo-list-wrp .each-logo').css('width', '50%').css('padding', '2.5% 5%');
    } else if ( $(window).width() <= 520 ){
      $('.logo_bar-sc .logo-list-wrp .each-logo').css('width', '100%').css('padding', '2.5% 5%');
    }

    $(window).resize(function(){
      if ($(window).width() <= 520){
        $('.logo_bar-sc .logo-list-wrp .each-logo').css('width', '100%').css('padding', '2.5% 5%');
      } else if ( $(window).width() >= 520 && $(window).width() <= 768) {
        $('.logo_bar-sc .logo-list-wrp .each-logo').css('width', '50%').css('padding', '2.5% 5%');
      } else {
        $('.logo_bar-sc .logo-list-wrp .each-logo').each(function(){
          var col_num = $(this).parent().parent().parent().find('.logo_bar_columns_of_display').eq(0).val();
          $(this).css('width', (100/col_num) + '%').css('padding', (5/col_num) + '% ' + (10/col_num) + '%');
        });
      }
    });
    
    
    // log bar section see more

    jQuery('.logo_bar-sc .see-more-button').each(function(){
      var num_of_eles = 0;
      var number_of_shows = $(this).parent().parent().find('.logo_bar_columns_of_display').eq(0).val();
      jQuery(this).parent().parent().find('.logo-list-wrp').eq(0).find('.each-logo').each(function(index){

        if ($(window).width() <= 520){
          if(index >= 3) {
            jQuery(this).hide();
          } else {
            jQuery(this).show();
          } 
        } else if ($(window).width() <= 768) {
          if(index >= 6) {
            jQuery(this).hide();
          } else {
            jQuery(this).show();
          } 
        } else {
          if(index >= (3*number_of_shows)) {
            jQuery(this).hide();
          } else {
            jQuery(this).show();
          }
        }
        num_of_eles++;
      });

      if (num_of_eles <= 3*number_of_shows) {
        $(this).hide();
      }
    })

    jQuery('.logo_bar-sc .see-more-button').click(function(){
      var click_count = jQuery(this).parent().find('.click_count').eq(0).val();
      click_count ++;
      var num_of_eles = 0;
      var number_of_shows = $(this).parent().parent().find('.logo_bar_columns_of_display').eq(0).val();
      jQuery(this).parent().parent().find('.logo-list-wrp').eq(0).find('.each-logo').each(function(index){

        if ($(window).width() <= 520) {
          if(index >= (3*click_count)) {
            jQuery(this).hide();
          } else {
            jQuery(this).show();
          }
        } else if ($(window).width() <= 768) {
          if(index >= (6*click_count)) {
            jQuery(this).hide();
          } else {
            jQuery(this).show();
          }
        } else {
          if(index >= (3*number_of_shows*click_count)) {
            jQuery(this).hide();
          } else {
            jQuery(this).show();
          }
        }

        num_of_eles++;
      });

      if (num_of_eles <= 3*number_of_shows*click_count) {
        $(this).hide();
      }

      jQuery(this).parent().find('.click_count').eq(0).val(click_count);
    }); 

    // Toggle menu 
    $('.social-links .menu-open').click(function(){
      if( !$('.hamburger-menu-wrp').hasClass('appeared') ) {
        $('.hamburger-menu-wrp').addClass('appeared');
      }
    });
    $('.hamburger-menu-wrp .close-btn').click(function() {
      if( $('.hamburger-menu-wrp').hasClass('appeared') ) {
        $('.hamburger-menu-wrp').removeClass('appeared');
      }
    });

    $('.social-links .search-btn').click(function(){
      if( !$('.search-form-wrp').hasClass('appeared') ) {
        $('.search-form-wrp').addClass('appeared');
      }
    });
    $('.search-form-wrp .close-btn').click(function() {
      if( $('.search-form-wrp').hasClass('appeared') ) {
        $('.search-form-wrp').removeClass('appeared');
      }
    });

    jQuery('.team-section .img-wrapper').click(function() {
      var detail = jQuery(this).parent().find('.description').eq(0).html();
      var email = jQuery(this).parent().find('.team-member-email-value').eq(0).val();
      var phone_number = jQuery(this).parent().find('.team-member-phone-number-value').eq(0).val();

      if (email && email != "") {
        jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('.description').eq(0).html(detail);
        jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('.phone-number').eq(0).html(phone_number);
        jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('#input_11_7').eq(0).val(email);
        jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('#input_11_6').eq(0).val(email);
        jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).modal('show');
      } else {
        if (detail.replace(/\s/g,"") != "") {
          jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal").eq(0).find('.modal-body').eq(0).html(detail);
          jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal").eq(0).modal('show');
        }
      }
      
    });

    jQuery('.team-section .team-member-email').click(function() {
      var detail = jQuery(this).parent().parent().parent().find('.description').eq(0).html();
      var email = jQuery(this).parent().parent().parent().find('.team-member-email-value').eq(0).val();
      var phone_number = jQuery(this).parent().parent().parent().find('.team-member-phone-number-value').eq(0).val();

      if (email && email != "") {
        jQuery(this).parent().parent().parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('.description').eq(0).html(detail);
        jQuery(this).parent().parent().parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('.phone-number').eq(0).html(phone_number);
        jQuery(this).parent().parent().parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('#input_11_7').eq(0).val(email);
        jQuery(this).parent().parent().parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).find('.modal-body').eq(0).find('#input_11_6').eq(0).val(email);
        jQuery(this).parent().parent().parent().parent().parent().parent().parent().find(".team-member-modal2").eq(0).modal('show');
      } else {
        if (detail.replace(/\s/g,"") != "") {
          jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal").eq(0).find('.modal-body').eq(0).html(detail);
          jQuery(this).parent().parent().parent().parent().parent().find(".team-member-modal").eq(0).modal('show');
        }
      }
      
    });

    jQuery('.team-member-phone-number').click(function(){
      var phone_number = jQuery(this).attr('title');
      alert("Phone number: " + phone_number);
    });


    if ($('.home-hero-slider .slider-wrp').length) {
      $('.home-hero-slider .slider-wrp').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        infinite: true,
        arrows: true,
        dots: true
      });
    }

    if ($('.solutions-gallery-section .inner-wrp').length) {
      $('.solutions-gallery-section .inner-wrp').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        infinite: true,
        arrows: true,
        dots: false,
        centerMode: true,
        centerPadding: '10px',
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 576,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    }

    $('.history-section .history-inner-wrp .history-time-line .item .item-inner').click(function() {
      $('.history-section .history-inner-wrp .history-time-line .item').removeClass('modal-show');
      $(this).parent().addClass('modal-show');
      $('body').addClass('modal-show');
    });

    $('.history-section .history-inner-wrp .history-time-line .item .detail .close-btn').click(function() {
      $('.history-section .history-inner-wrp .history-time-line .item').removeClass('modal-show');
      $('body').removeClass('modal-show');
    });

  });

})(jQuery);
