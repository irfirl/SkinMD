<?php get_header(); ?>
			<div id="content">
				<div class="slider">
				</div>
				<div class="testimonials">
				</div>
				<div class="col-md-8 contact-map" id="gmap">
				</div>
				<div class="col-md-4 news">
					<h2>News and Events</h2>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li><?php the_title(); ?></li>
					<hr> <?php endwhile; else: ?>
					<p><?php _e('There are no news yet!'); ?></p><?php endif; ?>
				</div>
			</div>
			
			<?php get_footer(); ?>
		</div>
	</body>
</html>

