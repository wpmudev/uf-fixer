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
"row" => 315, 
"background_type" => "image", 
"background_color" => "#ufc1", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"row" => 543, 
		"background_position_y" => "79", 
		"background_style" => "fixed", 
		"background_repeat" => "no-repeat", 
		"background_position" => "50% 79%", 
		"background_position_x" => "50", 
		"background_type" => "color", 
		"background_color" => "#ufc1"
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 571, 
		"background_position_y" => "79", 
		"background_style" => "fixed", 
		"background_repeat" => "no-repeat", 
		"background_position" => "50% 79%", 
		"background_position_x" => "50", 
		"background_type" => "color"
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"row" => 350, 
		"background_position_y" => "86", 
		"background_style" => "fixed", 
		"background_repeat" => "no-repeat", 
		"background_position" => "50% 86%", 
		"background_position_x" => "50", 
		"background_type" => "color", 
		"background_color" => "#ufc1"
		)
	), 
"use_padding" => 0, 
"sub_regions" => array(false), 
"background_style" => "fixed", 
"background_position_y" => "80", 
"background_position_x" => "50", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/spanner.png", 
"background_image_ratio" => 2.5, 
"background_repeat" => "no-repeat", 
"background_position" => "50% 80%"
)
			);

$main->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1432906098400-1697", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 style=\"text-align: center;\" rel=\"text-align: center;\" class=\"\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Service</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432906098400-1126", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"theme_style" => "u-sub-heading"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432906324812-1976", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 0, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 0, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 18, 
		"order" => 0, 
		"clear" => true
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

$main->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432906324898-1346", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Premier<br>Service &amp; Quality</span></h1>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432906324898-1647", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432906361608-1332", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 1, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 1, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 18, 
		"order" => 1, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0, 
		"top" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0, 
		"top" => 0
		)
	)
));

$main->add_group(array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-group-1434097161744-1439", 
"type" => "ModuleGroup", 
"wrapper_id" => "wrapper-1434097161746-1395", 
"original_col" => 6, 
"background_color" => "rgba(137,77,77,0)", 
"background_style" => "full", 
"background_position_y" => 50, 
"background_position_x" => 50, 
"use_padding" => "", 
"background_type" => "color", 
"anchor" => "", 
"theme_style" => "no-y-padding", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 9, 
		"order" => 2, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 2, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 2, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6, 
		"order" => 0,
		"top" => 16
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0,
		"top" => 16
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 6, 
		"order" => 0,
		"top" => 16
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432906361678-1723", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Bricklaying <span class=\"uf_font_icon\" style=\"font-size: 20px; top: 0px;\" rel=\"font-size: 20px; top: 0px;\" data-verified=\"redactor\">d</span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432906361678-1039", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097161772-1739", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097161744-1439"
));

$main->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432906098404-1603", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/bricklaying-240x120-5632.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/bricklaying.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/bricklaying.jpg", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 120
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1852", 
	"align" => "left", 
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
	"element_id" => "image-1432906098401-1621", 
	"row" => 10
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097163126-1615", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097161744-1439"
));

$main->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432906637306-1993", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"upfront_theme_color_0\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span></p>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432906637306-1039", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 17
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097163131-1648", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097161744-1439"
));

$main->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1434096393290-1553", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><a target=\"_self\" href=\"" . get_site_url() . "/service-brick/\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"uf_font_icon\" style=\"font-size: 24px; top: 0px;\" rel=\"font-size: 24px; top: 0px;\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"font-size: 24px; top: 0px;\">j</span>​</span></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1434096393289-1800", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097163133-1681", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097161744-1439"
));

$main->add_group(array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-group-1434097025315-1201", 
"type" => "ModuleGroup", 
"wrapper_id" => "wrapper-1434097167170-1918", 
"original_col" => 6, 
"background_color" => "rgba(137,77,77,0)", 
"background_style" => "full", 
"background_position_y" => 50, 
"background_position_x" => 50, 
"use_padding" => "", 
"background_type" => "color", 
"anchor" => "", 
"theme_style" => "no-y-padding", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 9, 
		"order" => 5, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 5, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 5, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 6, 
		"order" => 0,
		"top" => 6
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0, 
		"top" => 6
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 6, 
		"order" => 0, 
		"top" => 6
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432907701032-1997", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"redactor-invisible-space\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"redactor-invisible-space\"><span class=\"uf_font_icon\" style=\"font-size: 20px; top: 0px;\" rel=\"font-size: 20px; top: 0px;\" data-verified=\"redactor\">g</span><span class=\"redactor-invisible-space\">​</span> Fencing</span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432907701032-1076", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097025344-1945", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097025315-1201"
));

$main->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432907725451-1376", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/fencing-240x120-2967.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/fencing.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/fencing.jpg", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 120
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1855", 
	"align" => "left", 
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
	"element_id" => "object-1432907725451-1964", 
	"row" => 10
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097025345-1283", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097025315-1201"
));

$main->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432907729570-1303", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432907729570-1105", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 6
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097025346-1443", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097025315-1201"
));

$main->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1434097020513-1720", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: left;\"><a target=\"_self\" href=\"" . get_site_url() . "/service-fenc/\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"uf_font_icon\" style=\"font-size: 24px; top: 0px;\" rel=\"font-size: 24px; top: 0px;\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"font-size: 24px; top: 0px;\">j</span>​</span></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1434097020513-1188", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097025347-1798", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097025315-1201"
));

$main->add_group(array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-group-1434097123234-1274", 
"type" => "ModuleGroup", 
"wrapper_id" => "wrapper-1434097035151-1973", 
"original_col" => 6, 
"background_color" => "rgba(137,77,77,0)", 
"background_style" => "full", 
"background_position_y" => 50, 
"background_position_x" => 50, 
"use_padding" => "", 
"background_type" => "color", 
"anchor" => "", 
"theme_style" => "no-y-padding", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 9, 
		"order" => 3, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 3, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 3, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 6, 
		"order" => 0,
		"top" => 6
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0,
		"top" => 6
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 6, 
		"order" => 0, 
		"top" => 6
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432907581379-1172", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Plumbing <span class=\"uf_font_icon\" style=\"font-size: 20px; top: 0px;\" rel=\"font-size: 20px; top: 0px;\" data-verified=\"redactor\">e</span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432907581379-1725", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097123259-1248", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097123234-1274"
));

$main->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432907585889-1744", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/plumbing-240x120-3656.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/plumbing.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/plumbing.jpg", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 120
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1854", 
	"align" => "left", 
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
	"element_id" => "object-1432907585890-1956", 
	"row" => 10
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097123260-1313", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097123234-1274"
));

$main->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432907592018-1582", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"upfront_theme_color_0\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span></p>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432907592019-1426", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 6
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097123261-1229", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097123234-1274"
));

$main->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1434097086405-1836", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><a target=\"_self\" href=\"" . get_site_url() . "/service-plumb/\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"uf_font_icon\" style=\"font-size: 24px; top: 0px;\" rel=\"font-size: 24px; top: 0px;\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"font-size: 24px; top: 0px;\">j</span>​</span></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1434097086405-1054", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097123262-1184", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097123234-1274"
));

$main->add_group(array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-group-1434097070438-1555", 
"type" => "ModuleGroup", 
"wrapper_id" => "wrapper-1434097032655-1546", 
"original_col" => 6, 
"background_color" => "rgba(137,77,77,0)", 
"background_style" => "full", 
"background_position_y" => 50, 
"background_position_x" => 50, 
"use_padding" => 0, 
"background_type" => "color", 
"anchor" => "", 
"theme_style" => "no-y-padding", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 9, 
		"order" => 6, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 6, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 6, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6, 
		"order" => 0,
		"top" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0,
		"top" => 6
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 6, 
		"order" => 0,
		"top" => 6
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432908381416-1617", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"redactor-invisible-space\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"redactor-invisible-space\"><span class=\"redactor-invisible-space\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"redactor-invisible-space\"><span class=\"uf_font_icon\" style=\"font-size: 20px; top: 0px;\" rel=\"font-size: 20px; top: 0px;\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"font-size: 20px; top: 0px;\">h</span><span class=\"redactor-invisible-space\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"redactor-invisible-space\">​</span></span>&nbsp;Windows</span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432908381416-1832", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097070468-1557", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097070438-1555"
));

$main->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432908385199-1821", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/windows-240x120-2392.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/windows.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/windows.jpg", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 120
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1856", 
	"align" => "left", 
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
	"element_id" => "object-1432908385199-1145", 
	"row" => 10
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097070469-1326", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097070438-1555"
));

$main->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432908389389-1130", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432908389389-1643", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 6
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097070470-1359", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097070438-1555"
));

$main->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1434097055602-1735", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: left;\"><a target=\"_self\" href=\"" . get_site_url() . "/service-windows/\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"uf_font_icon\" style=\"font-size: 24px; top: 0px;\" rel=\"font-size: 24px; top: 0px;\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"font-size: 24px; top: 0px;\">j</span>​</span></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1434097055602-1399", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097070471-1550", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097070438-1555"
));

$main->add_group(array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-group-1434097118251-1158", 
"type" => "ModuleGroup", 
"wrapper_id" => "wrapper-1434097141114-1989", 
"original_col" => 6, 
"background_color" => "rgba(137,77,77,0)", 
"background_style" => "full", 
"background_position_y" => 50, 
"background_position_x" => 50, 
"use_padding" => "", 
"background_type" => "color", 
"anchor" => "", 
"theme_style" => "no-y-padding", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 9, 
		"order" => 4, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 4, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 4, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 6, 
		"order" => 0,
		"top" => 6
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0,
		"top" => 6
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 6, 
		"col" => 6, 
		"order" => 0, 
		"top" => 6
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432907463652-1533", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Electrical <span class=\"uf_font_icon\" style=\"font-size: 20px; top: 0px;\" rel=\"font-size: 20px; top: 0px;\" data-verified=\"redactor\">f</span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432907463652-1107", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097124463-1746", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097118251-1158"
));

$main->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432907469177-1298", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/electrical-240x120-6804.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/electrical.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/electrical.jpg", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 120
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1879", 
	"align" => "left", 
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
	"element_id" => "object-1432907469177-1868", 
	"row" => 10
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097124467-1430", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097118251-1158"
));

$main->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432907475013-1911", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"upfront_theme_color_0\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span></p>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432907475014-1728", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 6
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097124471-1981", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097118251-1158"
));

$main->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1434097047547-1865", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><a target=\"_self\" href=\"" . get_site_url() . "/service-electrical/\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"uf_font_icon\" style=\"font-size: 24px; top: 0px;\" rel=\"font-size: 24px; top: 0px;\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"font-size: 24px; top: 0px;\">j</span>​</span></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1434097047547-1393", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097124474-1411", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097118251-1158"
));

$main->add_group(array(
"columns" => "6", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-group-1434097096527-1352", 
"type" => "ModuleGroup", 
"wrapper_id" => "wrapper-1434097148896-1902", 
"original_col" => 6, 
"background_color" => "rgba(137,77,77,0)", 
"background_style" => "full", 
"background_position_y" => 50, 
"background_position_x" => 50, 
"use_padding" => "", 
"background_type" => "color", 
"anchor" => "", 
"theme_style" => "no-y-padding", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 9, 
		"order" => 7, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 7, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 7, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 3, 
		"col" => 6, 
		"order" => 0,
		"top" => 6
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0,
		"top" => 6
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 6, 
		"col" => 6, 
		"order" => 0,
		"top" => 6
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432908458117-1775", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"redactor-invisible-space\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"redactor-invisible-space\"><span class=\"redactor-invisible-space\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"redactor-invisible-space\"><span class=\"redactor-invisible-space\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"redactor-invisible-space\"><span class=\"uf_font_icon\" style=\"font-size: 20px; top: 0px;\" rel=\"font-size: 20px; top: 0px;\" data-verified=\"redactor\">i</span><span class=\"redactor-invisible-space\">​</span></span></span>&nbsp;Roofing</span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432908458117-1407", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097096555-1720", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097096527-1352"
));

$main->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432908462722-1328", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/roof-240x120-1532.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/roof.jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-services-inner/roof.jpg", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => false, 
	"image_link" => "", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"fullSize" => array(
		"width" => 240, 
		"height" => 120
		), 
	"position" => array(
		"top" => 0, 
		"left" => 0
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 240, 
		"height" => 120
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1858", 
	"align" => "left", 
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
	"element_id" => "object-1432908462722-1875", 
	"row" => 6
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097096556-1334", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
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
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097096527-1352"
));

$main->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1432908468172-1114", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432908468172-1266", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 19
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097096557-1538", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097096527-1352"
));

$main->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1434097091758-1039", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: left;\"><a target=\"_self\" href=\"" . get_site_url() . "/service-roof/\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><span class=\"uf_font_icon\" style=\"font-size: 24px; top: 0px;\" rel=\"font-size: 24px; top: 0px;\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"font-size: 24px; top: 0px;\">j</span>​</span></a></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1434097091759-1489", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1434097096558-1816", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 4, 
		"order" => 0
		)
	), 
"group" => "module-group-1434097096527-1352"
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

