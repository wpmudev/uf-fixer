<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$archive_region = upfront_create_region(
			array(
"name" => "archive_region", 
"title" => "Archive Region", 
"type" => "wide", 
"scope" => "local", 
"container" => "archive_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 88, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(214,230,240,1)"
)
			);

$archive_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412852070242-1167", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 style=\"text-align: center;\" class=\"\">Archived</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412852070240-1054", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 11, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412852119647-1756", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$archive_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412852120029-1051", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">We Keep Things Organized</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412852120028-1957", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 16
	), 
"wrapper_id" => "wrapper-1412852191894-1128", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$archive_region->add_element("Usearch", array(
"columns" => "15", 
"margin_left" => "5", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406494948966-1861-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 26, 
"options" => array(
	"type" => "UsearchModel", 
	"view_class" => "UsearchView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-search", 
	"has_settings" => 1, 
	"id_slug" => "usearch", 
	"placeholder" => "", 
	"label" => " ", 
	"is_rounded" => 0, 
	"color" => "", 
	"element_id" => "usearch-object-1406494948965-1321", 
	"theme_style" => "usearch-archive-style", 
	"anchor" => "", 
	"row" => 26
	), 
"wrapper_id" => "module-1406494948966-1861-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 20
		), 
	"mobile" => array(
		"col" => 20
		)
	)
));

$regions->add($archive_region);

$main = upfront_create_region(
			array(
"name" => "main", 
"title" => "Archive Content Region", 
"type" => "wide", 
"scope" => "local", 
"container" => "main", 
"position" => 10, 
"allow_sidebar" => true
),
			array(
"row" => 140, 
"background_type" => "color", 
"background_color" => "#fff"
)
			);

$main->add_element("Uposts", array(
"columns" => "17", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "default-posts-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 138, 
"options" => array(
	"type" => "UpostsModel", 
	"view_class" => "UpostsView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 uposts-object", 
	"id_slug" => "uposts", 
	"post_type" => "", 
	"taxonomy" => "", 
	"term" => "", 
	"limit" => "10", 
	"content_type" => "excerpt", 
	"featured_image" => "1", 
	"pagination" => "numeric", 
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
	"element_id" => "default-posts-object", 
	"row" => 132, 
	"theme_style" => "uposts-archive-style", 
	"anchor" => "", 
	"order" => "date", 
	"direction" => "DESC"
	), 
"wrapper_id" => "default-posts-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 17
		), 
	"mobile" => array(
		"col" => 17
		)
	)
));

$regions->add($main);

$main_right = upfront_create_region(
			array(
"name" => "main-right", 
"title" => "Archive Content Region Right", 
"type" => "wide", 
"scope" => "local", 
"container" => "main", 
"sub" => "right", 
"position" => 20, 
"allow_sidebar" => true
),
			array(
"col" => 5, 
"background_type" => "color", 
"background_color" => "rgba(236,233,228,1)"
)
			);

$main_right->add_element("Uwidget", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1407359610231-1708-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 37, 
"options" => array(
	"id_slug" => "uwidget", 
	"type" => "UwidgetModel", 
	"view_class" => "UwidgetView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-widget", 
	"has_settings" => 1, 
	"widget" => "WP_Widget_Archives", 
	"element_id" => "uwidget-object-1407359610230-1540", 
	"selected_widget" => "WP_Widget_Archives", 
	"theme_style" => "archive-right-sidebar", 
	"anchor" => "", 
	"widget_specific_fields" => array(
		"widget-archives--title" => array(
			"label" => "Title:", 
			"name" => "title", 
			"type" => "text", 
			"value" => ""
			), 
		"widget-archives--dropdown" => array(
			"name" => "dropdown", 
			"type" => "checkbox", 
			"value" => "", 
			"label" => "Display as dropdown"
			), 
		"widget-archives--count" => array(
			"name" => "count", 
			"type" => "checkbox", 
			"value" => "", 
			"label" => "Show post counts"
			)
		), 
	"title" => "Upload Date", 
	"dropdown" => array(), 
	"count" => array(), 
	"row" => 31
	), 
"wrapper_id" => "wrapper-1412854463630-1301", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 5
		), 
	"mobile" => array(
		"col" => 5
		)
	)
));

$regions->add($main_right);

$prefooter = upfront_create_region(
			array(
"name" => "prefooter", 
"title" => "Pre-footer", 
"type" => "wide", 
"scope" => "local", 
"container" => "prefooter", 
"position" => 20, 
"allow_sidebar" => true
),
			array(
"row" => 42, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)"
)
			);

$prefooter->add_element("PlainTxt", array(
"columns" => "11", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1406205224243-1651", 
"rows" => 26, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"></h3><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h4><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Spread the word.</span></h4><h4><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Share it with some friends.</span></h4></span><h3 class=\"\"></h3><h3 class=\"\"><span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(87, 85, 85)\"><a href=\"http://facebook.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">o</span></a> </span></span> <span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://twitter.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">p</span></a></span> <span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://plus.google.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">q</span></a></span>&nbsp;</span><span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://pinterest.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">r</span></a></span></span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406205224243-1348", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text-boxes", 
	"anchor" => "", 
	"row" => 20
	), 
"wrapper_id" => "wrapper-1406205224243-1651", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 11
		), 
	"mobile" => array(
		"col" => 11
		)
	)
));

$prefooter->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406209692911-1852", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h4 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Get</span>&nbsp;</h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">A Quote</span></h4>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406209692910-1396", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 10, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text-boxes", 
	"anchor" => "", 
	"style" => "
		.upfront-plain_txt h4{
		    margin:0;
		}
	"
	), 
"wrapper_id" => "wrapper-1406209692911-1852", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 5
		), 
	"mobile" => array(
		"col" => 5
		)
	)
));

$prefooter->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406210660792-1159", 
"rows" => 25, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h4 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Call us now</span></h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">1300 Fixer</span></h4>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406210660791-1219", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text-boxes", 
	"anchor" => "", 
	"row" => 19, 
	"style" => "
		.upfront-plain_txt h4{
		    margin:0;
		}
	"
	), 
"wrapper_id" => "wrapper-1406210660792-1159", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 8
		), 
	"mobile" => array(
		"col" => 8
		)
	)
));

$regions->add($prefooter);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

