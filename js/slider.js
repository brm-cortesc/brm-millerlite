//$('.single-item').slick({
	  //dots: false,
	//  infinite: true,
	//  speed: 300,
	//  slidesToShow: 1,
  //  adaptiveHeight: true,
   // centerMode: true,

	//});


jQuery(document).ready(function() {
$(".owl-carousel-mecanica").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 1, 
      singleItem:true,
      pagination: false
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
   });
// Custom Navigation Events
  //$(".nextBTN").click(function(){
   // owl.trigger('owl.next');
  //})
  //$(".prevBTN").click(function(){
   // owl.trigger('owl.prev');
 // })
 
});