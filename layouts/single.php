<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$blog_individual = upfront_create_region(
			array(
"name" => "blog-individual", 
"title" => "Blog Individual", 
"type" => "wide", 
"scope" => "local", 
"container" => "blog-individual", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 235, 
"background_type" => "color", 
"background_color" => "rgba(255,255,255,1)", 
"nav_region" => "", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 24
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 24
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 24
		)
	), 
"use_padding" => 0, 
"sub_regions" => array(""), 
"expand_lock" => false
)
			);

$blog_individual->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1407490840563-1569-module", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">Blog</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407490840562-1778", 
	"class" => "c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 11
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "module-1407490840563-1569-module-wrapper", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12, 
		"order" => 0
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
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
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

$blog_individual->add_element("ThisPost", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "default-post-module-module-module-module-module-module-module-module", 
"options" => array(
	"type" => "ThisPostModel", 
	"view_class" => "ThisPostView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-this_post", 
	"has_settings" => 1, 
	"id_slug" => "this_post", 
	"row" => 10, 
	"post_data" => array("date"), 
	"disable_resize" => false, 
	"disable_drag" => false, 
	"layout" => array(array(
			"classes" => "c24 clr", 
			"objects" => array(array(
					"slug" => "title", 
					"classes" => "post-part c24"
					))
			), array(
			"classes" => "c24 clr", 
			"objects" => array(array(
					"slug" => "date", 
					"classes" => " post-part c24"
					))
			), array(
			"classes" => "c24 clr", 
			"objects" => array(array(
					"slug" => "contents", 
					"classes" => " post-part c24"
					))
			)), 
	"element_id" => "default-post-object", 
	"theme_style" => "_default", 
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
"sticky" => false, 
"wrapper_id" => "default-post-module-module-module-module-module-module-module-module-wrapper", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12, 
		"order" => 0
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
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
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

$blog_individual->add_element("Ucomment", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1430734423685-1574", 
"options" => array(
	"id_slug" => "ucomment", 
	"type" => "UcommentModel", 
	"view_class" => "UcommentView", 
	"class" => "c24 upfront-comment", 
	"has_settings" => 1, 
	"prepend_form" => false, 
	"element_id" => "ucomment-object-1430734423685-1984", 
	"row" => 68, 
	"anchor" => ""
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1430735458058-1283", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 18, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
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

$regions->add($blog_individual);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

