<?php
/**
 * Template Name: Cases Page template
 *
 * @package WordPress
 * @subpackage cases
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-cases'));

get_header();
echo $layout->apply_layout();
get_footer();