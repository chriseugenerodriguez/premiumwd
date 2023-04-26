<?php get_header();?>

<section class="container">
<div class="cat-nav"><?php wp_list_categories( 'depth=1&title_li=' ); ?>
<?php $this_cat = get_query_var('cat'); // get the category of this category archive page
  //echo "this_cat : ".$this_cat;
$term = get_queried_object();
//print_r($term);
$children = get_terms( $term->taxonomy, array(
'parent'    => $term->term_id,
'hide_empty' => false
) );
// print_r($children); // uncomment to examine for debugging
if( is_array($children) && count($children)>0 ) { // get_terms will return false if tax does not exist or term wasn't found.
    // term has children
?>
  <ul>
    <?php wp_list_categories('child_of=' . $this_cat . '&title_li='); // list child categories ?>
  </ul>
<?php
}
else
{
 ?>
<ul>
    <?php wp_list_categories('child_of=' . $term->parent . '&title_li='); // list child categories ?>
  </ul>
<?php } ?>

</div>
  <div class="twelve columns">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;?>
    <?php query_posts(array('posts_per_page'=>get_option('premiumwd_blog_perpage'), 'paged'=>$paged, 'cat'=>$this_cat )); ?>
    <?php if ($wp_query->have_posts()) : ?>
    <div class="content">
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
      <?php get_template_part('post'); ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>
     <?php echo pagination(); ?>
     <?php wp_reset_query(); ?>
    <?php endif; ?>
 

<?php get_footer(); ?>