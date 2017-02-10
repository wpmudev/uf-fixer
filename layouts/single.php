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
  'row' => 299,
  'background_type' => 'color',
  'background_color' => 'rgba(255,255,255,1)',
  'nav_region' => '',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 382,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 354,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'row' => 317,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'expand_lock' => false,
  'version' => '1.0.0',
  'bg_padding_type' => 'equal',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
  'region_role' => 'main',
)
			);

$blog_individual->add_element("ThisPost", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'default-post-module-module-module-module-module-module-module-module',
  'id' => 'default-post-module-module-module-module-module-module-module-module',
  'options' => 
  array (
    'type' => 'ThisPostModel',
    'view_class' => 'ThisPostView',
    'class' => 'c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-this_post',
    'has_settings' => 1,
    'id_slug' => 'this_post',
    'row' => 10,
    'preset' => 'default',
    'post_data' => 
    array (
      0 => 'date',
    ),
    'usingNewAppearance' => true,
    'disable_resize' => false,
    'disable_drag' => false,
    'layout' => 
    array (
      0 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'title',
             'classes' => 'post-part c24',
          )),
        ),
      )),
      1 => 
      (array)(array(
         'classes' => 'c24 clr',
         'objects' => 
        array (
          0 => 
          (array)(array(
             'slug' => 'contents',
             'classes' => ' post-part c24',
          )),
        ),
      )),
    ),
    'element_id' => 'default-post-object',
    'theme_style' => '_default',
    'anchor' => '',
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'theme_style' => 'u-this_post-big-tablet',
      )),
       'tablet' => 
      (array)(array(
         'theme_style' => 'u-this_post-tablet',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => 'u-this_post-mobile',
      )),
    )),
    'breakpoint_presets' => 
    (array)(array(
    )),
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '15',
    'lock_padding' => 0,
    'use_padding' => 'yes',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'default-post-module-module-module-module-module-module-module-module-wrapper',
  'new_line' => true,
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
    'custom-1410783666947' => 
    array (
      'col' => 18,
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
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
));

$blog_individual->add_element("Uspacer", array (
  'columns' => '6',
  'class' => 'upfront-module-spacer',
  'id' => 'module-1486741088-67768',
  'options' => 
  array (
    'element_id' => 'spacer-object-1486741088-59920',
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
  ),
  'wrapper_id' => 'wrapper-1486741088-95864',
  'default_hide' => 1,
  'toggle_hide' => 0,
  'hide' => 0,
  'new_line' => true,
));

$blog_individual->add_element("Ucomment", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430734423685-1574',
  'id' => 'module-1430734423685-1574',
  'options' => 
  array (
    'id_slug' => 'ucomment',
    'type' => 'UcommentModel',
    'view_class' => 'UcommentView',
    'class' => 'c24 upfront-comment',
    'has_settings' => 1,
    'prepend_form' => false,
    'usingNewAppearance' => true,
    'element_id' => 'ucomment-object-1430734423685-1984',
    'row' => 157,
    'anchor' => '',
    'current_preset' => 'default',
    'preset' => 'default',
    'breakpoint_presets' => 
    (array)(array(
    )),
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '15',
    'lock_padding' => 0,
    'use_padding' => 'yes',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1430735458058-1283',
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
      'col' => 18,
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
    'current_property' => 
    array (
      0 => 'col',
    ),
  ),
));

$regions->add($blog_individual);

$separator = upfront_create_region(
			array (
  'name' => 'separator',
  'title' => 'Separator',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'separator',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 14,
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
  'background_type' => 'color',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_color' => '#ffffff',
  'version' => '1.0.0',
  'bg_padding_type' => 'equal',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
  'region_role' => 'complementary',
)
			);

$regions->add($separator);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

