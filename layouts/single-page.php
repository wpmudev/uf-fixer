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
  'row' => 147,
  'background_type' => 'color',
  'background_color' => '#ufc0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 236,
       'background_type' => 'color',
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 326,
       'background_type' => 'color',
       'bottom_bg_padding_slider' => '60',
       'bottom_bg_padding_num' => '60',
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 178,
    )),
     'current_property' => 'bottom_bg_padding_num',
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'version' => '1.0.0',
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => '105',
  'bottom_bg_padding_num' => '105',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1458057064664-1693 upfront-module-spacer',
  'id' => 'module-1458057064664-1693',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1458057064663-1406',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1458057064662-1503',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1458056777729-1713',
  'id' => 'module-1458056777729-1713',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'title-and-content',
    'row' => 40,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'M d, Y',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	<span class="date">{{date}}</span>
</div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
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
    'element_id' => 'post-data-object-1458056777728-1170',
    'top_padding_num' => '110',
    'bottom_padding_num' => '0',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '110',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'title-and-content',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'title-and-content',
      )),
    )),
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'lock_padding',
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1458056969735-1215',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '20',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'title',
      'wrapper_id' => 'wrapper-1458059493348-1532',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1458059490338-1974',
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'order' => 1,
          'clear' => true,
        ),
        'mobile' => 
        array (
          'col' => 7,
          'order' => 1,
          'clear' => true,
        ),
      ),
      'use_padding' => 'yes',
      'preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 12,
          'order' => 0,
          'use_padding' => 'yes',
          'hide' => 0,
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
        ),
        'current_property' => 
        array (
          0 => 'use_padding',
        ),
      ),
    ),
    1 => 
    array (
      'columns' => '20',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1458056777726-1121',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1458056777727-1839',
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
          'order' => 2,
          'clear' => true,
        ),
        'mobile' => 
        array (
          'col' => 7,
          'order' => 2,
          'clear' => true,
        ),
      ),
      'use_padding' => 'yes',
      'preset' => 'default',
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 12,
          'order' => 0,
          'use_padding' => 'yes',
          'hide' => 0,
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
        ),
        'current_property' => 
        array (
          0 => 'use_padding',
        ),
      ),
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1458057067000-1309 upfront-module-spacer',
  'id' => 'module-1458057067000-1309',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1458057066999-1256',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1458057066999-1774',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

