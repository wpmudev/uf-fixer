<?php
$footer = upfront_create_region(
	array(
		"name" => "footer",
		"title" => "Footer",
		"type" => "wide",
		"scope" => "local",
		"container" => "footer",
		"position" => 1,
		"allow_sidebar" => true
	),
	array(
		"row" => 12,
		"background_type" => "color",
		"nav_region" => "",
		"background_color" => "rgba(44,44,44,1)",
		"expand_lock" => false,
		"breakpoint" => array(
			"tablet" => array(
				"edited" => false
			),
			"mobile" => array(
				"edited" => false
			)
		)
	)
);

$footer->add_element("Uimage", array(
	"columns" => "3",
	"margin_left" => "0",
	"margin_right" => "0",
	"margin_top" => "4",
	"margin_bottom" => "0",
	"id" => "module-1406217409056-1339",
	"rows" => 10,
	"options" => array(
		"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo-white-100x20-3868-100x20-8648.png",
		"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo-white-100x20-3868.png",
		"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo-white-100x20-3868.png",
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
		"anchor" => ""
	),
	"wrapper_id" => "wrapper-1422423110832-1961",
	"sticky" => false,
	"new_line" => "true",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 4
		),
		"mobile" => array(
			"edited" => false,
			"col" => 5
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 1,
			"col" => 3
		),
		"mobile" => array(
			"edited" => false,
			"left" => 2,
			"col" => 3
		)
	)
));

$footer->add_element("PlainTxt", array(
	"columns" => "6",
	"margin_left" => "0",
	"margin_right" => "0",
	"margin_top" => "4",
	"margin_bottom" => "0",
	"id" => "module-1406217940549-1616",
	"rows" => 12,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<p class=\"\" style=\"text-align: center;\">
	<span class=\"inline_color\">©</span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"> 2oo6-2014 Fixer Pty Ltd</span>
</p>",
		"type" => "PlainTxtModel",
		"element_id" => "text-object-1406217940549-1478",
		"class" => "c24 upfront-plain_txt",
		"has_settings" => 1,
		"row" => 6,
		"is_edited" => true,
		"border_style" => "none",
		"border_width" => 1,
		"border_color" => "",
		"bg_color" => "",
		"theme_style" => "plaintext-footer",
		"anchor" => ""
	),
	"wrapper_id" => "wrapper-1422423110834-1972",
	"sticky" => false,
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 6
		),
		"mobile" => array(
			"edited" => false,
			"col" => 7
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 0,
			"col" => 6
		),
		"mobile" => array(
			"edited" => false,
			"left" => 0,
			"col" => 7
		)
	)
));

$footer->add_element("PlainTxt", array(
	"columns" => "7",
	"margin_left" => "4",
	"margin_right" => "0",
	"margin_top" => "5",
	"margin_bottom" => "0",
	"id" => "module-1406218508045-1635",
	"rows" => 12,
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
		"border_color" => "",
		"bg_color" => "",
		"theme_style" => "plaintext-footer",
		"anchor" => ""
	),
	"wrapper_id" => "wrapper-1422423110835-1937",
	"sticky" => false,
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 8
		),
		"mobile" => array(
			"edited" => false,
			"col" => 7
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => true,
			"left" => 0,
			"col" => 8,
			"top" => 0
		),
		"mobile" => array(
			"edited" => false,
			"left" => 0,
			"col" => 7
		)
	)
));

$footer->add_element("PlainTxt", array(
	"columns" => "4",
	"margin_left" => "0",
	"margin_right" => "0",
	"margin_top" => "5",
	"margin_bottom" => "0",
	"id" => "module-1406218404636-1484",
	"rows" => 10,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<p class=\"\" style=\"text-align: center;\">
	<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><a href=\"" . get_site_url() . "/terms\">Terms</a> - <a href=\"" . get_site_url() . "/privacy\">Privary</a></span>
</p>",
		"type" => "PlainTxtModel",
		"element_id" => "text-object-1406218404628-1646",
		"class" => "c24 upfront-plain_txt",
		"has_settings" => 1,
		"row" => 10,
		"is_edited" => true,
		"border_style" => "none",
		"border_width" => 1,
		"border_color" => "",
		"bg_color" => "",
		"theme_style" => "plaintext-footer",
		"anchor" => "",
		"breakpoint" => array(
			"mobile" => array(
				"row" => 15
			)
		)
	),
	"wrapper_id" => "wrapper-1422423110836-1750",
	"sticky" => false,
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 4
		),
		"mobile" => array(
			"edited" => false,
			"col" => 7
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => true,
			"left" => 0,
			"col" => 4,
			"top" => 0
		),
		"mobile" => array(
			"edited" => true,
			"left" => 0,
			"col" => 7,
			"row" => 15,
			"top" => 1
		)
	)
));

$regions->add($footer);

