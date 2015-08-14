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
)
			);

$ltb_subscribe15->add_element("Ucontact", array (
  'columns' => '8',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '5',
  'margin_bottom' => '0',
  'class' => 'module-1417244527218-1054',
  'id' => 'module-1417244527218-1054',
  'options' => 
  array (
    'form_add_title' => 
    array (
    ),
    'form_title' => 'Contact form',
    'form_name_label' => 'Your name:',
    'form_email_label' => 'Your email:',
    'form_email_to' => '',
    'show_subject' => 
    array (
    ),
    'show_captcha' => 
    array (
    ),
    'form_subject_label' => 'Your subject:',
    'form_captcha_label' => 'CAPTCHA:',
    'form_default_subject' => 'Sent from the website',
    'form_message_label' => 'Your message:',
    'form_button_text' => 'Send',
    'form_validate_when' => 'submit',
    'form_label_position' => 'above',
    'type' => 'UcontactModel',
    'view_class' => 'UcontactView',
    'class' => 'c24 upfront-contact-form',
    'has_settings' => 1,
    'id_slug' => 'ucontact',
    'element_id' => 'ucontact-object-1417244527211-1482',
    'row' => 87,
    'anchor' => '',
    'theme_style' => 'ucontact-subscribe-style',
  ),
  'row' => 6,
  'sticky' => false,
  'wrapper_id' => 'wrapper-1417244574245-1646',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 10,
      'order' => 0,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'order' => 0,
    ),
    'custom-1410783666947' => 
    array (
      'col' => 8,
      'order' => 0,
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
      'left' => 0,
      'col' => 8,
      'order' => 0,
      'top' => 1,
    ),
  ),
));

$regions->add($ltb_subscribe15);

/* END_REGION_OUTPUT */
