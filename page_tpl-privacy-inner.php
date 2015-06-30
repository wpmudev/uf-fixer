<?php
/**
 * Template Name: Privacy Inner Page template
 *
 * @package WordPress
 * @subpackage privacy-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-privacy-inner'));

get_header();
echo $layout->apply_layout();
get_footer();