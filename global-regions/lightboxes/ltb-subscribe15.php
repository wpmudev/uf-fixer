<?php
/* START_REGION_OUTPUT */
$ltb_subscribe15 = upfront_create_region(
			array (
  'name' => 'ltb-subscribe15',
  'title' => 'subscribe',
  'type' => 'lightbox',
  'scope' => 'local',
  'container' => 'lightbox',
  'sub' => 'lightbox',
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'col' => '8',
  'height' => '320',
  'click_out_close' => 'yes',
  'show_close' => 'yes',
  'overlay_color' => 'rgba(255, 255, 255, 0.952941)',
  'lightbox_color' => 'rgb(214, 230, 240)',
  'background_type' => '',
  'delete' => false,
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 7,
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => false,
    )),
  )),
  'use_padding' => 0,
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

$ltb_subscribe15->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1444288191571-1836',
  'id' => 'module-1444288191571-1836',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'usingNewAppearance' => true,
    'content' => '<h3 class="" style="text-align: center;">Subscribe to our<br>​e-newsletter</h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1444288191570-1689',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 25,
    'border_style' => 'none',
    'border_width' => 1,
    'border_color' => 'rgba(0, 0, 0, 0)',
    'bg_color' => 'rgba(0, 0, 0, 0)',
    'anchor' => '',
    'top_padding_use' => true,
    'top_padding_num' => 40,
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'top_padding_use' => 'yes',
         'top_padding_num' => '40',
         'row' => 17,
         'use_padding' => 'yes',
         'top_padding_slider' => '40',
      )),
       'current_property' => 'use_padding',
    )),
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
    'breakpoint_presets' => 
    (array)(array(
    )),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1444288315227-1721',
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
    'current_property' => 
    array (
      0 => 'edited',
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
      'row' => 17,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$ltb_subscribe15->add_element("Code", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1444101653187-1046',
  'id' => 'module-1444101653187-1046',
  'options' => 
  array (
    'type' => 'CodeModel',
    'view_class' => 'CodeView',
    'class' => 'c24 upfront-code_element-object',
    'has_settings' => 0,
    'id_slug' => 'upfront-code_element',
    'fallbacks' => 
    (array)(array(
       'markup' => '<b>Enter your markup here...</b>',
       'style' => '/* Your styles here */',
       'script' => '/* Your code here */',
    )),
    'usingNewAppearance' => true,
    'element_id' => 'upfront-code_element-object-1444101653184-1490',
    'row' => 35,
    'code_selection_type' => 'Create',
    'markup' => '<form name="newsletter" class="newsletter-form" action="" method="post">
<input type="text" id="user-name" name="user-name" placeholder="Name">
<input type="email" id="user-email" name="user-email" placeholder="Email address">
<input type="submit" value="Subscribe">
</form>',
    'style' => '.newsletter-form label {
    color: #ufc1;
    font-family: \'Raleway\', Arial, sans-serif;
    font-weight: 400;
    font-size: 15px;
    font-style: normal;
    line-height: 1.667em;
    margin-bottom: 10px;
    display: block;
}
.newsletter-form input {
    margin: 0 0 2px;
}
.newsletter-form input[type="text"], .newsletter-form input[type="email"] {
    border: 1px solid transparent;
    background: #f7f7f7;
}
.newsletter-form input[type="text"]:focus, .newsletter-form input[type="email"]:focus {
    border-color: #a4d0dc !important;
    background: #ffffff;
}
.newsletter-form input[type="submit"] {
    background: #a4d0dc;
    border: none;
    color: #ufc0;
    padding: 15px 20px;
    width:100%;
    margin-top:2px;
}
.newsletter-form input[type="submit"]:hover {
    background: #ufc1;
    border: none;
}',
    'script' => '/* Your code here */',
    'top_padding_num' => '15',
    'bottom_padding_num' => '40',
    'preset' => 'default',
    'breakpoint' => 
    (array)(array(
       'tablet' => 
      (array)(array(
         'row' => 33,
         'use_padding' => 'yes',
      )),
       'mobile' => 
      (array)(array(
         'row' => 31,
      )),
       'current_property' => 'lock_padding',
    )),
    'padding_slider' => '15',
    'use_padding' => 'yes',
    'lock_padding' => '',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '40',
    'left_padding_num' => '15',
    'right_padding_num' => '15',
    'current_preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1444102317966-1645',
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
      'order' => 2,
      'clear' => true,
    ),
    'current_property' => 
    array (
      0 => 'edited',
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
      'row' => 33,
    ),
    'mobile' => 
    array (
      'edited' => true,
      'left' => 0,
      'col' => 7,
      'order' => 0,
      'top' => 0,
      'row' => 31,
    ),
    'current_property' => 
    array (
      0 => 'edited',
    ),
  ),
));

$regions->add($ltb_subscribe15);

/* END_REGION_OUTPUT */
