<?php
/**
 * Template Name: Service Fence Inner Page template
 *
 * @package WordPress
 * @subpackage service-fence-inner
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-service-fence-inner'));

get_header();
echo $layout->apply_layout();
get_footer();