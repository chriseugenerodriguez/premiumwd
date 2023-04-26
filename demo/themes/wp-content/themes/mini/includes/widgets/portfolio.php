<?php
  
// Register 'Portfolio' widget
add_action( 'widgets_init', 'init_rcp_portfolio' );
function init_rcp_portfolio() { return register_widget('rcp_recent_portfolio'); }

class rcp_recent_portfolio extends WP_Widget {
	/** constructor */
	public function __construct() {
		parent::__construct(
	 		'rcp_recent_portfolio', // Base ID
			'WD Recent Portfolio Widget', // Name
			array( 'description' => __( 'Display your recent portfolios thumbnails.' ), ) // Args
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
		$number	 = $instance['number']; // Number of posts to show
		
        // Output
		echo $before_widget;
		
	    if ( $title ) echo $before_title . $title . $after_title;
			
		$mlq = new WP_Query(array( 'post_type' => 'portfolio', 'showposts' => $number ));
		if( $mlq->have_posts() ) : 
		?>
		<ul class="widget_recent_portfolio">
		<?php while($mlq->have_posts()) : $mlq->the_post(); ?>
		
        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_post_thumbnail(array(150,150));?></a></li>
        
        
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

		$instance['title']  = strip_tags( $new_instance['title'] );
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
		        $number = $instance['number'];
		    } else {
			    //These are our defaults
				$title  = '';
		        $number = '5';
		    }
			
			// The widget form
			?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __( 'Title:' ); ?></label>
			<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" class="widefat" />
			</p>
			
			<p>
			<label for="<?php echo $this->get_field_id('number'); ?>"><?php echo __( 'Number of posts to show:' ); ?></label>
			<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
			</p>
	<?php 
	}

} // class rcp_recent_posts

?>