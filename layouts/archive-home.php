<?php
$header = upfront_create_region(
        array(
"name" => "header", 
"title" => "Header", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 24, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(254,212,27,1)"
)
        );
$header->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1405520755986-1686-module-module-module-module-module-module", 
"rows" => 4, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/archive-home/logo (1)-116x28-4228.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/archive-home/logo (1).png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/archive-home/logo (1).png', 
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
	"class" => "c24 c24 c24 c24 c24 c24 upfront-image", 
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
"id" => "module-1405520756070-1345-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-navigation", 
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
"id" => "module-1405520755970-1045-module-module-module-module-module-module", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p style=\"text-align: right;\" class=\"\">One call does it all</p><h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">a&nbsp;</span>1300 FIXER</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405520755969-1764", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
$region_2 = upfront_create_region(
        array(
"name" => "region_2", 
"title" => "Region 2", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 188, 
"background_type" => "slider", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_slider_rotate" => true, 
"background_slider_rotate_time" => 5, 
"background_slider_control" => "always", 
"background_slider_transition" => "crossfade", 
"background_slider_images" => array("1366", "1367", "1368", "1369", "1370"), 
"expand_lock" => false
)
        );
$region_2->add_element("PlainTxt", array(
"columns" => "15", 
"margin_left" => "9", 
"margin_right" => "0", 
"margin_top" => "42", 
"margin_bottom" => "0", 
"id" => "module-1405538329123-1568-module-module-module-module-module-module", 
"rows" => 58, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p style=\"text-align: right;\" class=\"\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p style=\"text-align: right;\">We Build</p><p style=\"text-align: right;\">And Fix</p></span><p style=\"text-align: right;\" class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405538329122-1842", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-slider-text", 
	"anchor" => "", 
	"row" => 52
	)
));

$region_2->add_element("Unewnavigation", array(
"columns" => "7", 
"margin_left" => "17", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405685907158-1610-module-module-module-module-module-module", 
"rows" => 14, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 2218, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "View Service", 
			"menu-item-url" => "http://#service", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "2218", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 2219, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Get A Quote", 
			"menu-item-url" => "http://#get-quote", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "2219", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			)), 
	"menu_style" => "vertical", 
	"menu_alignment" => "right", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"element_id" => "unewnavigation-object-1405685907156-1110", 
	"initialized" => false, 
	"menu_id" => "39", 
	"row" => 8, 
	"is_floating" => array(), 
	"theme_style" => "unewnavigation-slider-actions", 
	"anchor" => ""
	)
));

$regions->add($region_2);
$region_3 = upfront_create_region(
        array(
"name" => "region_3", 
"title" => "Region 3", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 296, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)", 
"background_style" => "fixed", 
"background_position_y" => "80", 
"background_position_x" => "52", 
"background_image" => get_stylesheet_directory_uri() . '/images/archive-home/spanner.jpg', 
"background_image_ratio" => 2.33, 
"background_repeat" => "no-repeat", 
"background_position" => "52% 80%"
)
        );
$region_3->add_element("PlainTxt", array(
"columns" => "4", 
"margin_left" => "10", 
"margin_right" => "0", 
"margin_top" => "4", 
"margin_bottom" => "0", 
"id" => "module-1405522949556-1703-module-module-module-module-module-module", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\">Service</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405522949555-1045", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 5, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "service"
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "4", 
"margin_bottom" => "0", 
"id" => "module-1405523049528-1271-module-module-module-module-module-module", 
"rows" => 47, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: center;\" class=\"\">Premier</h1><h1 style=\"text-align: center;\" class=\"\">Service &amp; Quality</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405523049527-1127", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 41, 
	"is_edited" => true
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405596862038-1296-module-module-module-module-module-module", 
"rows" => 74, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"></span><h3 class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"></span>Bricklaying &nbsp;&nbsp;<span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">d</span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper alignright clearfix\" id=\"uinsert-7\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 240px; height: 121px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/bricklaying.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"></p><p class=\"\" style=\"text-align: right;\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto pra<span class=\"inline_color\" style=\"color: rgb(147, 17, 17)\"></span>esent luptatum zzril.</span></p><p class=\"\" style=\"text-align: right;\"></p></span><p class=\"\" style=\"text-align: right;\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">j</span></span></p><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596862037-1055", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 68, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1405596355716-1833-module-module-module-module-module-module", 
"rows" => 70, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"top: 0px; font-size: 25px;\">g &nbsp;</span>Fencing</span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-17\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 240px; height: 122px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/fencing.jpg\"></span>
</div><span class=\"inline_color\" style=\"color: rgb(248, 26, 26)\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Erat volutpat. Ut wisi enim ad minim&nbsp;veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto praesent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p></span></span><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596355715-1674", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 64, 
	"is_edited" => true
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405598481047-1202-module-module-module-module-module-module", 
"rows" => 67, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\">Electrical <span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">f</span></h3><p class=\"\"></p><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-8\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 240px; height: 121px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/electricity.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud&nbsp;exerci&nbsp;tation&nbsp;ullamcorper&nbsp;san et iusto pra<span class=\"inline_color\" style=\"color: rgb(147, 17, 17);\"></span>esent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405598481047-1830", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 61, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405596148086-1896-module-module-module-module-module-module", 
"rows" => 63, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"top: 0px; font-size: 25px;\">h&nbsp;</span> Windows</span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-13\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 242px; height: 121px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/window.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim&nbsp;veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto praesent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596148085-1402", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 57, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405596212011-1573-module-module-module-module-module-module", 
"rows" => 71, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\">Plumping <span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">e</span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix aligncenter ui-resizable\" id=\"uinsert-10\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 240px; height: 123px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/plumping.jpg\"></span>
</div><p class=\"\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto pra<span class=\"inline_color\" style=\"color: rgb(147, 17, 17);\"></span>esent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span><br></span></p><p class=\"\" style=\"text-align: right;\"></p></span><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596212011-1578", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 65
	)
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405598693845-1388-module-module-module-module-module-module", 
"rows" => 70, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"top: 0px; font-size: 25px;\">i&nbsp;</span> Roofing</h3><p class=\"\"></p><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-19\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 240px; height: 123px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/roofing.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim&nbsp;veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto praesent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405598693844-1239", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 64, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	)
));

$regions->add($region_3);
$region_4 = upfront_create_region(
        array(
"name" => "region_4", 
"title" => "Region 4", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 57, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "#ffffff"
)
        );
$region_4->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "12", 
"margin_bottom" => "0", 
"id" => "module-1405602642892-1614-module-module-module-module-module-module", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">In Emergency, call us now! Otherwise follow the steps below ...</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405602642891-1538", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true
	)
));

$region_4->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405603545291-1575-module-module-module-module-module-module", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">First Thing First</span></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1405603545292-1703", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true
	)
));

$regions->add($region_4);
$region_5_left = upfront_create_region(
        array(
"name" => "region_5_left", 
"title" => "region-5 Left", 
"type" => "wide", 
"scope" => "local"
),
        array(
"col" => 9, 
"background_type" => "color", 
"background_color" => "rgba(214,230,240,1)"
)
        );
$region_5_left->add_element("PlainTxt", array(
"columns" => "9", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "12", 
"margin_bottom" => "0", 
"id" => "module-1405684577740-1320-module-module-module-module-module-module", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\">1. Get a Quote</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405684577739-1682", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "getquote"
	)
));

$regions->add($region_5_left);
$region_5 = upfront_create_region(
        array(
"name" => "region_5", 
"title" => "Region 5", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 108
)
        );
$region_5->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1405604490158-1724-module-module-module-module-module-module", 
"rows" => 124, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\">2. We Roll</h2><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix ui-resizable\" id=\"uinsert-7\" style=\"display: block; width: 195px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 225px; height: 97px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/van.png\"></span>
</div><p class=\"\">It works as smooth as new. quis nostrud exerci tation ullamcorper san et iusto praesent luptatum zzril volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci&nbsp;tincidunt&nbsp;ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper &nbsp;tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, nobis eleifend option congue nihil imperdiet doming id quod mazim non habent praesent luptatum zzril delenit erat facer possim assum lorem ipsum.</p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1405604490159-1264", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 118, 
	"is_edited" => true
	)
));

$region_5->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1405603522621-1698-module-module-module-module-module-module", 
"rows" => 121, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\">3.We Fix It</h2><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-3\" style=\"width: 195px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 225px; height: 106px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/cloud.png\"></span>
</div><p class=\"\"></p><p class=\"\"></p><p class=\"\">It works as smooth as new. quis nostrud exerci tation ullamcorper san et iusto praesent luptatum zzril volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper &nbsp;tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, nobis eleifend option congue nihil imperdiet doming id quod mazim non habent praesent luptatum zzril delenit erat facer possim assum lorem ipsum.</p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405603522620-1613", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 115, 
	"is_edited" => true
	)
));

$regions->add($region_5);
$region_6 = upfront_create_region(
        array(
"name" => "region_6", 
"title" => "Region 6", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 106, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "full", 
"background_position_y" => "50", 
"background_position_x" => "50", 
"background_image" => get_stylesheet_directory_uri() . '/images/archive-home/background-leaves.jpg', 
"background_image_ratio" => 0.43
)
        );
$region_6->add_element("PlainTxt", array(
"columns" => "11", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "14", 
"margin_bottom" => "0", 
"id" => "module-1406189688409-1108-module-module-module-module-module-module", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\">Blog</h3><h1 class=\"\">Latest&nbsp;</h1><h1 class=\"\">News &amp;</h1><h1 class=\"\">Tips</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406189688408-1011", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "blog"
	)
));

$regions->add($region_6);
$region_7 = upfront_create_region(
        array(
"name" => "region_7", 
"title" => "Region 7", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 58, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(94,191,107,1)", 
"background_style" => "fixed", 
"background_position_y" => "50", 
"background_position_x" => "100", 
"background_image" => get_stylesheet_directory_uri() . '/images/archive-home/hot (1).jpg', 
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
"id" => "module-1406190416970-1781-module-module-module-module-module-module", 
"rows" => 43, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\">End your day!</h3><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406190416970-1685", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 37, 
	"is_edited" => true
	)
));

$regions->add($region_7);
$region_8 = upfront_create_region(
        array(
"name" => "region_8", 
"title" => "Region 8", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 58, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "fixed", 
"background_position_y" => "50", 
"background_position_x" => "100", 
"background_image" => get_stylesheet_directory_uri() . '/images/archive-home/big-bricks (1).jpg', 
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
"id" => "module-1406190559882-1979-module-module-module-module-module-module", 
"rows" => 49, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">No more leaking pipe!</span></h3><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue.</p><p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406190559882-1589", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 43, 
	"is_edited" => true
	)
));

$regions->add($region_8);
$region_9 = upfront_create_region(
        array(
"name" => "region_9", 
"title" => "Region 9", 
"type" => "wide", 
"scope" => "local"
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
"background_image" => get_stylesheet_directory_uri() . '/images/archive-home/big-roof.jpg', 
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
"id" => "module-1406194567924-1749-module-module-module-module-module-module", 
"rows" => 52, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Smart home, smart roof</span></h3><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dolor sit amet.</p><p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194567924-1392", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 46, 
	"is_edited" => true
	)
));

$regions->add($region_9);
$region_10 = upfront_create_region(
        array(
"name" => "region_10", 
"title" => "Region 10", 
"type" => "wide", 
"scope" => "local"
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
"id" => "module-1406194594842-1402-module-module-module-module-module-module", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Interested to know more tips?</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194594841-1906", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 11, 
	"is_edited" => true
	)
));

$region_10->add_element("Unewnavigation", array(
"columns" => "6", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1406194567990-1562-module-module-module-module-module-module", 
"rows" => 16, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-navigation", 
	"has_settings" => 1, 
	"id_slug" => "unewnavigation", 
	"menu_items" => array(array(
			"menu-item-db-id" => 2843, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "Subcribe", 
			"menu-item-url" => "http://#/subscribe", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "2843", 
			"menu-item-target" => "", 
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 2844, 
			"menu-item-parent-id" => "0", 
			"menu-item-type" => "custom", 
			"menu-item-title" => "View Blog", 
			"menu-item-url" => "http://#/blog", 
			"menu-item-object" => "custom", 
			"menu-item-object-id" => "2844", 
			"menu-item-target" => "", 
			"menu-item-position" => 2
			)), 
	"menu_style" => "vertical", 
	"menu_alignment" => "left", 
	"allow_sub_nav" => array("no"), 
	"allow_new_pages" => array(), 
	"element_id" => "unewnavigation-object-1406194567989-1306", 
	"initialized" => false, 
	"menu_id" => "40", 
	"burger_menu" => array(), 
	"burger_alignment" => "left", 
	"burger_over" => "over", 
	"is_floating" => array(), 
	"theme_style" => "unewnavigation-home-actions-1", 
	"anchor" => "", 
	"row" => 10, 
	"breakpoint" => array(
		"desktop" => array(
			"burger_alignment" => "left", 
			"burger_over" => "over", 
			"width" => 1080
			)
		)
	)
));

$regions->add($region_10);
$region_11 = upfront_create_region(
        array(
"name" => "region_11", 
"title" => "Region 11", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 191, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(255,226,98,1)"
)
        );
$region_11->add_element("PlainTxt", array(
"columns" => "17", 
"margin_left" => "5", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1406194852885-1872-module-module-module-module-module-module", 
"rows" => 48, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">About</span></h3><h1 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Meet Mr Fixer</span></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194852885-1002", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 42, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "about"
	)
));

$region_11->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "19", 
"margin_bottom" => "0", 
"id" => "module-1406196281138-1720-module-module-module-module-module-module", 
"rows" => 56, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit Ut wisi enim ad minim veniam, quis nostrud &nbsp;esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit </p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406196281137-1335", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 50, 
	"is_edited" => true
	)
));

$region_11->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "18", 
"margin_bottom" => "0", 
"id" => "module-1406196781398-1992-module-module-module-module-module-module", 
"rows" => 56, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit Ut wisi enim ad minim veniam, quis nostrud &nbsp;esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit U</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406196781398-1916", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 50, 
	"is_edited" => true
	)
));

$region_11->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "17", 
"margin_bottom" => "0", 
"id" => "module-1406196815834-1847-module-module-module-module-module-module", 
"rows" => 56, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">We will talk to you in a minute</p><p class=\"\">Thank you.</p><p class=\"\"></p><p class=\"\"></p><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix alignleft ui-resizable\" id=\"uinsert-4\" style=\"display: block; width: 164px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 165px; height: 101px\"><img class=\"\" src=\"" . get_site_url() . "/wp-content/uploads/2014/07/signature.png\"></span>
</div><p class=\"\"><strong><br></strong></p><p class=\"\"><strong><br></strong></p><p class=\"\"><strong><br></strong></p><p class=\"\"><strong><br></strong></p><p class=\"\"><strong style=\"font-size: 14px;\">James Woodlock</strong></p><p class=\"\">Owner</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406196815834-1028", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 50, 
	"is_edited" => true
	)
));

$region_11->add_element("Uimage", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1406200069459-1334-module-module-module-module-module-module", 
"rows" => 40, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/archive-home/video-1044x566-2922.jpg', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/archive-home/video.jpg', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/archive-home/video.jpg', 
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
		"width" => 1044, 
		"height" => 566
		), 
	"fullSize" => array(
		"width" => 1044, 
		"height" => 565
		), 
	"position" => array(
		"top" => 0.67707824707031, 
		"left" => -3.4895935058594
		), 
	"marginTop" => -0.67707824707031, 
	"element_size" => array(
		"width" => 1050, 
		"height" => 570
		), 
	"rotation" => 0, 
	"color" => "#ffffff", 
	"background" => "#000000", 
	"captionBackground" => "0", 
	"image_id" => "2899", 
	"align" => "center", 
	"stretch" => false, 
	"vstretch" => false, 
	"quick_swap" => false, 
	"gifImage" => 0, 
	"type" => "UimageModel", 
	"view_class" => "UimageView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 c24 c24 upfront-image", 
	"id_slug" => "image", 
	"element_id" => "image-1406200069456-1997", 
	"theme_style" => "", 
	"anchor" => "", 
	"row" => 34
	)
));

$regions->add($region_11);
$region_12 = upfront_create_region(
        array(
"name" => "region_12", 
"title" => "Region 12", 
"type" => "wide", 
"scope" => "local"
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
"id" => "module-1406200069453-1687-module-module-module-module-module-module", 
"rows" => 52, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"></h3><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h3 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Coverage Area</span></h3><h1 class=\"\"></h1><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 class=\"\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 class=\"\" style=\"text-align: center;\"></h1><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Anywhere within</span></h1><h1 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">40km radius</span></h1><h1 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">from CBD</span></h1></span><h1 class=\"\" style=\"text-align: center;\"></h1></span></span></span><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 class=\"\" style=\"text-align: center;\"></h1></span><h1 class=\"\" style=\"text-align: center;\"></h1></span><h1 class=\"\"></h1></span><h1 class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406200069452-1923", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 46, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-text-25-lineheight", 
	"anchor" => "coveragearea"
	)
));

$regions->add($region_12);
$region_13 = upfront_create_region(
        array(
"name" => "region_13", 
"title" => "Region 13", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 126, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(104,89,154,1)", 
"background_style" => "fixed", 
"background_position_y" => "100", 
"background_position_x" => "100", 
"background_image" => get_stylesheet_directory_uri() . '/images/archive-home/home-dome (1).jpg', 
"background_image_ratio" => 1.05, 
"background_repeat" => "no-repeat", 
"background_position" => "100% 100%"
)
        );
$region_13->add_element("PlainTxt", array(
"columns" => "8", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "16", 
"margin_bottom" => "0", 
"id" => "module-1406205101494-1495-module-module-module-module-module-module", 
"rows" => 22, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Ready to talk to our staff with enquiries &amp; questions?</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406205101494-1264", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 16
	)
));

$region_13->add_element("Ucontact", array(
"columns" => "9", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1406205101532-1649-module-module-module-module-module-module", 
"rows" => 80, 
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
	"form_button_text" => "Send", 
	"form_validate_when" => "submit", 
	"form_label_position" => "over", 
	"type" => "UcontactModel", 
	"view_class" => "UcontactView", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-contact-form", 
	"has_settings" => 1, 
	"id_slug" => "ucontact", 
	"element_id" => "ucontact-object-1406205101531-1670", 
	"theme_style" => "ucontact-home-footer-contact", 
	"anchor" => "", 
	"row" => 74
	)
));

$regions->add($region_13);
$footer = upfront_create_region(
        array(
"name" => "footer", 
"title" => "Footer", 
"type" => "wide", 
"scope" => "local"
),
        array(
"row" => 42, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)"
)
        );
$footer->add_element("PlainTxt", array(
"columns" => "8", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "12", 
"margin_bottom" => "0", 
"id" => "module-1406205224243-1651-module-module-module-module-module-module", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"></h3><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h3 class=\"\">Spread the word.</h3><h3 class=\"\">Share it with some friends.</h3></span><h3 class=\"\"></h3><h3 class=\"\"><span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(87, 85, 85)\"><a href=\"http://facebook.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">o</span></a> </span></span> <span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://twitter.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">p</span></a></span> <span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://plus.google.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">q</span></a></span>&nbsp;</span><span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://pinterest.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">r</span></a></span></span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406205224243-1348", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer-social", 
	"anchor" => "", 
	"row" => 7
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "3", 
"margin_right" => "0", 
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1406209692911-1852-module-module-module-module-module-module", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 57px; top: 34px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Get</span>&nbsp;</h3><h3 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">A Quote</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406209692910-1396", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 10, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-footer-social", 
	"anchor" => ""
	)
));

$footer->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1406210660792-1159-module-module-module-module-module-module", 
"rows" => 22, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 48px; top: 28px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Call us now</span></h3><h3 class=\"\" style=\"margin-left: 40px;\">&nbsp; <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">1300 Fixer</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406210660791-1219", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
"scope" => "local"
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
"id" => "module-1406217409056-1339-module-module-module-module-module-module", 
"rows" => 10, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/archive-home/logo-white-92x20-3728.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/archive-home/logo-white.png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/archive-home/logo-white.png', 
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
	"class" => "c24 c24 c24 c24 c24 c24 upfront-image", 
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
"id" => "module-1406217940549-1616-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">© 2oo6-2014 Fixer Pty Ltd</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406217940549-1478", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
"id" => "module-1406218508045-1635-module-module-module-module-module-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406218508045-1484", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
"id" => "module-1406218404636-1484-module-module-module-module-module-module", 
"rows" => 8, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">TOU &amp; Privary</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406218404628-1646", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
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
