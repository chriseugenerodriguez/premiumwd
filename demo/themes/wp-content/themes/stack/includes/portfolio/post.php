<?php $terms = get_the_terms( $post->ID, 'portfolio_tag' );  
        if ( $terms && ! is_wp_error( $terms ) ) :   
        $links = array(); foreach ( $terms as $term ) { $links[] = $term->name; }  
        $links = str_replace(' ', '-', $links);   
        $tax = join( " ", $links );       
        else : $tax = ''; endif; ?>
      <article class="col elastic-portfolio-item <?php echo get_post_meta($post->ID, 'portfolio_custom_select', true); ?> element <?php echo strtolower($tax); ?> all  isotope-item" data-project-cat="<?php echo strtolower($tax); ?> all">
      <div class="work-item style-2">
        <div class="work-info-bg"></div>
        <?php $size = get_post_meta(get_the_ID() , 'portfolio_custom_select', true); ?>
        <?php if($size == 'tall'){ ?>
        <?php the_post_thumbnail('portfolio-tall'); ?>
        <?php } if($size == 'large'){ ?>
        <?php the_post_thumbnail('portfolio-large'); ?>
        <?php } if($size == 'small'){ ?>
        <?php the_post_thumbnail('portfolio-default'); ?>
        <?php } if($size == 'wide'){ ?>
        <?php the_post_thumbnail('portfolio-wide'); ?>
        <?php } else { ?>
        <?php } ?>
        <div class="work-info"> <a href="<?php the_permalink() ?>" rel="bookmark">
          <div class="vert-center">
            <h3>
              <?php the_title(); ?>
            </h3>
            <p><?php echo get_the_date('F j, Y'); ?></p>
          </div>
          <!--/vert-center--> 
          </a> </div>
        </article>