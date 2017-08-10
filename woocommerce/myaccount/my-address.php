<?php

/**

 * My Addresses

 * @author 		WooThemes

 * @package 	WooCommerce/Templates

 * @version     2.2.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



$customer_id = get_current_user_id();



if ( ! wc_ship_to_billing_address_only() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) {

	$page_title = apply_filters( 'woocommerce_my_account_my_address_title', __( 'My Addresses', 'woocommerce' ) );

	$get_addresses    = apply_filters( 'woocommerce_my_account_get_addresses', array(

		'billing' => __( 'Billing Address', 'woocommerce' ),

		//'shipping' => __( 'Shipping Address', 'woocommerce' )

	), $customer_id );

} else {

	$page_title = apply_filters( 'woocommerce_my_account_my_address_title', __( 'My Address', 'woocommerce' ) );

	$get_addresses    = apply_filters( 'woocommerce_my_account_get_addresses', array(

		'billing' =>  __( 'Billing Address', 'woocommerce' )

	), $customer_id );

}



$col = 1;

?>

<div class="access-payment">
							  <h3>To access the course when Logged in or Payment completed</h3>							  <p>
							  <a href=""><!-- Courses --><?php echo do_sortcode('[wp2moodle class="wp2moodle" target="_blank"]Courses[/wp2moodle]'); ?></a>
							  </p>	
							    </div>
<div class="address-div">
<?php //echo $page_title; ?>



<div class="myaccount_address">

	<?php //echo apply_filters( 'woocommerce_my_account_my_address_description', __( '', 'woocommerce' ) ); ?>

</p>



<?php //if ( ! wc_ship_to_billing_address_only() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) echo '<div class="col-sm-12">'; ?>



<?php foreach ( $get_addresses as $name => $title ) : ?>



	<div class="col-<?php echo ( ( $col = $col * -1 ) < 0 ) ? 1 : 2; ?> address">

		<header class="title">
<a href="<?php echo wc_get_endpoint_url( 'edit-address', $name ); ?>" class="edit acc-edit pull-right"><img src="<?php echo THEME_URI; ?>images/edit-profile.png" alt="" /><?php _e( 'Edit Profile', 'woocommerce' ); ?></a>

		</header>
           
		<address>

			<?php

				$address = apply_filters( 'woocommerce_my_account_my_address_formatted_address', array(

					'first_name'  => get_user_meta( $customer_id, $name . '_first_name', true ),

					'last_name'   => get_user_meta( $customer_id, $name . '_last_name', true ),

					'email'       => get_user_meta( $customer_id, $name . '_email', true ),

					'company'     => get_user_meta( $customer_id, $name . '_company', true ),

					'address_1'   => get_user_meta( $customer_id, $name . '_address_1', true ),

					'address_2'   => get_user_meta( $customer_id, $name . '_address_2', true ),

					'city'        => get_user_meta( $customer_id, $name . '_city', true ),

					'state'       => get_user_meta( $customer_id, $name . '_state', true ),

					'postcode'    => get_user_meta( $customer_id, $name . '_postcode', true ),

					'country'     => get_user_meta( $customer_id, $name . '_country', true )

				), $customer_id, $name );
                                
                                
                                



				$formatted_address = WC()->countries->get_formatted_address( $address );
                                
                              $pieces = explode(" ", $formatted_address);?>							  							  							  							  <div class="row"> 
<div class="col-lg-3 col-md-2">
	
</div>
<div class="col-lg-5 col-md-5">
                              
					   <h1 class="name-acc">
					    <?php echo get_user_meta( $customer_id, 'billing_first_name', true ).get_user_meta( $customer_id, 'billing_last_name', true );

					    ?>
					    
					    	
					    </h1>
					    </div>
					    </div>
					    <div class="row">  
<div class="col-lg-3 col-md-2"></div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                    <p class="acc-email"><img src="<?php echo THEME_URI; ?>images/msg-edit.png" alt="" /><?php echo get_user_meta( $customer_id, 'billing_email', true ) ?></p>
                    <p class="acc-phone"><img src="<?php echo THEME_URI; ?>images/call-edit.png" alt="" /><?php echo get_user_meta( $customer_id, 'billing_phone', true ) ?></p>
                    <p data-target="#password_change" class="chngepwd" data-toggle="modal"><img src="<?php echo THEME_URI; ?>images/edit-profile.png" alt="" />Change Password</p>
                   </div>
                           <div class="col-lg-4 col-md-4 col-sm-6">				   
                    <p class="address-accountedit">
                        <img src="<?php echo THEME_URI; ?>images/edit-loaction.png" alt="" />
                            <?php echo get_user_meta( $customer_id, 'billing_address_1', true ).'<br>'.get_user_meta( $customer_id, 'billing_city', true ).'<br>'.get_user_meta( $customer_id, 'billing_state', true ).'<br>'.get_user_meta( $customer_id, 'billing_postcode', true );?></p>
                    </div>
                    </div>
                    
		</address>

	</div>
<div class="clear"></div>


<?php endforeach; ?>



<?php if ( ! wc_ship_to_billing_address_only() && get_option( 'woocommerce_calc_shipping' ) !== 'no' ) echo '</div>'; ?>


<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".page-title h1").text("Reset Password");
	});
</script>
