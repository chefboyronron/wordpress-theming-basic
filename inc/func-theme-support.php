<?php
/* 
	=============================================
	Enabeles the custom background of the theme. 
	Dashboard->Appearance->Background
	=============================================
*/
add_theme_support('custom-background');

/* 
	=============================================
	Enables the custom header of the theme
   	Dashboard->Appearance->Header
	=============================================
*/
add_theme_support('custom-header');

/* 
   =============================================
   Enables the Featured image of the sigle posts
   Dashboard->Posts->single post->at the side panel Featured Image
   =============================================
*/
add_theme_support('post-thumbnails');

/*
	=============================================
	Enables Post Format to a single post
    Dashboard->Posts->single post->at the side panel Format
    =============================================
*/
add_theme_support('post-formats', array('aside','image', 'video'));

/*
	=============================================
	Add Html5 support to search form
    =============================================
*/
add_theme_support('html5', array('search-form'));

?>