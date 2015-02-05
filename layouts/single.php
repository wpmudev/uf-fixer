<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$blog_individual = upfront_create_region(
			array(
"name" => "blog-individual",
"title" => "Blog Individual",
"type" => "wide",
"scope" => "local",
"container" => "blog-individual",
"position" => 1,
"allow_sidebar" => true
),
			array(
"row" => 140,
"background_type" => "color",
"background_color" => "rgba(255,255,255,1)",
"nav_region" => "",
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

$blog_individual->add_element("PlainTxt", array(
"columns" => "24",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "15",
"margin_bottom" => "0",
"id" => "module-1407490840563-1569-module",
"rows" => 14,
"options" => array(
	"view_class" => "PlainTxtView",
	"id_slug" => "plain_text",
	"content" => "<h3 class=\"\" style=\"text-align: center;\">Blog</h3>",
	"type" => "PlainTxtModel",
	"element_id" => "text-object-1407490840562-1778",
	"class" => "c24 c24 upfront-plain_txt",
	"has_settings" => 1,
	"is_edited" => true,
	"row" => 14
	),
"wrapper_id" => "module-1407490840563-1569-module-wrapper",
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

$blog_individual->add_element("ThisPost", array(
"columns" => "24",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "1",
"margin_bottom" => "0",
"id" => "default-post-module-module-module-module-module-module-module-module",
"rows" => 20,
"options" => array(
	"type" => "ThisPostModel",
	"view_class" => "ThisPostView",
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-this_post",
	"has_settings" => 1,
	"id_slug" => "this_post",
	"row" => 10,
	"post_data" => array("date"),
	"disable_resize" => false,
	"disable_drag" => false,
	"layout" => array(array(
			"classes" => "c24 clr",
			"objects" => array(array(
					"slug" => "title",
					"classes" => "post-part c24"
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
	"element_id" => "default-post-object",
	"theme_style" => "thispost-blog-style",
	"anchor" => ""
	),
"wrapper_id" => "default-post-module-module-module-module-module-module-module-module-wrapper",
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

$blog_individual->add_element("Ucomment", array(
"columns" => "24",
"margin_left" => "0",
"margin_right" => "0",
"margin_top" => "0",
"margin_bottom" => "0",
"id" => "default-comment-module-module-module-module-module-module-module-module",
"rows" => 10,
"options" => array(
	"id_slug" => "ucomment",
	"type" => "UcommentModel",
	"view_class" => "UcommentView",
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-comment",
	"has_settings" => 0,
	"prepend_form" => false,
	"element_id" => "default-comment-object"
	),
"wrapper_id" => "default-comment-module-module-module-module-module-module-module-module-wrapper",
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

$regions->add($blog_individual);

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
			"col" => 9,
			"clear" => true,
			"order" => 1
		),
		"mobile" => array(
			"edited" => false,
			"col" => 6,
			"clear" => false,
			"order" => 1
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
	",
		"breakpoint" => array(
			"mobile" => array(
				"row" => 38
			)
		)
	),
	"wrapper_id" => "wrapper-1419232674067-1067",
	"wrapper_breakpoint" => array(
		"tablet" => array(
			"edited" => false,
			"col" => 11,
			"clear" => true,
			"order" => 2
		),
		"mobile" => array(
			"edited" => false,
			"col" => 7,
			"clear" => false,
			"order" => 2
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

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');
