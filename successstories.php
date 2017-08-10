<?php
   // Template Name: Sucess Stories
   get_header(); ?>
   <!--banner-->
   
<div class="about-banner">
<?php
        $image = get_field('sucess_banner');
        if (!empty($image)) {
        ?> 
        <img src="<?php echo $image['url']; ?>" alt="banner" />
        <?php } ?>
</div>

<!--banner-slider-->

<div class="container">
<div class="background-succs">
<div class="row">
<div class="section-hdg">
          <h1><?php echo get_field('placement_head'); ?></h1>
                        <div class="border-new"></div>
			<p><?php echo get_field('placement_p'); ?></p>
			</div>
			 </div>

<div id="logos">
  <?php echo  do_shortcode('[jw_easy_logo slider_name="Our Clients"]');?>
</div>
</div>
</div>
<!--banner-slider-end-->

<!--succes-people-->

<div class="container-fluid">
<div class="row">
<div class="section-hdg">
          <h1><?php echo get_field('our_student'); ?></h1>
                        <div class="border-new"></div>
			<p><?php echo get_field('our_student_p'); ?></p>
			</div>
    <?php
               $args = array(
  'post_type' => 'post' ,
  'orderby' => 'date' ,
  'order' => 'DESC' ,
  'posts_per_page' => 12,
  'cat'         => '133',
  'paged' => get_query_var('paged'),
  'post_parent' => $parent
); 
$q = new WP_Query($args);
if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post();?>
			<div class="succes-ledt-rt">
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 suces-divs">
 <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail('small'); ?>
		 <h1><?php echo the_title();?></h1>
		 <p><?php $trimmed = substr( get_the_content(), 0,80); 
                 
                 echo $trimmed."..."; ?></p>
		 <p class="sucess-name"><?php echo get_field('student_name'); ?></p>
		 <p class="succs-ocp"><?php echo get_field('student_role'); ?></p></a>
</div>
</div>
    <?php }} ?>
<?php wp_reset_query(); ?>
</div>
</div>
<!--succes-people-end-->


<?php get_footer(); ?>

