<!--#Style-Switcher-->
<style>
.accordion_toolbar_content ul li ul{display:none}.accordion_toolbar_content ul li i{color:#555;position:absolute;right:0;top:9px}.accordion_toolbar_content ul li ul li:last-child{padding-bottom:0}.accordion_toolbar_content ul li ul li{padding-left:10px}.accordion_toolbar_content ul ul{margin-top:5px}.colorpicker{z-index:999999}ul#navigation{position:fixed;width:200px;margin:0;padding:0;top:120px;left:0;list-style:none;z-index:999999}ul#navigation li.style-switcher{width:30px}ul#navigation li span{position:absolute;right:-40px;color:#262626;font-size:25px;line-height:39px;display:block;z-index:1;cursor:pointer}#panel h5{color:#fff!important;font-family:"Raleway",sans-serif!important;font-size:13px;font-weight:600!important;letter-spacing:1px;line-height:1.57143em;margin:0 0 8px;padding:12px 0 0 25px;text-transform:uppercase}#panel{background:#262626;color:#adacac;float:left;padding:0;position:relative;width:200px;z-index:9999;position:relative}#panel p{border-top:1px solid #3d3d3d;color:#adacac!important;cursor:pointer;font-family:"Raleway",sans-serif!important;font-size:11px!important;font-weight:600!important;letter-spacing:1px;line-height:11px!important;margin:0;padding:14px 25px;position:relative;text-transform:uppercase;transition:background-color .3s ease-in-out 0s,color .2s ease 0}#panel p.ui-state-active{background-color:#202020;color:#fff!important}#panel p:hover{color:#fff!important;transition:color .2s ease 0}#panel p:hover i{color:#fff!important}#panel p i{color:#5d5d5d;float:right;width:auto}.accordion_toolbar_content{background-color:#202020;padding:0 25px}.accordion_toolbar_content ul li{position:relative;padding:5px 0 5px 5px;font-family:arial;font-size:10px;text-transform:uppercase;border-top:1px dotted #333;color:#adacac;cursor:pointer;display:inline-block;font-weight:400;letter-spacing:0;line-height:20px;width:100%}.accordion_toolbar_content #tootlbar_colors ul li{float:left;line-height:25px;margin-right:5px;width:25px}.accordion_toolbar_content ul li:hover{color:#fff;transition:color .2s ease 0}.accordion_toolbar_content ul li{transition:color .2s ease 0}.accordion_toolbar_content{background-color:#202020;padding:0 25px;margin:0}.accordion_toolbar_content ul{margin:0;font-size:14px;list-style-position:inside}#tootlbar_colors li{display:inline-block;margin:0 15px 0 0;width:auto}#tootlbar_colors li:nth-child(4n){margin:0}#tootlbar_colors .color{height:23px;width:23px;border:1px solid transparent;cursor:pointer;position:relative}#panel p.ui-state-active{background-color:#202020;color:#fff!important}#tootlbar_colors .color.active{border-color:#222}.inputColor,#tootlbar_colors .color{float:left}.inputColor input[type="text"]{width:90px;padding:2px 10px;height:23px}

@media only screen and (max-width: 1000px) {ul#navigation{display:none;}}
</style>
<link href="<?php bloginfo('template_directory'); ?>/selector/css/font-awesome.min.css" rel="stylesheet" media="all" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('template_directory'); ?>/selector/css/colorpicker.css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/selector/js/cookie.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/selector/js/colorpicker.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/selector/js/style-switcher.js"></script>


<ul id="navigation" class="merchant">
  <li class="style-switcher"><span><em class="icon-cog"></em></span>
    <div id="panel">
    <h5>Theme Options</h5>
    <div class="panel-admin-box">
      <div class="accordion_toolbar">
        <p class="accordion_toolbar_header">WooCommerce <i class="icon-angle-right"></i></p>
        <div class="accordion_toolbar_content">
          <ul id="tootlbar_scrollbar" class="choose_option">
            <li>Sidebar <i class="icon-angle-right"></i>
            	<ul id="tootlbar_scrollbar" class="choose_option woo_sidebar_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
	    </li>
            <li>Navigation <i class="icon-angle-right"></i>
            	<ul id="tootlbar_scrollbar" class="choose_option woo_nav_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
            <li>Social Share <i class="icon-angle-right"></i>
            	<ul id="tootlbar_scrollbar" class="choose_option woo_social_icon_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li> 
        </div>
        <p class="accordion_toolbar_header">Header <i class="icon-angle-right"></i></p>
        <div class="accordion_toolbar_content">
          <ul id="tootlbar_scrollbar" class="choose_option">
            <li>Sticky <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option header_sticky_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Announcement <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option announcement_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Search Bar <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option  search_bar_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
           </ul>
        </div>
        <p class="accordion_toolbar_header">Blog <i class="icon-angle-right"></i></p>
        <div class="accordion_toolbar_content">
          <ul id="tootlbar_scrollbar" class="choose_option">
           <li>Social Bar <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option blog_social_bar_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Tags <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option blog_tags_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Author <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option blog_author_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Related Posts <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option blog_related_post_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Pagination <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option blog_pagination_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Comments <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option blog_comments_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
           </ul>
        </div>      
        <p class="accordion_toolbar_header">Footer <i class="icon-angle-right"></i></p>
        <div class="accordion_toolbar_content">
          <ul id="tootlbar_scrollbar" class="choose_option">
            <li>Menu <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option footer_menus_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
	    <li>Payment Gateways <i class="icon-angle-right"></i>
                 <ul id="tootlbar_scrollbar" class="choose_option footer_payment_icon_options">
	            <li data-value="yes">Yes</li>
	            <li data-value="no">No</li>
	          </ul>
            </li>
           </ul>
        </div>  
        <p class="accordion_toolbar_header">Colors <i class="icon-angle-right"></i></p>
        <div class="accordion_toolbar_content">
          <ul id="tootlbar_scrollbar" >
          <li>Active <i class="icon-angle-right"></i>
                 <ul id="tootlbar_colors" class="choose_option color_active_options">
	              <li><div class="inputColor"><input type="text" class="colorPickActive" value="#e74c3c"/></div><div class="color color2" data-color="#e74c3c" style="background-color:#e74c3c;"></div></li>
	            </ul>
            </li>
          <li>Hover <i class="icon-angle-right"></i>
                    <ul id="tootlbar_colors" class="choose_option color_hover_options">
	              <li><div class="inputColor"><input type="text" class="colorPickHover" value="#1abc9c"/></div><div class="color color1" data-color="#1abc9c" style="background-color:#1abc9c;"></div></li>
	            </ul>
            </li>          
          <li>Background <i class="icon-angle-right"></i>
                    <ul id="tootlbar_colors" class="choose_option color_bg_options">
	             
	              <li><div class="inputColor"><input type="text" class="colorPickBg" value="#9b59b6"/></div><div class="color color3" data-color="#9b59b6" style="background-color:#9b59b6;"></div></li>
	             
	            </ul>
            </li>  
          </ul>
	</div>
      </div>
    </div>
  </li>
</ul>
