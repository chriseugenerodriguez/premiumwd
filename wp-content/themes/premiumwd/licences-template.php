<?php /* Template Name: licences */ ?>


<?php get_header(); ?>
 
<?php if ( is_user_logged_in() ) { ?>


<div class="title"><h2><span><?php echo the_title(); ?></span><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></h2></div>
<div id="container" class="woocommerce-account">

<!-- #primary -->
<div id="primary" class="container">
<!-- #content -->
  <section id="content" role="main" class="clearfix">
  
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <div class="entry-content">
<div class="user-account">
<div class="picture"><?php global $user_ID; echo get_avatar($user_ID);  ?>
<ul>
<li class="name"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php global $user_ID; echo $current_user->display_name ?></a></li>
<li class="downloads"><em class="fa fa-shopping-cart"></em> &nbsp;<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo $woocommerce->cart->get_cart_total(); ?></a></li>
</ul>

</div>
<ul class="account">
<li><a href="/my-account/downloads/"><em class="fa fa-cloud-download"></em> Downloads</a></li>
<li><a href="/my-account/orders/"><em class="fa fa-list-alt"></em> Orders</a></li>
<li class="active"><a href="/my-account/licenses/"><em class="fa fa-link"></em> Licenses</a></li>
<li><a href="/my-account/rewards/"><em class="fa fa-heart"></em> Rewards</a></li>
<li><a href="/my-account/edit-address/billing/"><em class="fa fa-cog"></em> Settings</a></li>
<li><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout"><em class="fa fa-sign-out"></em> Logout</a></li>
</ul>
</div>
        <?php include('woocommerce/myaccount/my-licences.php'); ?>
      </div>

    </article>
    
    <?php endwhile; // end of the loop. ?>
  </section>
  <!-- #content -->
</div>
</div>
<?php } else { wp_redirect(get_bloginfo('url').'/login'); } ?>  
<?php get_footer(); ?>