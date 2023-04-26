<?php function portfolio_full_width() { global $wp_query; ?>
<section class="twelve columns portfolio-columns">
  <?php if (get_option('premiumwd_portfolio_metadata', 'true') == 'true') { ?>
  <ul class="container metadata clearfix">
    <li><b>Author:</b> <span>
      <?php the_author(); ?>
      </span> </li>
    <li><b>Date:</b> <span>
      <?php the_date(); ?>
      </span> </li>
    <li><b>Likes:</b> <span><?php echo li_love_link(); ?></span></li>
    <li><b>Tags:</b> <span>
      <?php $terms = get_the_terms( $post->ID, 'portfolio_tag' ); $term_names = array(); foreach( $terms as $term ) $term_names[] = $term->name; echo implode( ', ', $term_names ); ?>
      </span> </li>
    <?php if (get_option('premiumwd_portfolio_comments', 'true') == 'true'): ?>
    <li><b>Comments:</b> <span> <a href="#comment">
      <?php comments_number( '0', '1', '% '); ?>
      </a> </span>
      <?php endif; ?>
    </li>
  </ul>
  <?php } ?>
</section>
<?php } ?>
<?php function portfolio_sidebar_width() { global $wp_query; ?>
<section class="four columns sidebar <?php if (get_option('premiumwd_portfolio_sidebar', 'true') == 'true'): ?>portfolio_single_sidebar<?php endif; ?>">
<?php if (get_option('premiumwd_portfolio_metadata', 'true') == 'true') { ?>
<ul class="container metadata clearfix">
  <li><b>Author:</b> <span>
    <?php the_author(); ?>
    </span> </li>
  <li><b>Date:</b> <span>
    <?php the_date(); ?>
    </span> </li>
  <li><b>Likes:</b> <span><?php echo li_love_link(); ?></span></li>
  <li><b>Tags:</b> <span>
    <?php $terms = get_the_terms( $post->ID, 'portfolio_tag' ); $term_names = array(); foreach( $terms as $term ) $term_names[] = $term->name; echo implode( ', ', $term_names ); ?>
    </span> </li>
  <?php if (get_option('premiumwd_portfolio_comments', 'true') == 'true'): ?>
  <li><b>Comments:</b> <span> <a href="#comment">
    <?php comments_number( '0', '1', '% '); ?>
    </a> </span>
    <?php endif; ?>
  </li>
</ul>
<?php } ?>
<?php } ?>