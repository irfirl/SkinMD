<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
			<div id="content">
				<div class="contact-map" id="gmap_contact_page"></div>
				<div id = "contact-lower">
					<div id = "contact_info">
						<span class="glyphicon glyphicon-map-marker"></span> 6850 35th Ave NE, Seattle, WA<br>
						<span class="glyphicon glyphicon-earphone"></span> 206-000-0000<br>
						<span class="glyphicon glyphicon-print"></span> 206-000-0000<br>
					</div>
					<div id = "contact_form">
						<form action="">
							<label>Name</label>
							<input type="text" class="form-control" name="name" required>
							<label>Email</label>
							<input type="text" class="form-control" name="email" required>
							<label>Area of Concern/Treatments</label>
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" type="button" id="input_areaOfConcern" data-toggle="dropdown">
									Please Choose an Area of Concern or Treatment
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="input_areaOfConcern">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
								</ul>
							</div>
							<label>Preferred Date</label>
							<input type="date" class="form-control" name="date" id="input_date">
							<label>Message</label>
							<textarea class="form-control" rows="5" name="message"></textarea>
							<br />
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>

				</div>
			</div>
			<?php get_footer(); ?>
		</div>
	</body>
</html>

