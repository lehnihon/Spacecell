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
				<div class="col-md-12">
					<?php putRevSlider( "banner-index" ) ?>	
				</div>			
			</div>
			<div class="row category">
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

	<section id="produtos">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="small underline text-left">Celulares e Smartphones</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'celulares-smartphones', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
			</div>	
			<div class="row category">
				<div class="col-md-12">
					categoria 4
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h2 class="underline text-left">Celulares mais baratos</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'celulares-smartphones', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
			</div>	
			<div class="row category">
				<div class="col-md-4">
					categoria 5
				</div>
				<div class="col-md-4">
					categoria 6
				</div>
				<div class="col-md-4">
					categoria 7
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h2 class="underline text-left">Eletrônicos</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'celulares-smartphones', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
			</div>	
			<div class="row category">
				<div class="col-md-6">
					categoria 8
				</div>
				<div class="col-md-6">
					categoria 9
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h2 class="underline text-left">Produtos Mallory</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'product_cat' => 'celulares-smartphones', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
			</div>	

		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter' ); ?>

</div>

<?php get_footer(); ?>
