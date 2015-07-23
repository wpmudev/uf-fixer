<?php
/**
 * Template Name: Service Windows Inner Page template
 *
 * @package WordPress
 * @subpackage service-windows-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-service-windows-inner'));

get_header();
echo $layout->apply_layout();
get_footer();