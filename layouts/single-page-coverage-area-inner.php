<?php
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
  'row' => 180,
  'background_type' => 'image',
  'background_color' => '#ufc0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 178,
       'background_position_y' => '100',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '100% 100%',
       'background_position_x' => '100',
       'background_type' => 'color',
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 108,
       'background_position_y' => '100',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '100% 100%',
       'background_position_x' => '100',
       'background_type' => 'color',
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 187,
       'background_position_y' => '100',
       'background_style' => 'fixed',
       'background_repeat' => 'no-repeat',
       'background_position' => '100% 100%',
       'background_position_x' => '100',
       'background_type' => 'color',
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_style' => 'fixed',
  'background_position_y' => '100',
  'background_position_x' => '100',
  'background_image' => '{{upfront:style_url}}/images/single-page-coverage-area-inner/dome.png',
  'background_image_ratio' => 1.0500000000000000444089209850062616169452667236328125,
  'background_repeat' => 'no-repeat',
  'background_position' => '100% 100%',
  'version' => '1.0.0',
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432912837169-1969',
  'id' => 'module-1432912837169-1969',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class="" style="text-align: center;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Contact us</span></span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432912837169-1903',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 29,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-sub-heading',
    'top_padding_use' => true,
    'top_padding_num' => 125,
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'top_padding_use' => true,
         'top_padding_num' => 75,
      )),
    )),
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432912849212-1635',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
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

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432912849348-1153',
  'id' => 'module-1432912849348-1153',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Ready to talk to our experts?</span></span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432912849348-1836',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432912871395-1766',
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
      'edited' => true,
      'col' => 7,
      'order' => 1,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1449825523-56989',
  'options' => 
  array (
    'element_id' => 'spacer-object-1449825523-25956',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1449825523-41583',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'order' => 0,
      'edited' => true,
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

$main->add_element("PlainTxt", array (
  'columns' => '10',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432912871525-1810',
  'id' => 'module-1432912871525-1810',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span class="upfront_theme_color_1" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_1">Get in touch:</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432912871524-1887',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 14,
    'top_padding_use' => true,
    'top_padding_num' => 40,
    'bottom_padding_num' => '15',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1432912910837-1185',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 10,
      'order' => 0,
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
      'col' => 10,
      'order' => 0,
      'hide' => 1,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'hide' => 1,
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

$main->add_element("Uspacer", array (
  'columns' => '14',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1449825523-16767',
  'options' => 
  array (
    'element_id' => 'spacer-object-1449825523-93940',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1449825523-93387',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1449825523-75129',
  'options' => 
  array (
    'element_id' => 'spacer-object-1449825523-99504',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1449825523-79362',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 1,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 0,
      'edited' => true,
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

$main->add_element("Ucontact", array (
  'columns' => '13',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1432912837184-1675',
  'id' => 'module-1432912837184-1675',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name:',
    'form_email_label' => 'Email Address:',
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
    'form_message_label' => 'Message:',
    'form_button_text' => 'Send',
    'form_validate_when' => 'submit',
    'form_label_position' => 'over',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1432912837183-1383',
    'row' => 88,
    'anchor' => '',
    'theme_style' => 'ucontact-contact-style',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'theme_style' => 'ucontact-new-style-mobile',
      )),
       'mobile' => 
      (array)(array(
         'row' => 73,
         'theme_style' => 'ucontact-new-style-mobile',
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
  'wrapper_id' => 'wrapper-1432912929239-1321',
  'new_line' => true,
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
      'order' => 3,
      'clear' => true,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
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
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'row' => 73,
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

$main->add_element("Uspacer", array (
  'columns' => '11',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1449825523-39257',
  'options' => 
  array (
    'element_id' => 'spacer-object-1449825523-81705',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1449825523-47992',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

