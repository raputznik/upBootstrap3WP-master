<?php
/**
 * Template Name: Jer Portfolio
 *
 * @author Your Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-wrapper">	
<!-- 						<a href="">
							<div class="circle2">
							<img src="http://palebluedot.ca/dev/portfolio/wp-content/themes/upBootstrap3WP-master/img/cir_suz_lg.png" alt="">
						</div>
						</a>
 -->
					<div class="entry-content">
							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								  the_post_thumbnail();
								} 
							?>

							<?php the_content(); ?>
							<?php endwhile; // end of the loop. ?>
							<?php
								wp_link_pages(array(
									'before' => '<div class="page-links">'.__('Pages:', 'upbootwp'),
									'after'  => '</div>',
								));
							?>
						</div><!-- .entry-content -->
					</div>	
				<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
		<div class="bottom-stuff">	
					<div class="recent"></div>
		</div>
	</div><!-- .container -->
<?php get_footer(); ?>
