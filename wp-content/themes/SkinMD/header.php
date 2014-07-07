<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="images/favicon.ico">
		
		<link type = 'text/css' rel = 'stylesheet' href = '<?php bloginfo('stylesheet_url');?>' />
		<link type = 'text/css' rel = 'stylesheet' href = 'style.css' />
		<link type = 'text/css' rel = 'stylesheet' href = 'css/bootstrap.css' />
		
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
		
		<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/maplace.min.js"></script>
		
		<title><?php wp_title();?></title>
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
			<div class="top-menu">
				<div class="topbar">
					<div class="col-md-3 pull-left">
						  <!-------custom logo and custom test and defualt logo text-------->
						  <a href="<?php echo esc_url(home_url('/')) ; ?>" class="brand">
								<img id="logo_image" src="<?php bloginfo('template_url'); ?>/images/logo.jpg"  />
						  </a>
						  <!------ end of logo -------->
					</div>
					<div class="pull-right">
						<h2>206-000-0000</h2>
					</div>
				</div>
				
				<!-- navbar -->
				<div class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="navbar-collapse collapse" id="nav-bar">
							<ul class="nav navbar-nav">
								<?php wp_list_pages('title_li='); ?>
							</ul>

						</div><!--/.nav-collapse -->
				</div><!--/.navbar -->
			</div>