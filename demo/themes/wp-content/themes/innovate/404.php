<?php /* Template Name: 404 */ ?>

<?php get_header(); ?>

		<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
            <div id="entry-title"><div class="entry-title"><h1 class="page-title"> <?php echo get_option('premiumwd_404_title'); ?></h1><?php the_breadcrumb(); ?> </div></div>
            
                <div id="entry-content">
				<div class="entry-content clearfix">
                <div id="main-single">
					<p><?php echo get_option('premiumwd_404'); ?></p>
					<form id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search">
                    <label class="screen-reader-text" for="s">Search for:</label>
                    <input id="s2" type="text" name="s" value="">
                    <input class="button small black" id="searchsubmit" type="submit" value="Search">
                    </form>
                    
                    <?php if ( get_option('premiumwd_404_image')) : ?>
                    <p><img src="<?php echo get_option('premiumwd_404_image'); ?>"  /></p>
                   <?php endif; ?>
				</div><!-- .entry-content -->
            </div>
                </div>
                
			</div><!-- #post-0 -->

		</div><!-- #content -->
		</div><!-- #container -->
	
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>