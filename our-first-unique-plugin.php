<?php

/*
 Plugin Name: Our Test Plugin
 Description: A truly amazing plugin
 Version: 1.0
 Author: Aman
 Author URI: https://www.udemy.com/user/aman-574/
*/

add_filter("the_content", "addToEndOfPost");

function addToEndOfPost($content)
{
    if (is_page() && is_main_query()) {
        return $content . "<p>My name is Aman.</p>";
    }

    return $content;
}
