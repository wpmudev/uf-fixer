<?php
/**
 * Template Name: Service Electrical Inner Page template
 *
 * @package WordPress
 * @subpackage service-electrical-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-service-electrical-inner'));

get_header();
echo $layout->apply_layout();
get_footer();