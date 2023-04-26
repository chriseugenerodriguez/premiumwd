<?php $format = get_post_format(); ?>
<div class="page-title">

	<?php if ( is_search() ): ?>
		<h3 class="post-title pad">
			<?php if ( have_posts() ): ?><i class="fa fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fa fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?> 
			<?php _e('Results','adomo'); ?> <?php _e('for','adomo'); ?> <span>"<?php echo get_search_query(); ?>"</span>
            <?php echo get_search_form(); ?>
		</h3>
					
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h3 class="post-title pad"><i class="fa fa-user"></i><?php _e('Author:','adomo'); ?> <span><?php echo $author->display_name;?></span></h3>
		
	<?php elseif ( is_category() ): ?>
		<h3 class="post-title pad"><i class="fa fa-folder-open"></i><?php _e('Category:','adomo'); ?> <span><?php echo single_cat_title('', false); ?></span></h3>

	<?php elseif ( is_tag() ): ?>
		<h3 class="post-title pad"><i class="fa fa-tags"></i><?php _e('Tagged:','adomo'); ?> <span><?php echo single_tag_title('', false); ?></span></h3>
		
	<?php elseif ( is_day() ): ?>
		<h3 class="post-title pad"><i class="fa fa-calendar"></i><?php _e('Daily Archive:','adomo'); ?> <span><?php echo get_the_time('F j, Y'); ?></span></h3>
		
	<?php elseif ( is_month() ): ?>
		<h3 class="post-title pad"><i class="fa fa-calendar"></i><?php _e('Monthly Archive:','adomo'); ?> <span><?php echo get_the_time('F Y'); ?></span></h3>
			
	<?php elseif ( is_year() ): ?>
		<h3 class="post-title pad"><i class="fa fa-calendar"></i><?php _e('Yearly Archive:','adomo'); ?> <span><?php echo get_the_time('Y'); ?></span></h3>
	
		<?php elseif ( has_post_format('audio') ): ?>
			<h3 class="post-title pad"><i class="fa fa-headphones"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Audio','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('aside') ): ?>
			<h3 class="post-title pad"><i class="fa fa-pen"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Aside','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('chat') ): ?>
			<h3 class="post-title pad"><i class="fa fa-comments-o"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Chat','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('gallery') ): ?>
			<h3 class="post-title pad"><i class="fa fa-picture-o"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Gallery','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('image') ): ?>
			<h3 class="post-title pad"><i class="fa fa-camera"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Image','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('link') ): ?>
			<h3 class="post-title pad"><i class="fa fa-link"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Link','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('quote') ): ?>
			<h3 class="post-title pad"><i class="fa fa-quote-left"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Quote','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('status') ): ?>
			<h3 class="post-title pad"><i class="fa fa-bullhorn"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Status','adomo'); ?></span></h3>
		<?php elseif ( has_post_format('video') ): ?>
			<h3 class="post-title pad"><i class="fa fa-video-camera"></i><?php _e('Type:','adomo'); ?> <span><?php _e('Video','adomo'); ?></span></h3>

	<?php endif; ?>
</div>
