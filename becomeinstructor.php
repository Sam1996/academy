<?php
   // Template Name: Become Instructor
   get_header(); ?>
<div class="about-banner">
<?php
                                $image = get_field('become_banner');
                                if (!empty($image)) {
                                    ?> 
									<div class="becomebanner">
                                    <img src="<?php echo $image['url']; ?>" alt="banner" />
									<div class="becomebanner-up">
            <h1><?php echo get_field('become_name_head'); ?></h1>
            <?php } ?>
            <div class="border-new"></div>
			<p><?php echo get_field('become_name_description'); ?></p>
			</div>
									</div>
                                
</div>
<div class="container-fluid become-ins">
<div class="row">
<div class="col-lg-12 col-md-12 ol-sm-12 col-xs-12">
    <?php if (get_field('become_haedh') != "") { ?>
<h4><?php echo get_field('become_haedh'); ?></h4>
    <?php }?>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 become-p-content">
   <?php if (get_field('become_content_firstline') != "") { ?> 
<p><?php echo get_field('become_content_firstline'); ?></p>
   <?php }?>
<?php if (get_field('become_content_secondline') != "") { ?> 
<p><?php echo get_field('become_content_secondline'); ?></p>
<?php }?>
</div>
</div>
</div>

<!--instructor--form-->
<div class="container-fluid">
<div class="col-sm-12 forminstru">
<div class="become-frm">
<h3>I would like to teach/develop content for Edvancer</h3>
  <div class="container-fluid"><?php echo do_shortcode('[contact-form-7 id="2739" title="Instructor form"]');?></div>
  </div>

</div>
<div class="row">
<div class="col-sm-12 hurry-msg">
<?php if (get_field('hurry_msg') != "") { ?>     
<p><?php echo get_field('hurry_msg'); ?></p>
<?php }?>
</div>
</div>
</div>
<!--instructor--form-end-->

<?php get_footer(); ?>

<script type="text/javascript">
    (function($) {
  /*Brought click function of fileupload button when text field is clicked*/
	$("#uploadtextfield").click(function() {
		$('#fileuploadfield').click()
	});

  /*Brought click function of fileupload button when browse button is clicked*/
	$("#uploadbrowsebutton").click(function() {
		$('#fileuploadfield').click()
	});

  /*To bring the selected file value in text field*/	
	$('#fileuploadfield').change(function() {
    //$('#uploadtextfield').val($(this).val());
   
    var filename =$(this).val().replace(/C:\\fakepath\\/i, '')
     $("#uploadtextfield").text(filename);
    
    
  });

})(jQuery);
</script>



