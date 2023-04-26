<?php $format = get_post_format(); ?>
<div class="archive-title">

	<?php if ( is_search() ): ?>
		<h3 class="post-title">
			<?php if ( have_posts() ): ?><i class="fa fa-search"></i><?php endif; ?>
			<?php if ( !have_posts() ): ?><i class="fa fa-exclamation-circle"></i><?php endif; ?>
			<?php $search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?> 
			<?php _e('Results','merchant'); ?> <?php _e('for','merchant'); ?> <span>"<?php echo get_search_query(); ?>"</span>
            <?php echo get_search_form(); ?>
		</h3>
					
	<?php elseif ( is_author() ): ?>
		<?php $author = get_userdata( get_query_var('author') );?>
		<h3 class="post-title"><i class="fa fa-user"></i><?php _e('Author:','merchant'); ?> <span><?php echo $author->display_name;?></span></h3>
		
	<?php elseif ( is_category() ): ?>
		<h3 class="post-title"><i class="fa fa-folder-open"></i><?php _e('Category:','merchant'); ?> <span><?php echo single_cat_title('', false); ?></span></h3>

	<?php elseif ( is_tag() ): ?>
		<h3 class="post-title"><i class="fa fa-tags"></i><?php _e('Tagged:','merchant'); ?> <span><?php echo single_tag_title('', false); ?></span></h3>
		
	<?php elseif ( is_day() ): ?>
		<h3 class="post-title"><i class="fa fa-calendar"></i><?php _e('Daily Archive:','merchant'); ?> <span><?php echo get_the_time('F j, Y'); ?></span></h3>
		
	<?php elseif ( is_month() ): ?>
		<h3 class="post-title"><i class="fa fa-calendar"></i><?php _e('Monthly Archive:','merchant'); ?> <span><?php echo get_the_time('F Y'); ?></span></h3>
			
	<?php elseif ( is_year() ): ?>
		<h3 class="post-title"><i class="fa fa-calendar"></i><?php _e('Yearly Archive:','merchant'); ?> <span><?php echo get_the_time('Y'); ?></span></h3>
	
		<?php elseif ( has_post_format('audio') ): ?>
			<h3 class="post-title"><i class="fa fa-headphones"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Audio','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('aside') ): ?>
			<h3 class="post-title"><i class="fa fa-pen"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Aside','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('chat') ): ?>
			<h3 class="post-title"><i class="fa fa-comments-o"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Chat','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('gallery') ): ?>
			<h3 class="post-title"><i class="fa fa-picture-o"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Gallery','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('image') ): ?>
			<h3 class="post-title"><i class="fa fa-camera"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Image','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('link') ): ?>
			<h3 class="post-title"><i class="fa fa-link"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Link','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('quote') ): ?>
			<h3 class="post-title"><i class="fa fa-quote-left"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Quote','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('status') ): ?>
			<h3 class="post-title"><i class="fa fa-bullhorn"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Status','merchant'); ?></span></h3>
		<?php elseif ( has_post_format('video') ): ?>
			<h3 class="post-title"><i class="fa fa-video-camera"></i><?php _e('Type:','merchant'); ?> <span><?php _e('Video','merchant'); ?></span></h3>

	<?php endif; ?>
</div>
