<?php
/**
 * Template Name: Content Work 3
 *
 * @author Your Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

<script type="text/javascript">
 
jQuery(document).ready(function(){
 
    // $('.firstlink').click(function(){
    // $(".toggle1").collapse('toggle');   	
    // $(".toggle1").toggle();    	
    // $(".toggle2").hide();
    // });
 
    // $('.secondlink').click(function(){
    // $(".toggle2").toggle();
    // $(".toggle1").hide();
    // });


});
 
</script>


	<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="works-header"><h1>Selected Works</h1></div>
				</div>
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



<!-- BOTTOM CONTENT -->

 -->	</div><!-- .container -->
<?php get_footer(); ?>
