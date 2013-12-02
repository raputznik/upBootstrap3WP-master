<?php
/**
 * Template Name: Content Work
 *
 * @author Your Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

	<div class="container">
<!-- 			<div class="row">
				<div class="col-md-12">
					<div class="works-header"><h4>Selected Works</h4></div>
				</div>
			</div> -->
 		<div class="row toprow">
			<div class="col-md-4">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<div class="death">
						<?php $new_query_1 = new WP_Query();// Get title 
							$new_query_1->query(array('page_id' => 97)); 
							while ($new_query_1->have_posts()) :
							$new_query_1->the_post(); the_post_thumbnail('large', array('class' => 'featured1'));
							the_title('<h1>');
							
							endwhile; 
							wp_reset_query(); 
							?> 				
							<a href="<?php the_permalink(); ?>">permalink</a>
					
					</div>	<!-- .end death -->				
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
		<!-- <div class="divider1"></div> -->
			<div class="col-md-4">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<div class="death">
						<?php $new_query_1 = new WP_Query();// Get title 
							$new_query_1->query(array('page_id' => 106)); 
							while ($new_query_1->have_posts()) :
							$new_query_1->the_post(); the_post_thumbnail('large', array('class' => 'featured1'));
							the_title('<h1>');
							
							endwhile; 
							wp_reset_query(); 
							?> 	
							<a href="<?php the_permalink(); ?>">permalink</a>			
					
					</div>	<!-- .end death -->				
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
					<div class="col-md-4">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<?php $new_query_1 = new WP_Query();// Get title 
							$new_query_1->query(array('page_id' => 97)); 
							while ($new_query_1->have_posts()) :
							$new_query_1->the_post(); the_post_thumbnail('large', array('class' => 'featured1'));
							the_title('<h1>');
							
							endwhile; 
							wp_reset_query(); 
							?> 				
					
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->

		</div><!-- .row -->

		
<!-- bottom stuff -->

	</div><!-- .container -->
<?php get_footer(); ?>
