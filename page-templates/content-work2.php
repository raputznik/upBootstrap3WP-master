<?php
/**
 * Template Name: Content Work 2
 *
 * @author Your Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

	<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="works-header"><h1>Selected Works</h1></div>
				</div>
			</div>
 		<div class="row toprow" id="myAccordion">
			<div class="col-md-4">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<div class="death">
							 <a href="#collapseOne" data-parent="#myAccordion" data-toggle="collapse" class="accordion-toggle"><?php echo get_the_post_thumbnail('97', array('class' => 'featured1'));
							 ?> 

							<?php $page_id = 97; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>

					</div>	<!-- .end death -->				
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->


		<!-- THIS IS THE FIRST COLLAPSE ITEM -->
			<div class="col-md-8">
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
			</div>	

			<!-- END 1st COLLAPSE ITEM -->
	

			<div class="col-md-4" id="myAccordion2">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<div class="death">
							 <a href="#collapseTwo" data-parent="#myAccordion" data-toggle="collapse" class="accordion-toggle"><?php echo get_the_post_thumbnail('106', array('class' => 'featured1'));?> 
						<?php $page_id = 106; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>
					
					</div>	<!-- .end death -->				
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->

		<!-- THIS IS THE SECOND COLLAPSE ITEM -->

			<div class="col-md-12">
				<div class="toggle2 collapse" id="collapseTwo">
					
					<?php $new_query_1 = new WP_Query();// Get title 
						$new_query_1->query(array('page_id' => 106)); 
						while ($new_query_1->have_posts()) :
						$new_query_1->the_post();  
						the_content(); 
						
						endwhile; 
						wp_reset_query(); 
						?> 				
				</div>
			</div>	
			
			<!-- END 2nd COLLAPSE ITEM -->

					<div class="col-md-4">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<div class="death">
							 <a href="#"><?php echo get_the_post_thumbnail('110', array('class' => 'featured1'));?> 
						<?php $page_id = 110; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>
					
					</div>	<!-- .end death -->				
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->

		</div><!-- .row -->

 		<div class="row toprow-3">
		</div><!-- .row -->

<!-- BOTTOM CONTENT -->
		<div class="row row1">
			<div class="col-md-12">			
				<div class="content-wrapper">	
					<div class="entry-content">
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->

<!-- 		<div class="bottom-stuff">	
					<div class="recent">
							<a href=""><h2>New Coordinates</h2></a>		
							<div id="divider"></div>	
					</div>						

			<div class="col-md-4">
				<div class="section">								
					<div class="circle1">
						<a href=""><img src="http://palebluedot.ca/dev/portfolio/wp-content/themes/upBootstrap3WP-master/img/img_pue_sm.png" alt=""></a>

					</div>
					<h3>Puerto<br>Vallarta</h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="section">	

					<div class="circle1">
						<a href=""><img src="http://palebluedot.ca/dev/portfolio/wp-content/themes/upBootstrap3WP-master/img/img_sher_sm.png" alt=""></a>
					</div>
					<h3>Sherlock<br>Holmes</h3>
				</div>
			</div>
				<div class="col-md-4">
					<div class="section">				
						<div class="circle1">
							<a href=""><img src="http://palebluedot.ca/dev/portfolio/wp-content/themes/upBootstrap3WP-master/img/img_aud_sm.png" alt=""></a>
						</div>

					<h3>Audio-<br>Technica</h3>
				</div>
			</div>
		</div>
 -->	</div><!-- .container -->
<?php get_footer(); ?>
