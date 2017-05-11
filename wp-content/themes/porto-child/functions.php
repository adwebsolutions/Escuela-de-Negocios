<?php

add_action('wp_enqueue_scripts', 'porto_child_css', 1001);
 
// Load CSS
function porto_child_css() {
    // porto child theme styles
    wp_deregister_style( 'styles-child' );
    wp_register_style( 'styles-child', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'styles-child' );

    if (is_rtl()) {
        wp_deregister_style( 'styles-child-rtl' );
        wp_register_style( 'styles-child-rtl', get_stylesheet_directory_uri() . '/style_rtl.css' );
        wp_enqueue_style( 'styles-child-rtl' );
    }
}
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

function woocommerce_template_single_description(){
    echo '<div class="product-desc">';
    the_content();
    echo '</div>';
}
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_description', 20 );

function woocommerce_template_single_attr(){
    global $product;
    do_action( 'woocommerce_product_additional_information', $product );
}

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_attr', 24 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price',10 );

add_filter('woocommerce_product_tabs', 'woocommerce_remove_reviews_tab', 98);
function woocommerce_remove_reviews_tab($tabs) {
    unset($tabs);
}
/*add_filter('woocommerce_get_price_html', 'woocommerce_get_price_html_empty', 100, 2);
function woocommerce_get_price_html_empty($price, $product) {
    return '';
}*/
add_filter( 'woocommerce_product_single_add_to_cart_text', 'custom_button_text' , $this );
function custom_button_text (){
    return __( 'Comprar Curso', 'porto' );
}

function category_widgets_init() {
    register_sidebar( array(
        'name'          => 'Category Filter sidebar',
        'id'            => 'cust_cat_shop',
        'before_widget' => '<aside id="%1$s" class="widget %2$s cat-filter">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'category_widgets_init' );

function custom_category_filter(){
    if ( is_active_sidebar( 'cust_cat_shop' ) ) :
        dynamic_sidebar( 'cust_cat_shop' );
    endif;
}
add_action ('woocommerce_before_main_content','custom_category_filter',5);
//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );