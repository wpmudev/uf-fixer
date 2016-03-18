<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_6 = upfront_create_region(
			array (
  'name' => 'region-6',
  'title' => 'Region 6',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'region-6',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'row' => 120,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 120,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 106,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 131,
    )),
  )),
  'background_type' => 'color',
  'nav_region' => '',
  'background_color' => '#ufc2',
  'version' => '1.0.0',
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => '',
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$region_6->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1419434077570-1881',
  'id' => 'module-1419434077570-1881',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class="" style="text-align: center;">Archived</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1419434077569-1427',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 24,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => '',
    'top_padding_use' => true,
    'top_padding_num' => 80,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'top_padding_use' => true,
         'top_padding_num' => 80,
      )),
       'mobile' => 
      (array)(array(
         'top_padding_use' => true,
         'top_padding_num' => 75,
      )),
    )),
    'bottom_padding_num' => '15',
    'preset' => 'u-sub-heading-m',
    'use_padding' => 'yes',
    'lock_padding' => '',
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
  'wrapper_id' => 'wrapper-1419521079075-1909',
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
      'order' => 0,
      'top' => 0,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'top' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 18,
      'order' => 0,
      'top' => 13,
    ),
  ),
));

$region_6->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449819166-65442 upfront-module-spacer',
  'id' => 'module-1449819166-65442',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449819166-24996',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449819166-84482',
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

$region_6->add_element("PlainTxt", array (
  'columns' => '23',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1412852120029-1051',
  'id' => 'module-1412852120029-1051',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h1 class="" style="text-align: center;">We Keep Things Organized</h1>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1412852120028-1957',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 45,
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
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'row' => 38,
      )),
    )),
    'top_padding_num' => '15',
    'bottom_padding_num' => '15',
    'preset' => 'default',
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
         'preset' => 'default',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1419433681416-1541',
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

$region_6->add_element("Uspacer", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449819166-43337 upfront-module-spacer',
  'id' => 'module-1449819166-43337',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449819166-46517',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449819166-71525',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 5,
    ),
    'mobile' => 
    array (
      'col' => 5,
    ),
  ),
));

$region_6->add_element("Uwidget", array (
  'columns' => '14',
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
    'preset' => 'widgets-background',
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
         'preset' => 'widgets-background',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1430837604474-1805',
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
      'col' => 16,
      'order' => 2,
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

$region_6->add_element("Uspacer", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449819166-9564 upfront-module-spacer',
  'id' => 'module-1449819166-9564',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449819166-99719',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449819166-42517',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 5,
    ),
    'mobile' => 
    array (
      'col' => 5,
    ),
  ),
));

$regions->add($region_6);

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
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => '40',
  'bottom_bg_padding_num' => '40',
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$main->add_element("Posts", array (
  'columns' => '20',
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
    'preset' => 'default',
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
    'top_padding_use' => true,
    'top_padding_num' => 85,
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
         'preset' => 'default',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'default',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1419434095455-1654',
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
      'col' => 14,
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
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449819166-83034 upfront-module-spacer',
  'id' => 'module-1449819166-83034',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449819166-14279',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449819166-23671',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'order' => 1,
      'edited' => true,
      'col' => 4,
    ),
    'mobile' => 
    array (
      'col' => 4,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 4,
      'edited' => true,
    ),
  ),
));

$main->add_element("Uwidget", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1430835627141-1760',
  'id' => 'module-1430835627141-1760',
  'options' => 
  array (
    'id_slug' => 'uwidget',
    'type' => 'UwidgetModel',
    'view_class' => 'UwidgetView',
    'class' => 'c24 upfront-widget',
    'has_settings' => 1,
    'preset' => 'u-archive-side-widgets-m',
    'widget' => 'archives-2',
    'usingNewAppearance' => true,
    'element_id' => 'uwidget-object-1430835627141-1957',
    'row' => 105,
    'selected_widget' => 'WP_Widget_Archives',
    'anchor' => '',
    'widget_specific_fields' => 
    (array)(array(
       'widget-archives-__i__-title' => 
      (array)(array(
         'label' => 'Title:',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
       'widget-archives-__i__-dropdown' => 
      (array)(array(
         'name' => 'dropdown',
         'type' => 'checkbox',
         'value' => '',
         'label' => 'Display as dropdown',
      )),
       'widget-archives-__i__-count' => 
      (array)(array(
         'name' => 'count',
         'type' => 'checkbox',
         'value' => '',
         'label' => 'Show post counts',
      )),
    )),
    'title' => 'Upload Date',
    'dropdown' => 
    array (
    ),
    'count' => 
    array (
    ),
    'theme_style' => '',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 23,
         'theme_style' => '',
      )),
       'mobile' => 
      (array)(array(
         'theme_style' => '',
         'top_padding_use' => 'yes',
         'top_padding_num' => '45',
         'row' => 7,
         'lock_padding' => '',
         'top_padding_slider' => '45',
      )),
    )),
    'top_padding_use' => true,
    'top_padding_num' => 85,
    'current_widget' => 'archives-2',
    'current_widget_specific_settings' => 
    (array)(array(
       'widget-archives-__i__-title' => 
      (array)(array(
         'label' => 'Title:',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
       'widget-archives-__i__-dropdown' => 
      (array)(array(
         'name' => 'dropdown',
         'type' => 'checkbox',
         'value' => '',
         'label' => 'Display as dropdown',
      )),
       'widget-archives-__i__-count' => 
      (array)(array(
         'name' => 'count',
         'type' => 'checkbox',
         'value' => '',
         'label' => 'Show post counts',
      )),
    )),
    'bottom_padding_num' => '15',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'padding_slider' => 'false',
    'padding_number' => 0,
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'current_widget_specific_fields' => 
    (array)(array(
       'widget-archives-__i__-title' => 
      (array)(array(
         'label' => 'Title:',
         'name' => 'title',
         'type' => 'text',
         'value' => '',
      )),
       'widget-archives-__i__-dropdown' => 
      (array)(array(
         'name' => 'dropdown',
         'type' => 'checkbox',
         'value' => '',
         'label' => 'Display as dropdown',
      )),
       'widget-archives-__i__-count' => 
      (array)(array(
         'name' => 'count',
         'type' => 'checkbox',
         'value' => '',
         'label' => 'Show post counts',
      )),
    )),
    'breakpoint_presets' => 
    (array)(array(
       'mobile' => 
      (array)(array(
         'preset' => 'archive-side-widgets-mobile',
      )),
       'tablet' => 
      (array)(array(
         'preset' => 'archive-side-widgets-mobile',
      )),
       'desktop' => 
      (array)(array(
         'preset' => 'u-archive-side-widgets-m',
      )),
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1430836096605-1038',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 4,
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
      'edited' => true,
      'col' => 4,
      'order' => 1,
      'clear' => false,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
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
      'row' => 7,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 4,
      'order' => 0,
      'top' => 0,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '4',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1449819166-94882 upfront-module-spacer',
  'id' => 'module-1449819166-94882',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'usingNewAppearance' => true,
    'element_id' => 'spacer-object-1449819166-19575',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 1,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1449819166-53697',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'order' => 1,
      'edited' => true,
      'col' => 4,
    ),
    'mobile' => 
    array (
      'col' => 4,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'hide' => 0,
      'left' => 0,
      'col' => 4,
      'edited' => true,
    ),
  ),
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

