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
        $fa_ellion_styles    = "";
        $icon_styles        = "";
        $data_attr          = "";

        $background_color = $background_color != "" ? $background_color : "#e3e3e3";

        if(!empty($background_color_transparency) && ($background_color_transparency >= 0 && $background_color_transparency <= 1)) {
            $rgb = qode_hex2rgb($background_color);

            $background_color = 'rgba('.$rgb[0].', '.$rgb[1].', '.$rgb[2].', '.$background_color_transparency.')';
        }

        $fa_ellion_styles .= "background-color: {$background_color};";


        if($border_color != "") {
            $fa_ellion_styles .= "border-color: ".$border_color.";";
        }

        if($border_width != "") {
            $fa_ellion_styles .= "border-width: ".$border_width."px;";
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
            $fa_ellion_styles .= 'font-size: '.$custom_size."px;";
        }

        $html .= "<span class='social_icon_holder $type' $data_attr>";

        if($link != ""){
            $html .= "<a href='".$link."' target='".$target."'>";
        }

        if($type == "normal_social"){
            $html .= "<i class='fa ".$icon." ".$size." simple_social' style='".$icon_styles."'></i>";
        } else {
            $html .= "<span class='fa-stack ".$size."' style='".$fa_ellion_styles."'>";
            $html .= "<i class='fa ".$icon."' style='".$icon_styles."'></i>";
            $html .= "</span>"; //close fa-stack
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
/*  PRICING TABLE
/*--------------------------------------------------------------------*/
if ( !function_exists( 'pricing_sc' ) ) {
	function pricing_sc( $atts, $content = null  ) {
        $args = array(
            "button_link"                   => "",
            "button_text"               	=> "",
            "amount"                		=> "",
            "featured"                		=> "",
            "title"                			=> "",
	  );
		//set variables
	if (is_null($content)) return;
	preg_match_all('/\[price\b([^\]]*)\]((?:(?!\[\/price\]).)+)\[\/price\]/s', $content, $matches);
	$sub_atts = $matches[1];
	$sub_contents = $matches[2];
	$price_count = sizeof($sub_atts);
	ob_start(); ?>
<div class="pricing col-<?php echo $price_count?> clearfix">
        <?php for ($i = 0; $i < $price_count; $i++) :
?>
        <?php $sub_atts[$i] = shortcode_parse_atts($sub_atts[$i]); ?>
        <div class="price-table <?php if ($sub_atts[$i]['featured'] == 'true') echo 'active' ?>">
        <?php if ($sub_atts[$i]['featured'] == 'true') {?><div class="active_text"><span>Best price</span></div><?php } ?>
            <ul>
            <li class="table_title"><h3 class="title_content"><?php echo remove_entity_code_from_string($sub_atts[$i]['title'])?></h3></li>
            <li class="prices"><div class="price_in_table"><sup class="value">$</sup><span class="price"><?php echo remove_entity_code_from_string($sub_atts[$i]['amount'])?></span><span class="mark">/MO</span></div></li>
            <li class="pricing_table_content"><ul><?php echo $sub_contents[$i]?></ul></li>
            <li class="price_button"><a href="<?php echo remove_entity_code_from_string($sub_atts[$i]['button_link'])?>" class="button medium" style=" border-color: rgb(250, 250, 250); background-color: transparent;" data-hover-color="#000000" data-hover-background-color="#eeeeee" target="_self"><?php echo remove_entity_code_from_string($sub_atts[$i]['button_text'])?></a></li></ul>
        </div><?php endfor ?></div>
<?php return ob_get_clean(); }
}
add_shortcode('pricing', 'pricing_sc');



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
		$i_desktop = max(1, $items);
		$i_desktopsmall = max(1, $items - 1);
		$i_tablet = max(1, $items - 2);
		$html = "<p class='nomargin'><script type='text/javascript'>	
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
	  </script></p>";
		$html .=  '<div class="owl-carousel '.$element.'" id="owl-'.$type.'" data-pagination="'.$pagination.'" data-navigation="'.$navigation.'" data-items="'.$items.'">'. do_shortcode( $content ) . '</div>';
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
            "url"                      => "",
            "target"                    => "_self",
            "color"                     => "",
            "hover_color"               => "",
            "background_color"			=> "",
            "hover_background_color"    => "",
            "font_style"                => "",
            "text_align"                => "",
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

        $html .=  '<a href="'.$url.'" target="'.$target.'" '.$data_attr.' class="'.$button_classes.'" style="'.$button_styles.'">'.$content.' '.$add_icon.'</a>';

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
	add_shortcode('five_column', 'five_column');
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
        extract(shortcode_atts(array("color"=>"","background_color"=>""), $atts));
        $html =  "<span class='highlight'";
        if($color != "" || $background_color != ""){
            $html .= " style='color:#".$color."; background-color:#".$background_color.";'";
        }
        $html .= ">". do_shortcode( $content ) . "</span>";
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
        return "<div class='accordion_holder toggle without_icon clearfix'>". do_shortcode( $content ) . "</div>";
    }
}
add_shortcode('toggles', 'toggles');

/*-----------------------------------------------------------------------------------*/
/*	TOGGLE
/*-----------------------------------------------------------------------------------*/
if (!function_exists('toggle')) {
    function toggle($atts, $content = null) {
        extract(shortcode_atts(array("caption"=>""), $atts));

  		  $html = "";
      $html .= "<h5 class='title-holder'><span class='tab-title'>".$caption."</span><span class='accordion_icon_mark'></span></h5><div class='accordion_content'><div class='accordion_content_inner'>". do_shortcode( $content ) . "</div></div>";

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
        return "<div class='accordion_holder accordion without_icon clearfix'>". do_shortcode( $content ) . "</div>";
    }
}
add_shortcode('accordions', 'accordions');

/*-----------------------------------------------------------------------------------*/
/*	ACCORDION
/*-----------------------------------------------------------------------------------*/
if (!function_exists('accordion')) {
    function accordion($atts, $content = null) {
        extract(shortcode_atts(array("caption"=>""), $atts));

		  $html = "";
        $html .= "<h5><span class='tab-title'>".$caption."</span><span class='accordion_icon_mark'></span></h5><div class='accordion_content'><div class='accordion_content_inner'>". do_shortcode( $content ) . "</div></div>";

        return $html;
    }
}
add_shortcode('accordion', 'accordion');

/*--------------------------------------------------------------------*/
/*	EMPHASIS
/*--------------------------------------------------------------------*/
if (!function_exists('emphasis')) {
    function emphasis($atts, $content = null) {
 		  $html = "";
       $html = "<p class='emphasis'>". do_shortcode( $content ) . "</p>";
        return $html;
    }
}
add_shortcode('emphasis', 'emphasis');


/*--------------------------------------------------------------------*/
/*	DROPCAPS
/*--------------------------------------------------------------------*/
if (!function_exists('dropcaps')) {
    function dropcaps($atts, $content = null) {

		  $html = "";
        $html = "<span class='dropcap' data-dropcap='".$content."'>". do_shortcode( $content ) . "</span>";

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
        );

        extract(shortcode_atts($args, $atts));

        $list_item_classes = "";
		  $html = "";

        if($style != "") {
            $list_item_classes .= "{$style}";
        }
		
        if($number_type != "") {
            $list_item_classes .= " {$number_type}";
        }

        if($font_weight != "") {
            $list_item_classes .= " {$font_weight}";
        }

        $html =  "<div class='list $list_item_classes";
        $html .= "'>". do_shortcode( $content ) . "</div>";
        return $html;
    }
}
add_shortcode('unordered_list', 'unordered_list');

/*--------------------------------------------------------------------*/
/*	CONTAINER
/*--------------------------------------------------------------------*/
if (!function_exists('container_sc')) {
    function container_sc($atts, $content = null) {
        $args = array(
            "type"         => "",
				"padding"		=> ""
        );
        extract(shortcode_atts($args, $atts));
			
			$html = "";
		
	     if($type =='full'){
		 $html .= "<div style='padding:".$padding.";' class='container-fluid'>" . do_shortcode($content) . "</div>";
		 } else {
		 $html .= "<div style='padding:".$padding.";' class='".$type."'>" . do_shortcode($content) . "</div>";		 
		 };
        return $html;
	  }
  }
add_shortcode('container', 'container_sc');


/*--------------------------------------------------------------------*/
/*	ROW
/*--------------------------------------------------------------------*/
if (!function_exists('row_sc')) {
    function row_sc($atts, $content = null) {
        $args = array(
            "margin"         => "",
        );
        extract(shortcode_atts($args, $atts));
			  $html = "";

	
	if($margin =='no'){
		 $html .= "<div class='row no-margin-bottom'>" . do_shortcode($content) . "</div>";
	} else {
		$html = "<div class='row'>".do_shortcode($content)."</div>";	 
	};
	
        return $html;
    }
}
add_shortcode('row', 'row_sc');

/*--------------------------------------------------------------------*/
/*	BLOCKQUOTE
/*--------------------------------------------------------------------*/
if (!function_exists('blockquote')) {
    function blockquote($atts, $content = null) {
        $args = array(
            "align"        => "",
        );

        extract(shortcode_atts($args, $atts));

        //init variables
		  $html = "";
        $html .= "<blockquote class='".$align."'>"; //open blockquote
        $html .= "<p>".$content."</p>";
        $html .= "</blockquote>"; //close blockquote
        return $html;
    }
}
add_shortcode('blockquote', 'blockquote');

/*--------------------------------------------------------------------*/
/*  SEPARATORS
/*--------------------------------------------------------------------*/
if (!function_exists('separator_sc')) {
    function separator_sc($atts, $content = null) {
        $args = array(
	    		"size" 	         	=> "",
            "color" 		         => "",
            "margintop" 			=> "",
            "marginbottom" 		=> "",
            "width"       			=> "",
        );

        extract(shortcode_atts($args, $atts));

        $margin_classes = "";
		  $html = "";
		      
        if($margintop != "") {
            $margin_classes .= "margin-top:".$margintop.";";
        } 
			if($marginbottom != "") {
            $margin_classes .= "margin-bottom:".$marginbottom.";";
        } 


        $html .= '<div class="separator '.$size.' center '.$width.'" style="background:#'.$color.'; '.$margin_classes.'"></div>';

		return $html;
	}
}
add_shortcode('separator', 'separator_sc');


/*--------------------------------------------------------------------*/
/*  PORTFOLIO SLIDER
/*--------------------------------------------------------------------*/
if (!function_exists('portfolio_slider_sc')) {
    function portfolio_slider_sc($atts, $content = null) {

        $args = array(
            "type"       				=> "slider",
            "filter"       			=> "yes",
            "number_of_posts"       => "",
            "order_by"              => "",
            "order"                 => "",
            "autoplay"		        	=> "",
            "items"	               => "",
            "loop"                  => "",
            "slidespeed"            => "",
				"title"						=> "",
				"text"						=> ""
        );    
        extract(shortcode_atts($args, $atts));

		
		$count = 0;
		$html = "";
		$titlemeta = "";
		$textmeta = "";
		$headermeta = "";
		if($title != ''){
			$titlemeta .= "<h1>{$title}</h1>";
		}
		if($text != ''){
			$textmeta .= "<p>{$text}</p>";	
		}
		if($text != '' || $title !=''){
			$headermeta .= "<div class='page-title container'><div class='pt-column'>".$titlemeta."".$textmeta."</div><div id='portfolio-filters-inline' class='pt-column'>";
		}
		if($filter == 'yes' && $type == 'boxed') {
			$html .= "<div id='portfolio-filters-inline' class='pt-column'>".$headermeta."";			
		} 
		if($filter == 'yes' && $type == 'boxed' && $text == '' && $title =='') {
			$html .= "<div id='portfolio-filters-inline'>";		
		}

        $terms = get_terms( array(
            'taxonomy' => 'portfolio_category',
            'hide_empty' => false,
        ) );
        if ($terms && !is_wp_error($terms)):
            $links = array();
            foreach ($terms as $term) {
                $links[] = $term->name;
            }
            $links = str_replace(' ', '-', $links);
            $tax   = join(" ", $links);
        else:
            $tax = '';
        endif;
		if($type == 'slider') {		
				$args = array('post_type' => 'portfolio', 'orderby' => $order_by, 'order' => $order, 'category_name' => $terms, 'posts_per_page' => $number_of_posts);
            $q = new WP_Query($args);
		} else {
				$args = array('post_type' => 'portfolio', 'orderby' => $order_by, 'order' => $order, 'posts_per_page' => $number_of_posts, 'category_name' => $terms);
            $q = new WP_Query($args);
		}
        
        
        if($filter == 'yes' && $type == 'boxed') {
            $count = count($terms);
            $html .= '<ul><li><a href="javascript:void(0)" title="" data-filter="*" class="active">All</a></li>';
            if ($count > 0) {
                foreach ($terms as $term) {
                    $termname = strtolower($term->name);
                    $termname = str_replace(' ', '-', $termname);
                    $html .= '<li><a href="javascript:void(0)" title="" data-filter=".' . $termname . '">' . $term->name . '</a></li>';
                }
            }

            $html .= "</ul></div></div>";
        }
        if($type == 'slider') {
            global $js_slider_shortcode;
            $element = sprintf("owl-s-%s",$js_slider_shortcode);
            $i_desktop = max(1, $number_of_posts - 1);
            $i_desktopsmall = max(1, $number_of_posts - 2);
            $i_tablet = max(1, $number_of_posts - 3);
            $html .= "<p style='margin:0px;'><script type='text/javascript'>
                jQuery(document).ready(function($) {
                    $('.$element').owlCarousel({
                         navigation: false,
								 items : $number_of_posts,
                         autoplay: $autoplay,
                         loop: $loop,
                         autoplaySpeed: $slidespeed,
                         responsive : {
                             0 : {
                                 items : $i_tablet
                             },
                             768 : {
                                 items : $i_desktopsmall
                             },
                             1040 : {
                                 items : $i_desktop
                             },
                             1300 : {
                                 items : $number_of_posts
                             }
                        }
                    });
                });
                </script></p>"; 

        $html .= "<div class='$element owl-carousel portfolio-items portfolio-slider isotope'>";
        }

         if($type == 'boxed'){
                                      
            $html .= '<div class="container"><div class="portfolio-wrap"><div id="portfolio" class="portfolio-items isotope">
<div class="grid-sizer" style="width:20%"></div>';        
        }

		while ($q->have_posts()) : $q->the_post();
        global $post;
        $size = get_post_meta($post->ID, 'portfolio_custom_select', true);

        ob_start();
        if($type == 'boxed'){
             $terms = get_the_terms($post->ID, 'portfolio_category');
        if ($terms && !is_wp_error($terms)):
            $links = array();
            foreach ($terms as $term) {
                $links[] = $term->name;
            }
            $links = str_replace(' ', '-', $links);
            $tax   = join(" ", $links);
        else:
            $tax = '';
        endif;
            
?>

<div class="<?php echo $size; ?> <?php
        echo get_post_meta($post->ID, 'portfolio_custom_select', true);?> element <?php echo strtolower($tax);?> all  isotope-item">
  <figure type="<?php echo get_option('premiumwd_hover_animation'); ?>"> <?php $size = get_post_meta(get_the_ID(), 'portfolio_custom_select', true);?> <?php  if ($size == 'item-w1 item-h2') {?> <?php  $tall = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-tall');?><img src="<?php echo $tall[0]; ?>" alt="" /> <?php } if ($size == 'item-w2 item-h2') {?> <?php $large = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-large');?><img src="<?php echo $large[0]; ?>" alt="" /><?php } if ($size == 'item-w1 item-h1') {?><?php $small = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-small');?><img src="<?php echo $small[0]; ?>" alt="" /> <?php } if ($size == 'item-w2 item-h1') {?> <?php  $wide = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-wide');?><img src="<?php echo $wide[0]; ?>" alt="" /> <?php  } else {?> <?php  }?> <?php $size = get_post_meta(get_the_ID() , 'portfolio_layout_excerpt', true); ?><figcaption <?php if(get_option('premiumwd_thumbnail_style') == 'Dark'): ?>class="dark"<?php endif;?>> <a href="<?php the_permalink();?>" rel="bookmark">
      <h3>
        <?php the_title();?>
      </h3>
      <?php if(get_option('premiumwd_thumbnail_info') == 'Category'): ?><p><?php $terms = get_the_terms( $post->ID, 'portfolio_category' ); $term_names = array(); foreach( $terms as $term ) $term_names[] = $term->name; echo implode( ', ', $term_names ); ?></p><?php endif; ?>
      <?php if(get_option('premiumwd_thumbnail_info') == 'Excerpt'): ?><div class="excerpt"><?php echo $size; ?></div><?php endif; ?>
      <?php if(get_option('premiumwd_thumbnail_info') == 'Any'): ?><?php if($size === ''){ ?><p><?php echo get_the_date('F j, Y');?></p><?php } else { ?><div class="excerpt"><?php echo $size; ?></div><?php } ?><?php endif; ?></a></figcaption></figure></div> 

<?php    
			$html.= ob_get_contents(); 
		
		}		

		if($type == 'slider'){
         $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio-small'); ?>
         <?php $size = get_post_meta(get_the_ID() , 'portfolio_layout_excerpt', true); ?>
	<div><figure> <img src="<?php echo $image[0]; ?>" alt="" /><figcaption <?php if(get_option('premiumwd_thumbnail_style') == 'Dark'): ?>class="dark"<?php endif;?>> 
	<a href="<?php the_permalink();?>" rel="bookmark">
	<div class="pos"><h3><?php the_title();?></h3>
	<?php if(get_option('premiumwd_thumbnail_info') == 'Category'): ?><?php $terms = get_the_terms( $post->ID, 'portfolio_category' ); $term_names = array(); foreach( $terms as $term ) $term_names[] = $term->name; echo implode( ', ', $term_names ); ?><?php endif; ?>
	<?php if(get_option('premiumwd_thumbnail_info') == 'Excerpt'): ?><div class="excerpt"><?php echo $size; ?></div><?php endif; ?>
	<?php if(get_option('premiumwd_thumbnail_info') == 'Any'): ?><?php if($size === ''){ ?><p><?php echo get_the_date('F j, Y');?></p>
	<?php } else { ?><div class="excerpt"><?php echo $size; ?></div><?php } ?>
	<?php endif; ?>
   </div>
   </a> 
   </figcaption></figure></div>
<?php 
           $html.= ob_get_contents();
	     
			}
ob_end_clean();
//ob_end_flush();
        endwhile; 
		  
        if($type == 'slider'){
             $html .= '</div></div>'; 
        }
        if($type == 'boxed'){
            $html .='</div></div></div>';
        }

        wp_reset_query();
		  
        return $html;
    }

}
add_shortcode('portfolio', 'portfolio_slider_sc');

/*--------------------------------------------------------------------*/
/*  GOOGLE MAP
/*--------------------------------------------------------------------*/
function remove_entity_code_from_string( $attribute, $replacement = '' ) {
   return preg_replace("/&#?[a-z0-9]+;/i", $replacement, $attribute);
}
function get_attribute_value($string, $start, $end){
    // Get the position count of starting point
    $ini = strpos($string,$start);
    // Add the length of starting string to main var $ini
    $ini += strlen($start);
    // Get the position of end point and set offset $ini
    $len = strpos($string,$end,$ini) - $ini;
    // Return attribute value
    return substr($string,$ini,$len);
}

if (!function_exists('gmap_sc')) {

    function gmap_sc($atts, $content = null) {
        global $js_gmap_shortcode;

         $stylingOption = end( $atts );
         if ( strpos( $stylingOption, '">' ) !== FALSE ) {
            $atts['styles'] = str_replace( array( '">',  ',', ' ', ), '', $stylingOption );
            $atts['styles'] = preg_replace( '/\s+/', '', '"' . trim( $atts['styles'] ) );
         }

        $args = array(
            "scrollwheel"                 => "false",
            "draggable"               		=> "true",
            "zoom"                			=> "13",
            "marker"                		=> "/assets/images/marker.png",
            "gps"                			=> "111, -11",
            "height"                		=> "500px",
      		"styles"								=> "",
	  	  );
        extract(shortcode_atts($args, $atts, 'gmap'));

        $styles_json=$styles.']'.$content;
        $styles_json = remove_entity_code_from_string($styles_json, '"');
        $stylesfinal = '[' .get_attribute_value($styles_json, '"[', ']"') .']';
        $latLang = get_attribute_value($styles_json, 'gps="', '"');
        if(!empty($latLang)) {
            $gps = $latLang;
        } else {
            $gps = $gps;
        }
        $mapHeight = get_attribute_value($styles_json, 'height="', '"');
        if(!empty($mapHeight)) {
            $height = $mapHeight;
        } else {
            $height = $height;
        }

      // Replace left and right quoation marks from shortcode attributes
      $marker = remove_entity_code_from_string($marker);
      $zoom = remove_entity_code_from_string($zoom);
      $draggable = remove_entity_code_from_string($draggable);
      $scrollwheel = remove_entity_code_from_string($scrollwheel);

		if (!$js_gmap_shortcode){
			$js_gmap_shortcode = 0;
		}
		$element = sprintf("gmap-%s",$js_gmap_shortcode);
		$html .= "<p style='margin:0px;'><script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false'></script>";
      $zoom = stripcslashes($zoom);
		$html .= "<script type='text/javascript'>
		function toggleBounce() {
		  if (marker.getAnimation() != null) {
			marker.setAnimation(null);
		  } else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}
      var custommarker = '$marker';
		google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, 'resize', function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, 'resize');
			map.setCenter(center);
		});
		var infowindow = new google.maps.InfoWindow();
		var myLatlng = new google.maps.LatLng($gps);
		function initialize() {
      var custommarker = '$marker';
			map = new google.maps.Map(document.getElementById('$element'), {
				zoom: $zoom,
				draggable: $draggable,
				scrollwheel: $scrollwheel,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: $stylesfinal
			});
				var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					icon: custommarker,
					animation: google.maps.Animation.DROP
				});
				google.maps.event.addListener(marker, 'click', (function(marker) {
				}));
			}
	  </script></p>";

		$html .=  '<div id='.$element.'  style="height:'.$height.';" ></div>';
	    ++$js_gmap_shortcode;
        return $html;
    }
}
add_shortcode('gmap', 'gmap_sc');


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