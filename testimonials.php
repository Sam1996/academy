<?php
   // Template Name: Testimonials
   get_header(); ?>
   <!--banner-part-->
<div class="testimonials-banner">
<div classa="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 testmo-banner">
<?php
                                $image = get_field('testimonials-banner');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="banner" />
                                <?php } ?>
</div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 testno-content">
<h3><?php echo get_field('banner-heading'); ?></h3>
<div class="bod-left-wht"></div>
<p><?php echo get_field('banner-text'); ?></p>
</div>
</div>
</div>

   <!--banner-part-end-->
   <div class="clear"></div>
   <!--testimonials-div-->
   <div class="container">
   <div class="row">
   
   <!--test-section-->
   <?php
               $args = array(
  'post_type' => 'testimonial' ,
  'orderby' => 'date' ,
  'order' => 'DESC' ,
  'posts_per_page' => 12,
  'id'         => '7753',
  'paged' => get_query_var('paged'),
  'post_parent' => $parent
); 
$q = new WP_Query($args);
if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post();?>
   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 testmonials-main-div">
   <div class="front-testimon-div">
   <div class="bgdarrow"></div><?php
   if ( has_post_thumbnail() ) {
		$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );?>
                <img src="<?php echo $feat_image_url; ?>" class="img-responsive img-circle"/><?php }?>
                
   
   <h3><?php echo get_field('testimonial_description'); ?></h3>
   <h5><?php echo get_field('testimonial_author_'); ?></h5>
   <p><?php $trimmed = substr( get_the_content(), 0,80); 
   echo $trimmed."...";
   ?></p>
   <div class="see-more-monils">See More</div>
   <hr>
   <div class="linkdin-testimonils"><a href="<?php echo get_field('testimonial_linkedin_url')?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
   </div>
       
    <div class="hover-testimon-div contentt">
	<div class="sub-hover-testmo">
   <h3><?php echo get_field('testimonial_description'); ?></h3>
   <h5><?php echo get_field('testimonial_author_'); ?></h5>
   <p><?php echo the_content();
  
   ?></p>
   <div class="see-white-monils">See Less</div>
     <hr>
   <div class="linkdin-testimonils"><a href="<?php echo get_field('testimonial_linkedin_url')?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
   </div>
   </div>
   </div>
   <?php }} ?>
<?php wp_reset_query(); ?>
   <!--test-section-->
   
  

   
   
   
   

  
   </div>
   </div>

   <!--testimonials-div-end-->
<?php get_footer(); ?>
<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
 
 jQuery(document).ready(function(){
	 jQuery('.hover-testimon-div').css('display','none');
	jQuery('.see-more-monils').click(function(){
		
		jQuery(this).parent(".front-testimon-div").next("div").css('display','block');
		jQuery(this).parent(".front-testimon-div").css('display','none');
	});
	jQuery('.see-white-monils').click(function(){
		
		jQuery(this).parents(".hover-testimon-div").css('display','none');
		jQuery(this).parents(".hover-testimon-div").prev(".front-testimon-div").css('display','block');
		
	});
 });
</script>
	<script>
		(function($){
			$(window).on("load",function(){
				
				$(".hover-testimon-div").mCustomScrollbar({
					theme:"light-3",
					scrollButtons:{enable:true}
				});
				
			});
		})(jQuery);
	</script>



