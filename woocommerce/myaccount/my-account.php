<?php
/**
 * My Account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices(); ?>


	<?php
//	printf(
//		__( 'Hello <strong>%1$s</strong> (<a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
//		$current_user->display_name,
//		wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
//	);

	//printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ),
		//wc_customer_edit_account_url()
	//);
	?>


<?php do_action( 'woocommerce_before_my_account' ); ?>
<!-- Button trigger modal -->

<?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php wc_get_template( 'myaccount/my-downloads.php' ); ?>

<?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

<?php do_action( 'woocommerce_after_my_account' ); ?>


