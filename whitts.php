<?php
/*
 Plugin Name: Whitts Gazebos
 Plugin URI: https://whittsgazebos.com/
 Description: Makes selling gazebos fun
 Version: 0.1
 Author: George Young, John Dee
 Author URI: https://generalchicken.net
 */

namespace Whitts;

require_once (plugin_dir_path(__FILE__). 'src/whitts/autoloader.php');

add_shortcode('gazebo', array(new JS_Selector, "outputJS"));

/* overide woo template with a plugin:
https://www.skyverge.com/blog/override-woocommerce-template-file-within-a-plugin/

how to add product directly with URL
https://www.lankawebsites.com/blog/woocommerce-add-product-directly-cart-using-url-link/
 */

// setup email
// redesign theme
// switch users
// allow multiple usernames to use same email
