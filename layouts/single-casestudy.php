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
"background_color" => "#fff"
)
        );
$header->add_element("Uimage", array(
"columns" => "4", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "9", 
"margin_bottom" => "0", 
"id" => "module-1405520755986-1686-module", 
"rows" => 4, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/logo (1)-116x28-4228.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/logo (1).png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/logo (1).png', 
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
	"class" => "c24 upfront-image", 
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
"id" => "module-1405520756070-1345-module", 
"rows" => 12, 
"options" => array(
	"type" => "UnewnavigationModel", 
	"view_class" => "UnewnavigationView", 
	"class" => "c24 c24 upfront-navigation", 
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
"id" => "module-1405520755970-1045-module", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p style=\"text-align: right;\" class=\"\">One call does it all</p><h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">a&nbsp;</span>1300 FIXER</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405520755969-1764", 
	"class" => "c24 c24 upfront-plain_txt", 
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
"scope" => "local"
),
        array(
"row" => 140, 
"background_type" => "color", 
"background_color" => "#c5d0db"
)
        );
$main->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1407250114380-1665-module-module-module-module-module", 
"rows" => 14, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">Case Study</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407250114379-1090", 
	"class" => "c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true
	)
));

$main->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407250139415-1897-module-module-module-module-module", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">Issue Resolved!</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407250139414-1484", 
	"class" => "c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 4, 
	"is_edited" => true
	)
));

$main->add_element("Ugallery", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1407250114394-1623-module-module-module-module-module", 
"rows" => 48, 
"options" => array(
	"type" => "UgalleryModel", 
	"view_class" => "UgalleryView", 
	"has_settings" => 0, 
	"class" => "c24 c24 c24 c24 c24 c24 upfront-gallery", 
	"id_slug" => "ugallery", 
	"status" => "", 
	"images" => array(array(
			"id" => "4007", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1.jpg', 210, 213, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1.jpg', 210, 213, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1.jpg', 210, 213, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1-140x140-5393.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 213
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 1
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 142
							), 
						"id" => 4007, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 213
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 1
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image1-210x210-2021.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 2, 
				"left" => 0
				)
			), array(
			"id" => "4008", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2-140x140-4931.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4008, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image2-210x210-7313.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4009", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3-140x140-2798.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4009, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image3-210x210-7975.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4010", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4-140x140-7774.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4010, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image4-210x210-7236.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4011", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5-140x140-9351.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4011, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image5-210x210-3471.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4012", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6-140x140-5463.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4012, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image6-210x210-1121.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4014", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7-140x140-1337.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4014, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image7-210x210-7157.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4015", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8-140x140-6574.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4015, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image8-210x210-4720.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4019", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10-140x140-2819.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4019, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image10-210x210-2933.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4021", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11-140x140-4758.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4021, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"top" => 0, 
				"left" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image11-210x210-6429.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4023", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12-140x140-9602.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4023, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image12-210x210-2484.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4024", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13-140x140-8576.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4024, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13-210x210-7403.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4027", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15-140x140-7672.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4027
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"top" => 0, 
				"left" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image15-210x210-6958.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4029", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14.jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14.jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14.jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14.jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14-140x140-5317.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14.jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4029
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image14-210x210-2212.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			), array(
			"id" => "4031", 
			"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1).jpg', 
			"sizes" => array(
				"thumbnail" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1)-150x150.jpg', 150, 150, true), 
				"medium" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1).jpg', 210, 210, false), 
				"large" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1).jpg', 210, 210, false), 
				"full" => array(get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1).jpg', 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1)-140x140-8284.jpg', 
					"urlOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1).jpg', 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 140, 
						"height" => 140
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "140", 
							"height" => "140", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 140, 
							"height" => 140
							), 
						"id" => 4031
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 140, 
				"height" => 140
				), 
			"cropOffset" => array(
				"width" => "140", 
				"height" => "140", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/gal-image13 (1)-210x210-1926.jpg', 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"cropPosition" => array(
				"top" => 0, 
				"left" => 0
				)
			)), 
	"elementSize" => array(
		"width" => 0, 
		"height" => 0
		), 
	"labelFilters" => array("true"), 
	"thumbProportions" => "theme", 
	"thumbWidth" => "210", 
	"thumbHeight" => 210, 
	"captionPosition" => "below", 
	"captionColor" => "#ffffff", 
	"captionUseBackground" => 0, 
	"captionBackground" => "#000000", 
	"captionWhen" => "never", 
	"linkTo" => "image", 
	"element_id" => "ugallery-object-1407250114391-1191", 
	"theme_style" => "case-study-ugallery-style", 
	"anchor" => ""
	)
));

$regions->add($main);
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
"margin_top" => "7", 
"margin_bottom" => "0", 
"id" => "module-1406205224243-1651-module", 
"rows" => 13, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"></h3><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h3 class=\"\">Spread the word.</h3><h3 class=\"\">Share it with some friends.</h3></span><h3 class=\"\"></h3><h3 class=\"\"><span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(87, 85, 85)\"><a href=\"http://facebook.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">o</span></a> </span></span> <span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://twitter.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">p</span></a></span> <span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://plus.google.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">q</span></a></span>&nbsp;</span><span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://pinterest.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">r</span></a></span></span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406205224243-1348", 
	"class" => "c24 c24 upfront-plain_txt", 
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
"id" => "module-1406209692911-1852-module", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 57px; top: 34px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Get&nbsp;</span></h3><h3 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">A Quote</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406209692910-1396", 
	"class" => "c24 c24 upfront-plain_txt", 
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
"id" => "module-1406210660792-1159-module", 
"rows" => 22, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 48px; top: 28px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Call us now</span></h3><h3 class=\"\" style=\"margin-left: 40px;\">&nbsp; <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">1300 Fixer</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406210660791-1219", 
	"class" => "c24 c24 upfront-plain_txt", 
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
"id" => "module-1406217409056-1339-module", 
"rows" => 10, 
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/single-casestudy/logo-white-92x20-3728.png', 
	"srcFull" => get_stylesheet_directory_uri() . '/images/single-casestudy/logo-white.png', 
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/single-casestudy/logo-white.png', 
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
	"class" => "c24 upfront-image", 
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
"id" => "module-1406217940549-1616-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">© 2oo6-2014 Fixer Pty Ltd</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406217940549-1478", 
	"class" => "c24 c24 upfront-plain_txt", 
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
"id" => "module-1406218508045-1635-module", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406218508045-1484", 
	"class" => "c24 c24 upfront-plain_txt", 
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
"id" => "module-1406218404636-1484-module", 
"rows" => 8, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">TOU &amp; Privary</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406218404628-1646", 
	"class" => "c24 c24 upfront-plain_txt", 
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
