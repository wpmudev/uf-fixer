<?php
/**
 * Template Name: Blog Page template
 *
 * @package WordPress
 * @subpackage blog
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-blog'));

get_header();
echo $layout->apply_layout();
get_footer();