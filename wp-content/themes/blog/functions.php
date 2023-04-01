<?php

function AddStyle()
{
    wp_enqueue_style('steller', get_template_directory_uri() . '/assets/css/steller.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js');
    wp_enqueue_script('bootstrap-affix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js');
    wp_enqueue_script('steller-js', get_template_directory_uri() . '/assets/js/steller.js');

//    <!-- core  -->
//<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
//<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
//<!-- bootstrap 3 affix -->
//<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
//
//<!-- steller js -->
//<script src="assets/js/steller.js"></script>
}

add_action('wp_enqueue_scripts', 'AddStyle');

add_theme_support('menus');