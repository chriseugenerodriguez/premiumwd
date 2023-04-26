<?php $format = get_post_format(); ?>
<div class="archive-title">

	<?php if ( is_search() ): ?>
		<h1 class="post-title">
			<?php if ( have_posts() ): ?><i class="fa fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fa fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?> 
			<?php _e('Results','Mini'); ?> <?php _e('for','Mini'); ?> <span>"<?php echo get_search_query(); ?>"</span>
            <?php echo get_search_form(); ?>
		</h1>

	<?php elseif ( is_page() ): ?>
		<h1 class="post-title"><?php the_title(); ?></h1>
					
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h1 class="post-title"><?php _e('Author:','Mini'); ?> <span><?php echo $author->display_name;?></span></h1>
		
	<?php elseif ( is_category() ): ?>
		<h1 class="post-title"><?php _e('Category:','Mini'); ?> <span><?php echo single_cat_title('', false); ?></span></h1>

	<?php elseif ( is_tag() ): ?>
		<h1 class="post-title"><?php _e('Tagged:','Mini'); ?> <span><?php echo single_tag_title('', false); ?></span></h1>
		
	<?php elseif ( is_day() ): ?>
		<h1 class="post-title"><?php _e('Daily Archive:','Mini'); ?> <span><?php echo get_the_time('F j, Y'); ?></span></h1>
		
	<?php elseif ( is_month() ): ?>
		<h1 class="post-title"><?php _e('Monthly Archive:','Mini'); ?> <span><?php echo get_the_time('F Y'); ?></span></h1>
			
	<?php elseif ( is_year() ): ?>
		<h1 class="post-title"><?php _e('Yearly Archive:','Mini'); ?> <span><?php echo get_the_time('Y'); ?></span></h1>
	
		<?php elseif ( has_post_format('audio') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Audio','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('aside') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Aside','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('chat') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Chat','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('gallery') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Gallery','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('image') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Image','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('link') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Link','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('quote') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Quote','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('status') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Status','Mini'); ?></span></h1>
		<?php elseif ( has_post_format('video') ): ?>
			<h1 class="post-title"><?php _e('Type:','Mini'); ?> <span><?php _e('Video','Mini'); ?></span></h1>

	<?php endif; ?>
</div>
