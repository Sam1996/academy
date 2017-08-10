<?php
   // Template Name: Cooprate Training
   get_header(); ?>
<div class="about-banner">
<?php
                                $image = get_field('cooprate_banner');
                                if (!empty($image)) {
                                    ?> 
									<div class="coopratebanner">
                                    <img src="<?php echo $image['url']; ?>" alt="banner" />
									<div class="coopratebanner-up">
            <h1><?php echo get_field('cooprate_name_head'); ?></h1>
            <?php } ?>
            <div class="border-new"></div>
			<p><?php echo get_field('cooprate_name_description'); ?></p>
			</div>
									</div>
                                
</div>
<div class="container head-ccopsec">
<div class="row">
<div class="col-lg-12 col-md-12 ol-sm-12 col-xs-12">
<h3 class="cont-coop"><?php echo get_field('coprate_head'); ?></h3>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coop-gead">



<p><?php echo get_field('coop-left'); ?></p>

</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coop-gead">



<p><?php echo get_field('coop_right'); ?></p>

</div>
</div>
</div>
<!--company-build-->
<div class="company-build">
<div class="container">
<div class="row">
<div class="col-sm-12 build-hd">
<h3><?php echo get_field('build-hd'); ?></h3>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 sub-head-coop">
<?php
                                $image = get_field('build-icon-f');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="icon" />
                                <?php } ?>
				
				<h3><?php echo get_field('what_offer'); ?></h3>
				<p><?php echo get_field('what_offer_con'); ?></p>
</div>

<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 sub-head-coop">
<?php
                                $image = get_field('build-icon-s');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="icon" />
                                <?php } ?>
				
				<h3><?php echo get_field('your_benefit'); ?></h3>
				<p><?php echo get_field('your_benefit_con'); ?></p>
</div>

<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 sub-head-coop">
<?php
                                $image = get_field('build-icon-t');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="icon" />
                                <?php } ?>
				
				<h3><?php echo get_field('how_works_it'); ?></h3>
				<p><?php echo get_field('how_works_con'); ?></p>
</div>

</div>
</div>
</div>
<!--company-build-end-->
<!--scnario-section-->
<div class="scnario">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 scanario-img">
<?php
                                $image = get_field('scnario_img');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="scnario" />
                                <?php } ?>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 scanario-content">
<h3><?php echo get_field('snario_heading'); ?></h3>
<div class="leftbluebod"></div>
				<p><?php echo get_field('snario_heading_content'); ?></p>
				
				<ul class="list-scn">
				<li><?php echo get_field('snario_list_f'); ?></li>
				<li><?php echo get_field('snario_list_s'); ?></li>
				<li><?php echo get_field('snario_list_t'); ?></li>
				</ul>
</div>
</div>
</div>
<!--scnario-section-end-->
<!--cooprate-frame-work-->
<div class="cooprate-framwrk">
<div class="container">
<div class="section-hdg">
          <h1><?php echo get_field('cooprate_heading'); ?></h1>
                        <div class="border-new"></div>
			<p><?php echo get_field('cooprate_p'); ?></p>
			</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 coop-sectionn">
<?php
                                $image = get_field('foundation_img');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="scnario" />
                                <?php } ?>
			<h3><?php echo get_field('foundation_head'); ?></h3>
			<p><?php echo get_field('foundation_text'); ?></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 coop-sectionn">
<?php
                                $image = get_field('skill_img');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="scnario" />
                                <?php } ?>
			<h3><?php echo get_field('skill_head'); ?></h3>
			<p><?php echo get_field('skill_text'); ?></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 coop-sectionn">
<?php
                                $image = get_field('boot_img');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="scnario" />
                                <?php } ?>
			<h3><?php echo get_field('boot_head'); ?></h3>
			<p><?php echo get_field('boot_text'); ?></p>
</div>
</div>


<div class="row">
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 coop-sectionn">
<?php
                                $image = get_field('apprication_img');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="scnario" />
                                <?php } ?>
			<h3><?php echo get_field('appriciation_head'); ?></h3>
			<p><?php echo get_field('appriciation_text'); ?></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 coop-sectionn">
<?php
                                $image = get_field('programming_img');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="scnario" />
                                <?php } ?>
			<h3><?php echo get_field('programming_head'); ?></h3>
			<p><?php echo get_field('programming_text'); ?></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 coop-sectionn">
<?php
                                $image = get_field('online_learning_img');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="scnario" />
                                <?php } ?>
			<h3><?php echo get_field('online_learning_heading'); ?></h3>
			<p><?php echo get_field('online_learning_text'); ?></p>
</div>
</div>

</div>
</div>

<!--cooprate-frame-work-end-->

<!--client-section-->
<div class="container-fluid">
    <div class="section-hdg">
    <?php if (get_field('corporate_clients') != "") { ?>
        <h1><?php echo get_field('corporate_clients'); ?></h1>
    <?php } ?>
      <div class="border-new"></div>
      <?php if (get_field('client_description') != "") { ?>
      <p style="color:#403737"><?php echo get_field('client_description'); ?></p>
      <?php } ?>
    </div>
    <div class="row">
        <div class="clients-list">
            <ul>
            <li><a href=""><?php $image = get_field('logo_image1');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image2');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>    
            <li><a href=""><?php $image = get_field('logo_image3');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image4');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image5');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image6');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image7');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image8');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image9');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
            <li><a href=""><?php $image = get_field('logo_image0');if (!empty($image)) {?><img src="<?php echo $image['url']; ?>" alt="client logo" class="img-responsive" /><?php } ?></a></li>
        </ul>
        </div>
        </div>
</div>
<!--client section end-->
<!--last-msg-call-section-->
<div class="container-fluid">
<div class="row">
<div class="col-sm-6 col-lg-6 col-md-6 col-xs-12 calldv">
<span><?php
                                $image = get_field('call-cooparte');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="icon" />
                                <?php } ?>
								
								<p><?php echo get_field('call_number'); ?></p></span>

</div>
<div class="col-sm-6 col-lg-6 col-md-6 col-xs-12 msgdv">
<span><?php
                                $image = get_field('msg_cooparte');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="icon" />
                                <?php } ?>
								
									<p><a href="<?php echo get_site_url();?>/contact-us/"><?php echo get_field('msg_email'); ?></a></p></span>


</div>


</div>
</div>

<!--last-msg-call-section-->
<?php get_footer(); ?>



