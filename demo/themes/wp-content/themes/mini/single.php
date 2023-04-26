<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php $header = get_post_meta( get_the_ID(), 'header_transparent_checkbox', true); ?>
<?php $height = get_post_meta( get_the_ID(), 'page_height_heading', true); ?>
<?php $background = get_post_meta( get_the_ID(), 'page_image', true); ?>
<?php $parallax = get_post_meta( get_the_ID(), 'page_parallax_checkbox', true); ?>
<?php $background_color = get_post_meta( get_the_ID(), 'page_background_color', true); ?>
<?php $padding = get_post_meta( get_the_ID(), 'page_padding_checkbox', true); ?>
<?php $headercolor = get_post_meta( get_the_ID(), 'page_header_color', true); ?>
<?php $subcolor = get_post_meta( get_the_ID(), 'page_sub_color', true); ?>
<?php $format = get_post_format(); ?>

<section class="grey-section <?php if ($header == 'on'){ ?>transparent <?php } ?> <?php if ($padding == 'on'){ ?>littlepadding<?php } ?> <?php if ($parallax =='on'){ ?>fullscreen<?php } ?>" <?php if ($header == 'on' || $background_color !== '' || $background !== '' ){ ?>style='min-height:<?php echo $height ?>px;background-color: <?php echo $background_color ?>;background-image: url("<?php echo $background ?>");'<?php } ?><?php if ($parallax =='on'){ ?>data-stellar-offset-parent="true" data-stellar-background-ratio="0.1"<?php } ?> >
<style>
.post-meta.group li a, .post-meta.group li {color:<?php echo $subcolor ?>}
.post-meta.group li:not(:first-child):after {background:<?php echo $subcolor ?>;opacity:.5;}
</style>
			<div class="container">
				<div class="topheader text-center <?php if ( $subheader == '') { ?>no-sub<?php } ?>"><div class="wrapper">
					<h1 style="color:<?php echo $headercolor ?>;"><?php the_title(); ?></h1>
<div class="separator tiny center"></div>				 
 <ul class="post-meta group">
                        <li><?php the_time('j M, Y'); ?></li>
                        <li><?php comments_number( 'No Responses', '1 Response', '% Responses' ); ?></li>
                        <li><?php echo get_the_author(); ?></li>
                        <li><?php the_category(' / '); ?></li>
                        <li><?php echo li_love_link(); ?></li>
                      </ul>
				</div></div>
			</div>
</section>
<section class="white-section jquery nopadding">
<div class="container">
    <div class="blog <?php if(get_option('premiumwd_blog_single_sidebar') == 'true') { ?>nine<?php } else { ?>twelve <?php } ?> columns"> 
    <div class="content">

      <article <?php post_class(); ?>>

	   <?php if( get_post_format() ) { get_template_part('includes/blog/post-formats'); } ?>
        <div class="post-inner">
          <div class="post-content">
            <div class="entry clearfix">
              <?php the_content(); ?>
              <?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','Mini'),'after'=>'</div>')); ?>
            </div>
            <!--/.entry--> 
          </div>
          <!--/.post-content-->
          <div class="post-share-meta"><?php if (get_option('premiumwd_blog_tags', 'true') == 'true'): ?><?php the_tags('<div class="post-tags"><span>Tags:</span> ', '', '</div>'); ?><?php endif; ?>
        <?php if ( get_option('premiumwd_blog_social', 'true') == 'true' ) {?><?php get_template_part('includes/inc/share'); } ?></div>
        </div>
        <!--/.post-inner-->
      </article>
      <!--/.post-->
      <?php endwhile; ?>
      <?php if ( get_option( 'premiumwd_blog_pagination', 'true') == 'true') { get_template_part('includes/inc/post-nav'); } ?>
    </div>
         <?php if ( get_option( 'premiumwd_blog_related_posts', 'true') == 'true') { get_template_part('includes/inc/related-posts'); } ?>

    <?php if (get_option('premiumwd_blog_comments', 'true') == 'true') { echo stripslashes(comments_template( '', true )); } ?>
  </div>
  <!--/.content-->
  
<?php if(get_option('premiumwd_blog_single_sidebar') == 'true'): ?>  
<aside class="three columns clearfix">
    <div id="sidebar">
      <?php dynamic_sidebar( 'Blog Widget Area' ); ?>
    </div>
  </aside>
<?php endif; ?>  
</div>  
</section>
<?php get_footer(); ?>