<?php
if (!function_exists('generate_slug')) {
    function generate_slug($string)
    {
        // Ensure the url_helper is loaded
        $CI = &get_instance();
        $CI->load->helper('url');

        // Use the existing url_title function
        $slug = url_title($string, '-', true);
        return $slug;
    }
}
