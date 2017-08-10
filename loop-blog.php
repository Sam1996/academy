<li>
 <article class="testimonial">
    <?php if(has_post_thumbnail()) { ?>
    <div class="testimonial-image">
        <div class="bubble-image">
            <?php the_post_thumbnail('small'); ?>
            <div class="substrate"><img src="<?php echo THEME_URI; ?>images/bgs/testimonial_bg.png" alt="" /></div>
        </div>
    </div>
    <div class="testimonial-text">
    <?php } else { ?>
    <div class="testimonial-text less-wid">
    <?php } ?>
        <a href="<?php the_permalink();?>"><div class="authortop"><?php the_title(); ?></div></a>
        <?php the_excerpt(); ?>
    </div>

</article>
</li>