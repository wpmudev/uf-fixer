<?php
/**
 * Template Name: Contact Us Inner Page template
 *
 * @package WordPress
 * @subpackage contact-us-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-contact-us-inner'));

get_header();
echo $layout->apply_layout();
get_footer();