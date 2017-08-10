</div>
</div>

<div class="clear"></div>
<!-- /content -->


     <!--
  <div class="company-address" style="text-align: right;">
  <div itemtype="http://schema.org/LocalBusiness" itemscope=""> <span style="display:none" itemprop="name">Edvancer Eduventures</span>
    <div itemtype="http://schema.org/PostalAddress" itemscope=""> <span itemprop="streetAddress">116, Platinum, Jawahar Road,</span> <span itemprop="addressLocality">Ghatkopar(E),</span> <span itemprop="addressRegion">Mumbai-</span> <span itemprop="postalCode">400077</span></div><br>
    Phone Numbers: <span itemprop="telephone">+91 9819181858 </span><br> Email: <span itemprop="email"><a href="mailto:info@edvancer.in">info@edvancer.in</a></span> </div>
  </div>
-->
<?php  dynamic_sidebar('Footerdata');?>



  
        <div class="modal fade" id="password_change" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       <div class="section-hdg">
                            <h1>Update Password</h1>
                        <div class="border-new"></div>
            			 </div>
      </div>
      <div class="modal-body">

<?php 
  
  wc_get_template( 'myaccount/form-lost-password.php', array(
      'form'  => 'lost_password',
    ) );

 ?>
        

<!-- <form method="post" class="lost_reset_password">

	<?php if( 'lost_password' == $args['form'] ) : ?>

		<p><?php echo apply_filters( 'woocommerce_lost_password_message', __( 'Lost your password? Please enter your username/email address. You will receive a link to create a new password via email in 20 minutes. Kindly be patient.', 'woocommerce' ) ); ?></p>

		<p class="form-row form-row-first"><label for="user_login"><?php _e( 'Username/email', 'woocommerce' ); ?></label> <input class="input-text" type="text" name="user_login" id="user_login" /></p>

	<?php else : ?>

		<p><?php echo apply_filters( 'woocommerce_reset_password_message', __( '', 'woocommerce') ); ?></p>

		
		<p class="form-row form-row-first">
			<label for="password_1"><?php _e( '', 'woocommerce' ); ?> <span class="required"></span></label>
			<input type="password" class="input-text" name="password_1" id="password_1" placeholder="New password" />
		</p>
		<p class="form-row form-row-last">
			<label for="password_2"><?php _e( '', 'woocommerce' ); ?> <span class="required"></span></label>
			<input type="password" class="input-text" name="password_2" id="password_2" placeholder="Confirm New password" />
		</p>

		<input type="hidden" name="reset_key" value="<?php echo isset( $args['key'] ) ? $args['key'] : ''; ?>" />
		<input type="hidden" name="reset_login" value="<?php echo isset( $args['login'] ) ? $args['login'] : ''; ?>" />

	<?php endif; ?>

	<div class="clear"></div>

	<p class="form-row sbtbtn">
		<input type="hidden" name="wc_reset_password" value="true" />
		<input type="submit" class="button" value="<?php echo 'lost_password' == $args['form'] ? __( 'Reset Password', 'woocommerce' ) : __( 'Save', 'woocommerce' ); ?>" />
	</p>

	<?php wp_nonce_field( $args['form'] ); ?>

</form>
  -->
    </div>

  </div>
  </div>
        </div>

</div>
<!-- /footer -->
</div>

<!-- /site wrap -->

<?php wp_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".page-title h1").text("Reset Password");
	});
</script>
<!--<script>
var pro_id = '';
var page = '';
var price = 0;
if(window.location.pathname == '/'){
	page = 'home';
}
else if(window.location.href.indexOf('/courses/all/') != -1){
	page = 'searchresults';
}
else if(jQuery('.single.single-course').length > 0){
	pro_id = window.location.pathname.split('/').slice(-2)[0];
	page = 'program';
}
else if(window.location.href.indexOf('/recording-') != -1){
	page = 'lead';
}
else if(window.location.href.indexOf('/introduction-') != -1){
	page = 'complete';
}
else{
	page = 'other';
}
var google_tag_params = {
                      edu_pid: pro_id,
                      edu_pagetype: page,
                      edu_totalvalue: parseFloat(price)
                      };
</script>-->
<!-- Google Code for Remarketing Tag -->
<!--<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980410755;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>-->
<!--<noscript>
<div style="display:inline;">
<img height="0" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/980410755/?guid=ON&amp;script=0"/>
</div>
</noscript>-->
<!--<script>
jQuery(".hover-course").niceScroll({

  // z-index
  zindex: "auto",

  // opacity when cursor is inactive
  cursoropacitymin: 0,

  // opacity when cursor is active
  cursoropacitymax: 1,

  // cursor color
  cursorcolor: "#424242",

  // cursor width
  cursorwidth: "6px",

  // cursor border properties
  cursorborder: "1px solid #fff",
  cursorborderradius: "5px",

  // animation speed of smooth scroll
  scrollspeed: 60,

  // scrolling speed with mouse wheel
  mousescrollstep: 8 * 3,

  // enable touch behavior
  touchbehavior: false,

  // use hardware accelerated scroll if supported
  hwacceleration: true,

  // use CSS transitions if supported
  usetransition: true,

  // enable zoom feature
  boxzoom: false,

  // double click to zoom
  dblclickzoom: true,

  // zoom via gestures
  gesturezoom: true,

  // displays "grab" icon
  grabcursorenabled: true,

  // true: hide when no scrolling
  // "cursor":only cursor hidden
  // false:do not hide,
  // "leave":hide only if pointer leaves content
  // "hidden":hide always
  // "scroll":how only on scroll       
  autohidemode: true,

  // background
  background: "",

  // auto resize iframe
  iframeautoresize: true,

  // min height of cursor
  cursorminheight: 32,

  // preserve native scroll behavior
  preservenativescrolling: true,

  // offset top/left for rail position
  railoffset: false,
  railhoffset: false,

  // enable scroll bouncing at the end of content as mobile-like
  bouncescroll: true,

  // enable page down scrolling when space bar has pressed
  spacebarenabled: true,

  // padding for rail bar
  railpadding: {
    top: 0,
    right: 0,
    left: 0,
    bottom: 0
  },

  // disable outline
  disableoutline: true,

  // enable horizontal scrolling
  horizrailenabled: true,

  // alignment of rail bar
  railalign: "right",
  railvalign: "bottom",

  // enable <a href="http://www.jqueryscript.net/tags.php?/3D/">3D</a> transforms
  enabletranslate3d: true,

  // enable mouse wheel
  enablemousewheel: true,

  // enable keyboard
  enablekeyboard: true,

  // enable smooth scroll
  smoothscroll: true,

  // click on rail make a scroll
  sensitiverail: true,

  // enable mouse caption lock API
  enablemouselockapi: true,

  // fixed height of cursor
  cursorfixedheight: false,

  // dead zone in pixels for direction lock activation
  directionlockdeadzone: 6,

  // set the delay in microseconds to fading out scrollbars
  hidecursordelay: 400,

  // detect bottom of content and let parent to scroll, as native scroll does
  nativeparentscrolling: true,

  // enable auto-scrolling of content when selection text
  enablescrollonselection: true,

  // overlow
  overflowx: true,
  overflowy: true,

  // drag speed
  cursordragspeed: 0.3,

  // RTL mode
  rtlmode: "auto",

  // drag cursor in touch / touchbehavior mode
  cursordragontouch: false,

  // it permits horizontal scrolling with mousewheel on horizontal only content, 
  // if false (vertical-only) mousewheel don't scroll horizontally, if value is auto detects two-axis mouse
  oneaxismousemode: "auto",

  // define custom path for boxmode icons
  scriptpath: getScriptPath(),

  // prevent scrolling on multitouch events
  preventmultitouchscrolling: true,

  // force MutationObserver disabled
  disablemutationobserver:false

}); 
</script>-->
<div id="divLoading"></div>
</body></html>