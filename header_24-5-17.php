<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="user-scalable = yes">
<meta name="viewport" content="width=device-width" />
<title>
<?php wp_title('|', true, 'right'); ?> - 
<?php bloginfo('name'); ?>
</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo THEME_URI; ?>js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory').'/custom.css';?>">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<link rel="stylesheet" href="<?php echo bloginfo('template_directory');?>/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/fancybox/source/jquery.fancybox.pack.js" defer></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory');?>/fancybox/source/jquery.fancybox.js" defer></script>
<script src="<?php echo bloginfo('template_directory');?>/custom_slider/jquery.bxslider.min.js"></script>
<link href="<?php echo bloginfo('template_directory');?>/custom_slider/jquery.bxslider.css" rel="stylesheet" />
<script type="text/javascript">
 var $j = jQuery.noConflict(); 
$j(document).ready(function() {
/*  for fancybox  */
 $j(".fancybox").fancybox({ arrows : false });  
 $j('.bxslider').bxSlider({
 mode: 'vertical',
 slideMargin: 5,
infiniteLoop: false,
hideControlOnEnd: true
});   

});

</script>
<link rel="author" href="https://plus.google.com/100403796538475471690" />
<link rel="publisher" href="https://plus.google.com/116926038930603612294"  />
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/meanmenu.css" media="all" />
<?php /*?><script src="http://code.jquery.com/jquery-1.9.1.js"></script> <?php */?>
<script src="<?php bloginfo('template_url');?>/js/jquery.meanmenu.js"></script> 
<script>
jQuery(document).ready(function () {
    jQuery('nav.mob-menu').meanmenu();
});
</script>

<head>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1653709211576580'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1653709211576580&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head><body <?php body_class(); ?>>
<script>fbq('track', '<EVENT_NAME>');</script>
<div class="fll-div">
<div class="header-wrap container-fluid">
  <header class="site-header row">
    <div class="col-sm-12">
      <div class="site-logo left">
        <?php ThemexStyler::siteLogo(); ?>
      </div>
      <!-- /logo -->
      <div class="header-options right clearfix">
        <!-- /search form -->
        <?php if($share_code=ThemexCore::getOption('share_code')) { ?>
        <div class="button-wrap share-button tooltip right"> <a href="#" class="button dark"><span><span class="button-icon plus nomargin"></span></span></a>
          <div class="tooltip-wrap">
            <div class="corner"></div>
            <div class="tooltip-text"><?php echo themex_html($share_code); ?></div>
          </div>
        </div>
        <!-- /share button -->
        <?php } ?>
      </div>
      <!-- /header options -->
      <div class="mobile-search-form">
        <?php get_search_form(); ?>
      </div>
      <!-- /mobile search form -->
      <!-- social icons -->
      
      <!-- /social icons   http://www.edvancer.in/my-account/logout -->
    
      <br clear="all"/>
      <div id="mobile-nav">
	  <nav class="header-navigation right mob-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main_menu','container_class' => 'menu' ) ); ?>
        <div class="select-menu">
          <?php ThemexInterface::renderDropdownMenu('main_menu'); ?>
          <span>&nbsp;</span> </div>
        <!--/ select menu-->
      </nav>
	  </div>
      <!-- /navigation -->
    </div>
  </header>
  <!-- /header -->
</div>
<div class="featured-content">
  <?php 



//ThemexStyler::pageBackground();

if(is_front_page()) {
echo do_shortcode('[rev_slider alias="home"]');

	
} else {



			?>
  <div class="row">
    <?php



			if(get_post_type()=='course' && is_single()) {



				get_template_part('module','course');



			} else {



			?>
    <div class="page-title">
      <p style="font-size: 2em;">
        <?php ThemexStyler::pageTitle(); ?>
      </p>
      <?php if(is_category(11)){?>
      <?php $img_src = categoryCustomFields_GetCategoryCustomField(11,'cat_img'); ?>
      <div class="column fivecol"> <img src="<?php echo $img_src[0]->field_value;?>" alt=""> </div>
      <div class="column  sevencol last" >
        <div class="employer-description widget employer">
          <div class="widget-title">
            <div class="headertitle">Hire pre-trained employees</div>
          </div>
          <div class="widget-content"> <?php echo category_description(); ?>
            <footer class="course-footer"> </footer>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <!-- /page title -->
    <?php }	?>
  </div>
  <?php } ?>
</div>
<!-- /featured -->
<div class="main-content container-fluid">