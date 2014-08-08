<?php
$header = upfront_create_region(
        array(
"name" => "header", 
"title" => "Header", 
"type" => "wide", 
"scope" => "local", 
"position" => 1, 
"allow_sidebar" => true
),
        array(
"row" => 24, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "#fff"
)
        );
$header->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1405520755986-1686-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 4, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/archive/logo (1)-116x28-4228.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/archive/logo (1).png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/archive/logo (1).png', 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => "entry", 
	"image_link" => "" . get_site_url() . "/gallery-3/", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => "below_image", 
	"caption_alignment" => "top", 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 116, 
		"height" => 28
		), 
	"fullSize" => array(
		"width" => 115, 
		"height" => 28
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 150, 
		"height" => 30
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1467", 
	"align" => "left", 
	"stretch" => false, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1405520755973-1481", 
	"row" => -2, 
	"theme_style" => "", 
	"anchor" => ""
	)
));

$header->add_element("Unewnavigation", array(
"columns" => "15", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1405520756070-1345-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 165, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Service", 
			"menu-item-url" => "" . get_site_url() . "/#service", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "165", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 166, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Get a Quote", 
			"menu-item-url" => "" . get_site_url() . "/?dev=true&editmode=true#getquote", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "166", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 2092, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Blog", 
			"menu-item-url" => "" . get_site_url() . "/?dev=true&editmode=true#blog", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "2092", 
			"menu-item-target" => "", 
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 2095, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "About", 
			"menu-item-url" => "" . get_site_url() . "/?dev=true&editmode=true#about", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "2095", 
			"menu-item-target" => "", 
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 2097, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Coverage Area", 
			"menu-item-url" => "" . get_site_url() . "/?dev=true&editmode=true#coveragearea", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "2097", 
			"menu-item-target" => "", 
			"menu-item-position" => 5
			)), 
	"menu_style" => "horizontal", 
	"menu_alignment" => "left", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"element_id" => "unewnavigation-object-1405520756062-1726", 
	"initialized" => false, 
	"menu_id" => "32", 
	"is_floating" => array(), 
	"theme_style" => "unewnavigation-main", 
	"anchor" => "", 
	"row" => 6
	)
));

$header->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1405520755970-1045-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 22, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p style=\"text-align: right;\" class=\"\">One call does it all</p><h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">a&nbsp;</span>1300 FIXER</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405520755969-1764", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "header-contact-text", 
	"anchor" => "", 
	"row" => 16
	)
));

$regions->add($header);
$region_1 = upfront_create_region(
        array(
"name" => "region_1", 
"title" => "Region 1", 
"type" => "wide", 
"scope" => "local", 
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
$region_1->add_element("PlainTxt", array(
"columns" => "20", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1406494478244-1653-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 43, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(51, 51, 51)\">Archived</span></h3><h1 class=\"\" style=\"text-align: center;\"></h1><span class=\"inline_color\" style=\"color: rgb(183, 159, 159)\"><h1 class=\"\" style=\"text-align: center;\"></h1><span class=\"inline_color\" style=\"color: rgb(51, 51, 51)\"><h1 class=\"\" style=\"text-align: center;\">We Keep Things</h1><h1 class=\"\" style=\"text-align: center;\">Organized</h1></span><h1 class=\"\" style=\"text-align: center;\"></h1></span><h1 class=\"\" style=\"text-align: center;\"></h1><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406494478244-1271", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 37, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "archive-heading", 
	"anchor" => ""
	)
));

$region_1->add_element("Usearch", array(
"columns" => "18", 
"margin_left" => "5", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1406494948966-1861-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 19, 
"options" => array(
	"type" => "UsearchModel", 
	"view_class" => "UsearchView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-search", 
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
"id" => "default-posts-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 138, 
"options" => array(
	"type" => "UpostsModel", 
	"view_class" => "UpostsView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 uposts-object", 
	"id_slug" => "uposts", 
	"post_type" => "post", 
	"taxonomy" => "", 
	"term" => "", 
	"limit" => "3", 
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
	"anchor" => ""
	)
));

$regions->add($main);
$main_right = upfront_create_region(
        array(
"name" => "main_right", 
"title" => "main Right", 
"type" => "wide", 
"scope" => "local", 
"container" => "main", 
"sub" => "right", 
"position" => 20, 
"allow_sidebar" => true
),
        array(
"col" => 7, 
"background_type" => "color", 
"background_color" => "rgba(236,233,228,1)"
)
        );
$main_right->add_element("Uwidget", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "20", 
"margin_bottom" => "0", 
"id" => "module-1407359610231-1708-module-module-module-module-module-module-module-module-module-module", 
"rows" => 37, 
"options" => array(
	"id_slug" => "uwidget", 
	"type" => "UwidgetModel", 
	"view_class" => "UwidgetView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-widget", 
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
	)
));

$regions->add($main_right);
$main_right = upfront_create_region(
        array(
"name" => "main_right", 
"title" => "main Right", 
"type" => "wide", 
"scope" => "local", 
"position" => 20, 
"allow_sidebar" => true
),
        array(
"col" => 8, 
"background_type" => "color", 
"background_color" => "rgba(236,233,228,1)"
)
        );
$regions->add($main_right);
$footer = upfront_create_region(
        array(
"name" => "footer", 
"title" => "Footer", 
"type" => "wide", 
"scope" => "local", 
"position" => 20, 
"allow_sidebar" => true
),
        array(
"row" => 44, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)", 
"expand_lock" => false
)
        );
$footer->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1406205224243-1651-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 30, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"></h3><span class=\"inline_color\" style=\"color: rgb(253, 253, 253)\"></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h3></h3><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h3><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Spread the word.</span></h3><h3><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Share it with some friends.</span></h3></span><h3></h3></span><h3 class=\"\"></h3><h3 class=\"\"><span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(87, 85, 85)\"><a href=\"http://facebook.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">o</span></a> </span></span> <span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://twitter.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">p</span></a></span> <span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://plus.google.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">q</span></a></span>&nbsp;</span><span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://pinterest.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">r</span></a></span></span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406205224243-1348", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer-social", 
	"anchor" => "", 
	"row" => 24
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406209692911-1852-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 25, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 65px; top: 42px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Get&nbsp;</span></h3><h3 class=\"\" style=\"margin-left: 60px;\">&nbsp; &nbsp; A &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">A</span><span class=\"inline_color\" style=\"font-size: 28px; line-height: 0em; color: rgb(255, 255, 255);\">&nbsp;Quote&nbsp;</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406209692910-1396", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 19, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer-social", 
	"anchor" => ""
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406210660792-1159-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 22, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 65px; top: 42px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Call us now</span></h3><h3 class=\"\" style=\"margin-left: 40px;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">&nbsp; &nbsp; &nbsp;1300 Fixer</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406210660791-1219", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer-social", 
	"anchor" => "", 
	"row" => 16
	)
));

$regions->add($footer);
$lower_footer = upfront_create_region(
        array(
"name" => "lower_footer", 
"title" => "Lower foter", 
"type" => "wide", 
"scope" => "local", 
"position" => 20, 
"allow_sidebar" => true
),
        array(
"row" => 9, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(44,44,44,1)", 
"expand_lock" => false
)
        );
$lower_footer->add_element("Uimage", array(
"columns" => "3", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406217409056-1339-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 10, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/archive/logo-white-92x20-3728.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/archive/logo-white.png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/archive/logo-white.png', 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => "below_image", 
	"caption_alignment" => "top", 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 92, 
		"height" => 20
		), 
	"fullSize" => array(
		"width" => 92, 
		"height" => 21
		), 
	"position" => array(
		"top" => 0.6666259765625, 
		"left" => 0
		), 
	"marginTop" => -0.66668701171875, 
	"element_size" => array(
		"width" => 105, 
		"height" => 21
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "3051", 
	"align" => "left", 
	"stretch" => false, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1406217409054-1200", 
	"row" => 4
	)
));

$lower_footer->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406217940549-1616-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">© 2oo6-2014 Fixer Pty Ltd</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406217940549-1478", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer", 
	"anchor" => ""
	)
));

$lower_footer->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1406218508045-1635-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406218508045-1484", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer", 
	"anchor" => ""
	)
));

$lower_footer->add_element("PlainTxt", array(
"columns" => "3", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1406218404636-1484-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 8, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">TOU &amp; Privary</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406218404628-1646", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 2, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer", 
	"anchor" => ""
	)
));

$regions->add($lower_footer);
