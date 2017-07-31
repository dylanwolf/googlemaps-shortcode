<?php
/*
Plugin Name: Google Maps Shortcode
Plugin URI: https://bitbucket.org/dylanwolf/googlemaps-shortcode
Description: Adds a shortcode for Google Maps embedding, to use instead of pasting in the entire iframe code provided by Google.
Version: 1.0
Author: Dylan Wolf
Author URI: http://www.dylanwolf.com/
*/

function googlemaps_shortcode($atts = [], $content = null, $tag = '')
{
        $id = $atts['mid'];
        $width = $atts['width'];
        if ($width == null)
                $width = 640;
        $height = $atts['height'];
        if ($height == null)
                $height = 480;

        return '<iframe src="https://www.google.com/maps/d/u/0/embed?mid='.$id.'" width="'.$width.'" height="'.$height.'"></iframe>';
}

function googlemaps_shortcode_init()
{
        add_shortcode('googlemap', 'googlemaps_shortcode');
}

add_action('init', 'googlemaps_shortcode_init');

?>
