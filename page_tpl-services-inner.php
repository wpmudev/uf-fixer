<?php
/**
 * Template Name: Services Inner Page template
 *
 * @package WordPress
 * @subpackage services-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-services-inner'));

get_header();
echo $layout->apply_layout();
get_footer();