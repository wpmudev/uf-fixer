<?php
/**
 * Template Name: Mporderstatus Page template
 *
 * @package WordPress
 * @subpackage mporderstatus
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-mporderstatus'));

get_header();
echo $layout->apply_layout();
get_footer();