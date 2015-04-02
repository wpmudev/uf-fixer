<?php

$prefooter = upfront_create_region(
	array(
		"name" => "prefooter",
		"title" => "Pre-Footer",
		"type" => "wide",
		"scope" => "global",
		"container" => "prefooter",
		"position" => 1,
		"allow_sidebar" => true
	),
	array(
		"row" => 47,
		"background_type" => "color",
		"nav_region" => "",
		"background_color" => "rgba(51,51,51,1)",
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

$prefooter->add_element("PlainTxt", array(
	"columns" => "9",
	"margin_left" => "1",
	"margin_right" => "0",
	"margin_top" => "12",
	"margin_bottom" => "0",
	"id" => "module-1406205224243-1651",
	"rows" => 24,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<h3 class=\"\"></h3>
<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">
<h4><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Spread the word.</span></h4>
<div>
	<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><br>
	</span>
</div>
</span>
<h3 class=\"\"></h3>
<h3 class=\"\"><span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(87, 85, 85)\" data-redactor-style=\"color: rgb(87, 85, 85)\"><a href=\"http://facebook.com\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">o</span></a> </span></span> <span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\" data-redactor-style=\"color: rgb(84, 84, 84)\"><a href=\"http://twitter.com\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">p</span></a></span> <span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\" data-redactor-style=\"color: rgb(84, 84, 84)\"><a href=\"http://plus.google.com\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">q</span></a></span> </span><span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\" data-redactor-style=\"color: rgb(84, 84, 84)\"><a href=\"http://pinterest.com\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">r</span></a></span></span></span></h3>",
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
		"row" => 24
	),
	"wrapper_id" => "wrapper-1419232674063-1998",
	"sticky" => false,
	"new_line" => "true",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 11,
			"clear" => true,
			"order" => 0
		),
		"mobile" => array(
			"edited" => false,
			"col" => 7,
			"clear" => false,
			"order" => 0
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 1,
			"col" => 10,
			"order" => 0
		),
		"mobile" => array(
			"edited" => false,
			"left" => 0,
			"col" => 7,
			"order" => 0
		)
	)
));

$prefooter->add_element("PlainTxt", array(
	"columns" => "5",
	"margin_left" => "1",
	"margin_right" => "0",
	"margin_top" => "5",
	"margin_bottom" => "0",
	"id" => "module-1406209692911-1852",
	"rows" => 25,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<p class=\"\">
	<a rel=\"anchor\" class=\"\" href=\"#quote\"></a>
</p>
<h4 class=\"\"><a rel=\"anchor\" class=\"\" href=\"#quote\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 65px; top: 35px;\" rel=\"position: relative; font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\" data-redactor-style=\"color: rgb(156, 203, 216)\">n</span></span><span class=\"upfront_theme_color_0\">Get</span></a></h4>
<h4 class=\"\" style=\"margin-left: 60px;\" rel=\"margin-left: 60px;\"><span class=\"upfront_theme_color_0\"><a rel=\"anchor\" class=\"\" href=\"#quote\">A Quote</a></span></h4>",
		"type" => "PlainTxtModel",
		"element_id" => "text-object-1406209692910-1396",
		"class" => "c24 upfront-plain_txt",
		"has_settings" => 1,
		"is_edited" => true,
		"row" => 25,
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
	"wrapper_id" => "wrapper-1419232674066-1955",
	"sticky" => false,
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 9,
			"clear" => true,
			"order" => 0
		),
		"mobile" => array(
			"edited" => false,
			"col" => 6,
			"clear" => false,
			"order" => 0
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 3,
			"col" => 6,
			"order" => 0
		),
		"mobile" => array(
			"edited" => false,
			"left" => 1,
			"col" => 5,
			"order" => 0
		)
	)
));

$prefooter->add_element("PlainTxt", array(
	"columns" => "7",
	"margin_left" => "1",
	"margin_right" => "0",
	"margin_top" => "9",
	"margin_bottom" => "0",
	"id" => "module-1406210660792-1159",
	"rows" => 25,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<h4 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"> &nbsp;Call us now</span></h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"> &nbsp;1300 Fixer</span></h4>",
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
	",
		"breakpoint" => array(
			"mobile" => array(
				"row" => 38
			)
		)
	),
	"wrapper_id" => "wrapper-1419232674067-1067",
	"sticky" => false,
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 11,
			"clear" => true,
			"order" => 0
		),
		"mobile" => array(
			"edited" => false,
			"col" => 7,
			"clear" => false,
			"order" => 0
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => true,
			"left" => 3,
			"col" => 8,
			"top" => 1
		),
		"mobile" => array(
			"edited" => true,
			"left" => 1,
			"col" => 6,
			"top" => 0,
			"row" => 38
		)
	)
));

$regions->add($prefooter);

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
	<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><a href=\"" . get_site_url() . "/terms\">Terms</a> - <a href=\"" . get_site_url() . "/privacy\">Privacy</a></span>
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

