<?php 

/*--------------------------------------------------------------------*/
/*	ENABLE SHORTCODE IN CONTENT
/*--------------------------------------------------------------------*/	
add_filter('the_content', 'do_shortcode');

/*--------------------------------------------------------------------*/
/*	ENABLE SHORTCODE IN EXCERPT
/*--------------------------------------------------------------------*/
add_filter('the_excerpt', 'do_shortcode');

/*--------------------------------------------------------------------*/
/*	ENABLE SHORTCODE IN TEXT WIDGET
/*--------------------------------------------------------------------*/
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode', 11);



/*--------------------------------------------------------------------*/                							
/*  ICON LIST			                							
/*--------------------------------------------------------------------*/
if (!function_exists('icon_list_item')) {
    function icon_list_item($atts, $content = null) {
        $args = array(
            "icon"                                  => "",
            "icon_type"                             => "",
            "icon_color"                            => "",
            "icon_background_color"                 => "",
            "icon_border_color"                     => "",
            "title"                                 => "",
            "title_color"                           => "",
            "title_size"                            => ""
        );

        extract(shortcode_atts($args, $atts));
        $html           = '';
        $icon_style     = "";
        $icon_classes   = "";
        $title_style    = "";

        $icon_classes .= $icon_type." ";

        if($icon_color != "") {
            $icon_style .= "color:#".$icon_color.";";
        }

        if($icon_background_color != "") {
            $icon_style .= "background-color:#".$icon_background_color.";";
        }

        if($icon_border_color != "") {
            $icon_style .= "border-color:#".$icon_border_color.";";
        }

        if($title_color != "") {
            $title_style .= "color:#".$title_color.";";
        }

        if($title_size != "") {
            $title_style .= "font-size: ".$title_size."px;";
        }

        $html .= '<div class="icon_list">';
        $html .= '<i class="fa '.$icon.' pull-left '.$icon_classes.'" style="'.$icon_style.'"></i>';
        $html .= '<p style="'.$title_style.'">'.$title.'</p>';
        $html .= '</div>';
        return $html;
    }
}
add_shortcode('icon_list_item', 'icon_list_item');

/*--------------------------------------------------------------------*/                							
/*  BANNER	                							
/*--------------------------------------------------------------------*/
if (!function_exists('banner')) {

    function banner($atts, $content = null) {
        $args = array(
            "image"         => "",
            "title"         => "",
            "title_tag"     => "h3",
			"url"     		=> "",
			"font_color"    => "",
			"height"        => "",
			"background"    => "",
        );

        extract(shortcode_atts($args, $atts));

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html            = "";

        //generate styles
        if (is_numeric($image)) {
            $image_src = wp_get_attachment_url($image);
        } else {
            $image_src = $image;
        }

        //generate output
        $html .= '<a class="image_with_text" href="' . $url . '">';
        $html .= '<div class="image_with_text_over">';

        $html .= '<div class="image" style="background-image:url(' . $image_src . '); height:'. $height .'" ></div>';
        $html .= '<div class="text-wrapper">';
        $html .= '<div class="text-inner">';
        $html .= '<div class="text">';

        //title and subtitle table html
		$html .= '<div class="background" style="background:#'.$background.';">';
       if (!empty($title)) { $html .= '<'.$title_tag.' class="caption" style="color:#'. $font_color .';" >'.$title.'</'.$title_tag.'>';}

        //image description table html which appears on mouse hover
        if (!empty($content)) { $html .= '<div class="desc" style="color:#'. $font_color .';">' . do_shortcode($content) . '</div>';}
        $html .= '</div>'; //close background div
        $html .= '</div>'; //close text-wrap div
        $html .= '</div>'; //close text-inner div
        $html .= '</div>'; //close text div
        $html .= '</div>'; //close image_with_text_over
        $html .= '</a>'; //close url

        return $html;
    }

    add_shortcode('banner', 'banner');
}

/*--------------------------------------------------------------------*/                							
/*  LATEST POST	                							
/*--------------------------------------------------------------------*/
if (!function_exists('latest_post')) {
    function latest_post($atts, $content = null) {

        $args = array(
            "type"       			=> "date_in_box",
            "number_of_posts"       => "",
            "number_of_columns"      => "",
            "text_from_edge"      	=> "1",
            "rows"                  => "",
            "order_by"              => "",
            "order"                 => "",
            "category"              => "",
            "text_length"           => 0,
            "title_tag"             => "h2",
            "display_category"    	=> "0",
            "display_time"          => "1",
            "display_comments"      => "1",
        );

        extract(shortcode_atts($args, $atts));


        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        if($type != "boxed"){
            $q = new WP_Query(
                array('orderby' => $order_by, 'order' => $order, 'posts_per_page' => $number_of_posts, 'category_name' => $category)
            );
        } else {
            $q = new WP_Query(
                array('orderby' => $order_by, 'order' => $order, 'posts_per_page' => $number_of_columns, 'category_name' => $category)
            );
        }

        $columns_number = "";
		if($type == 'boxed') {
			if($number_of_columns == 2){
				$columns_number = "two columns";
			} else if ($number_of_columns == 3) {
				$columns_number = "three columns";
			} else if ($number_of_columns == 4) {
				$columns_number = "four columns";
			}
		}

        $html = "";
        $html .= "<div class='latest_post_holder $type'>";
        $html .= "<ul>";

        while ($q->have_posts()) : $q->the_post();
            $li_classes = "";

            $cat = get_the_category();

            $html .= "<li class='clearfix $columns_number'>";
            if($type == "date_in_box") {
                $html .= '<div class="latest_post_date">';
                $html .= '<div class="post_publish_day">'.get_the_time('d').'</div>';
                $html .= '<div class="post_publish_month">'.get_the_time('M').'</div>';
                $html .= '</div>';
            }

            if($type == "boxed"){
                $html .= '<div class="boxed_image">';
                $html .= '<a href="'.get_permalink().'">'.get_the_post_thumbnail(get_the_ID(), 'latest_post_boxed').'</a>';
                $html .= '</div>';
            }

            $html .= '<div class="latest_post">';
            if($type == "image_in_box") {
                $html .= '<div class="latest_post_image clearfix">';
                $featured_image_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                $html .= '<img src="'. $featured_image_array[0] .'" alt="" />';
                $html .= '</div>';
            }
            $html .= '<div class="latest_post_text">';
            $html .= '<div class="latest_post_inner">';
            $html .= '<div class="latest_post_text_inner">';
            if($type != "minimal") {
                $html .= '<'.$title_tag.' class="latest_post_title "><a href="' . get_permalink() . '">' . get_the_title() . '</a></'.$title_tag.'>';
            }
            if($type != "minimal") {
                    $excerpt = ($text_length > 0) ? wp_trim_words(strip_tags(get_the_content()), intval($text_length)) : get_the_excerpt();
                    $html .= '<p class="excerpt">'.$excerpt.'...</p>';

            }
            $html .= '<span class="post_infos">';
            if($display_time == '1'){
                $html .= '<span class="date_hour_holder">';
                if($type != 'date_in_box'){
                    $html .= '<span class="date">' . get_the_time('d F, Y') . '</span>';
                } else {
                    $html .= '<span class="date">' . get_the_time('g:h') . 'h</span>';
                }

                $html .= '</span>';//close date_hour_holder
            }
            if($display_category == '1'){
                $html .= '<span class="dots"><i class="fa fa-square"></i></span>';
                foreach ($cat as $categ) {
                    $html .=' <a href="' . get_category_link($categ->term_id) . '">' . $categ->cat_name . ' </a> ';
                }
            }
            //generate comments part of description
            if ($blog_hide_comments != "yes" && $display_comments == "1") {
                $comments_count = get_comments_number();

                switch ($comments_count) {
                    case 0:
                        $comments_count_text = __('No comment', 'merchant');
                        break;
                    case 1:
                        $comments_count_text = $comments_count . ' ' . __('Comment', 'merchant');
                        break;
                    default:
                        $comments_count_text = $comments_count . ' ' . __('Comments', 'merchant');
                        break;
                }
                $html .= '<span class="dots"><i class="fa fa-square"></i></span>';
                $html .= '<a class="post_comments" href="' . get_comments_link() . '">';
                $html .= $comments_count_text;
                $html .= '</a>';//close post_comments
            }

            $html .= '</span>'; //close post_infos span
            if($type == "minimal") {
                $html .= '<'.$title_tag.' class="latest_post_title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></'.$title_tag.'>';
            }
            $html .= '</div>'; //close latest_post_text_inner span
            $html .= '</div>'; //close latest_post_inner div
            $html .= '</div>'; //close latest_post_text div
            $html .= '</div>'; //close latest_post div

        endwhile;
        wp_reset_query();

        $html .= "</ul></div>";
        return $html;
    }

}
add_shortcode('latest_post', 'latest_post');


/*--------------------------------------------------------------------*/                							
/*  MESSAGE	                							
/*--------------------------------------------------------------------*/
if (!function_exists('message')) {
    function message($atts, $content = null) {
        $args = array(
            "type"                  => "",
        );
        extract(shortcode_atts($args, $atts));

        //init variables
        $html                   = "";

        if($type == "success") {
        $html .= "<div class='woocommerce-message success'>";
        }
        if($type == "alert") {
        $html .= "<div class='woocommerce-message error'>";
        }
        if($type == "warning") {
        $html .= "<div class='woocommerce-message warning'>";
        }
        if($type == "info") {
        $html .= "<div class='woocommerce-message info'>";
        }

        $html .= "<a href='#' class='close'>x</a>";
        $html .= "".do_shortcode($content)."</div>"; //close a.close
        return $html;
    }
}
add_shortcode('message', 'message');

/*--------------------------------------------------------------------*/                							
/*  ICONS					                							
/*--------------------------------------------------------------------*/
if(!function_exists('icon')) {
    function icons($atts, $content = null) {
        $default_atts = array(
            "size"                 => "",
            "custom_size"          => "",
            "icon"                 => "",
            "type"                 => "",
            "position"             => "",
            "border"               => "",
            "border_color"         => "",
            "border_color"         => "",
            "icon_color"           => "",
            "icon_background_color"     => "",
            "margin"               => "",
            "icon_animation"       => "",
            "icon_animation_delay" => "",
            "link"                 => "",
            "target"               => ""
        );

        extract(shortcode_atts($default_atts, $atts));

        $html = "";
        if($icon != "") {

            //generate inline icon styles
            $style = '';
            $style_normal = '';
            $icon_stack_classes = '';
            $animation_delay_style = '';

            //generate icon stack styles
            $icon_stack_style = '';
            $icon_stack_base_style = '';
            $icon_stack_circle_styles = '';
            $icon_stack_square_styles = '';
            $icon_stack_normal_style  = '';

            if($custom_size != "") {
                $style .= 'font-size: '.$custom_size;
                $icon_stack_circle_styles .= 'font-size: '.$custom_size;
                $icon_stack_square_styles .= 'font-size: '.$custom_size;

                if(!strstr($custom_size, 'px')) {
                    $style .= 'px;';
                    $icon_stack_circle_styles .= 'px;';
                    $icon_stack_square_styles .= 'px;';
                }
            }

            if($icon_color != "") {
                $style .= 'color:#'.$icon_color.';';
            }

            if($position != "") {
                $icon_stack_classes .= 'pull-'.$position;
            }

            if($icon_background_color != "") {
                $icon_stack_base_style .= 'color:#'.$icon_background_color.';';
                $icon_stack_style .= 'background-color:#'.$icon_background_color.';';
                $icon_stack_square_styles .= 'background-color:#'.$icon_background_color.';';
            }

            if($border == 'yes' && $border_color != "") {
                $icon_stack_style .= 'border: 1px solid '.$border_color.';';
            }

            if($icon_animation_delay != ""){
                $animation_delay_style .= 'transition-delay: '.$icon_animation_delay.'ms; -webkit-transition-delay: '.$icon_animation_delay.'ms; -moz-transition-delay: '.$icon_animation_delay.'ms; -o-transition-delay: '.$icon_animation_delay.'ms;';
            }

            if($margin != "") {
                $icon_stack_style .= 'margin: '.$margin.';';
                $icon_stack_circle_styles .= 'margin: '.$margin.';';
                $icon_stack_normal_style .= 'margin: '.$margin.';';
            }

            switch ($type) {
                case 'circle':
                    $html = '<span class="fa-stack font_awsome_icon_stack '.$size.' '.$icon_stack_classes.' '.$icon_animation.'" style="'.$icon_stack_circle_styles.' '.$animation_delay_style.' '. $icon_stack_style.'">';
                    if($link != ""){
                        $html .= '<a href="'.$link.'" target="'.$target.'">';
                    }
                    $html .= '<i class="fa fa-circle fa-stack-base fa-stack-2x" style="'.$icon_stack_base_style.'"></i>';
                    $html .= '<i class="fa '.$icon.' fa-stack-1x" style="'.$style.'"></i>';
                    break;
                case 'square':
                    $html = '<span class="fa-stack font_awsome_icon_square '.$size.' '.$icon_stack_classes.' '.$icon_animation.'" style="'.$icon_stack_style.$icon_stack_square_styles.' '.$animation_delay_style.' '. $icon_stack_style.'">';
                    if($link != ""){
                        $html .= '<a href="'.$link.'" target="'.$target.'">';
                    }
                    $html .= '<i class="fa '.$icon.'" style="'.$style.'"></i>';
                    break;
                default:
                    $html = '<span class="font_awsome_icon '.$size.' '.$icon_stack_classes.' '.$icon_animation.'" style="'.$icon_stack_normal_style.' '.$animation_delay_style.' '. $icon_stack_style.'">';
                    if($link != ""){
                        $html .= '<a href="'.$link.'" target="'.$target.'">';
                    }
                    $html .= '<i class="fa '.$icon.'" style="'.$style.'"></i>';
                    break;
            }

            if($link != ""){
                $html .= '</a>';
            }

            $html.= '</span>';
        }
        return $html;
    }
}
add_shortcode('icon', 'icons');

/*--------------------------------------------------------------------*/                							
/*  ICONS WITH TEXT				                							
/*--------------------------------------------------------------------*/
if(!function_exists('icon_text')) {
    function icon_text($atts, $content = null) {
        $default_atts = array(
            "icon_size"             		=> "",
            "use_custom_icon_size"  		=> "",
            "custom_icon_size"      		=> "",
            "custom_icon_size_inner"      	=> "",
            "custom_icon_margin"    		=> "",
            "icon"                  		=> "",
            "image"                 		=> "",
            "icon_type"             		=> "",
            "icon_position"         		=> "",
            "icon_color"            		=> "",
            "icon_background_color" 		=> "",
            "box_type"              		=> "",
            "box_border_color"      		=> "",
            "box_background_color"  		=> "",
            "title"                 		=> "",
            "title_tag"             		=> "h5",
            "title_color"           		=> "",
            "text"                  		=> "",
            "text_color"            		=> "",
            "link"                  		=> "",
            "link_text"             		=> "",
            "link_color"            		=> "",
            "target"                		=> ""
        );

        extract(shortcode_atts($default_atts, $atts));

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init icon styles
        $style = '';
        $icon_stack_classes = '';


        //init icon stack styles
        $icon_margin_style       = '';
        $icon_stack_square_style = '';
        $icon_stack_base_style   = '';
        $icon_stack_style        = '';
        $img_styles              = '';
        $animation_delay_style   = '';
        $icon_text_holder_styles = '';

        //generate inline icon styles
        if($use_custom_icon_size == "yes") {
            if($custom_icon_size != "") {
                //remove px if user has entered it
                $custom_icon_size = strstr($custom_icon_size, 'px', true) ? strstr($custom_icon_size, 'px', true) : $custom_icon_size;
                $icon_stack_style .= 'font-size: '.$custom_icon_size.'px;';
            }

            if($custom_icon_margin != "") {
                //remove px if user has entered it
                $custom_icon_margin = strstr($custom_icon_margin, 'px', true) ? strstr($custom_icon_margin, 'px', true) : $custom_icon_margin;
                $custom_icon_margin = $custom_icon_size + $custom_icon_margin;
                $icon_text_holder_styles .= 'padding-left:'.$custom_icon_margin.'px;';
            }

			if($custom_icon_size_inner != '' && in_array($icon_type, array('circle', 'square'))) {
				$style .= 'font-size: '.$custom_icon_size_inner.'px;';
			}

        }

        if($icon_color != "") {
            $style .= 'color:#'.$icon_color.';';
        }

        //generate icon stack styles
        if($icon_background_color != "") {
            $icon_stack_base_style .= 'background-color:#'.$icon_background_color.';';
            $icon_stack_square_style .= 'background-color:#'.$icon_background_color.';';
        }

        if($icon_border_color != "") {
            $icon_stack_style .= 'border-color:#'.$icon_border_color.';';
        }

        if($icon_margin != "") {
            $icon_margin_style .= "margin: ".$icon_margin.";";
            $img_styles       .= "margin: ".$icon_margin.";";
        }

        $box_size = '';
        //generate icon text holder styles and classes

        //map value of the field to the actual class value
        switch ($icon_size) {
            case 'large': //smallest icon size
                $box_size = 'tiny';
                break;
            case 'fa-2x':
                $box_size = 'small';
                break;
            case 'fa-3x':
                $box_size = 'medium';
                break;
            case 'fa-4x':
                $box_size = 'large';
                break;
            case 'fa-5x':
                $box_size = 'very_large';
                break;
            default:
                $box_size = 'tiny';
        }

        if($image != "") {
            $icon_type = 'image';
        }

        $box_icon_type = '';
        switch ($icon_type) {
            case 'normal':
                $box_icon_type = 'normal_icon';
                break;
            case 'square':
                $box_icon_type = 'square';
                break;
            case 'circle':
                $box_icon_type = 'circle';
                break;
            case 'image':
                if($box_type == 'normal') {
                    $box_icon_type = 'icon_image';
                } else {
                    $box_icon_type = 'image';
                }
                break;
        }

        /* Generate text styles */
        $title_style = "";
        if($title_color != "") {
            $title_style .= "color:#".$title_color;
        }

        $text_style = "";
        if($text_color != "") {
            $text_style .= "color:#".$text_color;
        }

        $link_style = "";

        if($link_color != "") {
            $link_style .= "color:#".$link_color.";";
        }

        $html = "";
        $html_icon = "";

        if($image == "") {
            //genererate icon html
            switch ($icon_type) {
                case 'circle':
                    $html_icon .= '<span class="fa-stack '.$icon_size.' '.$icon_stack_classes.'" style="'.$icon_stack_style . $icon_stack_base_style .'">';
                    // $html_icon .= '<i class="fa fa-circle fa-stack-base fa-stack-2x" style="'.$icon_stack_base_style.'"></i>';
                    $html_icon .= '<i class="fa '.$icon.' fa-stack-1x" style="'.$style. '"></i>';
                    $html_icon .= '</span>';
                    break;
                case 'square':
                    $html_icon .= '<span class="fa-stack '.$icon_size.' '.$icon_stack_classes.'" style="'.$icon_stack_style.$icon_stack_square_style.'">';
                    $html_icon .= '<i class="fa '.$icon.'" style="'.$style.'"></i>';
                    $html_icon .= '</span>';
                    break;
                default:
                    $html_icon .= '<span style="'.$icon_stack_style.'" class="font_awsome_icon '.$icon_size.' '.$icon_stack_classes.'">';
                    $html_icon .= '<i class="fa '.$icon.'" style="'.$style.'"></i>';
                    $html_icon .= '</span>';
                    break;
            }
        } else {
            if(is_numeric($image)) {
                $image_src = wp_get_attachment_url( $image );
            }else {
                $image_src = $image;
            }
            $html_icon = '<img style="'.$img_styles.'" src="'.$image_src.'" alt="">';
        }

        //generate normal type of a box html
        if($box_type == "normal") {

            //init icon text wrapper styles
            $icon_with_text_clasess = '';
            $icon_with_text_style   = '';
            $icon_text_inner_style = '';

            $icon_with_text_clasess .= $box_size;
            $icon_with_text_clasess .= ' '.$box_icon_type;

            if($box_border_color != "") {
                $icon_text_inner_style .= 'border-color:#'.$box_border_color;
            }

            if($icon_position == "" || $icon_position == "top") {
                $icon_with_text_clasess .= " center";
            }
            if($icon_position == "left_from_title"){
                $icon_with_text_clasess .= " left_from_title";
            }
            $html .= "<div class='icon_with_title ".$icon_with_text_clasess."'>";
            if($icon_position != "left_from_title") {
                //generate icon holder html part with icon
                $html .= '<div class="icon_holder '.$icon_animation.'" style="'.$icon_margin_style.' '.$animation_delay_style.'">';
                $html .= $html_icon;
                $html .= '</div>'; //close icon_holder
            }
            //generate text html
            $html .= '<div class="icon_text_holder" style="'.$icon_text_holder_styles.'">';
            $html .= '<div class="icon_text_inner" style="'.$icon_text_inner_style.'">';
            if($icon_position == "left_from_title") {
                $html .= '<div class="icon_title_holder">'; //generate icon_title holder for icon from title
                //generate icon holder html part with icon
                $html .= '<div class="icon_holder '.$icon_animation.'" style="'.$icon_margin_style.' '.$animation_delay_style.'">';
                $html .= $html_icon;
                $html .= '</div>'; //close icon_holder
            }
            $html .= '<'.$title_tag.' class="icon_title" style="'.$title_style.'">'.$title.'</'.$title_tag.'>';
            if($icon_position == "left_from_title") {
                $html .= '</div>'; //close icon_title holder for icon from title
            }
            $html .= "<p style='".$text_style."'>".$text."</p>";
            if($link != ""){
                if($target == ""){
                    $target = "_self";
                }

                if($link_text == ""){
                    $link_text = "Read More";
                }

                $html .= "<a class='icon_with_title_link' href='".$link."' target='".$target."' style='".$link_style."'>".$link_text."</a>";
            }
            $html .= '</div>';  //close icon_text_inner
            $html .= '</div>'; //close icon_text_holder

            $html.= '</div>'; //close icon_with_title     
        } else {
            //init icon text wrapper styles
            $icon_with_text_clasess = '';
            $box_holder_styles = '';

            if($box_border_color != "") {
                $box_holder_styles .= 'border-color:#'.$box_border_color.';';
            }

            if($box_background_color != "") {
                $box_holder_styles .= 'background-color:#'.$box_background_color.';';
            }

            $icon_with_text_clasess .= $box_size;
            $icon_with_text_clasess .= ' '.$box_icon_type;

            $html .= '<div class="box_holder with_icon" style="'.$box_holder_styles.'">';

            $html .= '<div class="box_holder_icon">';
            $html .= '<div class="box_holder_icon_inner '.$icon_with_text_clasess.' '.$icon_animation.'" style="'.$animation_delay_style.'">';
            $html .= $html_icon;
            $html .= '</div>'; //close box_holder_icon_inner

            $html .= '</div>'; //close box_holder_icon

            //generate text html
            $html .= '<div class="box_holder_inner '.$box_size.' center">';
            $html .= '<'.$title_tag.' class="icon_title" style="'.$title_style.'">'.$title.'</'.$title_tag.'>';
            $html .= '<span class="separator transparent" style="margin: 8px 0;"></span>';
            $html .= '<p style="'.$text_style.'">'.$text.'</p>';
            $html .= '</div>'; //close box_holder_inner

            $html .= '</div>'; //close box_holder
        }

        return $html;

    }
}
add_shortcode('icon_text', 'icon_text');

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
        $fa_stack_styles    = "";
        $icon_styles        = "";
        $data_attr          = "";

        $background_color = $background_color != "" ? $background_color : "#e3e3e3";

        if(!empty($background_color_transparency) && ($background_color_transparency >= 0 && $background_color_transparency <= 1)) {
            $background_color = 'rgba('.$rgb[0].', '.$rgb[1].', '.$rgb[2].', '.$background_color_transparency.')';
        }

        $fa_stack_styles .= "background-color: {$background_color};";


        if($border_color != "") {
            $fa_stack_styles .= "border-color: ".$border_color.";";
        }

        if($border_width != "") {
            $fa_stack_styles .= "border-width: ".$border_width."px;";
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
            $fa_stack_styles .= 'font-size: '.$custom_size."px;";
        }

        $html .= "<span class='social_icon_holder $type' $data_attr>";

        if($link != ""){
            $html .= "<a href='".$link."' target='".$target."'>";
        }

        if($type == "normal_social"){
            $html .= "<i class='fa ".$icon." ".$size." simple_social' style='".$icon_styles."'></i>";
        } else {
            $html .= "<span class='fa-stack ".$size."' style='".$fa_stack_styles."'>";
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

        $html .=  '<a href="'.$link.'" target="'.$target.'" '.$data_attr.' class="'.$button_classes.'" style="'.$button_styles.'">'.do_shortcode($content).' '.$add_icon.'</a>';

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
        extract(shortcode_atts(array("color"=>"","background_color"=>""), $atts));
        $html =  "<span class='highlight'";
        if($color != "" || $background_color != ""){
            $html .= " style='color:#".$color."; background-color:#".$background_color.";'";
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
        return "<div class='accordion_holder toggle without_icon clearfix'>" . do_shortcode($content) . "</div>";
    }
}
add_shortcode('toggles', 'toggles');

/*-----------------------------------------------------------------------------------*/
/*	TOGGLE
/*-----------------------------------------------------------------------------------*/
if (!function_exists('toggle')) {
    function toggle($atts, $content = null) {
        extract(shortcode_atts(array("caption"=>""), $atts));

        $html .= "<h5 class='title-holder'><span class='tab-title'>".$caption."</span><span class='accordion_icon_mark'></span></h5><div class='accordion_content ".$no_icon."'><div class='accordion_content_inner'>" . do_shortcode($content) . "</div></div>";

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
        return "<div class='accordion_holder accordion without_icon clearfix'>" . do_shortcode($content) . "</div>";
    }
}
add_shortcode('accordions', 'accordions');

/*-----------------------------------------------------------------------------------*/
/*	ACCORDION
/*-----------------------------------------------------------------------------------*/
if (!function_exists('accordion')) {
    function accordion($atts, $content = null) {
        extract(shortcode_atts(array("caption"=>""), $atts));

        $html .= "<h5><div class='accordion_mark'></div><span class='tab-title'>".$caption."</span><span class='accordion_icon_mark'></span></h5><div class='accordion_content ".$no_icon."'><div class='accordion_content_inner'>" . do_shortcode($content) . "</div></div>";

        return $html;
    }
}
add_shortcode('accordion', 'accordion');


/*--------------------------------------------------------------------*/
/*	DROPCAPS
/*--------------------------------------------------------------------*/
if (!function_exists('dropcaps')) {
    function dropcaps($atts,$content=NULL) {
        $args = array(
            "letter_color"             => "",
            "background_color"  => "",
            "type"              => ""
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
        $html .= "'>".strip_tags($content)."</span>";

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
            "font_weight"   => ""
        );

        extract(shortcode_atts($args, $atts));

        $list_item_classes = "";

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
        $html .= "'>" . do_shortcode($content) . "</div>";
        return $html;
    }
}
add_shortcode('unordered_list', 'unordered_list');

/*--------------------------------------------------------------------*/
/*	ROW
/*--------------------------------------------------------------------*/
if (!function_exists('row')) {
    function row($atts, $content = null) {
		$html = "<div class='row'>".do_shortcode($content)."</div>";
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
            "show_quote_icon"   => ""
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
        $html .= "<h5 class='blockquote-text' style='".$heading_styles."'>".do_shortcode($content)."</h5>";
        $html .= "</blockquote>"; //close blockquote
        return $html;
    }
}
add_shortcode('blockquote', 'blockquote');


/*-----------------------------------------------------------------------------------*/
/*	Misc
/*-----------------------------------------------------------------------------------*/
if( !function_exists('wpex_fix_shortcodes') ) {
	function wpex_fix_shortcodes($content){   
		$array = array (
			'<p>[' => '[', 
			']</p>' => ']', 
			']<br />' => ']'
		);
		$content = strtr($content, $array);
		return $content;
	}
	add_filter('the_content', 'wpex_fix_shortcodes');
}

  
  

/*---------------------------------------------------------------------------------*/                            
/*  WOOCOMMERCE                          
/*---------------------------------------------------------------------------------*/ 

/*--------------------------------------------------------------------*/                							
/*  Product Categories                							
/*--------------------------------------------------------------------*/
if (!function_exists('woocommerce_categories')) {
    function woocommerce_categories($atts, $content = null) {
        $args = array(
			"title" => "",
			"per_page" => 4,
			"show_counter" => 'false',
            "category"              => "", // one or more categories will be shown
            "title_tag"             => "h3",
			"number_of_columns" => 4,
			"orderby" => "", // (default/alphabatic)
			"order" => "", // (asc/desc)
			"hide_empty" => 'false',
			"discovery_text" => "discover now"
        );

        extract(shortcode_atts($args, $atts));
		
		$tax_args = array( 'hide_empty' => $hide_empty );
		
		if(!empty($orderby)) $tax_args['orderby'] = $orderby;
		if(!empty($order)) $tax_args['order'] = $order;
		
		if(!empty($per_page) && $per_page > 0) $tax_args['number'] = $per_page;
		
		if(!empty($category)){
			$category = explode(",", $category);
			foreach($category as $c){
				$cat = get_term_by('slug', $c, 'product_cat');
				if($cat != false) $tax_args['exclude'][] = $cat->term_id;
				
			}
			$tax_args['fields'] = 'ids';
		}

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];
		
       $terms = get_terms('product_cat' , $tax_args);
	   
	   if(count($category) > 0){
		 	$tax_args['exclude'] = $terms;
			$tax_args['fields'] = 'all';
			$terms = get_terms('product_cat' , $tax_args);
	   }
	   
		
		
		$columns_number = "";
			if($number_of_columns == 2){
				$columns_number = "two columns";
			} else if ($number_of_columns == 3) {
				$columns_number = "four columns";
			} else if ($number_of_columns == 4) {
				$columns_number = "three columns";
			}
		
        $html = "";
		if(!empty($title))
			$html .= '<h2>'.$title.'</h2>';
		
        $html .= "<div class='woocommerce-categories'>";
        $html .= '<ul class="products clearfix">';

        foreach ($terms as $k => $v) :
			
		$thumbnail_id = get_woocommerce_term_meta( $v->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_image_src( $thumbnail_id, array(450, 450) );
			$html .= '<li class="'.$columns_number.' product-category black">';
			$html .= '<a href="'.get_term_link($v, 'product_cat').'" class="product-category-link">';
			if ( !$image ) 		
			$image[0] = home_url(). '/wp-content/plugins/woocommerce/assets/images/placeholder.png';

			$html .= '<div class="category-thumb" style="background-image:url(' . $image[0] . '); height:'. $image[2] .'px;"></div>';
			$html .= '<div class="text-wrapper">';			
			$html .= '<div class="show-category-background">';
                        $html .= '<div class="background">';
			$html .= '<h3>';
			$html .= $v->name;
			
			if($show_counter == "true")
				$html .= '<span class="count">('.$v->count.')</span>';
			
			$html .= '<span class="discovery-text">'.$discovery_text.'</span>';
			
			$html .= '</h3>';
			$html .= '</div></div></div>';
			$html .= '</a>';
			$html .= '</li>';
            
        endforeach;

        $html .= "</ul></div>";
        return $html;
    }

}
add_shortcode('woocommerce_categories', 'woocommerce_categories');
                           
                            

/*--------------------------------------------------------------------*/                							
/*  Product Slider                							
/*--------------------------------------------------------------------*/
if (!function_exists('woocommerce_product_slider')) {
    function woocommerce_product_slider($atts, $content = null) {
        $args = array(
			"title" => "",
            "title_tag"             => "h3",
			"product_type" => "", // all/featured/on_sale
			"orderby" => "",  // random/alphabetically/most recent/price/sales
			"order" => "", // asc/desc
			"autoplay" => 'true',
			"category" => "",
			"number_of_posts" => 0,	
        );

        extract(shortcode_atts($args, $atts));

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];
		
		$args = array('post_type' => 'product');
		if(!empty($orderby)){
			if($orderby == 'random') $args['orderby'] = 'rand';
			else if($orderby == 'alphabetically') $args['orderby'] = 'title';
			else if($orderby == 'recent') $args['orderby'] = 'date';
			else if($orderby == 'price'){
				$args['meta_key'] = '_regular_price';
				 $args['orderby'] = 'meta_value_num';
			} else if($orderby == 'sales'){
				$args['meta_key'] = 'total_sales';
				 $args['orderby'] = 'meta_value_num';
			}
		}
		if(!empty($order)) $args['order'] = $order;
		if(!empty($category)) $args['tax_query'] = array(array("taxonomy" => "product_cat" , "field" => "slug", "terms" => explode(",", $category)));
		if($number_of_posts != 0) $args['posts_per_page'] = $number_of_posts;
		
		$args['meta_query'] = array();
		if(!empty($product_type))
			if($product_type == 'featured')
				$args['meta_query'] = array(array('key' => '_featured' , 'value' => 'yes' , 'compare' => '='));
			else if($product_type == 'on_sale') {
				$args['meta_query'] = array(
													'relation' => 'OR',
													array( // Simple products type
														'key'           => '_sale_price',
														'value'         => 0,
														'compare'       => '>',
														'type'          => 'numeric'
													),
													array( // Variable products type
														'key'           => '_min_variation_sale_price',
														'value'         => 0,
														'compare'       => '>',
														'type'          => 'numeric'
													)
												);
			}
			
		
		
		
            $q = new WP_Query($args);
		$GLOBALS['woocommerce_loop']['title_tag'] = $title_tag;
		if($q->have_posts()) :
        $html = "";
		if(!empty($title)) 
			$html .= '<h2>'.$title.'</h2>';
		
		$html .= '<div class="woocommerce " data-delay="0">';
        $html .= '<div class="products-slider-wrapper" data-autoplay="'.$autoplay.'">';
		$html .= '<div class="products-slider">';
		$html .= '<div class="products-slider-roller">';
        $html .= '<ul class="products yit_products_slider owl-wrapper">';

        while($q->have_posts()) : $q->the_post();
		ob_start();
			wc_get_template_part( 'content', 'product' ); 
		$html .= ob_get_contents();
		ob_get_clean();
		endwhile;
		
        $html .= '</ul>';
		$html .= '</div>';
		$html .= '<div class="es-nav-prev"><span class="fa fa-angle-left"></span></div>';
		$html .= '<div class="es-nav-next"><span class="fa fa-angle-right"></span></div>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		endif;
		
		remove_filter('loop_shop_columns' , 'premiumwd_slider_col');
		remove_filter('post_class', 'premiumwd_slider_columns');
		
        return $html;
    }

}
add_shortcode('woocommerce_product_slider', 'woocommerce_product_slider');
                           
                            

/*--------------------------------------------------------------------*/                							
/*  Product Swiper                							
/*--------------------------------------------------------------------*/
if (!function_exists('woocommerce_product_swiper')) {
    function woocommerce_product_swiper($atts, $content = null) {
        $args = array(
			"title" => "",
            "title_tag"             => "h3",
			"number_of_columns" => 3,
			"orderby" => "",
			"order" => "",
			"autoplay" => 'true',
			"category" => "",
			"number_of_posts" => 0,
			"product_type" => "", // all/featured/on_sale
        );

        extract(shortcode_atts($args, $atts));

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];
		
		$args = array('post_type' => 'product');
		if(!empty($orderby)) $args['orderby'] = $orderby;
		if(!empty($order)) $args['order'] = $order;
		if(!empty($category)) $args['tax_query'] = array(array("taxonomy" => "product_cat" , "field" => "slug", "terms" => explode(",", $category)));
		if($number_of_posts != 0) $args['posts_per_page'] = $number_of_posts;
		
		$args['meta_query'] = array();
		if(!empty($product_type))
			if($product_type == 'featured')
				$args['meta_query'] = array(array('key' => '_featured' , 'value' => 'yes' , 'compare' => '='));
			else if($product_type == 'on_sale') {
				$args['meta_query'] = array(
													'relation' => 'OR',
													array( // Simple products type
														'key'           => '_sale_price',
														'value'         => 0,
														'compare'       => '>',
														'type'          => 'numeric'
													),
													array( // Variable products type
														'key'           => '_min_variation_sale_price',
														'value'         => 0,
														'compare'       => '>',
														'type'          => 'numeric'
													)
												);
			}
		
		$number_of_columns = ($number_of_columns <= 0) ? 3 : $number_of_columns;
		
            $q = new WP_Query($args);
		$GLOBALS['woocommerce_loop']['title_tag'] = $title_tag;
		if($q->have_posts()) :
        $html = "";
		if(!empty($title)) 
			$html .= '<h2>'.$title.'</h2>';
		
        $html .= '<div class="woocommerce swiper products-slider">';
		$html .= '<div class="twelve columns">';
		$html .= '<div class="swiper_container">';
        $html .= '<div class="swiper-wrapper swiper-products" data-items="'.$number_of_columns.'" data-overflow="visible"  data-autoplay="0">';

        while($q->have_posts()) : $q->the_post();
			ob_start();
				wc_get_template_part( 'content', 'product-swiper' ); 
			$html .= ob_get_contents();
			ob_get_clean();
		endwhile;
		
        $html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		endif;
        return $html;
    }

}
add_shortcode('woocommerce_product_swiper', 'woocommerce_product_swiper');

/*--------------------------------------------------------------------*/                							
/*  Products                							
/*--------------------------------------------------------------------*/
if (!function_exists('woocommerce_products')) {
    function woocommerce_products($atts, $content = null) {
        $args = array(
			"title" => "",
            "title_tag"             => "h3",
			"number_of_columns" => 4,
			"number_of_posts" => 10,
			"product_type" => "", // all/featured/on_sale
			"orderby" => "",  // random/alphabetically/most recent/price/sales
			"order" => "", // asc/desc
			"category" => ""
        );

        extract(shortcode_atts($args, $atts));

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];
		
		$args = array('post_type' => 'product');
		if(!empty($orderby)){
			if($orderby == 'random') $args['orderby'] = 'rand';
			else if($orderby == 'alphabetically') $args['orderby'] = 'title';
			else if($orderby == 'recent') $args['orderby'] = 'date';
			else if($orderby == 'price'){
				$args['meta_key'] = '_regular_price';
				 $args['orderby'] = 'meta_value_num';
			} else if($orderby == 'sales'){
				$args['meta_key'] = 'total_sales';
				 $args['orderby'] = 'meta_value_num';
			}
		}
		if(!empty($order)) $args['order'] = $order;
		if(!empty($category)) $args['tax_query'] = array(array("taxonomy" => "product_cat" , "field" => "slug", "terms" => explode(",", $category)));
		if($number_of_posts != 0) $args['posts_per_page'] = $number_of_posts;
		
		$args['meta_query'] = array();
		if(!empty($product_type))
			if($product_type == 'featured')
				$args['meta_query'] = array(array('key' => '_featured' , 'value' => 'yes' , 'compare' => '='));
			else if($product_type == 'on_sale') {
				$args['meta_query'] = array(
													'relation' => 'OR',
													array( // Simple products type
														'key'           => '_sale_price',
														'value'         => 0,
														'compare'       => '>',
														'type'          => 'numeric'
													),
													array( // Variable products type
														'key'           => '_min_variation_sale_price',
														'value'         => 0,
														'compare'       => '>',
														'type'          => 'numeric'
													)
												);
			}
			
			
		$columns_number = "";
		global $woocommerce_loop;
			if($number_of_columns == 2){
				$columns_number = "six columns";
				$woocommerce_loop['columns'] = 2;
			} else if ($number_of_columns == 3) {
				$columns_number = "three columns";
				$woocommerce_loop['columns'] = 4;
			} else if ($number_of_columns == 4) {
				$columns_number = "four columns";
				$woocommerce_loop['columns'] = 3;
			}
			
			$GLOBALS['woocommerce_loop'];
			$GLOBALS['columns_number'] = $columns_number;
			
			add_filter('loop_shop_columns' , 'premiumwd_shop_col');
			if(!function_exists('premiumwd_shop_col')){
				function premiumwd_shop_col(){
					$GLOBALS['woocommerce_loop']['columns'];
				}
			}
			
			add_filter('post_class', 'premiumwd_shop_columns');
			if(!function_exists('premiumwd_shop_columns')){
				function premiumwd_shop_columns($classes){
					$classes[] = $GLOBALS['columns_number'];
					unset($classes[array_search("last", $classes)]);
					unset($classes[array_search("first", $classes)]);
					return $classes;
				}
			}
		
            $q = new WP_Query($args);
		
		if($q->have_posts()) :
        $html = "";
		if(!empty($title)) 
			$html .= '<h2>'.$title.'</h2>';
		
		$html .= '<div class="woocommerce-product-shortcode">';
        $html .= '<ul class="products">';
		
		$GLOBALS['woocommerce_loop']['title_tag'] = $title_tag;
        while($q->have_posts()) : $q->the_post();
		ob_start();
			wc_get_template_part( 'content', 'product' );
		$html .= ob_get_contents();
		ob_get_clean();
		endwhile;
		
        $html .= '</ul>';
		$html .= '</div><div class="clear"></div>';
		endif;
		remove_filter('loop_shop_columns' , 'premiumwd_shop_col');
		remove_filter('post_class', 'premiumwd_shop_columns');
        return $html;
    }

}
add_shortcode('woocommerce_products', 'woocommerce_products');                           
                            
