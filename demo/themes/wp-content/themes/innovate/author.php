<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php
	/* Queue the first post, that way we know who
	 * the author is when we try to get their name,
	 * URL, description, avatar, etc.
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>


			<div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php printf( __( 'Author Archives: %s', 'innovate' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?></h1><?php the_breadcrumb(); ?> </div>
</div>
<div id="entry-content">
<div class="entry-content clearfix">

<?php
// If a user has filled out their description, show a bio on their entries.
if ( get_the_author_meta( 'description' ) ) : ?>
					<div id="entry-author-info" style="margin-top:10px !important;margin-left:0px !important;border-top:0 !important;padding-top:0 !important;padding-bottom:20px !important;">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'innovate_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description" style="margin-left:85px !important;">
							<h2><?php printf( __( 'About %s', 'innovate' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
						</div><!-- #author-description	-->
					</div><!-- #entry-author-info -->
                    
<?php endif; ?>
<div id="main-column">
<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the author archive page to output the authors posts
	 * If you want to overload this in a child theme then include a file
	 * called loop-author.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'author' );
?>
</div>
<aside id="third" ><div id="sidebar"><?php dynamic_sidebar( 'Page Widget Area' ); ?></div>	</aside>
</div>
			</div><!-- #content -->
		</div><!-- #container -->
</div>
<?php get_footer(); ?>
