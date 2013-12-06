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

					
					<div class="recent"> <!-- WORK SECTION DIVIDER -->
							<a href="#selected">
								<div id="selected"><h2>Selected Works</h2></div>
							</a>			
					</div>						

 		<div class="row toprow">
			<div class="col-md-12" id="myAccordion">
					<div class="death firstlink">
							 <a href="#collapseOne" data-parent="#myAccordion" data-toggle="collapse" class="accordion-toggle"><?php echo get_the_post_thumbnail('97', array('class' => 'featured1'));?> 

							<?php $page_id = 97; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>
					</div>	<!-- .end death -->	
					<div class="toggle1 collapse" id="collapseOne">
						
						<?php $new_query_1 = new WP_Query();// Get title 
							$new_query_1->query(array('page_id' => 97)); 
							while ($new_query_1->have_posts()) :
							$new_query_1->the_post(); 
							the_content(); 
							
							endwhile; 
							wp_reset_query(); 
							?> 				
					</div>
			
			</div><!-- .col-md-12 -->
		</div><!-- .row -->

 
 		<div class="row second-row">
			<div class="col-md-12" id="myAccordion2">
						<div class="death">
							 <a href="#collapseTwo" data-parent="#myAccordion2" data-toggle="collapse" class="accordion-toggle secondlink"><?php echo get_the_post_thumbnail('106', array('class' => 'featured1'));?> 
						<?php $page_id = 106; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>
					
					</div>	<!-- .end death -->	
					<div class="toggle1 collapse" id="collapseTwo">
						
						<?php $new_query_1 = new WP_Query();// Get title 
							$new_query_1->query(array('page_id' => 106)); 
							while ($new_query_1->have_posts()) :
							$new_query_1->the_post(); 
							the_content(); 
							
							endwhile; 
							wp_reset_query(); 
							?> 				
					</div>
			

			</div><!-- .col-md-12 -->
		</div><!-- .row -->
 		<div class="row third-row">
					<div class="col-md-12" id="myAccordion3">
						<div class="death">
							 <a href="#collapseThree" data-parent="#myAccordion3" data-toggle="collapse" class="accordion-toggle secondlink"><?php echo get_the_post_thumbnail('110', array('class' => 'featured1'));?> 
						<?php $page_id = 110; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>
					
					</div>	<!-- .end death -->			
					<div class="toggle1 collapse" id="collapseThree">
						
						<?php $new_query_1 = new WP_Query();// Get title 
							$new_query_1->query(array('page_id' => 110)); 
							while ($new_query_1->have_posts()) :
							$new_query_1->the_post(); 
							the_content(); 
							
							endwhile; 
							wp_reset_query(); 
							?> 				
					</div>

			</div><!-- .col-md-12 -->

		</div><!-- .row -->
			<div class="row">
				<div class="col-md-12">
					<div class="recent contact-header">
						<h1>Contact</h1>
					
							<?php 
								// $args = array( 'page_id' => '1' );
								$loop = new WP_Query( 'page_id=11' );
								while ( $loop->have_posts() ) : $loop->the_post();
									global $more;
									$more = 0;
									the_title('<h2>','</h2>');
									the_content( __( '<br/>Read more...' ) );
								endwhile;
							?>	
					</div>									
				</div>
			</div> 
	</div><!-- .container -->
<?php get_footer(); ?>
