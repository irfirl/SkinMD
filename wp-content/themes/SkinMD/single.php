<?php get_header(); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="single_page" id="content">
				<!-- sidebar -->
				<div class="sidebar">
				<?php if (!dynamic_sidebar('sidebar-1')) :?>
				<?php endif; ?>
				</div>
			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				</div>
			</div>
			
			<?php get_footer(); ?>
			<?php endwhile; endif; ?>
		</div>
	</body>
</html>