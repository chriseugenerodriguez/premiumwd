
<?php if (is_page_template('blog-sidebar.php') || is_page_template('blog.php') || is_search('')) {  ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
  <h2 class="post-title"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h2>
  <ul class="post-meta group">
    <li><?php the_category(' / '); ?></li>
    <li><?php the_time('j M, Y'); ?></li>
	<li>By <?php the_author(); ?></li>
    </ul>
    <?php get_template_part('includes/blog/post-formats'); ?>
  <div class="post-inner">
    <div class="post-content">
      <div class="entry"> <?php the_excerpt();?> 
      <a class="more-link-custom" href="<?php the_permalink(); ?>" rel="bookmark" ><span><i><?php _e('More','merchant'); ?></i></span></a> 
      </div>
      </div>
  </div>
</article>
<?php } else { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
    <?php get_template_part('includes/blog/post-formats'); ?>
  <h2 class="post-title"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h2>
  <ul class="post-meta group">
    <li><?php the_category(' / '); ?></li>
    <li><?php the_time('j M, Y'); ?></li>
   <li>By <?php the_author(); ?></li>
  </ul>
  <div class="post-inner">
    <div class="post-content">
      <div class="entry"> <?php the_excerpt();?> </div>
      </div>
  </div>
</article>
<?php } ?>