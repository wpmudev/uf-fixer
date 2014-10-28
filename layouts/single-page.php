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
"row" => 140, 
"background_type" => "color", 
"background_color" => "#c5d0db"
)
			);

$main->add_element("ThisPage", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "default-page-title", 
"rows" => 3, 
"options" => array(
	"type" => "ThisPageModel", 
	"view_class" => "ThisPageView", 
	"class" => "c24 upfront-this_page", 
	"display" => "title", 
	"has_settings" => 0, 
	"id_slug" => "this_page", 
	"disable_resize" => false, 
	"disable_drag" => false, 
	"element_id" => "default-page-title-object"
	), 
"wrapper_id" => "default-page-title-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$main->add_element("ThisPage", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "default-page-content", 
"rows" => 20, 
"options" => array(
	"type" => "ThisPageModel", 
	"view_class" => "ThisPageView", 
	"class" => "c24 upfront-this_page", 
	"display" => "content", 
	"has_settings" => 0, 
	"id_slug" => "this_page", 
	"disable_resize" => false, 
	"disable_drag" => false, 
	"element_id" => "default-page-content-object"
	), 
"wrapper_id" => "default-page-content-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

