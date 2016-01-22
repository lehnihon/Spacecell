<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					categoria 1
				</div>
				<div class="col-md-4">
					categoria 2
				</div>
				<div class="col-md-4">
					categoria 3
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter' ); ?>

</div>

<?php get_footer(); ?>
