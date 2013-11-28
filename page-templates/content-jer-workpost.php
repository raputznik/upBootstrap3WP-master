<?php
/**
 * Template Name: Jer Workpost
 *
 * @author Your Thom | http://upplex.de
 * @package upBootWP 0.1
 */
get_header(); ?>

	<?php the_post_thumbnail('full'); ?>

<div class="home-wrap">	

	
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php echo get_the_title($post = 46); ?> </h1>
			
		

			<?php
				$new_query_1 = new WP_Query();
				$new_query_1->query(array('page_id' => 46));
				while ($new_query_1->have_posts()) :
				$new_query_1->the_post();
				the_content();
				endwhile;
				wp_reset_query();
			?>

		</article>
		
		<?php endwhile; endif; ?>	

		<div class="bottom-stuff">	
					<div class="recent"></div>
		</div>
	</div><!-- .container -->
<?php get_footer(); ?>
