<?php
/** The main template file. **/
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header( 'store' ); ?>

<?php

$params = array(
    'posts_per_page' => 5, //No of product to be fetched
    'post_type' => 'product'
);

$wc_query = new WP_Query($params);
$wc_query = new WP_Query($params);
?>
<?php if ( $wc_query->have_posts() ) : ?>
    <?php while ( $wc_query->have_posts() ) : $wc_query->the_post(); ?>

        <?php

        global $product;

        // Ensure visibility
        if ( empty( $product ) || ! $product->is_visible() ) {
            return;
        }
        ?>

        <?php //var_dump($product); ?>
        <?php
        if (  rwmb_meta( 'left_coord' ) )
        {
            get_component('content-productbox',array('product' => $product ) );
        }

        ?>

    <?php endwhile; // end of the loop. ?>
    <?php wp_reset_postdata(); ?>
<?php else: ?>
    <p><?php _e( 'No Products' );?></p>
<?php endif; ?>


<div class="tms-cart">
    <div class="cheese-icon" data-modal="#modal-window-cart">
    <svg height="170" width="170">
        <circle cx="85" cy="60" r="65" stroke="white" stroke-width="3" fill="transparent" />
    </svg>
    </div>
    <!--<a class="cart-contents" href="<?php // echo wc_get_cart_url(); ?>" title="<?php //_e( 'View your shopping cart' ); ?>">
        <?php // echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
    </a> --> <?php // echo WC()->cart->get_cart_total();
    //   WC()->cart->get_cart_contents_count() ?>
    <span id="itemCount"><span><?php echo WC()->cart->get_cart_contents_count() ?></span></span>
    <div id="modal-window-cart" class="modal modal-cart">
        <a class="close">&times;</a>

        <?php if ( ! WC()->cart->is_empty() ) : ?>

            <ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>">
                <?php
                do_action( 'woocommerce_before_mini_cart_contents' );

                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                        $product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
                        $thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                        $product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                        <li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">
                            <?php
                            echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                '<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
                                esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
                                __( 'Remove this item', 'woocommerce' ),
                                esc_attr( $product_id ),
                                esc_attr( $cart_item_key ),
                                esc_attr( $_product->get_sku() )
                            ), $cart_item_key );
                            ?>
                            <?php if ( ! $_product->is_visible() ) : ?>
                                <?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . $product_name . '&nbsp;'; ?>
                            <?php else : ?>
                                <a href="<?php echo esc_url( $product_permalink ); ?>">
                                    <?php echo str_replace( array( 'http:', 'https:' ), '', $thumbnail ) . $product_name . '&nbsp;'; ?>
                                </a>
                            <?php endif; ?>
                            <?php echo WC()->cart->get_item_data( $cart_item ); ?>

                            <?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); ?>
                        </li>
                        <?php
                    }
                }

                do_action( 'woocommerce_mini_cart_contents' );
                ?>
            </ul>

            <p class="woocommerce-mini-cart__total total"><strong><?php _e( 'Subtotal', 'woocommerce' ); ?>:</strong> <?php echo WC()->cart->get_cart_subtotal(); ?></p>

            <?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

            <p class="woocommerce-mini-cart__buttons buttons"><?php do_action( 'woocommerce_widget_shopping_cart_buttons' ); ?></p>

        <?php else : ?>

            <p class="woocommerce-mini-cart__empty-message"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></p>

        <?php endif; ?>
    </div>
</div>

<!--
<div class="overlay">
    <h1>Full Screen HTML5 Video</h1>
    <div class="cart_totals <?php //echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">
    </div>
</div> -->
<div class="videoContainer">
    <video autoplay="" loop>
        <!--<source src="https://s3.amazonaws.com/activelab/files/trailer.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">

        <source src="https://s3.amazonaws.com/activelab/files/trailer.webm" type="video/webm; codecs=&quot;vp8, vorbis&quot;"> -->
        <source src="https://s3.eu-central-1.amazonaws.com/kaans-stream-store-videos/closed-loop-1.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
        <!--

        <source src="echo-hereweare.mp4" type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
        -->
        Video not supported.
    </video>
</div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
-->







<?php get_footer( 'store' ); ?>

