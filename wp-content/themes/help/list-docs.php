<?php /* Template Name: List Docs */ ?>
<?php get_header(); ?>
<div id="content">
<?php echo do_shortcode('[theme-docs-search /]'); ?>

<div class="popular-topics">
<ul>
<li>Popular Topics:</li>
<li><a href="/guides/getting-started/">Getting Started</a></li>
<li><a href="/guides/wordpress-themes/">Templates</a></li>
<li><a href="/guides/theme-related/">Theme Related</a></li>
</ul>
</div></div>
<div class="central content clearfix">
<div class="container">
  <section class="nine columns center">
    <div class="content">
      <?php while ( have_posts() ): the_post(); ?>
      <article <?php post_class('group'); ?>>
        <h2 class="list-docs"><?php the_title(); ?></h2>
        <div class="entry container guide-list">
            <?php
	$pageChildren = $wpdb->get_results("
		SELECT *
		FROM $wpdb->posts
		WHERE post_parent = ".$post->ID."
		AND post_type = 'page'
		ORDER BY menu_order
	", 'OBJECT');

	if ( $pageChildren ) :
		foreach ( $pageChildren as $pageChild ) :
			setup_postdata( $pageChild );
			?>
            <a href="<?php print get_permalink( $pageChild->ID ) ?>"><h2><?php print get_the_title( $pageChild->ID ); ?></h2><?php the_excerpt(); ?></a>
              <?php
        endforeach;
	endif;
	?>
        </div>
        <!--/.entry--> 
      </article>
      <?php endwhile; ?>
    </div>
    <!--/.pad--> 
  </section>
</div></div>
<!--/.content-->
<section class="request-link">
  <div class="container">
  <strong>Didn't find what you are looking for?</strong> <a class="btn" href="http://questions.premiumwd.com" target="_blank">Ask a Question</a> 
  </div>
</section>
<?php get_footer(); ?>
