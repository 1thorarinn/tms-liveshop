<?php

// https://www.kaansstreamstore.nl/en
// ar stuff
// // https://medium.com/arjs/augmented-reality-in-10-lines-of-html-4e193ea9fdbf

// ck_b5610e27512d8e0fc8adb9eb408fb94f13aa7d7f
// cs_7548b1bd67b5679bfa4e340ccd0e51baf8124fcc
// http://10.41.114.29:3000/


// react https://snipcart.com/blog/reactjs-wordpress-rest-api-example

// If this file is called directly, fuck off.
if ( ! defined( 'WPINC' ) ) {
    die;
}

require 'vendor/autoload.php';



function theme_js() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    //wp_enqueue_script('jquery');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', '' );
     wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array( "jquery", "wp-util" ), '1.0', true );


    //localize data for script
    wp_localize_script( 'custom', 'POST_SUBMITTER', array(
            'root' => esc_url_raw( rest_url() ),
            'nonce' => wp_create_nonce( 'wp_rest' ),
            'success' => __( 'Thanks for your submission!', 'your-text-domain' ),
            'failure' => __( 'Your submission could not be processed.', 'your-text-domain' ),
            'current_user_id' => get_current_user_id()
        )
    );


}

add_action('wp_enqueue_scripts', 'theme_js');





add_filter( 'rwmb_meta_boxes', 'product_coordinates_meta_boxes' );
function product_coordinates_meta_boxes( $meta_boxes )
{
    $meta_boxes[] = array(
        'title'      => __( 'Extra Product Info', 'tms' ),
        'post_types' => 'product',
        'fields'     => array(
            array(
                'id'       => 'left_coord',
                'name'     => __( 'Left', 'tms' ),
                'type'     => 'number',
            ),
            array(
                'id'       => 'top_coord',
                'name'     => __( 'Top', 'tms' ),
                'type'     => 'number',
            ),
            array(
                'id'       => 'width_coord',
                'name'     => __( 'Width', 'tms' ),
                'type'     => 'number',
            ),
            array(
                'id'       => 'height_coord',
                'name'     => __( 'Height', 'tms' ),
                'type'     => 'number',
            ),
        )
    );
    return $meta_boxes;
}



// https://css-tricks.com/snippets/wordpress/remove-the-28px-push-down-from-the-admin-bar/
add_action('get_header', 'my_filter_head');
function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}




/**
 * Load a component into a template while supplying data.
 *
 * @param string $slug The slug name for the generic template.
 * @param array $params An associated array of data that will be extracted into the templates scope
 * @param bool $output Whether to output component or return as string.
 * @return string
 */
function get_component($slug, array $params = array(), $output = true) {
    if(!$output) ob_start();
    if (!$template_file = locate_template("components/{$slug}.php", false, false)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $template_file), E_USER_ERROR);
    }
    extract($params, EXTR_SKIP);
    require($template_file);
    if(!$output) return ob_get_clean();
}


/*
add_action('init', 'handle_preflight');

function handle_preflight() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: Origin, Content-Type, Accept, Basic");

    if('OPTIONS' == $_SERVER['REQUEST_METHOD']) {
        status_header(200);
        exit();
    }
} */



// http://wp-liveshop.test/wp-json/restos/v2/all
add_action( 'rest_api_init',  'register_endpoints' );

function register_endpoints() {
    register_rest_route( 'liveshop/v2', '/questions', array(
        'methods' => 'GET',
        'callback' => 'get_all'
        //    'permission_callback' => function () { return current_user_can( 'edit_others_posts' );}
    ) );

}



function get_all($data){
    $form_id = RGFormsModel::get_form_id('Spurning');

    //$form_id = 1;



    $entries  = GFAPI::get_entries( $form_id );


    // \tms_log("TEST");
    //return array('test' => dafad); //
    return new WP_REST_Response($entries, 200);
}