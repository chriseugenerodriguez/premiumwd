<?php
  
// Register 'Recent Custom Posts' widget
add_action( 'widgets_init', 'init_rcp_recent_posts' );
function init_rcp_recent_posts() { return register_widget('rcp_recent_posts'); }

class rcp_recent_posts extends WP_Widget {
	/** constructor */
	public function __construct() {
		parent::__construct(
	 		'rcp_recent_custom_posts', // Base ID
			'WD Recent Posts Widget', // Name
			array( 'description' => __( 'Display your recent posts with thumbnails.', 'ellion' ), ) // Args
		);
	}


	/**
	* This is our Widget
	**/
	function widget( $args, $instance ) {
		global $post;
		extract($args);

		// Widget options
		$title 	 = apply_filters('widget_title', $instance['title'] ); // Title		
		$cpt 	 = $instance['types']; // Post type(s) 		
	    $types   = explode(',', $cpt); // Let's turn this into an array we can work with.
		$number	 = $instance['number']; // Number of posts to show
		
        // Output
		echo $before_widget;
		
	    if ( $title ) echo $before_title . $title . $after_title;
			
		$mlq = new WP_Query(array( 'post_type' => $types, 'showposts' => $number ));
		if( $mlq->have_posts() ) : 
		?>
		<ul>
		<?php while($mlq->have_posts()) : $mlq->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('recent-thumbnails'); ?></a></li>
		<?php wp_reset_query(); 
		endwhile; ?>
		</ul>
			
		<?php endif; ?>			
		<?php
		// echo widget closing tag
		echo $after_widget;
	}

	/** Widget control update */
	function update( $new_instance, $old_instance ) {
		$instance    = $old_instance;
		
		//Let's turn that array into something the Wordpress database can store
		$types       = implode(',', (array)$new_instance['types']);

		$instance['title']  = strip_tags( $new_instance['title'] );
		$instance['types']  = $types;
		$instance['number'] = strip_tags( $new_instance['number'] );
		return $instance;
	}
	
	/**
	* Widget settings
	**/
	function form( $instance ) {	
	
		    // instance exist? if not set defaults
		    if ( $instance ) {
				$title  = $instance['title'];
		        $types  = $instance['types'];
		        $number = $instance['number'];
		    } else {
			    //These are our defaults
				$title  = '';
		        $types  = 'post';
		        $number = '5';
		    }
			
			//Let's turn $types into an array
			$types = explode(',', $types);
			
			//Count number of post types for select box sizing
			$cpt_types = get_post_types( array( 'public' => true ), 'names' );
			foreach ($cpt_types as $cpt ) {
			   $cpt_ar[] = $cpt;
			}
			$n = count($cpt_ar);
			if($n > 10) { $n = 10;}

			// The widget form
			?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __( 'Title:', 'ellion' ); ?></label>
			<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" class="widefat" />
			</p>
			<p>
			<label for="<?php echo $this->get_field_id('types'); ?>"><?php echo __( 'Select post type(s):', 'ellion' ); ?></label>
			<select name="<?php echo $this->get_field_name('types'); ?>[]" id="<?php echo $this->get_field_id('types'); ?>" class="widefat" style="height: auto;" size="<?php echo $n ?>" multiple>
				<?php 
				$args = array( 'public' => true );
				$post_types = get_post_types( $args, 'names' );
				foreach ($post_types as $post_type ) { ?>
					<option value="<?php echo $post_type; ?>" <?php if( in_array($post_type, $types)) { echo 'selected="selected"'; } ?>><?php echo $post_type;?></option>
				<?php }	?>
			</select>
			</p>
			<p>
			<label for="<?php echo $this->get_field_id('number'); ?>"><?php echo __( 'Number of posts to show:', 'ellion' ); ?></label>
			<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
			</p>
	<?php 
	}

} // class rcp_recent_posts

?>