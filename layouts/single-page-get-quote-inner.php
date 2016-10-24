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
  'row' => 60,
  'background_type' => 'color',
  'background_color' => '#ufc0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 132,
       'background_type' => 'color',
       'bottom_bg_padding_slider' => '105',
       'bottom_bg_padding_num' => '105',
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 100,
       'background_type' => 'color',
       'bottom_bg_padding_slider' => '60',
       'bottom_bg_padding_num' => '60',
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 150,
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

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910788816-1422',
  'id' => 'module-1432910788816-1422',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class="" style="text-align: center;">Get a&nbsp;quote</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910788816-1073',
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
    'bottom_padding_num' => '15',
    'preset' => 'default',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'top_padding_slider' => '110',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'use_padding' => 'yes',
         'top_padding_use' => 'yes',
         'top_padding_slider' => '50',
         'top_padding_num' => '50',
         'row' => 14,
      )),
       'current_property' => 'use_padding',
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
    )),
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432910830143-1636',
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

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910830230-1071',
  'id' => 'module-1432910830230-1071',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h1 class="" style="text-align: center;">First Things First</h1>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910830230-1602',
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
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'mobile' => 
      (array)(array(
         'row' => 24,
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'preset' => 'default',
    'theme_style' => '',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432910859699-1293',
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
      'row' => 24,
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449825543-63499 upfront-module-spacer',
  'id' => 'module-1449825543-63499',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449825543-21297',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449825543-78271',
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

$main->add_group(array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432911270866-1303',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432911270869-1682',
  'original_col' => 8,
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => 'yes',
  'background_type' => 'color',
  'anchor' => '',
  'top_padding_use' => true,
  'top_padding_num' => 40,
  'version' => '1.0.0',
  'bottom_padding_num' => '0',
  'row' => 88,
  'lock_padding' => '',
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => '0',
  'left_padding_num' => '15',
  'right_padding_num' => '15',
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
      'col' => 13,
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
      'row' => 81,
      'top' => 0,
      'top_padding_use' => true,
      'top_padding_num' => 35,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 67,
      'use_padding' => 'yes',
      'lock_padding' => '',
      'top_padding_use' => 'yes',
      'top_padding_slider' => '0',
      'top_padding_num' => '0',
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 0,
      'top' => 5,
    ),
    'current_property' => 
    array (
      0 => 'top_padding_num',
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910859794-1141',
  'id' => 'module-1432910859794-1141',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class=""><span>1. Get a Quote</span><br></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910859794-1186',
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
         'theme_style' => '',
         'row' => 9,
         'use_padding' => 'yes',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
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
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'current_preset' => 'no-bottom-space',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432911270887-1672',
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
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 9,
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
      'col' => 8,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911270866-1303',
));

$main->add_element("Ucontact", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910788837-1850',
  'id' => 'module-1432910788837-1850',
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
    'form_subject_label' => 'Subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Type your enquiry here',
    'form_button_text' => 'GET A QUOTE',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'preset' => 'quote',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'usingNewAppearance' => true,
    'element_id' => 'ucontact-object-1432910788835-1724',
    'row' => 66,
    'anchor' => '',
    'theme_style' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 56,
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'row' => 48,
         'use_padding' => 'yes',
      )),
       'current_property' => 'lock_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'breakpoint_presets' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'preset' => 'quote-mobile',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'quote',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'quote-mobile',
      )),
    )),
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'current_preset' => 'quote',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432911270888-1260',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 12,
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
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
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
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'row' => 56,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 48,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911270866-1303',
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449825543-96673 upfront-module-spacer',
  'id' => 'module-1449825543-96673',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449825543-73221',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449825543-7209',
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

$main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432911273578-1407',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432910923990-1483',
  'original_col' => 6,
  'top_padding_use' => true,
  'top_padding_num' => 35,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
  'row' => 81,
  'use_padding' => 'yes',
  'left_padding_num' => '15',
  'right_padding_num' => '15',
  'lock_padding' => 0,
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
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'col' => 12,
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
      'row' => 74,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'top_padding_use' => 'yes',
      'top_padding_num' => '30',
      'row' => 57,
      'lock_padding' => '',
      'top_padding_slider' => '30',
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 6,
      'order' => 1,
      'top' => 0,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910920510-1185',
  'id' => 'module-1432910920510-1185',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class=""><span id="selection-marker-1" class="redactor-selection-marker" data-verified="redactor">​</span>2. We Roll<span id="selection-marker-2" class="redactor-selection-marker" data-verified="redactor">​</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432910920510-1024',
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
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'mobile' => 
      (array)(array(
         'row' => 9,
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
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
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'current_preset' => 'no-bottom-space',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445402436784-1495',
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
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
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
      'row' => 9,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911273578-1407',
));

$main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910788820-1541',
  'id' => 'module-1432910788820-1541',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-get-quote-inner/fixer-van-230x100-9286-240x100-6870.png',
    'srcFull' => '{{upfront:style_url}}/images/single-page-get-quote-inner/fixer-van-230x100-9286.png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-get-quote-inner/fixer-van-230x100-9286.png',
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
       'height' => 104,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0.5,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 100,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1839',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'is_locked' => true,
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
    'element_id' => 'image-1432910788817-1588',
    'row' => 26,
    'no_padding' => '',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 26,
         'use_padding' => 'yes',
      )),
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'padding_slider' => '15',
    'use_padding' => 'yes',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'lock_padding' => '',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445402436794-1968',
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
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => false,
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
      'edited' => false,
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
      'row' => 26,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911273578-1407',
));

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910907295-1075',
  'id' => 'module-1432910907295-1075',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat, tortor id malesuada faucibus, elit nisl luctus massa</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910907294-1269',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 26,
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
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
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
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'current_preset' => 'no-bottom-space',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445402436799-1253',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
      'clear' => true,
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
      'edited' => false,
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
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911273578-1407',
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449825543-55434 upfront-module-spacer',
  'id' => 'module-1449825543-55434',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449825543-65059',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449825543-73617',
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

$main->add_group(array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1432911276165-1068',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432910928838-1627',
  'original_col' => 6,
  'top_padding_use' => true,
  'top_padding_num' => 35,
  'version' => '1.0.0',
  'bottom_padding_num' => '15',
  'background_color' => '#ffffff',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'use_padding' => 'yes',
  'background_type' => 'color',
  'anchor' => '',
  'top_padding_slider' => '15',
  'bottom_padding_use' => false,
  'bottom_padding_slider' => '15',
  'left_padding_num' => '15',
  'right_padding_num' => '15',
  'lock_padding' => 0,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 6,
      'order' => 4,
      'clear' => false,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
      'order' => 4,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'col' => 12,
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
      'order' => 0,
      'top' => 0,
      'background_color' => 'rgba(0,0,0,0)',
      'row' => 71,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'lock_padding' => '',
      'top_padding_use' => 'yes',
      'top_padding_num' => '30',
      'top_padding_slider' => '30',
      'row' => 71,
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

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432910925391-1330',
  'id' => 'module-1432910925391-1330',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class=""><span>3. We Fix It</span><br></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432910925392-1480',
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
         'use_padding' => 'yes',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
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
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'current_preset' => 'no-bottom-space',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445402436804-1645',
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
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
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
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911276165-1068',
));

$main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432911133966-1458',
  'id' => 'module-1432911133966-1458',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-page-get-quote-inner/fixer-cloud-230x100-3674-240x100-6991.png',
    'srcFull' => '{{upfront:style_url}}/images/single-page-get-quote-inner/fixer-cloud-230x100-3674.png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-page-get-quote-inner/fixer-cloud-230x100-3674.png',
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
       'height' => 104,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 230,
       'height' => 100,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0.5,
    'element_size' => 
    (array)(array(
       'width' => 240,
       'height' => 100,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '1840',
    'align' => 'left',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'is_locked' => true,
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
    'element_id' => 'object-1432911133966-1526',
    'row' => 26,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 26,
         'use_padding' => 'yes',
      )),
       'tablet' => 
      (array)(array(
         'use_padding' => 'yes',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'padding_slider' => '15',
    'use_padding' => 'yes',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'lock_padding' => '',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445402436811-1130',
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
      'edited' => true,
      'col' => 7,
      'order' => 2,
      'clear' => true,
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
      'edited' => false,
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
      'row' => 26,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911276165-1068',
));

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432911140373-1215',
  'id' => 'module-1432911140373-1215',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<p class="">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432911140373-1337',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 26,
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
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'use_padding' => 'yes',
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => '0',
         'bottom_padding_num' => '0',
      )),
       'current_property' => 'use_padding',
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
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
       'tablet' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'no-bottom-space',
      )),
       'mobile' => 
      (array)(array(
         'preset' => 'center-no-bottom-space',
      )),
    )),
    'current_preset' => 'no-bottom-space',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1445402436815-1344',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 3,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 3,
      'clear' => true,
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
      'edited' => false,
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
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
  'group' => 'module-group-1432911276165-1068',
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449825543-94891 upfront-module-spacer',
  'id' => 'module-1449825543-94891',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449825543-11668',
    'preset' => 'default',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449825543-41262',
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

