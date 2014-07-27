<?php
$main = upfront_create_region(
        array(
"name" => "main", 
"title" => "Main Area", 
"type" => "Main Area", 
"scope" => "local"
),
        array(
"row" => 140, 
"background_type" => "color", 
"background_color" => "#c5d0db"
)
        );

$main->add_element("Uposts", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "32", 
"margin_bottom" => "0", 
"id" => "module-1406255983426-1471-module-module", 
"rows" => 75, 
"options" => array(
	"type" => "UpostsModel", 
	"view_class" => "UpostsView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 uposts-object", 
	"id_slug" => "uposts", 
	"post_type" => "post", 
	"taxonomy" => "", 
	"term" => "", 
	"limit" => "2", 
	"content_type" => "excerpt", 
	"featured_image" => 1, 
	"pagination" => "numeric", 
	"prev" => "Next Page »", 
	"next" => "", 
	"post_data" => array("author", "date", "comments_count", "featured_image"), 
	"postLayout" => array(array(
			"classes" => "c24 clr", 
			"objects" => array(array(
					"slug" => "title", 
					"classes" => "post-part 24"
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
	"partOptions" => array(
		"featured_image" => array(
			"height" => 100
			)
		), 
	"element_id" => "uposts-object-1406255983424-1684", 
	"theme_style" => "", 
	"anchor" => ""
	)
));

$regions->add($main);
