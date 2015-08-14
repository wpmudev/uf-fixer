<?php $templates = array(); ob_start();

//***** contents
?>    <div class="post_content">%contents%</div><?php
$templates["contents"] = ob_get_contents();
ob_clean();

//***** title
?><h1 class="post_title">%title%</h1><?php
$templates["title"] = ob_get_contents();
ob_clean();

ob_end_clean();
return $templates;