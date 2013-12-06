<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author Jeremy Dahl | palebluedot.ca
 * @package upBootWP 0.1
 */
?>

	</div><!-- #content -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<footer id="colophon" class="site-footer" role="contentinfo">
					<div class="site-info">
						<?php do_action( 'upbootwp_credits' ); ?>
						&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
						<span class="sep"> | </span>
						<?php printf(__('Designed by: %1$s by %2$s.', 'upbootwp' ), 'Jeremy Dahl', '<a href="http://palebluedot.ca" rel="designer">palebluedot</a>'); ?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>