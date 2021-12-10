<?php
/**
 * Plugin Name:       Contact-Form
 * Plugin URI:        https://imagegrafia.com/contact-form/plugins
 * Description:       Set Question with MCQ and time
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ashish Yadhuvanshi
 * Author URI:        https://imagegrafia.com/ashishyadhuvanshi
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       CONTACT-FORM-PLUGINS
 * Domain Path:       /languages
 */

/**
 * Activate the plugin.
 */


/**
 * Restrict direct access via root
 * http://localhost/pcsshala/wp-content/plugins/mcq-quiz/mcq-quiz.php
 */
if(!defined('ABSPATH')){
  die("Cannot access !!!");
}
/**
 * all the db related things script kept in below files
 */
require_once('contact-form-sql.php');

function contact_form_activate() { 
    create_contact_form_table();
    insert_contact_form_dump_data();
}
register_activation_hook( __FILE__, 'contact_form_activate' );

/**
 * Deactivation hook.
 */
function contact_form_deactivate() {
    drop_contact_form_table();
}
register_deactivation_hook( __FILE__, 'contact_form_deactivate' );


add_action('admin_menu', 'contact_form_data_menu');

function contact_form_data_menu() {
  add_menu_page('Contact-Form', 'Contact-Form', 'manage_options', 'contact-form-plugin' ,'view_contact_form_all','',15);
}
function view_contact_form_all() {
  include_once('contact-form-view.php');
  // echo "plugin Activated Contact form";
}
function contact_user_form() {
  include_once('contact-user-form.php');
}

//ADD SHORT_CODE
add_shortcode('contact_form_shortcode', 'view_contact_form_all');
add_shortcode('contact_user_form_shortcode', 'contact_user_form');
?>