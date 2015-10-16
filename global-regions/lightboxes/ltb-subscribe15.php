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
    )),
     'custom-1410783666947' => 
    (array)(array(
       'edited' => false,
    )),
  )),
  'use_padding' => 0,
)
			);

$ltb_subscribe15->add_element("PlainTxt", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1444288191571-1836',
  'id' => 'module-1444288191571-1836',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h3 class=""><span id="selection-marker-1" class="redactor-selection-marker" data-verified="redactor">​</span>Subscribe to our e-newsletter<span id="selection-marker-2" class="redactor-selection-marker" data-verified="redactor">​</span></h3>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1444288191570-1689',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'is_edited' => true,
    'row' => 18,
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1444288315227-1721',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 6,
      'order' => 0,
      'clear' => true,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
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
      'top' => 1,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'left' => 0,
      'col' => 7,
      'order' => 0,
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
    'element_id' => 'upfront-code_element-object-1444101653184-1490',
    'row' => 42,
    'code_selection_type' => 'Create',
    'markup' => '<form name="newsletter" class="newsletter-form" action="" method="post">
<input type="text" id="user-name" name="user-name" placeholder="Name">
<input type="email" id="user-email" name="user-email" placeholder="Email address">
<input type="submit" value="Subscribe">
</form>',
    'style' => 'label {
    color: #ufc1;
    font-family: \'Raleway\', Arial, sans-serif;
    font-weight: 400;
    font-size: 15px;
    font-style: normal;
    line-height: 1.667em;
    margin-bottom: 10px;
    display: block;
}
input {
    margin: 0 0 2px;
}
input[type="text"], input[type="email"] {
}
input[type="text"]:focus, input[type="email"]:focus {
}
input[type="submit"] {
    background: #a4d0dc;
    border: none;
    color: #ufc0;
    padding: 16px 20px;
    margin-top: 18px;
    float: right;
}
input[type="submit"]:hover {
    background: #ufc1;
    border: none;
}',
    'script' => '/* Your code here */',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1444102317966-1645',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'edited' => false,
      'col' => 10,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'edited' => false,
      'col' => 7,
      'order' => 0,
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
  ),
));

$regions->add($ltb_subscribe15);

/* END_REGION_OUTPUT */
