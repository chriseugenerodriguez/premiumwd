<?php if (get_next_posts_link()) { ?>
	<div id="pagination" rel="<?php echo $wp_query->max_num_pages; ?>">
	   <div class="next">
		   <?php 
			$tag = get_next_posts_link(__('Show more')); 
			echo $tag;
		   ?>
	   </div>
	</div>
  <?php } ?>