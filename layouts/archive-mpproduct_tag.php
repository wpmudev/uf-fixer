<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Archive Content Region',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'color',
  'background_color' => '#ufc0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'background_type' => 'color',
       'bg_padding_type' => 'varied',
       'bottom_bg_padding_num' => '80',
       'bottom_bg_padding_slider' => '80',
       'row' => 464,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'col' => 24,
       'background_type' => 'color',
       'bg_padding_type' => 'varied',
       'bottom_bg_padding_slider' => '60',
       'bottom_bg_padding_num' => '60',
       'row' => 676,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 270,
    )),
  )),
  'version' => '1.0.0',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => '',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => '110',
  'bottom_bg_padding_slider' => '40',
  'bottom_bg_padding_num' => '110',
  'bg_padding_slider' => 0,
  'bg_padding_num' => '110',
)
			);

$main->add_element("Uspacer", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1478864090446-1295 upfront-module-spacer',
  'id' => 'module-1478864090446-1295',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1478864090445-1625',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1478864090445-1907',
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

$main->add_element("Uwidget", array (
  'columns' => '12',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430836096747-1372',
  'id' => 'module-1430836096747-1372',
  'options' => 
  array (
    'id_slug' => 'uwidget',
    'type' => 'UwidgetModel',
    'view_class' => 'UwidgetView',
    'class' => 'c24 upfront-widget',
    'has_settings' => 1,
    'preset' => 'default',
    'widget' => 'search-2',
    'usingNewAppearance' => true,
    'element_id' => 'uwidget-object-1430836096746-1887',
    'row' => 13,
    'selected_widget' => 'search-2',
    'anchor' => '',
    'widget_specific_fields' => false,
    'title' => '',
    'theme_style' => '',
    'sortby' => '',
    'exclude' => '',
    'breakpoint' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'top_padding_use' => 'yes',
         'top_padding_num' => '30',
         'lock_padding' => '',
         'top_padding_slider' => '30',
      )),
    )),
    'current_widget' => 'search-2',
    'current_widget_specific_settings' => false,
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'current_widget_specific_fields' => false,
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'default',
      )),
    )),
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1478864053771-1556',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
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
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1478864094052-1228 upfront-module-spacer',
  'id' => 'module-1478864094052-1228',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1478864094052-1206',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1478864094052-1929',
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

$main->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1478864072535-1366 upfront-module-spacer',
  'id' => 'module-1478864072535-1366',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1478864072535-1400',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1478864072534-1633',
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

$main->add_element("PlainTxt", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1479811676227-1314',
  'options' => 
  array (
    'content' => '<h1 style="text-align: center;">Fixer Shop</h1>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1479811676226-1743',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'mp-page-title',
    'padding_slider' => '15',
    'top_padding_num' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_num' => '0',
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'anchor' => '',
    'current_preset' => 'mp-page-title',
    'theme_style' => '',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'mp-page-title',
      )),
    )),
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1419434095455-1654',
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
      'col' => 14,
      'order' => 0,
      'clear' => true,
      'edited' => true,
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
      'col' => 12,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'col' => 7,
    ),
  ),
  'close_wrapper' => false,
));

$main->add_element("Posts", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1419434077626-1291',
  'id' => 'module-1419434077626-1291',
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
    'limit' => 5,
    'pagination' => 'numeric',
    'sticky' => 'prepend',
    'posts_list' => '',
    'thumbnail_size' => 'thumbnail',
    'custom_thumbnail_width' => 200,
    'custom_thumbnail_height' => 200,
    'post_parts' => 
    array (
      0 => 'title',
      1 => 'content',
      2 => 'date_posted',
      3 => 'author',
    ),
    'enabled_post_parts' => 
    array (
      0 => 'date_posted',
      1 => 'author',
      2 => 'title',
      3 => 'content',
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
    'date_posted_format' => 'M d, Y',
    'categories_limit' => 3,
    'tags_limit' => 3,
    'comment_count_hide' => 0,
    'content_length' => 120,
    'resize_featured' => '1',
    'gravatar_size' => 200,
    'preset' => 'mp-products',
    'post-part-date_posted' => '<div class="uposts-part date_posted">
    <span class="date">{{date_1}}</span> <span class="time">{{date_2}}</span>
</div>',
    'post-part-author' => '<div class="uposts-part author">
	- by <a href="{{url}}">{{name}}</a></div>',
    'post-part-gravatar' => '<div class="uposts-part gravatar">
	{{gravatar}}
</div>',
    'post-part-comment_count' => '<div class="uposts-part comment_count">
	{{comment_count}}
</div>',
    'post-part-featured_image' => '<div class="uposts-part thumbnail" data-resize="{{resize}}">
	{{thumbnail}}
</div>',
    'post-part-title' => '<div class="uposts-part title">
	<h3><a href="{{permalink}}" title="{{title}}">{{title}}</a></h3>
</div>',
    'post-part-content' => '<div class="uposts-part content">
	{{content}}
</div>',
    'post-part-read_more' => '<div class="uposts-part read_more">
	<a href="{{permalink}}">Read more</a></div>',
    'post-part-tags' => '<div class="uposts-part post_tags">
	{{tags}}
</div>',
    'post-part-categories' => '<div class="uposts-part post_categories">
	{{categories}}
</div>',
    'post-part-meta' => '<div class="uposts-part meta">

</div>
',
    'usingNewAppearance' => true,
    'element_id' => 'posts-object-1419434077622-1689',
    'anchor' => '',
    'theme_style' => '',
    'row' => 316,
    'breakpoint' => 
    (array)(array(
       'custom-1410783666947' => 
      (array)(array(
         'row' => 263,
      )),
       'tablet' => 
      (array)(array(
         'row' => 482,
      )),
       'mobile' => 
      (array)(array(
         'row' => 207,
      )),
    )),
    'top_padding_use' => 'yes',
    'top_padding_num' => '40',
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => '15',
    'padding_number' => '15',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'breakpoint_presets' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'preset' => 'mobile',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'mp-products',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'default',
      )),
    )),
    'top_padding_slider' => '40',
    'current_preset' => 'mp-products',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1419434095455-1654',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 12,
      'order' => 0,
      'top' => 0,
      'row' => 482,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 207,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 14,
      'order' => 0,
      'row' => 263,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '3',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1478864079802-1557 upfront-module-spacer',
  'id' => 'module-1478864079802-1557',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1478864079801-1282',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1478864079801-1480',
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

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

