<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$slider = upfront_create_region(
			array(
"name" => "slider", 
"title" => "Slider", 
"type" => "wide", 
"scope" => "local", 
"container" => "slider", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 184, 
"background_type" => "slider", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_slider_rotate" => true, 
"background_slider_rotate_time" => 5, 
"background_slider_control" => "always", 
"background_slider_transition" => "crossfade", 
"background_slider_images" => array("/images/slider-a.jpg", "/images/slider-b.jpg", "/images/slider-c.jpg", "/images/slider-d.jpg", "/images/slider-e.jpg")
)
			);

$slider->add_element("PlainTxt", array(
"columns" => "18", 
"margin_left" => "6", 
"margin_right" => "0", 
"margin_top" => "53", 
"margin_bottom" => "0", 
"id" => "module-1405538329123-1568", 
"rows" => 54, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: right;\" class=\"\">We Build<br>And Fix</h1>", 
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
	"row" => 54
	), 
"wrapper_id" => "wrapper-1413426797464-1674", 
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

$slider->add_element("Button", array(
"columns" => "4", 
"margin_left" => "16", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1412693769329-1564", 
"rows" => 15, 
"options" => array(
	"content" => "Get a quote", 
	"href" => "" . get_site_url() . "/#quote", 
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
"wrapper_id" => "wrapper-1414410187134-1466", 
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

$slider->add_element("Button", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1412693935237-1809", 
"rows" => 15, 
"options" => array(
	"content" => "View Service", 
	"href" => "" . get_site_url() . "/#services", 
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
"wrapper_id" => "wrapper-1414410194085-1439", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 4
		), 
	"mobile" => array(
		"col" => 4
		)
	)
));

$regions->add($slider);

$services = upfront_create_region(
			array(
"name" => "services", 
"title" => "Services", 
"type" => "wide", 
"scope" => "local", 
"container" => "services", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 296, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)", 
"background_style" => "fixed", 
"background_position_y" => "59", 
"background_position_x" => "52", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/spanner.jpg", 
"background_image_ratio" => 2.33, 
"background_repeat" => "no-repeat", 
"background_position" => "52% 59%"
)
			);

$services->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "30", 
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
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "services"
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

$services->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "1", 
"margin_bottom" => "0", 
"id" => "module-1412753049856-1341", 
"rows" => 60, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: center;\" class=\"\">Premier<br>Service &amp; Quality</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412753049855-1267", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 60, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
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

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1412753565271-1173", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: right;\" class=\"\">Bricklaying  <span class=\"uf_font_icon\">d<br>
</span></h2>", 
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
	"row" => 11
	), 
"wrapper_id" => "wrapper-1416900822536-1508", 
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

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "12", 
"margin_right" => "0", 
"margin_top" => "14", 
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
"wrapper_id" => "wrapper-1416900804963-1795", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("Uimage", array(
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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
"wrapper_id" => "wrapper-1416900389460-1990", 
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

$services->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "12", 
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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
"wrapper_id" => "wrapper-1416900400259-1519", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412755116247-1664", 
"rows" => 19, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\">
	Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto<br>
</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412755116246-1165", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 19
	), 
"wrapper_id" => "wrapper-1416901372858-1081", 
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

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "12", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1412758674925-1625", 
"rows" => 24, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758674926-1809", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 24
	), 
"wrapper_id" => "wrapper-1416901378684-1765", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "15", 
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
"wrapper_id" => "wrapper-1416901505442-1576", 
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

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "12", 
"margin_right" => "0", 
"margin_top" => "15", 
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
"wrapper_id" => "wrapper-1416901530722-1559", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("Uimage", array(
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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
"wrapper_id" => "wrapper-1416901537370-1412", 
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

$services->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "12", 
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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
"wrapper_id" => "wrapper-1416901556206-1438", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("PlainTxt", array(
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
	"content" => "<p class=\"\" style=\"text-align: right;\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto<br></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758639158-1230", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1416901593088-1236", 
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

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "12", 
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
"wrapper_id" => "wrapper-1416901605444-1181", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "12", 
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
"wrapper_id" => "wrapper-1416901822253-1905", 
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

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "12", 
"margin_right" => "0", 
"margin_top" => "13", 
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
"wrapper_id" => "wrapper-1416901834851-1774", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("Uimage", array(
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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
"wrapper_id" => "wrapper-1416901744856-1433", 
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

$services->add_element("Uimage", array(
"columns" => "6", 
"margin_left" => "12", 
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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
"wrapper_id" => "wrapper-1416901744859-1792", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("PlainTxt", array(
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
	"content" => "<p class=\"\" style=\"text-align: right;\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el iusto<br></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1412758653429-1692", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 21
	), 
"wrapper_id" => "wrapper-1416972058093-1784", 
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

$services->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "12", 
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
"wrapper_id" => "wrapper-1416972051861-1391", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 18
		), 
	"mobile" => array(
		"col" => 18
		)
	)
));

$services->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1416900356851-1488", 
"rows" => 14, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p>
	<br>
</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1416900356850-1017", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 14
	), 
"wrapper_id" => "wrapper-1416900747782-1547", 
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

$regions->add($services);

$quote = upfront_create_region(
			array(
"name" => "quote", 
"title" => "Quote", 
"type" => "wide", 
"scope" => "local", 
"container" => "quote", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 148, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(214,230,240,1)"
)
			);

$quote->add_element("PlainTxt", array(
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
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "quote", 
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

$quote->add_element("PlainTxt", array(
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

$quote->add_element("PlainTxt", array(
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

$quote->add_element("PlainTxt", array(
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

$quote->add_element("PlainTxt", array(
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

$quote->add_element("Ucontact", array(
"columns" => "8", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1413175385317-1417", 
"rows" => 87, 
"options" => array(
	"form_add_title" => array(), 
	"form_title" => "Contact form", 
	"form_name_label" => "Name", 
	"form_email_label" => "Email Address", 
	"form_email_to" => "sergey@incsub.com", 
	"show_subject" => array(), 
	"form_subject_label" => "Your subject:", 
	"form_default_subject" => "Sent from the website", 
	"form_message_label" => "Type your enquire here ...", 
	"form_button_text" => "Get A Quote", 
	"form_validate_when" => "submit", 
	"form_label_position" => "over", 
	"type" => "UcontactModel", 
	"view_class" => "UcontactView", 
	"class" => "c24 upfront-contact-form", 
	"has_settings" => 1, 
	"id_slug" => "ucontact", 
	"element_id" => "ucontact-object-1413175385312-1163", 
	"anchor" => "", 
	"theme_style" => "ucontact-quote-style"
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

$quote->add_element("Uimage", array(
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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

$quote->add_element("PlainTxt", array(
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

$quote->add_element("Uimage", array(
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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

$quote->add_element("PlainTxt", array(
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

$regions->add($quote);

$blog_header = upfront_create_region(
			array(
"name" => "blog-header", 
"title" => "Blog Header", 
"type" => "wide", 
"scope" => "local", 
"container" => "blog-header", 
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

$blog_header->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-1414410069759-1295", 
"rows" => 6, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 style=\"text-align: start;\" class=\"\">Blog</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1414410069741-1460", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "blog", 
	"row" => 6
	), 
"wrapper_id" => "wrapper-1414410356362-1676", 
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

$blog_header->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406189688409-1108", 
"rows" => 85, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: start;\" class=\"\">Latest<br>News &amp;<br>Tips</h1><h1 class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406189688408-1011", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"theme_style" => "", 
	"anchor" => "", 
	"row" => 85
	), 
"wrapper_id" => "wrapper-1406189688409-1108", 
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

$regions->add($blog_header);

$blog_items = upfront_create_region(
			array(
"name" => "blog-items", 
"title" => "Blog Items", 
"type" => "wide", 
"scope" => "local", 
"container" => "blog-items", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "#ffffff"
)
			);

$blog_items->add_element("Uposts", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1413385026013-1697", 
"rows" => 75, 
"options" => array(
	"type" => "UpostsModel", 
	"view_class" => "UpostsView", 
	"has_settings" => 1, 
	"class" => "c24 uposts-object", 
	"id_slug" => "uposts", 
	"post_type" => "post", 
	"taxonomy" => "", 
	"term" => "", 
	"limit" => "3", 
	"content_type" => "excerpt", 
	"featured_image" => 1, 
	"pagination" => 0, 
	"prev" => "Next Page »", 
	"next" => "", 
	"post_data" => array("author", "date", "comments_count", "featured_image"), 
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
	"element_id" => "uposts-object-1413385026001-1109", 
	"order" => "date", 
	"direction" => "DESC", 
	"anchor" => "", 
	"theme_style" => "uposts-mainpage-style"
	), 
"wrapper_id" => "wrapper-1413385931834-1777", 
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

$regions->add($blog_items);

$subscribe = upfront_create_region(
			array(
"name" => "subscribe", 
"title" => "Subscribe", 
"type" => "wide", 
"scope" => "local", 
"container" => "subscribe", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 31, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "#ffffff"
)
			);

$subscribe->add_element("PlainTxt", array(
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

$subscribe->add_element("Button", array(
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

$subscribe->add_element("Button", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1412845951334-1388", 
"rows" => 15, 
"options" => array(
	"content" => "View blog", 
	"href" => "" . get_site_url() . "/blog", 
	"align" => "center", 
	"type" => "ButtonModel", 
	"view_class" => "ButtonView", 
	"element_id" => "button-object-1412845951334-1229", 
	"class" => "c24 upfront-button", 
	"has_settings" => 1, 
	"id_slug" => "button", 
	"currentpreset" => "black-borders-button", 
	"theme_style" => "black-borders-button-extra", 
	"row" => 15, 
	"is_edited" => true
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

$regions->add($subscribe);

$about = upfront_create_region(
			array(
"name" => "about", 
"title" => "About", 
"type" => "wide", 
"scope" => "local", 
"container" => "about", 
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

$about->add_element("PlainTxt", array(
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
	"row" => 13, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "about"
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

$about->add_element("PlainTxt", array(
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

$about->add_element("PlainTxt", array(
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

$about->add_element("PlainTxt", array(
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

$about->add_element("PlainTxt", array(
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

$about->add_element("Uimage", array(
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
	"caption_position" => false, 
	"caption_alignment" => false, 
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

$about->add_element("PlainTxt", array(
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

$about->add_element("Code", array(
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

$regions->add($about);

$coverage = upfront_create_region(
			array(
"name" => "coverage", 
"title" => "Coverage", 
"type" => "wide", 
"scope" => "local", 
"container" => "coverage", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "#ffffff"
)
			);

$coverage->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1414410356937-1690", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"></p><h3 class=\"\" style=\"text-transform: none; text-align: center;\">Coverage Area</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1414410356935-1820", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"anchor" => "coverage", 
	"row" => 17
	), 
"wrapper_id" => "wrapper-1414410437674-1593", 
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

$coverage->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
"margin_bottom" => "0", 
"id" => "module-1406200069453-1687", 
"rows" => 91, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"></h3><h1 style=\"text-align: center;\" class=\"\">Anywhere within<br>40km radius<br>from CBD</h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><h1 class=\"\"></h1><h1 class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406200069452-1923", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 91, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"theme_style" => "plaintext-text-25-lineheight", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1406200069453-1687", 
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

$regions->add($coverage);

$contact = upfront_create_region(
			array(
"name" => "contact", 
"title" => "Contact", 
"type" => "wide", 
"scope" => "local", 
"container" => "contact", 
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

$contact->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "4", 
"margin_bottom" => "0", 
"id" => "module-1412850227558-1156", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 style=\"text-align: start;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Ready to talk to our staff with enquires &amp; questions?</span></h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1412850227556-1966", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1413382904694-1241", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 10
		), 
	"mobile" => array(
		"col" => 10
		)
	)
));

$contact->add_element("Ucontact", array(
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
	"theme_style" => "ucontact-contact-style", 
	"anchor" => "", 
	"row" => ""
	), 
"wrapper_id" => "wrapper-1413382910819-1693", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 10
		), 
	"mobile" => array(
		"col" => 10
		)
	)
));

$regions->add($contact);

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

$prefooter->add_element("Unewnavigation", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1416972431475-1431", 
"rows" => 8, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 19, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Cases", 
			"menu-item-url" => "" . get_site_url() . "/cases/", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "19", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 20, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Archive", 
			"menu-item-url" => "" . get_site_url() . "/?s=", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "20", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			)), 
	"menu_style" => "horizontal", 
	"menu_alignment" => "center", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"element_id" => "unewnavigation-object-1416972431472-1163", 
	"initialized" => false, 
	"menu_id" => false, 
	"menu_slug" => "footer-fixer-menu", 
	"row" => 8, 
	"burger_menu" => array(), 
	"burger_alignment" => "left", 
	"burger_over" => "over", 
	"is_floating" => array(), 
	"anchor" => "", 
	"breakpoint" => array(
		"desktop" => array(
			"burger_alignment" => "left", 
			"burger_over" => "over", 
			"width" => 1080
			)
		)
	), 
"wrapper_id" => "wrapper-1416975107785-1935", 
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

$prefooter->add_element("PlainTxt", array(
"columns" => "9", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "4", 
"margin_bottom" => "0", 
"id" => "module-1406205224243-1651", 
"rows" => 24, 
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
	"row" => 24
	), 
"wrapper_id" => "wrapper-1416975107801-1075", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 10
		), 
	"mobile" => array(
		"col" => 10
		)
	)
));

$prefooter->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406209692911-1852", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<a href=\"#quote\" rel=\"anchor\" class=\"\"><h4 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span> &nbsp;Get</h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;A Quote</h4></a>", 
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
"wrapper_id" => "wrapper-1416975128597-1981", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 6
		), 
	"mobile" => array(
		"col" => 6
		)
	)
));

$prefooter->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "1", 
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
	"
	), 
"wrapper_id" => "wrapper-1416975139250-1288", 
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

