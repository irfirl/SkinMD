<?php get_header(); ?>
			<?php get_sidebar();?>
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="single_page" id="content">
				<?php  the_content(); ?>
			</div>
			
			<?php get_footer(); ?>
			<?php endwhile; endif; ?>
		</div>
	</body>
</html>