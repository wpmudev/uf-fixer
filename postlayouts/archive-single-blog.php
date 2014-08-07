<?php

return array(
    'postLayout' => array(
        array('classes' => 'c24 clr', 'objects'=> array(array('slug' => 'featured_image', 'classes' => ' post-part c24'))),
        array('classes' => 'c24 clr', 'objects'=> array(
            array('slug' => 'date', 'classes' => ' post-part'),
        )),
        array('classes' => 'c24 clr', 'objects'=> array(
            array('classes' => 'post-part c1'),
            array('slug' => 'title', 'classes' => 'post-part c22'),
            array('classes' => 'post-part c1')
        )),
        array('classes' => 'c22 clr', 'objects'=> array(array('slug' => 'excerpt', 'classes' => ' post-part c24'))),

    ),
    'partOptions' => array(
        'featured_image' => array(
            'height' => 196
        ),
        "date" => array(
            "format" => "d M"
        ),
        "excerpt" => array(
            "limit" => 100
        )
    )
);