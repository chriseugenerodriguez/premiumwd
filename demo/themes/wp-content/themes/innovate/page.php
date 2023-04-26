<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
					<?php } else { ?>
					<div id="entry-title"><div class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1><?php the_breadcrumb(); ?> </div>
</div>
					<?php } ?>

					<div id="entry-content">
					<section class="entry-content-3 clearfix">
						<?php the_content(); ?>

                        <?php comments_template( '', false ); ?>				
                        <?php endwhile; // end of the loop. ?>	

					</section><!-- .entry-content -->
                    </div>


			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
