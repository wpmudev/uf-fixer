<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_2 = upfront_create_region(
			array(
"name" => "region_2", 
"title" => "Region 2", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_2", 
"position" => 1, 
"allow_sidebar" => true
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
"background_slider_images" => array("/images/10644750259420162681342675526372739745162952706317729565771306155424938581860Slide-1.jpg", "/images/407872720196164314315818924641701961897106362155417163793521946384921404859745slide-2.jpg", "/images/1455291307171549888387495463887152753358614968115619120892478964098029998slide-3.jpg", "/images/20522293231680107989213438370638366382383178317595148445585649283128093174slide-4.jpg", "/images/1528114833588971688452490591917826801849472571417480591838380247846667238slide-5.jpg"), 
"expand_lock" => false
)
			);

$region_2->add_element("PlainTxt", array(
"columns" => "18", 
"margin_left" => "6", 
"margin_right" => "0", 
"margin_top" => "37", 
"margin_bottom" => "0", 
"id" => "module-1405538329123-1568", 
"rows" => 107, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p style=\"text-align: right;\" class=\"\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h1></h1><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h1 style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">We Build</span></h1><h1 style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">And Fix</span></h1></span><h1></h1></span><p style=\"text-align: right;\" class=\"\"></p>", 
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
	"row" => 101
	), 
"wrapper_id" => "wrapper-1405538329123-1568"
));

$region_2->add_element("Code", array(
"columns" => "8", 
"margin_left" => "16", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407447222447-1890", 
"rows" => 20, 
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
	"element_id" => "upfront-code_element-object-1407447222447-1437", 
	"row" => 14, 
	"code_selection_type" => "Create", 
	"style" => ".home-quote-btn,
.home-view-service-btn{
    padding: 16px 21px;
    color:#fff;
    border:3px solid #fff;
    text-decoration:none;
    text-transform:uppercase;
    font:bold 15px raleway;
    margin-right:10px;
}", 
	"markup" => "<a href=\"/\" class=\"home-quote-btn\">Get A Quote</a>
<a href=\"/\" class=\"home-view-service-btn\">View Service</a>", 
	"script" => "/* Your code here */"
	), 
"wrapper_id" => "wrapper-1407447222447-1890"
));

$regions->add($region_2);

$region_3 = upfront_create_region(
			array(
"name" => "region_3", 
"title" => "Region 3", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_3", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 296, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)", 
"background_style" => "fixed", 
"background_position_y" => "80", 
"background_position_x" => "52", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/spanner.jpg", 
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
"id" => "module-1405522949556-1703", 
"rows" => 11, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Service</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405522949555-1045", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 5, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "service"
	), 
"wrapper_id" => "wrapper-1405522949556-1703"
));

$region_3->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "4", 
"margin_bottom" => "0", 
"id" => "module-1405523049528-1271", 
"rows" => 47, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 style=\"text-align: center;\" class=\"\"></h1><span class=\"inline_color\" style=\"color: rgb(253, 253, 253)\"><h1 style=\"text-align: center;\" class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Premier</span></h1><h1 style=\"text-align: center;\" class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Service &amp; Quality</span></h1></span><h1 style=\"text-align: center;\" class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405523049527-1127", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 41, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1405523049528-1271"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405596862038-1296", 
"rows" => 74, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"></span><h3 class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Bricklaying &nbsp;&nbsp;<span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">d</span></span><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\"></span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix alignright\" id=\"uinsert-3\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 242px; height: 122px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/bricklaying.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"></p><p class=\"\" style=\"text-align: right;\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto pra<span class=\"inline_color\" style=\"color: rgb(147, 17, 17)\"></span>esent luptatum zzril.</span></p><p class=\"\" style=\"text-align: right;\"></p></span><p class=\"\" style=\"text-align: right;\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">j</span></span></p><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596862037-1055", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 68, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1405596862038-1296"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1405596355716-1833", 
"rows" => 70, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"top: 0px; font-size: 25px;\">g &nbsp;</span>Fencing</span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-17\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 240px; height: 122px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/fencing.jpg\"></span>
</div><span class=\"inline_color\" style=\"color: rgb(248, 26, 26)\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Erat volutpat. Ut wisi enim ad minim&nbsp;veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto praesent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p></span></span><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596355715-1674", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 64, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1405596355716-1833"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405598481047-1202", 
"rows" => 67, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Electrical <span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">f</span></span><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\"></span></h3><p class=\"\"></p><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix aligncenter\" id=\"uinsert-2\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 241px; height: 122px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/electricity.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud&nbsp;exerci&nbsp;tation&nbsp;ullamcorper&nbsp;san et iusto pra<span class=\"inline_color\" style=\"color: rgb(147, 17, 17);\"></span>esent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405598481047-1830", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 61, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1405598481047-1202"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405596148086-1896", 
"rows" => 63, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"top: 0px; font-size: 25px;\">h&nbsp;</span> Windows</span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-13\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 242px; height: 121px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/window.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim&nbsp;veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto praesent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596148085-1402", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 57, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1405596148086-1896"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405596212011-1573", 
"rows" => 71, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Plumping <span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">e</span></span><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\"></span></h3><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix aligncenter\" id=\"uinsert-4\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 240px; height: 123px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/plumping.jpg\"></span>
</div><p class=\"\"></p><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto pra<span class=\"inline_color\" style=\"color: rgb(147, 17, 17);\"></span>esent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span><br></span></p><p class=\"\" style=\"text-align: right;\"></p></span><p class=\"\"></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405596212011-1578", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 65
	), 
"wrapper_id" => "wrapper-1405596212011-1573"
));

$region_3->add_element("PlainTxt", array(
"columns" => "6", 
"margin_left" => "11", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405598693845-1388", 
"rows" => 70, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"uf_font_icon\" style=\"top: 0px; font-size: 25px;\"></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"top: 0px; font-size: 25px;\">i&nbsp;</span> Roofing</span></h3><p class=\"\"></p><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix aligncenter\" id=\"uinsert-5\" style=\"width: 240px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 242px; height: 124px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/roofing.jpg\"></span>
</div><p class=\"\"></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\">Erat volutpat. Ut wisi enim ad minim&nbsp;veniam, quis nostrud&nbsp;exerci&nbsp;tation ullamcorper san et iusto praesent&nbsp;luptatum&nbsp;zzril.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255);\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405598693844-1239", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 64, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => "0", 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1405598693845-1388"
));

$regions->add($region_3);

$region_4 = upfront_create_region(
			array(
"name" => "region_4", 
"title" => "Region 4", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_4", 
"position" => 1, 
"allow_sidebar" => true
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
"id" => "module-1405602642892-1614", 
"rows" => 9, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">In Emergency, call us now! Otherwise follow the steps below ...</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405602642891-1538", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 3, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1405602642892-1614"
));

$region_4->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1405603545291-1575", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">First Thing First</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1405603545292-1703", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 10, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1405603545291-1575"
));

$regions->add($region_4);

$region_5 = upfront_create_region(
			array(
"name" => "region_5", 
"title" => "Region 5", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_5", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 148
)
			);

$region_5->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1405604490158-1724", 
"rows" => 124, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\">2. We Roll</h2><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix ui-resizable\" id=\"uinsert-7\" style=\"display: block; width: 195px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 225px; height: 97px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/van.png\"></span>
</div><p class=\"\">It works as smooth as new. quis nostrud exerci tation ullamcorper san et iusto praesent luptatum zzril volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci&nbsp;tincidunt&nbsp;ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper &nbsp;tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, nobis eleifend option congue nihil imperdiet doming id quod mazim non habent praesent luptatum zzril delenit erat facer possim assum lorem ipsum.</p><p class=\"\"></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1405604490159-1264", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 118, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1405604490158-1724"
));

$region_5->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "2", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1405603522621-1698", 
"rows" => 121, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\">3.We Fix It</h2><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper aligncenter clearfix\" id=\"uinsert-3\" style=\"width: 195px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 225px; height: 106px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/cloud.png\"></span>
</div><p class=\"\"></p><p class=\"\"></p><p class=\"\">It works as smooth as new. quis nostrud exerci tation ullamcorper san et iusto praesent luptatum zzril volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper &nbsp;tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, nobis eleifend option congue nihil imperdiet doming id quod mazim non habent praesent luptatum zzril delenit erat facer possim assum lorem ipsum.</p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405603522620-1613", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 115, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1405603522621-1698"
));

$regions->add($region_5);

$region_5_left = upfront_create_region(
			array(
"name" => "region_5_left", 
"title" => "region_5 Left", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_5", 
"sub" => "left", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"col" => 10, 
"background_type" => "color", 
"background_color" => "rgba(214,230,240,1)"
)
			);

$region_5_left->add_element("PlainTxt", array(
"columns" => "9", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1405684577740-1320", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\">1. Get a Quote</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1405684577739-1682", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "getquote"
	), 
"wrapper_id" => "wrapper-1405684577740-1320"
));

$regions->add($region_5_left);

$region_6 = upfront_create_region(
			array(
"name" => "region_6", 
"title" => "Region 6", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_6", 
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

$region_6->add_element("PlainTxt", array(
"columns" => "11", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "14", 
"margin_bottom" => "0", 
"id" => "module-1406189688409-1108", 
"rows" => 15, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Blog</span></h3><h1 class=\"\"></h1><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h1 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Latest</span>&nbsp;</h1><h1 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">News &amp;</span></h1><h1 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Tips</span></h1></span><h1 class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406189688408-1011", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "blog"
	), 
"wrapper_id" => "wrapper-1406189688409-1108"
));

$regions->add($region_6);

$region_7 = upfront_create_region(
			array(
"name" => "region_7", 
"title" => "Region 7", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_7", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 58, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "rgba(94,191,107,1)", 
"background_style" => "fixed", 
"background_position_y" => "50", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/hot (1).jpg", 
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
"id" => "module-1406190416970-1781", 
"rows" => 43, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\">End your day!</h3><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue.</span></p><p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406190416970-1685", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 37, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406190416970-1781"
));

$regions->add($region_7);

$region_8 = upfront_create_region(
			array(
"name" => "region_8", 
"title" => "Region 8", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_8", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 58, 
"background_type" => "image", 
"nav_region" => "", 
"background_color" => "#ffffff", 
"background_style" => "fixed", 
"background_position_y" => "50", 
"background_position_x" => "100", 
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/big-bricks (1).jpg", 
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
"id" => "module-1406190559882-1979", 
"rows" => 49, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">No more leaking pipe!</span></h3><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue.</p><p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406190559882-1589", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 43, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "_default", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1406190559882-1979"
));

$regions->add($region_8);

$region_9 = upfront_create_region(
			array(
"name" => "region_9", 
"title" => "Region 9", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_9", 
"position" => 1, 
"allow_sidebar" => true
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
"background_image" => "" . get_stylesheet_directory_uri() . "/images/archive-home/big-roof.jpg", 
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
"id" => "module-1406194567924-1749", 
"rows" => 52, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Smart home, smart roof</span></h3><p class=\"\">Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue dolor sit amet.</p><p class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">j</span></p><p class=\"\"></p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194567924-1392", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 46, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406194567924-1749"
));

$regions->add($region_9);

$region_10 = upfront_create_region(
			array(
"name" => "region_10", 
"title" => "Region 10", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_10", 
"position" => 1, 
"allow_sidebar" => true
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
"id" => "module-1406194594842-1402", 
"rows" => 17, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Interested to know more tips?</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194594841-1906", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 11, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406194594842-1402"
));

$region_10->add_element("Code", array(
"columns" => "8", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1407447200535-1725", 
"rows" => 15, 
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
	"element_id" => "upfront-code_element-object-1407447200535-1633", 
	"row" => 9, 
	"code_selection_type" => "Create", 
	"markup" => "<a href=\"/\" class=\"home-subscribe-btn\">Subscribe</a>
<a href=\"/\" class=\"home-view-blog-btn\">View Blog</a>", 
	"style" => ".home-subscribe-btn,
.home-view-blog-btn{
    padding: 16px 21px;
    color:#000;
    border:3px solid #000;
    text-decoration:none;
    text-transform:uppercase;
    font:bold 15px raleway;
    margin-right:10px;
}", 
	"script" => "/* Your code here */"
	), 
"wrapper_id" => "wrapper-1407447200535-1725"
));

$regions->add($region_10);

$region_11 = upfront_create_region(
			array(
"name" => "region_11", 
"title" => "Region 11", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_11", 
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

$region_11->add_element("PlainTxt", array(
"columns" => "17", 
"margin_left" => "4", 
"margin_right" => "0", 
"margin_top" => "17", 
"margin_bottom" => "0", 
"id" => "module-1406194852885-1872", 
"rows" => 48, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">About</span></h3><h1 class=\"\" style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Meet Mr Fixer</span></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406194852885-1002", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 42, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "", 
	"anchor" => "about"
	), 
"wrapper_id" => "wrapper-1406194852885-1872"
));

$region_11->add_element("PlainTxt", array(
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
"wrapper_id" => "wrapper-1406196281138-1720"
));

$region_11->add_element("PlainTxt", array(
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
"wrapper_id" => "wrapper-1406196781398-1992"
));

$region_11->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "10", 
"margin_bottom" => "0", 
"id" => "module-1406196815834-1847", 
"rows" => 56, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<p class=\"\">We will talk to you in a minute</p><p class=\"\">Thank you.</p><p class=\"\"></p><p class=\"\"></p><div contenteditable=\"false\" class=\"ueditor-insert upfront-inserted_image-wrapper clearfix alignleft ui-resizable\" id=\"uinsert-4\" style=\"display: block; width: 164px;\">
	<span class=\"uinsert-image-wrapper uinsert-image-caption-nocaption \" style=\"width: 165px; height: 101px\"><img class=\"\" src=\"" . get_stylesheet_directory_uri() . "/images/archive-home/signature.png\"></span>
</div><p class=\"\"><strong><br></strong></p><p class=\"\"><strong><br></strong></p><p class=\"\"><strong><br></strong></p><p class=\"\"><strong><br></strong></p><p class=\"\"><strong style=\"font-size: 14px;\">James Woodlock</strong></p><p class=\"\">Owner</p>", 
	"type" => "PlainTxtModel", 
	"element_id" => "object-1406196815834-1028", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 50, 
	"is_edited" => true
	), 
"wrapper_id" => "wrapper-1406196815834-1847"
));

$region_11->add_element("Code", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "2", 
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
"wrapper_id" => "wrapper-1407454687369-1694"
));

$regions->add($region_11);

$region_12 = upfront_create_region(
			array(
"name" => "region_12", 
"title" => "Region 12", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_12", 
"position" => 1, 
"allow_sidebar" => true
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
"id" => "module-1406200069453-1687", 
"rows" => 52, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\"></h3><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h3 style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Coverage Area</span></h3><h1 class=\"\"></h1><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 class=\"\"></h1><h1 class=\"\" style=\"text-align: center;\"></h1><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 class=\"\" style=\"text-align: center;\"></h1><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">Anywhere within</span></h1><h1 style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">40km radius</span></h1><h1 style=\"text-align: center;\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\">from CBD</span></h1></span><h1 class=\"\" style=\"text-align: center;\"></h1></span></span></span><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><span class=\"inline_color\" style=\"color: rgb(0, 0, 0)\"><h1 class=\"\" style=\"text-align: center;\"></h1></span><h1 class=\"\" style=\"text-align: center;\"></h1></span><h1 class=\"\"></h1></span><h1 class=\"\"></h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406200069452-1923", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 46, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "plaintext-text-25-lineheight", 
	"anchor" => "coveragearea"
	), 
"wrapper_id" => "wrapper-1406200069453-1687"
));

$regions->add($region_12);

$region_13_left = upfront_create_region(
			array(
"name" => "region_13_left", 
"title" => "region_13 Left", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_13", 
"sub" => "left", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"col" => 10, 
"background_type" => "color", 
"background_color" => "rgba(104,89,154,1)"
)
			);

$region_13_left->add_element("PlainTxt", array(
"columns" => "10", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1407345822513-1795", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Ready to talk to our staff&nbsp;</span></h3><h3 class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">with enquiries and questions?</span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407345822512-1625", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 10, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "header-contact-text", 
	"anchor" => ""
	), 
"wrapper_id" => "wrapper-1407345822513-1795"
));

$region_13_left->add_element("Ucontact", array(
"columns" => "10", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406205101532-1649", 
"rows" => 81, 
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
	"theme_style" => "home-footer-contact", 
	"anchor" => "", 
	"row" => 75
	), 
"wrapper_id" => "wrapper-1406205101532-1649"
));

$regions->add($region_13_left);

$region_13 = upfront_create_region(
			array(
"name" => "region_13", 
"title" => "Region 13", 
"type" => "wide", 
"scope" => "local", 
"container" => "region_13", 
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

$regions->add($region_13);

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

$prefooter->add_element("PlainTxt", array(
"columns" => "11", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1406205224243-1651", 
"rows" => 26, 
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
	"row" => 20
	), 
"wrapper_id" => "wrapper-1406205224243-1651"
));

$prefooter->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406209692911-1852", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h4 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Get</span>&nbsp;</h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">A Quote</span></h4>", 
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
"wrapper_id" => "wrapper-1406209692911-1852"
));

$prefooter->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406210660792-1159", 
"rows" => 25, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h4 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Call us now</span></h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">1300 Fixer</span></h4>", 
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
"wrapper_id" => "wrapper-1406210660792-1159"
));

$regions->add($prefooter);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

