<?php
/**
 * Template Name: Mpstore Page template
 *
 * @package WordPress
 * @subpackage mpstore
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-mpstore'));

get_header();
echo $layout->apply_layout();
get_footer();