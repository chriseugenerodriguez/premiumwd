<?php /* Template Name: Videos */ ?>
<?php get_header(); ?>
<?php global $post;
$p = get_post($post->ID); ?>
<div id="container">
  <section id="content" class="clearfix" role="main">
  <div class="video-col"> 
    <!-- #primary -->
    <div id="video-page" class="container">
      <div id="video-main" class="tab-content ">
        <?php query_posts(array('post_type' => 'video')); $count = 0; ?>
        <?php if ($wp_query): while($wp_query->have_posts()) : $wp_query->the_post();?>
        <div class="video-tab tab-pane" id="<?php global $post; echo $post->post_name; ?>">
          <div class="row">
          <div class="video columns twelve">
            <iframe wmode="transparent" src="<?php echo do_shortcode(get_post_meta($post->ID, 'video', true));?>" data-video="<?php echo do_shortcode(get_post_meta($post->ID, 'video', true));?>" class="wistia_embed" name="wistia_embed" frameborder="0" height="650" scrolling="no" width="100%"></iframe>
          </div>
          </div>
          <div class="meta-info columns twelve">
            <div class="video-meta"> <span class="tag"> </span> <span class="date"><?php echo get_the_date(); ?></span> </div>
            <h2><?php the_title(); ?></h2>
            <div class="entry"><?php the_content(); ?></div>
            <!-- /.entry --> 
          </div>
          <!-- /.info --> 
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php  $terms = get_terms("tagvideo");
  $count = count($terms);
                echo '<div id="video-filter"><ul id="filter">';
                echo '<li data-filter="*"><a href="#" title="All" rel="All" class="current">All</a></li>';
                if ($count > 0) {
                    foreach ($terms as $term) {
                        echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
                    }
                }
                echo "</ul>";
                ?>
      <!-- #content -->
      <ul id="portfolio" class="nav nav-tabs">
        <?php query_posts(array('post_type' => 'video'));  $count = 0; ?>
        <?php if ($wp_query) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <?php   $terms = get_the_terms($post->ID, 'tagvideo');
                    $termsString = ""; //initialize the string that will contain the terms
					foreach ( $terms as $term ) { // for each term
					$termsString .= $term->slug.' '; //create a string that has all the slugs
				}  ?>
        <li class="item <?php echo $termsString; ?>" rel="<?php global $post; echo $post->post_name; ?>"><a href="#<?php global $post; echo $post->post_name; ?>">
          <?php the_post_thumbnail(); ?>
          </a><h3 class="video-title"><a href="#<?php global $post; echo $post->post_name; ?>"><?php the_title(); ?></a></h3>
          <a href="#<?php global $post; echo $post->post_name; ?>" title="<?php the_title(); ?>" class="play-video"></a></li>
        <?php endwhile; // end of the loop.  ?>
        <!-- #content -->
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
</section>
</div>
<?php get_footer(); ?>
