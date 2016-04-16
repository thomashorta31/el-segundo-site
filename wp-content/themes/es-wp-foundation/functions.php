<?php
function register_my_styles(){
  wp_register_style('foundation', get_template_directory_uri()."/css/foundation.min.css",array(),'5.1.1','screen');
  wp_register_style('main', get_template_directory_uri()."/css/app.css",array(),'2.7','all');

  wp_enqueue_style(array('foundation','main'));
}

add_action('wp_enqueue_scripts', 'register_my_styles');

function register_my_scripts() {
  wp_register_script('jquery', "/js/vendor/jquery.js", array(),'2.1.0',false);
  wp_register_script('what-input-js', "/js/vendor/what-input.js", array(),'2.1.0',false);
  wp_register_script('foundation-js', "/js/vendor/foundation.min.js", array(),'2.1.0',false);
  wp_register_script('app-js', "/js/app.js", array(),'2.1.0',false);

  wp_enqueue_script(array('jquery','what-input-js','foundation-js','app-js'));
}
add_action('wp_enqueue_scripts', 'register_my_scripts');

?>
