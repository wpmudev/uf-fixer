<?php
/**
 * Template Name: Service Plumb Inner Page template
 *
 * @package WordPress
 * @subpackage service-plumb-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-service-plumb-inner'));

get_header();
echo $layout->apply_layout();
get_footer();