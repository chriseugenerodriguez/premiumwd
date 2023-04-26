<?php $post_formatt = get_post_format(); switch($post_formatt){ case 'video': ?>

<article class="isotope-item post video">
  <div class="content-inner"> <?php echo get_post_meta(get_the_ID(),'_format_video_embed',true);?>
    <div class="post-header">
      <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>">
        <?php the_title(); ?>
        </a></h3>
    </div>
    <?php the_excerpt(''); ?>
    <div class="mini-meta-data"> <span class="mata-date"> <?php echo get_the_date('F j, Y'); ?> </span> <span class="mata-comments"><a href="<?php comments_link(); ?>">
      <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
      </a></span> </div>
  </div>
</article>
<?php break; case 'link': ?>
<article class="isotope-item post link">
  <div class=" post_text_inner"> <a href="<?php the_permalink() ?>">
    <div class="mini-meta-data"> <span class="mata-date"> <?php echo get_the_date('F j, Y'); ?> </span> <span class="mata-comments">
      <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
      </span> </div>
    <i class="link_mark fa fa-link pull-left"></i>
    <div class="link-inner">
      <p><?php echo get_post_meta(get_the_ID(),'link_text',true); ?></p>
    </div>
    </a> </div>
</article>
<?php  break; case 'audio' :?>
<article class="isotope-item post audio">
  <div class="content-inner"> <?php echo do_shortcode('[audio-blog]'); ?>
    <div class="post-header">
      <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>">
        <?php the_title(); ?>
        </a></h3>
    </div>
    <?php the_excerpt(''); ?>
    <div class="mini-meta-data"> <span class="mata-date"> <?php echo get_the_date('F j, Y'); ?> </span> <span class="mata-comments"><a href="<?php comments_link(); ?>">
      <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
      </a></span> </div>
  </div>
</article>
<?php break; case 'image' :?>
<article class="isotope-item post image">
  <div class="content-inner"> <a href="<?php echo get_permalink(); ?>">
    <?php the_post_thumbnail('blog-style'); ?>
    </a>
    <div class="post-header">
      <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>">
        <?php the_title(); ?>
        </a></h3>
    </div>
    <?php the_excerpt(''); ?>
    <div class="mini-meta-data"> <span class="mata-date"> <?php echo get_the_date('F j, Y'); ?> </span> <span class="mata-comments"><a href="<?php comments_link(); ?>">
      <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
      </a></span> </div>
  </div>
</article>
<?php break; case 'gallery':?>
<article class="isotope-item post gallery">
  <div class="content-inner"> <?php echo do_shortcode('[slider-blog-main]'); ?>
    <div class="post-header">
      <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>">
        <?php the_title(); ?>
        </a></h3>
    </div>
    <?php the_excerpt(''); ?>
    <div class="mini-meta-data"> <span class="mata-date"> <?php echo get_the_date('F j, Y'); ?> </span> <span class="mata-comments"><a href="<?php comments_link(); ?>">
      <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
      </a></span> </div>
  </div>
</article>
<?php break; default : ?>
<article class="isotope-item post aside">
  <div class="post-header">
    <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>">
      <?php the_title(); ?>
      </a></h3>
  </div>
  <?php the_excerpt(''); ?>
  <div class="mini-meta-data"> <span class="mata-date"> <?php echo get_the_date('F j, Y'); ?> </span> <span class="mata-comments"><a href="<?php comments_link(); ?>">
    <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
    </a></span> </div>
</article>
<?php  break; case 'quote' :?>
<article class="isotope-item post quote ">
  <div class="post_text_inner"> <a href="<?php the_permalink() ?>">
    <div class="mini-meta-data"> <span class="mata-date"> <?php echo get_the_date('F j, Y'); ?> </span> <span class="mata-comments">
      <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>
      </span> </div>
    <i class="qoute_mark fa fa-quote-right pull-left"></i>
    <div class="quote-inner">
      <p><?php echo get_post_meta(get_the_ID(),'quote_text',true);?></p>
      <span class="author"><?php echo get_post_meta(get_the_ID(),'_format_quote_source_name',true);?></span> </div>
    </a> </div>
</article>
<?php break ;} ?>
