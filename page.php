<?php if (is_page(4613)){
if (isset($_GET['cancel_order'])){
    if ( $_GET['cancel_order'] == 'true') {
		$url = get_bloginfo('url')."/checkout";
        wp_redirect($url);
        echo "<script type='text/javascript'>window.location = '" . $url . "'</script>";
        exit();
    }
}
} ?>
<?php get_header(); ?>
<?php the_post(); ?>
<?php the_content(); ?>
<?php get_footer(); ?>