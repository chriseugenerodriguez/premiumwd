<?php /* Template Name: Showcase */ ?>

<?php get_header(); ?>
<?php 
$stack = 'http://www.premiumwd.com/wordpress-themes/portfolio/stack/';
$mini = 'http://www.premiumwd.com/wordpress-themes/business/ecommerce/mini/';
$merchant = 'http://www.premiumwd.com/wordpress-themes/ecommerce/merchant/';
$innovate = 'http://www.premiumwd.com/wordpress-themes/business/free/innovate/';
$ellion = 'http://www.premiumwd.com/wordpress-themes/portfolio/ellion';
$display = 'http://www.premiumwd.com/wordpress-themes/portfolio/display/';
$adomo = 'http://www.premiumwd.com/wordpress-themes/blog/free/adomo/';
?>

<div id="container" class="container">
  <section class="fluid-container littlepaddingbottom littlepaddingtop">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </section>
</div>

<ul class="terms text-center littlepaddingtop littlepaddingbottom">
	<li><a href="javascript:void(0)" title="" data-filter="*" class="active">All</a></li>
        <?php
    $terms = get_terms("showcase_category");
    $count = count($terms);
	  if ($count > 0) {
       foreach ($terms as $term) {
            $termname = strtolower($term->name);
            $termname = str_replace(' ', '-', $termname);
            echo '<li><a href="javascript:void(0)" title="" data-filter=".' . $termname . '">' . $term->name . '</a></li>';
        }
    }
?>
</ul>

<div class="portfolio-wrap littlepaddingbottom fluid-container row">
      <div id="portfolio" class="portfolio-items isotope">
        <?php
		query_posts(array(
	    	'post_type' => 'showcase',
		'paged'=> get_query_var('paged')
		));
		$count = 0;
	?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
        $terms = get_the_terms($post->ID, 'showcase_category');
        if ($terms && !is_wp_error($terms)):
            $links = array();
            foreach ($terms as $term) {
                $links[] = $term->name;
            }
            $links = str_replace(' ', '-', $links);
            $tax   = join(" ", $links);
        else:
            $tax = '';
        endif;
?>
		<div class="element <?php echo strtolower($tax);?> all  isotope-item">
		       <figure>
		         <?php $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'showcase'); ?>
		         <img src="<?php echo $img[0] ?>" alt="<?php echo get_the_title();?>" />
			         <div class="entry-header">
					<h2 class="entry-title"><?php echo get_the_title(); ?></h2>
					<div class="entry-meta">
						<span class="category-list">
						<?php if(get_post_meta(get_the_ID(), 'Theme', true) == 'Stack'){ ?>
						<a href="<?php echo $stack; ?>" target="_blank">View Theme</a>
						<?php } else if(get_post_meta(get_the_ID(), 'Theme', true) == 'Mini'){ ?>
						<a href="<?php echo $mini; ?>" target="_blank">View Theme</a>
						<?php } else if(get_post_meta(get_the_ID(), 'Theme', true) == 'Ellion'){ ?>
						<a href="<?php echo $ellion; ?>" target="_blank">View Theme</a>
						<?php } else if(get_post_meta(get_the_ID(), 'Theme', true) == 'Adomo'){ ?>
						<a href="<?php echo $adomo; ?>" target="_blank">View Theme</a>
						<?php } else if(get_post_meta(get_the_ID(), 'Theme', true) == 'Merchant'){ ?>
						<a href="<?php echo $merchant; ?>" target="_blank">View Theme</a>
						<?php } else if(get_post_meta(get_the_ID(), 'Theme', true) == 'Display'){ ?>
						<a href="<?php echo $display; ?>" target="_blank">View Theme</a>
						<?php } else { ?>
						<a href="<?php echo $innovate; ?>" target="_blank">View Theme</a>
						<?php } ?>
						</span>
						<span class="post-date">
						<a href="<?php echo get_post_meta(get_the_ID(), 'URL', true);?>" target="_blank">Visit Site</a>
						</span>
					</div>
				</div>
			</figure>
		</div>  
	        <?php endwhile; else:?>
	        <div class="error-not-found text-center">Nothing to showcase now</div>
	        <?php endif; ?>
	</div>
</div>     


<?php get_footer(); ?>