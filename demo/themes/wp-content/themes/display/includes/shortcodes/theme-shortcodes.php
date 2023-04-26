<?php 

/*--------------------------------------------------------------------*/
/*	ENABLE SHORTCODE IN CONTENT
/*--------------------------------------------------------------------*/	
add_filter('the_content', 'do_shortcode');

/*--------------------------------------------------------------------*/
/*	ENABLLE SHORTCODE IN EXCEPT
/*--------------------------------------------------------------------*/
add_filter('the_excerpt', 'do_shortcode');

/*--------------------------------------------------------------------*/
/*	ENABLE SHORTCODE IN TEXT WIDGET
/*--------------------------------------------------------------------*/
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode', 11);

/*--------------------------------------------------------------------*/                							
/*  SOCIAL ICONS					                							
/*--------------------------------------------------------------------*/
if (!function_exists('social_icons')) {
    function social_icons($atts, $content = null) {
        $args = array(
            "type"                              => "",
            "icon"                              => "",
            "link"                              => "",
            "target"                            => "",
            "use_custom_size"                   => "",
            "custom_size"                       => "",
            "size"                              => "",
            "icon_color"                        => "",
            "icon_hover_color"                  => "",
            "background_color"                  => "",
            "background_hover_color"            => "",
            "background_color_transparency"     => "",
            "border_width"                      => "",
            "border_color"                      => "",
            "border_hover_color"                => "",
            "icon_margin"                       => ""
        );

        extract(shortcode_atts($args, $atts));

        $html               = "";
        $fa_display_styles    = "";
        $icon_styles        = "";
        $data_attr          = "";

        $background_color = $background_color != "" ? $background_color : "#e3e3e3";

        if(!empty($background_color_transparency) && ($background_color_transparency >= 0 && $background_color_transparency <= 1)) {
            $rgb = qode_hex2rgb($background_color);

            $background_color = 'rgba('.$rgb[0].', '.$rgb[1].', '.$rgb[2].', '.$background_color_transparency.')';
        }

        $fa_display_styles .= "background-color: {$background_color};";


        if($border_color != "") {
            $fa_display_styles .= "border-color: ".$border_color.";";
        }

        if($border_width != "") {
            $fa_display_styles .= "border-width: ".$border_width."px;";
        }

        if($icon_color != ""){
            $icon_styles .= "color: ".$icon_color.";";
        }

        if($icon_margin != "") {
            $icon_styles .= "margin: ".$icon_margin;
        }

        if($background_hover_color != "") {
            $data_attr .= "data-hover-background-color=".$background_hover_color." ";
        }

        if($border_hover_color != "") {
            $data_attr .= "data-hover-border-color=".$border_hover_color." ";
        }

        if($icon_hover_color != "") {
            $data_attr .= "data-hover-color=".$icon_hover_color;
        }

        if($use_custom_size == 'yes' && $custom_size != '') {
            $icon_styles .= 'font-size: '.$custom_size."px;";
            $fa_display_styles .= 'font-size: '.$custom_size."px;";
        }

        $html .= "<span class='social_icon_holder $type' $data_attr>";

        if($link != ""){
            $html .= "<a href='".$link."' target='".$target."'>";
        }

        if($type == "normal_social"){
            $html .= "<i class='fa ".$icon." ".$size." simple_social' style='".$icon_styles."'></i>";
        } else {
            $html .= "<span class='fa-display ".$size."' style='".$fa_display_styles."'>";
            $html .= "<i class='fa ".$icon."' style='".$icon_styles."'></i>";
            $html .= "</span>"; //close fa-display
        }

        if($link != ""){
            $html .= "</a>";
        }

        $html .= "</span>"; //close social_icon_holder
        return $html;
    }
}
add_shortcode('social_icon', 'social_icons');

/*--------------------------------------------------------------------*/                							
/*  SLIDER					                							
/*--------------------------------------------------------------------*/

if (!function_exists('slider_sc')) {
	
    function slider_sc($atts, $content = null) {
        global $js_slider_shortcode;
        $args = array(
            "type"                      => "images",
            "pagination"                => "true",
            "navigation"                => "true",
            "items"                		=> "1",
        );

        extract(shortcode_atts($args, $atts));

        //init variables
        $html  = "";
	
		if (!$js_slider_shortcode){
			$js_slider_shortcode = 0;
		}
		$element = sprintf("owl-%s",$js_slider_shortcode);
		$i_desktop = max(1, $item);
		$i_desktopsmall = max(1, $item - 1);
		$i_tablet = max(1, $item - 2);
		$html = "<script type='text/javascript'>	
		jQuery(document).ready(function($) {
			$('.$element').owlCarousel({
				 items : $items,
				 dots: $pagination,
				 nav: $navigation,
				 itemsDesktop : [1199, $i_desktop],
           		 itemsDesktopSmall : [979, $i_desktopsmall],
        		 itemsTablet : [768, $i_tablet]
			});
		});
	  </script>";
		$html .=  '<div class="owl-carousel '.$element.'" id="owl-'.$type.'" data-pagination="'.$pagination.'" data-navigation="'.$navigation.'" data-items="'.$items.'">' .$content. '</div>';
	    ++$js_slider_shortcode;
        return $html;
    }
}
add_shortcode('slider', 'slider_sc');


/*--------------------------------------------------------------------*/                							
/*  BUTTONS					                							
/*--------------------------------------------------------------------*/
if (!function_exists('button_sc')) {
    function button_sc($atts, $content = null) {

        $args = array(
            "size"                      => "",
            "style"                      => "",
            "icon"                      => "",
            "icon_color"                => "",
            "link"                      => "",
            "target"                    => "_self",
            "color"                     => "",
            "hover_color"               => "",
            "background_color"			=> "",
            "hover_background_color"    => "",
            "font_style"                => "",
            "text_align"                => "",
			"font_family" => ""
        );

        extract(shortcode_atts($args, $atts));

        if($target == ""){
            $target = "_self";
        }

        //init variables
        $html  = "";
        $button_classes = "button ";
        $button_styles  = "";
        $add_icon       = "";
        $data_attr      = "";

        if($size != "") {
            $button_classes .= " {$size}";
        }

        if($text_align != "") {
            $button_classes .= " {$text_align}";
        }
        if($color != ""){
            $button_styles .= 'color:#'.$color.'; ';
        }

        if($font_style != ""){
            $button_styles .= 'font-style: '.$font_style.'; ';
        }
		
		if($font_family != "" && $font_family != 0){
			global $fontArrays;
			$fontArrays = array_merge(array( '' => ' -- Select --') , $fontArrays);
			$fontUrl = 'http://fonts.googleapis.com/css?family='.urlencode($fontArrays[$font_family]);
			$font_slug = str_replace(" " , "-", strtolower($fontArrays[$font_family]));
			wp_enqueue_style('google-fonts-'.$font_slug, $fontUrl); 
			$button_styles .= 'font-family: \''.$fontArrays[$font_family].'\'; ';
		}

        if($icon != ""){
            $icon_style = "";
            if($icon_color != ""){
                $icon_style .= 'color:#'.$icon_color.';';
            }
            $add_icon .= '<i class="fa '.$icon.'" style="'.$icon_style.'"></i>';
        }

        if($background_color != "" ) {
            $button_styles .= "border-color:#{$background_color};";
        }

        if($hover_background_color != "") {
            $data_attr .= "data-hover-background-color=#".$hover_background_color." ";
        }

        if($hover_color != "") {
            $data_attr .= "data-hover-color=#".$hover_color;
        }

        $html .=  '<a href="'.$link.'" target="'.$target.'" '.$data_attr.' class="'.$button_classes.'" style="'.$button_styles.'">'.$content.' '.$add_icon.'</a>';

        return $html;
    }
}
add_shortcode('button', 'button_sc');

/*--------------------------------------------------------------------*/                							
/*  COLUMNS					                							
/*--------------------------------------------------------------------*/
if (!function_exists('one_column')) {
	function one_column( $atts, $content = null ) {
	   return '<div class="one columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('one_column', 'one_column');
}

if (!function_exists('two_column')) {
	function two_column( $atts, $content = null ) {
	   return '<div class="two columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('two_column', 'two_column');
}

if (!function_exists('three_column')) {
	function three_column( $atts, $content = null ) {
	   return '<div class="three columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('three_column', 'three_column');
}

if (!function_exists('four_column')) {
	function four_column( $atts, $content = null ) {
	   return '<div class="four columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('four_column', 'four_column');
}

if (!function_exists('five_column')) {
	function five_column( $atts, $content = null ) {
	   return '<div class="five columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('five_column', 'fifth_column');
}

if (!function_exists('six_column')) {
	function six_column( $atts, $content = null ) {
	   return '<div class="six columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('six_column', 'six_column');
}

if (!function_exists('seven_column')) {
	function seven_column( $atts, $content = null ) {
	   return '<div class="seven columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('seven_column', 'seven_column');
}

if (!function_exists('eight_column')) {
	function eight_column( $atts, $content = null ) {
	   return '<div class="eight columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('eight_column', 'eight_column');
}

if (!function_exists('nine_column')) {
	function nine_column( $atts, $content = null ) {
	   return '<div class="nine columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('nine_column', 'nine_column');
}

if (!function_exists('ten_column')) {
	function ten_column( $atts, $content = null ) {
	   return '<div class="ten columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('ten_column', 'ten_column');
}

if (!function_exists('eleven_column')) {
	function eleven_column( $atts, $content = null ) {
	   return '<div class="eleven columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('eleven_column', 'eleven_column');
}

if (!function_exists('twelve_column')) {
	function twelve_column( $atts, $content = null ) {
	   return '<div class="twelve columns">' . do_shortcode( $content ) . '</div>';
	}
	add_shortcode('twelve_column', 'twelve_column');
}

/*--------------------------------------------------------------------*/                							
/*  HIGHLIGHT					                							
/*--------------------------------------------------------------------*/
if (!function_exists('highlight')) {
    function highlight($atts, $content = null) {
        extract(shortcode_atts(array("color"=>"","background_color"=>"", "font_family" => ""), $atts));
        $html =  "<span class='highlight'";
        if($color != "" || $background_color != ""){
            $html .= " style='color:#".$color."; background-color:#".$background_color.";'";
        }
		if($font_family != "" && $font_family != 0){
			global $fontArrays;
			$fontArrays = array_merge(array( '' => ' -- Select --') , $fontArrays);
			$fontUrl = 'http://fonts.googleapis.com/css?family='.urlencode($fontArrays[$font_family]);
			$font_slug = str_replace(" " , "-", strtolower($fontArrays[$font_family]));
			wp_enqueue_style('google-fonts-'.$font_slug, $fontUrl); 
			$html .= 'font-family: \''.$fontArrays[$font_family].'\'; ';
		}
        $html .= ">" . $content . "</span>";
        return $html;
    }
}
add_shortcode('highlight', 'highlight');


/*--------------------------------------------------------------------*/                							
/*  TABS					                							
/*--------------------------------------------------------------------*/
if (!function_exists('tabs_sc')) {
	function tabs_sc( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );

		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }

		$output = '';

		if( count($tab_titles) ){
			
			$output .= '<div class="tabs boxed"><ul class="tabs-nav">';

			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#tab-'. sanitize_title( $tab[0] ) .'" data-toggle="tab">' . $tab[0] . '</a></li>';
			}
		    $output .= '</ul>';
		    
		    $output .= '<div class="tabs-container">';
		    $output .= do_shortcode( $content);
		    $output .= '</div></div>';
			
		} else {
			$output .= do_shortcode( $content );
		}

		return $output;
	}
	add_shortcode( 'tabs', 'tabs_sc' );

}

if (!function_exists('tab')) {

	function tab( $atts, $content = null ) {

		$defaults = array( 'title' => 'Tab' );
		extract( shortcode_atts( $defaults, $atts ) );

		return '<div id="tab-'. sanitize_title( $title ) .'" class="tab-content">'. do_shortcode( $content ) .'</div>';
	}
	add_shortcode( 'tab', 'tab' );
}



/*-----------------------------------------------------------------------------------*/
/*	TOGGLES
/*-----------------------------------------------------------------------------------*/
if (!function_exists('toggles')) {
    function toggles($atts, $content = null) {
        extract(shortcode_atts(array("accordion_type"=>""), $atts));
        return "<div class='accordion_holder toggle without_icon clearfix'>" . $content . "</div>";
    }
}
add_shortcode('toggles', 'toggles');

/*-----------------------------------------------------------------------------------*/
/*	TOGGLE
/*-----------------------------------------------------------------------------------*/
if (!function_exists('toggle')) {
    function toggle($atts, $content = null) {
        extract(shortcode_atts(array("caption"=>""), $atts));

        $html .= "<h5 class='title-holder'><span class='tab-title'>".$caption."</span><span class='accordion_icon_mark'></span></h5><div class='accordion_content ".$no_icon."'><div class='accordion_content_inner'>" . $content . "</div></div>";

        return $html;
    }
}
add_shortcode('toggle', 'toggle');


/*-----------------------------------------------------------------------------------*/
/*	ACCORDIONS
/*-----------------------------------------------------------------------------------*/
if (!function_exists('accordions')) {
    function accordions($atts, $content = null) {
        extract(shortcode_atts(array("accordion_type"=>""), $atts));
        return "<div class='accordion_holder accordion without_icon clearfix'>" . $content . "</div>";
    }
}
add_shortcode('accordions', 'accordions');

/*-----------------------------------------------------------------------------------*/
/*	ACCORDION
/*-----------------------------------------------------------------------------------*/
if (!function_exists('accordion')) {
    function accordion($atts, $content = null) {
        extract(shortcode_atts(array("caption"=>""), $atts));

        $html .= "<h5><span class='tab-title'>".$caption."</span><span class='accordion_icon_mark'></span></h5><div class='accordion_content ".$no_icon."'><div class='accordion_content_inner'>" . $content . "</div></div>";

        return $html;
    }
}
add_shortcode('accordion', 'accordion');


/*--------------------------------------------------------------------*/
/*	DROPCAPS
/*--------------------------------------------------------------------*/
if (!function_exists('dropcaps')) {
    function dropcaps($atts, $content = null) {
        $args = array(
            "letter_color"             => "",
            "background_color"  => "",
            "type"              => "",
			"font_family" => ""
        );
        extract(shortcode_atts($args, $atts));

        $html = "<span class='dropcap ".$type."' style='";
        if($background_color != ""){
            $html .= "background-color:#$background_color;";
        }
        if($letter_color != ""){
            $html .= " color:#$letter_color;";
        }
        if($border_color != ""){
            $html .= " border-color:#$border_color;";
        }
		
		if($font_family != "" && $font_family != 0){
			global $fontArrays;
			$fontArrays = array_merge(array( '' => ' -- Select --') , $fontArrays);
			$fontUrl = 'http://fonts.googleapis.com/css?family='.urlencode($fontArrays[$font_family]);
			$font_slug = str_replace(" " , "-", strtolower($fontArrays[$font_family]));
			wp_enqueue_style('google-fonts-'.$font_slug, $fontUrl); 
			$html .= 'font-family: \''.$fontArrays[$font_family].'\'; ';
		}
		
        $html .= "'>" . $content  . "</span>";

        return $html;
    }
}
add_shortcode('dropcaps', 'dropcaps');

/*--------------------------------------------------------------------*/
/*	UNORDERED LIST
/*--------------------------------------------------------------------*/
if (!function_exists('unordered_list')) {
    function unordered_list($atts, $content = null) {
        $args = array(
            "style"         => "",
            'number_type'   => "",
            "font_weight"   => "",
			"font_family" => ""
        );

        extract(shortcode_atts($args, $atts));

        $list_item_classes = "";

        if($style != "") {
            $list_item_classes .= "{$style}";
        }
		
		if($font_family != "" && $font_family != 0){
			global $fontArrays;
			$fontArrays = array_merge(array( '' => ' -- Select --') , $fontArrays);
			$fontUrl = 'http://fonts.googleapis.com/css?family='.urlencode($fontArrays[$font_family]);
			$font_slug = str_replace(" " , "-", strtolower($fontArrays[$font_family]));
			wp_enqueue_style('google-fonts-'.$font_slug, $fontUrl); 
			$list_item_classes .= 'font-family: \''.$fontArrays[$font_family].'\'; ';
		}

        if($number_type != "") {
            $list_item_classes .= " {$number_type}";
        }

        if($font_weight != "") {
            $list_item_classes .= " {$font_weight}";
        }

        $html =  "<div class='list $list_item_classes";
        $html .= "'>" . $content . "</div>";
        return $html;
    }
}
add_shortcode('unordered_list', 'unordered_list');

/*--------------------------------------------------------------------*/
/*	ROW
/*--------------------------------------------------------------------*/
if (!function_exists('row')) {
    function row($atts, $content = null) {
		$html = "<div class='row'>".$content."</div>";
        return $html;
    }
}
add_shortcode('row', 'row');

/*--------------------------------------------------------------------*/
/*	BLOCKQUOTE
/*--------------------------------------------------------------------*/
if (!function_exists('blockquote')) {
    function blockquote($atts, $content = null) {
        $args = array(
            "text_color"        => "",
            "width"             => "",
            "line_height"       => "",
            "background_color"  => "",
            "border_color"      => "",
            "quote_icon_color"  => "",
            "show_quote_icon"   => "",
			"font_family" => ""
        );

        extract(shortcode_atts($args, $atts));

        //init variables
        $html               = "";
        $blockquote_styles  = "";
        $blockquote_classes = "";
        $heading_styles     = "";
        $quote_icon_styles  = "";

        if($show_quote_icon == 'yes') {
            $blockquote_classes .= ' with_quote_icon';
        }

        if($width != "") {
            $blockquote_styles .= "width: ".$width."%;";
        }

        if($border_color != "") {
            $blockquote_styles .= "border-left-color:#".$border_color.";";
        }

        if($background_color != "") {
            $blockquote_styles .= "background-color:#".$background_color.";";
        }
		
		if($font_family != "" && $font_family != 0){
			global $fontArrays;
			$fontArrays = array_merge(array( '' => ' -- Select --') , $fontArrays);
			$fontUrl = 'http://fonts.googleapis.com/css?family='.urlencode($fontArrays[$font_family]);
			$font_slug = str_replace(" " , "-", strtolower($fontArrays[$font_family]));
			wp_enqueue_style('google-fonts-'.$font_slug, $fontUrl); 
			$blockquote_styles .= 'font-family: \''.$fontArrays[$font_family].'\'; ';
		}

        if($text_color != "") {
            $heading_styles .= "color:#".$text_color.";";
        }

        if($line_height != "") {
            $heading_styles .= " line-height: ".$line_height."px;";
        }

        if($quote_icon_color != "") {
            $quote_icon_styles .= "color:#".$quote_icon_color.";";
        }

        $html .= "<blockquote class='".$blockquote_classes."' style='".$blockquote_styles."'>"; //open blockquote
        if($show_quote_icon == 'yes') { $html .= "<i class='fa fa-quote-right pull-left' style='".$quote_icon_styles."'></i>"; }
        $html .= "<h5 class='blockquote-text' style='".$heading_styles."'>".$content."</h5>";
        $html .= "</blockquote>"; //close blockquote
        return $html;
    }
}
add_shortcode('blockquote', 'blockquote');


/*-----------------------------------------------------------------------------------*/
/*	Misc
/*-----------------------------------------------------------------------------------*/
function my_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}
	
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

add_filter('the_content', 'my_formatter', 99);