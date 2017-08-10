<?php
   // Template Name: Instructor
   get_header(); ?>
<div class="about-banner">
<?php
                                $image = get_field('instructor_banner');
                                if (!empty($image)) {
                                    ?> 
                                    <img src="<?php echo $image['url']; ?>" alt="banner" />
                                <?php } ?>
</div>

<div class="instrcor-bg">
  <div class="container">
       <div class="section-hdg">
          <h1><?php echo get_field('instructor_title'); ?></h1>
                        <div class="border-new"></div>
			<p><?php echo get_field('instructor_p'); ?></p>
			</div>
		
		<div class="row">
		
		<div class="insts-listr">
		
		<ul>
		<!--first li-->
		<?php
               $args = array(
  'post_type' => 'post' ,
  'orderby' => 'date' ,
  'order' => 'DESC' ,
  'posts_per_page' => 12,
  'cat'         => '139',
  'paged' => get_query_var('paged'),
  'post_parent' => $parent
); 
$q = new WP_Query($args);
if ( $q->have_posts() ) { 
  while ( $q->have_posts() ) {
    $q->the_post();?>

		<li>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 instru-section">
		<div class="head-inss-div">
		<div class="profil-insimg">
		<?php echo the_post_thumbnail('small');?>
		</div>
		<div class="profil-inscontent">
		<h3><?php echo the_title();?></h3>
		 <?php if (get_field('instructor_position') != "") { ?>
		<h5><?php echo get_field('instructor_position'); ?></h5>
		<?php }
		$follow = get_post_meta($post->ID, 'follow')
		?>

		<p>Follow I <a href="<?php echo $follow[0];?>">Linkedin</a></p>
		</div>
		</div>
		
		<div class="instrucor-hover contentt">
		<h3><?php echo the_title();?></h3>
		<?php if (get_field('instructor_position') != "") { ?>
		<h5><?php echo get_field('instructor_position'); ?></h5>
		<?php }?>
		<p><?php echo the_content();?></p>
		<p class="hover-lndin">Follow I <a href="<?php echo $follow[0];?>">Linkdin</a></p>
		</div>
		
		</div>
		</li>
		<?php }
} ?>
<?php wp_reset_query(); ?>
		</ul>
		<!--first li-end-->
			<!--first li-->
			
		
</div>
</div>

</div>
</div>


<?php get_footer(); ?>
<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>
		(function($){
			$(window).on("load",function(){
				
				$(".instrucor-hover").mCustomScrollbar({
					theme:"light-3",
					scrollButtons:{enable:true}
				});
				
			});
		})(jQuery);
	</script>
	