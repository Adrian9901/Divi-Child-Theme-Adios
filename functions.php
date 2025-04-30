<?php
function dt_enqueue_styles() {
    // Styles are intentionally not enqueued
}
add_action( 'wp_enqueue_scripts', 'dt_enqueue_styles' );
