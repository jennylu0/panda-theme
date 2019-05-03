jQuery(document).ready(function() {

	// Owl carousel
	if ( jQuery('.owl-carousel').length ) {
		jQuery(".owl-carousel").owlCarousel({
			loop:true,
		    margin:10,
		    nav:true,
		    dots:true,
		    center:true,
		    items: 1,
		    stagePadding: 100,
		    responsive: {
		    	0: {
		    		stagePadding: 0
		    	},

		    	576: {
		    		stagePadding: 50
		    	},

		    	768: {
		    		stagePadding: 100
		    	}
		    }
		});
	}


	// Bootstrap modal for contact page

	var $contactlink = jQuery('.contact-modal a').attr('href');

	jQuery('.contact-modal a').attr('data-toggle', 'modal');
    jQuery('.contact-modal a').attr('data-target', $contactlink);



});