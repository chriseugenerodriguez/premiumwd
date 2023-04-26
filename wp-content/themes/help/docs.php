<?php /* Template Name: Docs Single */ ?>
<?php get_header(); ?>

<div id="content"> <?php echo do_shortcode('[theme-docs-search /]'); ?>
  <div class="popular-topics">
    <ul>
      <li>Popular Topics:</li>
      <li><a href="/guides/getting-started/">Getting Started</a></li>
      <li><a href="/guides/templates/">Templates</a></li>
      <li><a href="/guides/theme-related/">Theme Related</a></li>
    </ul>
  </div>
</div>
<div class="container padding">
  <div class="columns twelve">
<h1 class="post-title pad">
      <?php the_title(); ?>
    </h1>
    <div class="vote">
   <div id="breadcrumbs"><?php if ( function_exists( 'yoast_breadcrumb' ) ) {
	yoast_breadcrumb();
} ?>
</div> 
    </div>
  </div>
  <div class="container">
    <aside class="three columns clearfix">
      <div id="sidebar">
        <?php dynamic_sidebar( 'Docs & FAQ' ); ?>
      </div>
    </aside>
    <div class="nine columns">
      <?php if ( have_posts() ) : ?>
      <div class="content">
      <div class="bs-docs-section">
			<?php while ( have_posts() ): the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
        <div class="article-footer">
          <div class="pagination">
            <?php 

				$parents = get_post_ancestors(get_the_ID());
				//print_r($parents);
                $parent = 0;				
				$parent = wp_get_post_parent_id(get_the_ID());

				$next = '';
				$prev = '';

				
$pagelist = get_children('post_status=publish&post_parent='.$parent.'&orderby=ID&order=asc&numberposts=-1');
$pages = array();
foreach ($pagelist as $page) {
   $pages[] += $page->ID;
}
//print_r($pages);
$current = array_search(get_the_ID(), $pages);
$prevID = $pages[$current-1];
$nextID = $pages[$current+1];
			

				if(!empty($prevID)) echo '<a class="prev-link" href="'.get_permalink($prevID).'"><i class="fa fa-angle-left"></i> '.get_the_title($prevID).'</a>';
				if(!empty($nextID)) echo '<a class="next-link" href="'.get_permalink($nextID).'">'.get_the_title($nextID).' <i class="fa fa-angle-right"></i> </a>';
				?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    
    <!--/.pad--> 
    
  </div>
</div>

<!--/.content-->

<section class="request-link central content" >
  <div class="container"> <strong>Didn't find what you are looking for?</strong> <a class="btn" target="_blank" href="http://questions.premiumwd.com/"> <span>ask a question</span> </a> </div>
</section>
<?php get_footer(); ?>
