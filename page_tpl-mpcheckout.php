<?php
/**
 * Template Name: Mpcheckout Page template
 *
 * @package WordPress
 * @subpackage mpcheckout
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-mpcheckout'));

get_header();
echo $layout->apply_layout();
get_footer();