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
 * Template Name: Homepage
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-banner">
				<h1>Site title</h1>	
			</div>
			<div class="container">
				<div class="row">
					<div class="project">
						<div class="project-thumb">
							<img src="<?php the_field('project_img1'); ?>"/>
						</div>
						<div class="panel">
							<h2>Title</h2>
						</div>
					</div>
					<div class="project">
						<div class="project-thumb">
							<img src="<?php the_field('project_img2'); ?>"/>
						</div>
						<div class="panel">
							<h2>Title</h2>
						</div>
					</div>
					<div class="project">
						<div class="project-thumb">
							<img src="<?php the_field('project_img3'); ?>"/>
						</div>
						<div class="panel">
							<h2>Title</h2>
						</div>
					</div>
				</div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
