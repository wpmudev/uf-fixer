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
"row" => 358, 
"background_type" => "color", 
"background_color" => "#ufc4", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"row" => 406
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 439
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"row" => 361
		)
	), 
"use_padding" => 0, 
"sub_regions" => array(false)
)
			);

$main->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1432911649645-1709", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">About</h2>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432911649644-1060", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
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
"wrapper_id" => "wrapper-1432911660635-1409", 
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
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
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
"id" => "module-1432911660744-1583", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">Meet Mr Fixer</h1>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432911660743-1820", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 7, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432911696389-1388", 
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
		"order" => 4
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 4
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"order" => 4
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1432911696509-1241", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit Ut wisi enim ad minim veniam, quis nostrud esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432911696508-1084", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 31
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432911915038-1524", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 10, 
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
		"col" => 9, 
		"order" => 2, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 1
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 1
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 7, 
		"order" => 1
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1432911934076-1287", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea Ut wisi enim ad minim veniam, quis nostrud commodo consequat</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432911934076-1929", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 31
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432911936387-1136", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 10, 
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
		"col" => 7, 
		"order" => 3, 
		"clear" => false
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 2, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 2, 
		"top" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 10
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1432911945165-1328", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">We will talk to you in a minute.</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432911945165-1344", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 7
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432911945164-1893", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 10, 
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
		"col" => 10, 
		"order" => 4, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 3, 
		"top" => 0
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 3, 
		"top" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 7, 
		"order" => 3, 
		"top" => 0
		)
	), 
"close_wrapper" => false
));

$main->add_element("Uimage", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432911649648-1100", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about-inner/signature-165x101-2110-147x90-7023.png", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about-inner/signature-165x101-2110.png", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about-inner/signature-165x101-2110.png", 
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
		"width" => 147, 
		"height" => 90
		), 
	"fullSize" => array(
		"width" => 165, 
		"height" => 101
		), 
	"position" => array(
		"top" => 0, 
		"left" => -24
		), 
	"marginTop" => 0, 
	"element_size" => array(
		"width" => 195, 
		"height" => 90
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1842", 
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
	"element_id" => "image-1432911649646-1907", 
	"row" => 24, 
	"breakpoint" => array(
		"tablet" => array(
			"row" => 27
			)
		)
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432911945164-1893", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 5, 
		"order" => 5, 
		"top" => 0, 
		"row" => 27
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 1, 
		"col" => 5, 
		"order" => 5, 
		"top" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 5, 
		"order" => 5, 
		"top" => 0
		)
	), 
"close_wrapper" => false
));

$main->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432912018877-1621", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><strong data-redactor-tag=\"strong\" data-verified=\"redactor\">James Woodlock</strong><br>​Owner<br></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1432912018878-1554", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 7
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432911945164-1893", 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 6
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 6
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 6, 
		"top" => 0
		)
	)
));

$main->add_element("Uimage", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1432912171603-1004", 
"options" => array(
	"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-about-inner/fixer-mrfixer-image-1050x569-7934 (1)-1050x569-3667.jpg", 
	"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-about-inner/fixer-mrfixer-image-1050x569-7934 (1).jpg", 
	"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-about-inner/fixer-mrfixer-image-1050x569-7934 (1).jpg", 
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
		"width" => 1050, 
		"height" => 569
		), 
	"fullSize" => array(
		"width" => 1050, 
		"height" => 569
		), 
	"position" => array(
		"top" => -0.5, 
		"left" => 0
		), 
	"marginTop" => 0.5, 
	"element_size" => array(
		"width" => 1050, 
		"height" => 570
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "1843", 
	"align" => "left", 
	"stretch" => true, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"placeholder_class" => "", 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1432912171601-1447", 
	"row" => 40, 
	"anchor" => "", 
	"theme_style" => "u-image-video-thumb"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432912200341-1573", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 12, 
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
		"col" => 18, 
		"order" => 5, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 7, 
		"top" => 4
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 7, 
		"top" => 3
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"order" => 7
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "8", 
"margin_left" => "8", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1432912171600-1326", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: center;\"><strong data-redactor-tag=\"strong\" data-verified=\"redactor\"><span class=\"upfront_theme_color_1\" data-verified=\"redactor\" data-redactor-tag=\"span\" data-redactor-class=\"upfront_theme_color_1\">_____</span></strong></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432912171599-1822", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 11, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "", 
	"theme_style" => "big-dash"
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432912306156-1752", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 10, 
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
		"col" => 13, 
		"order" => 6, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 2, 
		"col" => 8, 
		"order" => 8, 
		"top" => 4
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 8, 
		"top" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 5, 
		"col" => 8, 
		"order" => 8, 
		"top" => 6
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "17", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432912306290-1240", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<blockquote class=\"\">When arriving to live in Brisbane over four years ago, and not knowing any tradesmen in the area, when needing a Plumber, I phoned Fixer. Over that time, any job needed doing, has been carried out quickly and professionally. The workmanship is excellent and I have found the work to be very cost effective. Suggestions were made with a certain job and I am very thrilled with the outcome. I would recommend Fixer to anyone in the future.</blockquote>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432912306290-1795", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 12, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432912411475-1575", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 12, 
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
		"col" => 18, 
		"order" => 7, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 9
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 9
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 18, 
		"order" => 2
		)
	)
));

$main->add_element("PlainTxt", array(
"columns" => "11", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1432912411620-1262", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h5>Mr Bob Woody</h5>
", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1432912411620-1104", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1432912428820-1784", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 8, 
		"clear" => true
		), 
	"mobile" => array(
		"edited" => true, 
		"col" => 7, 
		"order" => 8, 
		"clear" => true
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"col" => 12, 
		"order" => 8, 
		"clear" => true
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 10
		), 
	"mobile" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 7, 
		"order" => 10
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"left" => 0, 
		"col" => 12, 
		"order" => 9, 
		"top" => 0
		)
	)
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

