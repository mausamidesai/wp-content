<?php
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 0 );

function sampletheme_woocommerce_single_product_summary_subtitle() {
    echo '<b style="color: yellow;">Look at the amazing price!!</b>';
}
add_action( 'woocommerce_single_product_summary', 'sampletheme_woocommerce_single_product_summary_subtitle', 2 );

function sampletheme_woocommerce_before_add_to_cart_quantity_test() {
    echo '<p>TEST</p>';
}
add_action( 'woocommerce_before_add_to_cart_quantity', 'sampletheme_woocommerce_before_add_to_cart_quantity_test', 5 );