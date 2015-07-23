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
		"edited" => false, 
		"col" => 24
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 24
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"col" => 24
		)
	)
)
			);

$regions->add($lightbox);

