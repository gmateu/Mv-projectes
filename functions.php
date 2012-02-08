<?php	// functions.php
if(function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'Menu Lateral',
        'before_widget' => '<ul id="menu">',
        'after_widget' => '</ul>',
        'before_title' => '',
        'after_title' => '',
    ));
}

if(function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'Menu Dreta',
        'before_widget' => '<div class="menu_%1$s',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ));
}


?>
