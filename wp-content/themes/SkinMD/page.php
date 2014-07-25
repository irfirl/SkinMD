<?php get_header(); ?>
			
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			
			<!-- thumbnail -->
			<?php if ( has_post_thumbnail()) { ?>
			<div class="post_thumbnail">
				<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?> 
			</div>
			<?php } ?>
			
			<!-- content -->
			<div class="single_page" id="content">
				<h1><?php wp_title(''); ?></h1>
				<?php  the_content(); ?>
			</div>
			
			<?php get_footer(); ?>
			<?php endwhile; endif; ?>
		</div>
	</body>
</html>