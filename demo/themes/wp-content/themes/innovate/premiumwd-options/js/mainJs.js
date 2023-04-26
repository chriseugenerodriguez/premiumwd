function switch_tabs(obj)
{
    jQuery('.tab-content').hide();
    jQuery('#premiumwd-main-menu ul a').removeClass("selected");
    var id = obj.attr("rel");
    jQuery('#'+id).fadeIn(500);
   	<!--Ifuturevision changes start -->
	goToByScroll('premiumwd-content');   
	<!--Ifuturevision changes end -->
    obj.addClass("selected");
	jQuery("#activetab").val(id);
	<!--Ifuturevision changes start -->
	cookie: {
		// store cookie for a day, without, it would be a session cookie
		expires: 1
	}
	<!--Ifuturevision changes end -->

}
jQuery.fn.slideFadeToggle = function(speed, easing, callback) {
  return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
};

function checked_img($this){
    if($this.is(':checked')){
        $this.closest('label').addClass('premiumwd-img-selected');
    }
        
    else{
        $this.closest('label').removeClass('premiumwd-img-selected');
    }
}

function checked_img_radio($this){
    if($this.is(':checked')){
        $this.closest('.cOf').find('label.premiumwd-img-selected').removeClass('premiumwd-img-selected');
        $this.closest('label').addClass('premiumwd-img-selected');
    }
        
    else{
        $this.closest('label').removeClass('premiumwd-img-selected');
    }
}

jQuery(function(){
	  <!--Ifuturevision changes start --> 
    jQuery(".saved").delay(3200).fadeOut('slow');
	
    });

<!--Ifuturevision changes start, add new function to page scrool for div top -->
function goToByScroll(id){
      // Remove "link" from the ID
    //id = id.replace("link", "");
      // Scroll
    jQuery('html,body').animate({
        scrollTop: jQuery("#"+id).offset().top},
        'slow');
}
<!--Ifuturevision changes end -->


/* DOCUMENT READY */



jQuery(document).ready(function() {
                            
                            
    jQuery("#premiumwd-main-menu > li > p").click(function(){
                     
        jQuery(this).next().slideToggle(300);
    });
                     
                                    
                                    
    // Tabs
    jQuery('#premiumwd-main-menu ul a').click(function(){
        switch_tabs(jQuery(this));
    });
                     
    jQuery('.tab-content').hide();
                                    
    var id = jQuery('.defaulttab').attr('rel');
    jQuery('#'+id).show();
                        
    jQuery('.default-accordion').show();
                        
                        
    //Color picker
                        
    jQuery( '.premiumwd-color-picker' ).ColorPicker({
        onSubmit: function(hsb, hex, rgb, el) {
            jQuery(el).val(hex);
            jQuery(el).ColorPickerHide();
            jQuery(el).attr('style', 'background-color: #'+hex);
        },
        onBeforeShow: function () {
            jQuery(this).ColorPickerSetColor(this.value);
        }
    })
    .bind('keyup', function(){
        jQuery(this).ColorPickerSetColor(this.value);
    });  
    
    // Checkboxes and radio
    
    jQuery('.premiumwd-image-checkbox-b').click(function(){
        var $this = jQuery(this);
        
        checked_img($this);
    });
    
    jQuery('.premiumwd-image-radio-b').click(function(){
        var $this = jQuery(this);
        
        checked_img_radio($this);
    });
    
    
    
    
    
    //Checkbox HIDE/SHOW
    jQuery('input[type="checkbox"]').each(function(){
        var $this = jQuery(this);
        var id = $this.attr("id");
        if(!$this.is(':checked'))
            jQuery('div[rel="'+id+'"]').hide();
    });
    
    jQuery('input[type="checkbox"]').click(function(){
        var $this = jQuery(this);
        var id = $this.attr("id");
        if($this.is(':checked'))
            jQuery('div[rel="'+id+'"]').slideFadeToggle(500);
        else
            jQuery('div[rel="'+id+'"]').slideFadeToggle(500);
    });
    
    
    
    //AJAX upload
    jQuery('.premiumwd_upload').each(function(){
				
        var the_button=jQuery(this);
        var image_input=jQuery(this).prev();
        var image_id=jQuery(this).attr('id');
				
        new AjaxUpload(image_id, {
            action: ajaxurl,
            name: image_id,
					  
            // Additional data
            data: {
                action: 'premiumwd_ajax_upload',
                data: image_id
            },
            autoSubmit: true,
            responseType: false,
            onChange: function(file, extension){},
            onSubmit: function(file, extension) {
                the_button.html("Uploading...");				  
            },
            onComplete: function(file, response) {	
                the_button.html("Upload Image");
							
                if(response.search("Error") > -1){
                    alert("There was an error uploading:\n"+response);
                }
							
                else{							
                    image_input.val(response);
                    var image_preview='<img src="' + response + '" class="premiumwd_image_preview" />';							
								
                    var remove_button_id='remove_'+image_id;
                    var rem_id="#"+remove_button_id;
                    if(!(jQuery(rem_id).length > 0)){
                        the_button.after('<span class="premiumwd_remove premiumwd-button" id="'+remove_button_id+'">Remove Image</span>');
                    }
								
								
                    the_button.next().next().html(image_preview);
                }
								
								
							
            }
        });
    });
			
			
    //AJAX image remove
    jQuery('.premiumwd_remove').live('click', function(){
        var remove_button=jQuery(this);
        var image_remove_id=jQuery(this).prev().attr('id');
        remove_button.html('Removing...');
				
        var data = {
            action: 'premiumwd_ajax_remove',
            data: image_remove_id
        };
				
        jQuery.post(ajaxurl, data, function(response) {
            remove_button.prev().prev().val('');
            remove_button.next().html('');
            remove_button.remove();
		
        });
				
    });
    
});