<?php
/**
 * Template Name: Jer 3column-child
 * The template used for displaying page content in page.php
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
<!-- 				<header class="entry-header page-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
 -->				<!-- .entry-header -->
				<div class="entry-content">
					<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
					<?php
						wp_link_pages(array(
							'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
							'after'  => '</div>',
						));
					?>
				</div><!-- .entry-content -->
	
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
		<div class="bottom-stuff">			
			<div class="col-md-4">
				<p>Your Mom!</p>
			</div>
			<div class="col-md-4">
				<p>Your Mom 2!</p>
			</div>
			<div class="col-md-4">
				<p>Your Mom 3!</p>
			</div>
		</div>
	</div><!-- .container -->
<?php get_footer(); ?>
