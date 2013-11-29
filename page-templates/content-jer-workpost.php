<?php
/**
 * Template Name: Jer Workpost
 *
 * @author Your Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-wrapper">	
					<div class="entry-content">

						<?php the_post_thumbnail('full'); ?>
		
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							
							<h1><?php echo get_the_title($post = 59); ?> </h1>
							
							<p><?php echo get_the_content($post = 59); ?> </p>


						</article>
						
						<?php endwhile; endif; ?>	
						</div><!-- .entry-content -->
					</div>	
				<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
		<div class="row">
			<div class="col-md-12">
				<div class="content-wrapper">	
					<div class="entry-content">

			<?php 
				
					$args = array(
						'post_type' => 'post',
						'orderby' => 'date', 'posts_per_page' => '5'
					);
					$query = new WP_Query( $args );
				
					while($query->have_posts()): $query->the_post();
						// echo the_title();
						echo the_content();
					
					endwhile;
				
				 ?>
						</article>
						
						
						</div><!-- .entry-content -->
					</div>	
				<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->


		<div class="bottom-stuff">	
					<div class="recent">
							<a href=""><h2>Recent Work</h2></a>		
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
