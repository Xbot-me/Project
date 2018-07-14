(function($) {

    "use strict";


	/* FIXED NAVIGATION */

	$(window).scroll(function() {
		if($(this).scrollTop()>90) {
			$( ".SHtaken-header-navigation" ).addClass("fixed-navigation");
		} else {
			$( ".SHtaken-header-navigation" ).removeClass("fixed-navigation");
		}
	});
	/* PRELOADER */
		
	function SHtaken_preloader() {
		setTimeout(function() {
		  $('body').addClass('SHtaken-loaded');
		},1000);
	  }
    SHtaken_preloader();
	
	/* WOW JS*/
	
    var wow = new WOW(
	  {
	  boxClass:     'wow',      // default
	  animateClass: 'animated', // default
	  offset:       0,          // default
	  mobile:       true,       // default
	  live:         true        // default
	}
	)
	wow.init();
	
	/* NAVIGATION MENU */
	
	  $('.slimmenu').slimmenu(
		{
			resizeWidth: '800',
			collapserTitle: 'Main Menu',
			animSpeed:'medium',
			indentChildren: true,
		});
	
    /* SHtaken CLIENT CAROUSEL */
	
	$('.SHtaken-client-carousel').owlCarousel({
		autoplay:true,
		loop:true,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:2,
			},
			600:{
				items:2,
			},
			1000:{
				items:3,
			}
		}
	})
	/* ABOUT AUTHOR INFO CAROUSEL */
	
	
	$('.about-author-info-carousel').owlCarousel({
		autoplay:true,
		loop:true,
		margin:30,
		nav:false,
		responsive:{
			0:{
				items:1,
			},
			1000:{
				items:2,
			}
		}
	})
	
	/* TESTIMONIAL INSTRUCTOR CAROUSEL */
	
	$('.testimonial-instructor-carousel').owlCarousel({
		autoplay:true,
		loop:true,
		margin:30,
		nav:true,
		dots:false,
		responsive:{
			0:{
				items:1,
			},
			768:{
				items:3,
			},
			1000:{
				items:4,
			}
		}
	})
	
	/* UPCOMING EVENT CALENDAR */
	
	$("#upcoming-event-calendar").zabuto_calendar({
      show_previous: true,
      show_next: true
    });
    
    $(".zabuto_calendar").find(".table").addClass("table-responsive");
	
	/* ISOTOP FILTERS */
	
	$(document).ready(function(){
	    
    	var $grid = $('.gallery-filter-wrapper').isotope({
    	  itemSelector: '.gallery-item',
    	  layoutMode: 'fitRows',
    	});
    	var filterFns = {
    	  numberGreaterThan50: function() {
    		var number = $(this).find('.number').text();
    		return parseInt( number, 10 ) > 50;
    	  }
    	};
    	$('#gallery-filter').on( 'click', 'button', function() {
    	  var filterValue = $( this ).attr('data-filter');
    	  filterValue = filterFns[ filterValue ] || filterValue;
    	  $grid.isotope({ filter: filterValue });
    	});
	});
	


	
	/* GOOGLE MAP */

	
	    var map;
	    function initMap() {
			    if ($("#SHtaken-map").length > 0) {
			
        var map = new google.maps.Map(document.getElementById('SHtaken-map'), {
          zoom:12,
          center: {lat:40.0545076, lng:-105.0919194}
        });

        var image = 'images/contact-info-logo.png';
        var beachMarker = new google.maps.Marker({
          position: {lat:40.0545076, lng:-105.0919194},
          map: map,
          icon: image
        });
      }
      }
	  
	  initMap();
	  
 


	  
})(jQuery);
