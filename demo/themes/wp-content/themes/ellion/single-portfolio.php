<?php get_header(); ?>
<?php $layout = get_post_meta(get_the_ID(), 'portfolio_type', true);  ?>
<?php $sticky = get_post_meta( get_the_ID(), 'portfolio_scroll_sidebar', true); ?>
<?php $gallery = get_post_meta( get_the_ID(), 'portfolio_lightbox', true); ?>
<?php $align = get_post_meta( get_the_ID(), 'portfolio_align', true); ?>
<?php $subtitle = get_post_meta( get_the_ID(), 'portfolio_layout_excerpt', true); ?>
<?php $desc = get_post_meta( get_the_ID(), 'portfolio_project_description', true); ?>
<?php $servicest = get_post_meta( get_the_ID(), 'portfolio_services_title', true); ?>
<?php $services = get_post_meta( get_the_ID(), 'portfolio_services', true); ?>
<?php $links = get_post_meta( get_the_ID(), 'portfolio_links', true); ?>
<?php $share = get_post_meta( get_the_ID(), 'portfolio_share', true); ?>
<?php $like = get_post_meta( get_the_ID(), 'portfolio_like', true); ?>
<?php $container = get_post_meta( get_the_ID(), 'portfolio_container', true); ?>
<?php $margin = get_post_meta( get_the_ID(), 'portfolio_image_margin', true); ?>
<?php $featured = get_post_meta( get_the_ID(), 'portfolio_featured_image', true); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="container">
  <div class="<?php if($container != 'full') { ?>page-container content-wrapper<?php } ?> no-bottom-margin">
    <div class="single-portfolio-holder <?php if($container == 'full') { ?>full<?php } ?> clearfix">
      <?php if ( 'side' == $layout):  ?>
      <div class="details columns <?php if($sticky == true) { ?>sticky<?php } ?> <?php if($container == 'full') { ?>five<?php } else { ?>four<?php } ?> <?php if($align == 'left'){  ?>description-set-left<?php } ?> <?php if($align == 'right') { ?>description-set-right<?php } ?>">
        <div class="wrapper <?php if($container == 'full') { ?>paddingtop<?php } ?>">
          <div class="title section-title">
            <h1><?php the_title(); ?></h1>
            <p><?php echo $subtitle; ?></p>
          </div>
          <?php if($desc != '') { ?>
          <div class="project-description ">
            <div class="post-formatting"><?php echo wpautop($desc); ?></div>
          </div>
          <?php } ?>
          <div class="services">
         	 <?php if($services != '') { ?>
               <div class="checklist-entry">
                 <?php if($servicest != '') {?>
                 <h3><?php echo $servicest ?></h3>
                 <?php } ?>
                 <?php $sersingle= explode(",",$services); $sersinglet = array_map('trim',$sersingle);?>
                 <ul>
                   <?php foreach ($sersinglet as $value) {
                      echo '<li>'.$value.'</li>';
                  } ?>
                 </ul>
               </div>
					<?php if($links != '') { ?>
                  <div class="link">
                    <?php $groups = $links;			  
                    foreach ( (array) $groups as $key => $entry ) {				
                     $html = $text = $url = '';
                      if ( isset( $entry['portfolio_text'] ) )
                          $text = esc_html( $entry['portfolio_text'] );
                      if ( isset( $entry['portfolio_url'] ) )
                          $url = $entry['portfolio_url'];
                     $html .= ' <div class="project-multiple-links"> <a href="'.$url.'" target="_blank">'.$text.'</a></div>';
                     echo $html;
                  } ?>
                  </div>
               <?php } ?>
            <?php } ?>
            <?php if($share == 'true' || $like == 'true') { ?>
               <div class="social-links-plain">
                 <?php if($like == 'true') { ?>
                  <div class="likes"><?php echo li_love_link(); ?></div>
                 <?php } ?>
                 <?php if($share == 'true') { ?>
                    <div class="share-social">
                      <h4>Share</h4>
                      <div class="social-links">
                        <?php get_template_part('includes/portfolio/share'); ?>
                      </div>
                    </div>
                 <?php } ?>
               </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="content columns <?php if($align == 'left') { ?>right<?php } ?> <?php if($container == 'full') { ?>seven<?php } else { ?>eight<?php } ?> <?php if($margin == 'true'){  ?>padding<?php } ?> <?php if($gallery == 'true') { ?>gallery-column<?php } ?>">
        <div class="row">
          <?php if($featured == 'true'){  ?>
          <div class="twelve columns <?php if($margin == 'true'){  ?>padding<?php } ?>"><?php echo the_post_thumbnail('featured');?></div>
          <?php } ?>
          <?php the_content();?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ( 'carousal' == $layout || 'full-screen' == $layout || 'regular' == $layout):  ?>
  <div class="wrapper row">
    <div class="title section-title">
      <h1><?php the_title(); ?></h1>
      <p><?php echo $subtitle; ?></p>
    </div>
    <?php if($desc != '') { ?>
       <div class="project-description <?php if($services != '') { ?>columns eight<?php } ?>">
         <div class="post-formatting row"><?php echo wpautop($desc); ?></div>
       </div>
    <?php } ?>
    <?php if($services != '') { ?>
       <div class="services columns four alotpaddingleft">
         	<div class="checklist-entry row">
              <?php if($servicest != '') {?>
               <h3><?php echo $servicest ?></h3>
              <?php } ?>
              <?php $sersingle= explode(",",$services); $sersinglet = array_map('trim',$sersingle);?>
              <ul>
                <?php foreach ($sersinglet as $value) {
                         echo '<li>'.$value.'</li>';
                     } ?>
              </ul>
            </div>
            <?php if($links != '') { ?>
               <div class="link row">
                 <?php $groups = $links;			  
                       foreach ( (array) $groups as $key => $entry ) {				
                        $html = $text = $url = '';
                         if ( isset( $entry['portfolio_text'] ) )
                             $text = esc_html( $entry['portfolio_text'] );
                         if ( isset( $entry['portfolio_url'] ) )
                             $url = $entry['portfolio_url'];
                        $html .= ' <div class="project-multiple-links"> <a href="'.$url.'" target="_blank">'.$text.'</a></div>';
                        echo $html;
                     } ?>
               </div>
            <?php } ?>
         </div>
    <?php } ?>
    <?php if($share == 'true' || $like == 'true') { ?>
       <div class="social-links-plain twelve columns">
         <?php if($like == 'true') { ?>
            <div class="likes row"><?php echo li_love_link(); ?></div>
         <?php } ?>
         <?php if($share == 'true') { ?>
            <div class="share-social row">
              <h4>Share</h4>
              <div class="social-links"><?php get_template_part('includes/portfolio/share'); ?></div>
            </div>
         <?php } ?>
       </div>
    <?php } ?>
  </div>
</div>
<div class="content <?php if ( 'full-screen' == $layout){  ?>fullscreen<?php } ?> <?php if($margin == 'true'){  ?>padding<?php } ?> <?php if($gallery == 'true') { ?>gallery-column<?php } ?>">
  <div class="full-width-container  <?php if ( 'carousal' == $layout || 'full-screen' == $layout){  ?>carousal<?php } ?>">
    <?php if($featured == 'true'){  ?>
    	<div class="twelve columns <?php if($margin == 'true'){  ?>padding<?php } ?>"><?php echo the_post_thumbnail('featured');?></div>
    <?php } ?>
    <?php the_content();?>
  </div>
</div>
<?php if ( 'carousal' == $layout){?></div><?php } ?>
<?php endif; ?>
<?php if (get_option('premiumwd_portfolio_pagination', 'true') == 'true'): ?>
<div class="container clearfix portfolio-pagination content-wrapper">
  <div class="portfolio_navigation littlemargintop littlemarginbottom clearfix">
    <div class="portfolio_prev columns five text-left">
      <?php previous_post_link( '%link', '<i class="fa fa-long-arrow-left"></i> <span>Previous</span>' ); ?>
    </div>
    <div class="portfolio_button columns two text-center"><a href="<?php echo get_option('premiumwd_portfolio_url'); ?>"><i class="fa fa-th-large"></i></a></div>
    <div class="portfolio_next columns five text-right">
      <?php next_post_link( '%link', '<span>Next</span> <i class="fa fa-long-arrow-right"></i>' ); ?>
    </div>
  </div>
</div>
<?php endif; ?>
<?php endwhile; ?>
</div>
<?php if ( 'regular' == $layout){?></div><?php } ?>
<!-- #wrap -->
<?php get_footer(); ?>
