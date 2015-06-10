<?php
$footer = upfront_create_region(
			array(
"name" => "footer", 
"title" => "Footer", 
"type" => "wide", 
"scope" => "global", 
"container" => "footer", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 14, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(44,44,44,1)", 
"expand_lock" => false, 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"row" => 45
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 24, 
		"row" => 51
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"row" => 34
		)
	), 
"use_padding" => 0, 
"sub_regions" => array("")
)
			);

$footer->add_element("Uimage", array(
"columns" => "3", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1406217409056-1339", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/global-regions/footer/fixer-logo-white-100x20-3868-100x20-8648.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/global-regions/footer/fixer-logo-white-100x20-3868.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/global-regions/footer/fixer-logo-white-100x20-3868.png", 
	"image_title" => "", 
	"alternative_text" => "", 
	"when_clicked" => "external", 
	"image_link" => "" . get_site_url() . "/", 
	"include_image_caption" => false, 
	"image_caption" => "My awesome image caption", 
	"caption_position" => false, 
	"caption_alignment" => false, 
	"caption_trigger" => "always_show", 
	"image_status" => "ok", 
	"size" => array(
		"width" => 100, 
		"height" => 20
		), 
	"fullSize" => array(
		"width" => 100, 
		"height" => 20
		), 
	"position" => array(
		"top" => 0, 
		"left" => -2.5
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 105, 
		"height" => 20
		), 
	"rotation" => 0, 
	"color" => "#ufc0", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1021", 
	"align" => "center", 
	"stretch" => false, 
	"vstretch" => true, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1406217409054-1200", 
	"row" => 4, 
	"anchor" => "", 
	"breakpoint" => array(
		"tablet" => array(
			"row" => 10
			), 
		"custom-1410783666947" => array(
			"row" => 8
			)
		), 
	"link_target" => "_self"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432901119613-1920", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 5, 
		"order" => 0, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 5, 
		"order" => 0, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 5, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 3, 
		"order" => 0, 
		"top" => 6, 
		"row" => 10
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 3, 
		"order" => 0, 
		"top" => 5
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 3, 
		"order" => 0, 
		"top" => 6, 
		"row" => 8
		)
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1406217940549-1616", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">
	<span class=\"inline_color\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"inline_color\"></span><span class=\"upfront_theme_color_0\"><span class=\"inline_color\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"inline_color\">©</span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\" rel=\"color: rgb(255, 255, 255)\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"color: rgb(255, 255, 255)\"> 2oo6-2014 Fixer Pty Ltd</span></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\" rel=\"color: rgb(255, 255, 255)\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-style=\"color: rgb(255, 255, 255)\"></span>
</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406217940549-1478", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 5, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"theme_style" => "u-paragraph-footer", 
	"anchor" => "", 
	"breakpoint" => array(
		"mobile" => array(
			"row" => 7
			)
		)
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432901125988-1285", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 5, 
		"order" => 1, 
		"clear" => false
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 6, 
		"order" => 1, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 5, 
		"order" => 1, 
		"top" => 7
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0, 
		"row" => 7, 
		"top" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"order" => 1, 
		"top" => 6
		)
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1406218508045-1635", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\">
	<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072</span>
</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406218508045-1484", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"theme_style" => "u-paragraph-footer", 
	"anchor" => "", 
	"breakpoint" => array(
		"custom-1410783666947" => array(
			"row" => 9
			), 
		"tablet" => array(
			"row" => 8
			)
		)
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432901173899-1884", 
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
		"edited" => false, 
		"col" => 6, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 3, 
		"col" => 6, 
		"top" => 3, 
		"row" => 8
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 6, 
		"order" => 0, 
		"top" => 6, 
		"row" => 9
		)
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1430897586848-1715", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\"><a target=\"_self\" href=\"" . get_site_url() . "/privacy-inner/\" rel=\"entry\"><span class=\"upfront_theme_color_0\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_0\">Term &amp;&nbsp;Privacy</span></a></span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1430897586849-1508", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"theme_style" => "u-paragraph-footer", 
	"anchor" => ""
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432901167200-1885", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 8, 
		"order" => 3, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 6, 
		"order" => 3, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 11, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 4, 
		"col" => 4, 
		"order" => 0, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 1, 
		"col" => 5, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 7, 
		"col" => 4, 
		"order" => 1, 
		"top" => 0
		)
	)
));

$regions->add($footer);

