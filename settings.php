<?php
return array(
	'typography' => '{"h1":{"weight":"900","style":"normal","size":"110","line_height":"1.2","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h2":{"weight":"700","style":"normal","size":"35","line_height":"1.3","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h3":{"weight":"700","style":"normal","size":"28","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h4":{"weight":"500","style":"normal","size":"25","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h5":{"weight":"700","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h6":{"weight":"700","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"p":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"a":{"weight":"400","style":"normal","size":false,"line_height":false,"font_face":"Raleway","font_family":"sans-serif","color":"#ufc6","theme_color_class":"upfront_theme_color_3"},"a:hover":{"weight":"400","style":"normal","size":false,"line_height":false,"font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"ul":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"ol":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"blockquote":{"weight":"500","style":"normal","size":"25","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"blockquote.upfront-quote-alternative":{"weight":"400","style":"normal","size":"22","line_height":"1.364","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"}}',
	'layout_style' => '/* -------------------------------------------------------
 Global
 ------------------------------------------------------ */
 
html {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
/* selection highlighting (set to upfront\\\'s default green) */
::-moz-selection {
    background: #ufc4;
    color: #ufc1;
}
::selection {
    background: #ufc4;
    color: #ufc1;
}

/* -------------------------------------------------------
 General Styles
 ------------------------------------------------------ */
 
/* icon fonts */
.uf_font_icon,
.uf_font_icon a {
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    line-height: 1em;
    position: relative;
    speak: none;
    text-decoration: none;
    text-transform: none;
}
a.uf_font_icon:hover {
    font-family: \\\'Fixer\\\';
}
 
 /* links */
.upfront-object a,
.upfront-output-object a {
    -webkit-transition: color 0.4s ease-out;
    -moz-transition: color 0.4s ease-out;
    -o-transition: color 0.4s ease-out;
    transition: color 0.4s ease-out;
}

/* headings */
.upfront-object h1,
.upfront-output-object h1 {
    letter-spacing: -2px;
    padding-bottom: 30px;
}

/* lists */
.upfront-object ul,
.upfront-output-object ul,
.upfront-object ol,
.upfront-output-object ol {
    margin-left: 20px;
}
 
.upfront-object dl,
.upfront-output-object dl {
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.333em;
}
.upfront-object dt,
.upfront-output-object dt {
    font-weight: 700;
    text-decoration: underline;
}
.upfront-object dd,
.upfront-output-object dd {
    font-weight: 400;
    margin: 10px 0;
    padding-left: 10px;
}
 
 /* blockquote */
.upfront-object blockquote,
.upfront-output-object blockquote {
    padding: 0 30px;
    position: relative;
}
.upfront-object blockquote:before,
.upfront-output-object blockquote:before,
.upfront-object blockquote:after,
.upfront-output-object blockquote:after {
    display: inline-block;
    font-family: \\\'Fixer\\\';
    height: 30px;
    position: absolute;
    speak: none;
    width: 30px;
}
.upfront-object blockquote:before,
.upfront-output-object blockquote:before {
    content: "l";
    left: 0;
    top: 0;
}
.upfront-object blockquote:after,
.upfront-output-object blockquote:after {
    bottom: -5px;
    content: "m";
    right: 0;
}
 .upfront-object blockquote.upfront-quote-alternative,
 .upfront-output-object blockquote.upfront-quote-alternative {
    border-left: 2px solid #ufc4;
    padding: 0 0 0 15px;
 }
 .upfront-object blockquote.upfront-quote-alternative:before,
 .upfront-output-object blockquote.upfront-quote-alternative:before,
 .upfront-object blockquote.upfront-quote-alternative:after,
 .upfront-output-object blockquote.upfront-quote-alternative:after {
    display: none;
 }
 
/* forms */
.upfront-object input::-moz-input-placeholder,
.upfront-output-object input::-moz-input-placeholder {
    color: #666;
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 400;
 }
 .upfront-object textarea::-moz-input-placeholder,
.upfront-output-object textarea::-moz-input-placeholder {
    color: #666;
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 400;
 }
 .upfront-object input::-ms-input-placeholder,
 .upfront-output-object input::-ms-input-placeholder {
    color: #666;
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 400;
 }
 .upfront-object textarea::-ms-input-placeholder,
 .upfront-output-object textarea::-ms-input-placeholder {
    color: #666;
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 400;
 }
 .upfront-object input::-webkit-input-placeholder,
 .upfront-output-object input::-webkit-input-placeholder {
    color: #666;
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 400;
 }
 .upfront-object textarea::-webkit-input-placeholder,
 .upfront-output-object textarea::-webkit-input-placeholder {
    color: #666;
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 400;
 }
.upfront-object input[type="text"],
.upfront-object input[type="email"],
.upfront-object input[type="password"],
.upfront-object input[type="search"]
.upfront-object textarea,
.upfront-output-object input[type="text"],
.upfront-output-object input[type="email"],
.upfront-output-object input[type="password"],
.upfront-output-object input[type="search"],
.upfront-output-object textarea {
    /*border: 1px solid transparent;*/
    color: #ufc1;
    display: block;
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-weight: 500;
    font-size: 15px;
    font-style: normal;
    height: 50px;
    /*line-height: 50px;*/
    /*margin: 0;*/
    padding: 0 20px;
    -webkit-transition: border-color 0.25s ease-out;
    -moz-transition: border-color 0.25s ease-out;
    -o-transition: border-color 0.25s ease-out;
    transition: border-color 0.25s ease-out;
    width: 100%;
}
.upfront-object textarea,
.upfront-output-object textarea {
    height: 10em;
    line-height: 30px;
    padding: 10px 20px;
    resize: vertical;
}
.upfront-object input[type="text"]:focus,
.upfront-object input[type="email"]:focus,
.upfront-object input[type="password"]:focus,
.upfront-object textarea:focus,
.upfront-output-object input[type="text"]:focus,
.upfront-output-object input[type="email"]:focus,
.upfront-output-object input[type="password"]:focus,
.upfront-output-object textarea:focus {
    border-color: #ufc6;
}
.upfront-object input[type="submit"],
.upfront-output-object input[type="submit"],
.upfront-object button[type="submit"],
.upfront-output-object button[type="submit"] {
    font-family: \\\'Raleway\\\', Arial, sans-serif;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
}

/* gallery lightbox */
.mfp-arrow-right.mfp-arrow:before,
.mfp-arrow-right.mfp-arrow:after,
.mfp-arrow-left.mfp-arrow:before,
.mfp-arrow-left.mfp-arrow:after {
    display: none;
}
button.mfp-arrow.mfp-arrow-right,
button.mfp-arrow.mfp-arrow-left {
    background: url("UPFRONT_THEME_BASE/ui/slider-arrows.png") no-repeat;
    height: 50px;
    margin: 0;
    opacity: 1;
    width: 28px;
}
button.mfp-arrow.mfp-arrow-left {
    background-position: 0 0;
    margin-left: 2em;
}
button.mfp-arrow.mfp-arrow-right {
    background-position: 28px 0;
    margin-right: 2em;
}
button.mfp-arrow.mfp-arrow-left:hover {
    background-position: 0 -50px;
}
button.mfp-arrow.mfp-arrow-right:hover {
    background-position: 28px -50px;
}
.mfp-gallery .mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
    color: #ufc0;
    font-size: 2em;
    opacity: 1;
}
.mfp-content .mfp-counter {
    color: #ufc0;
    white-space: nowrap;
}

p, h3 {
    padding-bottom:10px;
}

/* Subscribe Lightbox */
.responsive-breakpoint #upfront-region-ltb-subscribe15 {
    left: 0 !important;
    margin-right: auto;
    margin-left: auto !important;
    max-width: 320px;
    right: 0;
    width: 100% !important;
}
.responsive-breakpoint #upfront-region-ltb-subscribe15 .upfront-output-wrapper {
    margin-right: 0;
    width: 100%;
}
.responsive-breakpoint #upfront-region-ltb-subscribe15 .upfront-output-module {
    margin-left: 0;
    width: 100%;
}

/* general tablet styles */
@media only screen and (max-width: 1079px) and (min-width: 570px) {}

/* general mobile styles */
@media only screen and (max-width: 569px) {}',
	'theme_fonts' => '[{\\"id\\":\\"Ralewayregular\\",\\"font\\":{\\"family\\":\\"Raleway\\",\\"category\\":\\"sans-serif\\",\\"variants\\":[\\"100\\",\\"200\\",\\"300\\",\\"regular\\",\\"500\\",\\"600\\",\\"700\\",\\"800\\",\\"900\\"]},\\"variant\\":\\"regular\\",\\"displayVariant\\":\\"regular\\"},{\\"id\\":\\"Raleway500\\",\\"font\\":{\\"family\\":\\"Raleway\\",\\"category\\":\\"sans-serif\\",\\"variants\\":[\\"100\\",\\"200\\",\\"300\\",\\"regular\\",\\"500\\",\\"600\\",\\"700\\",\\"800\\",\\"900\\"]},\\"variant\\":\\"500\\",\\"displayVariant\\":\\"500 normal\\"},{\\"id\\":\\"Raleway600\\",\\"font\\":{\\"family\\":\\"Raleway\\",\\"category\\":\\"sans-serif\\",\\"variants\\":[\\"100\\",\\"200\\",\\"300\\",\\"regular\\",\\"500\\",\\"600\\",\\"700\\",\\"800\\",\\"900\\"]},\\"variant\\":\\"600\\",\\"displayVariant\\":\\"600 normal\\"},{\\"id\\":\\"Raleway700\\",\\"font\\":{\\"family\\":\\"Raleway\\",\\"category\\":\\"sans-serif\\",\\"variants\\":[\\"100\\",\\"200\\",\\"300\\",\\"regular\\",\\"500\\",\\"600\\",\\"700\\",\\"800\\",\\"900\\"]},\\"variant\\":\\"700\\",\\"displayVariant\\":\\"700 normal\\"},{\\"id\\":\\"Raleway900\\",\\"font\\":{\\"family\\":\\"Raleway\\",\\"category\\":\\"sans-serif\\",\\"variants\\":[\\"100\\",\\"200\\",\\"300\\",\\"regular\\",\\"500\\",\\"600\\",\\"700\\",\\"800\\",\\"900\\"]},\\"variant\\":\\"900\\",\\"displayVariant\\":\\"900 normal\\"}]',
	'theme_colors' => '{"colors":[{"color":"#ffffff","prev":"#ffffff","highlight":"#ffffff","shade":"#ffffff","selected":"","luminance":""},{"color":"#333333","prev":"#333333","highlight":"#333333","shade":"#333333","selected":"","luminance":""},{"color":"#d6e6f0","prev":"#d6e6f0","highlight":"#d6e6f0","shade":"#d6e6f0","selected":"","luminance":""},{"color":"#000000","prev":"#000000","highlight":"#000000","shade":"#000000","selected":"","luminance":""},{"color":"#ffe262","prev":"#ffe262","highlight":"#ffe262","shade":"#ffe262","selected":"","luminance":""},{"color":"#645191","prev":"#645191","highlight":"#645191","shade":"#645191","selected":"","luminance":""},{"color":"#5ebf6b","prev":"#5ebf6b","highlight":"#5ebf6b","shade":"#5ebf6b","selected":"","luminance":""}],"range":"0"}',
	'layout_properties' => '[{"name":"background_color","value":""},{"name":"grid","value":{"column_widths":{"desktop":45},"column_paddings":{"desktop":"15"},"baselines":{"desktop":5},"type_paddings":{"desktop":10}}},{"name":"background_type","value":"color"},{"name":"use_padding","value":0},{"name":"contained_region_width","value":1080}]',
	'menus' => '[{"id":false,"slug":"fixer-menu","name":"Fixer menu","description":"","items":[{"ID":2428,"post_author":"1","post_date":"2015-10-14 04:52:02","post_date_gmt":"2015-10-14 04:52:02","post_content":"","post_title":"Services","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"closed","post_password":"","post_name":"service","to_ping":"","pinged":"","post_modified":"2015-10-21 06:00:14","post_modified_gmt":"2015-10-21 06:00:14","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/localhost:8888\\/uf\\/service\\/","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":2428,"menu_item_parent":"0","object_id":"2428","object":"custom","type":"custom","type_label":"Custom Link","title":"Services","url":"#services","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":2429,"post_author":"1","post_date":"2015-10-14 04:52:02","post_date_gmt":"2015-10-14 04:52:02","post_content":"","post_title":"Get a Quote","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"closed","post_password":"","post_name":"get-a-quote","to_ping":"","pinged":"","post_modified":"2015-10-29 22:35:36","post_modified_gmt":"2015-10-29 22:35:36","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/localhost:8888\\/uf\\/get-a-quote\\/","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":2429,"menu_item_parent":"0","object_id":"2429","object":"custom","type":"custom","type_label":"Custom Link","title":"Get a Quote","url":"#quote","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":2430,"post_author":"1","post_date":"2015-10-14 04:52:02","post_date_gmt":"2015-10-14 04:52:02","post_content":"","post_title":"Blog","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"blog","to_ping":"","pinged":"","post_modified":"2015-10-14 04:52:02","post_modified_gmt":"2015-10-14 04:52:02","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/localhost:8888\\/uf\\/blog\\/","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":2430,"menu_item_parent":"0","object_id":"2430","object":"custom","type":"custom","type_label":"Custom Link","title":"Blog","url":"#blog","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":2431,"post_author":"1","post_date":"2015-10-14 04:52:02","post_date_gmt":"2015-10-14 04:52:02","post_content":"","post_title":"About","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"about-3","to_ping":"","pinged":"","post_modified":"2015-10-14 04:52:02","post_modified_gmt":"2015-10-14 04:52:02","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/localhost:8888\\/uf\\/about-3\\/","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":2431,"menu_item_parent":"0","object_id":"2431","object":"custom","type":"custom","type_label":"Custom Link","title":"About","url":"#about","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":2432,"post_author":"1","post_date":"2015-10-14 04:52:02","post_date_gmt":"2015-10-14 04:52:02","post_content":"","post_title":"Contact Us","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"contact-us-3","to_ping":"","pinged":"","post_modified":"2015-10-14 04:52:02","post_modified_gmt":"2015-10-14 04:52:02","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/localhost:8888\\/uf\\/contact-us-3\\/","menu_order":5,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":2432,"menu_item_parent":"0","object_id":"2432","object":"custom","type":"custom","type_label":"Custom Link","title":"Contact Us","url":"#contact","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":null,"name":null,"description":null,"items":false},{"id":false,"slug":"footer-fixer-menu","name":"Footer Fixer Menu","description":"","items":[{"ID":13,"post_author":"1","post_date":"2015-01-29 06:27:51","post_date_gmt":"2015-01-29 06:27:51","post_content":"","post_title":"Cases","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"cases","to_ping":"","pinged":"","post_modified":"2015-01-29 06:27:51","post_modified_gmt":"2015-01-29 06:27:51","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/?p=13","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":13,"menu_item_parent":"0","object_id":"13","object":"custom","type":"custom","type_label":"Custom","title":"Cases","url":"","target":"","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":14,"post_author":"1","post_date":"2015-01-29 06:27:51","post_date_gmt":"2015-01-29 06:27:51","post_content":"","post_title":"Archive","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"archive","to_ping":"","pinged":"","post_modified":"2015-01-29 06:27:51","post_modified_gmt":"2015-01-29 06:27:51","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/upfront.dev\\/?p=14","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":14,"menu_item_parent":"0","object_id":"14","object":"custom","type":"custom","type_label":"Custom","title":"Archive","url":"","target":"","attr_title":"","description":"","classes":[""],"xfn":""}]},{"id":false,"slug":"fixer-inner-menu","name":"Fixer Inner Menu","description":"","items":[{"ID":1793,"post_author":"1","post_date":"2015-05-29 06:47:02","post_date_gmt":"2015-05-29 06:47:02","post_content":"","post_title":"Services","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"service-2","to_ping":"","pinged":"","post_modified":"2015-06-17 09:01:46","post_modified_gmt":"2015-06-17 09:01:46","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/fixer.upfront.local\\/?p=1793","menu_order":1,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1793,"menu_item_parent":"0","object_id":"1793","object":"custom","type":"custom","type_label":"Custom Link","title":"Services","url":"%siteurl%\\/services-inner\\/","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1795,"post_author":"1","post_date":"2015-05-29 06:47:11","post_date_gmt":"2015-05-29 06:47:11","post_content":"","post_title":"Blog","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"blog-2","to_ping":"","pinged":"","post_modified":"2015-06-17 09:01:46","post_modified_gmt":"2015-06-17 09:01:46","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/fixer.upfront.local\\/?p=1795","menu_order":2,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1795,"menu_item_parent":"0","object_id":"1795","object":"custom","type":"custom","type_label":"Custom Link","title":"Blog","url":"%siteurl%\\/blog\\/","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1794,"post_author":"1","post_date":"2015-05-29 06:47:09","post_date_gmt":"2015-05-29 06:47:09","post_content":"","post_title":"Get a Quote","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"get-a-quote-2","to_ping":"","pinged":"","post_modified":"2015-06-17 09:01:46","post_modified_gmt":"2015-06-17 09:01:46","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/fixer.upfront.local\\/?p=1794","menu_order":3,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1794,"menu_item_parent":"0","object_id":"1794","object":"custom","type":"custom","type_label":"Custom Link","title":"Get a Quote","url":"%siteurl%\\/get-quote-inner\\/","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1796,"post_author":"1","post_date":"2015-05-29 06:47:14","post_date_gmt":"2015-05-29 06:47:14","post_content":"","post_title":"About","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"open","post_password":"","post_name":"about-2","to_ping":"","pinged":"","post_modified":"2015-06-17 09:01:46","post_modified_gmt":"2015-06-17 09:01:46","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/fixer.upfront.local\\/?p=1796","menu_order":4,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1796,"menu_item_parent":"0","object_id":"1796","object":"custom","type":"custom","type_label":"Custom Link","title":"About","url":"%siteurl%\\/about-inner\\/","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""},{"ID":1797,"post_author":"1","post_date":"2015-05-29 06:47:19","post_date_gmt":"2015-05-29 06:47:19","post_content":"","post_title":"Contact Us","post_excerpt":"","post_status":"publish","comment_status":"open","ping_status":"closed","post_password":"","post_name":"coverage-area-2","to_ping":"","pinged":"","post_modified":"2015-10-29 09:22:57","post_modified_gmt":"2015-10-29 09:22:57","post_content_filtered":"","post_parent":0,"guid":"http:\\/\\/fixer.upfront.local\\/?p=1797","menu_order":5,"post_type":"nav_menu_item","post_mime_type":"","comment_count":"0","filter":"raw","db_id":1797,"menu_item_parent":"0","object_id":"1797","object":"custom","type":"custom","type_label":"Custom Link","title":"Contact Us","url":"%siteurl%\\/contact-us-inner\\/","target":"_self","attr_title":"","description":"","classes":[""],"xfn":""}]}]',
	'global_regions' => '[{\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":24},{\\"name\\":\\"background_type\\",\\"value\\":\\"color\\"},{\\"name\\":\\"nav_region\\",\\"value\\":\\"\\"},{\\"name\\":\\"background_color\\",\\"value\\":\\"rgba(255,255,255,0)\\"}],\\"modules\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":4},{\\"name\\":\\"class\\",\\"value\\":\\"c4 ml0 mr0 mt9 mb0 module-1405520755986-1686\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"module-1405520755986-1686\\"},{\\"name\\":\\"sticky\\",\\"value\\":false},{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1405520755986-1686\\"}],\\"objects\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"src\\",\\"value\\":\\"\\/wp-content\\/uploads\\/2014\\/09\\/fixer-logo-120x30-2906.png\\"},{\\"name\\":\\"srcFull\\",\\"value\\":\\"\\/wp-content\\/uploads\\/2014\\/09\\/fixer-logo.png\\"},{\\"name\\":\\"srcOriginal\\",\\"value\\":\\"\\/wp-content\\/uploads\\/2014\\/09\\/fixer-logo.png\\"},{\\"name\\":\\"image_title\\",\\"value\\":\\"\\"},{\\"name\\":\\"alternative_text\\",\\"value\\":\\"\\"},{\\"name\\":\\"when_clicked\\",\\"value\\":\\"entry\\"},{\\"name\\":\\"image_link\\",\\"value\\":\\"\\/\\"},{\\"name\\":\\"include_image_caption\\",\\"value\\":false},{\\"name\\":\\"image_caption\\",\\"value\\":\\"My awesome image caption\\"},{\\"name\\":\\"caption_position\\",\\"value\\":\\"below_image\\"},{\\"name\\":\\"caption_alignment\\",\\"value\\":\\"top\\"},{\\"name\\":\\"caption_trigger\\",\\"value\\":\\"always_show\\"},{\\"name\\":\\"image_status\\",\\"value\\":\\"ok\\"},{\\"name\\":\\"size\\",\\"value\\":{\\"width\\":120,\\"height\\":30}},{\\"name\\":\\"fullSize\\",\\"value\\":{\\"width\\":120,\\"height\\":30}},{\\"name\\":\\"position\\",\\"value\\":{\\"top\\":0,\\"left\\":-15}},{\\"name\\":\\"marginTop\\",\\"value\\":0},{\\"name\\":\\"element_size\\",\\"value\\":{\\"width\\":150,\\"height\\":30}},{\\"name\\":\\"rotation\\",\\"value\\":0},{\\"name\\":\\"color\\",\\"value\\":\\"#ufc0\\"},{\\"name\\":\\"background\\",\\"value\\":\\"#ufc3\\"},{\\"name\\":\\"captionBackground\\",\\"value\\":\\"0\\"},{\\"name\\":\\"image_id\\",\\"value\\":\\"9\\"},{\\"name\\":\\"align\\",\\"value\\":\\"center\\"},{\\"name\\":\\"stretch\\",\\"value\\":false},{\\"name\\":\\"vstretch\\",\\"value\\":true},{\\"name\\":\\"quick_swap\\",\\"value\\":false},{\\"name\\":\\"gifImage\\",\\"value\\":0},{\\"name\\":\\"type\\",\\"value\\":\\"UimageModel\\"},{\\"name\\":\\"view_class\\",\\"value\\":\\"UimageView\\"},{\\"name\\":\\"has_settings\\",\\"value\\":1},{\\"name\\":\\"class\\",\\"value\\":\\"c24 upfront-image\\"},{\\"name\\":\\"id_slug\\",\\"value\\":\\"image\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"image-1405520755973-1481\\"},{\\"name\\":\\"row\\",\\"value\\":-2},{\\"name\\":\\"theme_style\\",\\"value\\":\\"\\"},{\\"name\\":\\"anchor\\",\\"value\\":\\"\\"}],\\"element_id\\":\\"\\"}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":11},{\\"name\\":\\"class\\",\\"value\\":\\"c14 ml0 mr0 mt8 mb0 module-1405520756070-1345\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"module-1405520756070-1345\\"},{\\"name\\":\\"sticky\\",\\"value\\":false},{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1405520756070-1345\\"}],\\"objects\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"type\\",\\"value\\":\\"UnewnavigationModel\\"},{\\"name\\":\\"view_class\\",\\"value\\":\\"UnewnavigationView\\"},{\\"name\\":\\"class\\",\\"value\\":\\"c24 upfront-navigation\\"},{\\"name\\":\\"has_settings\\",\\"value\\":1},{\\"name\\":\\"id_slug\\",\\"value\\":\\"unewnavigation\\"},{\\"name\\":\\"menu_items\\",\\"value\\":[{\\"menu-item-db-id\\":4,\\"menu-item-parent-id\\":\\"0\\",\\"menu-item-type\\":\\"custom\\",\\"menu-item-title\\":\\"Service\\",\\"menu-item-url\\":\\"#service\\",\\"menu-item-object\\":\\"custom\\",\\"menu-item-object-id\\":\\"4\\",\\"menu-item-target\\":\\"\\",\\"menu-item-position\\":1},{\\"menu-item-db-id\\":5,\\"menu-item-parent-id\\":\\"0\\",\\"menu-item-type\\":\\"custom\\",\\"menu-item-title\\":\\"Get a Quote\\",\\"menu-item-url\\":\\"#quote\\",\\"menu-item-object\\":\\"custom\\",\\"menu-item-object-id\\":\\"5\\",\\"menu-item-target\\":\\"\\",\\"menu-item-position\\":2},{\\"menu-item-db-id\\":6,\\"menu-item-parent-id\\":\\"0\\",\\"menu-item-type\\":\\"custom\\",\\"menu-item-title\\":\\"Blog\\",\\"menu-item-url\\":\\"blog\\",\\"menu-item-object\\":\\"custom\\",\\"menu-item-object-id\\":\\"6\\",\\"menu-item-target\\":\\"\\",\\"menu-item-position\\":3},{\\"menu-item-db-id\\":7,\\"menu-item-parent-id\\":\\"0\\",\\"menu-item-type\\":\\"custom\\",\\"menu-item-title\\":\\"About\\",\\"menu-item-url\\":\\"#about\\",\\"menu-item-object\\":\\"custom\\",\\"menu-item-object-id\\":\\"7\\",\\"menu-item-target\\":\\"\\",\\"menu-item-position\\":4},{\\"menu-item-db-id\\":8,\\"menu-item-parent-id\\":\\"0\\",\\"menu-item-type\\":\\"custom\\",\\"menu-item-title\\":\\"Coverage Area\\",\\"menu-item-url\\":\\"#coveragearea\\",\\"menu-item-object\\":\\"custom\\",\\"menu-item-object-id\\":\\"8\\",\\"menu-item-target\\":\\"\\",\\"menu-item-position\\":5}]},{\\"name\\":\\"menu_style\\",\\"value\\":\\"horizontal\\"},{\\"name\\":\\"menu_alignment\\",\\"value\\":\\"left\\"},{\\"name\\":\\"allow_sub_nav\\",\\"value\\":[\\"no\\"]},{\\"name\\":\\"allow_new_pages\\",\\"value\\":[]},{\\"name\\":\\"element_id\\",\\"value\\":\\"unewnavigation-object-1405520756062-1726\\"},{\\"name\\":\\"initialized\\",\\"value\\":false},{\\"name\\":\\"menu_id\\",\\"value\\":2},{\\"name\\":\\"menu_slug\\",\\"value\\":\\"fixer-menu\\"},{\\"name\\":\\"is_floating\\",\\"value\\":[]},{\\"name\\":\\"theme_style\\",\\"value\\":\\"_default\\"},{\\"name\\":\\"anchor\\",\\"value\\":\\"\\"},{\\"name\\":\\"row\\",\\"value\\":5},{\\"name\\":\\"burger_menu\\",\\"value\\":[]},{\\"name\\":\\"burger_alignment\\",\\"value\\":\\"left\\"},{\\"name\\":\\"burger_over\\",\\"value\\":\\"over\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"desktop\\":{\\"burger_alignment\\":\\"left\\",\\"burger_over\\":\\"over\\",\\"width\\":1080}}}],\\"element_id\\":\\"\\"}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":18},{\\"name\\":\\"class\\",\\"value\\":\\"c6 ml0 mr0 mt4 mb0 module-1405520755970-1045\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"module-1405520755970-1045\\"},{\\"name\\":\\"sticky\\",\\"value\\":false},{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1405520755970-1045\\"}],\\"objects\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"view_class\\",\\"value\\":\\"PlainTxtView\\"},{\\"name\\":\\"id_slug\\",\\"value\\":\\"plain_text\\"},{\\"name\\":\\"content\\",\\"value\\":\\"<p style=\\"text-align: right;\\" class=\\"\\">One call does it all<\\/p><h2 style=\\"text-align: right;\\" class=\\"\\"><span class=\\"uf_font_icon\\" style=\\"font-size: 27px; top: 0px;\\">a&nbsp;<\\/span>1300 FIXER<\\/h2>\\"},{\\"name\\":\\"type\\",\\"value\\":\\"PlainTxtModel\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"text-object-1405520755969-1764\\"},{\\"name\\":\\"class\\",\\"value\\":\\"c24 upfront-plain_txt\\"},{\\"name\\":\\"has_settings\\",\\"value\\":1},{\\"name\\":\\"is_edited\\",\\"value\\":true},{\\"name\\":\\"border_style\\",\\"value\\":\\"none\\"},{\\"name\\":\\"border_width\\",\\"value\\":\\"0\\"},{\\"name\\":\\"border_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"bg_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"theme_style\\",\\"value\\":\\"header-contact-text\\"},{\\"name\\":\\"anchor\\",\\"value\\":\\"\\"},{\\"name\\":\\"row\\",\\"value\\":12}],\\"element_id\\":\\"\\"}]}],\\"wrappers\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1405520755986-1686\\"},{\\"name\\":\\"class\\",\\"value\\":\\" c4 clr\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"tablet\\":{\\"col\\":4},\\"mobile\\":{\\"col\\":4}}}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1405520756070-1345\\"},{\\"name\\":\\"class\\",\\"value\\":\\" c14\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"tablet\\":{\\"col\\":14},\\"mobile\\":{\\"col\\":14}}}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1405520755970-1045\\"},{\\"name\\":\\"class\\",\\"value\\":\\" c6\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"tablet\\":{\\"col\\":6},\\"mobile\\":{\\"col\\":6}}}]}],\\"name\\":\\"header\\",\\"title\\":\\"Header\\",\\"scope\\":\\"global\\",\\"container\\":\\"header\\",\\"default\\":false,\\"position\\":1,\\"allow_sidebar\\":true,\\"type\\":\\"wide\\"},{\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":9},{\\"name\\":\\"background_type\\",\\"value\\":\\"color\\"},{\\"name\\":\\"nav_region\\",\\"value\\":\\"\\"},{\\"name\\":\\"background_color\\",\\"value\\":\\"rgba(44,44,44,1)\\"},{\\"name\\":\\"expand_lock\\",\\"value\\":false}],\\"modules\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":10},{\\"name\\":\\"class\\",\\"value\\":\\"c3 ml0 mr0 mt0 mb0 module-1406217409056-1339\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"module-1406217409056-1339\\"},{\\"name\\":\\"sticky\\",\\"value\\":false},{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406217409056-1339\\"}],\\"objects\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"src\\",\\"value\\":\\"\\/wp-content\\/uploads\\/2014\\/09\\/fixer-logo-white-100x20-3868.png\\"},{\\"name\\":\\"srcFull\\",\\"value\\":\\"\\/wp-content\\/uploads\\/2014\\/09\\/fixer-logo-white.png\\"},{\\"name\\":\\"srcOriginal\\",\\"value\\":\\"\\/wp-content\\/uploads\\/2014\\/09\\/fixer-logo-white.png\\"},{\\"name\\":\\"image_title\\",\\"value\\":\\"\\"},{\\"name\\":\\"alternative_text\\",\\"value\\":\\"\\"},{\\"name\\":\\"when_clicked\\",\\"value\\":false},{\\"name\\":\\"image_link\\",\\"value\\":\\"\\"},{\\"name\\":\\"include_image_caption\\",\\"value\\":false},{\\"name\\":\\"image_caption\\",\\"value\\":\\"My awesome image caption\\"},{\\"name\\":\\"caption_position\\",\\"value\\":\\"below_image\\"},{\\"name\\":\\"caption_alignment\\",\\"value\\":\\"top\\"},{\\"name\\":\\"caption_trigger\\",\\"value\\":\\"always_show\\"},{\\"name\\":\\"image_status\\",\\"value\\":\\"ok\\"},{\\"name\\":\\"size\\",\\"value\\":{\\"width\\":100,\\"height\\":30}},{\\"name\\":\\"fullSize\\",\\"value\\":{\\"width\\":100,\\"height\\":30}},{\\"name\\":\\"position\\",\\"value\\":{\\"top\\":5,\\"left\\":-2.5}},{\\"name\\":\\"marginTop\\",\\"value\\":0},{\\"name\\":\\"element_size\\",\\"value\\":{\\"width\\":105,\\"height\\":20}},{\\"name\\":\\"rotation\\",\\"value\\":0},{\\"name\\":\\"color\\",\\"value\\":\\"#ufc0\\"},{\\"name\\":\\"background\\",\\"value\\":\\"#ufc3\\"},{\\"name\\":\\"captionBackground\\",\\"value\\":\\"0\\"},{\\"name\\":\\"image_id\\",\\"value\\":\\"10\\"},{\\"name\\":\\"align\\",\\"value\\":\\"center\\"},{\\"name\\":\\"stretch\\",\\"value\\":false},{\\"name\\":\\"vstretch\\",\\"value\\":true},{\\"name\\":\\"quick_swap\\",\\"value\\":false},{\\"name\\":\\"gifImage\\",\\"value\\":0},{\\"name\\":\\"type\\",\\"value\\":\\"UimageModel\\"},{\\"name\\":\\"view_class\\",\\"value\\":\\"UimageView\\"},{\\"name\\":\\"has_settings\\",\\"value\\":1},{\\"name\\":\\"class\\",\\"value\\":\\"c24 upfront-image\\"},{\\"name\\":\\"id_slug\\",\\"value\\":\\"image\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"image-1406217409054-1200\\"},{\\"name\\":\\"row\\",\\"value\\":4}],\\"element_id\\":\\"\\"}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":12},{\\"name\\":\\"class\\",\\"value\\":\\"c6 ml0 mr0 mt0 mb0 module-1406217940549-1616\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"module-1406217940549-1616\\"},{\\"name\\":\\"sticky\\",\\"value\\":false},{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406217940549-1616\\"}],\\"objects\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"view_class\\",\\"value\\":\\"PlainTxtView\\"},{\\"name\\":\\"id_slug\\",\\"value\\":\\"plain_text\\"},{\\"name\\":\\"content\\",\\"value\\":\\"<p class=\\"\\"><span class=\\"upfront_theme_color_0\\" ">u00a9 2oo6-2014 Fixer Pty Ltd<\\/span><\\/p>\\"},{\\"name\\":\\"type\\",\\"value\\":\\"PlainTxtModel\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"text-object-1406217940549-1478\\"},{\\"name\\":\\"class\\",\\"value\\":\\"c24 upfront-plain_txt\\"},{\\"name\\":\\"has_settings\\",\\"value\\":1},{\\"name\\":\\"row\\",\\"value\\":6},{\\"name\\":\\"is_edited\\",\\"value\\":true},{\\"name\\":\\"border_style\\",\\"value\\":\\"none\\"},{\\"name\\":\\"border_width\\",\\"value\\":1},{\\"name\\":\\"border_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"bg_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"theme_style\\",\\"value\\":\\"plaintext-footer\\"},{\\"name\\":\\"anchor\\",\\"value\\":\\"\\"}],\\"element_id\\":\\"\\"}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":12},{\\"name\\":\\"class\\",\\"value\\":\\"c7 ml4 mr0 mt1 mb0 module-1406218508045-1635\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"module-1406218508045-1635\\"},{\\"name\\":\\"sticky\\",\\"value\\":false},{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406218508045-1635\\"}],\\"objects\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"view_class\\",\\"value\\":\\"PlainTxtView\\"},{\\"name\\":\\"id_slug\\",\\"value\\":\\"plain_text\\"},{\\"name\\":\\"content\\",\\"value\\":\\"<p class=\\"\\" style=\\"text-align: right;\\"><span class=\\"upfront_theme_color_0\\" >ABN - 58 121 227 072<\\/span><\\/p>\\"},{\\"name\\":\\"type\\",\\"value\\":\\"PlainTxtModel\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"object-1406218508045-1484\\"},{\\"name\\":\\"class\\",\\"value\\":\\"c24 upfront-plain_txt\\"},{\\"name\\":\\"has_settings\\",\\"value\\":1},{\\"name\\":\\"row\\",\\"value\\":6},{\\"name\\":\\"is_edited\\",\\"value\\":true},{\\"name\\":\\"border_style\\",\\"value\\":\\"none\\"},{\\"name\\":\\"border_width\\",\\"value\\":1},{\\"name\\":\\"border_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"bg_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"theme_style\\",\\"value\\":\\"plaintext-footer\\"},{\\"name\\":\\"anchor\\",\\"value\\":\\"\\"}],\\"element_id\\":\\"\\"}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"row\\",\\"value\\":8},{\\"name\\":\\"class\\",\\"value\\":\\"c3 ml1 mr0 mt1 mb0 module-1406218404636-1484\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"module-1406218404636-1484\\"},{\\"name\\":\\"sticky\\",\\"value\\":false},{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406218404636-1484\\"}],\\"objects\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"view_class\\",\\"value\\":\\"PlainTxtView\\"},{\\"name\\":\\"id_slug\\",\\"value\\":\\"plain_text\\"},{\\"name\\":\\"content\\",\\"value\\":\\"<p class=\\"\\"><span class=\\"upfront_theme_color_0\\">TOU &amp; Privacy<\\/span><\\/p>\\"},{\\"name\\":\\"type\\",\\"value\\":\\"PlainTxtModel\\"},{\\"name\\":\\"element_id\\",\\"value\\":\\"text-object-1406218404628-1646\\"},{\\"name\\":\\"class\\",\\"value\\":\\"c24 upfront-plain_txt\\"},{\\"name\\":\\"has_settings\\",\\"value\\":1},{\\"name\\":\\"row\\",\\"value\\":2},{\\"name\\":\\"is_edited\\",\\"value\\":true},{\\"name\\":\\"border_style\\",\\"value\\":\\"none\\"},{\\"name\\":\\"border_width\\",\\"value\\":1},{\\"name\\":\\"border_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"bg_color\\",\\"value\\":\\"\\"},{\\"name\\":\\"theme_style\\",\\"value\\":\\"plaintext-footer\\"},{\\"name\\":\\"anchor\\",\\"value\\":\\"\\"}],\\"element_id\\":\\"\\"}]}],\\"wrappers\\":[{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406217409056-1339\\"},{\\"name\\":\\"class\\",\\"value\\":\\" c3\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"tablet\\":{\\"col\\":3},\\"mobile\\":{\\"col\\":3}}}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406217940549-1616\\"},{\\"name\\":\\"class\\",\\"value\\":\\" c6\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"tablet\\":{\\"col\\":6},\\"mobile\\":{\\"col\\":6}}}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406218508045-1635\\"},{\\"name\\":\\"class\\",\\"value\\":\\" c11\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"tablet\\":{\\"col\\":11},\\"mobile\\":{\\"col\\":11}}}]},{\\"name\\":\\"\\",\\"properties\\":[{\\"name\\":\\"wrapper_id\\",\\"value\\":\\"wrapper-1406218404636-1484\\"},{\\"name\\":\\"class\\",\\"value\\":\\" c4\\"},{\\"name\\":\\"breakpoint\\",\\"value\\":{\\"tablet\\":{\\"col\\":4},\\"mobile\\":{\\"col\\":4}}}]}],\\"name\\":\\"footer\\",\\"title\\":\\"Footer\\",\\"scope\\":\\"global\\",\\"container\\":\\"footer\\",\\"default\\":false,\\"position\\":1,\\"allow_sidebar\\":true,\\"type\\":\\"wide\\"}]',
	'required_pages' => '{"blog":{"name":"Blog","slug":"blog","layout":"single-page-blog"},"about":{"name":"About","slug":"about","layout":"single-page-about"},"cases":{"name":"Cases","slug":"cases","layout":"single-page-cases"},"u-elements":{"name":"U Elements","slug":"u-elements","layout":"single-page-u-elements"},"services-inner":{"name":"Services Inner","slug":"services-inner","layout":"single-page-services-inner"},"get-quote-inner":{"name":"Get Quote Inner","slug":"get-quote-inner","layout":"single-page-get-quote-inner"},"about-inner":{"name":"About Inner","slug":"about-inner","layout":"single-page-about-inner"},"coverage-area-inner":{"name":"Coverage Area Inner","slug":"coverage-area-inner","layout":"single-page-coverage-area-inner"},"privacy-inner":{"name":"Privacy Inner","slug":"privacy-inner","layout":"single-page-privacy-inner"},"service-brick-inner":{"name":"Service Brick Inner","slug":"service-brick-inner","layout":"single-page-service-brick-inner"},"service-electrical-inner":{"name":"Service Electrical Inner","slug":"service-electrical-inner","layout":"single-page-service-electrical-inner"},"service-plumb-inner":{"name":"Service Plumb Inner","slug":"service-plumb-inner","layout":"single-page-service-plumb-inner"},"service-fence-inner":{"name":"Service Fence Inner","slug":"service-fence-inner","layout":"single-page-service-fence-inner"},"service-windows-inner":{"name":"Service Windows Inner","slug":"service-windows-inner","layout":"single-page-service-windows-inner"},"service-roof-inner":{"name":"Service Roof Inner","slug":"service-roof-inner","layout":"single-page-service-roof-inner"},"contact-us-inner":{"name":"Contact Us Inner","slug":"contact-us-inner","layout":"single-page-contact-us-inner"}}',
	'button_presets' => '[{"id":"white-borders-button","bordertype":"solid","borderwidth":"3","bordercolor":"#ufc0","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(137, 77, 77, 0)","fontsize":"15","fontface":"Raleway","color":"#ufc0","hov_duration":"0.25","hov_transition":"ease","theme_style":"_default","hov_color":"#ufc1","hov_bordercolor":"#ufc0","hov_bgcolor":"#ufc0","hov_bordertype":"solid"},{"id":"black-borders-button","bordertype":"solid","borderwidth":"3","bordercolor":"#ufc1","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(137, 77, 77, 0)","fontsize":"15","fontface":"Raleway","color":"#ufc1","hov_duration":"0.4","hov_transition":"ease","theme_style":"_default","hov_color":"#ufc0","hov_bordercolor":"#ufc1","hov_bgcolor":"#ufc1"},{"id":"social-icon","bordertype":"none","borderwidth":"1","bordercolor":"rgba(137, 77, 77, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(137, 77, 77, 0)","fontsize":"12","fontface":"","color":"rgb(86, 86, 86)","hov_duration":"0.25","hov_transition":"ease","hov_bordercolor":"rgba(137, 77, 77, 0)","hov_bgcolor":"rgba(137, 77, 77, 0)","hov_color":"#ufc6","theme_style":"_default"},{"id":"u-button","bordertype":"solid","borderwidth":"3","bordercolor":"#ufc4","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"#ufc4","fontsize":"15","fontface":"Raleway","color":"#ufc1","hov_duration":"0.4","hov_transition":"ease","hov_bordercolor":"#ufc4","hov_bgcolor":"rgba(137, 77, 77, 0)","hov_color":"#ufc1","theme_style":"_default"},{"id":"u-button-alt","bordertype":"solid","borderwidth":"3","bordercolor":"#ufc1","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"#ufc1","fontsize":"15","fontface":"Raleway","color":"#ufc0","hov_duration":"0.25","hov_transition":"ease","hov_bordercolor":"#ufc1","hov_bgcolor":"rgba(137, 77, 77, 0)","hov_color":"#ufc1","theme_style":"_default"},{"id":"u-button-brand","bordertype":"solid","borderwidth":"3","bordercolor":"rgba(137, 77, 77, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"#ufc6","fontsize":"15","fontface":"Raleway","color":"#ufc0","hov_duration":"0.25","hov_transition":"ease","theme_style":"_default","hov_bgcolor":"rgba(137, 77, 77, 0)","hov_borderwidth":"3","hov_bordercolor":"#ufc6","hov_color":"#ufc6"},{"id":"u-button-cta","bordertype":"solid","borderwidth":"3","bordercolor":"rgba(137, 77, 77, 0)","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"#ufc5","fontsize":"15","fontface":"Raleway","color":"#ufc0","hov_duration":"0.25","hov_transition":"ease","hov_borderwidth":"3","hov_bordercolor":"#ufc5","hov_bgcolor":"rgba(137, 77, 77, 0)","hov_color":"#ufc5","theme_style":"_default"},{"id":"u-button-link","bordertype":"none","borderwidth":"1","bordercolor":"#ufc3","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(137, 77, 77, 0)","fontsize":"15","fontface":"","color":"#ufc6","hov_duration":"0.25","hov_transition":"ease","hov_bgcolor":"rgba(137, 77, 77, 0)","hov_color":"#ufc1","theme_style":"u-button-link"},{"id":"u-button-icon","bordertype":"none","borderwidth":"1","bordercolor":"#ufc3","borderradius1":"0","borderradius2":"0","borderradius4":"0","borderradius3":"0","bgcolor":"rgba(137, 77, 77, 0)","fontsize":"15","fontface":"Raleway","color":"#ufc0","hov_duration":"0.4","hov_transition":"ease","hov_bgcolor":"rgba(137, 77, 77, 0)","hov_color":"#ufc0","theme_style":"u-button-icon"}]',
	'responsive_settings' => '{"breakpoints":[{"name":"Default Desktop","short_name":"Default","default":true,"id":"desktop","width":1080,"columns":24,"enabled":true,"fixed":true,"active":"false","typography":{"h1":{"weight":"900","style":"normal","size":"110","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(255,255,255,1)"},"h2":{"weight":"700","style":"normal","size":"28","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif"},"h3":{"weight":"400","style":"normal","size":"28","line_height":"0","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"},"h4":{"weight":"500","style":"normal","size":"28","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif"},"h5":{"weight":"700","style":"normal","size":"22","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"},"p":{"weight":"400","style":"normal","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"}},"styles":"","column_width":"45","column_padding":"15","baseline":"5","type_padding":"10"},{"name":"Tablet","short_name":"Tablet","id":"tablet","width":570,"columns":12,"enabled":true,"fixed":true,"default":false,"active":"false","typography":{"h1":{"weight":"900","style":"normal","size":"80","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h2":{"weight":"700","style":"normal","size":"25","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h3":{"weight":"700","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h4":{"weight":"500","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif"},"h5":{"weight":"700","style":"normal","size":"18","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)","theme_color_class":"upfront_theme_color_1"},"h6":{"weight":"700","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"p":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)","theme_color_class":"upfront_theme_color_1"},"a":{"weight":"400","style":"normal","size":"false","line_height":"false","font_face":"Raleway","font_family":"sans-serif","color":"#ufc6","theme_color_class":"upfront_theme_color_3"},"a:hover":{"weight":"400","style":"normal","size":"false","line_height":"false","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"ul":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"ol":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"blockquote":{"weight":"500","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"blockquote.upfront-quote-alternative":{"weight":"400","style":"normal","size":"22","line_height":"1.364","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"}},"styles":""},{"name":"Mobile","short_name":"Mobile","id":"mobile","width":315,"columns":7,"enabled":true,"fixed":true,"default":false,"active":"true","typography":{"h1":{"weight":"900","style":"normal","size":"50","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h2":{"weight":"700","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h3":{"weight":"700","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"h4":{"weight":"500","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif"},"h5":{"weight":"700","style":"normal","size":"18","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)","theme_color_class":"upfront_theme_color_1"},"h6":{"weight":"700","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"p":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"a":{"weight":"400","style":"normal","size":"false","line_height":"false","font_face":"Raleway","font_family":"sans-serif","color":"#ufc6","theme_color_class":"upfront_theme_color_3"},"a:hover":{"weight":"400","style":"normal","size":"false","line_height":"false","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"ul":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"ol":{"weight":"400","style":"normal","size":"16","line_height":"1.7","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"blockquote":{"weight":"500","style":"normal","size":"20","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"},"blockquote.upfront-quote-alternative":{"weight":"400","style":"normal","size":"22","line_height":"1.364","font_face":"Raleway","font_family":"sans-serif","color":"#ufc1","theme_color_class":"upfront_theme_color_3"}},"styles":""}]}',
	'post_image_variants' => '[{"vid":"variant-1414082154417-1612","label":"Full Width","group":{"margin_left":"0","margin_right":"0","col":"16","row":"48","left":"0","float":"none","height":"240","width_cls":"c20","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1414082173807-1526","label":"Center","group":{"margin_left":"0","margin_right":"0","col":"16","row":"62","left":"2","float":"none","height":"310","width_cls":"c16","left_cls":"ml2","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"51","clear":"true","height":"255","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"16","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c16","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1447071075892-1481","label":"Left","group":{"margin_left":"0","margin_right":"0","col":"8","row":"50","left":"0","float":"left","height":"250","width_cls":"c8","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"40","clear":"true","height":"200","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1447071093159-1846","label":"Right","group":{"margin_left":"0","margin_right":"0","col":"8","row":"50","left":"0","float":"right","height":"250","width_cls":"c8","left_cls":"ml0","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"40","clear":"true","height":"200","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr","top_cls":"mt0"}},{"vid":"variant-1447072219249-1854","label":"Variant Label","group":{"margin_left":"0","margin_right":"0","col":"14","row":"50","left":"1","float":"none","height":"250","width_cls":"c14","left_cls":"ml1","clear_cls":""},"image":{"order":"0","col":"24","top":"0","left":"0","row":"40","clear":"true","height":"200","width_cls":"c24","left_cls":"ml0","clear_cls":"clr"},"caption":{"show":"1","order":"1","col":"24","top":"0","left":"0","row":"10","clear":"true","height":"50","width_cls":"c24","left_cls":"ml0","clear_cls":"clr"}}]',
	'font_icons' => '["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L", "Z", "X", "C", "V", "B", "N", "M", "q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m"]',
	'icon_fonts' => '[{"name":"Fixer","family":"Fixer","files":{"eot":"Fixer.eot","svg":"Fixer.svg","ttf":"Fixer.ttf","woff":"Fixer.woff"},"type":"theme-defined","active":true}]',
	'tab_presets' => '[{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc6","hover-font-size":"15","hover-font-family":"Raleway","hover-font-color":"#ufc1","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc1","id":"default-tabs","name":"default tabs"},{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc6","hover-font-size":"15","hover-font-family":"Raleway","hover-font-color":"#ufc6","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc1","id":"default","name":"default"},{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc0","hover-font-size":"15","hover-font-family":"Raleway","hover-font-color":"#ufc0","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc1","id":"alt-border","name":"alt border"},{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc0","hover-font-size":"15","hover-font-family":"Raleway","hover-font-color":"#ufc0","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc0","id":"alt-filled","name":"alt filled"},{"active-font-size":"14","active-font-family":"Raleway","active-font-color":"rgb(128, 128, 128)","hover-font-size":"14","hover-font-family":"Arial","hover-font-color":"rgb(0, 0, 0)","hover-transition-duration":"0.3","hover-transition-easing":"ease-in-out","static-font-size":"14","static-font-family":"Arial","static-font-color":"rgb(0, 0, 0)","id":"brand","name":"brand"},{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc0","hover-font-size":"15","hover-font-family":"Raleway","hover-font-color":"#ufc0","hover-transition-duration":"0.4","hover-transition-easing":"ease-in-out","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc0","id":"alt","name":"alt"}]',
	'accordion_presets' => '[{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc1","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"rgba(137, 77, 77, 0)","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"rgba(137, 77, 77, 0)","active-triangle-icon-color":"#ufc1","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc1","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"rgba(137, 77, 77, 0)","static-triangle-icon-color":"#ufc1","id":"default","name":"default"},{"active-font-size":"14","active-font-family":"Arial","active-font-color":"rgb(128, 128, 128)","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"rgb(0, 0, 0)","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"rgb(0, 0, 0)","active-triangle-icon-color":"rgb(255, 255, 255)","static-font-size":"14","static-font-family":"Arial","static-font-color":"rgb(96, 96, 96)","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"rgb(0, 0, 0)","static-triangle-icon-color":"rgb(255, 255, 255)","id":"fds","name":"fds"},{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc6","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"rgba(137, 77, 77, 0)","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"rgba(137, 77, 77, 0)","active-triangle-icon-color":"#ufc1","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc1","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"rgba(137, 77, 77, 0)","static-triangle-icon-color":"#ufc1","id":"brand","name":"brand"},{"active-font-size":"15","active-font-family":"Raleway","active-font-color":"#ufc0","active-header-background":"rgb(0, 0, 0)","active-header-bg-color":"#ufc6","active-content-background":"rgb(0, 0, 0)","active-content-bg-color":"rgba(137, 77, 77, 0)","active-triangle-icon-color":"rgb(255, 255, 255)","static-font-size":"15","static-font-family":"Raleway","static-font-color":"#ufc0","static-header-background":"rgb(0, 0, 0)","static-header-bg-color":"#ufc1","static-triangle-icon-color":"rgb(255, 255, 255)","id":"alt","name":"alt"}]',
	'responsive' => '{"breakpoints":[{"name":"Default Desktop","short_name":"Default","default":true,"id":"desktop","width":1080,"columns":24,"enabled":true,"fixed":true,"active":"false","typography":{"h1":{"weight":"900","style":"normal","size":"110","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(255,255,255,1)"},"h2":{"weight":"700","style":"normal","size":"28","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif"},"h3":{"weight":"400","style":"normal","size":"28","line_height":"0","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"},"h4":{"weight":"500","style":"normal","size":"28","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif"},"h5":{"weight":"700","style":"normal","size":"22","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"},"p":{"weight":"400","style":"normal","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"}},"styles":""},{"name":"Tablet","short_name":"Tablet","id":"tablet","width":570,"columns":12,"enabled":true,"fixed":true,"default":false,"active":"true","typography":{"h1":{"weight":"700","style":"normal","size":"110","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(255,255,255,1)"},"h2":{"weight":"700","style":"normal","size":"28","line_height":"1.2","font_face":"Raleway","font_family":"sans-serif"},"h3":{"weight":"400","style":"normal","size":"28","line_height":"1.5","font_face":"Raleway","font_family":"sans-serif","color":"rgba(255,255,255,1)"},"h4":{"weight":"500","style":"normal","size":"28","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif"},"h5":{"weight":"700","style":"normal","size":"22","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"},"p":{"weight":"400","style":"normal","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"}},"styles":""},{"name":"Mobile","short_name":"Mobile","id":"mobile","width":315,"columns":7,"enabled":true,"fixed":true,"default":false,"active":"false","typography":{"h1":{"weight":"700","style":"normal","size":"74","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(255,255,255,1)"},"h2":{"weight":"700","style":"normal","size":"28","line_height":"1.2","font_face":"Raleway","font_family":"sans-serif"},"h3":{"weight":"600","style":"normal","size":"28","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(255,255,255,1)"},"h4":{"weight":"500","style":"normal","size":"28","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif"},"h5":{"weight":"700","style":"normal","size":"22","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"},"p":{"weight":"400","style":"normal","line_height":"1.1","font_face":"Raleway","font_family":"sans-serif","color":"rgba(51,51,51,1)"}},"styles":""}]}',
);