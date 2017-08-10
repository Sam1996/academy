<?php
   // Template Name: Aboutus
   get_header(); ?>
   <!--banner-->
   
<div class="about-banner">
<?php
                                $image = get_field('banner_about');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="banner" class="img-responsive" />
                                <?php } ?>
</div>
<!--banner-end-->
<!--about-content-->
<div class="container-fluid">
<div class="">
<div class="col-sm-12 aboutus-content">
<h1><?php echo get_field('about_heading'); ?></h1>
<p><?php echo get_field('about_p'); ?></p>
</div>
</div>
</div>
<div class="container">
<?php if(get_field('left_about_one')!="")  {?>
<div class="col-sm-12 hidden-xs">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 left-section-abt">
<div class="left-bar-abt-con">
<p class="top-1"><?php echo get_field('left_about_one'); ?></p>
<p class="top-2"><?php echo get_field('left_about_two'); ?></p>
</div>
<div class="about-con-img">
<?php
                                $image = get_field('about_device_left');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 about-screen">
<?php
                                $image = get_field('about_screen_mobile');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about"  class="img-responsive" />
                                <?php } ?>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 left-section-abt">
<div class="about-con-img">
<?php
                                $image = get_field('about_device_right');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
</div>
<div class="left-bar-abt-con">
<p class="top-1 left-td"><?php echo get_field('right_about_one'); ?></p>
<p class="top-2 left-td"><?php echo get_field('right_about_two'); ?></p>
</div>

</div>
</div>
</div>
<div class="col-xs-12 hidden-lg hidden-md hidden-sm">
<div class="about-mbl">
<?php
                                $image = get_field('handshake_icon');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('left_about_one'); ?></p>
</div>
<div class="about-mbl">
<?php
                                $image = get_field('computer_icon');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('left_about_two'); ?>
</div>
<div class="about-mbl">
<?php
                                $image = get_field('about_screen_mobile');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about"  class="img-responsive" />
                                <?php } ?>
</div>
<div class="about-mbl">
<?php
                                $image = get_field('ring_icon');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('right_about_one'); ?></p>
</div>
<div class="about-mbl">
<?php
                                $image = get_field('degree_icon');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('right_about_two'); ?></p>
</div>
</div>
<?php } ?>
</div>
<!--about-content-->
<!--vission-content-->
<?php if(get_field('vission_heading')!="")  {?>
<div class="vission-section">
<div class="container-fluid">
<div class="col-sm-12">
<?php
                                $image = get_field('vission_image');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
	<h1><?php echo get_field('vission_heading'); ?></h1>
<div class="white-bd"></div>
<p><?php echo get_field('vission_content'); ?></p>
</div>
</div>
</div>
<?php } ?>
<!--vission-content-end-->
<!--management-team-->
<div class="container-fluid">
<?php if(get_field('management_team')!="")  {?>
   <div class="section-hdg">
      <h1><?php echo get_field('management_team'); ?></h1>
      <div class="border-new"></div>
   </div>
   <?php } ?>
   <div class="row">
   <?php if(get_field('ceo_name')!="")  {?>
   <div class="col-sm-6 col-xs-12 abt-ppl">
 <?php
                                $image = get_field('ceo_image');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
   <div class="ce-about">
   <h3><?php echo get_field('ceo_name'); ?></h3>
   <h4><?php echo get_field('ceo_designation'); ?></h4>
   <p><?php echo get_field('ceo_about'); ?></p>
   </div>
   </div>
   <?php } ?>
   <?php if(get_field('cofounder_name')!="")  {?>
   <div class="col-sm-6 col-xs-12 abt-ppl">
    <?php
                                $image = get_field('cofounder_image');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
   <div class="ce-about">
   <h3><?php echo get_field('cofounder_name'); ?></h3>
   <h4><?php echo get_field('cofounder_designation'); ?></h4>
   <p><?php echo get_field('cofounder_about'); ?></p>
   </div>
   </div>
     <?php } ?>
   </div>
</div>
<!--management-team-end-->
<!--about-icons-->
<div class="cases-about">
<div class="container-fluid">
<div class="row">
 <?php if(get_field('about_icon_1')!="")  {?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icons">
<?php
                                $image = get_field('about_icon_1');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('learners_count'); ?></p>
<p><?php echo get_field('learners_satisfied'); ?></p>
</div>
  <?php } ?>
  
   <?php if(get_field('about_icon_2')!="")  {?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icons">
<?php
                                $image = get_field('about_icon_2');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('classes_hours'); ?></p>
<p><?php echo get_field('classes_deliverd'); ?></p>
</div>
 <?php } ?>
 
 <?php if(get_field('about_icon_3')!="")  {?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icons">
<?php
                                $image = get_field('about_icon_3');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('lifetime_time'); ?></p>
<p><?php echo get_field('lifetime_acess'); ?></p>
</div>
 <?php } ?>
 
  <?php if(get_field('about_icon_4')!="")  {?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 about-icons">
<?php
                                $image = get_field('about_icon_4');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" class="img-responsive" />
                                <?php } ?>
<p><?php echo get_field('compressive_a'); ?></p>
<p><?php echo get_field('online_training_course'); ?></p>
</div>
<?php } ?>

</div>
</div>
</div>
<!--about-icons-end-->
<!--why-edvancer-->
<div class="why-edvancer">
<div class="container">
  <?php if(get_field('why_edvancer')!="")  {?>
   <div class="section-hdg">
      <h1><?php echo get_field('why_edvancer'); ?></h1>
      <div class="border-new"></div>
   </div>
<?php } ?>
   

<div class="row">
<?php if(get_field('why_edvancer_1')!="")  {?>
<div class="flip-sectipn-centre">
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
<li>
        <figure>
            <?php
                                $image = get_field('why_edvancer_1');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_1_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
                <p><?php echo get_field('why_edvancer_1_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
	</ul>

</div>
</div>
<?php } ?>


<?php if(get_field('why_edvancer_2')!="")  {?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
    <li>
        <figure>
                 <?php
                                $image = get_field('why_edvancer_2');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_2_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
               <p><?php echo get_field('why_edvancer_2_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</div>
<?php } ?>

<?php if(get_field('why_edvancer_3')!="")  {?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
    <li>
        <figure>
                  <?php
                                $image = get_field('why_edvancer_3');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_3_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
                <p><?php echo get_field('why_edvancer_3_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</div>
<?php } ?>


<?php if(get_field('why_edvancer_4')!="")  {?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
    <li>
        <figure>
                  <?php
                                $image = get_field('why_edvancer_4');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_4_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
                <p><?php echo get_field('why_edvancer_4_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</div>
<?php } ?>

<?php if(get_field('why_edvancer_5')!="")  {?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
    <li>
        <figure>
                  <?php
                                $image = get_field('why_edvancer_5');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_5_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
               <p><?php echo get_field('why_edvancer_5_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</div>
<?php } ?>

<?php if(get_field('why_edvancer_6')!="")  {?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
    <li>
        <figure>
                  <?php
                                $image = get_field('why_edvancer_6');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_6_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
               <p><?php echo get_field('why_edvancer_6_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</div>
<?php } ?>

<?php if(get_field('why_edvancer_7')!="")  {?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
    <li>
        <figure>
                  <?php
                                $image = get_field('why_edvancer_7');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_7_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
                <p><?php echo get_field('why_edvancer_7_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</div>
<?php } ?>


<?php if(get_field('why_edvancer_8')!="")  {?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">
<div class="main-edvn">
<ul class="main-divimg">
    <li>
        <figure>
                  <?php
                                $image = get_field('why_edvancer_8');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="about" />
                                <?php } ?>
			<h4><?php echo get_field('why_edvancer_8_heading'); ?></h4>
            <figcaption>
			<div class="my-bodhover contentt">
                <p><?php echo get_field('why_edvancer_8_description'); ?></p>
				</div>
            </figcaption>
        </figure>
    </li>
</ul>
</div>
</div>
<?php } ?>

</div>
</div>



</div>   
</div>
</div>
<!--why-edvancer-end-->
<?php get_footer(); ?>
<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).on("load",function(){
				
				$(".my-bodhover").mCustomScrollbar({
					theme:"light-3",
					scrollButtons:{enable:true}
				});
				
			});
		})(jQuery);
	</script>