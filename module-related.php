<?php 
$post_id = $post->ID;

$domain_description = get_post_meta($post_id, 'domain_description');
$course_tabs = get_post_meta($post_id, '_course_course_tabs');
$about_course = get_post_meta($post_id, '_course_about_course');
$link_text = get_post_meta($post_id, 'link_text');
$curriculum_page_id = get_post_meta($post_id, 'curriculum_page_id');
$course_testimonials = get_post_meta($post_id, '_course_course_testimonials');
 


if(!empty($domain_description[0])) { ?>
<div class="column">
    <?php echo $domain_description[0];?>
</div>
 <?php } ?>
<br clear="all"><br>

<!-- Tabs Section -->
<div class="column">
    <?php //custom_tabs(); 
    
        echo do_shortcode($course_tabs[0]);
    
    ?>
</div>
<br clear="all"><br>
<div class="column">
    <div class="eightcol column">
        <?php //custom_testimonials(); 
        
            echo do_shortcode($course_testimonials[0]);
        ?>
    </div>
    <div class="fourcol column last">
        <?php custom_like_buttons(); ?>
    </div>
</div>
 <?php if(!empty($about_course[0])) { ?>
<div class="column">
    <?php echo $about_course[0]; ?>
    <a href="<?php echo "#".$curriculum_page_id[0];?>" class="fancybox"  rel="group" ><?php echo $link_text[0];?></a>
</div>
 <?php } ?>
 <?php 
    //$page_data = ThemexCourse::get_page_data($curriculum_page_id[0]);
    $page = get_post($curriculum_page_id[0]);
    if(!empty($page)){?>
    <div class="curriculum column" style="display: none;" id="<?php echo $curriculum_page_id[0];?>">
        <?php echo $page->post_content;?>
    </div>            
<?php }?>
<br clear="all"><br>
