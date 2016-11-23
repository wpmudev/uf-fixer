<?php
/**
 * Template Name: Mpcart Page template
 *
 * @package WordPress
 * @subpackage mpcart
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-mpcart'));

get_header();
echo $layout->apply_layout();
get_footer();