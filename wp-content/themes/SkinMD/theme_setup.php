<?php
function theme_data_setup()
{
	return $theme_options=array(
			//Logo and Fevicon header			
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'150',
			
			//Home image section 	
			'home_banner_enabled'=>'on',
			'home_custom_image' => $slide_image_uri,								
			'home_image_title' => __('Theme Feature Goes Here!','rambo'),
			'home_image_description' => __('Rambo makes content easy to view on any device with any resolution. You may check this with resizing. Fully Responsive Theme Amazing Design.','rambo'),
			
			// footer customization
			'copy_rights_text'=>__('&copy;2014&nbsp;ALL Rights Reserved','SkinMD'),		
				
			
			//Social media links
			'footer_social_media_enabled'=>'on',
			'social_media_twitter_link' =>"https://twitter.com/",
			'social_media_facebook_link' =>"https://www.facebook.com",
			'social_media_linkedin_link' =>"http://linkedin.com/",
			'social_media_google_plus' =>"https://plus.google.com/",
					
		);
}
?>