<?php /* Template Name: Sitemap */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<!-- Single Page Container-->

<div id="container">
<div id="content" role="main">

		<div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1><?php the_breadcrumb(); ?> </div>
</div>

<div id="entry-content">
<div class="entry-content clearfix">
<div id="page-column">
<div class="page-content">
<p><?php the_content(); ?></p>
</div>
<table width="320" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td>
    <h4>Pages</h4>
    <ul>
    <?php wp_list_pages('title_li='); ?>
    </ul>
    </td>
    <td>
    <h4>Categories</h4>
	<ul>
	<?php wp_list_categories('title_li='); ?>
	</ul>
	<br/>
	<h4>Archives</h4>
	<ul>
	<?php wp_get_archives('title_li='); ?>
	</ul>
	<br/>
	<h4>Feed</h4>
	<ul>
	<li><a href="<?php bloginfo('rss2_url'); ?>">RSS 2.0</a></li>
	</ul>
    </td>
</tr>
</table>

</div><!-- .entry-content -->
					
<?php endwhile; // end of the loop. ?>

<aside id="secondary"><div id="sidebar"><?php dynamic_sidebar( 'Sitemap Widget Area' ); ?></div></aside>


</div>
</div>

<?php get_footer(); ?>