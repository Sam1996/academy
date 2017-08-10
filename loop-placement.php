<article <?php post_class('post clearfix'); ?>>
	<?php if(has_post_thumbnail()) { ?>
	<div class="column fivecol post-image">
		<div class="bordered-image thick-border">
			<?php the_post_thumbnail('normal'); 
                
                     //$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id());
                  
            ?>
            <!--<img src="<?php //echo $large_image_url[0];?>" width="50" height="" />-->
		</div>
	</div>
	<div class="post-content column sevencol last placement">
	<?php } else { ?>
	<div class="post-content">
	<?php } ?>
		<h1><?php the_title(); ?></h1>
		<?php 
		if(isset($GLOBALS['content'])) {
			echo do_shortcode($GLOBALS['content']);
		} else {
			the_excerpt();
		}
		?>
        
        <?php 
            $dlink = get_post_meta($post->ID, "dlink");

            if(!empty($dlink[0])){?>
            <div class="dlink">
                <a class="button" href="<?php echo $dlink[0];?>">
                    <!--<img src="http://demo.webreinvent.com/edvancer/wp-content/uploads/2013/07/dowmload-bg.png" alt="download">-->
                    <span class="wid">DOWNLOAD CV</span>
                </a>
            </div>
            <?php }?>
		
	</div>
</article>