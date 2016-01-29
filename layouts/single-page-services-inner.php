<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$services_inner_main = upfront_create_region(
			array (
  'name' => 'services-inner-main',
  'title' => 'Services Inner Main',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'services-inner-main',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 36,
  'background_type' => 'image',
  'background_color' => '#ufc0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 188,
       'background_position_y' => '79',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 79%',
       'background_position_x' => '50',
       'background_type' => 'color',
       'background_color' => '#ufc0',
       'bottom_bg_padding_slider' => '105',
       'bottom_bg_padding_num' => '105',
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 197,
       'background_position_y' => '79',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 79%',
       'background_position_x' => '50',
       'background_type' => 'color',
       'bottom_bg_padding_num' => '60',
       'bottom_bg_padding_slider' => '60',
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 350,
       'background_position_y' => '86',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 86%',
       'background_position_x' => '50',
       'background_type' => 'color',
       'background_color' => '#ufc1',
    )),
     'current_property' => 'bottom_bg_padding_num',
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_style' => 'fixed',
  'background_position_y' => '74',
  'background_position_x' => '51',
  'background_image' => '{{upfront:style_url}}/images/single-page-services-inner/spanner.png',
  'background_image_ratio' => 2.5,
  'background_repeat' => 'no-repeat',
  'background_position' => '51% 74%',
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

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432906098400-1697',
  'id' => 'module-1432906098400-1697',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 style="text-align: center;" rel="text-align: center;" class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Services</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432906098400-1126',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 29,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '110',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'top_padding_use' => 'yes',
         'top_padding_num' => '110',
         'use_padding' => 'yes',
         'lock_padding' => '',
         'top_padding_slider' => '110',
         'row' => 23,
      )),
       'mobile' => 
      (array)(array(
         'top_padding_use' => 'yes',
         'top_padding_num' => '50',
         'lock_padding' => '',
         'top_padding_slider' => '50',
         'use_padding' => 'yes',
         'row' => 14,
      )),
       'current_property' => 'use_padding',
    )),
    'bottom_padding_num' => '15',
    'preset' => 'u-sub-heading-m',
    'padding_slider' => '15',
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
         'preset' => 'u-sub-heading-m',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432906324812-1976',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'col' => 18,
      'order' => 0,
      'clear' => true,
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
      'top' => 0,
      'row' => 23,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 14,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432906324898-1346',
  'id' => 'module-1432906324898-1346',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h1 class="" style="text-transform: none; margin-bottom: 0px; text-align: center;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">Premium&nbsp;<br>​</span></span><span>Service &amp; Quality</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432906324898-1647',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 10,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => '',
         'row' => 72,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'row' => 35,
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'preset' => 'default',
    'padding_slider' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432906361608-1332',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'col' => 18,
      'order' => 1,
      'clear' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 23,
      'top' => 0,
      'row' => 72,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 23,
      'top' => 0,
      'row' => 35,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-75095 upfront-module-spacer',
  'id' => 'module-1449647785-75095',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-2496',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-7074',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$services_inner_main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1434097161744-1439',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1434097161746-1395',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'top_padding_use' => true,
  'top_padding_num' => 55,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
  'row' => 64,
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
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => true,
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
      'top' => 0,
      'row' => 10,
      'theme_style' => 'quality-style',
      'use_padding' => 'yes',
      'lock_padding' => '',
      'top_padding_use' => 'yes',
      'top_padding_slider' => '0',
      'top_padding_num' => '0',
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style',
      'row' => 18,
      'use_padding' => 'yes',
      'lock_padding' => '',
      'top_padding_use' => 'yes',
      'top_padding_slider' => '0',
      'top_padding_num' => '0',
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 16,
    ),
    'current_property' => 
    array (
      0 => 'top_padding_num',
    ),
  ),
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432906361678-1723',
  'id' => 'module-1432906361678-1723',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<div class="plain-text-container">
<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Bricklaying <span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">d</span></span><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;"></span></span></h3>
</div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432906361678-1039',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'theme_style' => '',
    'preset' => 'no-bottom-space',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097161772-1739',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 21,
      'row' => 6,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 21,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097161744-1439',
));

$services_inner_main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432906098404-1603',
  'id' => 'module-1432906098404-1603',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services-inner/bricklaying-240x120-5632.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services-inner/bricklaying.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services-inner/bricklaying.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1852',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'image-theme-style',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'usingNewAppearance' => true,
    'element_id' => 'image-1432906098401-1621',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 22,
      )),
    )),
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097163126-1615',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 19,
      'top' => 0,
      'row' => 22,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 19,
      'hide' => 1,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097161744-1439',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432906637306-1993',
  'id' => 'module-1432906637306-1993',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<div class="plain-text-container">
<div class="plain-text-container">
<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</span></span></p>
</div>
</div>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432906637306-1039',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 13,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 7,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097163131-1648',
  'new_line' => true,
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
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 17,
      'top' => 0,
      'row' => 7,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 17,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097161744-1439',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1434096393290-1553',
  'id' => 'module-1434096393290-1553',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: right;"><a target="_self" href="{{upfront:home_url}}/service-brick-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;"></span><span class="upfront_theme_color_1"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span>​</span></span></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1434096393289-1800',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'row' => 4,
      )),
    )),
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'top_padding_use' => 'yes',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097163133-1681',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 3,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 15,
      'top' => 0,
      'row' => 6,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 15,
      'row' => 4,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097161744-1439',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-13200 upfront-module-spacer',
  'id' => 'module-1449647785-13200',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-20085',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-94559',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 10,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$services_inner_main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1434097025315-1201',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1434097167170-1918',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'top_padding_use' => true,
  'top_padding_num' => 55,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
  'row' => 56,
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
      'order' => 3,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 5,
      'clear' => true,
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
      'top' => 0,
      'row' => 24,
      'theme_style' => 'quality-style',
      'use_padding' => 'yes',
      'lock_padding' => '',
      'top_padding_use' => 'yes',
      'top_padding_slider' => '30',
      'top_padding_num' => '30',
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style',
      'row' => 18,
      'lock_padding' => '',
      'top_padding_use' => 'yes',
      'top_padding_num' => '30',
      'top_padding_slider' => '30',
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 6,
    ),
    'current_property' => 
    array (
      0 => 'top_padding_num',
    ),
  ),
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907701032-1997',
  'id' => 'module-1432907701032-1997',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;"></span><span class="upfront_theme_color_1"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">g</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span> Fencing</span></span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432907701032-1076',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 7,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097025344-1945',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 2,
      'row' => 7,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 2,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097025315-1201',
));

$services_inner_main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907725451-1376',
  'id' => 'module-1432907725451-1376',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services-inner/fencing-240x120-2967.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services-inner/fencing.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services-inner/fencing.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1855',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'usingNewAppearance' => true,
    'element_id' => 'object-1432907725451-1964',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 19,
      )),
    )),
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'lock_padding' => '',
    'padding_slider' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097025345-1283',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 3,
      'top' => 0,
      'row' => 19,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 3,
      'hide' => 1,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097025315-1201',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907729570-1303',
  'id' => 'module-1432907729570-1303',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</span></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432907729570-1105',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 16,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 11,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'row' => 5,
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_slider' => '10',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097025346-1443',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 4,
      'top' => 0,
      'row' => 11,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 4,
      'top' => 0,
      'row' => 5,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097025315-1201',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1434097020513-1720',
  'id' => 'module-1434097020513-1720',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: left;"><a target="_self" href="{{upfront:home_url}}/service-fence-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;"></span><span class="upfront_theme_color_1"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span>​</span></span></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1434097020513-1188',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 7,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_use' => 'yes',
    'top_padding_use' => 'yes',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097025347-1798',
  'new_line' => true,
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
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 25,
      'top' => 0,
      'row' => 7,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 25,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097025315-1201',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-31704 upfront-module-spacer',
  'id' => 'module-1449647785-31704',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-84592',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-38993',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729427864-1185 upfront-module-spacer',
  'id' => 'module-1449729427864-1185',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449729427863-1159',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729427864-1925',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$services_inner_main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1434097123234-1274',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1449729388537-1890',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'version' => '1.0.0',
  'top_padding_num' => '30',
  'bottom_padding_num' => '15',
  'row' => 50,
  'top_padding_use' => 'yes',
  'top_padding_slider' => '30',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
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
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 0,
      'row' => 11,
      'theme_style' => 'quality-style',
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style',
      'row' => 18,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 6,
    ),
  ),
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907581379-1172',
  'id' => 'module-1432907581379-1172',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">Plumbing <span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">e</span></span><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;"></span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432907581379-1725',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097123259-1248',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 13,
      'row' => 6,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 13,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097123234-1274',
));

$services_inner_main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907585889-1744',
  'id' => 'module-1432907585889-1744',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services-inner/plumbing-240x120-3656.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services-inner/plumbing.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services-inner/plumbing.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1854',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'usingNewAppearance' => true,
    'element_id' => 'object-1432907585890-1956',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 16,
      )),
    )),
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'lock_padding' => '',
    'padding_slider' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097123260-1313',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => false,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 11,
      'top' => 0,
      'row' => 16,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 11,
      'hide' => 1,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097123234-1274',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907592018-1582',
  'id' => 'module-1432907592018-1582',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</span></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432907592019-1426',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 13,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 11,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097123261-1229',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => false,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 5,
      'top' => 0,
      'row' => 11,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 5,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097123234-1274',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-50173 upfront-module-spacer',
  'id' => 'module-1449647785-50173',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-10068',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-92747',
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
  'group' => 'module-group-1434097123234-1274',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1434097086405-1836',
  'id' => 'module-1434097086405-1836',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: right;"><a target="_self" href="{{upfront:home_url}}/service-plumb-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;"></span><span class="upfront_theme_color_1"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span>​</span></span></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1434097086405-1054',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 8,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'row' => 4,
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_use' => 'yes',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097123262-1184',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 3,
      'clear' => false,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 1,
      'top' => 0,
      'row' => 8,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 1,
      'row' => 4,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097123234-1274',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729421349-1640 upfront-module-spacer',
  'id' => 'module-1449729421349-1640',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449729421348-1988',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729421349-1229',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 10,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$services_inner_main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1434097070438-1555',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1449729417384-1564',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => 0,
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'row' => 43,
  'version' => '1.0.0',
  'top_padding_num' => '30',
  'bottom_padding_num' => '15',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '30',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 5,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 5,
      'clear' => true,
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
      'top' => 0,
      'theme_style' => 'quality-style',
      'row' => 17,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style',
      'row' => 18,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 6,
    ),
  ),
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432908381416-1617',
  'id' => 'module-1432908381416-1617',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;"></span></span><span class="upfront_theme_color_1"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">h</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></span>&nbsp;Windows</span></span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432908381416-1832',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 7,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097070468-1557',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 6,
      'row' => 7,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 6,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097070438-1555',
));

$services_inner_main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432908385199-1821',
  'id' => 'module-1432908385199-1821',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services-inner/windows-240x120-2392.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services-inner/windows.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services-inner/windows.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1856',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'usingNewAppearance' => true,
    'element_id' => 'object-1432908385199-1145',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 22,
      )),
    )),
    'no_padding' => '',
    'anchor' => '',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'lock_padding' => '',
    'padding_slider' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097070469-1326',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 7,
      'top' => 0,
      'row' => 22,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 7,
      'hide' => 1,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097070438-1555',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432908389389-1130',
  'id' => 'module-1432908389389-1130',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium</span></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432908389389-1643',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 12,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 10,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097070470-1359',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 8,
      'top' => 0,
      'row' => 10,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 8,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097070438-1555',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1434097055602-1735',
  'id' => 'module-1434097055602-1735',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: left;"><a target="_self" href="{{upfront:home_url}}/service-windows-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;"></span><span class="upfront_theme_color_1"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span>​</span></span></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1434097055602-1399',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 5,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'row' => 9,
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_use' => 'yes',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097070471-1550',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 9,
      'top' => 0,
      'row' => 5,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 9,
      'row' => 9,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097070438-1555',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-32966 upfront-module-spacer',
  'id' => 'module-1449647785-32966',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-36253',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-75740',
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
  'group' => 'module-group-1434097070438-1555',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729432221-1190 upfront-module-spacer',
  'id' => 'module-1449729432221-1190',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449729432221-1183',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729432221-1353',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729479114-1783 upfront-module-spacer',
  'id' => 'module-1449729479114-1783',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449729479114-1695',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729479114-1390',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$services_inner_main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1434097118251-1158',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1449729398483-1372',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'version' => '1.0.0',
  'top_padding_num' => '30',
  'bottom_padding_num' => '15',
  'row' => 47,
  'top_padding_use' => 'yes',
  'top_padding_slider' => '30',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 6,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 6,
      'clear' => true,
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
      'top' => 0,
      'row' => 25,
      'theme_style' => 'quality-style',
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 18,
      'theme_style' => 'quality-style',
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 6,
    ),
  ),
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907463652-1533',
  'id' => 'module-1432907463652-1533',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">Electrical <span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">f</span></span><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;"></span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432907463652-1107',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097124463-1746',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 10,
      'row' => 6,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 10,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097118251-1158',
));

$services_inner_main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907469177-1298',
  'id' => 'module-1432907469177-1298',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services-inner/electrical-240x120-6804.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services-inner/electrical.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services-inner/electrical.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1879',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'usingNewAppearance' => true,
    'element_id' => 'object-1432907469177-1868',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 19,
      )),
    )),
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'lock_padding' => '',
    'padding_slider' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097124467-1430',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => false,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 12,
      'top' => 0,
      'row' => 19,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 12,
      'hide' => 1,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097118251-1158',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432907475013-1911',
  'id' => 'module-1432907475013-1911',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el</span> </span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432907475014-1728',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 11,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 13,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097124471-1981',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 2,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 14,
      'top' => 0,
      'row' => 13,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 14,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097118251-1158',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-74190 upfront-module-spacer',
  'id' => 'module-1449647785-74190',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-69652',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-90633',
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
  'group' => 'module-group-1434097118251-1158',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1434097047547-1865',
  'id' => 'module-1434097047547-1865',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: right;"><a target="_self" href="{{upfront:home_url}}/service-electrical-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;"></span><span class="upfront_theme_color_1"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span>​</span></span></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1434097047547-1393',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 8,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'row' => 4,
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_use' => 'yes',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097124474-1411',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 3,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 16,
      'top' => 0,
      'row' => 8,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 16,
      'row' => 4,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097118251-1158',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729468652-1781 upfront-module-spacer',
  'id' => 'module-1449729468652-1781',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449729468652-1314',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729468652-1160',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 10,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$services_inner_main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1434097096527-1352',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1449729464896-1895',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'version' => '1.0.0',
  'top_padding_num' => '30',
  'bottom_padding_num' => '15',
  'row' => 37,
  'top_padding_use' => 'yes',
  'top_padding_slider' => '30',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
      'order' => 7,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 7,
      'clear' => true,
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
      'top' => 0,
      'row' => 15,
      'theme_style' => 'quality-style-no-border',
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style-no-border',
      'row' => 18,
      'top_padding_use' => 'yes',
      'top_padding_num' => '30',
      'lock_padding' => '',
      'top_padding_slider' => '30',
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 6,
    ),
  ),
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432908458117-1775',
  'id' => 'module-1432908458117-1775',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;"></span></span></span><span class="upfront_theme_color_1"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">i</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></span></span>&nbsp;Roofing</span></span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432908458117-1407',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 7,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 7,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097096555-1720',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 18,
      'top' => 0,
      'row' => 7,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 18,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097096527-1352',
));

$services_inner_main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432908462722-1328',
  'id' => 'module-1432908462722-1328',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-services-inner/roof-240x120-1532.jpg',
    'srcFull' => '{{upfront:style_url}}/images/single-page-services-inner/roof.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-services-inner/roof.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 120,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1858',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'usingNewAppearance' => true,
    'element_id' => 'object-1432908462722-1875',
    'row' => 6,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 17,
      )),
    )),
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '10',
    'lock_padding' => '',
    'padding_slider' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097096556-1334',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 1,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 20,
      'top' => 0,
      'row' => 17,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 20,
      'hide' => 1,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097096527-1352',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432908468172-1114',
  'id' => 'module-1432908468172-1114',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</span> </span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432908468172-1266',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 12,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 10,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097096557-1538',
  'new_line' => true,
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
      'edited' => false,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 22,
      'top' => 0,
      'row' => 10,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 22,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097096527-1352',
));

$services_inner_main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1434097091758-1039',
  'id' => 'module-1434097091758-1039',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="" style="text-align: left;"><a target="_self" href="{{upfront:home_url}}/service-roof-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;"></span><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span>​</span></span></a></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1434097091759-1489',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 5,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'preset' => 'no-bottom-space',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1434097096558-1816',
  'new_line' => true,
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
      'edited' => false,
      'col' => 7,
      'order' => 2,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 5,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 24,
      'top' => 0,
      'row' => 5,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 24,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 4,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1434097096527-1352',
));

$services_inner_main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729476659-1403 upfront-module-spacer',
  'id' => 'module-1449729476659-1403',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449729476659-1261',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729476659-1303',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$regions->add($services_inner_main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

