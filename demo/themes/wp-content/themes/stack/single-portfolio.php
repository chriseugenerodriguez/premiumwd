<?php /* Template Name: Index */ ?>
<?php get_header(); ?>

<div class="wrapper">
  <div class="container">
    <div class="twelve columns">
      <div class="page-title">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
    <div class="container clearfix">
      <div class="portfolio_navigation">
        <?php if (get_option('premiumwd_portfolio_pagination', 'true') == 'true'): ?>
        <div class="portfolio_prev">
          <?php previous_post_link( '%link', '<i class="fa fa-angle-left"></i>' ); ?>
        </div>
        <div class="portfolio_button"><a href="<?php echo get_option('premiumwd_portfolio_url'); ?>"><i class="fa fa-th"></i></a></div>
        <div class="portfolio_next">
          <?php next_post_link( '%link', '<i class="fa fa-angle-right"></i>' ); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="container  clearfix">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php $groups = get_post_meta( get_the_ID(), 'portfolio_repeat_group', true );
			  
			  $image = $slider = $video = $image_src = $type = '';
			  foreach ( (array) $groups as $key => $entry ) {	
				
				$type = (!empty($entry['image']) && empty($entry['embed']))?'image':'embed';
				
				switch($type){
					case 'image':			
				    	if ( isset( $entry['image'] ) ) { $image = $entry['image'];  }	
						if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 			
						$image_src .='<a class="fancybox" rel="gallery1" href='. $image .' title='. get_the_title(). '>';
						endif;
						$image_src .='<img height="auto" width="100%" src=' . $image .'>';
						if (get_option('premiumwd_portfolio_lightbox','true')=='true'): 			
						$image_src .='</a>';
						endif;							
					 break;
					case 'embed':	
			  			if ( isset( $entry['embed'] ) ) { $embed = $entry['embed'];  }
						$video_src .='<iframe height="550px" width="100%" src=' . $embed .'></iframe>';		
					 break;
				}
			  
			  } ?>
    <?php $layout = get_post_meta(get_the_ID(), 'portfolio_layout_select', true);  ?>
    <?php if ( 'wide' == $layout  || 'wide_gallery' == $layout ): portfolio_full_width(); ?>
    <?php endif; ?>
    <?php if ( 'small' == $layout  || 'small_gallery' == $layout ):  ?>
    <section class="eight columns portfolio-columns">
      <?php endif; ?>
      <?php if ( 'wide' == $layout  || 'wide_gallery' == $layout ):  ?>
      <section class="twelve columns portfolio-columns">
        <?php endif; ?>
        <?php if ( 'small' == $layout || 'wide' == $layout ): ?>
        <?php if ( $type == 'embed' ) { ?>
        <?php echo $video_src ?>
        <?php } ?>
        <?php if ( $type == 'image' ) { ?>
        <?php echo $image_src; ?>
        <?php } ?>
        <?php endif; ?>
        <?php if ( 'small_gallery' == $layout || 'wide_gallery' == $layout ): ?>
        <?php echo do_shortcode('[slider-portfolio]'); ?>
        <?php endif; ?>
        <?php if ( 'wide' == $layout  || 'wide_gallery' == $layout ):  ?>
      </section>
      <?php endif; ?>
      <?php if ( 'wide' == $layout  || 'wide_gallery' == $layout ):  ?>
      <section class="twelve columns">
        <?php the_content(); ?>
        <?php endif; ?>
        <?php if ( 'wide' == $layout  || 'wide_gallery' == $layout ):  ?>
      </section>
      <?php elseif ( 'small' == $layout  || 'small_gallery' == $layout ): ?>
      <?php endif; ?>
      <?php if ( 'wide' == $layout  || 'wide_gallery' == $layout ):  ?>
      <section class="twelve columns">
        <?php endif; ?>
        <?php get_template_part ('/includes/portfolio/share_portfolio'); ?>
        <?php if (get_option('premiumwd_portfolio_comments', 'true') == 'true') { echo comments_template('', true); }  ?>
      </section>
      <?php if ( 'small' == $layout  || 'small_gallery' == $layout ):  portfolio_sidebar_width(); ?>
      <?php the_content(); ?>
    </section>
    <?php endif; ?>
    <?php endwhile; ?>
    <!-- #container --> 
  </div>
</div>
</div>
<!-- #wrap -->
<?php get_footer(); ?>
