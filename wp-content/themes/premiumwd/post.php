<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
<div class="post-container">
<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('blog'); ?></a> 
  <span><?php the_category(' / '); ?></span>
  <h2 class="post-title pad"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h2>
	<div class="entry"> <?php the_excerpt(20);?> </div>
</div>
</article>
