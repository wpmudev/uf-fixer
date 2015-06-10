<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array(
"name" => "main", 
"title" => "Main Area", 
"type" => "wide", 
"scope" => "local", 
"container" => "main", 
"position" => 10, 
"allow_sidebar" => true
),
			array(
"row" => 115, 
"background_type" => "color", 
"background_color" => "#ufc0", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"row" => 394
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 536
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"row" => 301
		)
	), 
"use_padding" => 0, 
"sub_regions" => array(false)
)
			);

$main->add_element("ThisPost", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "default-page", 
"options" => array(
	"type" => "ThisPostModel", 
	"view_class" => "ThisPostView", 
	"class" => "c24 upfront-this_post", 
	"has_settings" => 1, 
	"id_slug" => "this_post", 
	"row" => 10, 
	"post_data" => array(), 
	"layout" => array(array(
			"classes" => "c24 clr", 
			"objects" => array(array(
					"slug" => "title", 
					"classes" => "post-part c24"
					))
			), array(
			"classes" => "c24 clr", 
			"objects" => array(array(
					"slug" => "contents", 
					"classes" => " post-part c24"
					))
			)), 
	"element_id" => "default-page-object", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1410783666947" => array(
			"theme_style" => "u-this_post-big-tablet"
			), 
		"tablet" => array(
			"theme_style" => "u-this_post-tablet"
			), 
		"mobile" => array(
			"theme_style" => "u-this_post-mobile"
			)
		)
	), 
"row" => 6, 
"sticky" => true, 
"disable_resize" => true, 
"disable_drag" => false, 
"wrapper_id" => "default-page-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12, 
		"order" => 0, 
		"clear" => true, 
		"edited" => true
		), 
	"mobile" => array(
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"col" => 18, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0, 
		"top" => 10
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

