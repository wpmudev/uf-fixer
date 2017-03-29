<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$blog_individual = upfront_create_region(
			array (
  'name' => 'blog-individual',
  'title' => 'Blog Individual',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'blog-individual',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 100,
  'background_type' => 'color',
  'background_color' => 'rgba(255,255,255,1)',
  'nav_region' => '',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 100,
       'background_type' => 'color',
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 100,
       'background_type' => 'color',
       'bottom_bg_padding_slider' => '60',
       'bottom_bg_padding_num' => '60',
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 100,
    )),
     'current_property' => 'bottom_bg_padding_num',
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'expand_lock' => false,
  'version' => '1.0.0',
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => '105',
  'bottom_bg_padding_num' => '105',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'region_role' => 'main',
)
			);

$blog_individual->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1407490840563-1569-module',
  'id' => 'module-1407490840563-1569-module',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h1 class="" style="text-align: center;">Blog</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1407490840562-1778',
    'class' => 'c24 c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 18,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '110',
    'bottom_padding_num' => '15',
    'padding_slider' => '15',
    'preset' => 'archive-heading-m',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'top_padding_slider' => '110',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'archive-heading-m',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'archive-heading-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'archive-heading-mobile',
      )),
    )),
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      array (
      ),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'row' => 10,
         'use_padding' => 'yes',
      )),
    )),
    'current_preset' => 'archive-heading-m',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'module-1407490840563-1569-module-wrapper',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'edited',
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
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 10,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457102711774-1501 upfront-module-spacer',
  'id' => 'module-1457102711774-1501',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1457102711773-1913',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1457102711773-1907',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$blog_individual->add_element("PostData", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457102555379-1675',
  'id' => 'module-1457102555379-1675',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'title-only',
    'row' => 5,
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
</div>',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'preset_style' => '#page .default .title h1 {
    margin: 0;
    padding: 0;
    text-align: center;
}
',
    'theme_preset' => 'true',
    'element_id' => 'post-data-object-1457102555378-1617',
    'top_padding_num' => '15',
    'bottom_padding_num' => '60',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'title-only',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'title-tablet',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'title-mobile',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_slider' => '15',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '60',
    'predefined_date_format' => '0',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Raleway',
    'static-date_posted-fontstyle' => '',
    'static-date_posted-weight' => '400',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '13',
    'static-date_posted-line-height' => '1.923',
    'static-date_posted-font-color' => '#ufc1',
    'hidden_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
    ),
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '30',
         'bottom_padding_num' => '30',
         'row' => 6,
      )),
       'current_property' => 'lock_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '30',
         'bottom_padding_num' => '30',
         'row' => 6,
      )),
    )),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'current_preset' => 'title-only',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1457102690875-1718',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 6,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 6,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'title',
      'wrapper_id' => 'wrapper-1458303816990-1982',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1458303816991-1256',
      'padding_slider' => '15',
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
      'preset' => 'default',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
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
          'use_padding' => 'yes',
          'hide' => 0,
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457102714540-1149 upfront-module-spacer',
  'id' => 'module-1457102714540-1149',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1457102714539-1398',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1457102714538-1309',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457103484734-1656 upfront-module-spacer',
  'id' => 'module-1457103484734-1656',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1457103484733-1176',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1457103484733-1769',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$blog_individual->add_element("PostData", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1456912244045-1356',
  'id' => 'module-1456912244045-1356',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-author',
    'id_slug' => 'post-data',
    'data_type' => 'author',
    'preset' => 'gravatar-and-name',
    'row' => 6,
    'type_parts' => 
    array (
      0 => 'author',
      1 => 'gravatar',
      2 => 'author_email',
      3 => 'author_url',
      4 => 'author_bio',
    ),
    'gravatar_size' => 60,
    'post-part-author' => '<div class="upostdata-part author">
	     <a href="{{url}}" {{target}}>{{name}}</a></div>',
    'post-part-gravatar' => '<div class="upostdata-part gravatar">
	{{gravatar}}
</div>',
    'post-part-author_email' => '<div class="upostdata-part author author-email">
	<a href="mailto:{{email}}">{{name}}</a>
</div>',
    'post-part-author_url' => '<div class="upostdata-part author author-url">
	<a href="{{url}}" rel="author external">{{name}}</a>
</div>',
    'post-part-author_bio' => '<div class="upostdata-part author author-bio">
	{{bio}}
</div>',
    'element_id' => 'post-data-object-1456912244044-1687',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'theme_preset' => 'true',
    'hidden_parts' => 
    array (
      0 => 'author_email',
    ),
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'preset_style' => '#page .default.upost-data-object-author .upfront-post-data-part {
    padding: 0;
}
#page .default.upost-data-object-author .gravatar {
    display: block;
    margin: 0;
    overflow: hidden;
}
#page .default.upost-data-object-author .gravatar img {
    float: right;
    height: 60px;
    width: 60px;
}
#page .default.upost-data-object-author .author {
    margin-top: 5px;
    text-align: right;
}
#page .default.upost-data-object-author .post_author_by, #page .default.upost-data-object-author .author a {
    color: /*#ufc1*/#333333;
    font-size: 13px;
    font-weight: 700;
    line-height: 1.923em;
}
#page .default.upost-data-object-author .author a:hover {
    text-decoration: underline;
}
',
    'static-author-use-typography' => 'yes',
    'static-author-font-family' => 'Raleway',
    'static-author-fontstyle' => '700 normal',
    'static-author-weight' => '700',
    'static-author-style' => 'normal',
    'static-author-font-size' => '13',
    'static-author-line-height' => '1.923',
    'static-author-font-color' => '#ufc1',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      array (
      ),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'preset' => 'name-mobile',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'name-mobile',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'gravatar-and-name',
      )),
    )),
    'email_link_text' => '',
    'static-author_email-font-family' => '',
    'static-author_email-fontstyle' => '',
    'static-author_email-weight' => '400',
    'static-author_email-style' => 'normal',
    'static-author_email-font-size' => '',
    'static-author_email-line-height' => '',
    'static-author_email-font-color' => '#ufc5',
    'static-author_url-font-family' => '',
    'static-author_url-fontstyle' => '',
    'static-author_url-weight' => '400',
    'static-author_url-style' => 'normal',
    'static-author_url-font-size' => '',
    'static-author_url-line-height' => '',
    'static-author_url-font-color' => '',
    'static-author_bio-font-family' => '',
    'static-author_bio-fontstyle' => '',
    'static-author_bio-weight' => '400',
    'static-author_bio-style' => 'normal',
    'static-author_bio-font-size' => '',
    'static-author_bio-line-height' => '',
    'static-author_bio-font-color' => '',
    'static-gravatar-lock' => 'yes',
    'static-gravatar-border-width' => '1',
    'static-gravatar-border-type' => 'solid',
    'static-gravatar-border-color' => '',
    'static-gravatar-radius1' => '0',
    'static-gravatar-radius2' => '0',
    'static-gravatar-radius3' => '0',
    'static-gravatar-radius4' => '0',
    'static-gravatar-radius' => '0',
    'static-gravatar-radius_number' => '0',
    'link' => 'author',
    'current_preset' => 'gravatar-and-name',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1456912540686-1253',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
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
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'close_wrapper' => false,
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '4',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'gravatar',
      'wrapper_id' => 'wrapper-1458563198975-1875',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1458563194349-1038',
      'padding_slider' => '15',
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 6,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'preset' => 'default',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 6,
          'order' => 0,
          'use_padding' => 'yes',
          'hide' => 1,
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
          'use_padding' => 'yes',
          'hide' => 1,
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
    1 => 
    array (
      'columns' => '4',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'author',
      'wrapper_id' => 'wrapper-1456913319056-1112',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1456912244041-1533',
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 6,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'preset' => 'default',
      'use_padding' => 'yes',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 6,
          'order' => 0,
          'hide' => 0,
          'use_padding' => 'yes',
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
          'use_padding' => 'yes',
          'hide' => 0,
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
  ),
));

$blog_individual->add_element("PostData", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1456912813897-1476',
  'id' => 'module-1456912813897-1476',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'date',
    'row' => 4,
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'M d, Y',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	   <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h3>{{title}}</h3>
</div>',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'element_id' => 'post-data-object-1456912813897-1620',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'hidden_parts' => 
    array (
      0 => 'title',
      1 => 'content',
    ),
    'preset_style' => '#page .default  .title h1 {
    margin: 0;
    padding: 0;
    text-align: center;
}
',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'date',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'date-mobile',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'date-mobile',
      )),
    )),
    'theme_style' => '',
    'theme_preset' => 'true',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'predefined_date_format' => '0',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Raleway',
    'static-date_posted-fontstyle' => '',
    'static-date_posted-weight' => '400',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '13',
    'static-date_posted-line-height' => '1.923',
    'static-date_posted-font-color' => '#ufc1',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      array (
      ),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'current_preset' => 'date',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1456912540686-1253',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 1,
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
      0 => 'edited',
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '4',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'date_posted',
      'wrapper_id' => 'wrapper-1457102331586-1146',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457102331586-1909',
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'preset' => 'default',
      'use_padding' => 'yes',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 12,
          'order' => 0,
          'hide' => 0,
          'use_padding' => 'yes',
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
          'use_padding' => 'yes',
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457103494619-1849 upfront-module-spacer',
  'id' => 'module-1457103494619-1849',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1457103494619-1274',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1457103494618-1723',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$blog_individual->add_element("PostData", array (
  'columns' => '15',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457102555389-1887',
  'id' => 'module-1457102555389-1887',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-featured_image',
    'id_slug' => 'post-data',
    'data_type' => 'featured_image',
    'preset' => 'default',
    'row' => 69,
    'type_parts' => 
    array (
      0 => 'featured_image',
    ),
    'full_featured_image' => '0',
    'hide_featured_image' => '0',
    'fallback_image' => '0',
    'fallback_color' => '#f00',
    'fallback_hide' => 0,
    'fallback_option' => 'hide',
    'post-part-featured_image' => '<div class="upostdata-part thumbnail" {{fallback}} data-resize="{{resize}}">
	{{thumbnail}}
</div>',
    'element_id' => 'post-data-object-1457102555388-1110',
    'top_padding_num' => '0',
    'bottom_padding_num' => '30',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '30',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'resize_featured' => '',
    'preset_style' => '#page .default.upost-data-object-featured_image .upfront-post-data-part {
    padding: 0;
}
',
    'theme_preset' => 'true',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '30',
         'top_padding_num' => '30',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
         'row' => 7,
         'top_padding_use' => 'yes',
         'top_padding_slider' => '30',
         'top_padding_num' => '30',
      )),
    )),
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1457103476517-1190',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 4,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 4,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 7,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'close_wrapper' => false,
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '15',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-featured_image',
      'view_class' => 'PostDataPartView',
      'part_type' => 'featured_image',
      'wrapper_id' => 'wrapper-1457102555387-1265',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457102555387-1951',
      'row' => 69,
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'preset' => 'default',
      'use_padding' => 'yes',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 12,
          'order' => 0,
          'use_padding' => 'yes',
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
          'use_padding' => 'yes',
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
  ),
));

$blog_individual->add_element("PostData", array (
  'columns' => '15',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457102691339-1834',
  'id' => 'module-1457102691339-1834',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'content',
    'row' => 6,
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
</div>',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'preset_style' => '#page .default .title h1 {
    margin: 0;
    padding: 0;
    text-align: center;
}
',
    'theme_preset' => 'true',
    'element_id' => 'post-data-object-1457102691338-1908',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'predefined_date_format' => '0',
    'static-date_posted-use-typography' => 'yes',
    'static-date_posted-font-family' => 'Raleway',
    'static-date_posted-fontstyle' => '',
    'static-date_posted-weight' => '400',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '13',
    'static-date_posted-line-height' => '1.923',
    'static-date_posted-font-color' => '#ufc1',
    'hidden_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
    ),
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'content',
      )),
    )),
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '30',
         'top_padding_num' => '30',
      )),
       'current_property' => 'use_padding',
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '30',
         'top_padding_num' => '30',
      )),
    )),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'current_preset' => 'content',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1457103476517-1190',
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '15',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1457601570204-1567',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457601570206-1235',
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'preset' => 'default',
      'use_padding' => 'yes',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
      'new_line' => true,
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 15,
          'order' => 0,
          'use_padding' => 'yes',
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 15,
          'order' => 0,
          'use_padding' => 'yes',
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457104831348-1075 upfront-module-spacer',
  'id' => 'module-1457104831348-1075',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1457104831348-1130',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1457104831347-1102',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457104976732-1066 upfront-module-spacer',
  'id' => 'module-1457104976732-1066',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1457104976732-1854',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1457104976731-1870',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 7,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$blog_individual->add_element("PostData", array (
  'columns' => '15',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457104343596-1306',
  'id' => 'module-1457104343596-1306',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-comments',
    'id_slug' => 'post-data',
    'data_type' => 'comments',
    'preset' => 'no-count-and-no-pagination',
    'row' => 7,
    'type_parts' => 
    array (
      0 => 'comment_count',
      1 => 'comments',
      2 => 'comments_pagination',
      3 => 'comment_form',
    ),
    'comment_count_hide' => 0,
    'disable_showing' => 
    array (
      0 => 'trackbacks',
    ),
    'disable' => 
    array (
      0 => 'trackbacks',
      1 => 'comments',
    ),
    'order' => 'comment_date_gmt',
    'direction' => 'DESC',
    'limit' => 50,
    'paginated' => 0,
    'post-part-comment_count' => '<div class="upostdata-part comment_count">
	{{comment_count||No comments}}
</div>',
    'post-part-comments' => '<div class="upostdata-part comments">
	{{comments}}
</div>',
    'post-part-comments_pagination' => '<div class="upostdata-part comments comments_pagination">
	{{pagination}}
</div>',
    'post-part-comment_form' => '<div class="upostdata-part comment_form">
	{{comment_form}}
</div>',
    'element_id' => 'post-data-object-1457104343595-1561',
    'top_padding_num' => '60',
    'bottom_padding_num' => '0',
    'usingNewAppearance' => true,
    'use_padding' => 'yes',
    'lock_padding' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '60',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'hidden_parts' => 
    array (
      0 => 'comment_count',
    ),
    'theme_preset' => 'true',
    'static-comments_pagination-font-family' => '',
    'static-comments_pagination-fontstyle' => '',
    'static-comments_pagination-weight' => '400',
    'static-comments_pagination-style' => 'normal',
    'static-comments_pagination-font-size' => '',
    'static-comments_pagination-line-height' => '',
    'static-comments_pagination-font-color' => '',
    'preset_style' => '#page .default.upost-data-object-comments /* comments */
.upfront-comment ol.upfront-comments {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
#page .default.upost-data-object-comments .upfront-comments li.comment {
    overflow: hidden;
}
#page .default.upost-data-object-comments .upfront-comments li.comment article {
    padding: 30px 0;
    overflow: hidden;
    border-top: 2px solid #f5f5f5;
}
#page .default.upost-data-object-comments .upfront-comments li.comment.depth-1.thread-even {
}
#page .default.upost-data-object-comments .upfront-comments li.comment.depth-1.thread-odd {
}
#page .default.upost-data-object-comments .upfront-comments li.comment.thread-even .children li.comment {
}
#page .default.upost-data-object-comments .upfront-comments li.comment.thread-odd .children li.comment {
}
#page .default.upost-data-object-comments .upfront-comments .comment .children {
    list-style-type: none;
    margin: 0 20px;
    margin: 0 0 0 45px;
    padding: 0
}
#page .default.upost-data-object-comments .upfront-comments .comment-meta {
    float: left;
    height: 60px;
    margin-right: 45px;
    width: 60px;
    display:none;
}
#page .default.upost-data-object-comments .upfront-comments .comment-content {
    float: left;
    font-size: 15px;
    max-width: 100%;
}
#page .default.upost-data-object-comments .upfront-comments .comment-content p {
    font-size: 15px;
    line-height: 1.667em;
}
#page .default.upost-data-object-comments .upfront-comments .depth-2 .comment-content {
    width:100%;
}
#page .default.upost-data-object-comments .upfront-comments .depth-3 .comment-content {
    width:100%;
}
#page .default.upost-data-object-comments .upfront-comments .comment_author, #page .default.upost-data-object-comments .upfront-comments .comment_author a {
    color: /*#ufc1*/#333333;
    font-size: 22px;
    font-style: normal;
    font-weight: 700;
    line-height: 1.7em;
}
#page .default.upost-data-object-comments .upfront-comments .comment_author a:hover {
    color: /*#ufc6*/#5ebf6b;
}
#page .default.upost-data-object-comments .upfront-comments .comment-meta-actions {
    float: right;
}
#page .default.upost-data-object-comments .upfront-comments p.comment-awaiting-moderation {
    clear: both;
    color: /*#ufc1*/#333333;
    font-size: 15px;
    font-weight: 700;
    line-height: 1em;
    margin-bottom: 0;
    padding: 0;
}
#page .default.upost-data-object-comments .upfront-comments a.comment-date {
    margin-right: 15px;
    color: /*#ufc1*/#333333;
    font-weight:600;
    font-size: 13px;
    line-height: 2em;
}
#page .default.upost-data-object-comments .upfront-comments a.comment-date:hover {
    color: /*#ufc1*/#333333;
}
#page .default.upost-data-object-comments .upfront-comments .comment-reply {
    float: right;
}
#page .default.upost-data-object-comments .upfront-comments .comment-reply-link {
    background: url("//uf-fixer.dev/wp-content/themes/uf-fixer/ui/reply-button.png") no-repeat center;
    display: inline-block;
    height: 21px;
    overflow: hidden;
    text-indent: 9999px;
    width: 21px;
}
#page .default.upost-data-object-comments .upfront-comments .edit-link {
    margin: 0;
}
#page .default.upost-data-object-comments .upfront-comments .comment-edit-link {
    color: /*#ufc1*/#333333;
    font-size:13px;
    font-weight:700;
    line-height:1em;
}
#page .default.upost-data-object-comments .upfront-comments .comment-edit-link:hover {
    color: /*#ufc1*/#333333;
    font-size:13px;
    font-weight:700;
    text-decoration:underline;
}
#page .default.upost-data-object-comments .comment-content > *:last-child {
    margin-bottom: 0;
}
#page .default.upost-data-object-comments .comment-content h1, #page .default.upost-data-object-comments .comment-content h2, #page .default.upost-data-object-comments .comment-content h3, #page .default.upost-data-object-comments .comment-content h4, #page .default.upost-data-object-comments .comment-content h5, #page .default.upost-data-object-comments .comment-content h6, #page .default.upost-data-object-comments .comment-content p, #page .default.upost-data-object-comments .comment-content address, #page .default.upost-data-object-comments .comment-content table, #page .default.upost-data-object-comments .comment-content pre, #page .default.upost-data-object-comments .comment-content cite, #page .default.upost-data-object-comments .comment-content q, #page .default.upost-data-object-comments .comment-content iframe, #page .default.upost-data-object-comments .comment-content embed {
    margin: 0 0 15px;
}
#page .default.upost-data-object-comments .comment-content > ul, #page .default.upost-data-object-comments .comment-content > ol {
    margin: 0 0 15px 20px;
}
#page .default.upost-data-object-comments .comment-content p {
    margin: 0 0 5px;
    padding: 0;
    -ms-word-break: break-word;
    word-break: break-word;
}
#page .default.upost-data-object-comments .comment-content img, #page .default.upost-data-object-comments .comment-content .wp-caption {
    display: block;
    height: auto;
    max-width: 100%;
}
#page .default.upost-data-object-comments .comment-content .wp-caption-text {
    color: #999;
    font-size: 13px;
    line-height: 1.385em;
    margin-top: 10px;
}
#page .default.upost-data-object-comments .comment-content blockquote {
    position: relative;
}
#page .default.upost-data-object-comments .comment-content blockquote:before, #page .default.upost-data-object-comments .comment-content blockquote:after {
    display: inline-block;
    font-family: "Fixer";
    height: 30px;
    position: absolute;
    speak: none;
    width: 30px;
}
#page .default.upost-data-object-comments .comment-content blockquote:before {
    content: "l";
    left: 0;
    top: 0;
}
#page .default.upost-data-object-comments .comment-content blockquote:after {
    bottom: -5px;
    content: "m";
    right: 0;
}
#page .default.upost-data-object-comments .comment-content blockquote p {
    font-size: 22px;
    line-height: 1.364em;
    padding: 0 30px;
}
#page .default.upost-data-object-comments .comment-content address {
    font-family: "Raleway", Arial, sans-serif;
    font-style: normal;
    font-weight: 400;
}
#page .default.upost-data-object-comments .comment-content pre {
    background: /*#ufc5*/#645191;
    color: /*#ufc0*/#ffffff;
    padding: 15px;
    white-space: pre-wrap;
}
#page .default.upost-data-object-comments .comment-content q {
    font-style: italic;
    font-weight: 400;
}
#page .default.upost-data-object-comments .comment-content cite {
    color: /*#ufc1*/#333333;
    font-weight: 700;
    font-style: normal;
}
#page .default.upost-data-object-comments .comment-content iframe, #page .default.upost-data-object-comments .comment-content embed {
    display: block;
    max-width: 100%;
}
#page .default.upost-data-object-comments .comment-content table {
    border-spacing: 0;
    border-collapse: collapse;
    max-width: 100%;
    width: 100%;
}
#page .default.upost-data-object-comments .comment-content table > tbody > tr > td, #page .default.upost-data-object-comments .comment-content table > tbody > tr > th, #page .default.upost-data-object-comments .comment-content table > tfoot > tr > td, #page .default.upost-data-object-comments .comment-content table > tfoot > tr > th, #page .default.upost-data-object-comments .comment-content table > thead > tr > td, #page .default.upost-data-object-comments .comment-content table > thead > tr > th {
    border-top: 1px solid #ece9e4;
    color: /*#ufc1*/#333333;
    padding: 10px;
    text-align: left;
    vertical-align: top;
}
#page .default.upost-data-object-comments .comment-content table > thead > tr > th {
    border-bottom: 2px solid /*#ufc1*/#333333;
    color: /*#ufc1*/#333333;
    vertical-align: bottom;
}
#page .default.upost-data-object-comments .comment-content table th a, #page .default.upost-data-object-comments .comment-content table td a {
    color: /*#ufc1*/#333333;
    text-decoration: underline;
}
#page .default.upost-data-object-comments .comment-content table th a:hover, #page .default.upost-data-object-comments .comment-content table td a:hover {
    color: /*#ufc6*/#5ebf6b;
}
#page .default.upost-data-object-comments .comment-content table thead > tr:first-child > td, #page .default.upost-data-object-comments .comment-content table thead > tr:first-child > th, #page .default.upost-data-object-comments .comment-content table thead > tr:first-child > td, #page .default.upost-data-object-comments .comment-content table thead > tr:first-child > th, #page .default.upost-data-object-comments .comment-content table > thead:first-child > tr:first-child > td, #page .default.upost-data-object-comments .comment-content table > thead:first-child > tr:first-child > th {
    border-top: 0;
}
#page .default.upost-data-object-comments /* respond form */
.comment-respond {
    background: #ffe262;
    margin: 30px auto 0;
    overflow: hidden;
    padding: 30px 20px;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title a {
    color: /*#ufc1*/#333333;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title small a {
    width:100%;
    display:block;
    color:/*#ufc1*/#333333;
    font-size:15px;
    font-weight:600;
}
#page .default.upost-data-object-comments .comment-respond .comment-reply-title small a:hover {
    text-decoration: underline;
}
#page .default.upost-data-object-comments .comment-respond .logged-in-as {
    margin-bottom: 20px;
    font-size: 15px;
}
#page .default.upost-data-object-comments .comment-respond .logged-in-as a {
    font-weight:600;
    color: /*#ufc1*/#333333;
}
#page .default.upost-data-object-comments .comment-respond .logged-in-as a:hover {
    color: /*#ufc1*/#333333;
    text-decoration: underline;
}
#page .default.upost-data-object-comments .comment-form .comment-form-author, #page .default.upost-data-object-comments .comment-form .comment-form-email, #page .default.upost-data-object-comments .comment-form .comment-form-comment, #page .default.upost-data-object-comments .comment-form .form-submit {
    margin: 0;
}
#page .default.upost-data-object-comments .comment-form input[type="text"], #page .default.upost-data-object-comments .comment-form input[type="email"], #page .default.upost-data-object-comments .comment-form textarea {
    border: 1px solid #f7f7f7;
    margin: 0 0 1px;
    background: #f7f7f7;
    -webkit-transition: background .2s, border-color .2s, color .2s;
    -moz-transition: background .2s, border-color .2s, color .2s;
    -o-transition: background .2s, border-color .2s, color .2s;
    transition: background .2s, border-color .2s, color .2s;
}
#page .default.upost-data-object-comments #commentform {
    overflow: hidden;
}
#page .default.upost-data-object-comments #commentform p, #page .default.upost-data-object-comments #commentform h3 {
    padding-bottom:0px;
}
#page .default.upost-data-object-comments #commentform input[type="text"]:focus, #page .default.upost-data-object-comments #commentform input[type="email"]:focus, #page .default.upost-data-object-comments #commentform textarea:focus {
    border-color: #fed41d;
    background: white;
    font-size:15px;
}
#page .default.upost-data-object-comments .comment-form .comment-form-comment textarea {
    height: 150px;
    min-height: 150px;
    padding: 10px 15px;
    width: 100%;
}
#page .default.upost-data-object-comments .comment-form .form-submit {
    float: right;
    margin-top: 20px;
}
#page .default.upost-data-object-comments .comment-form .form-submit input[type="submit"] {
    background: #fed41d;
    color: /*#ufc1*/#333333;
    padding: 16px 30px;
}
#page .default.upost-data-object-comments .comment-form .form-submit input[type="submit"]:hover {
    background: /*#ufc1*/#333333;
    color: #fed41d;
}
',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      array (
      ),
       'current_property' => 'use_padding',
       'mobile' => 
      array (
      ),
    )),
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'preset' => 'no-count-and-no-pagination-mobile',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'no-count-and-no-pagination-mobile',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'no-count-and-no-pagination',
      )),
    )),
    'static-comments-use-typography' => 'yes',
    'static-comments-font-family' => 'Raleway',
    'static-comments-fontstyle' => '',
    'static-comments-weight' => '400',
    'static-comments-style' => 'normal',
    'static-comments-font-size' => '15',
    'static-comments-line-height' => '1.667',
    'static-comments-font-color' => '#ufc1',
    'static-comment_count-use-typography' => 'yes',
    'static-comment_count-font-family' => 'Raleway',
    'static-comment_count-fontstyle' => '700 normal',
    'static-comment_count-weight' => '700',
    'static-comment_count-style' => 'normal',
    'static-comment_count-font-size' => '28',
    'static-comment_count-line-height' => '1.250',
    'static-comment_count-font-color' => '#ufc1',
    'static-comment_form-use-typography' => 'yes',
    'static-comment_form-font-family' => 'Raleway',
    'static-comment_form-fontstyle' => '700 normal',
    'static-comment_form-weight' => '700',
    'static-comment_form-style' => 'normal',
    'static-comment_form-font-size' => '28',
    'static-comment_form-line-height' => '1.250',
    'static-comment_form-font-color' => '#ufc1',
    'static-comments_pagination-use-typography' => 'yes',
    'current_preset' => 'no-count-and-no-pagination',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1457104971338-1336',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 5,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 5,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
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
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '15',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comments',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comments',
      'wrapper_id' => 'wrapper-1457104343593-1311',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457104343593-1782',
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'preset' => 'default',
      'use_padding' => 'yes',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 12,
          'order' => 0,
          'hide' => 0,
          'use_padding' => 'yes',
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
          'hide' => 0,
          'use_padding' => 'yes',
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
    1 => 
    array (
      'columns' => '15',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comment_form',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comment_form',
      'wrapper_id' => 'wrapper-1457104343594-1833',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1457104343594-1212',
      'padding_slider' => '15',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'preset' => 'default',
      'use_padding' => 'yes',
      'top_padding_num' => '15',
      'left_padding_num' => '15',
      'right_padding_num' => '15',
      'bottom_padding_num' => '15',
      'lock_padding' => '',
      'current_preset' => 'default',
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 12,
          'order' => 0,
          'hide' => 0,
          'use_padding' => 'yes',
        ),
        'mobile' => 
        array (
          'edited' => false,
          'left' => 0,
          'col' => 7,
          'order' => 0,
          'hide' => 0,
          'use_padding' => 'yes',
        ),
        'current_property' => 
        array (
          0 => 'lock_padding',
        ),
      ),
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1457104980885-1877 upfront-module-spacer',
  'id' => 'module-1457104980885-1877',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1457104980885-1748',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1457104980885-1952',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$regions->add($blog_individual);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

