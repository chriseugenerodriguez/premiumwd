<?php get_header(); ?>
<?php $format = get_post_format(); ?>

<div class="container padding-top">
  <section class="nine columns">
    <div class=" content">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class(); ?>>
        <h1 class="post-title pad"> <?php the_title(); ?></a></h1>
        <ul class="post-meta group">
    <li><?php the_category(' / '); ?></li>
    <li><?php the_time('j M, Y'); ?></li>
   <li>By <?php the_author(); ?></li>        </ul>
	   <?php if( get_post_format() ) { get_template_part('includes/blog/post-formats'); } ?>
        <div class="post-inner">
          <div class="post-content">
            <div class="entry container">
              <?php the_content(); ?>
              <?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','merchant'),'after'=>'</div>')); ?>
            </div>
            <!--/.entry--> 
          </div>
          <!--/.post-content-->
          <?php if (get_option('premiumwd_blog_tags', 'true') == 'true'): ?><?php the_tags('<div class="post-tags"><span>Tags:</span> ', '', '</div>'); ?><?php endif; ?>
        </div>
        <!--/.post-inner-->
        <?php if ( get_option('premiumwd_blog_social', 'true') == 'true' ) { get_template_part('includes/inc/share'); } ?>
      </article>
      <!--/.post-->
      <?php endwhile; ?>
      <?php if ( get_option( 'premiumwd_blog_pagination', 'true') == 'true') { get_template_part('includes/inc/post-nav'); } ?>
    </div>
    <?php if ( ( get_option( 'premiumwd_blog_author', 'true') == 'true') && get_the_author_meta( 'description' ) ): ?>
    <div class="author-bio">
      <div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
      <p class="bio-name"><?php the_author_posts_link(); ?></p>
      <p class="bio-desc"><?php the_author_meta('description'); ?></p>
    </div>
    <?php endif; ?>
    <?php if (get_option('premiumwd_blog_related', 'true') == 'true') { get_template_part ('includes/inc/related-posts'); } ?>
    <?php if (get_option('premiumwd_blog_comments', 'true') == 'true') { echo stripslashes(comments_template( '', true )); } ?>
  </section>
  <!--/.content-->
  
  <aside class="three columns clearfix">
    <div id="sidebar">
      <?php dynamic_sidebar( 'Blog Widget Area' ); ?>
    </div>
  </aside>
  
</div>
<?php get_footer(); ?>
