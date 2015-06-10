<?php
/**
 * Template Name: Coverage Area Inner Page template
 *
 * @package WordPress
 * @subpackage coverage-area-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-coverage-area-inner'));

get_header();
echo $layout->apply_layout();
get_footer();