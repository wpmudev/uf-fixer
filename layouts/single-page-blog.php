<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$top = upfront_create_region(
			array(
"name" => "top", 
"title" => "Top", 
"type" => "wide", 
"scope" => "local", 
"container" => "top", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 30, 
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

$regions->add($top);

$region_5 = upfront_create_region(
			array(
"name" => "region-5", 
"title" => "Region 5", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-5", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60, 
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

$region_5->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407244369178-1770", 
"rows" => 12, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(51, 51, 51)\">Blog</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407244369177-1062", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1419540281671-1659", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12
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
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	)
));

$region_5->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407244383572-1176", 
"rows" => 28, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(51, 51, 51)\">Latest News &amp; Tips</span></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407244383571-1575", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 28, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1419540279374-1064", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12
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
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	)
));

$region_5->add_element("Posts", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1418582907947-1246", 
"rows" => 42, 
"options" => array(
	"type" => "PostsModel", 
	"view_class" => "PostsView", 
	"has_settings" => 1, 
	"class" => "c24 uposts-object", 
	"id_slug" => "posts", 
	"display_type" => "list", 
	"list_type" => "generic", 
	"offset" => 1, 
	"taxonomy" => "", 
	"term" => "", 
	"content" => "excerpt", 
	"limit" => "8", 
	"pagination" => "numeric", 
	"posts_list" => "", 
	"post_parts" => array("featured_image", "date_posted", "title", "content"), 
	"enabled_post_parts" => array("date_posted", "featured_image", "title", "content"), 
	"default_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"), 
	"date_posted_format" => "d M", 
	"categories_limit" => 3, 
	"tags_limit" => 3, 
	"comment_count_hide" => 0, 
	"content_length" => 120, 
	"resize_featured" => "1", 
	"gravatar_size" => 200, 
	"post-part-date_posted" => "<div class=\"uposts-part date_posted\">
    <span class=\"date-day\">{{date_1}}</span> <span class=\"date-month\">{{date_2}}</span>
</div>", 
	"post-part-author" => "<div class=\"uposts-part author\">
	By <a href=\"{{url}}\">{{name}}</a></div>", 
	"post-part-gravatar" => "<div class=\"uposts-part gravatar\">
	{{gravatar}}
</div>", 
	"post-part-comment_count" => "<div class=\"uposts-part comment_count\">
	{{comment_count}}
</div>", 
	"post-part-featured_image" => "<div class=\"uposts-part thumbnail\" data-resize=\"{{resize}}\">
	{{thumbnail}}
</div>", 
	"post-part-title" => "<div class=\"uposts-part title\">
	<h3><a href=\"{{permalink}}\" title=\"{{title}}\">{{title}}</a></h3>
</div>", 
	"post-part-content" => "<div class=\"uposts-part content\">
	{{content}}
</div>", 
	"post-part-read_more" => "<div class=\"uposts-part read_more\">
	<a href=\"{{permalink}}\">Read more</a></div>", 
	"post-part-tags" => "<div class=\"uposts-part post_tags\">
	{{tags}}
</div>", 
	"post-part-categories" => "<div class=\"uposts-part post_categories\">
	{{categories}}
</div>", 
	"element_id" => "posts-object-1418582907944-1365", 
	"anchor" => "", 
	"theme_style" => "blog-posts"
	), 
"wrapper_id" => "wrapper-1419540276903-1477", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12
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
		"col" => 12
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7
		)
	)
));

$regions->add($region_5);

$prefooter = upfront_create_region(
	array(
		"name" => "prefooter",
		"title" => "Pre-Footer",
		"type" => "wide",
		"scope" => "local",
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
	"wrapper_id" => "wrapper-1419232674063-1998",
	"new_line" => "true",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 11
		),
		"mobile" => array(
			"edited" => false,
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
	"margin_top" => "8",
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
	"wrapper_id" => "wrapper-1419232674066-1955",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 9
		),
		"mobile" => array(
			"edited" => false,
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
	"
	),
	"wrapper_id" => "wrapper-1419232674067-1067",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 10
		),
		"mobile" => array(
			"edited" => false,
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
		"container" => "footer",
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
		"color" => "#ffffff",
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

