<?php	// functions.php
if(function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'Menu Lateral',
        'before_widget' => '<ul id="menu">',
        'after_widget' => '</ul>',
        'before_title' => '<div id="titol_dreta">',
        'after_title' => '</div>',
    ));
}

if(function_exists('register_sidebar')){
    register_sidebar(array(
        'name' => 'El nostre estil',
        'before_widget' => '<div class="menuDreta">',
        'after_widget' => '</div>',
        'before_title' => '<span id="titol_submenu">',
        'after_title' => '</span>',
    ));
}





?>
