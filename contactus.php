<?php
   // Template Name: contact us
   get_header(); ?>
<div class="about-banner">
<?php
                                $image = get_field('contact_banner_image');
                                if (!empty($image)) {
                                    ?> 
									<div class="contactbanner">
                                    <img src="<?php echo $image['url']; ?>" alt="banner" />
									<div class="contactbbaner-up">
            <h1><?php echo get_field('contact_name_head'); ?></h1>
            <?php } ?>
            <div class="border-new"></div>
			<p><?php echo get_field('contact_name_description'); ?></p>
			</div>
									</div>
                               
</div>
<div class="contact-bg">
<div class="container">
<div class="row">
<div class="section-hdg">
            <?php if (get_field('submit_question') != "") { ?>
                <h1><?php echo get_field('submit_question'); ?></h1>
            <?php } ?>
            <div class="border-new"></div>
			<p><?php echo get_field('kindly_apply'); ?></p>
			</div>
			
		<div class="col-lg-1 col-md-1"></div>
		
		<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 contaforrm">
		<?php echo do_shortcode('[contact-form-7 id="2339" title="Contact form 1"]');?>
		</div>
		
		<div class="col-lg-1 col-md-1"></div>
		
			
</div>
</div>
</div>
<div class="container">
<div class="row">
<p class="cont-ppg"><?php echo get_field('heading_contact'); ?></p>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-gead">
<div class="section-cont">
<div class="img-left-pt"><?php
                                $image = get_field('loaction_icon');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="icon" />
                                <?php } ?></div>
<div class="conrt-sd">
<h3><?php echo get_field('headingooffice'); ?></h3>
<p><?php echo get_field('navigate_detail'); ?></p>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contact-gead">
<div class="section-cont">
<div class="img-left-pt"><?php
                                $image = get_field('messgae_icon');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="icon" />
                                <?php } ?>
											</div>
<div class="conrt-sd">
<h3><?php echo get_field('message_field'); ?></h3>
<p><?php echo get_field('message_detail'); ?></p>

</div>
<div class="section-cont">
<div class="img-left-pt"><?php
          $image = get_field('call_icon');
           if (!empty($image)) {
           ?> 
         <img src="<?php echo $image['url']; ?>" alt="icon" />
            <?php } ?>
			</div>
<div class="conrt-sd">
<h3><?php echo get_field('call_content'); ?></h3>
<p><?php echo get_field('call_detail'); ?></p>
</div>
</div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>



