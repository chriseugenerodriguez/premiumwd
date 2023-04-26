jQuery(document).ready(function($) {
	$('.woo_sidebar_options li').on("click", function(el){
		el.preventDefault();
		var woo_sidebar = $(this).attr('data-value');
		 if(woo_sidebar=='no')
			 {
				 $('.woocommerce-page .shop .three.columns').hide();
				 $('.woocommerce-page .shop .nine.columns').css('width','100%');
			 }
			 else{
				$('.woocommerce-page .shop .three.columns').show();
				 $('.woocommerce-page .shop .nine.columns').css('width','72.1%'); 
			 }
		$.cookie("woo-sidebar",woo_sidebar);
	  });
	    $('.woo_nav_options li').on("click", function(el){
		el.preventDefault();
		var woo_nav = $(this).attr('data-value');
		 if(woo_nav=='no')
			 {
				 $('.woocommerce-page .bread-nav .page-nav').hide();
				
			 }
			 else{
				$('.woocommerce-page .bread-nav .page-nav').show();
			 }
		$.cookie("woo-nav",woo_nav);
	  });
	  $('.woo_social_icon_options li').on("click", function(el){
		el.preventDefault();
		var woo_social = $(this).attr('data-value');
		 if(woo_social=='no')
			 {
				 $('.woocommerce-page .share #shareme').hide();
				
			 }
			 else{
				$('.woocommerce-page .share #shareme').show();
			 }
		$.cookie("woo-social",woo_social);
	  });
	 $('.announcement_options li').on("click", function(el){
		el.preventDefault();
		var header_annoncement = $(this).attr('data-value');
		 if(header_annoncement=='no')
			 {
				 $('header#main .bannertext').hide();
			 }
			 else{
				$('header#main .bannertext').show(); 
		
			 }
		$.cookie("header-annoncement",header_annoncement);
	  });
	   $('.header_sticky_options li').on("click", function(el){
		el.preventDefault();
		var header_sticky = $(this).attr('data-value');
		 if(header_sticky=='no')
			 {
				 $('header#main, #theme-wrapper').removeClass('sticky');
			 }
			 else{
				 $('header#main, #theme-wrapper').addClass('sticky'); 
			
			 }
		$.cookie("header-sticky",header_sticky);
	  });
	   $('.search_bar_options li').on("click", function(el){
		el.preventDefault();
		var header_search = $(this).attr('data-value');
		 if(header_search=='no')
			 {
			$('.twelve li#header-search').css('display','none');
			 }
			 else{
					 $('.twelve li#header-search').css('display','inline-block');
			 }
		$.cookie("header-search",header_search);
	  });
	 $('.blog_social_bar_options li').on("click", function(el){
		el.preventDefault();
		var blog_social = $(this).attr('data-value');
		 if(blog_social=='no')
			 {
				 $('.single-post #shareme').hide();
			 }
			 else{
				$('.single-post #shareme').show(); 
			 }
		$.cookie("blog-social",blog_social);
	  });
	   $('.blog_tags_options li').on("click", function(el){
		el.preventDefault();
		var blog_tag = $(this).attr('data-value');
		 if(blog_tag=='no')
			 {
				 $('.single-post .post-tags').hide();
			 }
			 else{
				$('.single-post .post-tags').show(); 
			 }
		$.cookie("blog-tag",blog_tag);
	  });
	    $('.blog_author_options li').on("click", function(el){
		el.preventDefault();
		var blog_author = $(this).attr('data-value');
		 if(blog_author=='no')
			 {
				 $('.post .post-meta.group li:nth-child(3n)').hide();
			 }
			 else{
				$('.post .post-meta.group li:nth-child(3n)').show(); 
			 }
		$.cookie("blog-author",blog_author);
	  });
	  $('.blog_related_post_options li').on("click", function(el){
		el.preventDefault();
		var blog_related_post_options = $(this).attr('data-value');
		 if(blog_related_post_options=='no')
			 {
				 $('.single-post #blog-similar-posts').hide();
			 }
			 else{
				$('.single-post #blog-similar-posts').show(); 
			 }
		$.cookie("blog-related",blog_related_post_options);
	  });
	   $('.blog_pagination_options li').on("click", function(el){
		el.preventDefault();
		var blog_pagination_options = $(this).attr('data-value');
		 if(blog_pagination_options=='no')
			 {
				 $('.single-post .post-nav').hide();
			 }
			 else{
				$('.single-post .post-nav').show(); 
			 }
		$.cookie("blog-pagination",blog_pagination_options);
	  });
	     $('.blog_comments_options li').on("click", function(el){
		el.preventDefault();
		var blog_comments_options = $(this).attr('data-value');
		 if(blog_comments_options=='no')
			 {
				 $('.single-post #comments').hide();
				 $('.single-post .comment_form').hide();
			 }
			 else{
				$('.single-post #comments').show(); 
				$('.single-post .comment_form').show();
			 }
		$.cookie("blog-comment",blog_comments_options);
	  });
	 
	  $('.footer_payment_icon_options li').on("click", function(el){
		el.preventDefault();
		var footer_icon = $(this).attr('data-value');
		 if(footer_icon=='no')
			 {
				 $('#footer .social-links').hide();
			 }
			 else{
				$('#footer .social-links').show(); 
			 }
		$.cookie("footer-icon",footer_icon);
	  });
	   $('.footer_menus_options li').on("click", function(el){
		el.preventDefault();
		var footer_menus = $(this).attr('data-value');
		 if(footer_menus=='no')
			 {
				 $('#footer .footer.megaWrapper').hide();
			 }
			 else{
				 $('#footer .footer.megaWrapper').show();
			 }
		$.cookie("footer-menus",footer_menus);
	  });
	  $('.color_active_options .colorPickActive').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				$('.color_active_options li .color').css('backgroundColor', '#' + hex);
				var color_active = '#' + hex;
				$(el).val(color_active);
				$(el).ColorPickerHide();
				$('body .container a:active').css('color',color_active);
				$('body a:active').css('color',color_active);
				$.cookie("color-active",color_active);
				},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		
		});
		$('.color_hover_options .colorPickHover').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
			$('.color_hover_options li .color').css('backgroundColor', '#' + hex);
			var color_hover = '#' + hex;
			$(el).val(color_hover);
			$(el).ColorPickerHide();
			$('body .account-holder ul li a').hover(
			function(){ $(this).css('color',color_hover);}, 
			function(){ $(this).css('color','#cccccc');
			});
			$('body header nav.sub-nav ul > li a').hover(
			function(){ $(this).css('color',color_hover);}, 
			function(){ $(this).css('color','#666');
			});
			$('body #footer li a').hover(
			function(){ $(this).css('color',color_hover);}, 
			function(){ $(this).css('color','#e74c3c');
			});
			$('body .container #sidebar a').hover(function(){
			$(this).css('color',color_hover);
			}, function(){
			$(this).css('color','#888');
			});
			$.cookie("color-hover",color_hover);
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		});
	  $('.color_bg_options .colorPickBg').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				$('.color_bg_options li .color').css('backgroundColor', '#' + hex);
				var color_bg = '#' + hex;
				$(el).val(color_bg);
				$(el).ColorPickerHide();
				$('body').css('background',color_bg);
				//$('.inputPickBg').val(color_bg);
				$.cookie("color-bg",color_bg);
			
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		});
	  
	  var woo_sidebar_scheme = $.cookie("woo-sidebar");
	  var woo_nav_scheme = $.cookie("woo-nav");
	  var woo_social_scheme = $.cookie("woo-social");
	  var header_annoncement_scheme = $.cookie("header-annoncement");
	  var header_sticky_scheme = $.cookie("header-sticky");
	  var header_search_scheme = $.cookie("header-search");
	  var blog_social_scheme = $.cookie("blog-social");
	  var blog_tag_scheme = $.cookie("blog-tag");
	  var blog_author_scheme = $.cookie("blog-author");
	  var blog_related_scheme = $.cookie("blog-related");
	  var blog_pagination_scheme = $.cookie("blog-pagination");
	  var blog_comment_scheme = $.cookie("blog-comment");
	  var footer_icon_scheme = $.cookie("footer-icon");
	  var footer_menus_scheme = $.cookie("footer-menus");
	  var color_active_scheme = $.cookie("color-active");
	  var color_hover_scheme = $.cookie("color-hover");
	  var color_bg_scheme = $.cookie("color-bg");
	  
	   if( woo_social_scheme != "" && woo_social_scheme != undefined )
	   {
		    if(woo_social_scheme=='no')
			 {
				 $('.woocommerce-page .share #shareme').hide();
				
			 }
			 else{
				$('.woocommerce-page .share #shareme').show();
			 }
	   }
	    if( woo_nav_scheme != "" && woo_nav_scheme != undefined )
	   {
		    if(woo_nav_scheme=='no')
			 {
				 $('.woocommerce-page .bread-nav .page-nav').hide();
				
			 }
			 else{
				$('.woocommerce-page .bread-nav .page-nav').show();
			 }
	   }
	   if( woo_sidebar_scheme != "" && woo_sidebar_scheme != undefined )
	   {
		    if(woo_sidebar_scheme=='no')
			 {
				 $('.woocommerce-page .shop .three.columns').hide();
				 $('.woocommerce-page .shop .nine.columns').css('width','100%');
			 }
			 else{
				$('.woocommerce-page .shop .three.columns').show();
				 $('.woocommerce-page .shop .nine.columns').css('width','72.1%'); 
			 }
	   }
	   if( header_annoncement_scheme != "" && header_annoncement_scheme != undefined )
	   {
			if(header_annoncement_scheme=='no')
			 {
				 $('header#main .bannertext').hide();
				
			 }
			 else{
				$('header#main .bannertext').show(); 
			
			 }
		}
		if( header_sticky_scheme != "" && header_sticky_scheme != undefined )
	   {
			if(header_sticky_scheme=='no')
			{
				 $('header#main').removeClass('sticky');
			 }
			 else{
				 $('header#main').addClass('sticky'); 
			
			 }
		}
		if( header_search_scheme != "" && header_search_scheme != undefined )
	   {
			if(header_search_scheme=='no')
			 {
				 $('.twelve li#header-search').css('display','none');
			 }
			 else{
				$('.twelve li#header-search').css('display','inline-block'); 
			 }
		}
	  if( blog_social_scheme != "" && blog_social_scheme != undefined )
		 {
			if(blog_social_scheme=='no')
			 {
				 $('.single-post #shareme').hide();
			 }
			 else{
				$('.single-post #shareme').show(); 
			 }
		 }
	   if( blog_tag_scheme != "" && blog_tag_scheme != undefined )
		 {
			 if(blog_tag_scheme=='no')
			 {
				 $('.single-post .post-tags').hide();
			 }
			 else{
				$('.single-post .post-tags').show(); 
			 }
		 }
		  if( blog_author_scheme != "" && blog_author_scheme != undefined )
		 {
			  if(blog_author_scheme=='no')
			 {
				 $('.post .post-meta.group li:nth-child(3n)').hide();
			 }
			 else{
				$('.post .post-meta.group li:nth-child(3n)').show(); 
			 }
		 }
		  if( blog_related_scheme != "" && blog_related_scheme != undefined )
		 {
			 if(blog_related_scheme=='no')
			 {
				 $('.single-post #blog-similar-posts').hide();
			 }
			 else{
				$('.single-post #blog-similar-posts').show(); 
			 }
		 }
		  if( blog_pagination_scheme != "" && blog_pagination_scheme != undefined )
		 {
			  if(blog_pagination_scheme=='no')
			 {
				 $('.single-post .post-nav').hide();
			 }
			 else{
				$('.single-post .post-nav').show(); 
			 }
		 }
		  if( blog_comment_scheme != "" && blog_comment_scheme != undefined )
		 {
			  if(blog_comment_scheme=='no')
			 {
				 $('.single-post #comments').hide();
				 $('.single-post .comment_form').hide();
			 }
			 else{
				$('.single-post #comments').show(); 
				$('.single-post .comment_form').show();
			 }
		 }
	   if( footer_icon_scheme != "" && footer_icon_scheme != undefined )
		 {
			 if(footer_icon_scheme=='no')
			 {
				 $('#footer .social-links').hide();
			 }
			  else{
				$('#footer .social-links').show(); 
			 }
		 }
		   if( footer_menus_scheme != "" && footer_menus_scheme != undefined )
		 {
			 if(footer_menus_scheme=='no')
			 {
				 $('#footer .footer.megaWrapper').hide();
			 }
			  else{
				 $('#footer .footer.megaWrapper').show();
			 }
		 }
		 if( color_active_scheme != "" && color_active_scheme != undefined )
		 {
			 $('body .container a:active').css('color',color_active_scheme);
			 $('.color_active_options .inputPickActive').val(color_active_scheme);
			 $('body a:active').css('color',color_active_scheme);
			 $('.color_active_options li .color.color2').css('background',color_active_scheme);
		 }
		  if( color_hover_scheme != "" && color_hover_scheme != undefined )
		 {
			 $('.color_hover_options li .color.color1').css('background',color_hover_scheme);
			 $('.color_hover_options .inputPickHover').val(color_hover_scheme);
			 $('body .account-holder ul li a').hover(function(){
				$(this).css('color',color_hover_scheme);
				}, function(){
				$(this).css('color','#cccccc');
				});
				$('body header nav.sub-nav ul > li a').hover(function(){
				$(this).css('color',color_hover_scheme);
				}, function(){
				$(this).css('color','#666');
				});
				$('body #footer li a').hover(function(){
				$(this).css('color',color_hover_scheme);
				}, function(){
				$(this).css('color','#e74c3c');
				});
				$('body .container #sidebar a').hover(function(){
				$(this).css('color',color_hover_scheme);
				}, function(){
				$(this).css('color','#888');
				});
				
		 }
		  if( color_bg_scheme != "" && color_bg_scheme != undefined )
		 {
			 $('body').css('background',color_bg_scheme);
			 $('.color_bg_options .inputPickBg').val(color_bg_scheme);
			 $('.color_bg_options li .color.color3').css('background',color_bg_scheme);
		 }
		 
		 
 });
 
 var count = 1;
jQuery(document).ready(function($) {
 $('ul#navigation li span').click(function() {
	 if(count == 1){
  		$('ul#navigation').animate({'left':'-200px'},200);
		count = 2;
	 } else {
		$('ul#navigation').animate({'left':'0px'},200); 
		count = 1;
	 }
 });
 
 	$(".accordion_toolbar").accordion({
		animate: "swing",
		collapsible: true,
		active: 6,
		icons: "",
		heightStyle: "content"
	});
	$("#tootlbar_scrollbar li").click(function(){
		$('#tootlbar_scrollbar li ul').hide();	
		$(this).children('ul').toggle();	
	});
});