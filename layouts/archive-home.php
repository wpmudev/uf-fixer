<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main_slider_region = upfront_create_region(
			array(
"name" => "main_slider_region", 
"title" => "Main Slider", 
"type" => "wide", 
"scope" => "local", 
"container" => "main_slider_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 188, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(154,164,156,1)", 
"background_slider_rotate" => true, 
"background_slider_rotate_time" => "10", 
"background_slider_control" => "hover", 
"background_slider_transition" => "crossfade", 
"background_slider_images" => array(18, 20, 19, 17, 21)
)
			);

$main_slider_region->add_element("PlainTxt", array(
"columns" => "18", 
"margin_left" => "6", 
"margin_right" => "0", 
"margin_top" => "14", 
"margin_bottom" => "0", 
"id" => "module-1405538329123-1568", 
"rows" => 107, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: right;\" class=\"\">We Build</h1><h1 style=\"text-align: right;\" class=\"\">And Fix</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405538329122-1842", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => "", 
	"row" => 101
	), 
"wrapper_id" => "wrapper-1405538329123-1568", 
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

$main_slider_region->add_element("Button", array(
"columns" => "4", 
"margin_left" => "16", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412693769329-1564", 
"rows" => 15, 
"options" => array(
	"content" => "Get a quote", 
	"href" => "#", 
	"align" => "center", 
	"type" => "ButtonModel", 
	"view_class" => "ButtonView", 
	"element_id" => "button-object-1412693769328-1389", 
	"class" => "c24 upfront-button", 
	"has_settings" => 1, 
	"id_slug" => "button", 
	"currentpreset" => "white-borders-button", 
	"theme_style" => "white-borders-button-extra", 
	"row" => 15, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412750917834-1762", 
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

$main_slider_region->add_element("Button", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412693935237-1809", 
"rows" => 15, 
"options" => array(
	"content" => "View Service", 
	"href" => "#", 
	"align" => "center", 
	"type" => "ButtonModel", 
	"view_class" => "ButtonView", 
	"element_id" => "object-1412693935237-1754", 
	"class" => "c24 upfront-button", 
	"has_settings" => 1, 
	"id_slug" => "button", 
	"currentpreset" => "white-borders-button", 
	"theme_style" => "white-borders-button-extra", 
	"row" => 15, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412750926243-1533", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 4
		), 
	"mobile" => array(
		"col" => 4
		)
	)
));

$regions->add($main_slider_region);

$main_services_region = upfront_create_region(
			array(
"name" => "main_services_region", 
"title" => "Main Services", 
"type" => "wide", 
"scope" => "local", 
"container" => "main_services_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 296, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)", 
"background_style" => "fixed", 
"background_position_y" => "80", 
"background_position_x" => "52", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/spanner.jpg", 
"background_image_ratio" => 2.33, 
"background_repeat" => "no-repeat", 
"background_position" => "52% 80%"
)
			);

$main_services_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412752367986-1614", 
"rows" => 5, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 style=\"text-align: center;\" class=\"\">Service</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412752367985-1171", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 5, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412752432673-1037", 
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

$main_services_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "31", 
"margin_bottom" => "0", 
"id" => "module-1412753049856-1341", 
"rows" => 94, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: center;\">Premier</h1><h1 style=\"text-align: center;\">Service &amp; Quality</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412753049855-1267", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 94
	), 
"wrapper_id" => "wrapper-1412761919281-1736", 
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

$main_services_region->add_group(array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-group-1412761687836-1641", 
"rows" => 10, 
"wrapper_id" => "wrapper-1412762147176-1712", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 7
		)
	)
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412753565271-1173", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: right;\" class=\"\">Bricklaying &nbsp;<span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">d</span></h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412753565270-1933", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"row" => 12
	), 
"wrapper_id" => "wrapper-1412761687972-1798", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761687836-1641"
));

$main_services_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412753565287-1086", 
"rows" => 29, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services-241x114-8562.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
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
		"width" => 241, 
		"height" => 723
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 720
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 241, 
		"height" => 114
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "39", 
	"align" => "center", 
	"stretch" => true, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1412753565275-1335", 
	"row" => 29, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412761687978-1914", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761687836-1641"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412755116247-1664", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412755116246-1165", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21
	), 
"wrapper_id" => "wrapper-1412761687980-1404", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761687836-1641"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "2", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412760587600-1860", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412760587599-1106", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 13, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412761687980-1404", 
"new_line" => "true", 
"group" => "module-group-1412761687836-1641"
));

$main_services_region->add_group(array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-group-1412761971988-1727", 
"rows" => 10, 
"wrapper_id" => "wrapper-1412762165620-1252", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 16
		), 
	"mobile" => array(
		"col" => 16
		)
	)
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412755741207-1241", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: start;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">g </span>Fencing</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412755741208-1512", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"row" => 12
	), 
"wrapper_id" => "wrapper-1412761972225-1478", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 2
		), 
	"mobile" => array(
		"col" => 2
		)
	), 
"group" => "module-group-1412761971988-1727"
));

$main_services_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412754746643-1570", 
"rows" => 29, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services-240x112-4557.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
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
		"width" => 240, 
		"height" => 720
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 720
		), 
	"position" => array(
		"top" => 368.00003051758, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 112
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "39", 
	"align" => "center", 
	"stretch" => true, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "object-1412754746643-1236", 
	"row" => 29, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412761972225-1478", 
"new_line" => "true", 
"group" => "module-group-1412761971988-1727"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412758674925-1625", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758674926-1809", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21
	), 
"wrapper_id" => "wrapper-1412761972225-1478", 
"new_line" => "true", 
"group" => "module-group-1412761971988-1727"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "2", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412761245584-1464", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412761245584-1793", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 13, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412761972225-1478", 
"new_line" => "true", 
"group" => "module-group-1412761971988-1727"
));

$main_services_region->add_group(array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-group-1412761732529-1631", 
"rows" => 10, 
"wrapper_id" => "wrapper-1412761732534-1521", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 7
		)
	)
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412755312037-1516", 
"rows" => 9, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: right;\" class=\"\">Electrical &nbsp;<span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">f</span></h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412755312039-1941", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"row" => 9
	), 
"wrapper_id" => "wrapper-1412761732655-1389", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761732529-1631"
));

$main_services_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412754669225-1927", 
"rows" => 29, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services-240x113-5477.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
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
		"width" => 240, 
		"height" => 720
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 720
		), 
	"position" => array(
		"top" => 123, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 113
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "39", 
	"align" => "center", 
	"stretch" => true, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "object-1412754669226-1686", 
	"row" => 29, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412761732658-1241", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761732529-1631"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412758639158-1499", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758639158-1230", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21
	), 
"wrapper_id" => "wrapper-1412761732661-1744", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761732529-1631"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "2", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412761178945-1978", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412761178946-1192", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 13, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412761732663-1121", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761732529-1631"
));

$main_services_region->add_group(array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-group-1412762065369-1462", 
"rows" => 10, 
"wrapper_id" => "wrapper-1412762233691-1263", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 16
		), 
	"mobile" => array(
		"col" => 16
		)
	)
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412756687814-1736", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: start;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">h&nbsp;</span>Windows</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412756687815-1861", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"row" => 11
	), 
"wrapper_id" => "wrapper-1412762065515-1158", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 2
		), 
	"mobile" => array(
		"col" => 2
		)
	), 
"group" => "module-group-1412762065369-1462"
));

$main_services_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412754754742-1146", 
"rows" => 29, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services-240x112-1825.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
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
		"width" => 240, 
		"height" => 720
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 720
		), 
	"position" => array(
		"top" => 485.00003051758, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 112
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "39", 
	"align" => "center", 
	"stretch" => true, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "object-1412754754742-1865", 
	"row" => 29, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412762065515-1158", 
"group" => "module-group-1412762065369-1462"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412758683553-1445", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758683553-1850", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21
	), 
"wrapper_id" => "wrapper-1412762065515-1158", 
"group" => "module-group-1412762065369-1462"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "2", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412761272663-1269", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412761272663-1754", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 13, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412762065515-1158", 
"group" => "module-group-1412762065369-1462"
));

$main_services_region->add_group(array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-group-1412761779796-1285", 
"rows" => 10, 
"wrapper_id" => "wrapper-1412762208475-1609", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 7
		)
	)
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412755367541-1095", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: right;\" class=\"\">Plumping &nbsp;<span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">e</span></h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412755367541-1166", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"row" => 12
	), 
"wrapper_id" => "wrapper-1412761779951-1439", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761779796-1285"
));

$main_services_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412754693141-1172", 
"rows" => 29, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services-240x112-9667.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
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
		"width" => 240, 
		"height" => 720
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 720
		), 
	"position" => array(
		"top" => 243, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 112
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "39", 
	"align" => "center", 
	"stretch" => true, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "object-1412754693142-1998", 
	"row" => 29, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412761779955-1198", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761779796-1285"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412758653429-1468", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758653429-1692", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21
	), 
"wrapper_id" => "wrapper-1412761779956-1082", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761779796-1285"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "2", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412761224708-1423", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412761224708-1338", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 13, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412761779958-1127", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => "6"
		), 
	"mobile" => array(
		"col" => "6"
		)
	), 
"group" => "module-group-1412761779796-1285"
));

$main_services_region->add_group(array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-group-1412762121849-1954", 
"rows" => 10, 
"wrapper_id" => "wrapper-1412762244135-1328", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 16
		), 
	"mobile" => array(
		"col" => 16
		)
	)
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412756709190-1593", 
"rows" => 7, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: start;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">i&nbsp;</span>Roofing</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412756709192-1166", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"row" => 7
	), 
"wrapper_id" => "wrapper-1412762121989-1681", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 2
		), 
	"mobile" => array(
		"col" => 2
		)
	), 
"group" => "module-group-1412762121849-1954"
));

$main_services_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412754737240-1558", 
"rows" => 29, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services-240x112-5900.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/services.jpg", 
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
		"width" => 240, 
		"height" => 720
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 720
		), 
	"position" => array(
		"top" => 604.00003051758, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 112
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "39", 
	"align" => "center", 
	"stretch" => true, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "object-1412754737240-1334", 
	"row" => 29, 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412762121989-1681", 
"group" => "module-group-1412762121849-1954"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412758697922-1900", 
"rows" => 21, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758697922-1117", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21
	), 
"wrapper_id" => "wrapper-1412762121989-1681", 
"group" => "module-group-1412762121849-1954"
));

$main_services_region->add_element("PlainTxt", array(
"columns" => "2", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412761309376-1041", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412761309377-1727", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 13, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412762121989-1681", 
"group" => "module-group-1412762121849-1954"
));

$regions->add($main_services_region);

$main_quote_region = upfront_create_region(
			array(
"name" => "main_quote_region", 
"title" => "Main Quote", 
"type" => "wide", 
"scope" => "local", 
"container" => "main_quote_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 148, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "#ffffff"
)
			);

$main_quote_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1412779180680-1829", 
"rows" => 7, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 style=\"text-align: center;\" class=\"\">In emergecy, call us now! Otherwise follow the steps below...</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412779180680-1452", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"row" => 7
	), 
"wrapper_id" => "wrapper-1405604490158-1724", 
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

$main_quote_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405603545291-1575", 
"rows" => 29, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: center;\" class=\"\">First Thing First</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1405603545292-1703", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 29, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1412779479175-1095", 
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

$main_quote_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410351484471-1157", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: start;\">1. Get a Quote</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1410351484470-1706", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 5, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"theme_style" => "quote-step-title"
	), 
"wrapper_id" => "wrapper-1410351832277-1394", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 6
		), 
	"mobile" => array(
		"col" => 6
		)
	)
));

$main_quote_region->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410351502219-1963", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: start;\">2. We Roll</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1410351502218-1570", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"theme_style" => "quote-step-title", 
	"row" => 4
	), 
"wrapper_id" => "wrapper-1410351835513-1789", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 9
		)
	)
));

$main_quote_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410351535850-1535", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: start;\">3. We Fix It</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1410351535848-1723", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"theme_style" => "quote-step-title", 
	"row" => 5
	), 
"wrapper_id" => "wrapper-1410351850120-1954", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 9
		)
	)
));

$main_quote_region->add_element("Code", array(
"columns" => "8", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1410351727975-1861", 
"rows" => 68, 
"options" => array(
	"type" => "CodeModel", 
	"view_class" => "CodeView", 
	"class" => "c24 upfront-code_element-object", 
	"has_settings" => 0, 
	"id_slug" => "upfront-code_element", 
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>", 
		"style" => "/* Your styles here */", 
		"script" => "/* Your code here */"
		), 
	"element_id" => "upfront-code_element-object-1410351727973-1975", 
	"row" => 62, 
	"code_selection_type" => "Create", 
	"markup" => "<form id=\"get-quote\">
    <input name=\"name\" type=\"text\" placeholder=\"Name\">
    <input name=\"email\" type=\"text\" placeholder=\"Email Address\">
    <input name=\"mobile\" type=\"text\" placeholder=\"Mobile Number\">
    <input name=\"postcode\" type=\"text\" placeholder=\"Post Code\">
    <input name=\"service\" type=\"text\" placeholder=\"Select Service\">
    <input name=\"classfication\" type=\"text\" placeholder=\"Select Classification\">
    <textarea placeholder=\"Type your enquire here...\"></textarea>
    <input name=\"sms\" type=\"checkbox\" type=\"text\">Send quote via SMS</input>
</form>", 
	"style" => "/* Your styles here */
form#get-quote {
    background: #D6E6F0;
    padding: 5%;
}
form#get-quote textarea {
    resize: none;
    height: 10em;
}
form#get-quote input[type=text]::-webkit-input-placeholder, form#get-quote textarea::-webkit-input-placeholder { color:#333333; }
form#get-quote input[type=text]::-moz-placeholder, form#get-quote textarea::-moz-placeholder { color:#333333; }

form#get-quote input[type=text], form#get-quote textarea {
    font-weight: 500;
    border: none;
    width: 90%;
    margin-bottom: 2px;
    line-height: 1em;
    padding-top: 1em;
    padding-bottom: 1em;
    padding-left: 5%;
    padding-right: 5%;
}", 
	"script" => "/* Your code here */"
	), 
"wrapper_id" => "wrapper-1410352674285-1830", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 8
		), 
	"mobile" => array(
		"col" => 8
		)
	)
));

$main_quote_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410350687438-1702", 
"rows" => 9, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/quote-step2 (1)-230x101-3797.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/quote-step2 (1).png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/quote-step2 (1).png", 
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
		"width" => 230, 
		"height" => 101
		), 
	"fullSize" => array(
		"width" => 230, 
		"height" => 100
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 105
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "40", 
	"align" => "left", 
	"stretch" => false, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1410350687421-1049", 
	"row" => 9
	), 
"wrapper_id" => "wrapper-1410352686491-1034", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 8
		), 
	"mobile" => array(
		"col" => 8
		)
	)
));

$main_quote_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410352199210-1157", 
"rows" => 87, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1410352199209-1378", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 87, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"theme_style" => "quote-step-text"
	), 
"wrapper_id" => "wrapper-1410352686491-1034"
));

$main_quote_region->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410351290321-1363", 
"rows" => 9, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/quote-step3-230x101-9694.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/quote-step3.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/quote-step3.png", 
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
		"width" => 230, 
		"height" => 101
		), 
	"fullSize" => array(
		"width" => 230, 
		"height" => 100
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0.0234375
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 105
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "41", 
	"align" => "left", 
	"stretch" => false, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1410351290307-1196", 
	"row" => 9
	), 
"wrapper_id" => "wrapper-1410352591269-1346", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 8
		), 
	"mobile" => array(
		"col" => 8
		)
	)
));

$main_quote_region->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1410352455168-1374", 
"rows" => 111, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">It works as smooth as new. quis nostrud exerci tation ullamcorper san et iusto praesent luptatum zzril volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper &nbsp;tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, nobis eleifend option congue nihil imperdiet doming id quod mazim non habent praesent luptatum zzril delenit erat facer possim assum lorem ipsum.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1410352455166-1289", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 105, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => "", 
	"theme_style" => "quote-step-text"
	), 
"wrapper_id" => "wrapper-1410352591269-1346"
));

$regions->add($main_quote_region);

$region_6 = upfront_create_region(
			array(
"name" => "region_6", 
"title" => "Region 6", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_6", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 106, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "full", 
"background_position_y" => "50", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/background-leaves.jpg", 
"background_image_ratio" => 0.43
)
			);

$region_6->add_element("PlainTxt", array(
"columns" => "11", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "14", 
"margin_bottom" => "0", 
"id" => "module-1406189688409-1108", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\">Blog</h3><h1 class=\"\"></h1><h1 class=\"\">Latest&nbsp;</h1><h1 class=\"\">News &amp;</h1><h1 class=\"\">Tips</h1><h1 class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406189688408-1011", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "blog"
	), 
"wrapper_id" => "wrapper-1406189688409-1108", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 11
		), 
	"mobile" => array(
		"col" => 11
		)
	)
));

$regions->add($region_6);

$region_7 = upfront_create_region(
			array(
"name" => "region_7", 
"title" => "Region 7", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_7", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 58, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(94,191,107,1)", 
"background_style" => "fixed", 
"background_position_y" => "50", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/hot (1).jpg", 
"background_image_ratio" => 0.43, 
"background_repeat" => "no-repeat", 
"background_position" => "100% 50%"
)
			);

$region_7->add_element("PlainTxt", array(
"columns" => "9", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1406190416970-1781", 
"rows" => 43, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\">End your day!</h3><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue.</span></p><p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406190416970-1685", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 37, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406190416970-1781", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 9
		)
	)
));

$regions->add($region_7);

$region_8 = upfront_create_region(
			array(
"name" => "region_8", 
"title" => "Region 8", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_8", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 58, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "fixed", 
"background_position_y" => "50", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/big-bricks (1).jpg", 
"background_image_ratio" => 0.43, 
"background_repeat" => "no-repeat", 
"background_position" => "100% 50%"
)
			);

$region_8->add_element("PlainTxt", array(
"columns" => "9", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1406190559882-1979", 
"rows" => 49, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\">No more leaking pipe!</h3><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue.</p><p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406190559882-1589", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 43, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1406190559882-1979", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 9
		)
	)
));

$regions->add($region_8);

$region_9 = upfront_create_region(
			array(
"name" => "region_9", 
"title" => "Region 9", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_9", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 58, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_slider_rotate" => true, 
"background_slider_rotate_time" => 5, 
"background_slider_control" => "always", 
"background_slider_transition" => "crossfade", 
"background_style" => "fixed", 
"background_position_y" => "50", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/big-roof.jpg", 
"background_image_ratio" => 0.43, 
"background_repeat" => "no-repeat", 
"background_position" => "100% 50%"
)
			);

$region_9->add_element("PlainTxt", array(
"columns" => "9", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1406194567924-1749", 
"rows" => 52, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\">Smart home, smart roof</h3><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dolor sit amet.</p><p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194567924-1392", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 46, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406194567924-1749", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 9
		)
	)
));

$regions->add($region_9);

$region_10 = upfront_create_region(
			array(
"name" => "region_10", 
"title" => "Region 10", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_10", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 31
)
			);

$region_10->add_element("PlainTxt", array(
"columns" => "12", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1406194594842-1402", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\">Interested to know more tips?</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194594841-1906", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 11, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406194594842-1402", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 12
		), 
	"mobile" => array(
		"col" => 12
		)
	)
));

$region_10->add_element("Button", array(
"columns" => "4", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1412847584331-1365", 
"rows" => 15, 
"options" => array(
	"content" => "Subscribe", 
	"href" => "#", 
	"align" => "center", 
	"type" => "ButtonModel", 
	"view_class" => "ButtonView", 
	"element_id" => "button-object-1412847584330-1018", 
	"class" => "c24 upfront-button", 
	"has_settings" => 1, 
	"id_slug" => "button", 
	"currentpreset" => "black-borders-button", 
	"theme_style" => "black-borders-button-extra", 
	"row" => 15
	), 
"wrapper_id" => "wrapper-1412849840312-1624", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 7
		)
	)
));

$region_10->add_element("Button", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1412845951334-1388", 
"rows" => 15, 
"options" => array(
	"content" => "View blog", 
	"href" => "#", 
	"align" => "center", 
	"type" => "ButtonModel", 
	"view_class" => "ButtonView", 
	"element_id" => "button-object-1412845951334-1229", 
	"class" => "c24 upfront-button", 
	"has_settings" => 1, 
	"id_slug" => "button", 
	"currentpreset" => "black-borders-button", 
	"theme_style" => "black-borders-button-extra", 
	"row" => 15
	), 
"wrapper_id" => "wrapper-1412849849778-1976", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 4
		), 
	"mobile" => array(
		"col" => 4
		)
	)
));

$regions->add($region_10);

$main_about_region = upfront_create_region(
			array(
"name" => "main_about_region", 
"title" => "Main About", 
"type" => "wide", 
"scope" => "local", 
"container" => "main_about_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 139, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(255,226,98,1)"
)
			);

$main_about_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1412782658100-1763", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 style=\"text-align: center;\" class=\"\">About</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412782658098-1018", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 13
	), 
"wrapper_id" => "wrapper-1412782859322-1825", 
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

$main_about_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1412782860297-1472", 
"rows" => 46, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: center;\" class=\"\">Meet Mr Fixer</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412782860294-1958", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 46
	), 
"wrapper_id" => "wrapper-1412782911949-1922", 
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

$main_about_region->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "12", 
"margin_bottom" => "0", 
"id" => "module-1406196281138-1720", 
"rows" => 56, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit Ut wisi enim ad minim veniam, quis nostrud &nbsp;esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit </p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406196281137-1335", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 50, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406196281138-1720", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 9
		)
	)
));

$main_about_region->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1406196781398-1992", 
"rows" => 56, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit Ut wisi enim ad minim veniam, quis nostrud &nbsp;esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit U</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406196781398-1916", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 50, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406196781398-1992", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 7
		)
	)
));

$main_about_region->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1406196815834-1847", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">We will talk to you in a minute</p><p class=\"\">Thank you.</p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406196815834-1028", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 15, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406196815834-1847", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 7
		), 
	"mobile" => array(
		"col" => 7
		)
	)
));

$main_about_region->add_element("Uimage", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412780079966-1514", 
"rows" => 9, 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/signature-165x101-2110.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/signature.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/signature.png", 
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
		"width" => 165, 
		"height" => 101
		), 
	"fullSize" => array(
		"width" => 165, 
		"height" => 101
		), 
	"position" => array(
		"top" => 0.9619140625, 
		"left" => 0
		), 
	"marginTop" => -0.9619140625, 
	"element_size" => array(
		"width" => 195, 
		"height" => 105
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "42", 
	"align" => "left", 
	"stretch" => false, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1412780079958-1027", 
	"row" => 9
	), 
"wrapper_id" => "wrapper-1406196815834-1847"
));

$main_about_region->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1412780752234-1058", 
"rows" => 14, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><strong>James Woodlock</strong></p><p class=\"\">Owner</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412780752235-1133", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 14, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1406196815834-1847"
));

$main_about_region->add_element("Code", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407454687369-1694", 
"rows" => 42, 
"options" => array(
	"type" => "CodeModel", 
	"view_class" => "CodeView", 
	"class" => "c24 upfront-code_element-object", 
	"has_settings" => 0, 
	"id_slug" => "upfront-code_element", 
	"fallbacks" => array(
		"markup" => "<b>Enter your markup here...</b>", 
		"style" => "/* Your styles here */", 
		"script" => "/* Your code here */"
		), 
	"element_id" => "upfront-code_element-object-1407454687368-1032", 
	"code_selection_type" => "Create", 
	"markup" => "<iframe class=\"wistia_embed\" name=\"wistia_embed\" src=\"http://fast.wistia.net/embed/iframe/idxj1a1yas?canonicalUrl=http%3A%2F%2Fwistia.com%2Flearning%2Fweekly-videos-with-moz&amp;canonicalTitle=Weekly%20Videos%20with%20Moz\" allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" width=\"1050\" height=\"590\"></iframe>", 
	"style" => "#wistia_10_socialbar{
display:none;
}", 
	"script" => "/* Your code here */"
	), 
"wrapper_id" => "wrapper-1407454687369-1694", 
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

$regions->add($main_about_region);

$region_12 = upfront_create_region(
			array(
"name" => "region_12", 
"title" => "Region 12", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_12", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60
)
			);

$region_12->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1406200069453-1687", 
"rows" => 52, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"></h3><h3 style=\"text-align: center;\">Coverage Area</h3><h1 class=\"\"></h1><h1 class=\"\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 style=\"text-align: center;\">Anywhere within</h1><h1 style=\"text-align: center;\">40km radius</h1><h1 style=\"text-align: center;\">from CBD</h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 class=\"\"></h1><h1 class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406200069452-1923", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 46, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-text-25-lineheight", 
	"anchor" => "coveragearea"
	), 
"wrapper_id" => "wrapper-1406200069453-1687", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$regions->add($region_12);

$main_contact_region_left = upfront_create_region(
			array(
"name" => "main_contact_region_left", 
"title" => "Main Contact Left", 
"type" => "wide", 
"scope" => "local", 
"container" => "main_contact_region", 
"sub" => "left", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"col" => 10, 
"background_type" => "color", 
"background_color" => "rgba(104,89,154,1)"
)
			);

$main_contact_region_left->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "0", 
"margin_top" => "4", 
"id" => "module-1412850227558-1156", 
"rows" => 15, 
"options" => array(
	"content" => "<h2 style=\"text-align: start;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Ready to talk to our staff with enquires &amp; questions?</span></h2>", 
	"type" => "PlainTxtModel", 
	"view_class" => "PlainTxtView", 
	"element_id" => "text-object-1412850227556-1966", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"id_slug" => "plain_text", 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1412850644090-1343", 
"new_line" => "true"
));

$main_contact_region_left->add_element("Ucontact", array(
"columns" => "10", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406205101532-1649", 
"rows" => 10, 
"options" => array(
	"form_add_title" => array(), 
	"form_title" => "Contact form", 
	"form_name_label" => "Name", 
	"form_email_label" => "Phone Number", 
	"form_email_to" => "samnajian@gmail.com", 
	"show_subject" => array(), 
	"form_subject_label" => "Your subject:", 
	"form_default_subject" => "Sent from the website", 
	"form_message_label" => "Type your enquire here ...", 
	"form_button_text" => "Submit", 
	"form_validate_when" => "submit", 
	"form_label_position" => "over", 
	"type" => "UcontactModel", 
	"view_class" => "UcontactView", 
	"class" => "c24 upfront-contact-form", 
	"has_settings" => 1, 
	"id_slug" => "ucontact", 
	"element_id" => "ucontact-object-1406205101531-1670", 
	"theme_style" => "home-footer-contact", 
	"anchor" => "", 
	"row" => ''
	), 
"wrapper_id" => "wrapper-1406205101532-1649", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 10
		), 
	"mobile" => array(
		"col" => 10
		)
	), 
"new_line" => "true"
));

$regions->add($main_contact_region_left);

$main_contact_region = upfront_create_region(
			array(
"name" => "main_contact_region", 
"title" => "Main Contact", 
"type" => "wide", 
"scope" => "local", 
"container" => "main_contact_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 126, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(100,81,145,1)", 
"background_style" => "fixed", 
"background_position_y" => "100", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/home-dome (1).jpg", 
"background_image_ratio" => 1.05, 
"background_repeat" => "no-repeat", 
"background_position" => "100% 100%"
)
			);

$regions->add($main_contact_region);

$prefooter = upfront_create_region(
			array(
"name" => "prefooter", 
"title" => "Pre-footer", 
"type" => "wide", 
"scope" => "local", 
"container" => "prefooter", 
"position" => 1, 
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
"wrapper_id" => "wrapper-1406205224243-1651"
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
"wrapper_id" => "wrapper-1406209692911-1852"
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
"wrapper_id" => "wrapper-1406210660792-1159"
));

$regions->add($prefooter);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

