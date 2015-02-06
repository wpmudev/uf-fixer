<?php
$header = upfront_create_region(
			array(
"name" => "header", 
"title" => "Header", 
"type" => "wide", 
"scope" => "global", 
"container" => "header", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 24, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(255,255,255,0)", 
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

$header->add_element("Uimage", array(
	"columns" => "4",
	"margin_left" => "1",
	"margin_right" => "0",
	"margin_top" => "6",
	"margin_bottom" => "0",
	"id" => "module-1422416936720-1326",
	"rows" => 4,
	"options" => array(
		"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo-111x26-8987.png",
		"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo.png",
		"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo.png",
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
			"width" => 111,
			"height" => 26
		),
		"fullSize" => array(
			"width" => 111,
			"height" => 26
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
		"image_id" => "1768",
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
		"element_id" => "image-1422416936718-1443",
		"row" => 4,
		"breakpoint" => array(
			"mobile" => array(
				"row" => 12
			)
		)
	),
	"wrapper_id" => "wrapper-1422432407745-1362",
	"sticky" => false,
	"new_line" => "true",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 8,
			"clear" => true,
			"order" => 0
		),
		"mobile" => array(
			"edited" => false,
			"col" => 4,
			"clear" => true,
			"order" => 0
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => true,
			"left" => 4,
			"col" => 4,
			"top" => 2
		),
		"mobile" => array(
			"edited" => true,
			"left" => 1,
			"col" => 3,
			"row" => 12,
			"top" => 5
		)
	)
));

$header->add_element("Unewnavigation", array(
	"columns" => "13",
	"margin_left" => "0",
	"margin_right" => "0",
	"margin_top" => "6",
	"margin_bottom" => "0",
	"id" => "module-1422430251821-1124",
	"rows" => 13,
	"options" => array(
		"type" => "UnewnavigationModel",
		"view_class" => "UnewnavigationView",
		"class" => "c24 upfront-navigation",
		"has_settings" => 1,
		"id_slug" => "unewnavigation",
		"menu_items" => array(array(
			"menu-item-db-id" => 29,
			"menu-item-parent-id" => 0,
			"menu-item-type" => "custom",
			"menu-item-title" => "Service",
			"menu-item-url" => "" . get_site_url() . "/#services",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "29",
			"menu-item-target" => "",
			"menu-item-position" => 0,
			"being-edited" => false
		), array(
			"menu-item-db-id" => 30,
			"menu-item-parent-id" => 0,
			"menu-item-type" => "custom",
			"menu-item-title" => "Get a Quote",
			"menu-item-url" => "" . get_site_url() . "/#quote",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "30",
			"menu-item-target" => "",
			"menu-item-position" => 1,
			"being-edited" => false
		), array(
			"menu-item-db-id" => 31,
			"menu-item-parent-id" => 0,
			"menu-item-type" => "custom",
			"menu-item-title" => "Blog",
			"menu-item-url" => "" . get_site_url() . "/blog",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "31",
			"menu-item-target" => "",
			"menu-item-position" => 2,
			"being-edited" => false
		), array(
			"menu-item-db-id" => 32,
			"menu-item-parent-id" => 0,
			"menu-item-type" => "custom",
			"menu-item-title" => "About",
			"menu-item-url" => "" . get_site_url() . "/#about",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "32",
			"menu-item-target" => "",
			"menu-item-position" => 3,
			"being-edited" => false
		), array(
			"menu-item-db-id" => 33,
			"menu-item-parent-id" => 0,
			"menu-item-type" => "custom",
			"menu-item-title" => "Coverage Area",
			"menu-item-url" => "" . get_site_url() . "/#coverage",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "33",
			"menu-item-target" => "",
			"menu-item-position" => 4,
			"being-edited" => false
		)),
		"menu_style" => "horizontal",
		"menu_alignment" => "center",
		"allow_sub_nav" => array("no"),
		"allow_new_pages" => array(),
		"element_id" => "unewnavigation-object-1422430251820-1816",
		"initialized" => false,
		"menu_id" => false,
		"menu_slug" => "fixer-menu",
		"burger_menu" => array(),
		"burger_alignment" => "left",
		"burger_over" => "over",
		"is_floating" => array(),
		"anchor" => "",
		"theme_style" => "main-top-navigation",
		"breakpoint" => array(
			"desktop" => array(
				"burger_alignment" => "left",
				"burger_over" => "over",
				"width" => 1080
			),
			"tablet" => array(
				"theme_style" => "tablet-nav",
				"width" => 570,
				"burger_menu" => "",
				"burger_alignment" => "left",
				"burger_over" => "over",
				"row" => 11
			),
			"mobile" => array(
				"burger_menu" => "yes",
				"burger_alignment" => "top",
				"burger_over" => "over",
				"width" => 315,
				"row" => 15,
				"theme_style" => "mobile-nav"
			)
		),
		"row" => 13
	),
	"wrapper_id" => "wrapper-1422432419698-1772",
	"sticky" => false,
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 12,
			"clear" => true,
			"order" => 2
		),
		"mobile" => array(
			"edited" => false,
			"col" => 2,
			"clear" => false,
			"order" => 1
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => true,
			"left" => 0,
			"col" => 12,
			"top" => 3,
			"row" => 11
		),
		"mobile" => array(
			"edited" => true,
			"left" => 0,
			"col" => 2,
			"top" => 3,
			"row" => 15
		)
	)
));

$header->add_element("PlainTxt", array(
	"columns" => "5",
	"margin_left" => "0",
	"margin_right" => "0",
	"margin_top" => "4",
	"margin_bottom" => "0",
	"id" => "module-1405520755970-1045",
	"rows" => 18,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<p style=\"text-align: right;\" class=\"\">
	One call does it all
</p>
<h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\" rel=\"font-size: 27px; top: 0px;\">a </span>1300 FIXER</h2>",
		"type" => "PlainTxtModel",
		"element_id" => "text-object-1405520755969-1764",
		"class" => "c24 upfront-plain_txt",
		"has_settings" => 1,
		"is_edited" => true,
		"border_style" => "none",
		"border_width" => "0",
		"border_color" => "",
		"bg_color" => "",
		"theme_style" => "header-contact-text",
		"anchor" => "",
		"row" => 18,
		"breakpoint" => array(
			"tablet" => array(
				"row" => 18
			)
		)
	),
	"wrapper_id" => "wrapper-1422432441317-1341",
	"sticky" => false,
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 8,
			"clear" => true,
			"order" => 1
		),
		"mobile" => array(
			"edited" => false,
			"col" => 6,
			"clear" => true,
			"order" => 2
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => true,
			"left" => 2,
			"col" => 6,
			"top" => 0,
			"row" => 18
		),
		"mobile" => array(
			"edited" => true,
			"left" => 1,
			"col" => 5,
			"top" => 0
		)
	)
));


$regions->add($header);

