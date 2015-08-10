<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: SAO Page
 *
 * @package koreanderson
 */

get_header(); ?>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/sao.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/sao.css"/>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="row">

			<div class="columns small-12 medium-8 medium-offset-2 large-8 large-offset-2">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<div id="sao_ui">
		<div class="wrapper">
			<!--<a id="trigger" href="#">Open</a>-->
			<p>Swipe Down//Up</p>
			<ul id="menu">
				<li class="item">
					<a href="#">
						<i class="fa fa-user"></i>
					</a>
				</li>
				<li class="item">
					<a href="#">
						<i class="fa fa-users"></i>
					</a>
				</li>
				<li class="item">
					<a href="#">
					<i class="fa fa-comments"></i>
					</a>
				</li>
				<li class="item">
					<a href="#">
					<i class="fa fa-cog"></i>
					</a>
				</li>
			</ul>

		</div><!--/wrapper-->
	</div><!--/sao_ui-->

			<?php endwhile; // End of the loop. ?>
			</div><!--/columns-->
		</div><!--/row-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
