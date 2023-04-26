<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<section class="header-title transparent grey-section">
			<div class="container">
				<div class="topheader text-center">
            <div class="wrapper">
    <?php get_template_part('includes/inc/page-title'); ?>
  </div></div>
  </div>
  </section>
<?php if (is_page()) { ?>
<section class="white-section">  
  <div class="container">
<div class="content">    
<section class="twelve columns">
    <div class="eight columns">
      <h4>Latest 20 Posts:</h4>
      <ul>
        <?php wp_get_archives('type=postbypost&limit=20&format=html'); ?>
      </ul>
    </div>
    <div class="four columns">
      <h4>Archives by Month:</h4>
      <ul>
        <?php wp_get_archives('type=monthly&limit=12'); ?>
      </ul>
      <h4>Archives by Category:</h4>
      <ul>
        <?php wp_list_categories('title_li='); ?>
      </ul>
     </div> </div></section>
  
    <?php } ?>

<?php if (!is_page()): ?>
<section class="white-section jquery <?php if(get_option('premiumwd_blog_sidebar') == 'true') { ?>nopadding<?php } ?>">   
  <div class="container">
    <div class="blog <?php if(get_option('premiumwd_blog_sidebar') == 'true') { ?>nine<?php } else { ?>twelve <?php } ?> columns"> 

    <div class="content">
        <?php while (have_posts()) : the_post(); ?>
        
        <!-- Margin -->        
        <?php echo get_template_part('post', 'structure');?>
 

<?php echo pagination(); ?> 
	     
        <!-- Margin -->       
        <?php endwhile; ?>
        
       </div>  
  </div>      
   	<?php if(get_option('premiumwd_blog_sidebar') == 'true'): ?>  
	<aside class="three columns clearfix"> <div id="sidebar"> <?php dynamic_sidebar( 'Blog Widget Area' ); ?> </div> </aside>

  
        <?php else :
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
 endif; ?> 
 
      </section>  	
<?php endif; ?>  
<?php endif; ?>
<?php get_footer(); ?>
