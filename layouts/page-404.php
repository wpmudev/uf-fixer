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
"background_color" => "rgba(94,191,107,1)"
)
        );
$header->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1405520755986-1686-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 4, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/page-404/logo (1)-116x28-4228.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/page-404/logo (1).png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/page-404/logo (1).png', 
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
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-image", 
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
"id" => "module-1405520756070-1345-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-navigation", 
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
"id" => "module-1405520755970-1045-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p style=\"text-align: right;\" class=\"\">One call does it all</p><h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">a&nbsp;</span>1300 FIXER</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405520755969-1764", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-header", 
	"anchor" => "", 
	"row" => 11
	)
));

$regions->add($header);
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
"row" => 169, 
"background_type" => "image", 
"background_color" => "rgba(94,191,107,1)", 
"nav_region" => "", 
"background_style" => "fixed", 
"background_position_y" => "80", 
"background_position_x" => "68", 
"background_image" => get_stylesheet_directory_uri() . '/images/page-404/big-car (1).jpg', 
"background_image_ratio" => 0.4, 
"background_repeat" => "no-repeat", 
"background_position" => "68% 80%"
)
        );
$main->add_element("PlainTxt", array(
"columns" => "16", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1407360968098-1288-module-module-module-module-module-module-module-module-module", 
"rows" => 112, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\"><strong></strong></h1><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h1 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Page not available but Mr Fixer</span>&nbsp;</h1><h1 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">is.</span></h1><h1 class=\"\"><strong></strong></h1></span><h1 class=\"\"><strong></strong></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407360968097-1921", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 106, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "page-404", 
	"anchor" => ""
	)
));

$main->add_element("Code", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1406264563975-1456-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 14, 
"options" => array(
	"type" => "CodeModel", 
	"view_class" => "CodeView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-code_element-object", 
	"has_settings" => 0, 
	"id_slug" => "upfront-code_element", 
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>", 
		"style" => "/* Your styles here */", 
		"script" => "/* Your code here */"
		), 
	"element_id" => "upfront-code_element-object-1406264563974-1080", 
	"code_selection_type" => "Create", 
	"markup" => "<a href=\"/\" class=\"take-me-home\">Take Me To Mr Fixer</a>", 
	"style" => ".take-me-home{
    padding: 10px 15px;
    color:#fff;
    border:2px solid #fff;
    text-decoration:none;
    text-transform:uppercase;
}", 
	"script" => "/* Your code here */", 
	"row" => 8
	)
));

$regions->add($main);
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
"id" => "module-1406217409056-1339-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 10, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/page-404/logo-white-92x20-3728.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/page-404/logo-white.png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/page-404/logo-white.png', 
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
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-image", 
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
"id" => "module-1406217940549-1616-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">© 2oo6-2014 Fixer Pty Ltd</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406217940549-1478", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
"id" => "module-1406218508045-1635-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406218508045-1484", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
"id" => "module-1406218404636-1484-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 8, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">TOU &amp; Privary</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406218404628-1646", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
