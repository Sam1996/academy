</div>
</div>

<br class="clear"/>
<!-- /content -->
<div class="footer-wrap">
  <footer class="site-footer">
    <div class="row">
      <div class="copyright left">
        <?php ThemexStyler::siteCopyright(); ?>
      </div>
      <nav class="footer-navigation right">
        <?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
      </nav>
      <!-- /navigation --> 
    </div>

<!--
  <div class="company-address" style="text-align: right;">
  <div itemtype="http://schema.org/LocalBusiness" itemscope=""> <span style="display:none" itemprop="name">Edvancer Eduventures</span>
    <div itemtype="http://schema.org/PostalAddress" itemscope=""> <span itemprop="streetAddress">116, Platinum, Jawahar Road,</span> <span itemprop="addressLocality">Ghatkopar(E),</span> <span itemprop="addressRegion">Mumbai-</span> <span itemprop="postalCode">400077</span></div><br>
    Phone Numbers: <span itemprop="telephone">+91 9819181858 </span><br> Email: <span itemprop="email"><a href="mailto:info@edvancer.in">info@edvancer.in</a></span> </div>
  </div>
-->
  </footer>
</div>
<!-- /footer -->
</div>

<!-- /site wrap -->

<?php wp_footer(); ?>
<script>
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
</script>
<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980410755;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/980410755/?guid=ON&amp;script=0"/>
</div>
</noscript>
</body></html>