<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
  <h2 class="post-title pad"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h2>
  <!--/.post-title-->
  
  <ul class="post-meta group">
    <li><?php the_category(' / '); ?></li>
    <li><i class="fa fa-clock-o"></i><?php the_time('j M, Y'); ?></li>
    <?php if ( comments_open() ): ?><li><a href="<?php comments_link(); ?>"><i class="fa fa-comment"></i><?php comments_number( '0', '1', '%' ); ?></a></li><?php endif; ?>
  </ul>
  <!--/.post-meta-->
  
  <div class="post-inner">
    <?php get_template_part('includes/blog/post-formats'); ?>
    <div class="post-content pad">
      <div class="entry"> <?php the_excerpt();?> </div>
      <!--/.entry--> 
      <a class="more-link-custom" href="<?php the_permalink(); ?>" rel="bookmark" ><span><i><?php _e('More','adomo'); ?></i></span></a> 
      </div>
    <!--/.post-content--> 
  </div>
  <!--/.post-inner--> 
  
</article>
<!--/.post--> 