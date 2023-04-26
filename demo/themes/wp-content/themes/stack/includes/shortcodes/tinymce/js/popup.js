
// start the popup specific scripts
// safe to use $
jQuery(document).ready(function($) {
    var premiums = {
    
    	loadVals: function(){
    		var shortcode = $('#_premium_shortcode').text(),
    			uShortcode = shortcode;
    		
    		// fill in the gaps eg {{param}}
    		$('.premium-input').each(function() {
    			var input = $(this),
    				id = input.attr('id'),
    				id = id.replace('premium_', ''),		// gets rid of the premium_ prefix
    				re = new RegExp("{{"+id+"}}","g");
    				
    			uShortcode = uShortcode.replace(re, input.val());
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_premium_ushortcode').remove();
    		$('#premium-sc-form-table').prepend('<div id="_premium_ushortcode" class="hidden">' + uShortcode + '</div>');
    	},
    	
    	cLoadVals: function(){
    		var shortcode = $('#_premium_cshortcode').text(),
    			pShortcode = '';
    			shortcodes = '';
    		
    		// fill in the gaps eg {{param}}
    		$('.child-clone-row').each(function() {
    			var row = $(this),
    				rShortcode = shortcode;
    			
    			$('.premium-cinput', this).each(function() {
    				var input = $(this),
    					id = input.attr('id'),
    					id = id.replace('premium_', '')		// gets rid of the premium_ prefix
    					re = new RegExp("{{"+id+"}}","g");
    					
    				rShortcode = rShortcode.replace(re, input.val());
    			});
    	
    			shortcodes = shortcodes + rShortcode + "\n";
    		});
    		
    		// adds the filled-in shortcode as hidden input
    		$('#_premium_cshortcodes').remove();
    		$('.child-clone-rows').prepend('<div id="_premium_cshortcodes" class="hidden">' + shortcodes + '</div>');
    		
    		// add to parent shortcode
    		this.loadVals();
    		pShortcode = $('#_premium_ushortcode').text().replace('{{child_shortcode}}', shortcodes);
    		
    		// add updated parent shortcode
    		$('#_premium_ushortcode').remove();
    		$('#premium-sc-form-table').prepend('<div id="_premium_ushortcode" class="hidden">' + pShortcode + '</div>');
    	},
    	
    	children: function() {
    		// assign the cloning plugin
    		$('.child-clone-rows').appendo({
    			subSelect: '> div.child-clone-row:last-child',
    			allowDelete: false,
    			focusFirst: false
    		});
    		
    		// remove button
    		$('.child-clone-row-remove').live('click', function() {
    			var	btn = $(this),
    				row = btn.parent();
    			
    			if( $('.child-clone-row').size() > 1 )
    			{
    				row.remove();
    			}
    			else
    			{
    				alert('You need a minimum of one row');
    			}
    			
    			return false;
    		});
    		
    		// assign jUI sortable
    		$( ".child-clone-rows" ).sortable({
				placeholder: "sortable-placeholder",
				items: '.child-clone-row'
				
			});
    	},
    	
    	resizeTB: function(){
			var	ajaxCont = $('#TB_ajaxContent'),
				tbWindow = $('#TB_window'),
				premiumPopup = $('#premium-popup');

            tbWindow.css({
                height: premiumPopup.outerHeight() + 50,
                width: premiumPopup.outerWidth(),
                marginLeft: -(premiumPopup.outerWidth()/2)
            });

			ajaxCont.css({
				paddingTop: 0,
				paddingLeft: 0,
				paddingRight: 0,
				height: (tbWindow.outerHeight()-47),
				overflow: 'auto', // IMPORTANT
				width: premiumPopup.outerWidth()
			});
			
			$('#premium-popup').addClass('no_preview');
    	},
    	
    	load: function(){
    		var	premiums = this,
    			popup = $('#premium-popup'),
    			form = $('#premium-sc-form', popup),
    			shortcode = $('#_premium_shortcode', form).text(),
    			popupType = $('#_premium_popup', form).text(),
    			uShortcode = '';
    		
    		// resize TB
    		premiums.resizeTB();
    		$(window).resize(function() { premiums.resizeTB() });
    		
    		// initialise
    		premiums.loadVals();
    		premiums.children();
    		premiums.cLoadVals();
    		
    		// update on children value change
    		$('.premium-cinput', form).live('change', function() {
    			premiums.cLoadVals();
    		});
    		
    		// update on value change
    		$('.premium-input', form).change(function() {
    			premiums.loadVals();
    		});
   
    		// colorpicker 
			$($( '.premiumwd-color-picker' )).ColorPicker({
				onSubmit: function(hsb, hex, rgb, el) {
					$(el).val(hex);
					$(el).ColorPickerHide();
					$(el).attr('style', 'background-color: #'+hex);
					premiums.loadVals();
				},
				onBeforeShow: function () {
					$(this).ColorPickerSetColor(this.value);
				}
			}).bind('keyup', function(){
				$(this).ColorPickerSetColor(this.value);
			});
			
    		
    		// when insert is clicked
    		$('.premium-insert', form).click(function() {    		 			
    			if(window.tinyMCE)
				{
					var tmce_ver=window.tinyMCE.majorVersion;

					if (tmce_ver>="4") {
				        window.tinyMCE.execCommand('mceInsertContent', false, $('#_premium_ushortcode', form).html());
			    	} else {
					window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, $('#_premium_ushortcode', form).html());
					}
					tb_remove();
				}
    		});
    	}
	}
    
    // run
    $('#premium-popup').livequery( function() { premiums.load(); } );
});