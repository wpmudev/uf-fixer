<?php

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
"margin_top" => "12",
"id" => "module-1406205224243-1651",
"rows" => 13,
"options" => array(
	"content" => "<h3 class=\"\">Spread the word.</h3><h3 class=\"\">Share it with some friends.</h3><h3 class=\"\"><span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(87, 85, 85)\"><a href=\"http://facebook.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">o</span></a> </span></span> <span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://twitter.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">p</span></a></span> <span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://plus.google.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">q</span></a></span>&nbsp;</span><span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://pinterest.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">r</span></a></span></span></span></h3>",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1406205224243-1348",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
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
"margin_top" => "7",
"id" => "module-1406209692911-1852",
"rows" => 16,
"options" => array(
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 57px; top: 34px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span>Get&nbsp;</h3><h3 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;A Quote</h3>",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1406209692910-1396",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
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
"margin_top" => "8",
"id" => "module-1406210660792-1159",
"rows" => 22,
"options" => array(
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 48px; top: 28px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> Call us now</h3><h3 class=\"\" style=\"margin-left: 40px;\">&nbsp; 1300 Fixer</h3>",
	"type" => "PlainTxtModel",
	"view_class" => "PlainTxtView",
	"element_id" => "text-object-1406210660791-1219",
	"class" => "c24 upfront-plain_txt",
	"has_settings" => 1,
	"id_slug" => "plain_text",
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
include "lower_footer.php";
