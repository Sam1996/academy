<article <?php post_class('post clearfix'); ?>>
    <?php if(has_post_thumbnail()) { ?>
    <div class="post_title">
        <a href="<?php the_permalink(); ?>" style="color: #007dc4">
        <?php the_title(); ?></a>
    </div> 
    <?php if (has_post_thumbnail()) { ?>
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 post-image blogimg">   
        <div class="bordered-image thick-border"> 
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('normal'); ?></a>     
        </div>
        <div class="hidden-xs social-blog">
               <span class="social-span">Share |</span><?php echo do_shortcode('[cn-social-icon]'); ?>
           </div>
    </div> 

    <?php } ?>
    
    <div class="post-content col-lg-8 col-md-8 col-sm-8 col-xs-12 last"> 
   <?php } else { ?>  <div class="post_title">
        <a href="<?php the_permalink(); ?>" style="color: #007dc4">
        <?php the_title(); ?></a>
    </div>   
    
   <?php } ?>        
       <?php 
       if(isset($GLOBALS['content'])) { 
           echo do_shortcode($GLOBALS['content']);  
           } else {        
               the_excerpt();     
               }        ?>
       <a href="<?php the_permalink(); ?>" class="button small my-resd">
           <span><?php _e('Read More','academy'); ?></span>
       </a>
	 
       <footer class="post-footer">
            <!-- <div class="social-blog">
               <span class="social-span">Share |</span><?php //echo do_shortcode('[cn-social-icon]'); ?>
           </div>   -->    
            
           <!-- <div class="hidden-lg hidden-sm hidden-md social-blog">
                <span class="social-span">Share |</span><?php //echo do_shortcode('[cn-social-icon]'); ?>
           </div> -->

           <?php if(ThemexCore::getOption('blog_author')!='true') { ?>
          <div class="post-author nomargin">&nbsp;<?php _e('Posted by', 'academy'); ?> <?php the_author_posts_link(); ?></div>
          <?php } ?>
          <div class="post-categories">&nbsp;<?php _e('in', 'academy'); ?> <?php the_category(','); ?></div>
<time class="post-date nomargin" datetime="<?php the_time('Y-m-d'); ?>">&nbsp;<?php _e('on', 'academy'); ?> <?php the_time($date_format); ?></time> 
    <div class="post-content test"> 
           

<!--           <div class="addthis_toolbox addthis_default_style" addthis:url="<?php //echo get_permalink(); ?>">  
               <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>  
               <a class="addthis_button_tweet"></a>          
               <a class="addthis_button_linkedin_counter"></a>    
               <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>      
               <a class="addthis_counter addthis_pill_style"></a> 
           </div>  -->
           
<!--           <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script> -->
           
       </footer> 
   </div>
       
            
           
                  <?php //if(comments_open()) { ?>  
<!--           <div class="post-comment-count">
               <?php //comments_number('0','1','%'); ?>
           </div>    -->
        <?php //} ?>  
</article>