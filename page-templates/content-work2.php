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
 		<div class="row toprow">
			<div class="col-md-4">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<div class="death">
							 
							 <a href="#"><?php echo get_the_post_thumbnail('97', array('class' => 'featured1'));?> 

						<?php $page_id = 97; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>

					
					</div>	<!-- .end death -->				
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
		<!-- <div class="divider1"></div> -->
			<div class="col-md-4">
				<div class="content-wrapper">	
					<div class="entry-content work-1">
						<div class="death">
							 <a href="#"><?php echo get_the_post_thumbnail('106', array('class' => 'featured1'));?> 
						<?php $page_id = 106; $page_data = get_page( $page_id ); echo '<h1>'. $page_data->post_title .'</h1>';?></a>
					
					</div>	<!-- .end death -->				
				</div><!-- .entry-content -->
				</div>	<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
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
		

		<div class="bottom-stuff">	
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
	</div><!-- .container -->
<?php get_footer(); ?>
