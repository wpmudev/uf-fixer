<?php $templates = array(); ob_start();
//*** CONTENTS
?>
    <div class="post_content">%contents%</div><?php
$templates['contents'] = ob_get_contents();
ob_clean();
return $templates;