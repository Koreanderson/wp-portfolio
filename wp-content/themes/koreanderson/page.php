<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package koreanderson
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="row">

			<div class="columns small-12 medium-8 medium-offset-2 large-8 large-offset-2">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			</div><!--/columns-->
		</div><!--/row-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
