<?php
return array(
	'typography' => '{\"h1\":{\"weight\":\"900\",\"style\":\"normal\",\"size\":\"110\",\"line_height\":\"0.9\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h2\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h3\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h4\":{\"weight\":\"500\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h5\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"22\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"p\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"15\",\"line_height\":\"1.3\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"}}',
	'layout_style' => ' body {
    font-family: Raleway;
}
 input {
    font-weight: 700;
}
 /* checkboxes*/
.onoffswitch {
  position: relative;
  width: 45px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  display: inline-block;
  margin: 4px;
}
 .onoffswitch-checkbox {
  display: none;
}
 .onoffswitch-label {
  display: block;
  overflow: hidden;
  cursor: pointer;
}
 .onoffswitch-inner {
  width: 200%;
  height: 30px;
  margin-left: -100%;
}
 .onoffswitch-inner:before,  .onoffswitch-inner:after {
  float: left;
  padding: 0;
  width: 50%;
  height: 30px;
  color: white;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
 .onoffswitch-inner:before {
  display: block;
  content: \"\";
  width: 45px;
  height: 100%;
  padding-left: 10px;
  color: #FFFFFF;
  background-color: #81D48C;
}
 .onoffswitch-inner:after {
  display: block;
  content: \"\";
  width: 45px;
  height: 100%;
  padding-right: 10px;
  color: #999999;
  background-color: #333333;
}
 .onoffswitch-switch {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 29px;
  height: 25px;
  margin: 2px 3px;
  background-image: url(/wp-content/themes/uf-fixer/ui/switch.png);
}
 .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
  margin-left: 0;
}
 .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
  right: 0;
}
 /* comments */
h3.comment-reply-title {
    line-height: 2em;
}
 ol.upfront-comments {
    padding: 0;
}
 ol.upfront-comments,  ol.upfront-comments ol {
    list-style: none;
}
 li.comment {
    overflow: hidden;
    width: 100%;
}
 li.comment article {
    padding: 30px;
    overflow: hidden;
}
 li.comment.depth-1.thread-even {
    background: #f3f8fc;
}
 li.comment.depth-1.thread-odd {
    background: #ffe262;
}
 .comment .children {
    margin: 25px;
    border: 3px solid #f3f8fc;
}
 li.comment.depth-2 {
    background: #fff;
}
 .comment_author {
    color:#333;
    font-size:  15px;
}
 .comment-date {
    float: right;
    margin-right: 30px;
    color: #999;
    text-decoration: none;
    font-size: 13px;
}
 .comment-meta-actions {
    display: inline-block;
    float: right;
}
 .comment-reply {
    float: right;
    clear: right;
}
 .comment-reply-link {
    background: transparent url(/wp-content/themes/uf-fixer/ui/reply-button.png) no-repeat center;
    display: inline-block;
    width: 21px;
    height: 21px;
    text-indent: 9999px;
    overflow: hidden;
}
 .comment-meta {
    float: left;
    margin-right: 20px;
}
 .comment-content {
    float: left;
    font-size: 13px;
}
 .logged-in-as {
    line-height: 2em;
}
 .logged-in-as a {
    text-decoration: underline;
    color: #333333;
}
 .comment-respond {
    background: #ffe262;
    padding: 30px;
    overflow: hidden;
    margin-bottom: 20px;
}
 .comment-respond p {
    margin: 0 0 1px 0;
}
 .comment-respond input,  .comment-respond  textarea {
    width: 100%;
    height: 52px;
    border:none;
    padding: 15px;
    resize: none;
    box-sizing: border-box;
}
 .comment-respond  textarea {
    height: 145px;
    padding-left: 15px;
}
 .comment-respond input[type=submit] {
    float: right;
    padding: 20px 45px;
    background:#fed41d;
    border: none;
    width: auto;
    line-height: 0;
    margin-top: 20px;
    font-weight: 700;
    font-size: 15px;
}
 .comment-form-author,  .comment-form-email {
    margin-bottom: 3px!important;
}
 /* rest */

 #contact
	 #ucontact-home-footer-contact .submit-field {
			float:right;
			background:#645191;
			border:none;
			padding:10px 20px;
			color:#fff;
			margin:15px 25px;
}
 #ucontact-home-footer-contact .ucontact-input {
			height:50px;
			margin:0;
			padding:15px;
			line-height:50px;
}
 ::-webkit-input-placeholder {
		 color: #343434;
}
 :-moz-placeholder {
		 color: #343434;
}
 ::-moz-placeholder {
		 color: #343434;
}
 :-ms-input-placeholder {
		 color: #343434;
}
 #ucontact-home-footer-contact .upfront-field-container {
			margin:0;
}
 #ucontact-home-footer-contact .textarea-field {
			height:150px;
}
',
	'theme_fonts' => '[{\"id\":\"Ralewayregular\",\"font\":{\"family\":\"Raleway\",\"category\":\"sans-serif\",\"variants\":[\"100\",\"200\",\"300\",\"regular\",\"500\",\"600\",\"700\",\"800\",\"900\"]},\"variant\":\"regular\",\"displayVariant\":\"regular\"},{\"id\":\"Raleway500\",\"font\":{\"family\":\"Raleway\",\"category\":\"sans-serif\",\"variants\":[\"100\",\"200\",\"300\",\"regular\",\"500\",\"600\",\"700\",\"800\",\"900\"]},\"variant\":\"500\",\"displayVariant\":\"500 normal\"},{\"id\":\"Raleway600\",\"font\":{\"family\":\"Raleway\",\"category\":\"sans-serif\",\"variants\":[\"100\",\"200\",\"300\",\"regular\",\"500\",\"600\",\"700\",\"800\",\"900\"]},\"variant\":\"600\",\"displayVariant\":\"600 normal\"},{\"id\":\"Raleway700\",\"font\":{\"family\":\"Raleway\",\"category\":\"sans-serif\",\"variants\":[\"100\",\"200\",\"300\",\"regular\",\"500\",\"600\",\"700\",\"800\",\"900\"]},\"variant\":\"700\",\"displayVariant\":\"700 normal\"},{\"id\":\"Raleway900\",\"font\":{\"family\":\"Raleway\",\"category\":\"sans-serif\",\"variants\":[\"100\",\"200\",\"300\",\"regular\",\"500\",\"600\",\"700\",\"800\",\"900\"]},\"variant\":\"900\",\"displayVariant\":\"900 normal\"}]',
	'theme_colors' => '{\"range\":\"0\"}',
	'layout_properties' => '[]',
	'menus' => '[{\"id\":false,\"slug\":\"fixer-menu\",\"name\":\"Fixer menu\",\"description\":\"\",\"items\":[{\"ID\":44,\"post_author\":\"1\",\"post_date\":\"2015-01-29 10:15:41\",\"post_date_gmt\":\"2015-01-29 10:15:41\",\"post_content\":\"\",\"post_title\":\"Service\",\"post_excerpt\":\"\",\"post_status\":\"publish\",\"comment_status\":\"open\",\"ping_status\":\"open\",\"post_password\":\"\",\"post_name\":\"service\",\"to_ping\":\"\",\"pinged\":\"\",\"post_modified\":\"2015-01-29 10:15:41\",\"post_modified_gmt\":\"2015-01-29 10:15:41\",\"post_content_filtered\":\"\",\"post_parent\":0,\"guid\":\"http:\\/\\/upfront.dev\\/service\\/\",\"menu_order\":1,\"post_type\":\"nav_menu_item\",\"post_mime_type\":\"\",\"comment_count\":\"0\",\"filter\":\"raw\",\"db_id\":44,\"menu_item_parent\":\"0\",\"object_id\":\"44\",\"object\":\"custom\",\"type\":\"custom\",\"type_label\":\"Custom\",\"title\":\"Service\",\"url\":\"%siteurl%\\/#services\",\"target\":\"\",\"attr_title\":\"\",\"description\":\"\",\"classes\":[\"\"],\"xfn\":\"\"},{\"ID\":45,\"post_author\":\"1\",\"post_date\":\"2015-01-29 10:15:41\",\"post_date_gmt\":\"2015-01-29 10:15:41\",\"post_content\":\"\",\"post_title\":\"Get a Quote\",\"post_excerpt\":\"\",\"post_status\":\"publish\",\"comment_status\":\"open\",\"ping_status\":\"open\",\"post_password\":\"\",\"post_name\":\"get-a-quote\",\"to_ping\":\"\",\"pinged\":\"\",\"post_modified\":\"2015-01-29 10:15:41\",\"post_modified_gmt\":\"2015-01-29 10:15:41\",\"post_content_filtered\":\"\",\"post_parent\":0,\"guid\":\"http:\\/\\/upfront.dev\\/get-a-quote\\/\",\"menu_order\":2,\"post_type\":\"nav_menu_item\",\"post_mime_type\":\"\",\"comment_count\":\"0\",\"filter\":\"raw\",\"db_id\":45,\"menu_item_parent\":\"0\",\"object_id\":\"45\",\"object\":\"custom\",\"type\":\"custom\",\"type_label\":\"Custom\",\"title\":\"Get a Quote\",\"url\":\"%siteurl%\\/#quote\",\"target\":\"\",\"attr_title\":\"\",\"description\":\"\",\"classes\":[\"\"],\"xfn\":\"\"},{\"ID\":46,\"post_author\":\"1\",\"post_date\":\"2015-01-29 10:15:41\",\"post_date_gmt\":\"2015-01-29 10:15:41\",\"post_content\":\"\",\"post_title\":\"Blog\",\"post_excerpt\":\"\",\"post_status\":\"publish\",\"comment_status\":\"open\",\"ping_status\":\"open\",\"post_password\":\"\",\"post_name\":\"blog\",\"to_ping\":\"\",\"pinged\":\"\",\"post_modified\":\"2015-01-29 10:15:41\",\"post_modified_gmt\":\"2015-01-29 10:15:41\",\"post_content_filtered\":\"\",\"post_parent\":0,\"guid\":\"http:\\/\\/upfront.dev\\/blog\\/\",\"menu_order\":3,\"post_type\":\"nav_menu_item\",\"post_mime_type\":\"\",\"comment_count\":\"0\",\"filter\":\"raw\",\"db_id\":46,\"menu_item_parent\":\"0\",\"object_id\":\"46\",\"object\":\"custom\",\"type\":\"custom\",\"type_label\":\"Custom\",\"title\":\"Blog\",\"url\":\"%siteurl%\\/blog\",\"target\":\"\",\"attr_title\":\"\",\"description\":\"\",\"classes\":[\"\"],\"xfn\":\"\"},{\"ID\":47,\"post_author\":\"1\",\"post_date\":\"2015-01-29 10:15:41\",\"post_date_gmt\":\"2015-01-29 10:15:41\",\"post_content\":\"\",\"post_title\":\"About\",\"post_excerpt\":\"\",\"post_status\":\"publish\",\"comment_status\":\"open\",\"ping_status\":\"open\",\"post_password\":\"\",\"post_name\":\"about\",\"to_ping\":\"\",\"pinged\":\"\",\"post_modified\":\"2015-01-29 10:15:41\",\"post_modified_gmt\":\"2015-01-29 10:15:41\",\"post_content_filtered\":\"\",\"post_parent\":0,\"guid\":\"http:\\/\\/upfront.dev\\/about\\/\",\"menu_order\":4,\"post_type\":\"nav_menu_item\",\"post_mime_type\":\"\",\"comment_count\":\"0\",\"filter\":\"raw\",\"db_id\":47,\"menu_item_parent\":\"0\",\"object_id\":\"47\",\"object\":\"custom\",\"type\":\"custom\",\"type_label\":\"Custom\",\"title\":\"About\",\"url\":\"%siteurl%\\/#about\",\"target\":\"\",\"attr_title\":\"\",\"description\":\"\",\"classes\":[\"\"],\"xfn\":\"\"},{\"ID\":48,\"post_author\":\"1\",\"post_date\":\"2015-01-29 10:15:41\",\"post_date_gmt\":\"2015-01-29 10:15:41\",\"post_content\":\"\",\"post_title\":\"Coverage Area\",\"post_excerpt\":\"\",\"post_status\":\"publish\",\"comment_status\":\"open\",\"ping_status\":\"open\",\"post_password\":\"\",\"post_name\":\"coverage-area\",\"to_ping\":\"\",\"pinged\":\"\",\"post_modified\":\"2015-01-29 10:15:41\",\"post_modified_gmt\":\"2015-01-29 10:15:41\",\"post_content_filtered\":\"\",\"post_parent\":0,\"guid\":\"http:\\/\\/upfront.dev\\/coverage-area\\/\",\"menu_order\":5,\"post_type\":\"nav_menu_item\",\"post_mime_type\":\"\",\"comment_count\":\"0\",\"filter\":\"raw\",\"db_id\":48,\"menu_item_parent\":\"0\",\"object_id\":\"48\",\"object\":\"custom\",\"type\":\"custom\",\"type_label\":\"Custom\",\"title\":\"Coverage Area\",\"url\":\"%siteurl%\\/#coverage\",\"target\":\"\",\"attr_title\":\"\",\"description\":\"\",\"classes\":[\"\"],\"xfn\":\"\"}]},{\"id\":false,\"slug\":null,\"name\":null,\"description\":null,\"items\":false},{\"id\":false,\"slug\":\"footer-fixer-menu\",\"name\":\"Footer Fixer Menu\",\"description\":\"\",\"items\":[{\"ID\":13,\"post_author\":\"1\",\"post_date\":\"2015-01-25 21:42:19\",\"post_date_gmt\":\"2015-01-25 21:42:19\",\"post_content\":\"\",\"post_title\":\"Cases\",\"post_excerpt\":\"\",\"post_status\":\"publish\",\"comment_status\":\"open\",\"ping_status\":\"open\",\"post_password\":\"\",\"post_name\":\"cases\",\"to_ping\":\"\",\"pinged\":\"\",\"post_modified\":\"2015-01-25 21:42:19\",\"post_modified_gmt\":\"2015-01-25 21:42:19\",\"post_content_filtered\":\"\",\"post_parent\":0,\"guid\":\"http:\\/\\/upfront.dev\\/cases\\/\",\"menu_order\":1,\"post_type\":\"nav_menu_item\",\"post_mime_type\":\"\",\"comment_count\":\"0\",\"filter\":\"raw\",\"db_id\":13,\"menu_item_parent\":\"0\",\"object_id\":\"13\",\"object\":\"custom\",\"type\":\"custom\",\"type_label\":\"Custom\",\"title\":\"Cases\",\"url\":\"%siteurl%\\/cases\\/\",\"target\":\"\",\"attr_title\":\"\",\"description\":\"\",\"classes\":[\"\"],\"xfn\":\"\"},{\"ID\":14,\"post_author\":\"1\",\"post_date\":\"2015-01-25 21:42:19\",\"post_date_gmt\":\"2015-01-25 21:42:19\",\"post_content\":\"\",\"post_title\":\"Archive\",\"post_excerpt\":\"\",\"post_status\":\"publish\",\"comment_status\":\"open\",\"ping_status\":\"open\",\"post_password\":\"\",\"post_name\":\"archive\",\"to_ping\":\"\",\"pinged\":\"\",\"post_modified\":\"2015-01-25 21:42:19\",\"post_modified_gmt\":\"2015-01-25 21:42:19\",\"post_content_filtered\":\"\",\"post_parent\":0,\"guid\":\"http:\\/\\/upfront.dev\\/archive\\/\",\"menu_order\":2,\"post_type\":\"nav_menu_item\",\"post_mime_type\":\"\",\"comment_count\":\"0\",\"filter\":\"raw\",\"db_id\":14,\"menu_item_parent\":\"0\",\"object_id\":\"14\",\"object\":\"custom\",\"type\":\"custom\",\"type_label\":\"Custom\",\"title\":\"Archive\",\"url\":\"%siteurl%\\/?s=\",\"target\":\"\",\"attr_title\":\"\",\"description\":\"\",\"classes\":[\"\"],\"xfn\":\"\"}]}]',
	'global_regions' => '[{\"properties\":[{\"name\":\"row\",\"value\":24},{\"name\":\"background_type\",\"value\":\"color\"},{\"name\":\"nav_region\",\"value\":\"\"},{\"name\":\"background_color\",\"value\":\"rgba(255,255,255,0)\"}],\"modules\":[{\"name\":\"\",\"properties\":[{\"name\":\"row\",\"value\":4},{\"name\":\"class\",\"value\":\"c4 ml0 mr0 mt9 mb0 module-1405520755986-1686\"},{\"name\":\"element_id\",\"value\":\"module-1405520755986-1686\"},{\"name\":\"sticky\",\"value\":false},{\"name\":\"wrapper_id\",\"value\":\"wrapper-1405520755986-1686\"}],\"objects\":[{\"name\":\"\",\"properties\":[{\"name\":\"src\",\"value\":\"\/wp-content\/uploads\/2014\/09\/fixer-logo-120x30-2906.png\"},{\"name\":\"srcFull\",\"value\":\"\/wp-content\/uploads\/2014\/09\/fixer-logo.png\"},{\"name\":\"srcOriginal\",\"value\":\"\/wp-content\/uploads\/2014\/09\/fixer-logo.png\"},{\"name\":\"image_title\",\"value\":\"\"},{\"name\":\"alternative_text\",\"value\":\"\"},{\"name\":\"when_clicked\",\"value\":\"entry\"},{\"name\":\"image_link\",\"value\":\"\/\"},{\"name\":\"include_image_caption\",\"value\":false},{\"name\":\"image_caption\",\"value\":\"My awesome image caption\"},{\"name\":\"caption_position\",\"value\":\"below_image\"},{\"name\":\"caption_alignment\",\"value\":\"top\"},{\"name\":\"caption_trigger\",\"value\":\"always_show\"},{\"name\":\"image_status\",\"value\":\"ok\"},{\"name\":\"size\",\"value\":{\"width\":120,\"height\":30}},{\"name\":\"fullSize\",\"value\":{\"width\":120,\"height\":30}},{\"name\":\"position\",\"value\":{\"top\":0,\"left\":-15}},{\"name\":\"marginTop\",\"value\":0},{\"name\":\"element_size\",\"value\":{\"width\":150,\"height\":30}},{\"name\":\"rotation\",\"value\":0},{\"name\":\"color\",\"value\":\"#ffffff\"},{\"name\":\"background\",\"value\":\"#000000\"},{\"name\":\"captionBackground\",\"value\":\"0\"},{\"name\":\"image_id\",\"value\":\"9\"},{\"name\":\"align\",\"value\":\"center\"},{\"name\":\"stretch\",\"value\":false},{\"name\":\"vstretch\",\"value\":true},{\"name\":\"quick_swap\",\"value\":false},{\"name\":\"gifImage\",\"value\":0},{\"name\":\"type\",\"value\":\"UimageModel\"},{\"name\":\"view_class\",\"value\":\"UimageView\"},{\"name\":\"has_settings\",\"value\":1},{\"name\":\"class\",\"value\":\"c24 upfront-image\"},{\"name\":\"id_slug\",\"value\":\"image\"},{\"name\":\"element_id\",\"value\":\"image-1405520755973-1481\"},{\"name\":\"row\",\"value\":-2},{\"name\":\"theme_style\",\"value\":\"\"},{\"name\":\"anchor\",\"value\":\"\"}],\"element_id\":\"\"}]},{\"name\":\"\",\"properties\":[{\"name\":\"row\",\"value\":11},{\"name\":\"class\",\"value\":\"c14 ml0 mr0 mt8 mb0 module-1405520756070-1345\"},{\"name\":\"element_id\",\"value\":\"module-1405520756070-1345\"},{\"name\":\"sticky\",\"value\":false},{\"name\":\"wrapper_id\",\"value\":\"wrapper-1405520756070-1345\"}],\"objects\":[{\"name\":\"\",\"properties\":[{\"name\":\"type\",\"value\":\"UnewnavigationModel\"},{\"name\":\"view_class\",\"value\":\"UnewnavigationView\"},{\"name\":\"class\",\"value\":\"c24 upfront-navigation\"},{\"name\":\"has_settings\",\"value\":1},{\"name\":\"id_slug\",\"value\":\"unewnavigation\"},{\"name\":\"menu_items\",\"value\":[{\"menu-item-db-id\":4,\"menu-item-parent-id\":\"0\",\"menu-item-type\":\"custom\",\"menu-item-title\":\"Service\",\"menu-item-url\":\"#service\",\"menu-item-object\":\"custom\",\"menu-item-object-id\":\"4\",\"menu-item-target\":\"\",\"menu-item-position\":1},{\"menu-item-db-id\":5,\"menu-item-parent-id\":\"0\",\"menu-item-type\":\"custom\",\"menu-item-title\":\"Get a Quote\",\"menu-item-url\":\"#quote\",\"menu-item-object\":\"custom\",\"menu-item-object-id\":\"5\",\"menu-item-target\":\"\",\"menu-item-position\":2},{\"menu-item-db-id\":6,\"menu-item-parent-id\":\"0\",\"menu-item-type\":\"custom\",\"menu-item-title\":\"Blog\",\"menu-item-url\":\"blog\",\"menu-item-object\":\"custom\",\"menu-item-object-id\":\"6\",\"menu-item-target\":\"\",\"menu-item-position\":3},{\"menu-item-db-id\":7,\"menu-item-parent-id\":\"0\",\"menu-item-type\":\"custom\",\"menu-item-title\":\"About\",\"menu-item-url\":\"#about\",\"menu-item-object\":\"custom\",\"menu-item-object-id\":\"7\",\"menu-item-target\":\"\",\"menu-item-position\":4},{\"menu-item-db-id\":8,\"menu-item-parent-id\":\"0\",\"menu-item-type\":\"custom\",\"menu-item-title\":\"Coverage Area\",\"menu-item-url\":\"#coveragearea\",\"menu-item-object\":\"custom\",\"menu-item-object-id\":\"8\",\"menu-item-target\":\"\",\"menu-item-position\":5}]},{\"name\":\"menu_style\",\"value\":\"horizontal\"},{\"name\":\"menu_alignment\",\"value\":\"left\"},{\"name\":\"allow_sub_nav\",\"value\":[\"no\"]},{\"name\":\"allow_new_pages\",\"value\":[]},{\"name\":\"element_id\",\"value\":\"unewnavigation-object-1405520756062-1726\"},{\"name\":\"initialized\",\"value\":false},{\"name\":\"menu_id\",\"value\":2},{\"name\":\"menu_slug\",\"value\":\"fixer-menu\"},{\"name\":\"is_floating\",\"value\":[]},{\"name\":\"theme_style\",\"value\":\"_default\"},{\"name\":\"anchor\",\"value\":\"\"},{\"name\":\"row\",\"value\":5},{\"name\":\"burger_menu\",\"value\":[]},{\"name\":\"burger_alignment\",\"value\":\"left\"},{\"name\":\"burger_over\",\"value\":\"over\"},{\"name\":\"breakpoint\",\"value\":{\"desktop\":{\"burger_alignment\":\"left\",\"burger_over\":\"over\",\"width\":1080}}}],\"element_id\":\"\"}]},{\"name\":\"\",\"properties\":[{\"name\":\"row\",\"value\":18},{\"name\":\"class\",\"value\":\"c6 ml0 mr0 mt4 mb0 module-1405520755970-1045\"},{\"name\":\"element_id\",\"value\":\"module-1405520755970-1045\"},{\"name\":\"sticky\",\"value\":false},{\"name\":\"wrapper_id\",\"value\":\"wrapper-1405520755970-1045\"}],\"objects\":[{\"name\":\"\",\"properties\":[{\"name\":\"view_class\",\"value\":\"PlainTxtView\"},{\"name\":\"id_slug\",\"value\":\"plain_text\"},{\"name\":\"content\",\"value\":\"<p style=\"text-align: right;\" class=\"\">One call does it all<\/p><h2 style=\"text-align: right;\" class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 27px; top: 0px;\">a&nbsp;<\/span>1300 FIXER<\/h2>\"},{\"name\":\"type\",\"value\":\"PlainTxtModel\"},{\"name\":\"element_id\",\"value\":\"text-object-1405520755969-1764\"},{\"name\":\"class\",\"value\":\"c24 upfront-plain_txt\"},{\"name\":\"has_settings\",\"value\":1},{\"name\":\"is_edited\",\"value\":true},{\"name\":\"border_style\",\"value\":\"none\"},{\"name\":\"border_width\",\"value\":\"0\"},{\"name\":\"border_color\",\"value\":\"\"},{\"name\":\"bg_color\",\"value\":\"\"},{\"name\":\"theme_style\",\"value\":\"header-contact-text\"},{\"name\":\"anchor\",\"value\":\"\"},{\"name\":\"row\",\"value\":12}],\"element_id\":\"\"}]}],\"wrappers\":[{\"name\":\"\",\"properties\":[{\"name\":\"wrapper_id\",\"value\":\"wrapper-1405520755986-1686\"},{\"name\":\"class\",\"value\":\" c4 clr\"},{\"name\":\"breakpoint\",\"value\":{\"tablet\":{\"col\":4},\"mobile\":{\"col\":4}}}]},{\"name\":\"\",\"properties\":[{\"name\":\"wrapper_id\",\"value\":\"wrapper-1405520756070-1345\"},{\"name\":\"class\",\"value\":\" c14\"},{\"name\":\"breakpoint\",\"value\":{\"tablet\":{\"col\":14},\"mobile\":{\"col\":14}}}]},{\"name\":\"\",\"properties\":[{\"name\":\"wrapper_id\",\"value\":\"wrapper-1405520755970-1045\"},{\"name\":\"class\",\"value\":\" c6\"},{\"name\":\"breakpoint\",\"value\":{\"tablet\":{\"col\":6},\"mobile\":{\"col\":6}}}]}],\"name\":\"header\",\"title\":\"Header\",\"scope\":\"global\",\"container\":\"header\",\"default\":false,\"position\":1,\"allow_sidebar\":true,\"type\":\"wide\"},{\"properties\":[{\"name\":\"row\",\"value\":9},{\"name\":\"background_type\",\"value\":\"color\"},{\"name\":\"nav_region\",\"value\":\"\"},{\"name\":\"background_color\",\"value\":\"rgba(44,44,44,1)\"},{\"name\":\"expand_lock\",\"value\":false}],\"modules\":[{\"name\":\"\",\"properties\":[{\"name\":\"row\",\"value\":10},{\"name\":\"class\",\"value\":\"c3 ml0 mr0 mt0 mb0 module-1406217409056-1339\"},{\"name\":\"element_id\",\"value\":\"module-1406217409056-1339\"},{\"name\":\"sticky\",\"value\":false},{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406217409056-1339\"}],\"objects\":[{\"name\":\"\",\"properties\":[{\"name\":\"src\",\"value\":\"\/wp-content\/uploads\/2014\/09\/fixer-logo-white-100x20-3868.png\"},{\"name\":\"srcFull\",\"value\":\"\/wp-content\/uploads\/2014\/09\/fixer-logo-white.png\"},{\"name\":\"srcOriginal\",\"value\":\"\/wp-content\/uploads\/2014\/09\/fixer-logo-white.png\"},{\"name\":\"image_title\",\"value\":\"\"},{\"name\":\"alternative_text\",\"value\":\"\"},{\"name\":\"when_clicked\",\"value\":false},{\"name\":\"image_link\",\"value\":\"\"},{\"name\":\"include_image_caption\",\"value\":false},{\"name\":\"image_caption\",\"value\":\"My awesome image caption\"},{\"name\":\"caption_position\",\"value\":\"below_image\"},{\"name\":\"caption_alignment\",\"value\":\"top\"},{\"name\":\"caption_trigger\",\"value\":\"always_show\"},{\"name\":\"image_status\",\"value\":\"ok\"},{\"name\":\"size\",\"value\":{\"width\":100,\"height\":30}},{\"name\":\"fullSize\",\"value\":{\"width\":100,\"height\":30}},{\"name\":\"position\",\"value\":{\"top\":5,\"left\":-2.5}},{\"name\":\"marginTop\",\"value\":0},{\"name\":\"element_size\",\"value\":{\"width\":105,\"height\":20}},{\"name\":\"rotation\",\"value\":0},{\"name\":\"color\",\"value\":\"#ffffff\"},{\"name\":\"background\",\"value\":\"#000000\"},{\"name\":\"captionBackground\",\"value\":\"0\"},{\"name\":\"image_id\",\"value\":\"10\"},{\"name\":\"align\",\"value\":\"center\"},{\"name\":\"stretch\",\"value\":false},{\"name\":\"vstretch\",\"value\":true},{\"name\":\"quick_swap\",\"value\":false},{\"name\":\"gifImage\",\"value\":0},{\"name\":\"type\",\"value\":\"UimageModel\"},{\"name\":\"view_class\",\"value\":\"UimageView\"},{\"name\":\"has_settings\",\"value\":1},{\"name\":\"class\",\"value\":\"c24 upfront-image\"},{\"name\":\"id_slug\",\"value\":\"image\"},{\"name\":\"element_id\",\"value\":\"image-1406217409054-1200\"},{\"name\":\"row\",\"value\":4}],\"element_id\":\"\"}]},{\"name\":\"\",\"properties\":[{\"name\":\"row\",\"value\":12},{\"name\":\"class\",\"value\":\"c6 ml0 mr0 mt0 mb0 module-1406217940549-1616\"},{\"name\":\"element_id\",\"value\":\"module-1406217940549-1616\"},{\"name\":\"sticky\",\"value\":false},{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406217940549-1616\"}],\"objects\":[{\"name\":\"\",\"properties\":[{\"name\":\"view_class\",\"value\":\"PlainTxtView\"},{\"name\":\"id_slug\",\"value\":\"plain_text\"},{\"name\":\"content\",\"value\":\"<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">u00a9 2oo6-2014 Fixer Pty Ltd<\/span><\/p>\"},{\"name\":\"type\",\"value\":\"PlainTxtModel\"},{\"name\":\"element_id\",\"value\":\"text-object-1406217940549-1478\"},{\"name\":\"class\",\"value\":\"c24 upfront-plain_txt\"},{\"name\":\"has_settings\",\"value\":1},{\"name\":\"row\",\"value\":6},{\"name\":\"is_edited\",\"value\":true},{\"name\":\"border_style\",\"value\":\"none\"},{\"name\":\"border_width\",\"value\":1},{\"name\":\"border_color\",\"value\":\"\"},{\"name\":\"bg_color\",\"value\":\"\"},{\"name\":\"theme_style\",\"value\":\"plaintext-footer\"},{\"name\":\"anchor\",\"value\":\"\"}],\"element_id\":\"\"}]},{\"name\":\"\",\"properties\":[{\"name\":\"row\",\"value\":12},{\"name\":\"class\",\"value\":\"c7 ml4 mr0 mt1 mb0 module-1406218508045-1635\"},{\"name\":\"element_id\",\"value\":\"module-1406218508045-1635\"},{\"name\":\"sticky\",\"value\":false},{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406218508045-1635\"}],\"objects\":[{\"name\":\"\",\"properties\":[{\"name\":\"view_class\",\"value\":\"PlainTxtView\"},{\"name\":\"id_slug\",\"value\":\"plain_text\"},{\"name\":\"content\",\"value\":\"<p class=\"\" style=\"text-align: right;\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">ABN - 58 121 227 072<\/span><\/p>\"},{\"name\":\"type\",\"value\":\"PlainTxtModel\"},{\"name\":\"element_id\",\"value\":\"object-1406218508045-1484\"},{\"name\":\"class\",\"value\":\"c24 upfront-plain_txt\"},{\"name\":\"has_settings\",\"value\":1},{\"name\":\"row\",\"value\":6},{\"name\":\"is_edited\",\"value\":true},{\"name\":\"border_style\",\"value\":\"none\"},{\"name\":\"border_width\",\"value\":1},{\"name\":\"border_color\",\"value\":\"\"},{\"name\":\"bg_color\",\"value\":\"\"},{\"name\":\"theme_style\",\"value\":\"plaintext-footer\"},{\"name\":\"anchor\",\"value\":\"\"}],\"element_id\":\"\"}]},{\"name\":\"\",\"properties\":[{\"name\":\"row\",\"value\":8},{\"name\":\"class\",\"value\":\"c3 ml1 mr0 mt1 mb0 module-1406218404636-1484\"},{\"name\":\"element_id\",\"value\":\"module-1406218404636-1484\"},{\"name\":\"sticky\",\"value\":false},{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406218404636-1484\"}],\"objects\":[{\"name\":\"\",\"properties\":[{\"name\":\"view_class\",\"value\":\"PlainTxtView\"},{\"name\":\"id_slug\",\"value\":\"plain_text\"},{\"name\":\"content\",\"value\":\"<p class=\"\"><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">TOU &amp; Privary<\/span><\/p>\"},{\"name\":\"type\",\"value\":\"PlainTxtModel\"},{\"name\":\"element_id\",\"value\":\"text-object-1406218404628-1646\"},{\"name\":\"class\",\"value\":\"c24 upfront-plain_txt\"},{\"name\":\"has_settings\",\"value\":1},{\"name\":\"row\",\"value\":2},{\"name\":\"is_edited\",\"value\":true},{\"name\":\"border_style\",\"value\":\"none\"},{\"name\":\"border_width\",\"value\":1},{\"name\":\"border_color\",\"value\":\"\"},{\"name\":\"bg_color\",\"value\":\"\"},{\"name\":\"theme_style\",\"value\":\"plaintext-footer\"},{\"name\":\"anchor\",\"value\":\"\"}],\"element_id\":\"\"}]}],\"wrappers\":[{\"name\":\"\",\"properties\":[{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406217409056-1339\"},{\"name\":\"class\",\"value\":\" c3\"},{\"name\":\"breakpoint\",\"value\":{\"tablet\":{\"col\":3},\"mobile\":{\"col\":3}}}]},{\"name\":\"\",\"properties\":[{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406217940549-1616\"},{\"name\":\"class\",\"value\":\" c6\"},{\"name\":\"breakpoint\",\"value\":{\"tablet\":{\"col\":6},\"mobile\":{\"col\":6}}}]},{\"name\":\"\",\"properties\":[{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406218508045-1635\"},{\"name\":\"class\",\"value\":\" c11\"},{\"name\":\"breakpoint\",\"value\":{\"tablet\":{\"col\":11},\"mobile\":{\"col\":11}}}]},{\"name\":\"\",\"properties\":[{\"name\":\"wrapper_id\",\"value\":\"wrapper-1406218404636-1484\"},{\"name\":\"class\",\"value\":\" c4\"},{\"name\":\"breakpoint\",\"value\":{\"tablet\":{\"col\":4},\"mobile\":{\"col\":4}}}]}],\"name\":\"footer\",\"title\":\"Footer\",\"scope\":\"global\",\"container\":\"footer\",\"default\":false,\"position\":1,\"allow_sidebar\":true,\"type\":\"wide\"}]',
	'required_pages' => '{\"jljkl\":{\"name\":\"Jljkl\",\"slug\":\"jljkl\",\"layout\":\"single-page-jljkl\"},\"cases\":{\"name\":\"Cases\",\"slug\":\"cases\",\"layout\":\"single-page-cases\"},\"blog\":{\"name\":\"Blog\",\"slug\":\"blog\",\"layout\":\"single-page-blog\"},\"testing\":{\"name\":\"Testing\",\"slug\":\"testing\",\"layout\":\"single-page-testing\"}}',
	'button_presets' => '[{\"id\":\"white-borders-button\",\"bordertype\":\"solid\",\"borderwidth\":\"3\",\"bordercolor\":\"rgb(255, 255, 255)\",\"borderradius1\":\"0\",\"borderradius2\":\"0\",\"borderradius4\":\"0\",\"borderradius3\":\"0\",\"bgcolor\":\"rgba(0, 0, 0, 0)\",\"fontsize\":\"15\",\"fontface\":\"Raleway\",\"color\":\"rgb(255, 255, 255)\",\"hov_duration\":\"0.25\",\"hov_transition\":\"ease\",\"theme_style\":\"white-borders-button-extra\"},{\"id\":\"black-borders-button\",\"bordertype\":\"solid\",\"borderwidth\":\"3\",\"bordercolor\":\"rgb(51, 51, 51)\",\"borderradius1\":\"0\",\"borderradius2\":\"0\",\"borderradius4\":\"0\",\"borderradius3\":\"0\",\"bgcolor\":\"rgba(0, 0, 0, 0)\",\"fontsize\":\"15\",\"fontface\":\"Raleway\",\"color\":\"rgb(51, 51, 51)\",\"hov_duration\":\"0.25\",\"hov_transition\":\"ease\",\"theme_style\":\"black-borders-button-extra\"}]',
	'responsive_settings' => '{\"breakpoints\":[{\"name\":\"Default Desktop\",\"short_name\":\"Default\",\"default\":true,\"id\":\"desktop\",\"width\":1080,\"columns\":24,\"enabled\":true,\"fixed\":true,\"active\":\"false\",\"typography\":{\"h1\":{\"weight\":\"900\",\"style\":\"normal\",\"size\":\"110\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h2\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h3\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"0\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"h4\":{\"weight\":\"500\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h5\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"22\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"p\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"15\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"}},\"styles\":\"\"},{\"name\":\"Tablet\",\"short_name\":\"Tablet\",\"id\":\"tablet\",\"width\":570,\"columns\":12,\"enabled\":true,\"fixed\":true,\"default\":false,\"active\":\"false\",\"typography\":{\"h1\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"110\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h2\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.2\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h3\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.5\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h4\":{\"weight\":\"500\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h5\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"22\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"p\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"15\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"}},\"styles\":\"\"},{\"name\":\"Mobile\",\"short_name\":\"Mobile\",\"id\":\"mobile\",\"width\":315,\"columns\":7,\"enabled\":true,\"fixed\":true,\"default\":false,\"active\":\"true\",\"typography\":{\"h1\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"58\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h2\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.2\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h3\":{\"weight\":\"600\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h4\":{\"weight\":\"500\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h5\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"22\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"p\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"15\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"}},\"styles\":\"\"}]}',
	'post_image_variants' => '[{\"vid\":\"variant-1414082104315-1342\",\"label\":\"Left\",\"group\":{\"margin_left\":\"0\",\"margin_right\":\"0\",\"col\":\"12\",\"row\":\"66\",\"left\":\"0\",\"float\":\"left\",\"height\":\"300\",\"width_cls\":\"c12\",\"left_cls\":\"ml0\",\"clear_cls\":\"\"},\"image\":{\"order\":\"0\",\"col\":\"24\",\"top\":\"0\",\"left\":\"0\",\"row\":\"51\",\"clear\":\"true\",\"height\":\"255\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"},\"caption\":{\"show\":\"1\",\"order\":\"1\",\"col\":\"12\",\"top\":\"0\",\"left\":\"0\",\"row\":\"10\",\"clear\":\"true\",\"height\":\"50\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"}},{\"vid\":\"variant-1414082128389-1073\",\"label\":\"Right\",\"group\":{\"margin_left\":\"0\",\"margin_right\":\"0\",\"col\":\"12\",\"row\":\"65\",\"left\":\"0\",\"float\":\"right\",\"height\":\"300\",\"width_cls\":\"c12\",\"left_cls\":\"ml0\",\"clear_cls\":\"\"},\"image\":{\"order\":\"0\",\"col\":\"24\",\"top\":\"0\",\"left\":\"0\",\"row\":\"51\",\"clear\":\"true\",\"height\":\"255\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"},\"caption\":{\"show\":\"1\",\"order\":\"1\",\"col\":\"13\",\"top\":\"0\",\"left\":\"0\",\"row\":\"10\",\"clear\":\"true\",\"height\":\"50\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"}},{\"vid\":\"variant-1414082154417-1612\",\"label\":\"Full Width\",\"group\":{\"margin_left\":\"0\",\"margin_right\":\"0\",\"col\":\"24\",\"row\":\"60\",\"left\":\"0\",\"float\":\"none\",\"height\":\"300\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"\"},\"image\":{\"order\":\"0\",\"col\":\"24\",\"top\":\"0\",\"left\":\"0\",\"row\":\"51\",\"clear\":\"true\",\"height\":\"255\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"},\"caption\":{\"show\":\"1\",\"order\":\"1\",\"col\":\"24\",\"top\":\"0\",\"left\":\"0\",\"row\":\"10\",\"clear\":\"true\",\"height\":\"50\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"}},{\"vid\":\"variant-1414082173807-1526\",\"label\":\"Center\",\"group\":{\"margin_left\":\"0\",\"margin_right\":\"0\",\"col\":\"16\",\"row\":\"63\",\"left\":\"4\",\"float\":\"none\",\"height\":\"300\",\"width_cls\":\"c16\",\"left_cls\":\"ml0\",\"clear_cls\":\"\"},\"image\":{\"order\":\"0\",\"col\":\"24\",\"top\":\"0\",\"left\":\"0\",\"row\":\"51\",\"clear\":\"true\",\"height\":\"255\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"},\"caption\":{\"show\":\"1\",\"order\":\"1\",\"col\":\"16\",\"top\":\"0\",\"left\":\"0\",\"row\":\"10\",\"clear\":\"true\",\"height\":\"50\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"}},{\"vid\":\"variant-1414082210132-1390\",\"label\":\"Left caption right\",\"group\":{\"margin_left\":\"0\",\"margin_right\":\"0\",\"col\":\"12\",\"row\":\"47\",\"left\":\"0\",\"float\":\"left\",\"height\":\"300\",\"width_cls\":\"c12\",\"left_cls\":\"ml0\",\"clear_cls\":\"\"},\"image\":{\"order\":\"0\",\"col\":\"7\",\"top\":\"0\",\"left\":\"0\",\"row\":\"47\",\"clear\":\"true\",\"height\":\"255\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"},\"caption\":{\"show\":\"1\",\"order\":\"1\",\"col\":\"5\",\"top\":\"10\",\"left\":\"0\",\"row\":\"10\",\"clear\":\"false\",\"height\":\"50\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"}},{\"vid\":\"variant-1414082243148-1249\",\"label\":\"Right caption left\",\"group\":{\"margin_left\":\"0\",\"margin_right\":\"0\",\"col\":\"12\",\"row\":\"62\",\"left\":\"0\",\"float\":\"right\",\"height\":\"300\",\"width_cls\":\"c12\",\"left_cls\":\"ml0\",\"clear_cls\":\"\"},\"image\":{\"order\":\"1\",\"col\":\"8\",\"top\":\"0\",\"left\":\"-8\",\"row\":\"051\",\"clear\":\"false\",\"height\":\"255\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"},\"caption\":{\"show\":\"1\",\"order\":\"0\",\"col\":\"4\",\"top\":\"1\",\"left\":\"0\",\"row\":\"10\",\"clear\":\"true\",\"height\":\"50\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"}},{\"vid\":\"variant-1414082289322-1599\",\"label\":\"Full width caption above\",\"group\":{\"margin_left\":\"0\",\"margin_right\":\"0\",\"col\":\"24\",\"row\":\"60\",\"left\":\"0\",\"float\":\"none\",\"height\":\"300\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"\"},\"image\":{\"order\":\"1\",\"col\":\"24\",\"top\":\"0\",\"left\":\"0\",\"row\":\"51\",\"clear\":\"true\",\"height\":\"255\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"},\"caption\":{\"show\":\"1\",\"order\":\"0\",\"col\":\"24\",\"top\":\"0\",\"left\":\"0\",\"row\":\"10\",\"clear\":\"true\",\"height\":\"50\",\"width_cls\":\"c24\",\"left_cls\":\"ml0\",\"clear_cls\":\"clr\",\"top_cls\":\"mt0\"}}]',
	'responsive' => '{\"breakpoints\":[{\"name\":\"Default Desktop\",\"short_name\":\"Default\",\"default\":true,\"id\":\"desktop\",\"width\":1080,\"columns\":24,\"enabled\":true,\"fixed\":true,\"active\":\"false\",\"typography\":{\"h1\":{\"weight\":\"900\",\"style\":\"normal\",\"size\":\"110\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h2\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h3\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"0\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"h4\":{\"weight\":\"500\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h5\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"22\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"p\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"15\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"}},\"styles\":\"\"},{\"name\":\"Tablet\",\"short_name\":\"Tablet\",\"id\":\"tablet\",\"width\":570,\"columns\":12,\"enabled\":true,\"fixed\":true,\"default\":false,\"active\":\"false\",\"typography\":{\"h1\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"110\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h2\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.2\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h3\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.5\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h4\":{\"weight\":\"500\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h5\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"22\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"p\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"15\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"}},\"styles\":\"\"},{\"name\":\"Mobile\",\"short_name\":\"Mobile\",\"id\":\"mobile\",\"width\":315,\"columns\":7,\"enabled\":true,\"fixed\":true,\"default\":false,\"active\":\"true\",\"typography\":{\"h1\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"58\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h2\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.2\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h3\":{\"weight\":\"600\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(255,255,255,1)\"},\"h4\":{\"weight\":\"500\",\"style\":\"normal\",\"size\":\"28\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\"},\"h5\":{\"weight\":\"700\",\"style\":\"normal\",\"size\":\"22\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"},\"p\":{\"weight\":\"400\",\"style\":\"normal\",\"size\":\"15\",\"line_height\":\"1.1\",\"font_face\":\"Raleway\",\"font_family\":\"sans-serif\",\"color\":\"rgba(51,51,51,1)\"}},\"styles\":\"\"}]}',
);