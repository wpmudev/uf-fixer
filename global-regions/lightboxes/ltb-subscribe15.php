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
  'col' => 10,
  'height' => '450',
  'click_out_close' => 'yes',
  'show_close' => 'yes',
  'overlay_color' => 'rgba(38,58,77,0.75)',
  'lightbox_color' => 'rgb(255, 226, 98)',
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

$ltb_subscribe15->add_element("Code", array (
  'columns' => '8',
  'margin_left' => '1',
  'margin_top' => '10',
  'class' => 'upfront-code_element-module',
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
<label for="user-name">Your name:</label>
<input type="text" id="user-name" name="user-name" placeholder="Your Name">
<label for="user-email">Your email:</label>
<input type="email" id="user-email" name="user-email" placeholder="Your Email">
<input type="submit" value="Send">
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
    margin: 0 0 15px;
}
input[type="text"], input[type="email"] {
    border: 1px solid #ece9e4;
}
input[type="text"]:focus, input[type="email"]:focus {
    border-color: #fed41d;
}
input[type="submit"] {
    background: #bba33a;
    border: none;
    color: #ufc0;
    padding: 16px 20px;
    float: right;
}
input[type="submit"]:hover {
    background: #ufc1;
    border: none;
    color: #ufc6;
}',
    'script' => '/* Your code here */',
  ),
  'row' => 42,
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
