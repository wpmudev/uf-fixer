<?php
/**
 * Template Name: Service Roof Inner Page template
 *
 * @package WordPress
 * @subpackage service-roof-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-service-roof-inner'));

get_header();
echo $layout->apply_layout();
get_footer();