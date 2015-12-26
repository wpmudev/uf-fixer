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
  'background_image' => '{{upfront:style_url}}/images/single-page-uf-elements-testing/dome.png',
  'background_image_ratio' => 1.05,
  'background_repeat' => 'no-repeat',
  'background_position' => '100% 100%',
  'version' => '1.0.0',
)
			);

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1450783138-74449 upfront-module-spacer',
  'id' => 'module-1450783138-74449',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1450783138-15114',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1450783138-80967',
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1450783138-30850 upfront-module-spacer',
  'id' => 'module-1450783138-30850',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1450783138-83081',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1450783138-18731',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 0,
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

