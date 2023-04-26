<?php

// REGISTER WIDGET
add_action( 'widgets_init', 'init_twitter_widget' );
function init_twitter_widget() { return register_widget('twitter_widget'); }

// WIDGET CLASS
class twitter_widget extends WP_Widget {

/*--------------------------------------------------------------------*/
/*	WIDGET SETUP
/*--------------------------------------------------------------------*/
	public function __construct() {
		parent::__construct(
	 		'twitter_widget', // Base ID
			'WD Twitter Widget', // Name
			array( 'description' => __( 'Display your most recent tweets with API.', 'ellion' ), ) // Args
		);
	}
	
/*--------------------------------------------------------------------*/
/*	DISPLAY WIDGET
/*--------------------------------------------------------------------*/
public function widget($args, $instance) {
	extract($args);
	if(!empty($instance['title'])){ $title = apply_filters( 'widget_title', $instance['title'] ); }
	
	echo $before_widget;				
	if ( ! empty( $title ) ){ echo $before_title . $title . $after_title; }

			// CHECK SETTINGS & DIE IF NOT SET
			if(empty($instance['consumerkey']) || empty($instance['consumersecret']) || empty($instance['accesstoken']) || empty($instance['accesstokensecret']) || empty($instance['cachetime']) || empty($instance['username'])){
				echo '<strong>Please fill all widget settings!</strong>' . $after_widget;
				return;
			}
										
			// CHECK IF CACHE NEEDS UPDATE
			$tp_twitter_plugin_last_cache_time = get_option('tp_twitter_plugin_last_cache_time');
			$diff = time() - $tp_twitter_plugin_last_cache_time;
			$crt = $instance['cachetime'] * 3600;
			
		 	//	YUP, NEEDS ONE			
			if($diff >= $crt || empty($tp_twitter_plugin_last_cache_time)){
				
				if(!require_once('twitteroauth.php')){ 
					echo '<strong>Couldn\'t find twitteroauth.php!</strong>' . $after_widget;
					return;
				}
											
				function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
				  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
				  return $connection;
				}
				  						  
				$connection = getConnectionWithAccessToken($instance['consumerkey'], $instance['consumersecret'], $instance['accesstoken'], $instance['accesstokensecret']);
				$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$instance['username']."&count=10") or die('Couldn\'t retrieve tweets! Wrong username?');
										
				if(!empty($tweets->errors)){
					if($tweets->errors[0]->message == 'Invalid or expired token'){
						echo '<strong>'.$tweets->errors[0]->message.'!</strong><br />You\'ll need to regenerate it <a href="https://dev.twitter.com/apps" target="_blank">here</a>!' . $after_widget;
					}else{
						echo '<strong>'.$tweets->errors[0]->message.'</strong>' . $after_widget;
					}
					return;
				}
				
				for($i = 0;$i <= count($tweets); $i++){
					if(!empty($tweets[$i])){
						$tweets_array[$i]['created_at'] = $tweets[$i]->created_at;
						$tweets_array[$i]['text'] = $tweets[$i]->text;			
						$tweets_array[$i]['status_id'] = $tweets[$i]->id_str;			
					}	
				}							
				
					// SAVE TWEETS TO WP OPTION	
					update_option('tp_twitter_plugin_tweets',serialize($tweets_array));							
					update_option('tp_twitter_plugin_last_cache_time',time());
					
				echo '<!-- twitter cache has been updated! -->';
			}
						
			// MAKE LINKS CLICKABLE
			if(!function_exists('convert_links')){ function convert_links($status,$targetBlank=true,$linkMaxLen=250){
			 
				// TARGET
				$target=$targetBlank ? " target=\"_blank\" " : "";
				 
				// CONVERT LINK TO URL
				//$status = preg_replace("/((http:\/\/|https:\/\/)[^ )]+)/e", "'<a href=\"$1\" title=\"$1\" $target >'. ((strlen('$1')>=$linkMaxLen ? substr('$1',0,$linkMaxLen).'...':'$1')).'</a>'", $status);

				$status = preg_replace_callback ("/((http:\/\/|https:\/\/)[^ )]+)/",function($matches) use ($linkMaxLen, $target) { return "<a href=\"$matches[1]\" title=\"$matches[1]\" $target >". ( ( strlen( $matches[1] ) >= $linkMaxLen ? substr( $matches[1], 0, $linkMaxLen ).'...' : $matches[1] ) ).'</a>'; }, $status);
				 
				// CONVERT @ TO FOLLOW
				//$status = preg_replace("/(@([_a-z0-9\-]+))/i","<a href=\"http://twitter.com/$2\" title=\"Follow $2\" $target >$1</a>",$status);

				$status = preg_replace_callback ("/(@([_a-z0-9\-]+))/i",function($m) use ($linkMaxLen, $target){ return "<a href=\"http://twitter.com/$m[2]\" title=\"Follow $m[2]\" $target >$m[1]</a>"; }, $status);
				 
				// CONVERT # TO SEARCH
				//$status = preg_replace("/(#([_a-z0-9\-]+))/i","<a href=\"https://twitter.com/search?q=$2\" title=\"Search $1\" $target >$1</a>",$status);

				$status = preg_replace_callback ("/(#([_a-z0-9\-]+))/i",function($m) use ($linkMaxLen, $target){ return "<a href=\"https://twitter.com/search?q=$m[2]\" title=\"Search $m[1]\" $target >$m[1]</a>"; }, $status);
				 
				// RETURN THE STATUS
				return $status;
			} }
		
		
			// CONVERT DATES TO RELATIVE TIME	
			if(!function_exists('relative_time')){ function relative_time($a) {
				// GET CURRENT TIMESTAMP
				$b = strtotime("now"); 
				// GET TWEET TIMESTAMP
				$c = strtotime($a);
				// GET DIFFERENCE
				$d = $b - $c;
				// GET TIME VALUES
				$minute = 60;
				$hour = $minute * 60;
				$day = $hour * 24;
				$week = $day * 7;
					
				if(is_numeric($d) && $d > 0) {
					// IF LESS THAN 3 SECONDS
					if($d < 3) return "right now";
					// IF LESS THAN 1 MINUTE
					if($d < $minute) return floor($d) . " seconds ago";
					// IF LESS THAN 2 MINUTES
					if($d < $minute * 2) return "about 1 minute ago";
					// IF LESS THAN 1 HOUR
					if($d < $hour) return floor($d / $minute) . " minutes ago";
					// IF LESS THAN 2 HOURS
					if($d < $hour * 2) return "about 1 hour ago";
					// IF LESS THAN 1 DAY
					if($d < $day) return floor($d / $hour) . " hours ago";
					// IF MORE THEN 1 DAY, BUT LESS THEN 2 DAYS
					if($d > $day && $d < $day * 2) return "yesterday";
					// IF LESS THAN 1 YEAR
					if($d < $day * 365) return floor($d / $day) . " days ago";
					// ELSE RETURN OVER A YEAR AGO
					return "over a year ago";
				}
			}	}
				
		
		$tp_twitter_plugin_tweets = maybe_unserialize(get_option('tp_twitter_plugin_tweets'));
		
		$id = rand(0,999);
		
		if(!empty($tp_twitter_plugin_tweets)){
			print '
			
			<div id="twitter_update_list">
				<ul id="twitter_update_list_'.$id.'">';
				$fctr = '1';
				foreach($tp_twitter_plugin_tweets as $tweet){								
					print '<li><span>'.convert_links($tweet['text']).'</span><a class="twitter_time" target="_blank" href="http://twitter.com/'.$instance['username'].'/statuses/'.$tweet['status_id'].'">'.relative_time($tweet['created_at']).'</a></li>';
					if($fctr == $instance['tweetstoshow']){ break; }
					$fctr++;
				}
			
			print '
				</ul>';
				if($instance['tweettext'] !='') : ?> <a href="http://twitter.com/<?php echo $instance['username'] ?>" class="button" target="blank"><?php echo $instance['tweettext'] ?></a><?php endif;	
		echo '</div>';
			
		}

	echo $after_widget;
}
		
	
/*--------------------------------------------------------------------*/
/*	UPDATE WIDGET
/*--------------------------------------------------------------------*/
public function update($new_instance, $old_instance) {				
	$instance = array();
	$instance['title'] = strip_tags( $new_instance['title'] );
	$instance['consumerkey'] = strip_tags( $new_instance['consumerkey'] );
	$instance['consumersecret'] = strip_tags( $new_instance['consumersecret'] );
	$instance['accesstoken'] = strip_tags( $new_instance['accesstoken'] );
	$instance['accesstokensecret'] = strip_tags( $new_instance['accesstokensecret'] );
	$instance['cachetime'] = strip_tags( $new_instance['cachetime'] );
	$instance['username'] = strip_tags( $new_instance['username'] );
	$instance['tweetstoshow'] = strip_tags( $new_instance['tweetstoshow'] );
	$instance['tweettext'] = strip_tags( $new_instance['tweettext'] );

	if($old_instance['username'] != $new_instance['username']){
		delete_option('tp_twitter_plugin_last_cache_time');
	}
	
	return $instance;
}
	
	
/*--------------------------------------------------------------------*/
/*	WIDGET SETTINGS (FRONT END PANEL)
/*--------------------------------------------------------------------*/	
public function form($instance) {
	$defaults = array( 'title' => 'Some Tweets', 'consumerkey' => '', 'consumersecret' => '', 'accesstoken' => '', 'accesstokensecret' => '', 'cachetime' => '2', 'username' => '', 'tweetstoshow' => '', 'tweettext' => '', );
	$instance = wp_parse_args( (array) $instance, $defaults );
			
	echo '
	<p style="margin-bottom: 25px;">This widget requires that you create access codes from Twitter. <a href="https://dev.twitter.com/apps" target="blank">Create One</a></p>
	<p><label>Title:</label>
		<input type="text" name="'.$this->get_field_name( 'title' ).'" id="'.$this->get_field_id( 'title' ).'" value="'.esc_attr($instance['title']).'" class="widefat" /></p>
	<p><label>Consumer Key:</label>
		<input type="text" name="'.$this->get_field_name( 'consumerkey' ).'" id="'.$this->get_field_id( 'consumerkey' ).'" value="'.esc_attr($instance['consumerkey']).'" class="widefat" /></p>
	<p><label>Consumer Secret:</label>
		<input type="text" name="'.$this->get_field_name( 'consumersecret' ).'" id="'.$this->get_field_id( 'consumersecret' ).'" value="'.esc_attr($instance['consumersecret']).'" class="widefat" /></p>					
	<p><label>Access Token:</label>
		<input type="text" name="'.$this->get_field_name( 'accesstoken' ).'" id="'.$this->get_field_id( 'accesstoken' ).'" value="'.esc_attr($instance['accesstoken']).'" class="widefat" /></p>									
	<p><label>Access Token Secret:</label>		
		<input type="text" name="'.$this->get_field_name( 'accesstokensecret' ).'" id="'.$this->get_field_id( 'accesstokensecret' ).'" value="'.esc_attr($instance['accesstokensecret']).'" class="widefat" /></p>														
	<p><label>Cache every:</label>
		<input type="text" name="'.$this->get_field_name( 'cachetime' ).'" id="'.$this->get_field_id( 'cachetime' ).'" value="'.esc_attr($instance['cachetime']).'" class="small-text" /> hours</p>																			
	<p><label>Twitter Username (ex: <a href="http://www.twitter.com/premiumwd">Premiumwd</a>)</label>
		<input type="text" name="'.$this->get_field_name( 'username' ).'" id="'.$this->get_field_id( 'username' ).'" value="'.esc_attr($instance['username']).'" class="widefat" /></p>																			
	<p style="margin-bottom: 15px;"><label>Number of Tweets:</label>
		<select type="text" name="'.$this->get_field_name( 'tweetstoshow' ).'" id="'.$this->get_field_id( 'tweetstoshow' ).'">';
		$i = 1;
		for($i; $i <= 10; $i++){
			echo '<option value="'.$i.'"'; if($instance['tweetstoshow'] == $i){ echo ' selected="selected"'; } echo '>'.$i.'</option>';						
		}
		echo '
		</select>
	</p>
	
		
		';		
}
}
	
function urlcheck_callback($matches)	
{
	return "'<a href=\"$matches[1]\" title=\"$matches[1]\" $target >'. ((strlen('$matches[1]')>=$linkMaxLen ? substr('$matches[1]',0,$linkMaxLen).'...':'$matches[1]')).'</a>'";	
}

?>