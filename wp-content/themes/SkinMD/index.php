<?php get_header(); ?>
			<div id="content">
				<div class="slider">
				
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
						<div class="item active">
						  <img src="<?php bloginfo('template_url'); ?>/images/carouseltest.jpg" alt="...">
						  <div class="carousel-caption">
						  </div>
						</div>
						<div class="item">
						  <img src="<?php bloginfo('template_url'); ?>/images/carouseltest2.jpg" alt="...">
						  <div class="carousel-caption">
							...
						  </div>
						</div>
						...
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
				
				</div>
				<div class="testimonials">
					<img id="testimonial_quotes" src="<?php bloginfo('template_url'); ?>/images/quote.png" alt="quotes">
					<p>
					SkinMD’s team of cosmetic physicians and aestheticians is committed to working with you to develop an integrated plan to improve and enhance your skin’s health and reduce signs of aging. Dr. Balogun is a featured contributor for Botox, dermal fillers, ActiveFX and TotalFX laser resurfacing treatments, and other medical aesthetic topics on RealSelf.com.
					</p>
				</div>
				<div class="col-md-8 front-map">
					<h2>Find Us!</h2>
					<hr>
					<div class="contact-map" id="gmap"></div>
				</div>
				<div class="col-md-4 news">
					<h2>News and Events</h2>
					<hr>
					<?php query_posts( 'posts_per_page=5' ); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<li> <a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a> </li>
					<hr> <?php endwhile; else: ?>
					<p><?php _e('There are no news yet!'); ?></p><?php endif; ?>
				</div>
			</div>
			
			<?php get_footer(); ?>
		</div>
	</body>
</html>

