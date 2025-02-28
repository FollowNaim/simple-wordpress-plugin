<?php
/*
Plugin Name: Simple Back To Top
Plugin URI: https://naim.vercel.app
Description: A simple plugin that adds a custom message to the footer of your site.
Version: 1.0
Author: Your Name
Author URI: https://naim.vercel.app
License: GPL2
*/

?>
<style>
.toTop{
        background-color:red;
        color:white;
        position:fixed;
        right:20px;
        bottom:20px
 }
</style>
<?php

function simple_plugin_footer_messages(){
    echo '<p style="text-align: center;">Thank you for visiting our website!</p>';
}

function simple_back_to_top(){
    echo '<button class="toTop">Top</button>';
}

add_action('wp_footer', 'simple_plugin_footer_messages');
add_action('wp_footer', 'simple_back_to_top');
add_action('wp_footer','back_to_top_script');

function back_to_top_script(){
    ?>
    <script>
    document.addEventListener('DOMContentLoaded',()=>{
        const d = document.querySelector('.toTop');
        d.addEventListener('click',()=>{
            window.scrollTo({top:0,behavior:'smooth'})
        })
    })
    </script>
    <?php
}

?>
