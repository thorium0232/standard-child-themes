<?php

function dartwood_enqueue_styles() {
	
	// Google fonts for Android Sans
	wp_register_style( 'dartwood-fonts', 'http://roboto-webfont.googlecode.com/svn/trunk/roboto.all.css' );
	wp_enqueue_style( 'dartwood-fonts' );
	
} // end hudson_enqueue_styles
add_action( 'wp_enqueue_scripts', 'dartwood_enqueue_styles' );
	
?>