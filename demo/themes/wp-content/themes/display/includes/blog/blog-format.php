<article class="post">
  <div class="content-inner">
  <?php the_category(); ?> 
    <div class="post-header">
      <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>">
        <?php the_title(); ?>
        </a></h3>
    </div>
    <?php the_excerpt(''); ?>
  </div>
</article>