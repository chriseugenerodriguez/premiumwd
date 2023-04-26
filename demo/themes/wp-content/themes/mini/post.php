<?php $format = get_post_format(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('group container-fluid'); ?>>
    <?php get_template_part('includes/blog/post-formats'); ?>
  <h2 class="post-title text-center container-fluid"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h2>

<ul class="post-meta group">
    <li><?php the_time('j M, Y'); ?></li>
    <li><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></li>
    <li><?php echo get_the_author_link(); ?></li>
    <li><?php the_category(' / '); ?></li>
    <li><?php echo li_love_link(); ?></li>
  </ul>
 <span class="separator tiny center"></span> 
  <div class="post-inner">
    <div class="post-content">
      <div class="entry"> <?php the_excerpt();?> </div>
      </div>
  </div>
</article>
