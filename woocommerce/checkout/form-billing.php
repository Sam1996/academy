<?php
/**
 * Checkout billing information form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */
?>
<div class="woocommerce-billing-fields">
	<?php if ( WC()->cart->ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>
<div class="section-hdg">                                                   
		<h1><?php _e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h1>
<div class="border-new"></div>            			                        			 </div>
	<?php else : ?>
<div class="section-hdg">
		<h3><?php _e( 'Billing Details', 'woocommerce' ); ?></h3>
<div class="border-new"></div>            			                        			 </div>
	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<?php foreach ( $checkout->checkout_fields['billing'] as $key => $field ) : ?>

		<?php woocommerce_form_field( $key, $field, $checkout->get_value( $key ) ); ?>

	<?php endforeach; ?>

	<?php do_action('woocommerce_after_checkout_billing_form', $checkout ); ?>

	<?php if ( ! is_user_logged_in() && $checkout->enable_signup ) : ?>

		<?php if ( $checkout->enable_guest_checkout ) : ?>

			<p class="form-row form-row-wide create-account">
				<input class="input-checkbox" id="createaccount" <?php checked( ( true === $checkout->get_value( 'createaccount' ) || ( true === apply_filters( 'woocommerce_create_account_default_checked', false ) ) ), true) ?> type="checkbox" name="createaccount" value="1" /> <label for="createaccount" class="checkbox"><?php _e( 'Create an account?', 'woocommerce' ); ?></label>
			</p>

		<?php endif; ?>

		<?php do_action( 'woocommerce_before_checkout_registration_form', $checkout ); ?>

		

		<?php do_action( 'woocommerce_after_checkout_registration_form', $checkout ); ?>

	<?php endif; ?>
</div>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("#account_username_field").css('display','none');
		jQuery("#account_password_field").addClass("form-row-last");
		jQuery('#account_password_field label').html('Create Your Password <abbr class="required" title="required">*</abbr>');
		jQuery("#billing_email_field #billing_email").attr("placeholder", "youremail@example.com");
		jQuery("#billing_email_field #billing_email").blur(function(){
			jQuery("#account_username_field #account_username").val(jQuery(this).val());
		});

	});
</script>