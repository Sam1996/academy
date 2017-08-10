<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".page-title h1").text("Login");
		/*jQuery("#reg_email").keyup("Login");*/
		
		jQuery('#reg_email').blur(function(e) {
			jQuery('#reg_username').val(jQuery(this).val());
		});
	});
</script>


<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
<div class="col2-set" id="customer_login">

	<div class="col-1">

<?php endif; ?>

	<?php if( !isset( $_GET['action']) && $_GET['action'] != "register"){ ?>
		<h2><?php _e( 'Login', 'woocommerce' ); ?></h2>

		<form method="post" class="login">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="form-row form-row-wide">
				<label for="username"><?php _e( 'Email Address as Username', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input type="text" class="input-text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
			</p>
			<p class="form-row form-row-wide">
				<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input class="input-text" type="password" name="password" id="password" />
			</p>
			<p><?php _e( '<b>Please click on the login button below. Do not press enter key.</b>', 'woocommerce' ); ?></p>
			
			<?php do_action( 'woocommerce_login_form' ); ?>

		

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login' ); ?>
				<input type="submit" class="button" name="login" id="login_submit" value="<?php _e( 'Login', 'woocommerce' ); ?>" />
				<br></br>
				<label for="rememberme" class="inline">
					<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
				</label>
			</p>
			<p class="lost_password">
				<a href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
			</p>
			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

	<?php } ?>
		<script>
				// jQuery('#password').keypress(function (e) {

 			// 	var key = e.which;
 			// 	if(key == 13)  // the enter key code
  		// 			{

    // 					jQuery('#login_submit').click();
    // 				return false;  
  		// 			}
				// });
				jQuery('#password').keypress(function (e)
				 {
 					var key = e.which;
 					if(key == 13)  // the enter key code
  				{
    				jQuery('input[name = login]').click();
    				return false;  
  				}
			}); 
			</script>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
	</div>
	<?php if( !isset( $_GET['action']) && $_GET['action'] != "register"){ ?>
	<div class="col-2">
		<div class="new-reg-box">
			<h4>If you are a new user kindly click on the Create a New Account button below</h4> 
			<p class="new_register">
				<a href="<?php echo get_permalink(woocommerce_get_page_id('myaccount'));?>?action=register"> Create a New Account </a>
			</p>
		</div>
	</div>
	<?php } ?>

	<?php if( isset( $_GET['action']) && $_GET['action'] == "register"){ ?>

	<div class="col-1">

		<h2><?php _e( 'Register if you are a new user da', 'woocommerce' ); ?></h2>

		<form method="post" class="register">

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="form-row form-row-wide" style="display:none">
					<label for="reg_username"><?php _e( 'Email Address as Username', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
				</p>

			<?php endif; ?>

			<p class="form-row form-row-wide">
				<label for="reg_email"><?php _e( 'Email Address as Username', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" required />
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="form-row form-row-wide">
					<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
					<input type="password" class="input-text" name="password" id="reg_password" required />
				</p>

			<?php endif; ?>
			
			<!-- edited by aatash-->		
			<p class="form-row form-row-first">
	            <label for="billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
	            <input type="text" class="input-text" name="billing_first_name" id="billing_first_name" value="<?php echo esc_attr( $user->billing_first_name ); ?>" />
        	</p>
			<!-- edited by aatash-->
			<p class="form-row form-row-last">
	            <label for="billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
	            <input type="text" class="input-text" name="billing_last_name" id="billing_last_name" value="<?php echo esc_attr( $user->billing_last_name ); ?>" />
        	</p>

			<p class="form-row form-row-wide">
			    <label for="reg_billing_phone"><?php _e( 'Phone', 'woocommerce' ); ?> <span class="required">*</span></label>
			    <input type="text" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" maxlength="13" required />
		    </p>

		    <p class="form-row form-row-wide">
			    <label for="reg_billing_city"><?php _e( 'City', 'woocommerce' ); ?> <span class="required">*</span></label>
			    <input type="text" class="input-text" name="billing_city" id="reg_billing_city" value="<?php if ( ! empty( $_POST['billing_city'] ) ) esc_attr_e( $_POST['billing_city'] ); ?>" required />
		    </p>

		    <div class="clear"></div>

		    <p class="form-row form-row-wide">
			    <label for="reg_billing_country"><?php _e( 'Country', 'woocommerce' ); ?> <span class="required">*</span></label>
			    <input type="text" class="input-text" name="billing_country" id="reg_billing_country" value="<?php if ( ! empty( $_POST['billing_country'] ) ) esc_attr_e( $_POST['billing_country'] ); ?>" required />
		    </p>

			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

			<?php do_action( 'woocommerce_register_form' ); ?>
			<?php do_action( 'register_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-register' ); ?>
				<input type="submit" class="button" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>" />
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

	<div class="col-2">

		<div class="new-reg-box">
			<h4>If you already have an account kindly click on the Sign in button</h4>
			<p class="new_register">
				<a href="<?php echo get_permalink(woocommerce_get_page_id('myaccount'));?>"> Sign in </a>
			</p>
		</div>
	
	</div>

	<?php } ?>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>