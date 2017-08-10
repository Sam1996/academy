<?php ThemexCourse::initCourse($post->ID); 
$button_link = get_post_meta($post->ID, 'button_link', true);?>
    <?php if(has_post_thumbnail()) { ?>
<div class="course-preview <?php echo ThemexCourse::$data['course']['status']; ?>-course"> 
    <div class="course-image">   
        <div class="coursetitle">
            <a href="<?php the_permalink(); ?>">    
  <?php the_title(); ?>   
            </a></div> 
   <?php if(ThemexCourse::$data['rating']!='true' || ThemexCourse::$data['users_number']!='true') { ?> 
        <footer class="course-footer clearfix">    
  
     
        </footer>   
 <?php } ?>   
        <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('normal'); ?>
        </a>  
  <?php //if(ThemexCourse::$data['course']['price']!='' && !is_single()) { ?>  
  <?php //if(empty(ThemexCourse::$data['course']['plans'])) { ?>  
  <?php //} ?>    <?php //} ?>
    </div> 
    <div class="course-meta indvlcontent" id="cours"> 
        <div class="hover-indv">
        <header class="course-header"> 
            
            <div class="coursetitle"><a href="<?php the_permalink(); ?>">      
  <?php the_title(); ?>       
                </a>
            </div> 
            
            
            <p>      
          <?php  $trimmed = wp_trim_words( get_the_content(), $num_words = 13, $more ='....' );   
          echo $trimmed;                             ?>                                           
            </p>  
            
            <?php if(ThemexCourse::$data['rating']!='true') { ?>     
 <?php get_template_part('module', 'rating'); ?>      <?php  } ?>  
            <?php if(ThemexCourse::$data['users_number']!='true') { ?>    
            <div class="course-users users-foll"> 
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
       <?php if ($post->ID == 230) {echo "3,731 learners";} ?> 
       <?php if ($post->ID == 222) {echo "2,836 learners";}?>    
    <?php if ($post->ID == 233){echo "2,567 learners";}?> 
       <?php if ($post->ID == 4424){echo "988 learners";}?>      
  <?php if ($post->ID == 5063){echo "424 learners";}?>
	<?php if ($post->ID == 5421){echo "284 learners";}?> 
                
            </div>    
  <?php } ?>  
  <?php if(!is_single()){		  if(!is_page(2129)){ ?> 
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>      
                    <?php }else{ if($post->ID == 233){?>  
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>  
 <?php }else{ ?>   
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid see-more">See More</span></a> 
            </div>
     <?php } } } ?>

     <?php if(is_single()){      if(!is_page(2129)){ ?> 
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>      
                    <?php }else{ if($post->ID == 233){?>  
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>  
 <?php }else{ ?>   
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid see-more">See More</span></a> 
            </div>
     <?php } } } ?>
            
        </header> 
        
     </div>
        <div class="hover-course contentt">
           <?php if (get_field('course_delivery_mode_content') != "") { ?>
            <h4><?php echo get_field('course_delivery_mode_content'); ?></h4>
           <?php }?>
             <?php if (get_field('course_duration_title') != "") { ?>
             <p><?php echo get_field('course_duration_title'); }?><span class="courhr"><?php if (get_field('course_duration_description') != "") { ?><b>
                         <?php echo get_field('course_duration_description'); }?></b></span></p>
            <?php if (get_field('selfpaced_learning_offerdate') != "") { ?>
             <p><?php echo get_field('course_duration_description'); ?></p>
            <?php }?>
            <?php if (get_field('onlinesupport_offerdate') != "") { ?>
             <p><?php echo get_field('onlinesupport_offerdate'); ?></p>
            <?php }?>
      <?php if(!is_single()){		  if(!is_page(2129)){ ?> 
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>      
                    <?php }else{ if($post->ID == 233){?>  
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>  
 <?php }else{ ?>   
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid see-more">See More</span></a> 
            </div>
     <?php } } } ?> 
     <?php if(is_single()){      if(!is_page(2129)){ ?> 
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>      
                    <?php }else{ if($post->ID == 233){?>  
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid">See More</span></a></div>  
 <?php }else{ ?>   
            <div class="see-more">
            <a href="<?php echo $button_link;?>" class="button">
                <span class="wid see-more">See More</span></a> 
            </div>
     <?php } } } ?> 
         </div>
      
         </div>
     

        
    </div><?php } ?>

<script>
   jQuery(document).ready(function() {
     jQuery(".hover-course").css("display","none");
   jQuery(".indvlcontent").hover(function(){
        jQuery(this).children(".hover-indv").css("display","none");
         jQuery(this).children(".hover-course").css("display","block");
       }, 
       function(){
       jQuery(this).children(".hover-indv").css("display","block");
         jQuery(this).children(".hover-course").css("display","none");
     });
   });
</script>
<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).on("load",function(){
				
				$(".hover-course").mCustomScrollbar({
					theme:"light-3",
					scrollButtons:{enable:true}
				});
				
			});
		})(jQuery);
	</script>
