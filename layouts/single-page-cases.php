<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$cases_region = upfront_create_region(
			array(
"name" => "cases_region", 
"title" => "Cases Region", 
"type" => "wide", 
"scope" => "local", 
"container" => "cases_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 140, 
"background_type" => "color", 
"background_color" => "#c5d0db", 
"nav_region" => ""
)
			);

$cases_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1407250114380-1665-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 14, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\">Case Study</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407250114379-1090", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true
	), 
"wrapper_id" => "module-1407250114380-1665-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$cases_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407250139415-1897-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">Issue Resolved!</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407250139414-1484", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 4, 
	"is_edited" => true
	), 
"wrapper_id" => "module-1407250139415-1897-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$cases_region->add_element("Ugallery", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1407250114394-1623-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 48, 
"options" => array(
	"type" => "UgalleryModel", 
	"view_class" => "UgalleryView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-gallery", 
	"id_slug" => "ugallery", 
	"status" => "ok", 
	"images" => array(array(
			"id" => "4009", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3-210x210-1861.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3-210x210-1861.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "<p>This is Case</p>", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4010", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4-210x210-4359.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4-210x210-4359.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4011", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5-210x210-4712.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5-210x210-4712.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4012", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6-210x210-4674.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6-210x210-4674.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4014", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7-210x210-4688.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7-210x210-4688.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4015", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8-210x210-3938.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8-210x210-3938.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4017", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9-210x210-3034.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4017, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9-210x210-3034.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4019", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10-210x210-8979.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10-210x210-8979.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4021", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11-210x210-3368.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11-210x210-3368.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4023", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12-210x210-4128.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12-210x210-4128.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4024", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13-210x210-6797.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13-210x210-6797.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4027", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15-210x210-3561.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4027, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15-210x210-3561.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4029", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14-210x210-8695.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4029, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14-210x210-8695.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4007", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 210, 213, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 210, 213, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 210, 213, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1-210x210-7027.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 213
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 1
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 213
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
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 1
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1-210x210-7027.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4035", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1)-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1)-210x210-2311.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4035, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1)-210x210-2311.jpg", 
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
			"urlType" => false
			)), 
	"elementSize" => array(
		"width" => 0, 
		"height" => 0
		), 
	"labelFilters" => array("true"), 
	"thumbProportions" => "1", 
	"thumbWidth" => "210", 
	"thumbHeight" => 210, 
	"captionType" => "none", 
	"captionColor" => "#ffffff", 
	"captionUseBackground" => 0, 
	"captionBackground" => "#000000", 
	"showCaptionOnHover" => array("true"), 
	"linkTo" => "image", 
	"even_padding" => array("true"), 
	"thumbPadding" => 0, 
	"captionPosition" => "below", 
	"captionWhen" => "never", 
	"no_padding" => array("true"), 
	"element_id" => "ugallery-object-1407250114391-1191", 
	"theme_style" => "case-study-ugallery-style", 
	"anchor" => ""
	), 
"wrapper_id" => "module-1407250114394-1623-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$regions->add($cases_region);
$prefooter = upfront_create_region(
	array(
		"name" => "prefooter",
		"title" => "Pre Footer",
		"type" => "wide",
		"scope" => "local",
		"container" => "footer",
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
			"menu-item-db-id" => 955,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Cases",
			"menu-item-url" => "" . get_site_url() . "/cases/",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "955",
			"menu-item-target" => "",
			"menu-item-position" => 1
		), array(
			"menu-item-db-id" => 956,
			"menu-item-parent-id" => "0",
			"menu-item-type" => "custom",
			"menu-item-title" => "Archive",
			"menu-item-url" => "" . get_site_url() . "/?s=",
			"menu-item-object" => "custom",
			"menu-item-object-id" => "956",
			"menu-item-target" => "",
			"menu-item-position" => 2,
			"being-edited" => false
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
			"col" => 12
		),
		"mobile" => array(
			"col" => 7
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 0,
			"col" => 12
		),
		"mobile" => array(
			"edited" => false,
			"left" => 0,
			"col" => 7
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
		"content" => "<h3 class=\"\"></h3>
<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">
<h4><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Spread the word.</span></h4>
<h4><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Share it with some friends.</span></h4>
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
	"wrapper_id" => "wrapper-1416975107801-1075",
	"new_line" => "true",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"col" => 11
		),
		"mobile" => array(
			"col" => 7
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 1,
			"col" => 10
		),
		"mobile" => array(
			"edited" => false,
			"left" => 0,
			"col" => 7
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
			"col" => 9
		),
		"mobile" => array(
			"col" => 6
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 3,
			"col" => 6
		),
		"mobile" => array(
			"edited" => false,
			"left" => 1,
			"col" => 5
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
			"col" => 10
		),
		"mobile" => array(
			"col" => 7
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 2,
			"col" => 8
		),
		"mobile" => array(
			"edited" => false,
			"left" => 0,
			"col" => 7
		)
	)
));

$regions->add($prefooter);

$footer = upfront_create_region(
	array(
		"name" => "footer",
		"title" => "Footer",
		"type" => "wide",
		"scope" => "local",
		"container" => "region-12",
		"position" => 1,
		"allow_sidebar" => true
	),
	array(
		"row" => 9,
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
	"margin_top" => "0",
	"margin_bottom" => "0",
	"id" => "module-1406217409056-1339",
	"rows" => 10,
	"options" => array(
		"src" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo-white-100x20-3868.png",
		"srcFull" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo-white.png",
		"srcOriginal" => "" . get_stylesheet_directory_uri() . "/images/archive-home/fixer-logo-white.png",
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
			"height" => 30
		),
		"fullSize" => array(
			"width" => 100,
			"height" => 30
		),
		"position" => array(
			"top" => 5,
			"left" => -2.5
		),
		"marginTop" => 0,
		"element_size" => array(
			"width" => 105,
			"height" => 20
		),
		"rotation" => 0,
		"color" => "#ffffff",
		"background" => "#000000",
		"captionBackground" => "0",
		"image_id" => "10",
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
		"row" => 4
	),
	"wrapper_id" => "wrapper-1406217409056-1339",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"col" => 4
		),
		"mobile" => array(
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
	"margin_top" => "0",
	"margin_bottom" => "0",
	"id" => "module-1406217940549-1616",
	"rows" => 12,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<p class=\"\">
	<span class=\"inline_color\"><font color=\"#ffffff\">©</font></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"> 2oo6-2014 Fixer Pty Ltd</span>
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
	"wrapper_id" => "wrapper-1406217940549-1616",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"col" => 6
		),
		"mobile" => array(
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
	"margin_top" => "1",
	"margin_bottom" => "0",
	"id" => "module-1406218508045-1635",
	"rows" => 12,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072</span></p>",
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
	"wrapper_id" => "wrapper-1406218508045-1635",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"col" => 10
		),
		"mobile" => array(
			"col" => 7
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 2,
			"col" => 8
		),
		"mobile" => array(
			"edited" => false,
			"left" => 0,
			"col" => 7
		)
	)
));

$footer->add_element("PlainTxt", array(
	"columns" => "3",
	"margin_left" => "1",
	"margin_right" => "0",
	"margin_top" => "1",
	"margin_bottom" => "0",
	"id" => "module-1406218404636-1484",
	"rows" => 8,
	"options" => array(
		"view_class" => "PlainTxtView",
		"id_slug" => "plain_text",
		"content" => "<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">TOU &amp; Privary</span></p>",
		"type" => "PlainTxtModel",
		"element_id" => "text-object-1406218404628-1646",
		"class" => "c24 upfront-plain_txt",
		"has_settings" => 1,
		"row" => 2,
		"is_edited" => true,
		"border_style" => "none",
		"border_width" => 1,
		"border_color" => "",
		"bg_color" => "",
		"theme_style" => "plaintext-footer",
		"anchor" => ""
	),
	"wrapper_id" => "wrapper-1406218404636-1484",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"col" => 8
		),
		"mobile" => array(
			"col" => 5
		)
	),
	"breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"left" => 4,
			"col" => 4
		),
		"mobile" => array(
			"edited" => false,
			"left" => 2,
			"col" => 3
		)
	)
));

$regions->add($footer);
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

