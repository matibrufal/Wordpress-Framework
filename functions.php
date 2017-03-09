<?php 
 
/* ------ Setup ------ */

	// Support post thumbnails
	add_theme_support( 'post-thumbnails', array('post'));
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	// Register nav menus
	register_nav_menus( array(
		'top'    => __( 'Top', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
	) );




?>