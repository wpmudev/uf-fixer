<?php
/**
 * Template Name: About Inner Page template
 *
 * @package WordPress
 * @subpackage about-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-about-inner'));

get_header();
echo $layout->apply_layout();
get_footer();