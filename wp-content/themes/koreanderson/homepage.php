<?php
/**
 * The template for displaying the homepage.
 *
 * @package koreanderson
 * Template Name: Homepage
 */

get_header(); ?>
<!--<?php
/*
    A loop field named "gallery" with sub-fields "slide_title" and "upload"
    Loop fields return an associative array containing *ALL* sub-fields and their values
    NOTE: Values of sub-loop fields are returned when using get() on the parent loop!
*/
$fields = CFS()->get('gallery');
foreach ($fields as $field) {
    echo $field['slide_title'];
    echo $field['upload'];
}
?>-->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--<div class="hero-banner">
				<h1>Site Title</h1>	
			</div>-->
			<div class="row projects">
				<div class="columns small-12 medium-6 large-4">
					<a href="/the-pudcast">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/08/pudcast_thumb.jpg"/>
					</a>
				</div>
				<div class="columns small-12 medium-6 large-4">
					<a href="/smash-practice">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/08/sp_thumb.jpg"/>
					</a>
				</div>
				<div class="columns small-12 medium-6 large-4">
					<a href="/gupi">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/08/gupi_thumb.jpg"/>
					</a>
				</div>
				<div class="columns small-12 medium-6 large-4">
					<a href="/sword-art-online-menu">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/08/sao_ui_thumb.jpg"/>
					</a>
				</div>
				<div class="columns small-12 medium-6 large-4">
					<a href="/2-and-a-half-koreans">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/08/koreans_thumb.jpg"/>
					</a>
				</div>
				<div class="columns small-12 medium-6 large-4">
					<a href="/prints">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2015/08/prints_thumb.jpg"/>
					</a>
				</div>
			</div><!--/row-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
