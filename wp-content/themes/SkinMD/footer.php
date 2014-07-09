<div class="footer">
	<footer>
		<div id = "footerleft">
			<div id = "LocationPhone">
				Please contact us with any questions<br>
				<span class="glyphicon glyphicon-map-marker"></span> 6850 35th Ave NE, Seattle, WA<br>
				<span class="glyphicon glyphicon-earphone"></span> 206-000-0000<br>
			</div>
			<div id = "Copyright">
				Copyright SkinMD
			</div>
		</div>
		<div id = "footerright">
			<div id = "logo">
				<a href="javascript: void(window.open('http://www.facebook.com/share.php?u='.concat(encodeURIComponent(location.href)) ));">
					<img title="Share in Facebook" src="<?php bloginfo('template_url'); ?>/images/facebooklogo.jpg" class = "ShareLogo" />
				</a>
				<a href="javascript: void(window.open('http://www.linkedin.com/shareArticle?mini=true&url='.concat(encodeURIComponent(location.href)) ));">
					<img title="Share in LinkedIn" src="<?php bloginfo('template_url'); ?>/images/linkedinlogo.jpg" class = "ShareLogo" />
				</a>
				<a href="javascript: void(window.open('http://twitter.com/home/?status='.concat(encodeURIComponent(document.title)) .concat(' ') .concat(encodeURIComponent(location.href))));">
					<img title="Share in Twitter" src="<?php bloginfo('template_url'); ?>/images/twitterlogo.jpg" class = "ShareLogo" />
				</a>
				<a href="javascript: void(window.open('https://plus.google.com/share?url='.concat(encodeURIComponent(location.href)), '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600'));">
					<img title="Share in Google" src="<?php bloginfo('template_url'); ?>/images/googlelogo.jpg" class = "ShareLogo" />
				</a>
			</div>
			<div id = "FollowUs">
				Follow Us!
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>