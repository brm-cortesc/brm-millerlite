$(document).ready(function() {

  $(".tog1").click(function() {
    //$(".desp1").toggle( "slow", "linear" );
    if ($(".desp1").hasClass("showDesp1")) {
      $(".desp1").removeClass("showDesp1");
      $(".desp2").removeClass("showDesp2");
      jQuery("html, body").animate({
        scrollTop : "0px"
      });
    } else {
      $(".desp1").addClass("showDesp1");
      $(".desp2").removeClass("showDesp2");

    }

  });

  $(".tog2").click(function() {
    if ($(".desp2").hasClass("showDesp2")) {
      $(".desp2").removeClass("showDesp2");
      $(".desp1").removeClass("showDesp1");
      jQuery("html, body").animate({
        scrollTop : "0px"
      });
    } else {
      $(".desp2").addClass("showDesp2");
      $(".desp1").removeClass("showDesp1");

    }

  });

  $(".logginBTN").click(function() {
    if ($(".logginWrapper").hasClass("showLogin")) {
      $(".logginWrapper").removeClass("showLogin");
    } else {
      $(".logginWrapper").addClass("showLogin");
    }
  });

  $(document).on('click',".userGaleryimg",function() {
    var $padre = $(this).parent().parent().parent();
    $(".statusXPUser").removeClass('showStatusbar');
    $(".insideStatus").removeClass('insideStatusOpen');
    $padre.addClass('showStatusbar');
    $padre.find('.insideStatus').addClass('insideStatusOpen');

  });
  $(document).on('click',".closeX",function() {
    $(".statusXPUser").removeClass('showStatusbar');
    $(".insideStatus").removeClass('insideStatusOpen');
  });

  jQuery('#showMenu').click(function() {
    //jQuery('body').addClass('totalizer2');
    jQuery('.container').addClass('ocultaMenuV');

  });
  jQuery('.closeX2').click(function() {
    jQuery('#perspective').removeClass('animate');
    jQuery('#perspective').removeClass('modalview');
  });

  jQuery('.effect-airbnb').click(function(){
    jQuery('.closeX2').click();
    jQuery('#perspective').removeClass('animate');
    jQuery('#perspective').removeClass('modalview');
  });

  //console.log('hola');
  if (jQuery('a.menuBTN').length) {
    jQuery('body').addClass('totalizer2');
  } /*else {
    jQuery('body').removeClass('totalizer2');
  }*/



  app = jQuery.browser.mobile;
  //alert(app);

  /*if (app) {

    /*jQuery('.insideStatus').css({
      'z-index' : '1000000000000'
    });
  }*/

});