<?php
$lightbox = upfront_create_region(
			array(
"name" => "lightbox", 
"title" => "lightbox Region", 
"type" => "", 
"scope" => "", 
"container" => "lightbox", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"breakpoint" => array(
	"tablet" => array(
		"edited" => false
		), 
	"mobile" => array(
		"edited" => false
		)
	)
)
			);

$regions->add($lightbox);

