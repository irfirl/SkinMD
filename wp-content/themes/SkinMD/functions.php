<?php
	add_theme_support( 'post-thumbnails' ); 
	register_sidebar( array(
		'name' => __('Main Sidebar', 'SkinMD'),
		'id' => 'sidebar-1',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	
	));
?>