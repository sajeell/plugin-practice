
<?php

/**
 * @package First_Plugin
 * @version 1.0.0
 */
/*
Plugin Name: First Plugin
Plugin URI: https://github.com/sajeell/plugin-practice
Description: This is just for learning purposes
Author: Sajeel Ahmad
Version: 1.0.0
Author URI: https://github.com/sajeell
*/

/*
This is a free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
This is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with it. If not, see https://github.com/sajeel/plugin-practice.
*/

/**
 * Register the "book" custom post type
 */
function pluginprefix_setup_post_type()
{
    echo "Done";
}
add_action('init', 'pluginprefix_setup_post_type');


/**
 * Activate the plugin.
 */
function pluginprefix_activate()
{
    // Trigger our function that registers the custom post type plugin.
    pluginprefix_setup_post_type();
}
register_activation_hook(__FILE__, 'pluginprefix_activate');


/**
 * Deactivation hook.
 */
function pluginprefix_deactivate()
{
    echo "Deactivated";
}
register_deactivation_hook(__FILE__, 'pluginprefix_deactivate');

function pluginprefix_uninstall()
{
    echo "hello yo boi is uninstalled";
}

register_uninstall_hook(__FILE__, 'pluginprefix_uninstall');
