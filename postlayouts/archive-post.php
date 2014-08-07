<?php

return array(
    'postLayout' => array(
        array('classes' => 'c24 clr', 'objects'=> array(array('slug' => 'title', 'classes' => 'post-part c24'))),
//        array('classes' => 'c12 clr', 'objects'=> array(array('slug' => 'featured_image', 'classes' => ' post-part c24'))),
//        array('classes' => 'c12 clr', 'objects'=> array(array('slug' => 'contents', 'classes' => ' post-part c24'))),
        array('classes' => 'c24 clr', 'objects'=> array(array('slug' => 'excerpt', 'classes' => ' post-part c24'))),
        array('classes' => 'c24 clr', 'objects'=> array(
            array('slug' => 'date', 'classes' => ' post-part'),
            array('slug' => 'author', 'classes' => ' post-part')
        )),
//        array('classes' => 'c6 cl', 'objects'=> array(array('slug' => 'author', 'classes' => ' post-part c24')))
    ),
//    'partOptions' => array('featured_image' => array('height' => 100))
);