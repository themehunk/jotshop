<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'WooCommerce' ) ){
    return;
}
// product animation

 $wp_customize->add_setting('jot_shop_woo_product_animation', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'jot_shop_sanitize_select',
    ));
$wp_customize->add_control( 'jot_shop_woo_product_animation', array(
        'settings'=> 'jot_shop_woo_product_animation',
        'label'   => __('Product Image Hover Style','jot-shop'),
        'section' => 'jot-shop-woo-shop',
        'type'    => 'select',
        'choices'    => array(
        'none'            => __('None','jot-shop'),
        'zoom'            => __('Zoom','jot-shop'),
        'swap'            => __('Fade Swap','jot-shop'),
        'slide'           => __('Slide Swap','jot-shop'),        
        ),
    ));