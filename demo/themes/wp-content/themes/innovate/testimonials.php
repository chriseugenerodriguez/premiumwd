<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * Template Name: Testimonials
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
					<?php } else { ?>
					<div id="entry-title"><h1 class="entry-title"><?php the_title(); ?></h1></div>
					<?php } ?>

					<div id="entry-content">
					<div class="entry-content-3 clearfix">
						<?php wpb_lists_testimonials(); ?>

					</div><!-- .entry-content -->
                    </div>
        <?php endwhile; // end of the loop. 
          }
        ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>