<?php
/**
 * Show messages
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ){
	return;
}

?>

<?php foreach ( $messages as $message ) : ?>
	<div class="woocommerce-message">
		<?php echo wp_kses_post( $message ); ?>
		<a href="javascript:void(0)" id="remove-times" class="text-success pull-right"><b style="font-weight:bolder;">&times;</b></a>
	</div>
<?php endforeach; ?>
