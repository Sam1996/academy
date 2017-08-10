<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p><?php
			if ( is_user_logged_in() )
				_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p>
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

			<!-- Mihir moodleofindia for integrating and enrolling into this course sku inside moodle -->
				<!-- Mihir moodle enrlment should happen here... -->
		<?php
		global $current_user;
		get_currentuserinfo();
		
		// first find the order_product_id so that we know the total number of products present in this order
		// open the connection
		$dbuser2="edvancer_user";
		$dbpass2="OXiAw@33Z[AN";
		$dbname2="edvancer_wri";  //the name of the database
		$chandle2 = mysql_connect("localhost", $dbuser2, $dbpass2) or die("Connection Failure to Database");
		mysql_select_db($dbname2, $chandle2) or die ($dbname2 . " Database not found. " . $dbuser2) ;
		
		//var_dump($current_user);
		$useridm = $order->user_id;
		$orderidm = $order->id;
		//var_dump($useridm);
		
		// find the email address of this user in wp
		$findemailm = mysql_fetch_array(mysql_query("SELECT user_email FROM wpe_users WHERE id = $useridm ", $chandle2));
		$findemailmr = $findemailm['user_email'];
		
		// now find if this user is present in moodle user table and get the userid
		$findemailmoodle = mysql_fetch_array(mysql_query("SELECT id FROM mdl_user WHERE email = '$current_user->user_email' ", $chandle2));
		$findemailmoodlerid = $findemailmoodle['id'];  // this is moodle userid
		//var_dump($findemailmoodlerid);
		if ($findemailmoodlerid and $findemailmoodlerid !== null) { // means id is present then we should not create any new user
		
		} else {
		
		
			$muser = new stdClass();
			$muser->auth = 'manual';
			$muser->confirmed = 1;
			$muser->policyagreed = 1;
			$muser->mnethostid = 1;
			$muser->username = $current_user->user_login;
			$muser->firstname = $current_user->user_firstname;		// first name
			$muser->lastname = $current_user->user_lastname;		// last name
			$muser->email = $current_user->user_email;		// email
			//"username" => $current_user->user_login,			// username
			$muser->password = md5($current_user->user_pass);		// hash of password (we don't know/care about the raw password)
			$muser->idnumber =  $current_user->ID;		// int id of user in this db (for user matching on services, etc)
			$muser->lang =  'en';		// int id of user in this db (for user matching on services, etc)
			$muser->country =  'India';		// int id of user in this db (for user matching on services, etc)
			$muser->city =  ' ';	// int id of user in this db (for user matching on services, etc)
			
			// create the user insert the record in mdl_user table
			$newmusersql= "INSERT INTO mdl_user (auth, confirmed, policyagreed, mnethostid, username, firstname,lastname, email, password,idnumber,lang, country,city) 
			VALUES ('$muser->auth', $muser->confirmed, $muser->policyagreed, $muser->mnethostid, '$muser->username',
			'$muser->firstname', '$muser->lastname','$muser->email', '$muser->password','$muser->idnumber','$muser->lang' ,'$muser->country','$muser->city')";
	  
			$newmuserresult=mysql_query($newmusersql,$chandle2) or die("Failed Query of " . $newmusersql);
		}
		
		// now enrol him in the sku
		// find the item id from orderid 
		//$finditemid = mysql_query("SELECT order_item_id FROM wp_woocommerce_order_items WHERE order_id = $orderidm ", $chandle2);
		$finditemid = mysql_query("SELECT order_item_id FROM wpe_woocommerce_order_items WHERE order_id = $orderidm and order_item_type = 'line_item' ", $chandle2);
		//$finditemidr = $finditemid['order_item_id'];
			while ($finditemidr = mysql_fetch_array($finditemid))
			{
				$orderitemid = $finditemidr['order_item_id'];
				// now find the product id which is post id
				$findproductwp = mysql_fetch_array(mysql_query("SELECT meta_value FROM wpe_woocommerce_order_itemmeta 
				WHERE order_item_id = $orderitemid and meta_key = '_product_id' ", $chandle2));
				
				$findproductwpr = $findproductwp['meta_value'];  // this is post id
				
				// now find sku for this post
				$findskupostwp = mysql_fetch_array(mysql_query("SELECT meta_value FROM wpe_postmeta 
				WHERE post_id = $findproductwpr and meta_key = '_sku' ", $chandle2));
				
				$findskupostwpr = $findskupostwp['meta_value']; // this is the moodle course id
				$moodle_course_id = $findskupostwpr;
				//var_dump($moodle_course_id);
				// Get Moodle user id.
				  $moodle_user_idt = mysql_query("SELECT id FROM mdl_user WHERE email = '$current_user->user_email' ", $chandle2);
				  
					while ($moodle_user_idt2 = mysql_fetch_array($moodle_user_idt))
					{
					$moodle_user_id = $moodle_user_idt2['id'];
					
					}

				  // Return FALSE if the Drupal user is not available in Moodle.
				  if (!$moodle_user_id) {
					return FALSE;
				  }
				  $time = time();
				  // User start time of course.
				  $time_start = $time;
				  // User end time of course. 0 = never.			  
				  $time_end = 0;
				  // Moodle role. 5 = student.
				  $moodle_role_id = 5;
				  // Moodle context. 50 = course.
				  $moodle_context_level = 50;
				  $moodle_modifier_id = $moodle_user_id;
				  
				  $moodle_enrol_idt = mysql_query("SELECT id FROM mdl_enrol WHERE enrol = 'manual' AND courseid = '$moodle_course_id' ",$chandle2);
					while ($moodle_enrol_idt2 = mysql_fetch_array($moodle_enrol_idt))
					{
					$moodle_enrol_id = $moodle_enrol_idt2['id'];
					
					}
				  // Get the right Moodle context.
				  $moodle_context_idt = mysql_query("SELECT id FROM mdl_context WHERE contextlevel = $moodle_context_level 
				  AND instanceid = '$moodle_course_id'",$chandle2);
				  while($moodle_context_idt2 = mysql_fetch_array($moodle_context_idt))
				  {
					$moodle_context_id = $moodle_context_idt2['id'];

					}
				
				// now enrolment
				$checkrecmoodle = mysql_fetch_array(mysql_query("SELECT id FROM mdl_user_enrolments WHERE userid = $moodle_user_id 
				  AND enrolid = $moodle_enrol_id ",$chandle2));
				  
				  //$checkrecmoodleresult = $checkrecmoodle['id'];
				  
				  if (!$checkrecmoodle) {
				  
					$newenrsql= "INSERT INTO mdl_user_enrolments (status, enrolid, userid, timestart, timeend, modifierid,timecreated, timemodified) 
					  VALUES (0, $moodle_enrol_id, $moodle_user_id, $time_start, $time_end, $moodle_modifier_id, $time,$time)";
					  
					  $resultenr=mysql_query($newenrsql,$chandle2) or die("Failed Query of " . $newenrsql);
						
					$moodle_modifier_ida = 2;
					  $newenrollsql= "INSERT INTO mdl_role_assignments (roleid, contextid, userid, timemodified, modifierid, component,itemid, sortorder) 
					  VALUES ($moodle_role_id, $moodle_context_id, $moodle_user_id, $time, $moodle_modifier_ida, '', 0, 0)";
					  
					  $resultasgn=mysql_query($newenrollsql,$chandle2) or die("Failed Query of " . $newenrollsql);
				}
			}
		?>
		<!-- end of Mihir moodleofindia 15th sept 2014-->
		
		<!-- below lines to show a button to go to the elearning platform Mihir moodleofindia 15th sept 2014-->
		<h3><?php echo do_shortcode("[wp2moodle class='button' cohort='']Click here to access your course[/wp2moodle]");
			?>
		<!-- end of Mihir moodleofindia 15th sept 2014-->
		
		<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

		<ul class="order_details">
			<li class="order">
				<?php _e( 'Order Number:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_order_number(); ?></strong>
			</li>
			<li class="date">
				<?php _e( 'Date:', 'woocommerce' ); ?>
				<strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
			</li>
			<li class="total">
				<?php _e( 'Total:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_formatted_order_total(); ?></strong>
			</li>
			<?php if ( $order->payment_method_title ) : ?>
			<li class="method">
				<?php _e( 'Payment Method:', 'woocommerce' ); ?>
				<strong><?php echo $order->payment_method_title; ?></strong>
			</li>
			<?php endif; ?>
		</ul>
		<div class="clear"></div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
