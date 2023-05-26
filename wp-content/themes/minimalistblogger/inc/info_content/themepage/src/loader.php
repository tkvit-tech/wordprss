<?php
defined("ABSPATH") || exit();


add_action('admin_menu', 'minimalistblogger_themepage');
function minimalistblogger_themepage()
{
    add_menu_page(__('Theme Settings', 'minimalistblogger'), __('Theme Settings', 'minimalistblogger'), 'manage_options', 'minimalistblogger_themepage', 'minimalistblogger_themepage_content', get_template_directory_uri() . '/inc/info_content/themepage/src/wp-icon-superb.svg', 61);
}

function minimalistblogger_themepage_content()
{
    require_once(trailingslashit(get_template_directory()) . 'inc/info_content/themepage/src/themepage.php');
}

function minimalistblogger_comparepage_css($hook)
{
    if ('toplevel_page_minimalistblogger_themepage' != $hook) {
        return;
    }
    wp_enqueue_style('minimalistblogger-custom-style', get_template_directory_uri() . '/inc/info_content/themepage/src/compare.css');
}
add_action('admin_enqueue_scripts', 'minimalistblogger_comparepage_css');

// Theme page end
