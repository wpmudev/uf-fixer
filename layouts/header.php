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
"background_color" => isset( $is_home ) && $is_home ? "rgba(254,212,27,1)" : "#fff"
)
				);
$header->add_element("Uimage", array(
"columns" => "4",
"margin_left" => "0",
"margin_top" => "9",
"id" => "module-1405520755986-1686",
"rows" => 4,
"options" => array(
	"src" => get_stylesheet_directory_uri() . '/images/archive-home/logo (1)-116x28-4228.png',
	"srcFull" => get_stylesheet_directory_uri() . '/images/archive-home/logo (1).png',
	"srcOriginal" => get_stylesheet_directory_uri() . '/images/archive-home/logo (1).png',
	"image_title" => "",
	"alternative_text" => "",
	"when_clicked" => "entry",
	"image_link" => "http://incsub.dev/gallery-3/",
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
	"class" => "upfront-image",
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
"margin_top" => "8",
"id" => "module-1405520756070-1345",
"rows" => 12,
"options" => array(
	"type" => "UnewnavigationModel",
	"view_class" => "UnewnavigationView",
	"class" => "c24 upfront-navigation",
	"has_settings" => 1,
	"id_slug" => "unewnavigation",
	"menu_items" => array(array(
			"menu-item-db-id" => 165,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Service",
			"menu-item-url" => "http://incsub.dev/#service",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "165",
			"menu-item-target" => "",
			"menu-item-position" => 1
			), array(
			"menu-item-db-id" => 166,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Get a Quote",
			"menu-item-url" => "http://incsub.dev/?dev=true&editmode=true#getquote",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "166",
			"menu-item-target" => "",
			"menu-item-position" => 2
			), array(
			"menu-item-db-id" => 2092,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Blog",
			"menu-item-url" => "http://incsub.dev/?dev=true&editmode=true#blog",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "2092",
			"menu-item-target" => "",
			"menu-item-position" => 3
			), array(
			"menu-item-db-id" => 2095,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "About",
			"menu-item-url" => "http://incsub.dev/?dev=true&editmode=true#about",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "2095",
			"menu-item-target" => "",
			"menu-item-position" => 4
			), array(
			"menu-item-db-id" => 2097,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Coverage Area",
			"menu-item-url" => "http://incsub.dev/?dev=true&editmode=true#coveragearea",
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
"margin_top" => "5",
"id" => "module-1405520755970-1045",
"rows" => 17,
"options" => array(
	"content" => "<p style=\"text-align: right;\" class=\"\">One call does it all</p><h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">a&nbsp;</span>1300 FIXER</h2>",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1405520755969-1764",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
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
