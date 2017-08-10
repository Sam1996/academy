<?php
//Error reporting
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_COMPILE_ERROR);

//Define constants
define('SITE_URL', home_url().'/');
define('AJAX_URL', admin_url('admin-ajax.php'));
define('THEME_PATH', get_template_directory().'/');
define('THEME_URI', get_template_directory_uri().'/');
define('THEME_CSS_URI', get_stylesheet_directory_uri().'/');
define('THEMEX_PATH', THEME_PATH.'framework/');
define('THEMEX_URI', THEME_URI.'framework/');
//Set content width
$content_width=1140;

//Load language files
load_theme_textdomain('academy', THEME_PATH.'languages');

//Include theme functions
include(THEMEX_PATH.'functions.php');

//Include theme configuration file
include(THEMEX_PATH.'config.php');

//Include core class
include(THEMEX_PATH.'classes/themex.core.php');

//Init theme
$theme=new ThemexCore($config);


/* Editted by Atif */

// limit the content
function limit_content_string( $content, $id, $w = 15 )
{
    $retval = $content;     

    if(empty($retval)){
        return $retval;
    }
    
    $array = explode(" ", $content);
    if ( count( $array ) <= $w )
    {
        $retval = $content;
    }
    else
    {
        array_splice( $array, $w );
        $retval = implode(" ", $array ).' <a href="' . $permalink = get_permalink($id) . '"> Read more... </a>';
    }

    return $retval;

}

/* Editted by Atif */


$args = array(
    'name'          => __( 'tabs', 'Edvancer' ),
    'id'            => 'tabs',
    'description'   => 'Enter the tabs data',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '' ); 
register_sidebar( $args );

$args = array(
    'name'          => __( 'Footerdata', 'Edvancer' ),
    'id'            => 'footer-widget',
    'description'   => 'Enter the footer data',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '' ); 
register_sidebar( $args );

$args = array(
    'name'          => __( 'multicurrency', 'Edvancer' ),
    'id'            => 'Multicurrency',
    'description'   => 'Drag and drop multi currency',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '' ); 
register_sidebar( $args );

$args = array(
    'name'          => __( 'Testimonials slider', 'Edvancer' ),
    'id'            => 'testimonials_slider',
    'description'   => 'Display Testimonials slider',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '' ); 
register_sidebar( $args );

$args = array(
    'name'          => __( 'Facebook Likes', 'Edvancer' ),
    'id'            => 'facebook_likes',
    'description'   => 'Display Facebook Likes',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '' ); 
register_sidebar( $args );

$args = array(
    'name'          => __( 'Course Test Block', 'Edvancer' ),
    'id'            => 'course-test-block',
    'description'   => 'Course Test Block',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '' ); 
register_sidebar( $args );


// tabs
function custom_tabs()  {
    do_shortcode(dynamic_sidebar( 'tabs' ));
}
// tesmonials slider on course page
function custom_testimonials(){
    do_shortcode(dynamic_sidebar( 'testimonials_slider' ));    
}
// facebook likes
function custom_like_buttons(){
    dynamic_sidebar( 'facebook_likes' );
}
// Course Block Text
function course_text_block(){
    do_shortcode(dynamic_sidebar( 'course-test-block' ));
}
function exclude_category($query) {
if ( $query->is_home() || ($query->is_archive() && !$query->is_category())) {
 $query->set('cat', '-11');
 }
 return $query;
 }
 add_filter('pre_get_posts', 'exclude_category');

// Code by Aatash 1st Feb 16
add_filter( 'woocommerce_paypal_supported_currencies', 'add_aed_paypal_valid_currency' );
function add_aed_paypal_valid_currency( $currencies ) {
array_push ( $currencies , 'INR' ); /* YOUR CURRENCY */
return $currencies;
}

// Code by GBS Developer. Date: 7 Aug, 2015
 // Change INR to Usd currency for paypal.
function woocommerce_paypal_args_for_inr($paypal_args){
    if ( $paypal_args['currency_code'] == 'INR'){
        $convert_rate = getFromYahoo();
        $count = 1;
        while( isset($paypal_args['amount_' . $count]) ){
            $paypal_args['amount_' . $count] = round( $paypal_args['amount_' . $count] / $convert_rate, 2);
            $count++;
        }
        $paypal_args['tax_cart'] = round( $paypal_args['tax_cart'] / $convert_rate, 2);
    }
    return $paypal_args;
}
add_filter('woocommerce_paypal_args', 'woocommerce_paypal_args_for_inr');
 
function getFromYahoo()
{
    $from   = 'USD'; /*change it to your required currencies */
    $to     = 'INR';
    $url = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X';
    $handle = @fopen($url, 'r');
    
    if ($handle) {
        $result = fgets($handle, 4096);
        fclose($handle);
    }

    $allData = explode(',',$result); /* Get all the contents to an array */
    return $allData[1];
}

// Change Order Note lable 
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
     $fields['order']['order_comments']['placeholder'] = 'Enter any additional information here .';
     $fields['order']['order_comments']['label'] = 'Additional information if any';
     return $fields;
}

/**
 * Validate the extra register fields.
 *
 * @param  string $username          Current username.
 * @param  string $email             Current email.
 * @param  object $validation_errors WP_Error object.
 *
 * @return void
 */
function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
    if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {
        $validation_errors->add( 'billing_phone_error', __( '<strong>Error</strong>: Phone is required!.', 'woocommerce' ) );
    }

    if ( isset( $_POST['billing_city'] ) && empty( $_POST['billing_city'] ) ) {
        $validation_errors->add( 'billing_city_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
    }

    if ( isset( $_POST['billing_country'] ) && empty( $_POST['billing_country'] ) ) {
        $validation_errors->add( 'billing_country_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
    }
}

add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );

/**
 * Save the extra register fields.
 *
 * @param  int  $customer_id Current customer ID.
 *
 * @return void
 */
function wooc_save_extra_register_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        // WooCommerce billing first name
        update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        // Set Display Name.
        $dname = $_POST['billing_first_name'].' '.$_POST['billing_last_name'];
        update_user_meta( $customer_id, 'display_name', $dname );
        //wp_update_user( array( 'ID' => $customer_id, 'display_name' => $dname ) );

    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        // WooCommerce billing last name
        update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
    }
    if ( isset( $_POST['billing_phone'] ) ) {
        // WooCommerce billing phone
        update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
    }

    if ( isset( $_POST['billing_city'] ) ) {
        // WooCommerce billing City.
        update_user_meta( $customer_id, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );
    }

    if ( isset( $_POST['billing_country'] ) ) {
        // WooCommerce billing country.
        update_user_meta( $customer_id, 'billing_country', sanitize_text_field( $_POST['billing_country'] ) );
    }
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );


function plugin_registration_redirect() {
    return home_url();
}
add_filter( 'woocommerce_registration_redirect', 'plugin_registration_redirect' );


// Code by Aatash 12th Jun 16
// Display 24 products per page. Goes in functions.php

//Login logout functionality
//function add_loginout_link( $items, $args ) {
//    if (is_user_logged_in() && $args->theme_location == 'main_menu') {
//        $items .= '<ul class="sub-menu"><li><a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Log Out</a></li></ul>';
//    }
//    elseif (!is_user_logged_in() && $args->theme_location == 'main_menu') {
//        $items .= '<li><a href="' . get_permalink( woocommerce_get_page_id( 'myaccount' ) ) . '">Log In</a></li>';
//    }
//    return $items;
//}
//add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );


/**
 * Add WooCommerce My Account Login/Logout to Menu
 * 
 * @see https://support.woothemes.com/hc/en-us/articles/203106357-Add-Login-Logout-Links-To-The-Custom-Primary-Menu-Area
 */

/**
 * Add WooCommerce My Account Login/Logout to Menu
 * 
 * @see https://support.woothemes.com/hc/en-us/articles/203106357-Add-Login-Logout-Links-To-The-Custom-Primary-Menu-Area
 */


function add_loginout_link( $items, $args ) {

   if (is_user_logged_in() && $args->theme_location == 'main_menu') {

       $items .= '<li><a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Log Out</a></li>';

   }

   elseif (!is_user_logged_in() && $args->theme_location == 'main_menu') {

       $items .= '<li><a href="' . get_permalink( woocommerce_get_page_id( 'myaccount' ) ) . '">Log In</a></li>';

   }

   return $items;

}
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );



function jg_user_nav_visibility() {

    if ( is_user_logged_in() ) {
        $output="<style> .nav-login { display: none; } </style>";
    } else {
        $output="<style> .nav-account { display: none; } </style>";
    }

    echo $output;
}
add_action('wp_head','jg_user_nav_visibility');


function add_myjavascript(){
  wp_enqueue_script( 'form.js', get_bloginfo('template_directory') . "/js/form.js", array( 'jquery' ) );
  }
  add_action( 'init', 'add_myjavascript' );
  /*
   *   To view a result for pathfinder  
   */
  if(isset($_POST['action'])&& !empty($_POST['action'])){
  
  //get the data from ajax() call
      
    $radio1 = $_POST['answer1'];
    $radio2 = $_POST['answer2'];
    $radio3 = $_POST['answer3'];
    $final = $radio1.''.$radio2.''.$radio3;
    
    
   
       
     if($final == "000" ||  $final == "010"){
       $result_data = do_shortcode('[courses category="130" number="2" columns="2" order="title"]');
       //$data['html']=$result_data;
       //$data["message"]="sucess";
       echo $result_data;
       //$return = json_encode($result_data);
       //echo $return;
    }
    if($final == "001" ||  $final == "110" ){
       $result_data = do_shortcode('[courses category="131" number="2" columns="2" order="title"]');
       //$data['html']=$result_data;
       //$data["message"]="sucess";
       echo $result_data;
       //$return = json_encode($result_data);
       //echo $return;
    }
    if($final == "011" ||  $final == "101"){
       $result_data = do_shortcode('[courses category="132" number="2" columns="2" order="title"]');
       //$data['html']=$result_data;
       //$data["message"]="sucess";
       echo $result_data;
       //$return = json_encode($result_data);
       //echo $return;
    }
    if($final == "100" ||  $final == "111"){
       $result_data = do_shortcode('[courses category="138" number="2" columns="2" order="title"]');
       //$data['html']=$result_data;
       //$data["message"]="sucess";
       echo $result_data;
       //$return = json_encode($result_data);
       //echo $return;
    }
  
   
  }


  function misha_filter_function(){
  $args = array(
    'orderby' => 'date', // we will sort posts by date
    'order' => $_POST['date'] // ASC или DESC
  );
 
  // for taxonomies / categories
  if( isset( $_POST['categoryfilter'] ) )
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'category',
        'field' => 'id',
        'terms' => $_POST['categoryfilter']
      )
    );
 
  // create $args['meta_query'] array if one of the following fields is filled
  if( isset( $_POST['price_min'] ) && $_POST['price_min'] || isset( $_POST['price_max'] ) && $_POST['price_max'] || isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
    $args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true
 
  // if both minimum price and maximum price are specified we will use BETWEEN comparison
  if( isset( $_POST['price_min'] ) && $_POST['price_min'] && isset( $_POST['price_max'] ) && $_POST['price_max'] ) {
    $args['meta_query'][] = array(
      'key' => '_price',
      'value' => array( $_POST['price_min'], $_POST['price_max'] ),
      'type' => 'numeric',
      'compare' => 'between'
    );
  } else {
    // if only min price is set
    if( isset( $_POST['price_min'] ) && $_POST['price_min'] )
      $args['meta_query'][] = array(
        'key' => '_price',
        'value' => $_POST['price_min'],
        'type' => 'numeric',
        'compare' => '>'
      );
 
    // if only max price is set
    if( isset( $_POST['price_max'] ) && $_POST['price_max'] )
      $args['meta_query'][] = array(
        'key' => '_price',
        'value' => $_POST['price_max'],
        'type' => 'numeric',
        'compare' => '<'
      );
  }
 
 
  // if post thumbnail is set
  if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
    $args['meta_query'][] = array(
      'key' => '_thumbnail_id',
      'compare' => 'EXISTS'
    );
 
  $query = new WP_Query( $args );
 
  if( $query->have_posts() ) :
    while( $query->have_posts() ): $query->the_post();
      echo '<h2>' . $query->post->post_title . '</h2>';
    endwhile;
    wp_reset_postdata();
  else :
    echo 'No posts found';
  endif;
 
  die();
}
 
 
add_action('wp_ajax_myfilter', 'misha_filter_function'); 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');





function my_print_stars(){
    global $wpdb;
    global $post;
    $count = $wpdb->get_var("
    SELECT COUNT(meta_value) FROM $wpdb->commentmeta
    LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
    WHERE meta_key = 'rating'
    AND comment_post_ID = $post->ID
    AND comment_approved = '1'
    AND meta_value > 0
");

$rating = $wpdb->get_var("
    SELECT SUM(meta_value) FROM $wpdb->commentmeta
    LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
    WHERE meta_key = 'rating'
    AND comment_post_ID = $post->ID
    AND comment_approved = '1'
");

if ( $count > 0 ) {

    $average = number_format($rating / $count, 2);

    echo '<div class="starwrapper" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">';

    echo '<span class="star-rating" title="'.sprintf(__('Rated %s out of 5', 'woocommerce'), $average).'"><span style="width:'.($average*16).'px"><span itemprop="ratingValue" class="rating">'.$average.'</span> </span></span>';

    echo '</div>';
    }

}

add_action('woocommerce_after_shop_loop_item', 'my_print_stars' );




function custom_apsc_before_sort( $wp_query , $setting_data ) {

    //print_r($wp_query);
    //print_r($setting_data);

}
add_action( 'apsc_before_sort' , 'custom_apsc_before_sort' , 10 , 2 );




function custom_apsc_after_sort( $wp_query , $setting_data ) {

    //print_r($wp_query);
    //print_r($setting_data);

}
add_action( 'apsc_after_sort' , 'custom_apsc_after_sort' , 10 , 2 );
  // creating Ajax call for WordPress
//   add_action( 'wp_ajax_nopriv_ MyAjaxFunction', 'MyAjaxFunction' );
//   add_action( 'wp_ajax_ MyAjaxFunction', 'MyAjaxFunction' );

function my_scripts(){

wp_enqueue_style( 'academy-own', get_template_directory_uri() . '/css/academy-own.css',false,'1.1','all');
wp_enqueue_style( 'responsive-own', get_template_directory_uri() . '/css/responsive-own.css',false,'1.1','all');
/* wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script/script.js',false,'1.1','all'); */

wp_enqueue_style('academy-own');
wp_enqueue_style('responsive-own');
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
