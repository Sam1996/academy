<?php 
get_header(); 

$layout=ThemexCore::getOption('blog_layout','right');
$date_format=ThemexCore::getOption('date_format','m/d/Y');

if($layout=='left') {
    ?>
    <aside class="sidebar column fourcol">
        <?php get_sidebar(); ?>
    </aside>
    <div class="column eightcol last">
        <?php } 
        else if($layout=='right') { ?>
        <div class="blog-banner">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-blog.png" class="img-responsive"/>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-leftp">
            <?php } else { ?>
            <div class="fullwidth-block">
                <?php } ?>
                <?php echo category_description(); ?>
                <div class="posts-listing">
                    <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); 
                            get_template_part('loop','post');
                        } 
                    } else {
                        ?>
                        <h3><?php _e('No posts found. Try a different search?','academy'); ?></h3>
                        <p><?php _e('Sorry, no posts matched your search. Try again with some different keywords.','academy'); ?></p>
                        <?php } ?>        
                </div>
                    <?php ThemexInterface::renderPagination(); ?>
            </div>
        </div>
<?php if($layout=='right') { ?>
        <aside class="sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12 last right-blog">
            <?php get_sidebar(); ?>
        </aside>
<?php } ?>
<?php get_footer(); ?>