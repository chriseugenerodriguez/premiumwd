<?php 
add_action('init' , 'add_scripts_custom');
function add_scripts_custom()
{
	add_action('wp_footer' , 'add_head_script');	
	add_action('wp_footer', 'footer_script');
}

function add_head_script(){ ?>
<script>
console.clear();
function getCookie(c_name)
{
var c_value = document.cookie;
var c_start = c_value.indexOf(" " + c_name + "=");
if (c_start == -1)
  {
  c_start = c_value.indexOf(c_name + "=");
  }
if (c_start == -1)
  {
  c_value = null;
  }
else
  {
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1)
    {
    c_end = c_value.length;
    }
  c_value = unescape(c_value.substring(c_start,c_end));
  }
return c_value;
}

function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value);
del_cookie(c_name);
document.cookie=c_name + "=" + c_value+";path=/";

}

function checkCookie(name)
{
var css =getCookie(name);
if (css!=null && css!="")
  {
	  return css;
  }
else 
  {
	return false;  
	}
}
function del_cookie(name)
{
    document.cookie = name + '=;path=/; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
	if(checkCookie("css")){
		css_file = getCookie("css");
		(document.createStyleSheet) ? document.createStyleSheet(css_file) : jQuery('<link rel="stylesheet" type="text/css" href="' + css_file + '" />').appendTo('head');
	}
	
	var p_class = '';
	if(checkCookie("p_class")){
		p_class = getCookie("p_class");
		jQuery("body").addClass(p_class);
	}
	
	
	jQuery(".predfine_color a").click(function() {
	if(checkCookie("css")){
		jQuery("head link:last").remove();
	}
	css_file = jQuery(this).attr("rel");
	(document.createStyleSheet) ? document.createStyleSheet(css_file) : jQuery('<link rel="stylesheet" type="text/css" href="' + css_file + '" />').appendTo('head');
		del_cookie("css");
		setCookie("css",jQuery(this).attr('rel'), 365);
		return false;
	
		
	});
	jQuery(".patterns_layout a").click(function() {
			if(jQuery("#layout_chocer").val() != 'wide'){
				jQuery("body").removeClass(p_class);
				p_class = jQuery(this).attr("href");
				jQuery("body").addClass(p_class);
				del_cookie("p_class");
		setCookie("p_class",jQuery(this).attr('href'), 2);
				return false;
			} else {
				alert("Only Apply on Boxed and Float Layout");	
				return false;
			}
		});
	jQuery(".images_layout a").click(function() {
		if(jQuery("#layout_chocer").val() != 'wide'){
			jQuery("body").removeClass(p_class);
			p_class = jQuery(this).attr("href");
			jQuery("body").addClass(p_class);
			del_cookie("p_class");
		setCookie("p_class",jQuery(this).attr('href'), 2);
			return false;
		} else {
			alert("Only Apply on Boxed and Float Layout");	
			return false;
		}
	});
});
</script>
<style type="text/css">
body.pattern-3{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-3.jpg) !important; }
body.pattern-40{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-40.jpg) !important; }
body.pattern-21{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-21.jpg) !important; }
body.pattern-66{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-66.jpg) !important; }
body.pattern-10{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-10.jpg) !important; }
body.pattern-54{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-54.jpg) !important; }
body.pattern-64{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-64.jpg) !important; }
body.pattern-51{ background-image:url(<?php bloginfo('template_directory');?>/premiumwd-options/assets/patterns/pattern-51.jpg) !important; }

body.demo1{ background-image:url(<?php bloginfo('template_directory');?>/images/demo/1.jpg) !important; moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover; background-position:center center; background-attachment:fixed; }
body.demo2{ background-image:url(<?php bloginfo('template_directory');?>/images/demo/2.jpg) !important; moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover; background-position:center center; background-attachment:fixed;}
body.demo3{ background-image:url(<?php bloginfo('template_directory');?>/images/demo/3.jpg) !important; moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover; background-position:center center; background-attachment:fixed; }
body.demo4{ background-image:url(<?php bloginfo('template_directory');?>/images/demo/4.jpg) !important; moz-background-size: cover; -webkit-background-size: cover; -o-background-size: cover; background-size: cover; background-position:center center; background-attachment:fixed; }

</style>
<?php } ?>
<?php 
function footer_script() { ?>
<script type="text/javascript">
var $wide = '#header{margin:0px;border-bottom:1px solid #DEDEDE;-moz-box-shadow: 0 5px 3px -10px rgba(0, 0, 0, 0.1), 0 0 3px rgba(0, 0, 0, 0.1);-webkit-box-shadow: 0 5px 3px -10px rgba(0, 0, 0, 0.1), 0 0 3px rgba(0, 0, 0, 0.1); box-shadow: 0 5px 3px -10px rgba(0, 0, 0, 0.1), 0 0 3px rgba(0, 0, 0, 0.1);}#wrapper{margin:0px !important;}#header,#footer{border-radius:0px;} #main{margin:0px;box-shadow:none;}.style-wrapper {background: none;border: none;box-shadow: none;margin: 0px;padding: 0px;}.slider,#featured img{width:100% !important;}#entry-content #primary, #entry-content #secondary, #entry-content #third, .entry-content{background:none;box-shadow: none;}#branding, #main, #wrapper, #header  {max-width:100% !important;}#main{margin-top:0px;}.entry-content-3, .entry-content-4, .single-project .entry-content {box-shadow: none;background: #fff;} #entry-title{background: #FCFCFC;border-bottom: 1px solid #E8E8E8;border-top: 1px solid #E8E8E8;box-shadow: 0 2px 0 0 #F7F7F7 inset, 0 -2px 0 0 #F7F7F7 inset;}';
var $boxed = '#header{border-bottom:0px none;}#header,#main{margin:0px;} #header{border-radius:0px;}.slider,#featured img{width:auto!important;}#footer{border-bottom-right-radius:0px;border-bottom-left-radius:0px;}#main, #header {-moz-box-shadow: 0 5px 3px -10px rgba(0, 0, 0, 0.3), 0 0 3px rgba(0, 0, 0, 0.2); -webkit-box-shadow: 0 5px 3px -10px rgba(0, 0, 0, 0.3), 0 0 3px rgba(0, 0, 0, 0.2); box-shadow: 0 5px 3px -10px rgba(0, 0, 0, 0.3), 0 0 3px rgba(0, 0, 0, 0.2);}.entry-content-3, .entry-content-4, .single-project .entry-content {background: #fdfdfd;} #wrapper{margin:0 auto !important; max-width:<?php echo get_option("premiumwd_width")?> !important}';
jQuery(document).ready(function(){
	var cook = getCookie("layout");

	if(cook != "" && cook != null){
		jQuery("#layout_chocer").val(cook);
	}
	var st = '';
	if(cook == 'wide') st = $wide;
	else if(cook == 'boxed') st = $boxed;
	else if(cook == 'float') st = $float;
	else st = $wide;

	
	jQuery("head").append('<style type="text/css">'+st+'</style>');
	
	
	
	jQuery("#layout_chocer").change(function(){
		var v = jQuery(this).val();
		del_cookie("layout");
		setCookie("layout",v);
		jQuery("#switchform").submit();		
	});
});
</script>
<?php

?>

<style>
    ul#navigation {
    position: fixed;
    margin: 0px;
    padding: 0px;
    top: 140px;
    left: 0px;
    list-style: none;
    z-index:999999;
}
ul#navigation li {
    width: 30px;
	height:30px;
}
ul#navigation li span {
    display: block;
    width: 32px;
	height:29px;
	padding: 7px 10px 10px 10px;
	border-top-right-radius:2px;
	border-bottom-right-radius:2px;  
	 box-shadow: 0 1px 1px 0 rgba(180, 180, 180, 0.1);
    background:#444;
	margin-left:-2px;
	z-index:1;
	border:1px solid #333;
	border-left:none ;
	cursor:pointer;
}
.style-main-title {
    border-bottom: 1px solid #333;
    color: #fff;
	background:#444;
    font-size: 11px;
    line-height: 27px;
    text-align: center;
}
   
  #panel {
	  font-family:Arial, Helvetica, sans-serif;
	background: #fff;
	 border-top: 1px solid #333;
	 border-right:none;
	height: 430px;
	display:block;
	width:165px;
	position:relative;
	top:-29px;left:-167px;
	border-bottom-right-radius:2px;
	border-bottom: 1px solid #d8d8d8;
}  
 .box-title:last-child {border-bottom:none;}
.box-title {
    border-bottom: 1px solid #d8d8d8;
	box-shadow: 0 1px 1px 0 rgba(180, 180, 180, 0.1);
	border-right: 1px solid #D8D8D8;
    font-size: 11px;
    height: auto;
    line-height: 18px;
    padding: 12px;
    text-align: center;
}   
.box-title img { border: 1px solid #e8e8e8;box-shadow: 0 1px 1px 0 rgba(180, 180, 180, 0.1);}
select {width:120px;margin:10px;padding:5px !important;}
    </style>
<ul id="navigation">
            <li class="style-switcher"><span><em class="icon-cog icon-white"></em></span>
            
             <div id="panel">
             <div id="options">
	<div class="style-main-title">Style Switcher</div>
    <div class="box-title">Choose a Layout Style
    <form id="switchform" action="" method="post">
	<?php $layout = strtolower(get_option('premiumwd_layout'));?>
	<select name="switchcontrol" size="1" id="layout_chocer" >
    <option value="boxed" <?php if ($layout == 'boxed') : ?> selected="selected" <?php endif; ?>>Box</option>
	<option value="wide" <?php if ($layout == 'wide') : ?> selected="selected" <?php endif; ?>>Wide</option>
	</select>
	</form>
    </div>
    
<div class="box-title patterns_layout">Patterns for Boxed, Float
	<div style="padding:10px 10px 0 10px;">
     <a href="pattern-3"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-3.jpg" width="25" height="25" /></a>
    <a href="pattern-40"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-40.jpg" width="25" height="25" /></a>
    <a href="pattern-21"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-21.jpg" width="25" height="25" /></a>
    <a href="pattern-66"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-66.jpg" width="25" height="25" /></a>
    <a href="pattern-10"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-10.jpg" width="25" height="25" /></a>
    <a href="pattern-54"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-54.jpg" width="25" height="25" /></a>
    <a href="pattern-64"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-64.jpg" width="25" height="25" /></a>
    <a href="pattern-51"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/assets/patterns/pattern-51.jpg" width="25" height="25" /></a>
    </div>
</div>

<div class="box-title images_layout">Images for Boxed, Float
	<div style="padding:10px 10px 0 10px;">
    <a href="demo1"><img src="<?php bloginfo('template_directory'); ?>/images/demo/1.jpg" width="25" height="25" /></a>
    <a href="demo2"><img src="<?php bloginfo('template_directory'); ?>/images/demo/2.jpg" width="25" height="25" /></a>
    <a href="demo3"><img src="<?php bloginfo('template_directory'); ?>/images/demo/3.jpg" width="25" height="25" /></a>
    <a href="demo4"><img src="<?php bloginfo('template_directory'); ?>/images/demo/4.jpg" width="25" height="25" /></a>


    </div>
    </div>

<div class="box-title predfine_color">Predefined Color Schemes
	<div style="padding:10px 10px 0 10px;">
     <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/grey.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/grey.png" width="25" height="25" /></a>
	 <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/white.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/white.png" width="25" height="25" /></a>
     <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/blue.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/blue.png" width="25" height="25" /></a>
	 <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/red.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/red.png" width="25" height="25" /></a>
     <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/green.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/green.png" width="25" height="25" /></a>
	 <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/orange.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/orange.png" width="25" height="25" /></a>
     <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/yellow.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/yellow.png" width="25" height="25" /></a>
	 <a href="#" rel="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/purple.css"><img src="<?php bloginfo('template_directory'); ?>/premiumwd-options/skins/images/purple.png" width="25" height="25" /></a>
	</div>
</div>
</div></div>
</li>
        </ul>
<script type="text/javascript">
var count = 1;
		jQuery(document).ready(function() {
 jQuery('ul#navigation li span').click(function() {
	 if(count == 1){
  		jQuery('ul#navigation li').animate({'marginLeft':'167px'},200);
		count = 2;
	 } else {
		jQuery('ul#navigation li').animate({'marginLeft':'0px'},200); 
		count = 1;
	 }
 });
});
</script>
<?php } ?>