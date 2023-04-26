	<?php if ( is_search() ): ?>
		<h1>
			<?php $search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?> 
			<?php _e('Results', 'ellion'); ?> <?php _e('for', 'ellion'); ?> "<?php echo get_search_query(); ?>"</span>
		</h1>
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h1><?php _e('Author:', 'ellion'); ?><?php echo $author->ellion_name;?></h1>
	<?php elseif ( is_category() ): ?>
		<h1><?php _e('Category:', 'ellion'); ?> <?php echo single_cat_title('', false); ?></h1>
	<?php elseif ( is_tag() ): ?>
		<h1><?php _e('Tagged:', 'ellion'); ?> <?php echo single_tag_title('', false); ?></h1>
	<?php elseif ( is_day() ): ?>
		<h1><?php _e('Daily Archive:', 'ellion'); ?> <?php echo get_the_time('F j, Y'); ?></h1>
	<?php elseif ( is_month() ): ?>
		<h1><?php _e('Monthly Archive:', 'ellion'); ?> <?php echo get_the_time('F Y'); ?></h1>
	<?php elseif ( is_year() ): ?>
		<h1><?php _e('Yearly Archive:', 'ellion'); ?> <?php echo get_the_time('Y'); ?></h1>
	 <?php elseif ( has_post_format('audio') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Audio', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('aside') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Aside', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('chat') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Chat', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('gallery') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Gallery', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('image') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Image', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('link') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Link', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('quote') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Quote', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('status') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Status', 'ellion'); ?></h1>
    <?php elseif ( has_post_format('video') ): ?>
       <h1><?php _e('Type:', 'ellion'); ?> <?php _e('Video', 'ellion'); ?></h1>
    <?php else: ?>
       <h1><?php the_title(); ?></h1>
    <?php endif; ?>
