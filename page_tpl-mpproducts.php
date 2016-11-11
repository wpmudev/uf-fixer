<?php
/**
 * Template Name: Mpproducts Page template
 *
 * @package WordPress
 * @subpackage mpproducts
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-mpproducts'));

get_header();
echo $layout->apply_layout();
get_footer();