<?php
/**
 * Template Name: Get Quote Inner Page template
 *
 * @package WordPress
 * @subpackage get-quote-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-get-quote-inner'));

get_header();
echo $layout->apply_layout();
get_footer();