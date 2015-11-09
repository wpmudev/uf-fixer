<?php $templates = array(); ob_start();

//***** title
?><h1 class="post_title">%title%</h1><?php
$templates["title"] = ob_get_contents();
ob_clean();

ob_end_clean();
return $templates;