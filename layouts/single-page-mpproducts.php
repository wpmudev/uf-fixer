<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'color',
  'background_color' => '#ufc0',
  'version' => '1.0.0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => '110',
  'bg_padding_num' => 0,
)
			);

$main->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1478860040600-1377 upfront-module-spacer',
  'id' => 'module-1478860040600-1377',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1478860040600-1337',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1478860040599-1714',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
    ),
    'mobile' => 
    array (
      'col' => 3,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1479811991185-1930',
  'options' => 
  array (
    'content' => '<h1 style="text-align: center;">Fixer Store</h1>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1479811991184-1066',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'mp-page-title',
    'padding_slider' => '15',
    'top_padding_num' => '110',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '0',
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '110',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'is_edited' => true,
    'anchor' => '',
    'current_preset' => 'mp-page-title',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'mp-page-title',
      )),
    )),
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1467787553104-1347',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("PostData", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467787537272-1394',
  'id' => 'module-1467787537272-1394',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'mp-products',
    'row' => 40,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'F j, Y g:i a',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Posted on <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'element_id' => 'post-data-object-1467787537271-1215',
    'top_padding_num' => '60',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'lock_padding' => '',
    'anchor' => '',
    'current_preset' => 'mp-products',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'mp-products',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'mp-products-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'mp-products-mobile',
      )),
    )),
    'preset_style' => '#page .default.upost-data-object-post_data .upostdata-part:last-child {
    margin-bottom: 0;
}
#page .default.upost-data-object-post_data .title h1 {
    margin: 0;
    padding: 0;
    text-align: center;
    -ms-word-wrap: break-word;
    word-wrap: break-word;
}
#page .default.upost-data-object-post_data .content > *:last-child, #page .default.upost-data-object-post_data .content > .upfront-content-marker > *:last-child {
    margin-bottom: 0;
}
#page .default.upost-data-object-post_data .content img {
    display: block;
    height: auto;
    max-width: 100%;
    margin-top:5px;
}
#page .default.upost-data-object-post_data .content .alignnone, #page .default.upost-data-object-post_data .content .aligncenter, #page .default.upost-data-object-post_data .content .alignright, #page .default.upost-data-object-post_data .content .alignleft {
    max-width: 100%;
}
#page .default.upost-data-object-post_data .content .alignnone, #page .default.upost-data-object-post_data .content div.alignnone, #page .default.upost-data-object-post_data .content .aligncenter, #page .default.upost-data-object-post_data .content div.aligncenter, #page .default.upost-data-object-post_data .content img.aligncenter {
    display: block;
    margin: 0 auto 30px auto;
}
#page .default.upost-data-object-post_data .content .alignright, #page .default.upost-data-object-post_data .content img.alignright {
    float: right;
    margin: 0 0 30px 30px;
}
#page .default.upost-data-object-post_data .content .alignleft, #page .default.upost-data-object-post_data .content img.alignleft {
    float: left;
    margin: 0 30px 30px 0;
}
#page .default.upost-data-object-post_data .content h1, #page .default.upost-data-object-post_data .content h2, #page .default.upost-data-object-post_data .content h3, #page .default.upost-data-object-post_data .content h4, #page .default.upost-data-object-post_data .content p, #page .default.upost-data-object-post_data .content address, #page .default.upost-data-object-post_data .content table, #page .default.upost-data-object-post_data .content pre, #page .default.upost-data-object-post_data .content cite, #page .default.upost-data-object-post_data .content q, #page .default.upost-data-object-post_data .content iframe, #page .default.upost-data-object-post_data .content embed {
    margin: 0 0 30px;
    padding-bottom: 0;
}
#page .default.upost-data-object-post_data .content h5, #page .default.upost-data-object-post_data .content h6 {
    margin: 0 0 10px;
}
#page .default.upost-data-object-post_data .content > ul, #page .default.upost-data-object-post_data .content > ol {
    margin: 0 0 30px 20px;
}
#page .default.upost-data-object-post_data .content ul li, #page .default.upost-data-object-post_data .content ol li {
    margin-bottom: 10px;
}
#page .default.upost-data-object-post_data .content p {
    padding: 0;
    -ms-word-break: break-word;
    word-break: break-word;
}
#page .default.upost-data-object-post_data .content img, #page .default.upost-data-object-post_data .content .wp-caption {
    display: block;
    height: auto;
    max-width: 100%;
}
#page .default.upost-data-object-post_data .content .wp-caption {
    margin-bottom:30px;
}
#page .default.upost-data-object-post_data .content .wp-caption-text p, #page .default.upost-data-object-post_data .content p.wp-caption-text {
    color: /*#ufc1*/#333333;
    font-size: 13px;
    line-height: 1.4em;
    margin-top: 15px;
    margin-bottom: 0;
    padding: 0;
    text-align: center;
}
#page .default.upost-data-object-post_data .content .wp-caption.alignnone.wp-caption-text p, #page .default.upost-data-object-post_data .content .wp-caption.alignnone p.wp-caption-text {
    text-align: right;
}
#page .default.upost-data-object-post_data .content .wp-caption-text > * {
    margin: 0;
}
#page .default.upost-data-object-post_data .content .wp-caption-text a {
    color: /*#ufc6*/#5ebf6b;
    font-size: 13px;
    line-height: 1.385em;
}
#page .default.upost-data-object-post_data .content .ueditor-insert.upfront-inserted_image-wrapper, #page .default.upost-data-object-post_data .content .ueditor-insert.upfront-inserted_image-wrapper:hover {
    margin: 0;
}
#page .default.upost-data-object-post_data .content .ueditor-insert {
    min-height: auto !important;
}
#page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert {
    margin: 0 0 30px;
}
#page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-center, #page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-page-center {
    margin-right: auto;
    margin-left: auto;
}
#page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-full-width, #page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-page-full-width {
    margin-right: 0;
    margin-left: 0;
    width: 100%;
}
#page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-right, #page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-page-right {
    margin-bottom: 15px;
    margin-left: 30px;
}
#page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-left, #page .default.upost-data-object-post_data .content .upfront-inserted_image-wrapper.ueditor-insert .ueditor-insert.ueditor-image-style-page-left {
    margin-right: 30px;
    margin-bottom: 15px;
}
#page .default.upost-data-object-post_data .content .upfront-wrapper.uinsert-image-wrapper {
    min-height: auto !important;
    padding: 0;
}
#page .default.upost-data-object-post_data .content .upfront-wrapper.wp-caption-text {
    color: /*#ufc1*/#333333;
    font-size: 13px;
    line-height: 1.4em;
    min-height: auto !important;
    margin: 0;
    text-align: center;
    padding: 15px 0 0;
}
#page .default.upost-data-object-post_data .content .upfront-wrapper.wp-caption-text p {
    margin: 0;
}
#page .default.upost-data-object-post_data .upostdata-part.content blockquote {
    margin: 0 60px 30px;
    padding: 0;
    text-align: center;
}
#page .default.upost-data-object-post_data .upostdata-part.content blockquote:before, #page .default.upost-data-object-post_data .upostdata-part.content blockquote:after {
    content: "";
    display: none;
}
#page .default.upost-data-object-post_data .content blockquote p {
    padding: 0;
}
#page .default.upost-data-object-post_data .content blockquote p:last-child {
    margin-bottom: 0;
}
#page .default.upost-data-object-post_data .content address {
    font-family: "Raleway", Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
}
#page .default.upost-data-object-post_data .content pre {
    background: /*#ufc5*/#645191;
    color: /*#ufc0*/#ffffff;
    padding: 15px;
    white-space: pre-wrap;
}
#page .default.upost-data-object-post_data .content q {
    font-style: italic;
    font-weight: 400;
}
#page .default.upost-data-object-post_data .content cite {
    color: /*#ufc1*/#333333;
    font-weight: 700;
    font-style: normal;
}
#page .default.upost-data-object-post_data .content iframe, #page .default.upost-data-object-post_data .content embed {
    display: block;
    max-width: 100%;
}
#page .default.upost-data-object-post_data .content table {
    border-spacing: 0;
    border-collapse: collapse;
    max-width: 100%;
    width: 100%;
}
#page .default.upost-data-object-post_data .content table > tbody > tr > td, #page .default.upost-data-object-post_data .content table > tbody > tr > th, #page .default.upost-data-object-post_data .content table > tfoot > tr > td, #page .default.upost-data-object-post_data .content table > tfoot > tr > th, #page .default.upost-data-object-post_data .content table > thead > tr > td, #page .default.upost-data-object-post_data .content table > thead > tr > th {
    border-top: 1px solid #ece9e4;
    color: /*#ufc1*/#333333;
    padding: 10px;
    text-align: left;
    vertical-align: top;
}
#page .default.upost-data-object-post_data .content table > thead > tr > th {
    border-bottom: 2px solid /*#ufc1*/#333333;
    color: /*#ufc1*/#333333;
    vertical-align: bottom;
}
#page .default.upost-data-object-post_data .content table th a, #page .default.upost-data-object-post_data .content table td a {
    color: /*#ufc1*/#333333;
    text-decoration: underline;
}
#page .default.upost-data-object-post_data .content table th a:hover, #page .default.upost-data-object-post_data .content table td a:hover {
    color: /*#ufc6*/#5ebf6b;
}
#page .default.upost-data-object-post_data .content table thead > tr:first-child > td, #page .default.upost-data-object-post_data .content table thead > tr:first-child > th, #page .default.upost-data-object-post_data .content table thead > tr:first-child > td, #page .default.upost-data-object-post_data .content table thead > tr:first-child > th, #page .default.upost-data-object-post_data .content table > thead:first-child > tr:first-child > td, #page .default.upost-data-object-post_data .content table > thead:first-child > tr:first-child > th {
    border-top: 0;
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-icon {
    text-align: left;
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-icon a {
    display: inline-block;
    position: relative;
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-icon a:before {
    background-color: /*#ufc6*/#5ebf6b;
    content: "";
    left: 0;
    height: 100%;
    opacity: 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    -webkit-transition: opacity 0.2s ease-out;
    transition: opacity 0.2s ease-out;
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-icon a:after {
    content: "+";
    color: /*#ufc0*/#ffffff;
    font-size: 40px;
    font-weight: 300;
    left: 0;
    line-height: 1;
    opacity: 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
    -webkit-transition: opacity 0.2s ease-out, -webkit-transform 0.2s ease-out;
    transition: opacity 0.2s ease-out, transform 0.2s ease-out;
    -webkit-transform: translateY(-20px) scale(3);
    transform: translateY(-20px) scale(3);
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-icon a:hover:before, #page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-icon a:hover:after {
    opacity: 0.8;
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-icon a:hover:after {
    -webkit-transform: translateY(-20px) scale(1);
    transform: translateY(-20px) scale(1);
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item img {
    background-color: /*#ufc0*/#ffffff;
    border-color: /*#ufc2*/#d6e6f0 !important;
    padding: 5px;
}
#page .default.upost-data-object-post_data .content .gallery .gallery-item .gallery-caption {
    max-width: 90%;
    padding: 0;
    text-align: left;
}
#page .default.upost-data-object-post_data .content .post-password-form label {
    float: left;
}
#page .default.upost-data-object-post_data .content .post-password-form input[type="password"] {
    border: 1px solid #ece9e4;
    display: inline-block;
    font-family: "Raleway", Arial, sans-serif;
    font-weight: 500;
    font-size: 15px;
    font-style: normal;
    height: 50px;
    padding: 0 20px;
    width: 300px;
}
#page .default.upost-data-object-post_data .content .post-password-form input[type="submit"] {
    background: #a4d0dc;
    color: /*#ufc0*/#ffffff;
    display: inline-block;
    float: left;
    height: 50px;
    padding: 0 15px;
    width: auto;
}
#page .default.upost-data-object-post_data .content .post-password-form input[type="submit"]:hover {
    background: /*#ufc6*/#5ebf6b;
}
#page .default.upost-data-object-post_data /* WooCommerce Global Styles */
.woocommerce h2 {
    font-size: 25px;
    line-height: 1.5em;
    margin: 0 0 15px;
    text-transform: capitalize;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-error > li {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce form .form-row {
    margin: 0 0 10px;
}
#page .default.upost-data-object-post_data  .woocommerce form .form-row:last-child {
    margin-bottom: 0;
}
#page .default.upost-data-object-post_data  .woocommerce form .form-row-first {
    padding-right: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce form .form-row-last {
    padding-left: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table {
    border: none;
    border-radius: 0;
    font: 400 15px/1.667em "Raleway", Arial, sans-serif;
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td, #page .default.upost-data-object-post_data  .woocommerce table.shop_table th {
    padding: 5px;
    vertical-align: middle;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table thead th {
    border-bottom: 1px solid /*#ufc1*/#333333;
    text-transform: uppercase;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table thead th {
    font-weight: 700;
    font-size: 18px;
    line-height: 1.5em;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table tbody th, #page .default.upost-data-object-post_data  .woocommerce table.shop_table tbody td, #page .default.upost-data-object-post_data  .woocommerce table.shop_table tfoot th, #page .default.upost-data-object-post_data  .woocommerce table.shop_table tfoot td {
    border-top: 1px solid /*#ufc8*/#f7f7f7;
    color: /*#ufc1*/#333333;
    font-size: 15px;
    line-height: 1.667em;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table tbody tr:first-child th, #page .default.upost-data-object-post_data  .woocommerce table.shop_table tbody tr:first-child td {
    border-top: none;
}
#page .default.upost-data-object-post_data  ..woocommerce table.shop_table tfoot tr:first-child th, #page .default.upost-data-object-post_data  .woocommerce table.shop_table tfoot tr:first-child td {
    border-top-color: /*#ufc1*/#333333;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td a:not(.remove):not(.button) {
    color: /*#ufc1*/#333333;
    text-decoration: none;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td a:not(.remove):not(.button):hover {
    color: /*#ufc3*/#000000;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td a.remove {
    text-decoration: none;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table dl {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table dl dt {
    font-size: 15px;
    line-height: 1.667em;
    margin: 0 5px 0 0;
    padding: 0;
    text-transform: capitalize;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table dl dd {
    margin: 0;
    padding: 0;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table dl dd, #page .default.upost-data-object-post_data  .woocommerce table.shop_table dl dd p {
    font-size: 15px;
    line-height: 1.667em;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table dl dd p {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td p {
    margin: 0 0 15px;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td p:last-of-type:last-child {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce form .form-row {
    margin: 0 0 15px;
}
#page .default.upost-data-object-post_data  .woocommerce .customer_details + header.title > h3, #page .default.upost-data-object-post_data  .woocommerce .addresses h3 {
    font-weight: 700;
    font-size: 25px;
    line-height: 1.5em;
    margin: 0 0 15px;
    text-transform: capitalize;
}
#page .default.upost-data-object-post_data  .woocommerce .customer_details + header.title + address, #page .default.upost-data-object-post_data  .woocommerce .addresses address {
    font: 400 15px/1.667em "Raleway", Arial, sans-serif;
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce .addresses .title .edit, #page .default.upost-data-object-post_data  .woocommerce ul.digital-downloads li .count {
    color: /*#ufc7*/#ef4836;
    font: 400 15px/1.667px "Raleway", Arial, sans-serif;
}
#page .default.upost-data-object-post_data  .woocommerce .button {
    text-decoration: none;
}
#page .default.upost-data-object-post_data  .woocommerce .button.download:hover {
    color: /*#ufc0*/#ffffff;
}
#page .default.upost-data-object-post_data /* WooCommerce: Products */
.woocommerce ul.products li.product {
    margin-bottom: 40px;
}
#page .default.upost-data-object-post_data /* WooCommerce: Cart Page */
.woocommerce table.cart td.actions {
    border-top-color: /*#ufc1*/#333333;
    padding: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce table.cart td.actions .coupon .input-text {
    border-color: transparent;
    float: left;
    margin: 0 10px 0 0;
    padding: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce table.cart td.actions .coupon .input-text:focus {
    border-color: /*#ufc2*/#d6e6f0;
}
#page .default.upost-data-object-post_data  .woocommerce table.cart td.actions .coupon .button {
    float: left;
    line-height: 1.2em;
}
#page .default.upost-data-object-post_data  .woocommerce table.cart td.actions > input[type="submit"].button {
    float: right;
    line-height: 1.2em;
}
#page .default.upost-data-object-post_data  .woocommerce .cart-collaterals {
    border-top: 1px solid /*#ufc8*/#f7f7f7;
    margin-top: 40px;
    padding-top: 40px;
}
#page .default.upost-data-object-post_data  .woocommerce .cross-sells h2, #page .default.upost-data-object-post_data  .woocommerce .cart_totals h2 {
    margin: 0 0 15px;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td .woocommerce-shipping-calculator > p {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td .woocommerce-shipping-calculator a.shipping-calculator-button {
    color: /*#ufc7*/#ef4836;
    font-size: 15px;
    text-decoration: underline;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td .woocommerce-shipping-calculator .shipping-calculator-form {
    margin-top: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td .woocommerce-shipping-calculator .shipping-calculator-form p {
    margin: 0 0 10px;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td .woocommerce-shipping-calculator .button {
    background: /*#ufc5*/#645191;
    color: /*#ufc0*/#ffffff;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table td .woocommerce-shipping-calculator .button:hover {
    background: /*#ufc1*/#333333;
    color: /*#ufc0*/#ffffff;
}
#page .default.upost-data-object-post_data  .woocommerce .wc-proceed-to-checkout a.checkout-button {
    font-size: 18px;
    line-height: 1.667em;
    margin: 0;
    padding: 20px;
}
#page .default.upost-data-object-post_data  .woocommerce .cart-empty, #page .default.upost-data-object-post_data  .woocommerce .return-to-shop {
    margin: 0;
    text-align: center;
}
#page .default.upost-data-object-post_data  .woocommerce .return-to-shop {
    margin-top: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce .return-to-shop .button {
    font-size: 15px;
    line-height: 1.2em;
}
#page .default.upost-data-object-post_data  .woocommerce ul.products li.product h3 {
    margin: 0 0 10px;
}
#page .default.upost-data-object-post_data  .woocommerce .cart-collaterals .cross-sells ul.products {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce .cart-collaterals .cross-sells ul.products li {
    width: 47.6%;
}
#page .default.upost-data-object-post_data /* WooCommerce: Checkout */
.woocommerce form.woocommerce-checkout .woocommerce-info, #page .default.upost-data-object-post_data  .woocommerce form.woocommerce-checkout .woocommerce-error, #page .default.upost-data-object-post_data  .woocommerce form.woocommerce-checkout .woocommerce-message {
    margin-bottom: 40px !important;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-billing-fields > h3, #page .default.upost-data-object-post_data  .woocommerce .woocommerce-shipping-fields > h3, #page .default.upost-data-object-post_data  #order_review_heading {
    margin: 0 0 15px;
    text-transform: capitalize;
}
#page .default.upost-data-object-post_data  .woocommerce form.checkout_coupon {
    background: /*#ufc8*/#f7f7f7;
    border: none;
    border-radius: 0;
    margin: 0;
    padding: 0 15px 15px;
}
#page .default.upost-data-object-post_data  .woocommerce .checkout_coupon p {
    margin: 0;
    padding: 0;
}
#page .default.upost-data-object-post_data  .woocommerce .checkout_coupon .input-text {
    background: /*#ufc0*/#ffffff;
    border: 1px solid /*#ufc2*/#d6e6f0;
}
#page .default.upost-data-object-post_data  .woocommerce .checkout_coupon .input-text, #page .default.upost-data-object-post_data  .woocommerce .checkout_coupon .button {
    float: left;
}
#page .default.upost-data-object-post_data  .woocommerce .checkout_coupon .button {
    margin-left: 5px;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-info + form.login {
    border: none;
    padding: 0 15px 15px;
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-info + form.login > p:not(.form-row), #page .default.upost-data-object-post_data  .woocommerce .create-account > p:not(.form-row) {
    margin-bottom: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce #customer_details {
    border-bottom: 1px solid /*#ufc8*/#f7f7f7;
    margin-bottom: 40px;
    padding-bottom: 40px;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table .cart-discount td, #page .default.upost-data-object-post_data  .woocommerce table.shop_table .cart-discount td .woocommerce-Price-amount {
    color: /*#ufc6*/#5ebf6b;
}
#page .default.upost-data-object-post_data  .woocommerce table.shop_table .cart-discount td a.woocommerce-remove-coupon {
    color: /*#ufc7*/#ef4836;
}
#page .default.upost-data-object-post_data  .woocommerce table.woocommerce-checkout-review-order-table tr td {
    padding: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce #payment {
    background: transparent;
    border-radius: 0;
    margin: 20px 0 0;
    padding: 0;
}
#page .default.upost-data-object-post_data  .woocommerce #payment ul.payment_methods {
    background: /*#ufc2*/#d6e6f0;
    border: none;
    margin: 0;
    padding: 20px;
}
#page .default.upost-data-object-post_data  .woocommerce #payment ul.payment_methods li {
    color: /*#ufc1*/#333333;
    font: 500 15px/1.667em "Raleway", Arial, sans-serif;
    margin: 15px 0 0;
    padding: 0;
}
#page .default.upost-data-object-post_data  .woocommerce #payment ul.payment_methods li:first-child {
    margin-top: 0;
}
#page .default.upost-data-object-post_data  .woocommerce #payment ul.payment_methods li input {
    float: left;
    margin: 5px 15px 0 0;
}
#page .default.upost-data-object-post_data  .woocommerce #payment div.payment_box {
    background: /*#ufc0*/#ffffff;
    border-radius: 0;
    color: /*#ufc1*/#333333;
    font: 400 15px/1.667em "Raleway", Arial, sans-serif;
    margin: 15px 0 0;
    padding: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce #payment div.payment_box p {
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    line-height: inherit;
}
#page .default.upost-data-object-post_data  .woocommerce #payment div.payment_box p:last-child {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce #payment div.payment_box:before {
    border-bottom: 15px solid /*#ufc0*/#ffffff;
    left: 20px;
    margin: 0;
    top: -30px;
}
#page .default.upost-data-object-post_data  .woocommerce #payment .payment_method_paypal .about_paypal {
    color: /*#ufc1*/#333333;
    display: inline-block;
    float: none;
    font: 400 15px/1.667em "Raleway", Arial, sans-serif;
    margin: 10px 0 0 29px;
    text-decoration: unerline;
}
#page .default.upost-data-object-post_data  .woocommerce #payment ul.payment_methods li img {
    margin: 10px 0 0 29px;
}
#page .default.upost-data-object-post_data  .woocommerce #payment div.form-row.place-order {
    margin: 20px 0 0;
    padding: 0;
}
#page .default.upost-data-object-post_data /* WooCommerce: Checkout Complete */
.woocommerce .woocommerce-thankyou-order-received {
    background: /*#ufc8*/#f7f7f7;
    border-top: 2px solid /*#ufc6*/#5ebf6b;
    color: /*#ufc1*/#333333;
    margin: 0 0 40px;
    padding: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details-heading, #page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details + h2, #page .default.upost-data-object-post_data  .woocommerce .order_details + header, #page .default.upost-data-object-post_data  .woocommerce table.customer_details + header.title, #page .default.upost-data-object-post_data  .woocommerce table.customer_details + .addresses {
    border-top: 1px solid /*#ufc8*/#f7f7f7;
    padding-top: 40px;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-thankyou-order-details, #page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details {
    background: /*#ufc2*/#d6e6f0;
    color: /*#ufc1*/#333333;
    padding: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce ul.woocommerce-thankyou-order-details {
    background: /*#ufc4*/#ffe262;
    margin-bottom: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce ul.woocommerce-thankyou-order-details + .clear + p {
    margin-bottom: 40px;
}
#page .default.upost-data-object-post_data  .woocommerce table.order_details, #page .default.upost-data-object-post_data  .woocommerce table.customer_details {
    margin: 0 0 40px;
}
#page .default.upost-data-object-post_data  .woocommerce ul.order_details {
    margin: 0 0 10px;
}
#page .default.upost-data-object-post_data  .woocommerce ul.order_details li {
    border-right-color: /*#ufc1*/#333333;
    font: 400 15px/1.667em "Raleway", Arial, sans-serif;
    margin: 0 15px 0 0;
    padding: 0 15px 0 0;
}
#page .default.upost-data-object-post_data  .woocommerce ul.order_details li strong {
    font-size: 18px;
    line-height: 1.667em;
}
#page .default.upost-data-object-post_data  .woocommerce ul.wc-bacs-bank-details {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details-heading + h3, #page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details + h3 {
    font-size: 20px;
    line-height: 1.667em;
}
#page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details-heading + h3 {
    margin: 0 0 10px;
}
#page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details + h3 {
    margin: 10px 0;
}
#page .default.upost-data-object-post_data  .woocommerce ul.wc-bacs-bank-details li {
    margin: 0 15px 0 0;
    padding-right: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce .wc-bacs-bank-details + h2 {
    margin-top: 40px;
}
#page .default.upost-data-object-post_data /* WooCommerce: My Account Page */
.woocommerce .woocommerce-MyAccount-content > p {
    color: /*#ufc1*/#333333;
    margin-bottom: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-content > p > a {
    color: /*#ufc1*/#333333;
    text-decoration: underline;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-content > p > a:hover {
    color: /*#ufc3*/#000000;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-navigation {
    background: /*#ufc8*/#f7f7f7;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-navigation ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
#page .default.upost-data-object-post_data  .woocommerce ul .woocommerce-MyAccount-navigation-link, #page .default.upost-data-object-post_data  .woocommerce ul .woocommerce-MyAccount-navigation-link a {
    color: /*#ufc1*/#333333;
    font: 400 15px/1.667em "Raleway", Arial, sans-serif;
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce ul .woocommerce-MyAccount-navigation-link {
    margin: 0;
    padding: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce ul .woocommerce-MyAccount-navigation-link.is-active {
    background: /*#ufc4*/#ffe262;
}
#page .default.upost-data-object-post_data  .woocommerce ul .woocommerce-MyAccount-navigation-link.is-active, #page .default.upost-data-object-post_data  .woocommerce ul .woocommerce-MyAccount-navigation-link.is-active a {
    color: /*#ufc1*/#333333;
}
#page .default.upost-data-object-post_data  .woocommerce table.my_account_orders .order-actions .button {
    background: /*#ufc5*/#645191;
    color: /*#ufc0*/#ffffff;
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce table.my_account_orders .order-actions .button:hover {
    background: /*#ufc1*/#333333;
}
#page .default.upost-data-object-post_data  .woocommerce table.account-orders-table .woocommerce-Price-amount {
    display: block;
}
#page .default.upost-data-object-post_data  .woocommerce .addresses .woocommerce-Address-title h3 {
    display: block;
    float: none;
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce .addresses .edit {
    display: inline-block;
    float: none;
    margin: 0 0 10px;
}
#page .default.upost-data-object-post_data  .woocommerce .edit-account fieldset {
    background: /*#ufc8*/#f7f7f7;
    border: 1px solid #ddd;
    margin: 0;
    padding: 10px;
}
#page .default.upost-data-object-post_data  .woocommerce .edit-account fieldset legend {
    color: /*#ufc1*/#333333;
    font: 400 18px/1.667em "Raleway", Arial, sans-serif
}
#page .default.upost-data-object-post_data  .woocommerce .edit-account fieldset input.input-text, #page .default.upost-data-object-post_data  .woocommerce .edit-account fieldset textarea {
    background: /*#ufc0*/#ffffff;
}
#page .default.upost-data-object-post_data  .woocommerce .edit-account input[type="submit"].button {
    float: right;
    margin-top: 20px;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-content .order_details, #page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-content > .order-again {
    margin-bottom: 20px
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-content > .order-again > a {
    text-decoration: none;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-content > .order-again .button {
    background: /*#ufc6*/#5ebf6b;
    color: /*#ufc0*/#ffffff;
    font-size: 15px;
    font-weight: 700;
    line-height: 1.2em;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-content > .order-again ~ header {
    border-top: 1px solid /*#ufc8*/#f7f7f7;
    padding-top: 40px;
}
#page .default.upost-data-object-post_data  .woocommerce .woocommerce-MyAccount-downloads td.download-actions:before {
    content: "";
}
#page .default.upost-data-object-post_data /* WooCommerce: Login */
.woocommerce form.login, #page .default.upost-data-object-post_data  .woocommerce #customer_login form.register {
    background: /*#ufc8*/#f7f7f7;
    border: 1px solid transparent;
    border-radius: 0;
    margin: 0;
    padding: 15px;
}
#page .default.upost-data-object-post_data  .woocommerce form.login {
    background: /*#ufc8*/#f7f7f7;
}
#page .default.upost-data-object-post_data  .woocommerce form.login input.input-text {
    background: /*#ufc0*/#ffffff;
}
#page .default.upost-data-object-post_data  .woocommerce form.login > p {
    color: /*#ufc1*/#333333;
}
#page .default.upost-data-object-post_data  .woocommerce form.login > p.lost_password a {
    color: /*#ufc1*/#333333;
    font-size: 15px;
    line-height: 1.667em;
}
#page .default.upost-data-object-post_data  .woocommerce form #rememberme {
    display: inline-block;
    vertical-align: middle;
}
#page .default.upost-data-object-post_data  .woocommerce p.woocommerce-LostPassword {
    margin: 0;
}
#page .default.upost-data-object-post_data  .woocommerce #customer_login form.register {
    background: /*#ufc2*/#d6e6f0;
    border-color: /*#ufc2*/#d6e6f0;
}
#page .default.upost-data-object-post_data  .woocommerce #customer_login form.register .button {
    background: /*#ufc5*/#645191;
    color: /*#ufc0*/#ffffff;
}
#page .default.upost-data-object-post_data  .woocommerce #customer_login form.register .button:hover {
    background: /*#ufc1*/#333333;
}
#page .default.upost-data-object-post_data  .woocommerce #customer_login form.login {
    border: 1px solid #ddd;
}
',
    'theme_preset' => 'true',
    'predefined_date_format' => '0',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Raleway',
    'static-date_posted-fontstyle' => '',
    'static-date_posted-weight' => '400',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '13',
    'static-date_posted-line-height' => '1.923',
    'static-date_posted-font-color' => '#ufc1',
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'top_padding_use' => 'yes',
    'top_padding_slider' => '60',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'theme_style' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467787553104-1347',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '18',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1467787537270-1603',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537271-1078',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'clear' => true,
          'order' => 1,
        ),
        'mobile' => 
        array (
          'col' => 7,
          'clear' => true,
          'order' => 1,
        ),
        'current_property' => 
        array (
          0 => 'order',
        ),
      ),
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => '',
      'current_preset' => 'default',
      'preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'use_padding' => 'yes',
          'hide' => 0,
        ),
        'current_property' => 
        array (
          0 => 'col',
        ),
        'mobile' => 
        array (
          'col' => 7,
          'use_padding' => 'yes',
          'hide' => 0,
        ),
      ),
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1478860042905-1474 upfront-module-spacer',
  'id' => 'module-1478860042905-1474',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1478860042905-1359',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1478860042905-1689',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
    ),
    'mobile' => 
    array (
      'col' => 3,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

