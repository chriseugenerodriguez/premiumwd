<?php $size = get_post_meta(get_the_ID() , 'portfolio_layout_excerpt', true); ?>

<figcaption <?php if(get_option('premiumwd_thumbnail_style') == 'Dark'): ?>class="dark"<?php endif;?>>
	<a href="<?php the_permalink();?>" rel="bookmark">
		<h3><?php the_title();?></h3>
		<?php if(get_option('premiumwd_thumbnail_info') == 'Category'): ?>
		<p><?php $terms = get_the_terms( $post->ID, 'portfolio_category' ); $term_names = array(); foreach( $terms as $term ) $term_names[] = $term->name; echo implode( ', ', $term_names ); ?></p>
		<?php endif; ?>
		<?php if(get_option('premiumwd_thumbnail_info') == 'Excerpt'): ?>
		<div class="excerpt"><?php echo $size; ?></div>
		<?php endif; ?>
		<?php if(get_option('premiumwd_thumbnail_info') == 'Any'): ?>
		    <?php if($size === ''){ ?>
		    <p><?php echo get_the_date('F j, Y');?></p>
		    <?php } else { ?>
		    <div class="excerpt"><?php echo $size; ?></div>
		    <?php } ?>
		<?php endif; ?>
	</a> 
</figcaption>
