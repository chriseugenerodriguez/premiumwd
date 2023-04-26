jQuery(function(){
                jQuery("#slides").slides({
			        generatePagination: false,
			        play: 3000
			      });
            });
			
			jQuery(document).ready(function() {
	  <!--Ifuturevision changes start --> 
    jQuery(".saved").delay(3200).fadeOut('slow');
	  <!--Ifuturevision changes end  --> 
	jQuery("#premiumwd-main-menu > li > p").click(function(){
    	var $this = jQuery(this);
        // acordion jQuery("#premiumwd-main-menu > li > p").next().slideUp(300);
        $this.next().slideToggle(300);
    });
});