<?php 
/*
Template Name: Settings
*/

get_header(); ?>
<div class="title"><h2><span><?php echo the_title(); ?></span><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></h2></div>
<div id="container" class="woocommerce-account">

<!-- #primary -->
<div id="primary" class="container">
<!-- #content -->
  <section id="content" role="main" class="clearfix">
  
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      
      <div class="entry-content">
<div class="woocommerce">
<div class="user-account">
<div class="picture"><?php global $user_ID; echo get_avatar($user_ID);  ?>
<ul>
<li class="name"><?php global $current_user; get_currentuserinfo(); echo $current_user->display_name ?></li>
<li class="downloads"><em class="fa fa-shopping-cart"></em> &nbsp;<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo $woocommerce->cart->get_cart_total(); ?></a></li>
</ul>
</div>
<ul class="account">
<li><a href="/my-account/downloads/"><em class="fa fa-cloud-download"></em> Downloads</a></li>
<li><a href="/my-account/orders/"><em class="fa fa-list-alt"></em> Orders</a></li>
<li><a href="/my-account/licenses/"><em class="fa fa-link"></em> Licenses</a></li>
<li><a href="/my-account/rewards/"><em class="fa fa-heart"></em> Rewards</a></li>
<li class="active"><a href="/my-account/edit-address/billing/"><em class="fa fa-cog"></em> Settings</a></li>
<li><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout"><em class="fa fa-sign-out"></em> Logout</a></li>
</ul>
</div>
<style type="text/css">
.error, .success{font-size:inherit;font-weight:normal;}
</style>
<script type="text/javascript">
jQuery(document).ready(function(e) {
    e('.error').addClass('woocommerce-error');
});
</script>
<div class="my-account">
<div id="tabs" class="ui-tabs settings-tabs">
  <ul class="ui-tabs-nav">
    <li><a href="/my-account/edit-address/billing/" class="ui-tabs-anchor">My Address</a></li>
    <li <?php echo (is_page(2848))?'class=ui-tabs-active':''; ?>><a href="/my-account/settings/change-password/" class="ui-tabs-anchor">Change Password</a></li>
    <li <?php echo (is_page(2850))?'class=ui-tabs-active':''; ?>><a href="/my-account/settings/profile-info/" class="ui-tabs-anchor">Profile Info</a></li>
  </ul>

  			
        <?php the_content(); ?>
        </div>
      </div>
</div>
</div></div>
    </article>
    
    <?php endwhile; // end of the loop. ?>
  </section>
  <!-- #content -->
<div class="clr"></div>
</div>

<!-- #primary -->
<?php get_footer(); ?>