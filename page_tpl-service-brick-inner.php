<?php
/**
 * Template Name: Service Brick Inner Page template
 *
 * @package WordPress
 * @subpackage service-brick-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-service-brick-inner'));

get_header();
echo $layout->apply_layout();
get_footer();