<?php
/* START_REGION_OUTPUT */
$region_bcdef3 = upfront_create_region(
			array (
  'name' => 'header',
  'title' => 'Header',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 'header',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 24,
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => 'rgba(255,255,255,0)',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 2,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 11,
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

$region_bcdef3->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-74945 upfront-module-spacer',
  'id' => 'module-1449647785-74945',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-71011',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-61287',
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

$region_bcdef3->add_element("Uimage", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1422416936720-1326',
  'id' => 'module-1422416936720-1326',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/global-regions/header/fixer-logo-111x26-8987.png',
    'srcFull' => '{{upfront:style_url}}/images/global-regions/header/fixer-logo.png',
    'srcOriginal' => '{{upfront:style_url}}/images/global-regions/header/fixer-logo.png',
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
    'color' => '#ufc0',
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
    'usingNewAppearance' => true,
    'element_id' => 'image-1422416936718-1443',
    'row' => 11,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 15,
         'top_padding_use' => true,
         'top_padding_num' => 25,
      )),
       'tablet' => 
      (array)(array(
         'row' => 13,
         'top_padding_use' => true,
         'top_padding_num' => 20,
      )),
    )),
    'link_target' => '_self',
    'no_padding' => '',
    'anchor' => '',
    'top_padding_use' => true,
    'top_padding_num' => 50,
    'bottom_padding_num' => '15',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => 0,
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
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
      'row' => 12,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'row' => 13,
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

$region_bcdef3->add_element("Uspacer", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-82992 upfront-module-spacer',
  'id' => 'module-1449647785-82992',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-93897',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-77786',
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

$region_bcdef3->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-5920 upfront-module-spacer',
  'id' => 'module-1449647785-5920',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-42224',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-34399',
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

$region_bcdef3->add_element("Unewnavigation", array (
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
         'menu-item-db-id' => 2593,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'SERVICES',
         'menu-item-url' => '{{upfront:home_url}}/services-inner/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '2593',
         'menu-item-target' => '',
         'menu-item-position' => 1,
         'link' => 
        (array)(array(
           'type' => 'entry',
           'url' => '{{upfront:home_url}}/services-inner/',
           'target' => '',
        )),
      )),
      1 => 
      (array)(array(
         'menu-item-db-id' => 2594,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'BLOG',
         'menu-item-url' => '{{upfront:home_url}}/blog/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '2594',
         'menu-item-target' => '',
         'menu-item-position' => 2,
         'link' => 
        (array)(array(
           'type' => 'entry',
           'url' => '{{upfront:home_url}}/blog/',
           'target' => '',
        )),
      )),
      2 => 
      (array)(array(
         'menu-item-db-id' => 2595,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'GET A QUOTE',
         'menu-item-url' => '{{upfront:home_url}}/get-quote-inner/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '2595',
         'menu-item-target' => '',
         'menu-item-position' => 3,
         'link' => 
        (array)(array(
           'type' => 'entry',
           'url' => '{{upfront:home_url}}/get-quote-inner/',
           'target' => '',
        )),
      )),
      3 => 
      (array)(array(
         'menu-item-db-id' => 2596,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'ABOUT',
         'menu-item-url' => '{{upfront:home_url}}/about-inner/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '2596',
         'menu-item-target' => '',
         'menu-item-position' => 4,
         'link' => 
        (array)(array(
           'type' => 'entry',
           'url' => '{{upfront:home_url}}/about-inner/',
           'target' => '',
        )),
      )),
      4 => 
      (array)(array(
         'menu-item-db-id' => 2597,
         'menu-item-parent-id' => '0',
         'menu-item-type' => 'custom',
         'menu-item-title' => 'CONTACT US',
         'menu-item-url' => '{{upfront:home_url}}/contact-us-inner/',
         'menu-item-object' => 'custom',
         'menu-item-object-id' => '2597',
         'menu-item-target' => '',
         'menu-item-position' => 5,
         'link' => 
        (array)(array(
           'type' => 'entry',
           'url' => '{{upfront:home_url}}/contact-us-inner/',
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
    'usingNewAppearance' => true,
    'menu_style' => 'horizontal',
    'menu_alignment' => 'left',
    'element_id' => 'unewnavigation-object-1422430251820-1816',
    'initialized' => false,
    'menu_id' => false,
    'menu_slug' => 'fixer-inner-menu',
    'burger_menu' => 
    array (
    ),
    'burger_alignment' => 'left',
    'burger_over' => 'over',
    'is_floating' => 
    array (
    ),
    'anchor' => '',
    'theme_style' => '',
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
         'burger_alignment' => 'right',
         'burger_over' => 'over',
         'row' => 12,
         'menu_style' => 'triggered',
         'menu_alignment' => 'right',
         'is_floating' => 'no',
         'top_padding_use' => true,
         'top_padding_num' => 20,
         'use_padding' => 'yes',
      )),
       'mobile' => 
      (array)(array(
         'burger_alignment' => 'right',
         'burger_over' => 'over',
         'width' => 315,
         'row' => 15,
         'theme_style' => '_default',
         'menu_style' => 'triggered',
         'menu_alignment' => 'right',
         'is_floating' => 'no',
         'top_padding_use' => true,
         'top_padding_num' => 20,
      )),
       'current_property' => 'use_padding',
    )),
    'row' => 19,
    'top_padding_use' => true,
    'top_padding_num' => 50,
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
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
      'col' => 2,
      'top' => 0,
      'row' => 11,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 2,
      'top' => 0,
      'row' => 14,
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

$region_bcdef3->add_element("PlainTxt", array (
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
    'usingNewAppearance' => true,
    'content' => '<p style="text-align: right;" class="">
	<strong data-redactor-tag="strong" data-verified="redactor">One call does it all</strong>
</p>
<h1 style="text-align: right;" class=""><span class="uf_font_icon" style="font-size: 27px; top: 0px;" rel="font-size: 27px; top: 0px;" data-verified="redactor" data-redactor-tag="span" data-redactor-style="font-size: 27px; top: 0px;">a </span>1300 FIXER</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1405520755969-1764',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => '0',
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'theme_style' => 'phone-number',
    'anchor' => '',
    'row' => 18,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 14,
      )),
       'custom-1410783666947' => 
      (array)(array(
         'row' => 13,
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 35,
    'bottom_padding_num' => '15',
    'preset' => 'default',
    'padding_slider' => '15',
    'use_padding' => 'yes',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432910630350-1984',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 4,
      'order' => 2,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 4,
      'order' => 2,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 11,
      'order' => 0,
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
      'row' => 14,
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
      'left' => 5,
      'col' => 6,
      'order' => 0,
      'row' => 13,
      'top' => 2,
    ),
  ),
));

$region_bcdef3->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-49735 upfront-module-spacer',
  'id' => 'module-1449647785-49735',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-83591',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-58918',
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

$region_bcdef3->add_element("Uspacer", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-15892 upfront-module-spacer',
  'id' => 'module-1449647785-15892',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-82792',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-27184',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 2,
      'edited' => true,
      'col' => 8,
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
      'hide' => 0,
      'left' => 0,
      'col' => 8,
      'edited' => true,
    ),
  ),
));

$region_bcdef3->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449647785-67753 upfront-module-spacer',
  'id' => 'module-1449647785-67753',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449647785-30347',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449647785-35699',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 3,
    ),
    'mobile' => 
    array (
      'clear' => false,
      'order' => 2,
      'edited' => true,
      'col' => 3,
    ),
  ),
  'breakpoint' => 
  array (
    'mobile' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 3,
      'edited' => true,
    ),
  ),
));

$regions->add($region_bcdef3);

/* END_REGION_OUTPUT */
