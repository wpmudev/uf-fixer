<?php $templates = array(); ob_start();

//***** contents
?>    <div class="post_content">%contents%</div><?php
$templates["contents"] = ob_get_contents();
ob_clean();

//***** title
?><h1 class="post_title">%title%</h1><?php
$templates["title"] = ob_get_contents();
ob_clean();

//***** author
?><span class="post_author_by"><?php _e('by', 'fixer'); ?></span> <a class="post_author" href="%author_url%">%author%</a><?php
$templates["author"] = ob_get_contents();
ob_clean();

ob_end_clean();
return $templates;