<?php

//$product = $_REQUEST['product'];

?>
    <div class="markerbox" style="left:<?php echo rwmb_meta( 'left_coord' ); ?>px;
        top:<?php echo rwmb_meta( 'top_coord' ); ?>px;width:<?php echo rwmb_meta( 'width_coord' ); ?>px;height:<?php echo rwmb_meta( 'height_coord' ); ?>px;">
        <div class="cheese-icon" rel="js-item-<?php the_ID(); ?>" data-modal="#modal-window-<?php the_ID(); ?>" data-productid="<?php the_ID(); ?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" width="40" height="40" style="opacity: 0;"><defs><clipPath id="SVGID_1_"><rect x="6.2" y="6.2" width="27.5" height="27.5"></rect></clipPath></defs> <circle cx="20" cy="20" r="17" stroke="#FFFFFF" fill="none" stroke-dasharray="4" data-svg-origin="20 20" transform="matrix(0.7,0,0,0.7,6,6)" style="opacity: 1; transform-origin: 0px 0px 0px;"></circle> <path clip-path="url(#SVGID_2_)" fill="#5E3E23" d="M33.8,20c0,7.6-6.2,13.8-13.8,13.8S6.2,27.6,6.2,20S12.4,6.2,20,6.2S33.8,12.4,33.8,20"></path> <path clip-path="url(#SVGID_2_)" fill="#FFFFFF" d="M17.7,26.5C17.7,26.5,17.6,26.5,17.7,26.5c-3.2-0.5-5.5-1.8-6-3.5c0-0.1-0.1-0.1-0.1-0.2v-0.2
            c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3v-3.7c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3V22c0,0,0,0,0,0c0,0.1,0,0.2,0,0.3
            c0,0.1,0,0.2,0,0.3c0,0,0,0,0,0v0c0,0,0,0,0,0.1c0.3,1.4,2.4,2.6,5.1,3.1v-4c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3v4.3
            c0,0.1,0,0.2-0.1,0.2C17.8,26.4,17.7,26.5,17.7,26.5"></path> <path clip-path="url(#SVGID_2_)" fill="#FFFFFF" d="M22,26.5c-0.1,0-0.1,0-0.2-0.1c-0.1-0.1-0.1-0.1-0.1-0.2l-0.1-4.3c0-0.2,0.1-0.3,0.3-0.3
            c0.2,0,0.3,0.1,0.3,0.3l0.1,4c2.9-0.4,5.1-1.7,5.4-3.2c0-0.1,0-0.3,0-0.4c0-0.1,0-0.3,0-0.4c0,0,0,0,0-0.1v-3.6
            c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3v3.5c0,0.2,0.1,0.3,0.1,0.5c0,0.2,0,0.4-0.1,0.5C27.9,24.6,25.4,26.1,22,26.5
            C22.1,26.5,22.1,26.5,22,26.5"></path> <path clip-path="url(#SVGID_2_)" fill="#FFFFFF" d="M21.9,22.2c-0.1,0-0.2,0-0.2-0.1l-1.9-2.4L17.9,22c-0.1,0.1-0.2,0.1-0.3,0.1c-3.6-0.5-6-2.2-6-4.2
            c0-1.2,0.9-2.3,2.5-3.1c1.6-0.8,3.6-1.2,5.8-1.2c2.2,0,4.3,0.4,5.8,1.2c1.6,0.8,2.5,1.9,2.5,3.1C28.4,20,25.7,21.7,21.9,22.2
            C21.9,22.2,21.9,22.2,21.9,22.2 M19.8,18.9L19.8,18.9c0.1,0,0.2,0,0.2,0.1l2,2.6c3.3-0.4,5.7-1.9,5.7-3.6c0-1-0.8-1.9-2.2-2.6
            c-1.5-0.7-3.5-1.1-5.6-1.1c-2.1,0-4.1,0.4-5.6,1.1C13,16.1,12.2,17,12.2,18c0,1.6,2.2,3,5.3,3.5l2-2.5
            C19.6,18.9,19.7,18.9,19.8,18.9"></path> <path clip-path="url(#SVGID_2_)" fill="#FFFFFF" d="M22,26.5c-0.1,0-0.1,0-0.2-0.1l-2.1-1.8l-1.9,1.8c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1,0-0.2-0.2-0.2-0.3v-4.3
            c0-0.1,0-0.1,0.1-0.2l2.1-2.7c0.1-0.1,0.1-0.1,0.2-0.1c0.1,0,0.2,0,0.2,0.1l2.1,2.7c0,0.1,0.1,0.1,0.1,0.2l0.1,4.3
            c0,0.1-0.1,0.2-0.2,0.3C22.1,26.5,22.1,26.5,22,26.5 M19.7,23.9c0.1,0,0.1,0,0.2,0.1l1.8,1.5L21.6,22l-1.8-2.3L18,21.9v3.5l1.6-1.5
            C19.6,23.9,19.7,23.9,19.7,23.9"></path> <path clip-path="url(#SVGID_2_)" fill="#FFFFFF" d="M19.8,24.5c-0.2,0-0.3-0.1-0.3-0.3v-5c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3v5
            C20.1,24.4,20,24.5,19.8,24.5"></path></svg></div> <!----> <!---->
    </div>

    <!-- The Modal -->
    <div id="modal-window-<?php the_ID(); ?>" class="modal modal-side">
        <div class="modal-content">
            <div class="contact-form">
                <a class="close">&times;</a>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );?>
                <img style="max-width: 400px;"  src="<?php echo $image[0]; ?>" data-id="<?php the_ID(); ?>">
                <h2><?php the_title(); ?></h2><br>
            </div>
            <?php
            echo wc_get_stock_html( $product );

            if ( $product->is_in_stock() ) : ?>

                <form class="cart" method="post" enctype='multipart/form-data'>
                    <?php
                    /**
                     * @since 2.1.0.
                     */
                    do_action( 'woocommerce_before_add_to_cart_button' );

                    /**
                     * @since 3.0.0.
                     */
                    do_action( 'woocommerce_before_add_to_cart_quantity' );

                    woocommerce_quantity_input( array(
                        'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                        'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                        'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
                    ) );

                    /**
                     * @since 3.0.0.
                     */
                    do_action( 'woocommerce_after_add_to_cart_quantity' );
                    ?>

                    <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

                    <?php
                    /**
                     * @since 2.1.0.
                     */
                    do_action( 'woocommerce_after_add_to_cart_button' );
                    ?>
                </form>

            <?php endif; ?>
        </div>
    </div>
