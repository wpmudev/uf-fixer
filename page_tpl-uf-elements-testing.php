<?php
/**
 * Template Name: Uf Elements Testing Page template
 *
 * @package WordPress
 * @subpackage uf-elements-testing
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-uf-elements-testing'));

get_header();
echo $layout->apply_layout();
get_footer();