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
  'row' => 170,
  'background_type' => 'color',
  'background_color' => '#ufc0',
  'nav_region' => '',
  'background_style' => 'fixed',
  'background_position_y' => '84',
  'background_position_x' => '63',
  'background_image' => '{{upfront:style_url}}/images/single-404_page/404-background.png',
  'background_image_ratio' => 0.429999999999999993338661852249060757458209991455078125,
  'background_repeat' => 'no-repeat',
  'background_position' => '63% 84%',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 129,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 95,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 192,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '3',
  'margin_right' => '0',
  'margin_top' => '29',
  'margin_bottom' => '0',
  'class' => 'module-1412691061180-1949',
  'id' => 'module-1412691061180-1949',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;"><span class="upfront_theme_color_0" data-verified="redactor" data-redactor-tag="span" data-redactor-class="upfront_theme_color_0"><span class="upfront_theme_color_1">The page cannot be found</span></span></h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412691061176-1774',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'row' => 89,
    'theme_style' => '_default',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'row' => 38,
         'theme_style' => 'text-center',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'text-center',
         'row' => 66,
      )),
    )),
  ),
  'row' => 89,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1412692347986-1728',
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
      'top' => 21,
      'row' => 66,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 15,
      'row' => 38,
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

$main->add_element("Button", array (
  'columns' => '6',
  'margin_left' => '9',
  'margin_right' => '0',
  'margin_top' => '4',
  'margin_bottom' => '0',
  'class' => 'module-1412692676377-1786',
  'id' => 'module-1412692676377-1786',
  'options' => 
  array (
    'content' => 'TAKE ME HOME',
    'href' => '{{upfront:home_url}}',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'element_id' => 'button-object-1412692676375-1820',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'button',
    'link' => 
    (array)(array(
       'type' => 'entry',
       'url' => '{{upfront:home_url}}',
       'target' => '_self',
    )),
    'currentpreset' => 'black-borders-button',
    'theme_style' => '_default',
    'is_edited' => true,
    'row' => 15,
    'linkTarget' => '_self',
  ),
  'row' => 15,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1412693265986-1503',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 9,
      'order' => 1,
      'clear' => true,
      'edited' => true,
    ),
    'mobile' => 
    array (
      'col' => 6,
      'clear' => true,
      'order' => 1,
      'edited' => true,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 12,
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
      'left' => 3,
      'col' => 6,
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 1,
      'col' => 5,
      'order' => 0,
      'top' => 3,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 6,
      'col' => 6,
      'order' => 0,
      'top' => 35,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

