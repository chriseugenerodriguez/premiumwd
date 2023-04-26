<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>

<div class="wrapper">
  <div class="container">
    <?php is_category() ?>
    <div class="archive-title">
      <h1>
        <?php if ( is_category()): ?>
        <?php single_cat_title('Category: '); ?>
        <?php elseif ( is_day() ) : ?>
        <?php printf( __( 'Daily Archives: <span>%s</span>', 'Display' ), get_the_date() ); ?>
        <?php elseif ( is_month() ) : ?>
        <?php printf( __( 'Monthly Archives: <span>%s</span>', 'Display' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'Display' ) ) ); ?>
        <?php elseif ( is_year() ) : ?>
        <?php printf( __( 'Yearly Archives: <span>%s</span>', 'Display' ), get_the_date( _x( 'Y', 'yearly archives date format', 'Display' ) ) ); ?>
        <?php elseif ( is_author() ) : ?>
        <?php printf( __( 'Author: <span>%s</span>', 'Display' ), get_the_author()); ?>
        <?php else : ?>
        <?php _e( 'Archives', 'Display' ); ?>
        <?php endif; ?>
      </h1>
    </div>
  </div>
  <?php if (is_page()) { ?>
  <div class="container">
    <section class="twelve columns">
    <div class="eight columns">
      <h3>Latest 20 Posts:</h3>
      <ul>
        <?php wp_get_archives('type=postbypost&limit=20&format=html'); ?>
      </ul>
    </div>
    <div class="four columns">
      <h3>Archives by Month:</h3>
      <ul>
        <?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
      <h3>Archives by Category:</h3>
      <ul>
        <?php wp_list_categories('title_li='); ?>
      </ul>
    </div>
    <?php } ?>
    <div id="content" class="clearfix">
      <section id="post-area" class="col masonry isotope" >
        <?php while (have_posts()) : the_post(); ?>
        <?php if( is_category() || is_author() || is_month() || is_year()): ?>       
        <!-- Margin -->        
        <?php echo get_template_part('includes/blog/blog-format', 'structure');?>
        <?php endif; ?>      
        <!-- Margin -->       
        <?php endwhile; else :
		 if ( is_category() ) { // If this is a category archive
			printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->user_name);
		} else {
			echo("<h2>No posts found.</h2>");
		}
		get_search_form();
	endif;
?>
      </section>    
      <!-- Margin -->      
    </div>
  </div> 
  <!-- #wrap -->  
</div>
<!-- .container -->
</div>
</div>
<?php get_footer(); ?>
