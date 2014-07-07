<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
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
	<body>
		<div class="container">
			<div class="top-menu">
				<div class="logo">
					<div class="col-md-3 pull-left">
						<h1>SkinMD</h1>
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
								<li>
									<a href="#">About SkinMD</a>
								</li>
								<li>
									<a href="#">Physician Services</a>
								</li>
								<li>
									<a href="#">MedSpa Services</a>
								</li>
								<li>
									<a href="#">Shop SkinMD</a>
								</li>
								<li>
									<a href="#">Contact/Appointments</a>
								</li>
							</ul>

						</div><!--/.nav-collapse -->
				</div><!--/.navbar -->
			</div>
			<div id="body">
				<div class="slider">
				</div>
				<div class="testimonials">
				</div>
				<div class="col-md-8 contact-map" id="gmap">
				</div>
				<div class="col-md-4 news">
				</div>
			</div>
			<div class="footer">
			</div>

		</div>
	</body>
</html>