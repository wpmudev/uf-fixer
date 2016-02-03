<?php

if (!(defined('DOING_AJAX') && DOING_AJAX)) require_once(dirname(__FILE__) . '/admin.php');
if (!is_admin()) require_once(dirname(__FILE__) . '/front.php');
