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
				<div class="content-wrapper">	
					<div class="entry-content yourmom">
							<?php the_title('<h1>','</h1>');?>
							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								  the_post_thumbnail();
								} 
							?>

							<?php the_content();?>
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

	<div class="recent"> <!-- ABOUT SECTION DIVIDER -->
			<a href="#about-anchor">
				<div id="about-anchor">
					<h2>About</h2>
				</div>
			</a>						
	</div>						
			<div class="row">
				<div class="col-md-8 about-2">
					<? $the_query = new WP_Query( 'page_id=9' );
						while ( $the_query->have_posts() ) :
						$the_query->the_post();
						the_content();
						endwhile;
						wp_reset_postdata();
					?>
				
				</div><!-- .col-md-8 -->

				<div class="col-md-4 about-1">
					<?php echo get_the_post_thumbnail('9', 'large', array('class' => 'featured3'));?> 
				
				</div><!-- .col-md-6 -->
			
			
			</div><!-- .row -->

					
	</div><!-- .container -->
<?php get_footer(); ?>
