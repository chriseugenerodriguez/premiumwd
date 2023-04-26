<?php

class premiumwdFlickrWidget extends WP_Widget {

	private $flickr_api_key = "d348e6e1216a46f2a4c9e28f93d75a48";
	
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'premiumwdFlickrWidget', // Base ID
			'WD Flickr Widget', // Name
			array( 'description' => __( 'Show off your favorite Flickr photos!', 'text_domain' ), ) // Args
		);
	}
	
	
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		$this->generateFrontEnd($args, $instance);
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['username'] = strip_tags($new_instance['username']);
		$instance['items'] = intval($new_instance['items']);
		$instance['javascript'] = strip_tags($new_instance['javascript']);
		
		
		if (!empty($instance["username"]) && $instance["username"] != $old_instance["username"]) {
			if (!ereg("http://api.flickr.com/services/feeds", $instance["username"])) // Not a feed
			{
				$str = @file_get_contents("http://api.flickr.com/services/rest/?method=flickr.people.findByUsername&api_key=".$this->flickr_api_key."&username=".urlencode($instance["username"])."&format=rest");
				ereg("<rsp stat=\\\"([A-Za-z]+)\\\"", $str, $regs); $findByUsername["stat"] = $regs[1];

				if ($findByUsername["stat"] == "ok")
				{
					ereg("<username>(.+)</username>", $str, $regs);
					$findByUsername["username"] = $regs[1];
					
					ereg("<user id=\\\"(.+)\\\" nsid=\\\"(.+)\\\">", $str, $regs);
					$findByUsername["user"]["id"] = $regs[1];
					$findByUsername["user"]["nsid"] = $regs[2];
					
					$flickr_id = $findByUsername["user"]["nsid"];
					$newoptions["error"] = "";
				}
				else
				{
					$flickr_id = "";
					$newoptions["username"] = ""; // reset
					
					ereg("<err code=\\\"(.+)\\\" msg=\\\"(.+)\\\"", $str, $regs);
					$findByUsername["message"] = $regs[2] . "(" . $regs[1] . ")";
					
					$newoptions["error"] = "Flickr API call failed! (findByUsername returned: ".$findByUsername["message"].")";
				}
				$instance["user_id"] = $flickr_id;
			} else {
				$newoptions["error"] = "";
			}
		} else { 
			$instance["user_id"] = $old_instance["user_id"];
		}
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
			$title 			 	  = $instance[ 'title' ];
			$username 	 	 	  = $instance[ 'username' ];
			$items				  = $instance[ 'items' ];
			$javascript 		  = $instance[ 'javascript' ];
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e("Fast Flickr Title:"); ?> <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr($title) ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id( 'username' ); ?>"><?php _e("Flickr RSS URL or Screen name:"); ?> <input class="widefat" id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" type="text" value="<?php echo esc_attr($username); ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id( 'items' ); ?>"><?php _e("How many items?"); ?> <select class="widefat" id="<?php echo $this->get_field_id( 'items' ); ?>" name="<?php echo $this->get_field_name( 'items' ); ?>"><?php for ( $i = 1; $i <= 20; ++$i ) echo "<option value=\"$i\" ".($items==$i ? "selected=\"selected\"" : "").">$i</option>"; ?></select></label></p>
        
		<?php 
	}
	private function retrieve_random_tag($flickrid, $maxcount=20) { 
        
		$params = array(
			'api_key'	=> $this->flickr_api_key,
			'method'	=> 'flickr.tags.getListUserPopular',
			'count'	=> $maxcount,
			'user_id'	=> $flickrid,
			'format'	=> 'php_serial',
		);

		

		$encoded_params = array();

		// Loop through parameters and encode

		foreach ($params as $k => $v){

			// Encode parameters for the url of the API call

			$encoded_params[] = urlencode($k).'='.urlencode($v);

		}



		// Call the API and decode the response

		$url = "http://api.flickr.com/services/rest/?".implode('&', $encoded_params);		



		// Fetch the info

		$rsp = file_get_contents($url);

		$rsp_obj = unserialize($rsp);

		$tags = $rsp_obj['who']['tags']['tag'];
		shuffle($tags);
		$tagNumber = rand(0,count($tags));
        return $tags[$tagNumber]['_content'];
	}
	
	private function generateFrontEnd($args, $instance) {
			static $target, $show_titles, $thickbox, $tags, $random, $randomTag, $before_item, $javascript, $after_item, $out,  $randomTagText, $user_id;
			
			 $target = ''; 
			 $show_titles = '';
			 $thickbox = '';
			 $tags = '';
			 $random = '';
			 $randomTag = ''; 
			 $before_item = ''; 
			 $javascript = '';
			 $after_item = '';
			 $out = '';  
			 $randomTagText = ''; 
			 $user_id = '';
			
			extract($args);
				
			$title 			 	  = $instance[ 'title' ];
			$username 	 		  = $instance[ 'username' ];
			$items				  = $instance[ 'items' ];
				
			$target = ($target == "checked") ? "target=\"_blank\"" : "";
			$show_titles = ($show_titles == "checked") ? true : false;
			$thickbox = ($thickbox == "checked") ? true : false;
			$tags = (strlen($tags) > 0) ? "&tags=" . urlencode($tags) : "";
			$random = ($random == "checked") ? true : false;
			$randomTag = ($randomTag == "checked") ? true : false; 

			if($random == true && $randomTag == true) {
				$randomTagText = $this->retrieve_random_tag($user_id);
				$tags = "&tags=" . urlencode($randomTagText) . "&tagmode=any";
			}
			$javascript = ($javascript == "checked") ? true : false;
					
			if ($javascript) $flickrformat = "json"; else $flickrformat = "php";
					
			if (empty($items) || $items < 1 || $items > 20) $items = 3;

		
					
			// Screen name or RSS in $username?
			if (!ereg("http://api.flickr.com/services/feeds", $username))
				$url = "http://api.flickr.com/services/feeds/photos_public.gne?id=$username&format=".$flickrformat."&lang=en-us".$tags;
			else
				$url = $username."&format=".$flickrformat.$tags;
					
			// Output via php or javascript?
			if (!$javascript) {
						eval("?>". file_get_contents($url) . "<?");						
						$photos = $feed;
						if ($photos)
						{
							$flickr_home = $photos["url"];
							foreach($photos["items"] as $key => $value)
							{
								if (--$items < 0) break;
								
								$photo_title = $value["title"];
								$photo_link = $value["url"];
								
								preg_match_all("#<img[^>]* src=\"([^\"]*)\"[^>]*>#m", html_entity_decode(stripslashes($value["description"])), $regs);
								preg_match_all("#<a[^>]* href=\"([^\"]*)\"[^>]*>#m",html_entity_decode(stripslashes($value["description"])), $hrefs);
								
								$href=$hrefs[1][1];								
								$photo_url = $regs[1][0];
								$photo_description = str_replace("\n", "", strip_tags($value["description"]));
								
								$photo_title = ($show_titles) ? "<div class=\"flickr_widget\">$photo_title</div>" : "";
								$out .= $before_item . "<li><a $target href=\"$href\"><img vspace=\"2\" hspace=\"5\" class=\"flickr_photo\" src=\"$photo_url\" /></a></li>$photo_title" . $after_item;
							}
							if($randomTagText != "") { 
								$out .= "<br /> Used tag: " . $randomTagText . "<br />";
							}
						} else	{
							$out = "Something went wrong with the Flickr feed! Please check your configuration and make sure that the Flickr username or RSS feed exists";
						}			
					} else {
						$out = "<script type=\"text/javascript\" src=\"$url\"></script>";
					}
			?>
			
			<!-- Flickr start -->
				<section class="flickr_widget widget-container">
					<?php if(!empty($title)) { $title = apply_filters('localization', $title); echo $before_title . $title . $after_title; } ?>
                                        <ul>                
                                            <?php if($out){ ?>
                                                <?php echo $out ?>
                                                <?php if (!empty($more_title) && !$javascript) echo "<a href=\"" . strip_tags($flickr_home) . "\">$more_title</a>"; ?>	
                                            <?php }else{ ?>
                                                    <li>flickr server goes down on widget</li>
                                            <?php } ?>
                                    </ul>
				</section>
			<!-- Flickr end -->
			
			<?php
	}

} // class Foo_Widget
add_action( 'widgets_init', create_function( '', 'register_widget( "PremiumwdFlickrWidget" );' ) );

