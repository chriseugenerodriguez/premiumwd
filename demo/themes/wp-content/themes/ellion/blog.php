<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<?php $subheader = get_post_meta( get_the_ID(), 'page_sub_heading', true); ?>
<?php $title = get_post_meta( get_the_ID(), 'page_title_checkbox', true); ?>

<div class="blog-section container">
  <section class="container">
    <?php if ($title == 'on'){ ?>
	    <div class="page-title">
	      <h1><?php the_title(); ?></h1>
	      <?php if ( $subheader  !=='') { ?><p><?php echo $subheader ?></p><?php } ?>
	    </div>
    <?php } ?>
    <div class="blog <?php if(get_option('premiumwd_blog_sidebar') == 'true') { ?>ten<?php } else { ?>twelve <?php } ?> columns littlepaddingright">
      <div id="blog_content" class="content <?php if(get_option('premiumwd_blog_animated') == 'true') { ?>animated<?php }?>">
        <div class="grid-sizer"></div>
		  <?php global $wp_query; global $post; ?>
        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
        <?php  query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged )); ?>
        <?php if ($wp_query->have_posts()) : ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <?php echo get_template_part('/includes/blog/post', 'structure');?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
<?php get_template_part('/includes/inc/pagination'); ?>
    </div>
    <?php if(get_option('premiumwd_blog_sidebar') == 'true'): ?>
    <aside class="two columns clearfix blog-sidebar">
      <div id="sidebar">
        <?php dynamic_sidebar( 'Blog Widget Area' ); ?>
      </div>
    </aside>
    <?php endif; ?>
  </section>
</div>
<!-- #wrap -->
<?php get_footer(); ?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/includes/blog/js/masonry.js"></script>
