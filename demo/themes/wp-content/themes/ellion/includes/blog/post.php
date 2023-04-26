<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group hide'); ?>>
  <?php get_template_part('includes/blog/blog-format'); ?>
  <div class="row">
    <ul class="meta-data">
      <li class="cat"><?php the_category(', '); ?></li>
      <li class="date"><?php the_date('M j, Y'); ?></li>
      <li class="edit"><?php edit_post_link(); ?></li>
    </ul>
    <?php if ( $format != 'aside' ) { ?> 
    	<h2 class="post-title"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>
	 <?php } ?>
    <div class="post-inner"><?php the_excerpt();?>
    <a class="read-more-link" href="<?php the_permalink(); ?>" rel="bookmark">Read More</a>
    </div>
  </div>
</article>
