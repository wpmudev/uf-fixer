<?php
$layout_version = '1.0.0';

$region_14 = upfront_create_region(
			array (
  'name' => 'region-14',
  'title' => 'Region 14',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-14',
  'position' => 1,
  'allow_sidebar' => true,
  'behavior' => 'keep-ratio',
),
			array (
  'row' => 168,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'background_type' => 'slider',
       'background_position_y' => '50',
       'background_style' => 'full',
       'background_position_x' => '50',
       'background_image' => '{{upfront:style_url}}/images/archive-home/1524142385slider-b.jpg',
       'background_image_ratio' => 0.68000000000000004884981308350688777863979339599609375,
       'row' => 100,
       'hide' => 0,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'background_type' => 'slider',
       'background_color' => 'rgba(254,212,27,1)',
       'row' => 82,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 166,
    )),
  )),
  'background_type' => 'slider',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_slider_rotate' => true,
  'background_slider_rotate_time' => 5,
  'background_slider_control' => 'always',
  'background_slider_transition' => 'crossfade',
  'background_slider_images' => 
  array (
    0 => 'images/5432794551524142385slider-b.jpg',
    1 => 'images/75949739317428114slider-c.jpg',
    2 => 'images/2081610855186735176slider-a.jpg',
    3 => 'images/18286734872028980807slider-e.jpg',
  ),
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'background_image' => '{{upfront:style_url}}/images/archive-home/1524142385slider-b.jpg',
  'background_image_ratio' => 0.68000000000000004884981308350688777863979339599609375,
  'version' => '1.0.0',
  'bg_padding_type' => 'equal',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-32396 upfront-module-spacer',
  'id' => 'module-1449479270-32396',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-5328',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-3023',
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

$region_14->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422416936720-1326',
  'id' => 'module-1422416936720-1326',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/fixer-logo-111x26-8987.png',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/fixer-logo.png',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/fixer-logo.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 111,
       'height' => 26,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 111,
       'height' => 26,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 150,
       'height' => 26,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1768',
    'align' => 'left',
    'stretch' => false,
    'vstretch' => false,
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
    'when_clicked' => 'external',
    'image_link' => '{{upfront:home_url}}/',
    'link' => 
    (array)(array(
       'type' => 'homepage',
       'url' => '{{upfront:home_url}}',
       'target' => '_self',
    )),
    'element_id' => 'image-1422416936718-1443',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 15,
         'top_padding_use' => true,
         'top_padding_num' => 20,
      )),
       'tablet' => 
      (array)(array(
         'row' => 13,
         'top_padding_use' => true,
         'top_padding_num' => 30,
      )),
    )),
    'link_target' => '_self',
    'top_padding_use' => true,
    'top_padding_num' => 45,
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422432407745-1362',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 4,
      'clear' => true,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 4,
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 11,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 0,
      'row' => 10,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'row' => 14,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 7,
      'col' => 4,
      'order' => 0,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-35253 upfront-module-spacer',
  'id' => 'module-1449479270-35253',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-80939',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-10193',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 1,
      'edited' => true,
      'col' => 6,
    ),
    'mobile' => 
    array (
      'col' => 6,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 6,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-77672 upfront-module-spacer',
  'id' => 'module-1449479270-77672',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-33744',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-10064',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 1,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Unewnavigation", array (
  'columns' => '13',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422430251821-1124',
  'id' => 'module-1422430251821-1124',
  'options' => 
  array (
    'type' => 'UnewnavigationModel',
    'view_class' => 'UnewnavigationView',
    'class' => 'c24 upfront-navigation',
    'has_settings' => 1,
    'id_slug' => 'unewnavigation',
    'menu_items' => 
    array (
      0 => 
      (array)(array(
         'menu-item-db-id' => 69,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Services',
         'menu-item-url' => '#services',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '69',
         'menu-item-target' => '',
         'menu-item-position' => 1,
         'link' => 
        (array)(array(
           'type' => 'anchor',
           'url' => '#services',
           'target' => '',
        )),
      )),
      1 => 
      (array)(array(
         'menu-item-db-id' => 70,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Get a Quote',
         'menu-item-url' => '#quote',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '70',
         'menu-item-target' => '',
         'menu-item-position' => 2,
         'link' => 
        (array)(array(
           'type' => 'anchor',
           'url' => '#quote',
           'target' => '',
        )),
      )),
      2 => 
      (array)(array(
         'menu-item-db-id' => 71,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Blog',
         'menu-item-url' => '#blog',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '71',
         'menu-item-target' => '',
         'menu-item-position' => 3,
         'link' => 
        (array)(array(
           'type' => 'anchor',
           'url' => '#blog',
           'target' => '',
        )),
      )),
      3 => 
      (array)(array(
         'menu-item-db-id' => 72,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'About',
         'menu-item-url' => '#about',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '72',
         'menu-item-target' => '',
         'menu-item-position' => 4,
         'link' => 
        (array)(array(
           'type' => 'anchor',
           'url' => '#about',
           'target' => '',
        )),
      )),
      4 => 
      (array)(array(
         'menu-item-db-id' => 73,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'Contact Us',
         'menu-item-url' => '#contact',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '73',
         'menu-item-target' => '',
         'menu-item-position' => 5,
         'link' => 
        (array)(array(
           'type' => 'anchor',
           'url' => '#contact',
           'target' => '',
        )),
      )),
    ),
    'preset' => 'default',
    'allow_sub_nav' => 
    array (
      0 => 'no',
    ),
    'allow_new_pages' => 
    array (
    ),
    'menu_style' => 'horizontal',
    'menu_alignment' => 'left',
    'element_id' => 'unewnavigation-object-1422430251820-1816',
    'initialized' => false,
    'menu_id' => false,
    'menu_slug' => 'fixer-menu',
    'burger_menu' => 
    array (
    ),
    'burger_alignment' => 'left',
    'burger_over' => 'over',
    'is_floating' => 
    array (
    ),
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'burger_alignment' => 'left',
         'burger_over' => 'over',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'left',
         'is_floating' => 
        array (
        ),
         'width' => 1080,
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => '_default',
         'width' => 570,
         'burger_menu' => 'yes',
         'burger_alignment' => 'right',
         'burger_over' => 'over',
         'row' => 15,
         'menu_style' => 'horizontal',
         'menu_alignment' => 'right',
         'is_floating' => 'no',
         'top_padding_use' => true,
         'top_padding_num' => 30,
      )),
       'mobile' => 
      (array)(array(
         'burger_menu' => 'yes',
         'burger_alignment' => 'right',
         'burger_over' => 'over',
         'width' => 315,
         'row' => 9,
         'theme_style' => '_default',
         'menu_style' => 'horizontal',
         'menu_alignment' => 'right',
         'is_floating' => 'no',
      )),
    )),
    'row' => 19,
    'top_padding_use' => true,
    'top_padding_num' => 45,
    'bottom_padding_num' => '15',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422432419698-1772',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 2,
      'clear' => false,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 2,
      'clear' => false,
      'order' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 16,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'top' => 0,
      'row' => 12,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'top' => 0,
      'row' => 9,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 14,
      'order' => 0,
      'row' => 9,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-94992 upfront-module-spacer',
  'id' => 'module-1449479270-94992',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-55936',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-48894',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'order' => 4,
      'edited' => true,
      'col' => 5,
    ),
    'mobile' => 
    array (
      'col' => 5,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 5,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-90428 upfront-module-spacer',
  'id' => 'module-1449479270-90428',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-75208',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-41108',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'order' => 3,
      'edited' => true,
      'col' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 2,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1405520755970-1045',
  'id' => 'module-1405520755970-1045',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p style="text-align: right;" class="">
	<strong data-redactor-tag="strong" data-verified="redactor">One call does it all</strong>
</p>
<h1 style="text-align: right;" class=""><span class="uf_font_icon" rel="font-size: 22px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 22px; top: 0px;" data-redactor-class="uf_font_icon">a </span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span><span id="selection-marker-1" class="redactor-selection-marker" data-verified="redactor">​</span>1300 FIXER<span id="selection-marker-2" class="redactor-selection-marker" data-verified="redactor">​</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1405520755969-1764',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => '0',
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => '',
    'anchor' => '',
    'row' => 22,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 18,
      )),
       'custom-1410783666947' => 
      (array)(array(
         'row' => 18,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 35,
    'bottom_padding_num' => '15',
    'preset' => 'phone-number-m',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422432441317-1341',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'clear' => false,
      'order' => 4,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 4,
      'clear' => false,
      'order' => 3,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 11,
      'order' => 2,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'top' => 0,
      'row' => 18,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 0,
      'hide' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 5,
      'order' => 0,
      'top' => 5,
      'row' => 18,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-19127 upfront-module-spacer',
  'id' => 'module-1449479270-19127',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-30991',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-60006',
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

$region_14->add_element("Uspacer", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-49971 upfront-module-spacer',
  'id' => 'module-1449479270-49971',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-22742',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-34543',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 6,
    ),
    'mobile' => 
    array (
      'col' => 6,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-32127 upfront-module-spacer',
  'id' => 'module-1449479270-32127',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-38048',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-21202',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 4,
      'edited' => true,
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-43353 upfront-module-spacer',
  'id' => 'module-1449479270-43353',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-71714',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-86556',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'order' => 5,
      'edited' => true,
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 2,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-60036 upfront-module-spacer',
  'id' => 'module-1449479270-60036',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-98683',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-76334',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 3,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-33960 upfront-module-spacer',
  'id' => 'module-1449479270-33960',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-76973',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-24255',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'order' => 5,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("PlainTxt", array (
  'columns' => '17',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422430251668-1045',
  'id' => 'module-1422430251668-1045',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">We Build and Fix</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1422430251668-1689',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 88,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 52,
         'top_padding_use' => true,
         'top_padding_num' => 35,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 62,
         'top_padding_use' => true,
         'top_padding_num' => 30,
      )),
       'custom-1410783666947' => 
      (array)(array(
         'row' => 67,
         'theme_style' => 'u-slider-text-tablet',
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 165,
    'bottom_padding_num' => '15',
    'preset' => 'home-slideshow-text-m',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422432479895-1097',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'clear' => false,
      'order' => 5,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 5,
      'clear' => false,
      'order' => 5,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 16,
      'order' => 3,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 8,
      'top' => 0,
      'row' => 48,
      'hide' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 5,
      'top' => 0,
      'row' => 59,
      'hide' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 14,
      'order' => 0,
      'top' => 6,
      'row' => 67,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-63943 upfront-module-spacer',
  'id' => 'module-1449479270-63943',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-84413',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-3649',
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

$region_14->add_element("Uspacer", array (
  'columns' => '15',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-36226 upfront-module-spacer',
  'id' => 'module-1449479270-36226',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-7599',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-6270',
  'new_line' => true,
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
));

$region_14->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-47681 upfront-module-spacer',
  'id' => 'module-1449479270-47681',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-73738',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-77667',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 5,
      'edited' => true,
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 2,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-40975 upfront-module-spacer',
  'id' => 'module-1449479270-40975',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-8876',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-94009',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'order' => 4,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-5675 upfront-module-spacer',
  'id' => 'module-1449479270-5675',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-63530',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-55382',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 5,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412693769329-1564',
  'id' => 'module-1412693769329-1564',
  'options' => 
  array (
    'content' => 'Get a quote',
    'href' => '#quote',
    'linkTarget' => '_self',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'preset' => 'white-borders-button',
    'element_id' => 'button-object-1412693769328-1389',
    'link' => 
    (array)(array(
       'type' => 'anchor',
       'url' => '#quote',
       'target' => '_self',
    )),
    'currentpreset' => false,
    'theme_style' => '',
    'row' => 11,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 18,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 40,
    'bottom_padding_num' => '15',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445387855392-1161',
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
      'col' => 5,
      'order' => 4,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
      'row' => 18,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 5,
      'top' => 0,
      'hide' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 4,
      'col' => 4,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-99415 upfront-module-spacer',
  'id' => 'module-1449479270-99415',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-67288',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-28192',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'order' => 2,
      'edited' => true,
      'col' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 2,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-95912 upfront-module-spacer',
  'id' => 'module-1449479270-95912',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-56770',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-29262',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 4,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$region_14->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412693935237-1809',
  'id' => 'module-1412693935237-1809',
  'options' => 
  array (
    'content' => 'View Service',
    'href' => '#services',
    'linkTarget' => '_self',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'preset' => 'white-borders-button',
    'element_id' => 'object-1412693935237-1754',
    'link' => 
    (array)(array(
       'type' => 'anchor',
       'url' => '#services',
       'target' => '_self',
    )),
    'currentpreset' => false,
    'theme_style' => '_default',
    'row' => 11,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 17,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 40,
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422432586280-1756',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'clear' => true,
      'order' => 3,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 4,
      'clear' => false,
      'order' => 2,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 6,
      'order' => 5,
      'clear' => false,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
      'hide' => 1,
      'row' => 17,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'top' => 0,
      'hide' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 4,
      'order' => 0,
      'top' => 7,
    ),
  ),
));

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-18674 upfront-module-spacer',
  'id' => 'module-1449479270-18674',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-69607',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-24474',
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

$region_14->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-83828 upfront-module-spacer',
  'id' => 'module-1449479270-83828',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-69937',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-77164',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 2,
      'edited' => true,
      'col' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 1,
      'edited' => true,
    ),
  ),
));

$regions->add($region_14);

$region_13 = upfront_create_region(
			array (
  'name' => 'region-13',
  'title' => 'Region 13',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-13',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 334,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'background_position_y' => '79',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 79%',
       'background_position_x' => '50',
       'background_type' => 'color',
       'row' => 202,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'background_position_y' => '79',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '50% 79%',
       'background_position_x' => '50',
       'background_type' => 'color',
       'row' => 292,
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
    )),
  )),
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ufc1',
  'background_style' => 'fixed',
  'background_position_y' => '77',
  'background_position_x' => '51',
  'background_image' => '{{upfront:style_url}}/images/archive-home/spanner.png',
  'background_image_ratio' => 2.5,
  'background_repeat' => 'no-repeat',
  'background_position' => '51% 77%',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'version' => '1.0.0',
  'bg_padding_type' => 'equal',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$region_13->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412752367986-1614',
  'id' => 'module-1412752367986-1614',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 style="text-align: center;" class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Services</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412752367985-1171',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 31,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'services',
    'theme_style' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 30,
         'top_padding_use' => true,
         'top_padding_num' => 95,
      )),
       'tablet' => 
      (array)(array(
         'top_padding_use' => true,
         'top_padding_num' => 90,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 125,
    'bottom_padding_num' => '15',
    'preset' => 'u-sub-heading-m',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422429463425-1242',
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
      'clear' => true,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 14,
      'top' => 0,
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

$region_13->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412753049856-1341',
  'id' => 'module-1412753049856-1341',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;" class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Premium<br>
Service &amp; Quality</span>
</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412753049855-1267',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 49,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 25,
         'theme_style' => 'text-center',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => '_default',
         'row' => 75,
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'preset' => 'text-theme-style',
    'theme_style' => '',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422429454235-1180',
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
      'clear' => true,
      'order' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'top' => 0,
      'order' => 25,
      'row' => 75,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 25,
      'top' => 0,
      'order' => 25,
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

$region_13->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-78413 upfront-module-spacer',
  'id' => 'module-1449479270-78413',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-41198',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-97735',
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

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1433406298129-1171',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1444973061936-1438',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'row' => 66,
  'top_padding_use' => true,
  'top_padding_num' => 60,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
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
      'row' => 19,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style',
      'row' => 25,
      'top_padding_use' => true,
      'top_padding_num' => 20,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 36,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422428824571-1103',
  'id' => 'module-1422428824571-1103',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Bricklaying &nbsp;<span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">d</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1422428824571-1705',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 7,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 5,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406347111-1637',
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
      'order' => 20,
      'row' => 6,
      'hide' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 20,
      'row' => 5,
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
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422428830962-1500',
  'id' => 'module-1422428830962-1500',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/bricklaying-240x120-6927.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/bricklaying.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/bricklaying.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
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
    'element_id' => 'object-1422428830962-1948',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 25,
      )),
    )),
    'no_padding' => '',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406347118-1038',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
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
      'col' => 6,
      'order' => 18,
      'top' => 0,
      'row' => 25,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 18,
      'top' => 0,
      'hide' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("Uspacer", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-85922 upfront-module-spacer',
  'id' => 'module-1449479270-85922',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-93335',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-95774',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 1,
      'edited' => true,
      'col' => 6,
    ),
    'mobile' => 
    array (
      'col' => 6,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 6,
      'edited' => true,
    ),
  ),
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422428837655-1419',
  'id' => 'module-1422428837655-1419',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</span><br></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1422428837655-1901',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 18,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 10,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 5,
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406347125-1842',
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
      'order' => 16,
      'top' => 0,
      'row' => 10,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 16,
      'row' => 5,
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
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-30151 upfront-module-spacer',
  'id' => 'module-1449479270-30151',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-65073',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-55798',
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
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433403494722-1900',
  'id' => 'module-1433403494722-1900',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="{{upfront:home_url}}/service-brick-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1433403494722-1808',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 4,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 5,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 5,
         'theme_style' => 'text-center',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406347129-1420',
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
      'order' => 14,
      'top' => 0,
      'row' => 5,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 14,
      'row' => 5,
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
  'group' => 'module-group-1433406298129-1171',
));

$region_13->add_element("Uspacer", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-12157 upfront-module-spacer',
  'id' => 'module-1449479270-12157',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-50263',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-45417',
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

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1433408441587-1485',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1444973065447-1059',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'row' => 55,
  'top_padding_use' => true,
  'top_padding_num' => 60,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
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
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 33,
      'top' => 0,
      'theme_style' => 'quality-style',
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'theme_style' => 'quality-style',
      'top' => 0,
      'row' => 20,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408404419-1280',
  'id' => 'module-1433408404419-1280',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">g</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span>&nbsp; Fencing</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408404420-1411',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 7,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408454891-1805',
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
      'order' => 6,
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
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408407863-1278',
  'id' => 'module-1433408407863-1278',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/fencing-240x120-9850.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/fencing.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/fencing.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
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
    'element_id' => 'object-1433408407863-1814',
    'row' => 10,
    'anchor' => '',
    'no_padding' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 21,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408454897-1535',
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
      'row' => 21,
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
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408413341-1502',
  'id' => 'module-1433408413341-1502',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408413341-1433',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 14,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 9,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 5,
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408454903-1992',
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
      'order' => 8,
      'top' => 0,
      'row' => 9,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 22,
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
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408416917-1768',
  'id' => 'module-1433408416917-1768',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="{{upfront:home_url}}/service-fence-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408416917-1502',
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
         'row' => 4,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 5,
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408454906-1619',
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
      'order' => 9,
      'top' => 0,
      'row' => 4,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 24,
      'row' => 5,
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
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-62895 upfront-module-spacer',
  'id' => 'module-1449479270-62895',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-17591',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-91686',
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
  'group' => 'module-group-1433408441587-1485',
));

$region_13->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-78445 upfront-module-spacer',
  'id' => 'module-1449479270-78445',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-77456',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-23090',
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

$region_13->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479397500-1446 upfront-module-spacer',
  'id' => 'module-1449479397500-1446',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479397500-1073',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479397500-1673',
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

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1433406408885-1831',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1445382789785-1452',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'row' => 55,
  'version' => '1.0.0',
  'top_padding_num' => '30',
  'bottom_padding_num' => '15',
  'top_padding_use' => 'yes',
  'top_padding_slider' => '30',
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
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'theme_style' => 'quality-style',
      'row' => 18,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style',
      'row' => 20,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406278107-1825',
  'id' => 'module-1433406278107-1825',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Plumbing &nbsp;<span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">e</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406278107-1985',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 8,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 5,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406459061-1226',
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
      'order' => 12,
      'row' => 6,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 12,
      'row' => 5,
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
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406282618-1475',
  'id' => 'module-1433406282618-1475',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/plumbing-240x120-6220.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/plumbing.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/plumbing.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
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
    'element_id' => 'object-1433406282618-1440',
    'row' => 10,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 24,
      )),
    )),
    'no_padding' => '',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406459068-1769',
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
      'order' => 10,
      'top' => 0,
      'row' => 24,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 10,
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
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406287083-1659',
  'id' => 'module-1433406287083-1659',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406287083-1130',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 19,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 8,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 10,
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406459073-1893',
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
      'order' => 4,
      'top' => 0,
      'row' => 8,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 4,
      'row' => 10,
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
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406291549-1493',
  'id' => 'module-1433406291549-1493',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="{{upfront:home_url}}/service-plumb-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406291549-1805',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 4,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 7,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433406459076-1387',
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
      'order' => 1,
      'top' => 0,
      'row' => 4,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 1,
      'row' => 7,
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
  'group' => 'module-group-1433406408885-1831',
));

$region_13->add_element("Uspacer", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479390930-1492 upfront-module-spacer',
  'id' => 'module-1449479390930-1492',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479390929-1782',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479390930-1279',
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

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1433408489130-1464',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1449479371955-1534',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'row' => 34,
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
      'edited' => false,
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
      'row' => 19,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'theme_style' => 'quality-style',
      'top' => 0,
      'row' => 9,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408454739-1282',
  'id' => 'module-1433408454739-1282',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">h</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span>&nbsp; Windows</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408454740-1759',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 4,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 5,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408489178-1099',
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
      'order' => 11,
      'row' => 5,
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
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408457768-1767',
  'id' => 'module-1433408457768-1767',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/windows-240x120-6119.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/windows.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/windows.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
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
    'element_id' => 'object-1433408457768-1995',
    'row' => 10,
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 24,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408489180-1450',
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
      'order' => 13,
      'top' => 0,
      'row' => 24,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 7,
      'top' => 0,
      'hide' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408461219-1337',
  'id' => 'module-1433408461219-1337',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Claritas est etiam processus dynamicus, qui sequitur mutationem&nbsp;consuetudium</span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408461220-1464',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 19,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 8,
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408489181-1904',
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
      'order' => 15,
      'top' => 0,
      'row' => 6,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 8,
      'top' => 0,
      'row' => 8,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408465325-1983',
  'id' => 'module-1433408465325-1983',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="{{upfront:home_url}}/service-windows-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408465325-1138',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 8,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408489182-1278',
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
      'order' => 17,
      'top' => 0,
      'row' => 6,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 9,
      'row' => 6,
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
  'group' => 'module-group-1433408489130-1464',
));

$region_13->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479403072-1474 upfront-module-spacer',
  'id' => 'module-1449479403072-1474',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479403072-1803',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479403072-1910',
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

$region_13->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729078862-1417 upfront-module-spacer',
  'id' => 'module-1449729078862-1417',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449729078862-1227',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729078862-1276',
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

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1433407951043-1220',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1449729055581-1608',
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
  'row' => 40,
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
      'edited' => false,
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
      'theme_style' => 'quality-style',
      'row' => 21,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'theme_style' => 'quality-style',
      'top' => 0,
      'row' => 25,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406392023-1138',
  'id' => 'module-1433406392023-1138',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Electrical &nbsp;<span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">f</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406392023-1289',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 6,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433407951093-1384',
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
      'order' => 2,
      'row' => 6,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 11,
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
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406396052-1381',
  'id' => 'module-1433406396052-1381',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/electrical-240x120-7937.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/electrical.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/electrical.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
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
    'element_id' => 'object-1433406396052-1059',
    'row' => 10,
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 14,
      )),
    )),
    'no_padding' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433407951095-1410',
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
      'order' => 3,
      'top' => 0,
      'row' => 14,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 13,
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
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406399053-1234',
  'id' => 'module-1433406399053-1234',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation allmcorper san el </span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406399054-1803',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 14,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 8,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 8,
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'top_padding_slider' => '10',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433407951096-1824',
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
      'order' => 22,
      'top' => 0,
      'row' => 8,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 15,
      'row' => 8,
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
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433406402068-1392',
  'id' => 'module-1433406402068-1392',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: right;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="{{upfront:home_url}}/service-electrical-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433406402068-1466',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 6,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 5,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 7,
         'theme_style' => 'text-center',
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
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433407951097-1113',
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
      'order' => 24,
      'top' => 0,
      'row' => 5,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 17,
      'row' => 7,
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
  'group' => 'module-group-1433407951043-1220',
));

$region_13->add_element("Uspacer", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729074219-1495 upfront-module-spacer',
  'id' => 'module-1449729074219-1495',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449729074218-1155',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729074219-1016',
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

$region_13->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1433408599187-1298',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1449729069577-1576',
  'original_col' => 6,
  'background_color' => 'rgba(137,77,77,0)',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => '',
  'background_type' => 'color',
  'anchor' => '',
  'theme_style' => 'no-y-padding',
  'row' => 35,
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
      'order' => 7,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => false,
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
      'theme_style' => 'quality-style-no-border',
      'row' => 50,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'theme_style' => 'quality-style-no-border',
      'row' => 50,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 6,
      'col' => 6,
      'order' => 0,
    ),
  ),
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408499718-1760',
  'id' => 'module-1433408499718-1760',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 20px; top: 0px;" rel="font-size: 20px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 20px; top: 0px;">i</span><span class="redactor-invisible-space" data-verified="redactor" data-redactor-tag="span" data-redactor-class="redactor-invisible-space">​</span>&nbsp; Roofing</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408499718-1073',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 8,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-services-text',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 5,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 5,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1433408599236-1457',
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
      'row' => 5,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 19,
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
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408504017-1785',
  'id' => 'module-1433408504017-1785',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/roof-240x120-9421.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/roof.jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/roof.jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
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
    'element_id' => 'object-1433408504017-1533',
    'row' => 10,
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 23,
      )),
       'mobile' => 
      (array)(array(
         'top_padding_use' => true,
         'top_padding_num' => 25,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1449649019605-1128',
  'new_line' => true,
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
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 21,
      'top' => 0,
      'row' => 23,
      'hide' => 1,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 21,
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
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408507840-1391',
  'id' => 'module-1433408507840-1391',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	<span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </span><br>
	<span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;"></span>
</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1433408507840-1352',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 17,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 7,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 8,
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_num' => '10',
    'bottom_padding_num' => '0',
    'top_padding_slider' => '10',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1449649021853-1010',
  'new_line' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 5,
      'top' => 0,
      'row' => 7,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 5,
      'top' => 0,
      'row' => 8,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1433408507841-1392',
  'id' => 'module-1433408507841-1392',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0" style="" rel=""><a target="_self" rel="entry" href="{{upfront:home_url}}/service-roof-inner/"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="uf_font_icon" style="font-size: 24px; top: 0px;" rel="font-size: 24px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 24px; top: 0px;">j</span></span></a></span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1449649339691-1597',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 6,
         'theme_style' => 'text-center',
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
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1449649339688-1141',
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
      'order' => 17,
      'top' => 0,
      'row' => 6,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 9,
      'row' => 6,
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
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("Uspacer", array (
  'columns' => '7',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-66624 upfront-module-spacer',
  'id' => 'module-1449479270-66624',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-69710',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-30322',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 7,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 0,
      'edited' => true,
      'col' => 7,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 7,
      'edited' => true,
    ),
  ),
  'group' => 'module-group-1433408599187-1298',
));

$region_13->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449729082617-1457 upfront-module-spacer',
  'id' => 'module-1449729082617-1457',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449729082616-1637',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449729082617-1329',
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

$region_13->add_element("Uspacer", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479435636-1434 upfront-module-spacer',
  'id' => 'module-1449479435636-1434',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479435636-1567',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479435636-1076',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 8,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$region_13->add_element("Uspacer", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479423449-1295 upfront-module-spacer',
  'id' => 'module-1449479423449-1295',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479423449-1507',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479423449-1280',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 8,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$region_13->add_element("Uspacer", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479432623-1349 upfront-module-spacer',
  'id' => 'module-1449479432623-1349',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479432623-1342',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479432623-1112',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 8,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$regions->add($region_13);

$quote = upfront_create_region(
			array (
  'name' => 'quote',
  'title' => 'Quote',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'quote',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 172,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ufc2',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 278,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 305,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 345,
    )),
  )),
  'version' => '1.0.0',
)
			);

$quote->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412779180680-1829',
  'id' => 'module-1412779180680-1829',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;">Get a quote</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412779180680-1452',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'quote',
    'row' => 25,
    'theme_style' => 'u-sub-heading',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 21,
         'theme_style' => 'u-sub-heading',
         'top_padding_use' => true,
         'top_padding_num' => 50,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 100,
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1405604490158-1724',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 0,
      'row' => 14,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
    ),
  ),
));

$quote->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1405603545291-1575',
  'id' => 'module-1405603545291-1575',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 style="text-align: center;" class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1"><span id="selection-marker-1" class="redactor-selection-marker" data-verified="redactor">​</span>First Thing\'s First<span id="selection-marker-2" class="redactor-selection-marker" data-verified="redactor">​</span></span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1405603545292-1703',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 23,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 32,
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => '_default',
         'row' => 32,
         'top_padding_use' => true,
         'top_padding_num' => 20,
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1412779479175-1095',
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
      'clear' => true,
      'order' => 1,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 1,
      'clear' => true,
      'edited' => true,
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
      'row' => 31,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 7,
      'row' => 32,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 1,
    ),
  ),
));

$quote->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-16888 upfront-module-spacer',
  'id' => 'module-1449479270-16888',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-15127',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-8735',
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

$quote->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1410351484471-1157',
  'id' => 'module-1410351484471-1157',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">1. Get a quote</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410351484470-1706',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 20,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 12,
      )),
       'custom-1410783666947' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 55,
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1410351832277-1394',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 2,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 2,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 13,
      'order' => 2,
      'clear' => true,
      'edited' => true,
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
      'row' => 12,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 8,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 2,
      'top' => 9,
    ),
  ),
  'close_wrapper' => false,
));

$quote->add_element("Ucontact", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1413175385317-1417',
  'id' => 'module-1413175385317-1417',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name',
    'form_email_label' => 'Email address',
    'form_email_to' => '',
    'show_subject' => 
    array (
    ),
    'show_captcha' => 
    array (
    ),
    'form_subject_label' => 'Your subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Type your enquiry here',
    'form_button_text' => 'Get A Quote',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1413175385312-1163',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 68,
         'theme_style' => 'ucontact-quote-style-mobile',
      )),
       'tablet' => 
      (array)(array(
         'row' => 74,
         'theme_style' => 'ucontact-quote-style-mobile',
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'preset' => 'quote',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1410351832277-1394',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 9,
      'top' => 0,
      'row' => 74,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 9,
      'row' => 68,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 4,
      'top' => 0,
    ),
  ),
));

$quote->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-93344 upfront-module-spacer',
  'id' => 'module-1449479270-93344',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-37217',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-19892',
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

$quote->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1445402962485-1481',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1445402962486-1840',
  'original_col' => 6,
  'top_padding_use' => true,
  'top_padding_num' => 40,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
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
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1410351502219-1963',
  'id' => 'module-1410351502219-1963',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">2. We roll</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410351502218-1570',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'row' => 12,
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'row' => 11,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' => 
      (array)(array(
         'row' => 13,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 11,
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445402962514-1857',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
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
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 1,
      'top' => 0,
      'row' => 13,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 1,
      'row' => 11,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 8,
      'order' => 7,
      'top' => 8,
      'row' => 11,
    ),
  ),
  'group' => 'module-group-1445402962485-1481',
));

$quote->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1410350687438-1702',
  'id' => 'module-1410350687438-1702',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/fixer-van-230x100-9286.png',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/fixer-van.png',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/fixer-van.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => -27.5,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 100,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1769',
    'align' => 'center',
    'stretch' => false,
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
    'element_id' => 'image-1410350687421-1049',
    'row' => 26,
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403652481-1957',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
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
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 2,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'order' => 2,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 7,
      'order' => 5,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1445402962485-1481',
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1410352199210-1157',
  'id' => 'module-1410352199210-1157',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
Lorr sit amet, consectetur adipiscing elit. Phasellus consequat, tortor id malesuada faucibus, elit nisl luctus massa, vel consectetur</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410352199209-1378',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 31,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 22,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 26,
         'theme_style' => 'text-center',
      )),
       'custom-1410783666947' => 
      (array)(array(
         'row' => 24,
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403652485-1537',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
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
      'col' => 6,
      'row' => 22,
      'top' => 0,
      'order' => 3,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 26,
      'top' => 0,
      'order' => 3,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 7,
      'order' => 8,
      'top' => 0,
      'row' => 24,
    ),
  ),
  'group' => 'module-group-1445402962485-1481',
));

$quote->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-47965 upfront-module-spacer',
  'id' => 'module-1449479270-47965',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-58723',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-97338',
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

$quote->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1445402965567-1620',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1410351850120-1954',
  'original_col' => 6,
  'top_padding_use' => true,
  'top_padding_num' => 35,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 6,
      'order' => 4,
      'clear' => false,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 4,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 13,
      'order' => 6,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
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
    ),
  ),
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1410351535850-1535',
  'id' => 'module-1410351535850-1535',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">3. We fix&nbsp;it</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410351535848-1723',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'row' => 5,
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'row' => 11,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' => 
      (array)(array(
         'row' => 12,
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403652489-1424',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
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
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'top' => 0,
      'row' => 12,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 4,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 8,
      'order' => 3,
      'top' => 6,
      'row' => 11,
    ),
  ),
  'group' => 'module-group-1445402965567-1620',
));

$quote->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1410351290321-1363',
  'id' => 'module-1410351290321-1363',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/fixer-cloud-230x100-3674.png',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/fixer-cloud.png',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/fixer-cloud.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => -27.5,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 100,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1770',
    'align' => 'center',
    'stretch' => false,
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
    'element_id' => 'image-1410351290307-1196',
    'row' => 26,
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403652494-1598',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
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
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 1,
      'top' => 0,
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
      'left' => 5,
      'col' => 7,
      'order' => 6,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1445402965567-1620',
));

$quote->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1410352455168-1374',
  'id' => 'module-1410352455168-1374',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1410352455166-1289',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 27,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 20,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'row' => 46,
         'theme_style' => 'text-center',
      )),
       'custom-1410783666947' => 
      (array)(array(
         'row' => 23,
         'theme_style' => 'u-paragraph-mobile',
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403652498-1793',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
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
      'col' => 6,
      'row' => 20,
      'order' => 2,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'row' => 46,
      'order' => 6,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 5,
      'col' => 7,
      'order' => 9,
      'top' => 0,
      'row' => 23,
    ),
  ),
  'group' => 'module-group-1445402965567-1620',
));

$quote->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-42695 upfront-module-spacer',
  'id' => 'module-1449479270-42695',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-64058',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-45721',
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

$regions->add($quote);

$blog_header = upfront_create_region(
			array (
  'name' => 'blog-header',
  'title' => 'Blog Header',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'blog-header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 126,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'background_image' => '{{upfront:style_url}}/images/archive-home/background-leaves.jpg',
  'background_image_ratio' => 0.429999999999999993338661852249060757458209991455078125,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 102,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 85,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'version' => '1.0.0',
)
			);

$blog_header->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-13758 upfront-module-spacer',
  'id' => 'module-1449479270-13758',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-59820',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-68313',
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

$blog_header->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1414410069759-1295',
  'id' => 'module-1414410069759-1295',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Blog</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1414410069741-1460',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'blog',
    'row' => 22,
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
         'top_padding_use' => true,
         'top_padding_num' => 80,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
    )),
    'theme_style' => '',
    'top_padding_use' => true,
    'top_padding_num' => 80,
    'bottom_padding_num' => '15',
    'preset' => 'u-sub-heading-m',
    'use_padding' => true,
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1414410356362-1676',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
      'top' => 10,
    ),
  ),
));

$blog_header->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-77832 upfront-module-spacer',
  'id' => 'module-1449479270-77832',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-15619',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-89588',
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

$blog_header->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-71167 upfront-module-spacer',
  'id' => 'module-1449479270-71167',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-11393',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-19739',
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

$blog_header->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1431007733914-1949',
  'id' => 'module-1431007733914-1949',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Latest<br>News &amp;<br>Tips</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1431007733914-1652',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 70,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'theme_style' => 'u-heading-mobile',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 47,
      )),
       'mobile' => 
      (array)(array(
         'row' => 41,
         'theme_style' => 'text-center',
      )),
    )),
    'theme_style' => '',
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'preset' => 'text-theme-style',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1431007762684-1915',
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
      'order' => 0,
      'top' => 0,
      'row' => 47,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 41,
      'top' => 0,
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

$blog_header->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-87759 upfront-module-spacer',
  'id' => 'module-1449479270-87759',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-3079',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-5661',
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

$regions->add($blog_header);

$blog_items = upfront_create_region(
			array (
  'name' => 'blog-items',
  'title' => 'Blog Items',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'blog-items',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 60,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'background_type' => 'color',
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'version' => '1.0.0',
  'bg_padding_type' => 'equal',
  'top_bg_padding_slider' => '0',
  'top_bg_padding_num' => '0',
  'bottom_bg_padding_slider' => '0',
  'bottom_bg_padding_num' => '0',
  'bg_padding_slider' => '0',
  'bg_padding_num' => '0',
)
			);

$blog_items->add_element("Posts", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1419155622479-1636',
  'id' => 'module-1419155622479-1636',
  'options' => 
  array (
    'type' => 'PostsModel',
    'view_class' => 'PostsView',
    'has_settings' => 1,
    'class' => 'c24 uposts-object',
    'id_slug' => 'posts',
    'display_type' => 'list',
    'list_type' => 'generic',
    'offset' => 1,
    'taxonomy' => '',
    'term' => '',
    'content' => 'excerpt',
    'limit' => '3',
    'pagination' => '',
    'sticky' => '',
    'posts_list' => '',
    'post_parts' => 
    array (
      0 => 'featured_image',
      1 => 'date_posted',
      2 => 'title',
      3 => 'content',
      4 => 'read_more',
    ),
    'enabled_post_parts' => 
    array (
      0 => 'date_posted',
      1 => 'featured_image',
      2 => 'title',
      3 => 'content',
      4 => 'read_more',
    ),
    'default_parts' => 
    array (
      0 => 'date_posted',
      1 => 'author',
      2 => 'gravatar',
      3 => 'comment_count',
      4 => 'featured_image',
      5 => 'title',
      6 => 'content',
      7 => 'read_more',
      8 => 'tags',
      9 => 'categories',
    ),
    'date_posted_format' => 'd M',
    'categories_limit' => 3,
    'tags_limit' => 3,
    'comment_count_hide' => 0,
    'content_length' => '20',
    'resize_featured' => '1',
    'gravatar_size' => 200,
    'post-part-date_posted' => '<div class="uposts-part date_posted">
    <span class="day">{{date_1}}</span><span class="month">{{date_2}}</span>
</div>',
    'post-part-author' => '<div class="uposts-part author">
	By <a href="{{url}}">{{name}}</a></div>',
    'post-part-gravatar' => '<div class="uposts-part gravatar">
	{{gravatar}}
</div>',
    'post-part-comment_count' => '<div class="uposts-part comment_count">
	{{comment_count}}
</div>',
    'post-part-featured_image' => '<div class="uposts-part thumbnail" data-resize="{{resize}}">
    <a href="{{permalink}}">{{thumbnail}}</a>
</div>',
    'post-part-title' => '<div class="uposts-part title">
	<h3><a href="{{permalink}}" title="{{title}}">{{title}}</a></h3>
</div>',
    'post-part-content' => '<div class="uposts-part content {{content_type}}">
	{{content}}
</div>',
    'post-part-read_more' => '<div class="uposts-part read_more">
	<a class=\'uf_font_icon\' href="{{permalink}}">j</a></div>',
    'post-part-tags' => '<div class="uposts-part post_tags">
	{{tags}}
</div>',
    'post-part-categories' => '<div class="uposts-part post_categories">
	{{categories}}
</div>',
    'post-part-meta' => '<div class="uposts-part meta">
	
</div>
',
    'element_id' => 'posts-object-1419155622476-1899',
    'anchor' => '',
    'theme_style' => 'u-posts-home',
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'theme_style' => 'u-posts-home-big-tablet',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'u-posts-home-tablet',
         'top_padding_use' => true,
         'top_padding_num' => 40,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'u-posts-home-tablet',
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1419155636060-1682',
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
      'col' => 18,
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

$regions->add($blog_items);

$subscribe = upfront_create_region(
			array (
  'name' => 'subscribe',
  'title' => 'Subscribe',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'subscribe',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 31,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ffffff',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 50,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 64,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 47,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'version' => '1.0.0',
)
			);

$subscribe->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-79788 upfront-module-spacer',
  'id' => 'module-1449479270-79788',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-83677',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-75496',
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

$subscribe->add_element("PlainTxt", array (
  'columns' => '13',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1406194594842-1402',
  'id' => 'module-1406194594842-1402',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="">Interested in receiving more tips?</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1406194594841-1906',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 19,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'top_padding_use' => true,
         'top_padding_num' => 45,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 65,
    'bottom_padding_num' => '15',
    'preset' => 'text-theme-style',
    'theme_style' => '',
    'use_padding' => true,
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1406194594842-1402',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 16,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 2,
      'col' => 14,
      'order' => 0,
    ),
  ),
));

$subscribe->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412847584331-1365',
  'id' => 'module-1412847584331-1365',
  'options' => 
  array (
    'content' => 'Subscribe',
    'href' => '#ltb-subscribe15',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'preset' => 'black-borders-button',
    'element_id' => 'button-object-1412847584330-1018',
    'link' => 
    (array)(array(
       'type' => 'lightbox',
       'url' => '#ltb-subscribe15',
       'target' => false,
    )),
    'currentpreset' => false,
    'theme_style' => '',
    'row' => 14,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 19,
         'top_padding_use' => true,
         'top_padding_num' => 25,
      )),
       'tablet' => 
      (array)(array(
         'row' => 18,
         'top_padding_use' => true,
         'top_padding_num' => 25,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 55,
    'bottom_padding_num' => '15',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1412849840312-1624',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 6,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 1,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 9,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'top' => 0,
      'row' => 16,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 17,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 5,
      'col' => 4,
      'order' => 0,
      'top' => 3,
    ),
  ),
));

$subscribe->add_element("Button", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412845951334-1388',
  'id' => 'module-1412845951334-1388',
  'options' => 
  array (
    'content' => 'View blog',
    'href' => '{{upfront:home_url}}/blog/',
    'linkTarget' => '_self',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'preset' => 'black-borders-button',
    'element_id' => 'button-object-1412845951334-1229',
    'link' => 
    (array)(array(
       'type' => 'entry',
       'url' => '{{upfront:home_url}}/blog/',
       'target' => '_self',
    )),
    'currentpreset' => false,
    'theme_style' => '_default',
    'row' => 14,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 16,
      )),
       'tablet' => 
      (array)(array(
         'row' => 18,
         'top_padding_use' => true,
         'top_padding_num' => 25,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 55,
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1412849849778-1976',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 6,
      'order' => 2,
      'clear' => false,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 2,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 4,
      'order' => 2,
      'clear' => false,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 1,
      'top' => 0,
      'row' => 16,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'row' => 16,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'order' => 1,
      'top' => 3,
    ),
  ),
));

$subscribe->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-38512 upfront-module-spacer',
  'id' => 'module-1449479270-38512',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-81015',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-68841',
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

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'lightbox.php');
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-subscribe15.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'lightboxes' . DIRECTORY_SEPARATOR . 'ltb-subscribe15.php');
$regions->add($subscribe);

$about = upfront_create_region(
			array (
  'name' => 'about',
  'title' => 'About',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'about',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 341,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ufc4',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 345,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 251,
       'background_type' => 'color',
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 352,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'version' => '1.0.0',
)
			);

$about->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412782658100-1763',
  'id' => 'module-1412782658100-1763',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;">About</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412782658098-1018',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 28,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'about',
    'theme_style' => '',
    'top_padding_use' => true,
    'top_padding_num' => 105,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'top_padding_use' => true,
         'top_padding_num' => 70,
      )),
    )),
    'bottom_padding_num' => '15',
    'preset' => 'u-sub-heading-m',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1412782859322-1825',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'clear' => true,
      'order' => 0,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 0,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
      'top' => 4,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-2570 upfront-module-spacer',
  'id' => 'module-1449479270-2570',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-26737',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-16806',
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

$about->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422420112604-1996',
  'id' => 'module-1422420112604-1996',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">Meet Mr Fixer</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1422420112603-1296',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 16,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => 'header-mobile-grey',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 34,
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1422422687242-1922',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'clear' => true,
      'order' => 1,
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
      'col' => 18,
      'order' => 1,
      'clear' => true,
      'edited' => true,
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
      'row' => 34,
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
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 4,
      'top' => 0,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-61391 upfront-module-spacer',
  'id' => 'module-1449479270-61391',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-94051',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-58502',
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

$about->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-76010 upfront-module-spacer',
  'id' => 'module-1449479270-76010',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-83639',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-71261',
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

$about->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1406196281138-1720',
  'id' => 'module-1406196281138-1720',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	Duis dolore te feugait nulla facilisi. Nam liber tempor cum Duis autem vel eum iriure dolor in hendrerit in vulputate velit Ut wisi enim ad minim veniam, quis nostrud esse molestie consequat</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1406196281137-1335',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 51,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 19,
         'theme_style' => 'text-center',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 39,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'preset' => 'default',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1406196281138-1720',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'clear' => true,
      'order' => 2,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
      'order' => 2,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 8,
      'order' => 2,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'row' => 19,
      'order' => 8,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 3,
      'top' => 0,
      'row' => 39,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 7,
      'order' => 1,
      'top' => 5,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1406196781398-1992',
  'id' => 'module-1406196781398-1992',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1406196781398-1916',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 52,
    'is_edited' => true,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 53,
         'theme_style' => 'text-center',
         'top_padding_use' => true,
         'top_padding_num' => 30,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 38,
      )),
    )),
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403655374-1473',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
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
      'col' => 6,
      'row' => 50,
      'top' => 0,
      'order' => 9,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
      'row' => 38,
      'order' => 9,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 2,
      'col' => 7,
      'order' => 10,
      'top' => 5,
    ),
  ),
));

$about->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1445403650095-1389',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1445403662826-1212',
  'original_col' => 6,
  'version' => '1.0.0',
  'top_padding_num' => '15',
  'bottom_padding_num' => '15',
  'row' => 30,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
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
      'col' => 6,
      'order' => 0,
      'top' => 0,
      'row' => 44,
      'top_padding_use' => true,
      'top_padding_num' => 15,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1406196815834-1847',
  'id' => 'module-1406196815834-1847',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">consectuer eudismod tincidunt ul laorent dolore magna aliquam erat valuo.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1406196815834-1028',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
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
         'theme_style' => 'text-center',
         'row' => 16,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 17,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403652504-1923',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
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
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'top' => 0,
      'order' => 0,
      'row' => 16,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 17,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 7,
      'order' => 3,
      'top' => 0,
    ),
  ),
  'group' => 'module-group-1445403650095-1389',
));

$about->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412780752234-1058',
  'id' => 'module-1412780752234-1058',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class=""><strong data-redactor-tag="strong">James Woodlock<br>​</strong><span>Owner</span></p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1412780752235-1133',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 16,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'row' => 15,
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 18,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 24,
      )),
    )),
    'top_padding_num' => '0',
    'bottom_padding_num' => '0',
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '0',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445403652508-1319',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 1,
      'clear' => false,
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
      'edited' => true,
      'left' => 0,
      'col' => 6,
      'order' => 0,
      'top' => 0,
      'row' => 18,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 24,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 1,
      'col' => 7,
      'order' => 6,
      'top' => 0,
      'row' => 15,
    ),
  ),
  'group' => 'module-group-1445403650095-1389',
));

$about->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-86403 upfront-module-spacer',
  'id' => 'module-1449479270-86403',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-3379',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-49093',
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

$about->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1444283579974-1484',
  'id' => 'module-1444283579974-1484',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/fixer-mrfixer-image-1050x569-7934 (1)-1050x569-8697.jpg',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/fixer-mrfixer-image-1050x569-7934 (1).jpg',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/fixer-mrfixer-image-1050x569-7934 (1).jpg',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => false,
    'image_caption' => 'My awesome image caption',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 1050,
       'height' => 569,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 1050,
       'height' => 569,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => 1050,
       'height' => 569,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '36',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => false,
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
    'element_id' => 'image-1444283579971-1972',
    'row' => 41,
    'top_padding_use' => true,
    'top_padding_num' => 20,
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1444283892140-1178',
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
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 6,
      'top' => 0,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-88483 upfront-module-spacer',
  'id' => 'module-1449479270-88483',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-8041',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-20260',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 8,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-27474 upfront-module-spacer',
  'id' => 'module-1449479270-27474',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-86337',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-56068',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'order' => 6,
      'edited' => true,
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 2,
      'edited' => true,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1419534285539-1212',
  'id' => 'module-1419534285539-1212',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="" style="text-align: center;font-size: 18px;font-weight: bold;font-family: tahoma;">
	_____</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1419534285538-1065',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 7,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => '',
    'bg_color' => '',
    'anchor' => '',
    'theme_style' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 5,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 25,
    'bottom_padding_num' => '15',
    'preset' => 'big-dash-m',
    'use_padding' => true,
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1419534513921-1553',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 8,
      'clear' => false,
      'order' => 6,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'clear' => true,
      'order' => 9,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 13,
      'order' => 6,
      'clear' => true,
      'edited' => true,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 8,
      'order' => 3,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 7,
      'top' => 0,
      'row' => 5,
      'hide' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 8,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-16210 upfront-module-spacer',
  'id' => 'module-1449479270-16210',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-74599',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-8020',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 8,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-72259 upfront-module-spacer',
  'id' => 'module-1449479270-72259',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-67583',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-66753',
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

$about->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-21525 upfront-module-spacer',
  'id' => 'module-1449479270-21525',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-44839',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-57638',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 6,
      'edited' => true,
      'col' => 2,
    ),
    'mobile' => 
    array (
      'col' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 2,
      'edited' => true,
    ),
  ),
));

$about->add_element("PlainTxt", array (
  'columns' => '20',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1445390047209-1944',
  'id' => 'module-1445390047209-1944',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<blockquote class="">Quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</blockquote>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1445390047208-1934',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 15,
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
         'theme_style' => 'text-center',
         'top_padding_use' => true,
         'top_padding_num' => 55,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 35,
    'bottom_padding_num' => '15',
    'preset' => 'text-theme-style',
    'theme_style' => '',
    'use_padding' => true,
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445390669308-1030',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'order' => 7,
      'clear' => true,
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
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 1,
      'hide' => 1,
      'top' => 0,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-37044 upfront-module-spacer',
  'id' => 'module-1449479270-37044',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-27192',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-95196',
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

$about->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-20721 upfront-module-spacer',
  'id' => 'module-1449479270-20721',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-2689',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-38767',
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

$about->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1419533895354-1818',
  'id' => 'module-1419533895354-1818',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h5 class="">Bob Woody</h5>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1419533895354-1909',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
         'top_padding_use' => true,
         'top_padding_num' => 35,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 30,
    'bottom_padding_num' => '15',
    'preset' => 'text-theme-style',
    'theme_style' => '',
    'use_padding' => true,
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1419534285175-1008',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 12,
      'clear' => true,
      'order' => 8,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'clear' => true,
      'order' => 8,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 15,
      'order' => 8,
      'clear' => true,
      'edited' => true,
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
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 8,
      'hide' => 1,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 3,
      'col' => 12,
      'order' => 9,
    ),
  ),
));

$about->add_element("Uspacer", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-1737 upfront-module-spacer',
  'id' => 'module-1449479270-1737',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-70530',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-18555',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 11,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$regions->add($about);

$contact_us = upfront_create_region(
			array (
  'name' => 'contact-us',
  'title' => 'Contact Us',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'contact-us',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 69,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ufc5',
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
       'background_type' => 'color',
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'version' => '1.0.0',
)
			);

$contact_us->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1414410356937-1690',
  'id' => 'module-1414410356937-1690',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Contact&nbsp;us</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1414410356935-1820',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => 'contact',
    'row' => 29,
    'theme_style' => '',
    'top_padding_use' => true,
    'top_padding_num' => 105,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'top_padding_use' => true,
         'top_padding_num' => 75,
      )),
    )),
    'bottom_padding_num' => '15',
    'preset' => 'u-sub-heading-m',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1414410437674-1593',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 18,
      'order' => 0,
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
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
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

$contact_us->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-5165 upfront-module-spacer',
  'id' => 'module-1449479270-5165',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-16100',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-19029',
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

$contact_us->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1444281314203-1750',
  'id' => 'module-1444281314203-1750',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Ready to talk to our experts?</span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1444281314202-1355',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 60,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => 'slider-txt-mobile',
         'row' => 44,
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 20,
    'bottom_padding_num' => '15',
    'preset' => 'text-theme-style',
    'theme_style' => '',
    'use_padding' => true,
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1444281357339-1595',
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
      'edited' => true,
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
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 44,
    ),
  ),
));

$contact_us->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-7544 upfront-module-spacer',
  'id' => 'module-1449479270-7544',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-64193',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-94040',
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

$regions->add($contact_us);

$contact = upfront_create_region(
			array (
  'name' => 'contact',
  'title' => 'Contact',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'contact',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 110,
  'background_type' => 'image',
  'nav_region' => '',
  'background_color' => '#ufc5',
  'background_style' => 'fixed',
  'background_position_y' => '100',
  'background_position_x' => '100',
  'background_image' => '{{upfront:style_url}}/images/archive-home/dome.png',
  'background_image_ratio' => 1.0500000000000000444089209850062616169452667236328125,
  'background_repeat' => 'no-repeat',
  'background_position' => '100% 100%',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'background_position_y' => '200',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '-5000% 200%',
       'background_position_x' => '-5000',
       'background_type' => 'image',
       'row' => 105,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'background_position_y' => '-5000',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '-5000% -5000%',
       'background_position_x' => '-5000',
       'background_type' => 'image',
       'row' => 93,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 107,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'version' => '1.0.0',
)
			);

$contact->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-14586 upfront-module-spacer',
  'id' => 'module-1449479270-14586',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-83454',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-80444',
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

$contact->add_element("PlainTxt", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412850227558-1156',
  'id' => 'module-1412850227558-1156',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 style="text-align: start;" class=""><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0">Get in touch:</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412850227556-1966',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'row' => 15,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'theme_style' => 'u-sub-heading-mobile',
         'row' => 13,
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => '_default',
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 70,
    'bottom_padding_num' => '15',
    'preset' => 'text-theme-style',
    'theme_style' => '',
    'use_padding' => true,
    'lock_padding' => '',
    'padding_slider' => false,
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1413382904694-1241',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 5,
      'order' => 0,
      'clear' => true,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 14,
      'order' => 0,
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
      'hide' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 5,
      'order' => 0,
      'top' => 0,
      'row' => 13,
      'hide' => 1,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 10,
      'order' => 0,
    ),
  ),
));

$contact->add_element("Uspacer", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-88185 upfront-module-spacer',
  'id' => 'module-1449479270-88185',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-90474',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-68927',
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
));

$contact->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-55768 upfront-module-spacer',
  'id' => 'module-1449479270-55768',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-57227',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-84138',
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

$contact->add_element("Uspacer", array (
  'columns' => '2',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-83649 upfront-module-spacer',
  'id' => 'module-1449479270-83649',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-90191',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-92441',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 2,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 0,
      'edited' => true,
      'col' => 2,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 2,
      'edited' => true,
    ),
  ),
));

$contact->add_element("Ucontact", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1406205101532-1649',
  'id' => 'module-1406205101532-1649',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name ',
    'form_email_label' => 'Email address',
    'form_email_to' => '',
    'show_subject' => 
    array (
    ),
    'show_captcha' => 
    array (
    ),
    'form_subject_label' => 'Your subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Type your enquiry here',
    'form_button_text' => 'SEND',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1406205101531-1670',
    'theme_style' => '',
    'anchor' => '',
    'row' => 74,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'ucontact-new-style-mobile',
         'top_padding_use' => true,
         'top_padding_num' => 60,
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'ucontact-new-style-mobile',
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'preset' => 'alt',
    'use_padding' => '',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1413382910819-1693',
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
      'col' => 14,
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
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 4,
      'col' => 10,
      'order' => 0,
    ),
  ),
));

$contact->add_element("Uspacer", array (
  'columns' => '11',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449479270-81960 upfront-module-spacer',
  'id' => 'module-1449479270-81960',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1449479270-52424',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449479270-56397',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 11,
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$regions->add($contact);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

