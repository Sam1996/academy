<?php
/**
 * Order details
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$order = wc_get_order( $order_id );

?>
<h2><?php _e( 'YOUR ORDER', 'woocommerce' ); ?></h2>
<table class="shop_table order_details view-table-order">
	<thead>
		<tr>			<th class="product-thumbnail">&nbsp;</th>
			<th class="product-name"><?php _e( 'Product', 'woocommerce' ); ?></th>
			<th class="product-quantity"><?php _e( 'Quantity', 'woocommerce' ); ?></th>
			<th class="product-total"><?php _e( 'Total', 'woocommerce' ); ?></th>
			<th class="product-enroll">Course option</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ( sizeof( $order->get_items() ) > 0 ) {

			foreach( $order->get_items() as $item_id => $item ) {
				$_product  = apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item );
				$item_meta = new WC_Order_Item_Meta( $item['item_meta'], $_product );

				if ( apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
					?>
					<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'order_item', $item, $order ) ); ?>"><td class="product-thumbnail">															</td>
						<td class="product-name">
							<?php
								if ( $_product && ! $_product->is_visible() ) {
									echo apply_filters( 'woocommerce_order_item_name', $item['name'], $item );
								} else {
									echo apply_filters( 'woocommerce_order_item_name', sprintf( '<a href="%s">%s</a>', get_permalink( $item['product_id'] ), $item['name'] ), $item );
								}

								

								// Allow other plugins to add additional product information here
								do_action('woocommerce_order_item_meta_start', $item_id, $item, $order );

								$item_meta->display();

								if ( $_product && $_product->exists() && $_product->is_downloadable() && $order->is_download_permitted() ) {

									$download_files = $order->get_item_downloads( $item );
									$i              = 0;
									$links          = array();

									foreach ( $download_files as $download_id => $file ) {
										$i++;

										$links[] = '<small><a href="' . esc_url( $file['download_url'] ) . '">' . sprintf( __( 'Download file%s', 'woocommerce' ), ( count( $download_files ) > 1 ? ' ' . $i . ': ' : ': ' ) ) . esc_html( $file['name'] ) . '</a></small>';
									}

									echo '<br/>' . implode( '<br/>', $links );
								}

								// Allow other plugins to add additional product information here
								do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order );
							?>
						</td>
						
						<td class="quantity">
						<?php echo apply_filters( 'woocommerce_order_item_quantity_html', ' <strong class="product-quantity">' . sprintf( '%s', $item['qty'] ) . '</strong>', $item );?>	
						</td>
						<td class="product-total">
							<?php echo $order->get_formatted_line_subtotal( $item ); ?>
						</td>
						<td>
							<div class="eb_join_button">
								<form method="post">
                                	<input value="8491" name="course_id" type="hidden">
                                	<input value="Take this Course" name="course_join" class="wdm-btn" id="wdm-btn" type="submit">
                            	</form>
                            </div>
						</td>
					</tr>
					<?php
				}

				if ( $order->has_status( array( 'completed', 'processing' ) ) && ( $purchase_note = get_post_meta( $_product->id, '_purchase_note', true ) ) ) {
					?>
					<tr class="product-purchase-note">
						<td colspan="3"><?php echo wpautop( do_shortcode( wp_kses_post( $purchase_note ) ) ); ?></td>
					</tr>
					<?php
				}
			}
		}

		do_action( 'woocommerce_order_items_table', $order );
		?>
	</tbody>
	
</table><div class="row">	<div class="col-sm-12 col-lg-8 col-md-5 cart-tble-i">				<?php if ( WC()->cart->get_cart_tax() ) : ?>			<p>			<small><?php $estimated_text = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ? sprintf( ' ' . __( ' (taxes estimated for %s)', 'woocommerce' ), WC()->countries->estimated_for_prefix() . __( WC()->countries->countries[ WC()->countries->get_base_country() ], 'woocommerce' ) )				: '';			printf( __( 'Note: Shipping and taxes are estimated%s and will be updated during checkout based on your billing and shipping information.', 'woocommerce' ), $estimated_text );		?>			</small>			</p>			<?php endif; ?>		<?php do_action( 'woocommerce_after_cart_table' ); ?>		</div>		<div class="col-sm-12 col-lg-4 col-md-7 carrt-totl">		<div class="cart_totals <?php if ( WC()->customer->has_calculated_shipping() ) echo 'calculated_shipping'; ?>">	<?php do_action( 'woocommerce_before_cart_totals' ); ?>			<h2>			<?php// _e( 'Cart Totals', 'woocommerce' ); ?>			</h2>			<div class="table-responsive">				<table cellspacing="0">					<tr class="cart-subtotal">						<th>						<?php _e( 'Subtotal', 'woocommerce' ); ?>						</th>							<td>							<?php wc_cart_totals_subtotal_html(); ?>							</td>					</tr>						<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>					<tr class="cart-discount coupon-<?php echo esc_attr( $code ); ?>">						<th>						<?php wc_cart_totals_coupon_label( $coupon ); ?>							</th>						<td>						<?php wc_cart_totals_coupon_html( $coupon ); ?>						</td>					</tr>					<?php endforeach; ?>					<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>			<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>						<?php wc_cart_totals_shipping_html(); ?>						<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>							<?php elseif ( WC()->cart->needs_shipping() ) : ?>						<tr class="shipping">							<th>							<?php _e( 'Shipping', 'woocommerce' ); ?>							</th>							<td>							<?php woocommerce_shipping_calculator(); ?>							</td>						</tr>						<?php endif; ?>						<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>						<tr class="fee">							<th>							<?php echo esc_html( $fee->name ); ?>							</th>							<td>							<?php wc_cart_totals_fee_html( $fee ); ?>							</td>						</tr>							<?php endforeach; ?>							<?php if ( WC()->cart->tax_display_cart == 'excl' ) : ?>								<?php if ( get_option( 'woocommerce_tax_total_display' ) == 'itemized' ) : ?>							<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>							<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">			<th>									<?php echo esc_html( $tax->label ); ?>								</th>								<td>								<?php echo wp_kses_post( $tax->formatted_amount ); ?>								</td>							</tr>							<?php endforeach; ?>							<?php else : ?>							<tr class="tax-total">								<th>								<?php echo esc_html( WC()->countries->tax_or_vat() ); ?>								</th>								<td>								<?php wc_cart_totals_taxes_total_html(); ?>								</td>							</tr>							<?php endif; ?>							<?php endif; ?>								<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>								<tr class="order-total">									<th>									<?php _e( 'Total', 'woocommerce' ); ?>									</th>									<td>									<?php  ?>									</td>								</tr>								<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>								</table>								</div>																<?php do_action( 'woocommerce_after_cart_totals' ); ?>								</div>								</div></div>
<?php do_action( 'woocommerce_order_details_after_order_table', $order ); ?>
</div><div class="customer-deatil-order">
<header>
	<h2><?php _e( 'Customer details', 'woocommerce' ); ?></h2>
</header><div class="row"><div class="col-lg-3 col-md-2"> </div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) : ?><div class="col2-set addresses">	<div class="col-1"><?php endif; ?>		<header class="title">			<h3 class="heading-ordervw"><img src="<?php echo THEME_URI; ?>images/edit-loaction.png" alt="" /><?php echo get_user_meta( $customer_id, 'billing_email', true ) ?><?php _e( 'Billing Address', 'woocommerce' ); ?></h3>		</header>		<address class="left-spacing-address">			<?php				if ( ! $order->get_formatted_billing_address() ) {					_e( 'N/A', 'woocommerce' );				} else {					echo $order->get_formatted_billing_address();				}			?>		</address><?php if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) : ?>	</div><!-- /.col-1 -->	<div class="col-2">		<header class="title">			<h3><?php _e( 'Shipping Address', 'woocommerce' ); ?></h3>		</header>		<address>			<?php				if ( ! $order->get_formatted_shipping_address() ) {					_e( 'N/A', 'woocommerce' );				} else {					echo $order->get_formatted_shipping_address();				}			?>		</address>	</div><!-- /.col-2 --></div><!-- /.col2-set --><?php endif; ?></div><div class="col-lg-4 col-md-4 col-sm-6">				 <?php if ( $order->billing_email ) {		echo '<h3 class="heading-ordervw">'.'<img src="'.THEME_URI.'images/msg-edit.png" alt="" />' . __( 'Billing Mail Address', 'woocommerce' ) . '</h3><p class="left-spacing-address">'. $order->billing_email . '</p>';	}		if ( $order->billing_phone ) {		echo '<h3 class="heading-ordervw">'.'<img src="'.THEME_URI.'images/call-edit.png" alt="" />' . __( 'Contact Number', 'woocommerce' ) . '</h3><p class="left-spacing-address">'. $order->billing_phone . '</p>';	}		do_action( 'woocommerce_order_details_after_customer_details', $order );	?></div></div>
<table class="shop_table shop_table_responsive customer_details">
<?php
	/*if ( $order->billing_email ) {
		echo '<tr><th>' . __( 'Email:', 'woocommerce' ) . '</th><td data-title="' . __( 'Email', 'woocommerce' ) . '">' . $order->billing_email . '</td></tr>';
	}

	if ( $order->billing_phone ) {
		echo '<tr><th>' . __( 'Telephone:', 'woocommerce' ) . '</th><td data-title="' . __( 'Telephone', 'woocommerce' ) . '">' . $order->billing_phone . '</td></tr>';
	}

	// Additional customer details hook
	do_action( 'woocommerce_order_details_after_customer_details', $order );*/
?>
</table>



<div class="clear"></div>
