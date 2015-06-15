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
  'row' => 178,
  'background_type' => 'color',
  'background_color' => '#ufc2',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => true,
       'row' => 342,
    )),
     'mobile' => 
    (array)(array(
       'edited' => true,
       'row' => 319,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => true,
       'row' => 328,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '13',
  'margin_bottom' => '0',
  'id' => 'module-1432910788816-1422',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 class="" style="text-align: center;">Need help right now? No problem!</h2>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910788816-1073',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 12,
    'is_edited' => true,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'theme_style' => 'u-sub-heading',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432910830143-1636',
  'new_line' => 'true',
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
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
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
  'id' => 'module-1432910830230-1071',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h1 class="" style="text-align: center;">First Thing\'s First</h1>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910830230-1602',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 5,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432910859699-1293',
  'new_line' => 'true',
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
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
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

$main->add_group(array (
  'columns' => '8',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-group-1432911270866-1303',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432911270869-1682',
  'original_col' => 8,
  'new_line' => 'true',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 10,
      'order' => 2,
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
      'edited' => false,
      'left' => 2,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => true,
      'left' => 5,
      'col' => 8,
      'order' => 0,
      'top' => 5,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1432910859794-1141',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""></h3><h3>1. Get a Quote</h3>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910859794-1186',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911270887-1672',
  'new_line' => 'true',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
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
      'col' => 8,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
      'order' => 0,
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
  'id' => 'module-1432910788837-1850',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Name:',
    'form_email_label' => 'Email:',
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
    'element_id' => 'ucontact-object-1432910788835-1724',
    'row' => 70,
    'anchor' => '',
    'theme_style' => 'ucontact-quote-style',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911270888-1260',
  'new_line' => 'true',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 8,
      'order' => 0,
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
      'col' => 8,
      'order' => 0,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 8,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1432911270866-1303',
));

$main->add_group(array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-group-1432911273578-1407',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432910923990-1483',
  'original_col' => 6,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 9,
      'order' => 3,
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
      'left' => 3,
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
  'id' => 'module-1432910920510-1185',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""></h3><h3 class=""></h3><h3 class="" style="text-transform: none;">2. We Roll</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432910920510-1024',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 11,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911273599-1902',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
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
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1432911273578-1407',
));

$main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1432910788820-1541',
  'options' => 
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-get-quote-inner/fixer-van-230x100-9286-240x100-6870.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-get-quote-inner/fixer-van-230x100-9286.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-get-quote-inner/fixer-van-230x100-9286.png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
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
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'image-1432910788817-1588',
    'row' => 26,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911273599-1902',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1432911273578-1407',
));

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1432910907295-1075',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat, tortor id malesuada faucibus, elit nisl luctus massa, vel consectetur.</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1432910907294-1269',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 26,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911273599-1902',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1432911273578-1407',
));

$main->add_group(array (
  'columns' => '6',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '8',
  'margin_bottom' => '0',
  'id' => 'module-group-1432911276165-1068',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'wrapper-1432910928838-1627',
  'original_col' => 6,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => true,
      'col' => 9,
      'order' => 4,
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
      'edited' => false,
      'left' => 3,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
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
  'id' => 'module-1432910925391-1330',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""></h3><h3 class=""></h3><h3 class="" style="text-transform: none;">3. We Fix It</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432910925392-1480',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 10,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911276186-1805',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
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
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1432911276165-1068',
));

$main->add_element("Uimage", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1432911133966-1458',
  'options' => 
  array (
    'src' => '' . get_stylesheet_directory_uri() . '/images/single-page-get-quote-inner/fixer-cloud-230x100-3674-240x100-6991.png',
    'srcFull' => '' . get_stylesheet_directory_uri() . '/images/single-page-get-quote-inner/fixer-cloud-230x100-3674.png',
    'srcOriginal' => '' . get_stylesheet_directory_uri() . '/images/single-page-get-quote-inner/fixer-cloud-230x100-3674.png',
    'image_title' => '',
    'alternative_text' => '',
    'when_clicked' => false,
    'image_link' => '',
    'include_image_caption' => false,
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
    'gifImage' => 0,
    'placeholder_class' => '',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'element_id' => 'object-1432911133966-1526',
    'row' => 26,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911276186-1805',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'close_wrapper' => false,
  'group' => 'module-group-1432911276165-1068',
));

$main->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'id' => 'module-1432911140373-1215',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus consequat, tortor id malesuada faucibus, elit nisl luctus massa, vel consectetur.</p>
',
    'type' => 'PlainTxtModel',
    'element_id' => 'object-1432911140373-1337',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'row' => 26,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1432911276186-1805',
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 6,
      'order' => 0,
    ),
  ),
  'group' => 'module-group-1432911276165-1068',
));

$regions->add($main);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

