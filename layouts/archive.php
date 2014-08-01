<?php
include "header.php";
$region_1 = upfront_create_region(
        array(
"name" => "region_1", 
"title" => "Region 1", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 88, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(214,230,240,1)"
)
        );
$region_1->add_element("PlainTxt", array(
"columns" => "20", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1406494478244-1653-module", 
"rows" => 43, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">Archived</h2><h1 class=\"\" style=\"text-align: center;\">We Keep Things</h1><h1 class=\"\" style=\"text-align: center;\">Organized</h1><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406494478244-1271", 
	"class" => "c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 37, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	)
));

$region_1->add_element("Usearch", array(
"columns" => "18", 
"margin_left" => "5", 
"margin_top" => "11", 
"id" => "module-1406494948966-1861", 
"rows" => 19, 
"options" => array(
	"type" => "UsearchModel", 
	"view_class" => "UsearchView", 
	"class" => "c24 upfront-search", 
	"has_settings" => 1, 
	"id_slug" => "usearch", 
	"placeholder" => "Plumping", 
	"label" => "S", 
	"is_rounded" => 0, 
	"color" => "", 
	"element_id" => "usearch-object-1406494948965-1321", 
	"theme_style" => "usearch-archive-search", 
	"anchor" => "", 
	"row" => 13
	)
));

$regions->add($region_1);
$main = upfront_create_region(
        array(
"name" => "main", 
"title" => "Main Area", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 140, 
"background_type" => "color", 
"background_color" => "#fff"
)
        );
$main->add_element("Uposts", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "48", 
"margin_bottom" => "0", 
"id" => "default-posts-module-module-module", 
"rows" => 20, 
"options" => array(
	"type" => "UpostsModel", 
	"view_class" => "UpostsView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 uposts-object", 
	"id_slug" => "uposts", 
	"post_type" => "post", 
	"taxonomy" => "", 
	"term" => "", 
	"limit" => 10, 
	"content_type" => "excerpt", 
	"featured_image" => "1", 
	"pagination" => 0, 
	"prev" => "Next Page »", 
	"next" => "", 
	"post_data" => array("date"), 
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
	"element_id" => "default-posts-object"
	)
));

$regions->add($main);
include "footer.php";