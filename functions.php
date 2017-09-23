<?php

add_theme_support( 'custom-logo' );

    function planb_the_custom_logo() {
        if ( ! function_exists( 'the_custom_logo' ) ) {
            return;
        } else {
            the_custom_logo();
        }
    }

?>