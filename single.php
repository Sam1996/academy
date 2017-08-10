<?php 
get_header(); 
//$query = new WP_Query('category_name=success');
$category_detail= get_the_category($post->ID);//$post->ID

$result = '';
foreach($category_detail as $cd){
	$result = $cd->cat_name;
}
if($result != 'successstories'){
	
	
	
	
	$layout=ThemexCore::getOption('blog_layout','right');
	$date_format=ThemexCore::getOption('date_format','m/d/Y');

	if($layout=='left') {
		?>
		<aside class="sidebar column fourcol">
			<?php get_sidebar(); ?>
		</aside>
		<div class="column eightcol last">
			<?php } else if($layout=='right') { ?>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 blog-leftp deatailleftblog">
				<?php } else { ?>
				<div class="fullwidth-block">
					<?php } ?>
					<?php the_post(); ?>
					<article class="single-post">
						
						<div class="post-content">
							<h1 class="blog-detail-head"><?php echo the_title(); ?></h1>
							<footer class="post-footer">
								<div class="sixcol column">
									
									
									<?php if(ThemexCore::getOption('blog_author')!='true') { ?>
										<div class="post-author nomargin">&nbsp;<?php _e('Posted by', 'academy'); ?> <?php the_author_posts_link(); ?></div>
										<?php } ?>
										<div class="post-categories">&nbsp;<?php _e('in', 'academy'); ?> <?php the_category(','); ?></div>
										<time class="post-date nomargin" datetime="<?php the_time('Y-m-d'); ?>"><?php _e('on', 'academy'); ?> <?php the_time($date_format); ?></time>
									</div></footer>
									<?php if(has_post_thumbnail() && ThemexCore::getOption('blog_image')!='true') { ?>
										<div class="post-image">
											<div class="bordered-image thick-border detail-blog-img">
												<?php the_post_thumbnail('extended'); ?>
											</div>
										</div>
										<?php } ?>
										<?php the_content(); ?>
										<footer class="post-footer">
											<div class="sixcol column">
												<?php if(comments_open()) { ?>
												<div class="post-comment-count"><?php comments_number('0','1','%'); ?></div>
												<?php } ?>
												
												<?php if(ThemexCore::getOption('blog_author')!='true') { ?>
													<div class="post-author nomargin">&nbsp;<?php _e('Posted by', 'academy'); ?> <?php the_author_posts_link(); ?></div>
													<?php } ?>
													<div class="post-categories">&nbsp;<?php _e('in', 'academy'); ?> <?php the_category(','); ?></div>
													<time class="post-date nomargin" datetime="<?php the_time('Y-m-d'); ?>">&nbsp;<?php _e('on', 'academy'); ?> <?php the_time($date_format); ?></time>
												</div>
												<div class="sixcol column last">
													<div class="tagcloud"><?php the_tags('','',''); ?></div>
												</div>	
												
											</footer>
											<div class="social-blog">
												<span class="social-span">Share |</span><?php echo do_shortcode('[cn-social-icon]'); ?>
											</div>
											
										</div>
										
										<?php
//for use in the loop, list 5 post titles related to first tag on current post
										$tags = wp_get_post_tags($post->ID);
										if ($tags) {
											echo 'Related Posts';
											$first_tag = $tags[0]->term_id;
											$args=array(
												'tag__in' => array($first_tag),
												'post__not_in' => array($post->ID),
												'posts_per_page'=>5,
												'caller_get_posts'=>1
												);
											$my_query = new WP_Query($args);
											if( $my_query->have_posts() ) {
												while ($my_query->have_posts()) : $my_query->the_post(); ?>
												<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

												<?php
												endwhile;
											}
											wp_reset_query();
										}
										?>


									
								</article>
								<?php comments_template(); ?>

							</div>

							<?php if($layout=='right') { ?>
							<aside class="sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12 last right-blog">
								<?php get_sidebar(); ?>
							</aside>
							<?php }

						}
						else{
							
							?>
							<div class="indival-succes-banner">
								<h1>Sucess Stories</h1>
								<div class="white-bd"></div>
								<div class="container">
									<div class="indi-img-alone">
										<?php echo the_post_thumbnail('small'); ?>
									</div>
									<div class="indiv-alone-content">
										<?php if (get_field('student_name') != "") { ?>
										<h2><?php echo get_field('student_name'); ?></h2>
										<?php } ?>

										<h4><?php echo get_field('student_role'); ?></h4>
										<div class="linkdin-in"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
										<p><?php the_title();?></p>
									</div>
								</div>
							</div>
							<!--banner-end-->

							<div class="container-fluid succs-ind-padding">

								<!--heading-->
								<div class="row">
									<?php if(get_field('testimonial_content')!="")  {?>
									<div class="col-sm-12 head-succ-com">
										<h3><?php echo get_field('testimonial_content'); ?></h3>
									</div>
									<?php } ?>
								</div>
								<!--heading-end-->
								<!--single-p-->
								<div class="row">
									<?php if(get_field('short_description')!="") { ?>
									<div class="col-sm-12 exp-conetnt">
										<p><?php echo get_field('short_description'); ?></p>
									</div>
									<?php } ?>
								</div>
								<!--single-p-end-->
								<!--blue-bg-section-->
								<div class="row">
									<?php if(get_field('specialization_title')!="") { ?>
									<div class="col-sm-12">
										<div class="datasc-bg">
											<div class="row">
												<div class="col-sm-12 dta content">
													<?php if(get_field('specialization_title')!="") { ?>   
													<h4><?php echo get_field('specialization_title'); ?></h4>
													<?php }?>
													<?php if(get_field('specialization_description')!="") { ?>   
													<p><?php echo get_field('specialization_description'); ?></p>
													<?php }?>
												</div>
												<div class="col-sm-12 dta content">
													<?php if(get_field('edvancer_title')!="") { ?>     
													<h4><?php echo get_field('edvancer_title'); ?></h4>
													<?php }?>
													<?php if(get_field('edvancer_description')!="") { ?> 
													<p><?php echo get_field('edvancer_description'); ?></p>
													<?php }?>
												</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
								<!--blue-bg-section-->
								<!--course-exp-->
								<div class="row">
									
									<?php if(get_field('course_experience_title')!="") { ?>
									<div class="col-sm-12 exp-div-suc">
										<h4><?php echo get_field('course_experience_title'); ?></h4>
										<?php } ?>
										<?php if(get_field('course_experience_description')!="") { ?>
										<p><?php echo get_field('course_experience_description'); ?></p>
										<?php }?>
									</div>

								</div>
								<!--course-exp-end-->
								<!--orage-div-section-->
								<div class="row">
									<?php if(get_field('main_content')!="") { ?>
									<div class="col-sm-12">
										<div class="orge-dv">
											<h4><?php echo get_field('main_content'); ?></h4>
										</div>
									</div>
									<?php } ?>
								</div>
								<!--orage-div-section-end-->
								<!--interview-->
								<div class="row">
									<?php if(get_field('interview_title')!="") { ?>
									<div class="col-sm-12 exp-div-suc">
										<h4><?php echo get_field('interview_title'); ?></h4>
										<?php }?>
										<?php if(get_field('interview_description')!="") { ?>
										<p><?php echo get_field('interview_description'); ?></p>
									</div>
									<?php } ?>
								</div>
								<!--interview-end-->
								<!--interview-->
								<div class="row">
									<?php if(get_field('work_title')!="") { ?>
									<div class="col-sm-12 exp-div-suc">
										<h4><?php echo get_field('work_title'); ?></h4>
										<?php }?>
										<?php if(get_field('work_description')!="") { ?>
										<p><?php echo get_field('work_description'); ?></p>
									</div>
									<?php } ?>
								</div>
								<!--interview-end-->
								<!--words-section-->
								<div class="row">
									<?php if(get_field('analytics_title')!="") { ?>
									<div class="col-sm-12">
										<div class="words-dv">
											<h4><?php echo get_field('analytics_title'); ?></h4>
											<?php } ?>
											<?php if(get_field('analytics_description')!="") { ?>
											<p><?php echo get_field('analytics_description'); ?></p>
										</div>
									</div>
									<?php } ?>
								</div>
								<!--words-section-end-->
								<!--learning-path-->
								<div class="">
									<div class="col-sm-12 lats-path-sec">
										<?php if(get_field('learning_path_title')!="") { ?>   
										<h1><?php echo get_field('learning_path_title'); ?></h1>
										<?php }?>
										<p><a href="<?php echo get_home_url()?>/courses/" target="_blank">My Path</a></p>
									</div>
								</div>
								<!--learning-path-end-->
							</div>
							<?php } ?>
							
							<?php wp_reset_query(); ?>

							<?php get_footer(); ?>