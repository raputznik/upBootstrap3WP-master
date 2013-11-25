<?php
/**
 * Template Name: Jer Gallery
 * The template used for displaying gallery content.php
 *
 * @author Jeremy Dahl| http://palebluedot.ca
 * @package upBootWP 0.1
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content-wrapper">	
					<a href="">
						<div class="circle2">
							<img src="http://palebluedot.ca/dev/portfolio/wp-content/themes/upBootstrap3WP-master/img/cir_suz_lg.png" alt="">
						</div>
					</a>

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
				</div>	
				<!-- End Content Wrapper -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
		<div class="bottom-stuff">			
			<div class="col-md-4">
				<div class="section">					
					<div class="circle1">
						<a href=""><img src="http://palebluedot.ca/dev/portfolio/wp-content/themes/upBootstrap3WP-master/img/img_pue_sm.png" alt=""></a>

					</div>
					<h3>Puerto<br>Vallarta</h3>
				</div>
			</div>
			<div class="col-md-4 col-2">
				<div class="section">				
					<div class="circle1">
						<a href=""><img src="http://palebluedot.ca/dev/portfolio/wp-content/themes/upBootstrap3WP-master/img/img_sher_sm.png" alt=""></a>
					</div>
					<h3>Sherlock<br>Holmes</h3>
				</div>
			</div>
				<div class="col-md-4 col-3">
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