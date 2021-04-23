<?php

function register_scripts()
{
   Wp_enqueue_script('custom-style', get_stylesheet_uri());
}
add_action('custom-style', register_scripts());

?>