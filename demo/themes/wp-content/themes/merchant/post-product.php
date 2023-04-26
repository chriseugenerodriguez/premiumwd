<?php 
// WOOCOMMERCE
global $post, $product; 
$terms = get_the_terms( $post->ID, 'product_cat' );
foreach ($terms as $term) {
    $product_cat_id = $term->term_id;
    break;
}

 ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
  <h2 class="post-title"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h2>
  <ul class="post-meta group">
    <li><?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '.</span>' ); ?></li>
   <li>Price: <?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></li>
   </ul>
  <div class="post-inner">
    <div class="post-content">
      <div class="entry"> <?php the_excerpt();?> 
      </div>
      </div>
  </div>
</article>