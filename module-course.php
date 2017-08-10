
<?php the_post(); ?>


<?php ThemexCourse::initCourse($post->ID); ?>




<div class="container-fluid indv-listp top-bar-cres">

    <div class="row">

        <div class="col-sm-12 main-head-page">

           <?php echo '<h1>'.get_the_title().'</h1>';?> 

           <div class="course-rating" data-url="<?php echo AJAX_URL; ?>" data-action="themex_rating" data-id="<?php the_ID(); ?>" data-score="<?php echo round(ThemexCourse::$data['course']['rating']['value']); ?>" <?php if(ThemexCourse::$data['course']['rating']['readonly']) { ?>data-readonly="true"<?php } ?>></div>

           <?php if(ThemexCourse::$data['users_number']!='true') { ?>



              <div class="course-users users-foll">

              <?php echo $post->ID; ?>

                <?php if ($post->ID == 230) {echo "3,731 learners";} ?>



                <?php if ($post->ID == 222) {echo "2,836 learners";}?>



                <?php if ($post->ID == 233){echo "2,567 learners";}?>



                <?php if ($post->ID == 4424){echo "988 learners";}?>



                <?php if ($post->ID == 5063){echo "424 learners";}?>



                <?php if ($post->ID == 5421){echo "284 learners";}?>



            </div>



            <?php } ?>

        </div>

    </div>


    <!--name-heading-end-->

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 innerfull-cr">

            <p><?php echo the_content();?></p>

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 listdetail-cr">

            <ul>

                <li><?php if (get_field('course_delivery_mode_title') != "") { ?>



                    <span class="fist-lr"><img src="<?php echo get_home_url();?>/wp-content/uploads/2017/05/clock-list.png"/>

                        <?php echo get_field('course_delivery_mode_title');?></span><?php } ?>

                        <span>

                            <?php if (get_field('course_delivery_mode_content') != "") { ?>

                            <?php echo get_field('course_delivery_mode_content');?>

                            <?php } ?>

                        </span>

                    </li>

                    <li><?php if (get_field('course_duration_title') != "") { ?>



                        <span class="fist-lr"><img src="<?php echo get_home_url();?>/wp-content/uploads/2017/05/couesr-list.png"/>

                            <?php echo get_field('course_duration_title');?></span><?php } ?>

                            <span>

                                <?php if (get_field('course_duration_description') != "") { ?>

                                <?php echo get_field('course_duration_description');?>

                                <?php } ?>

                            </span>

                        </li>

                        <li><?php if (get_field('course_objective_title') != "") { ?>



                            <span class="fist-lr"><img src="<?php echo get_home_url();?>/wp-content/uploads/2017/05/fees-list.png"/>

                                <?php echo get_field('course_objective_title');?></span><?php } ?>

                                <span>

                                    <?php if (get_field('course_objective_description') != "") { ?>

                                    <span class="old-fee"><?php echo get_field('course_objective_description');?></span>
                                    <?php } ?>
                                    <?php if (get_field('course_fees_2') != "") { ?>
                                    <?php echo get_field('course_fees_2');?>
                                    <?php } ?>


                                </span>

                            </li>

                        </ul>

                    </div>

                </div>
            </div>
            <div class="container-fluid indv-listp videeo-bar">
                <!--course-content-end-->

                <!--video and form-->

                <div class="row">
                    <?php  if(is_user_logged_in()){ ?>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 video-main-page">


                        <?php $video_page_id = get_post_meta($post->ID, 'video_page_id');

                        $preview_lightbox = get_post_meta($post->ID, 'preview_lightbox');?>
                        <h4>Watch Demo Class</h4>
                        <a href="<?php echo $video_page_id[0];?>"><img src="<?php echo $preview_lightbox[0]; ?>"/></a>

                    </div>
                    <?php

                } 



                else{
                    ?>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 video-main-page" data-toggle="modal" data-target="#show_course_video">
                        <?php $preview_lightbox = get_post_meta($post->ID, 'preview_lightbox');?>
                        <h4>Watch Demo Class</h4>
                        <img src="<?php echo $preview_lightbox[0]; ?>"/>


                    </div>
                    <?php }?>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 enquire-con-page">



                        <?php 

                        echo do_shortcode('[contact-form-7 id="7099" title="recording access_Data Science Specialization Video"]');

                        ?>

                        <ul class="download-br">

                            <?php

                            if(is_user_logged_in()){

                                $image = get_field('download_broucher');

                                if (!empty($image)) {

                                    ?>                           

                                    <li class="brc"><a href="<?php echo $image['url']; ?>" target="_blank">Download Brouchers</a></li> <?php }}

                                    else{



                                       ?>   

                                       <li class="brc"><a href="#" data-toggle="modal" data-target="#download_broucher">Download Brouchers</a></li><?php



                                   }



                                   ?>

                                   <?php

                                   if(is_user_logged_in()){

                                    $image = get_field('download_resources');

                                    if (!empty($image)) {

                                        ?>

                                        <li class="derc"><a href="<?php echo $image['url']; ?>" target="_blank">Download Resources</a></li> <?php } }
                                        else{
                                            ?>
                                            <li class="derc"><a href="#" data-toggle="modal" data-target="#download_resources">Download Resources</a></li>
                                            <?php }?>

                                        </ul>

                                    </div>

                                </div>

                            </div>
                            <div class="container-fluid indv-listp learning-section">
                                <!--video and form-end-->

                                <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                        <div class="full_list_view">

                                            <?php $image = get_field('free_trial_image');

                                            if (!empty($image)) {?> 

                                            <img src="<?php echo $image['url']; ?>" alt="solution" />

                                            <?php } ?>

                                            <?php if (get_field('free_trail_title') != "") { ?>

                                            <h2><?php echo get_field('free_trail_title'); ?></h2>

                                            <?php } ?>

                                            <?php if (get_field('free_trial_description') != "") { ?>

                                            <p><?php echo get_field('free_trial_description'); ?></p>

                                            <?php } ?>

                                            <div class="full-deatilinside"><a href="#" data-toggle="modal" data-target="#free_trail_video">Free Trail</a></div>

                                        </div>   

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                        <div class="full_list_view">

                                            <?php $image = get_field('self_paced_learning_image');

                                            if (!empty($image)) {?> 

                                            <img src="<?php echo $image['url']; ?>" alt="solution" />

                                            <?php } ?>

                                            <?php if (get_field('self_paced_learning_title') != "") { ?>

                                            <h2><?php echo get_field('self_paced_learning_title'); ?></h2>

                                            <?php } ?>

                                            <?php if (get_field('self_paced_learning_description') != "") { ?>

                                            <p><?php echo get_field('self_paced_learning_description'); ?></p>

                                            <?php } ?>

                                            <h3 class="cut-prc"> <?php if (get_field('selfpaced_learning_realprice') != "") { ?><span><i class="fa fa-rupee" aria-hidden="true"></i>

                                                <?php echo get_field('selfpaced_learning_realprice'); ?>

                                                <?php } ?>

                                            </span>

                                            <i class="fa fa-rupee" aria-hidden="true">

                                                <?php if (get_field('selfpaced_learning_offerprice') != "") { ?> 

                                            </i><?php echo get_field('selfpaced_learning_offerprice'); ?></h3> <?php } ?>

                                            <?php if (get_field('selfpaced_learning_offerdate') != "") { ?>

                                            <h4><?php echo get_field('selfpaced_learning_offerdate'); ?></h4><?php }?>

                                            <?php $product_link = get_post_meta($post->ID, 'product_link');

                                            ?>



                                            <div class="full-deatilinside"><a href="<?php echo $product_link[0];?>" target="_blank">Enroll Now</a></div>

                                        </div>   

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                        <div class="full_list_view">

                                            <?php $image = get_field('online_support_image');

                                            if (!empty($image)) {?> 

                                            <img src="<?php echo $image['url']; ?>" alt="solution" />

                                            <?php } ?>

                                            <?php if (get_field('online_support_title') != "") { ?>

                                            <h2><?php echo get_field('online_support_title'); ?></h2>

                                            <?php } ?>

                                            <?php if (get_field('online_support_description') != "") { ?>

                                            <p><?php echo get_field('online_support_description'); ?></p>

                                            <?php } ?>

                                            <h3 class="cut-prc"> <?php if (get_field('onlinesupport_realprice') != "") { ?><span><i class="fa fa-rupee" aria-hidden="true"></i>

                                                <?php echo get_field('onlinesupport_realprice'); ?>

                                                <?php } ?>

                                            </span>

                                            <i class="fa fa-rupee" aria-hidden="true">

                                                <?php if (get_field('onlinesupport_offerprice') != "") { ?> 

                                            </i><?php echo get_field('onlinesupport_offerprice'); ?></h3> <?php } ?>

                                            <?php if (get_field('onlinesupport_offerdate') != "") { ?>

                                            <h4><?php echo get_field('onlinesupport_offerdate'); ?></h4><?php }?>

                                            <?php $online_support_product = get_post_meta($post->ID, 'online_support_product');

                                            ?>

                                            <div class="full-deatilinside"><a href="" data-toggle="modal" data-target="#seebatches" >See Batches</a></div>

                                        </div>   

                                    </div>

                                </div>

                            </div>





                            <div class="sections">

                                <!--tabs-section-->

                                <div class="bluesection">

                                    <div class="minj">

                                        <ul>

                                            <li>

                                                <?php if (get_field('keyfeatures') != "") { ?>

                                                <a href="#1"><?php echo get_field('keyfeatures'); ?></a> <?php } ?></li>

                                                <li> <?php if (get_field('curriculam_features') != "") { ?><a href="#2"><?php echo get_field('curriculam_features'); ?></a><?php } ?></li>

                                                <li><?php if (get_field('benefits') != "") { ?><a href="#3"><?php echo get_field('benefits'); ?></a><?php } ?></li>

                                                <li><?php if (get_field('certificate') != "") { ?><a href="#4"><?php echo get_field('certificate'); ?></a><?php } ?></li>

                                                <li><?php if (get_field('review') != "") { ?><a href="#5"><?php echo get_field('review'); ?></a><?php } ?></li>

                                                <li><?php if (get_field('review') != "") { ?><a href="#6"><?php echo get_field('faq'); ?></a><?php } ?></li>

                                            </ul>

                                        </div>

                                        <!-- Tab panes -->

                                        <!--1section-->

                                        <div class="main-key">

                                          <section id="1" class="container scroll_over">

                                            <div class="key-feature">

                                             <?php if (get_field('keyfeatures') != "") { ?><h3 class="heading-tabs"><?php echo get_field('keyfeatures'); ?></h3><?php } ?>

                                             <div class="row">
                                                <div class="flip-sectipn-centre">
                                                 <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

                                                     <div class="main-edvn">

                                                        <ul class="main-divimg">

                                                            <li>

                                                                <figure>

                                                                   <?php $image = get_field('keyfeature_image');

                                                                   if (!empty($image)) {?> 

                                                                   <img src="<?php echo $image['url']; ?>"/>

                                                                   <?php }?>

                                                                   <?php if (get_field('keyfeature_title') != "") { ?>

                                                                   <h4><?php echo get_field('keyfeature_title'); ?></h4>

                                                                   <?php } ?>

                                                                   <figcaption>

                                                                     <div class="my-bodhover contentt">

                                                                      <?php if (get_field('keyfeature_description') != "") { ?>  

                                                                      <p><?php echo get_field('keyfeature_description'); ?></p>

                                                                      <?php } ?>

                                                                  </div>

                                                              </figcaption>

                                                          </figure>

                                                      </li>

                                                  </ul>



                                              </div>

                                          </div>   



                                          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

                                             <div class="main-edvn">

                                                <ul class="main-divimg">

                                                    <li>

                                                        <figure>

                                                           <?php $image = get_field('keyfeature_image1');

                                                           if (!empty($image)) {?> 

                                                           <img src="<?php echo $image['url']; ?>"/>

                                                           <?php }?>

                                                           <?php if (get_field('keyfeature_title2') != "") { ?>

                                                           <h4><?php echo get_field('keyfeature_title2'); ?></h4>

                                                           <?php } ?>

                                                           <figcaption>

                                                             <div class="my-bodhover contentt">

                                                              <?php if (get_field('keyfeature_description2') != "") { ?>  

                                                              <p><?php echo get_field('keyfeature_description2'); ?></p>

                                                              <?php } ?>

                                                          </div>

                                                      </figcaption>

                                                  </figure>

                                              </li>

                                          </ul>



                                      </div>

                                  </div> 



                                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

                                     <div class="main-edvn">

                                        <ul class="main-divimg">

                                            <li>

                                                <figure>

                                                   <?php $image = get_field('keyfeature_image3');

                                                   if (!empty($image)) {?> 

                                                   <img src="<?php echo $image['url']; ?>"/>

                                                   <?php }?>

                                                   <?php if (get_field('keyfeature_title3') != "") { ?>

                                                   <h4><?php echo get_field('keyfeature_title3'); ?></h4>

                                                   <?php } ?>

                                                   <figcaption>

                                                     <div class="my-bodhover contentt">

                                                      <?php if (get_field('keyfeature_description3') != "") { ?>  

                                                      <p><?php echo get_field('keyfeature_description3'); ?></p>

                                                      <?php } ?>

                                                  </div>

                                              </figcaption>

                                          </figure>

                                      </li>

                                  </ul>



                              </div>

                          </div> 



                          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

                             <div class="main-edvn">

                                <ul class="main-divimg">

                                    <li>

                                        <figure>

                                           <?php $image = get_field('keyfeature_image4');

                                           if (!empty($image)) {?> 

                                           <img src="<?php echo $image['url']; ?>"/>

                                           <?php }?>

                                           <?php if (get_field('keyfeature_title4') != "") { ?>

                                           <h4><?php echo get_field('keyfeature_title4'); ?></h4>

                                           <?php } ?>

                                           <figcaption>

                                             <div class="my-bodhover contentt">

                                              <?php if (get_field('keyfeature_description4') != "") { ?>  

                                              <p><?php echo get_field('keyfeature_description4'); ?></p>

                                              <?php } ?>

                                          </div>

                                      </figcaption>

                                  </figure>

                              </li>

                          </ul>



                      </div>

                  </div> 



                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

                     <div class="main-edvn">

                        <ul class="main-divimg">

                            <li>

                                <figure>

                                   <?php $image = get_field('keyfeature_image5');

                                   if (!empty($image)) {?> 

                                   <img src="<?php echo $image['url']; ?>"/>

                                   <?php }?>

                                   <?php if (get_field('keyfeature_title5') != "") { ?>

                                   <h4><?php echo get_field('keyfeature_title5'); ?></h4>

                                   <?php } ?>

                                   <figcaption>

                                     <div class="my-bodhover contentt">

                                      <?php if (get_field('keyfeature_description5') != "") { ?>  

                                      <p><?php echo get_field('keyfeature_description5'); ?></p>

                                      <?php } ?>

                                  </div>

                              </figcaption>

                          </figure>

                      </li>

                  </ul>



              </div>

          </div> 



          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

             <div class="main-edvn">

                <ul class="main-divimg">

                    <li>

                        <figure>

                           <?php $image = get_field('keyfeature_image6');

                           if (!empty($image)) {?> 

                           <img src="<?php echo $image['url']; ?>"/>

                           <?php }?>

                           <?php if (get_field('keyfeature_title6') != "") { ?>

                           <h4><?php echo get_field('keyfeature_title6'); ?></h4>

                           <?php } ?>

                           <figcaption>

                             <div class="my-bodhover contentt">

                              <?php if (get_field('keyfeature_description6') != "") { ?>  

                              <p><?php echo get_field('keyfeature_description6'); ?></p>

                              <?php } ?>

                          </div>

                      </figcaption>

                  </figure>

              </li>

          </ul>



      </div>

  </div> 



  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

     <div class="main-edvn">

        <ul class="main-divimg">

            <li>

                <figure>

                   <?php $image = get_field('keyfeature_image7');

                   if (!empty($image)) {?> 

                   <img src="<?php echo $image['url']; ?>"/>

                   <?php }?>

                   <?php if (get_field('keyfeature_title7') != "") { ?>

                   <h4><?php echo get_field('keyfeature_title7'); ?></h4>

                   <?php } ?>

                   <figcaption>

                     <div class="my-bodhover contentt">

                      <?php if (get_field('keyfeature_description7') != "") { ?>  

                      <p><?php echo get_field('keyfeature_description7'); ?></p>

                      <?php } ?>

                  </div>

              </figcaption>

          </figure>

      </li>

  </ul>



</div>

</div> 



<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

 <div class="main-edvn">

    <ul class="main-divimg">

        <li>

            <figure>

               <?php $image = get_field('keyfeature_image8');

               if (!empty($image)) {?> 

               <img src="<?php echo $image['url']; ?>"/>

               <?php }?>

               <?php if (get_field('keyfeature_title8') != "") { ?>

               <h4><?php echo get_field('keyfeature_title8'); ?></h4>

               <?php } ?>

               <figcaption>

                 <div class="my-bodhover contentt">

                  <?php if (get_field('keyfeature_description8') != "") { ?>  

                  <p><?php echo get_field('keyfeature_description8'); ?></p>

                  <?php } ?>

              </div>

          </figcaption>

      </figure>

  </li>

</ul>



</div>

</div> 

</div>
</div>
</div>

</section>

</div>



<div id="addidr"></div>

<!--2 section-->

<section id="2" class="container-fluid cirmpr scroll_over">



  <div class="circum-feature">

      <?php if (get_field('curriculam_features') != "") { ?><h3 class="heading-tabs"><?php echo get_field('curriculam_features'); ?></h3><?php }?>

      <div class="download-curiculam"><?php $image = get_field('download_curriculam_file');

        if (!empty($image)) {?>

        <a href="<?php echo $image['url'];  ?>" target="_blank">Download Curriculum</a>
        <?php }?>
    </div>

    <div class="col-sm-12">

      <?php echo do_shortcode('[sp_faq category="135"]');?>

  </div>

  <h3 class="heading-tabs new-pr">Projects</h3>

  <div class="col-sm-12">

     <?php echo do_shortcode('[sp_faq category="136"]');?>

 </div>

</div>

</section>



<div class="main-keyy-b">

   <section id="3" class="scroll_over">



       <div class="befits container">

           <h3 class="heading-tabs">Benefits of this course</h3>



           <div class="row">
            <div class="flip-sectipn-centre">
               <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

                <div class="main-edvn">

                    <ul class="main-divimg">

                        <li>

                            <figure>

                               <?php $image = get_field('benefit_image');

                               if (!empty($image)) {?> 

                               <img src="<?php echo $image['url']; ?>"/>

                               <?php }?>

                               <?php if (get_field('benefit_title') != "") { ?><h4><?php echo get_field('benefit_title'); ?></h4><?php }?>

                               <figcaption>

                                 <div class="my-bodhover contentt">

                                    <?php if (get_field('benefit_description') != "") { ?>

                                    <p><?php echo get_field('benefit_description'); ?></p>

                                    <?php }?>

                                </div>

                            </figcaption>

                        </figure>

                    </li>

                </ul>

            </div>

        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

            <div class="main-edvn">

                <ul class="main-divimg">

                    <li>

                        <figure>

                           <?php $image = get_field('benefit_image2');

                           if (!empty($image)) {?> 

                           <img src="<?php echo $image['url']; ?>"/>

                           <?php }?>

                           <?php if (get_field('benefit_title2') != "") { ?><h4><?php echo get_field('benefit_title2'); ?></h4><?php }?>

                           <figcaption>

                             <div class="my-bodhover contentt">

                                <?php if (get_field('benefit_description2') != "") { ?>

                                <p><?php echo get_field('benefit_description2'); ?></p>

                                <?php }?>

                            </div>

                        </figcaption>

                    </figure>

                </li>

            </ul>

        </div>

    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

        <div class="main-edvn">

            <ul class="main-divimg">

                <li>

                    <figure>

                       <?php $image = get_field('benefit_image3');

                       if (!empty($image)) {?> 

                       <img src="<?php echo $image['url']; ?>"/>

                       <?php }?>

                       <?php if (get_field('benefit_title3') != "") { ?><h4><?php echo get_field('benefit_title3'); ?></h4><?php }?>

                       <figcaption>

                         <div class="my-bodhover contentt">

                            <?php if (get_field('benefit_description3') != "") { ?>

                            <p><?php echo get_field('benefit_description3'); ?></p>

                            <?php }?>

                        </div>

                    </figcaption>

                </figure>

            </li>

        </ul>

    </div>

</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

    <div class="main-edvn">

        <ul class="main-divimg">

            <li>

                <figure>

                   <?php $image = get_field('benefit_image4');

                   if (!empty($image)) {?> 

                   <img src="<?php echo $image['url']; ?>"/>

                   <?php }?>

                   <?php if (get_field('benefit_title4') != "") { ?><h4><?php echo get_field('benefit_title4'); ?></h4><?php }?>

                   <figcaption>

                     <div class="my-bodhover contentt">

                        <?php if (get_field('benefit_description4') != "") { ?>

                        <p><?php echo get_field('benefit_description4'); ?></p>

                        <?php }?>

                    </div>

                </figcaption>

            </figure>

        </li>

    </ul>

</div>

</div>



<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bootm-sphov">

    <div class="main-edvn">

        <ul class="main-divimg">

            <li>

                <figure>

                   <?php $image = get_field('benefit_image5');

                   if (!empty($image)) {?> 

                   <img src="<?php echo $image['url']; ?>"/>

                   <?php }?>

                   <?php if (get_field('benefit_title5') != "") { ?><h4><?php echo get_field('benefit_title5'); ?></h4><?php }?>

                   <figcaption>

                     <div class="my-bodhover contentt">

                        <?php if (get_field('benefit_description5') != "") { ?>

                        <p><?php echo get_field('benefit_description5'); ?></p>

                        <?php }?>

                    </div>

                </figcaption>

            </figure>

        </li>

    </ul>

</div>

</div>

</div>
</div>


</div>





<div class="head-testimonial container-fluid">



  <div class="testimonals-slider">

      <div class="container-fluid">

          <h3 class="heading-tabs-new">Course Instructor</h3>

          <div id="tcb-testimonial-carousel" class="carousel slide" data-ride="carousel">



            <!-- Wrapper for slides -->

            

            <div class="carousel-inner">





                <?php 



                $args = array(

                    'post_type'=> 'testimonial',

                    'order'    => 'ASC',



                    );              



                $the_query = new WP_Query( $args );

                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 



                ?>

                <div class="item">

                    <div class="row">

                        <div class="col-xs-12">

                         <figure class="clearfix">



                             <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 test-m-img"><img class="img-responsive img-circle media-object" src="http://doodlebluemobile.com/edvancer/wp-content/uploads/2017/05/agent.png"> </div>

                             <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12 content-testimonials">

                                <figcaption class="caption">

                                   <h3><?php the_title();?></h3>

                                   <?php if (get_field('testimonial_description') != "") { ?>

                                   <h4><?php echo get_field('testimonial_description'); ?></h4><?php }?>

                                   <p><?php the_content();?></p>

                                   <div class="socila-links">

                                       <ul>
                                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                       </ul>

                                   </div>									

                               </figcaption>

                           </div>

                       </figure>

                   </div>

               </div>



           </div>

       <?php endwhile;endif;?>







   </div>

   <!-- Controls -->

   <a class="left carousel-control" href="#tcb-testimonial-carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>

   <a class="right carousel-control" href="#tcb-testimonial-carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>



</div>

<br />





</div>



</div>

</div>

</section>

</div>



<section id="4" class="scroll_over">



    <!--certifiacre-seection-->

    <div class="container-fluid certifaicate-section">

       <h3 class="heading-tabs">Certificate</h3>

       <div class="row">

           <div class="col-lg-4 vol-md-4 col-sm-12 col-xs-12 certficate-img">

               <a href="#" data-toggle="modal" data-target="#myModal">



                   <img src="http://doodlebluemobile.com/edvancer/wp-content/uploads/2017/05/certifiacte-img.png" class="img-responsive"/>

               </a>

           </div>

           <div class="col-lg-8 vol-md-8 col-sm-12 col-xs-12 certficate-content">

               <p>After completing this specialization, you would have mastered the most popular analytical tools – SAS, SQL, Excel and R. Your exhaustive data science skill set would enable you to build your analytics career in a better way.</p>

           </div>

       </div>

   </div>

   <!--certifiacre-seection-end-->



</section>



<section id="5" class="scroll_over"> 
   <div class="succes-story my-view-review">
       <div class="container-fluid">
           <h3 class="heading-tabs">Reviews</h3> 
           <div class="row"> 
               <?php       $query = new WP_Query('category_name=successstories&posts_per_page=3'); 
               if($query->have_posts()) : while($query->have_posts()) : $query->the_post();?> 
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 story-lst hidden-xs">
                   <div class="succes-div"> 
                       <?php $image = get_field('student_image');
                       if (!empty($image)) {
                           ?>
                           <img src="<?php echo $image['url']; ?>" alt="sucess-story1" class="img-responsive" /> 
                           <?php } ?>
                           <div class="content-succs"> 
                               <?php if (get_field('student_name') != "") { ?>
                               <h5><?php echo get_field('student_name'); ?></h5> 
                               <?php } ?>
                               <p><?php $trimmed = substr( get_the_content(),0,150);
                                   echo $trimmed."...";?><span><a href = "<?php echo the_permalink()?>">See More</a></span></p>

                               </div>  
                               <div class="storybd"></div>
                           </div> 
                       </div>	
                   <?php endwhile;endif; ?>
                   <?php wp_reset_query(); ?>
               </div>	
               <!--mobile-success-stories-->
               <div class="col-xs-12 vissible-xs hidden-sm hidden-md hidden-lg mobileview_sucees">
                   <div class='row'>
                       <div class="col-md-12"> 
                           <div class="carousel slide media-carousel" id="media">
                               <div class="carousel-inner success-tr"> 
                                   <?php 
                                   $query = new WP_Query('category_name=successstories&posts_per_page=6'); 
                                   if($query->have_posts()) : while($query->have_posts()) : $query->the_post();?>
                                   <div class="item"  >
                                       <div class="row"> 
                                           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 story-lst">
                                               <div class="succes-div"> 
                                                   <?php $image = get_field('student_image');
                                                   if (!empty($image)) { 
                                                       ?>                    
                                                       <img src="<?php echo $image['url']; ?>" alt="sucess-story1" class="img-responsive" />
                                                       <?php } ?>
                                                       <div class="content-succs">
                                                           <?php if (get_field('student_name') != "") { ?> 
                                                           <h5><?php echo get_field('student_name'); ?></h5>
                                                           <?php } ?>
                                                           <p><?php $trimmed = substr( get_the_content(),0,100);
                                                               echo $trimmed."..."; ?></p>
                                                           </div> 
                                                           <div class="storybd"></div>
                                                       </div>
                                                   </div>	
                                               </div>
                                           </div>
                                       <?php endwhile;endif; ?>
                                       <?php wp_reset_query(); ?> 
                                   </div>
                                   <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                   <a data-slide="next" href="#media" class="right carousel-control">›</a>
                               </div>
                           </div>	
                           <!--mobile-success-stories-end-->
                       </div>
                   </div>
                   <div class="view-full"><span class="brct"><span style="visibility: hidden;">[</span></span><span class="viewall"><a href="<?php echo get_home_url()?>/success-stories/">View All <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></span><span class="brct2"><span style="visibility: hidden;">]</span></span></div>
               </div></div>
           </section>



           <section id="6" class="scroll_over">

               <!--faq-->

               <div class="faq-div" id="faq">

                  <div class="container-fluid">

                      <h3 class="heading-tabs">FAQ</h3>

                      <div class="col-sm-12">

                          <?php echo do_shortcode('[sp_faq category="137"]'); ?>

                      </div>

                  </div>

              </div>

              <!--faq-end-->



          </section>

          <!--course-instructir-end-->



      </div>

  </div>

</div>







</div>

<!-- Modal video form -->

<div class="modal fade" id="show_course_video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog certficate-popup" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="section-hdg">

            <h1>Register here</h1>

            <div class="border-new"></div>

        </div>



    </div>

    <div class="modal-body show-crs video_course">

        <?php //echo do_shortcode('[contact-form-7 id="3364" title="recording access"]');?>
        <?php echo do_shortcode('[woocommerce_simple_registration]'); ?>

    </div>

</div>

</div>

</div><!-- /.modal mixer image -->

<!-- Modal video form -->







<!-- Modal video form -->

<div class="modal fade" id="free_trail_video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog certficate-popup" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="section-hdg">

            <h1>Register Here</h1>

            <div class="border-new"></div>

        </div>



    </div>

    <div class="modal-body register-pop">

        <?php echo do_shortcode('[contact-form-7 id="7793" title="free trail form"]');?>

    </div>

</div>

</div>

</div><!-- /.modal mixer image -->



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog certficate-popup" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="section-hdg">

            <h1>Certificate</h1>

            <div class="border-new"></div>

        </div>



    </div>

    <div class="modal-body">

        <?php $image = get_field('certificate_image');

        if (!empty($image)) {?> 

        <img src="<?php echo $image['url']; ?>"class="img-responsive"/>

        <?php }?> 

    </div>



</div>

</div>

</div><!-- /.modal mixer image -->



<!-- Modal see batches -->

<div class="modal fade" id="seebatches" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog batch-popnn" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="section-hdg">

            <h1>Batches</h1>

            <div class="border-new"></div>

            <p>Enroll now without selecting a batch and proceed with the payment. You can select a batch later from My Courses page.</p>

        </div>

    </div>

    <div class="modal-body">

     <!--table-responsive-->

     <div class="table-responsive">

        <table class="batch-table">

            <thead>

                <tr>

                    <th>DATE</th>

                    <th>DAYS</th>

                    <th>TIME</th>

                    <th style="border-collapse: collapse; padding: 0px;">



                        <table style="width: 100%; border: 0px none !important;">

                          <tbody><tr>

                            <th colspan="2" style="border: 0px none !important; padding: 5px 0px;">FEE DETAILS</th>

                        </tr>

                        <tr>

                            <th style="border-bottom: 0px none; border-left: 0px none; padding: 5px 12px;">Full Payment</th> 

                            <th style="border-bottom: 0px none; border-right: 0px none; padding: 5px;">Two Installment</th>

                        </tr>



                    </tbody></table>



                </th>

                <th>ENROLL</th>

            </tr>

        </thead>

    <tbody>

    <?php $price = get_post_meta( get_the_ID(), '_regular_price', true); echo "The price is" . $price;?>

        <tr>

          <?php $date = get_field('batch_date', false, false);

          $date = new DateTime($date);

          ?>

          <?php if (get_field('batch_date') != "") { ?><td><?php echo $date->format('j M Y'); ?></td><?php }?>

          <?php if (get_field('batch_days') != "") { ?><td><?php echo get_field('batch_days'); ?></td><?php }?>

          <?php if (get_field('batch_time') != "") { ?><td><?php echo get_field('batch_time'); ?></td><?php }?>

          <td style="padding: 0px;">

              <table style="width: 100%; border: 0px none;">

                  <tbody><tr>

                    <td style="border-top:0px; border-bottom:0px; border-left:0px;">

                        <?php if (get_field('batch_full_price_1') != "") { ?>

                        <span class="opd-pr"><i class="fa fa-rupee" aria-hidden="true"></i><?php echo get_field('batch_full_price_1'); ?></span><?php }?>

                        <?php if (get_field('batch_full_price_2') != "") { ?>

                        <span class="new-pr"><i class="fa fa-rupee" aria-hidden="true"></i><?php echo get_field('batch_full_price_2'); ?></span><?php }?></td> 

                        <td style="border:0px;"><span class="opd-pr"><i class="fa fa-rupee" aria-hidden="true">

                            <?php if (get_field('batch_instal_price_1') != "") { ?>

                        </i><?php echo get_field('batch_instal_price_1'); ?></span><?php }?><?php if (get_field('batch_instal_price_2') != "") { ?><span class="new-pr">

                        <i class="fa fa-rupee" aria-hidden="true"></i>

                        <?php echo get_field('batch_instal_price_2'); ?></span>

                        <?php }?></td> 

                    </tr>





                </tbody></table>

            </td>

            <?php $product_link = get_post_meta($post->ID, 'product_link');

            ?>

            

            



            <td><span class="enroll"><a href="<?php echo $product_link[0];?>" target="_blank">Enroll Now</a></span></td>

        </tr>





        <tr>

         <?php $date = get_field('batch_date1', false, false);

         $date = new DateTime($date);

         ?>

         <?php if (get_field('batch_date1') != "") { ?><td><?php echo $date->format('j M Y'); ?></td><?php }?>

         <?php if (get_field('batch_days1') != "") { ?><td><?php echo get_field('batch_days1'); ?></td><?php }?>

         <?php if (get_field('batch_time1') != "") { ?><td><?php echo get_field('batch_time1'); ?></td><?php }?>

         <td style="padding: 0px;">

          <table style="width: 100%; border: 0px none;">

              <tbody><tr>

                <td style="border-top:0px; border-bottom:0px; border-left:0px;">

                    <?php if (get_field('batch_full_price_1') != "") { ?>

                    <span class="opd-pr"><i class="fa fa-rupee" aria-hidden="true"></i><?php echo get_field('batch_full_price_1'); ?></span><?php }?>

                    <?php if (get_field('batch_full_price_2') != "") { ?>

                    <span class="new-pr"><i class="fa fa-rupee" aria-hidden="true"></i><?php echo get_field('batch_full_price_2'); ?></span><?php }?></td> 

                    <td style="border:0px;"><span class="opd-pr"><i class="fa fa-rupee" aria-hidden="true">

                        <?php if (get_field('batch_instal_price_1') != "") { ?>

                    </i><?php echo get_field('batch_instal_price_1'); ?></span><?php }?><?php if (get_field('batch_instal_price_2') != "") { ?><span class="new-pr">

                    <i class="fa fa-rupee" aria-hidden="true"></i>

                    <?php echo get_field('batch_instal_price_2'); ?></span>

                    <?php }?></td> 

                </tr>





            </tbody></table>

        </td>

        <?php $product_link = get_post_meta($post->ID, 'product_link');

        ?>







        <td><span class="enroll"><a href="<?php echo $product_link[0];?>" target="_blank">Enroll Now</a></span></td>

    </tr>









</tbody>







</table>



</div>

<!--table-responsive-end-->

</div>



</div>

</div>

</div>

<!-- Modal see batches end-->





<div class="modal fade" id="download_broucher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog certficate-popup" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="section-hdg">

            <h1>Register Here</h1>

            <div class="border-new"></div>

        </div>



    </div>

    <div class="modal-body register-pop">

        <?php //echo do_shortcode('[contact-form-7 id="7983" title="Leadform"]');?>
        <?php echo do_shortcode('[woocommerce_simple_registration]'); ?>

    </div>

</div>

</div>

</div><!-- /.modal mixer image -->

<div class="modal fade" id="download_resources" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog certficate-popup" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <div class="section-hdg">

            <h1>Register Here</h1>

            <div class="border-new"></div>

        </div>



    </div>

    <div class="modal-body register-pop">

        <?php //echo do_shortcode('[contact-form-7 id="7983" title="Leadform"]');?>
        <?php echo do_shortcode('[woocommerce_simple_registration]'); ?>

    </div>

</div>

</div>

</div><!-- /.modal mixer image -->

<div class="modal fade bs-example-modal-lg orange-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="orange_popup" style="top:68px;opacity:1">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4></h4>
      </div>
      <div class="modal-body">
        <?php if (get_field('offer_heading_title') != "") { ?>
        <h3><?php echo get_field('offer_heading_title'); ?></h3>
        <?php }?>
    </div>

</div>

</div>
</div>




<!-- <script type='text/javascript' src='http://doodlebluemobile.com/edvancer/wp-includes/js/comment-reply.min.js?ver=4.7.5'></script> 
<script type='text/javascript' src='http://doodlebluemobile.com/edvancer/wp-admin/js/password-strength-meter.min.js?ver=4.7.5'></script>
<script type='text/javascript' src='//doodlebluemobile.com/edvancer/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.1.0'></script> -->
<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
  (function(){
     jQuery(window).on("load",function(){

        jQuery(".my-bodhover").mCustomScrollbar({
           theme:"light-3",
           scrollButtons:{enable:true}
       });

    });
     jQuery(window).on("load",function(){
        jQuery('#orange_popup').modal('show');
        jQuery(".modal-backdrop.in").css("opacity","0");

    });
     

 })(jQuery);



</script>
<script>    

    jQuery(document).ready(function(){



        jQuery( ".carousel-inner .item:first-child" ).addClass("active");

        var sections = jQuery('section')

        , nav = jQuery('.minj')

        , nav_height = nav.outerHeight();



        jQuery(window).on('scroll', function () {

          var cur_pos = jQuery(this).scrollTop();



          sections.each(function() {

            var top = jQuery(this).offset().top - nav_height,

            bottom = top + jQuery(this).outerHeight();



            if (cur_pos >= top && cur_pos <= bottom) {

              nav.find('a').removeClass('active');

              sections.removeClass('active');



              jQuery(this).addClass('active');

              nav.find('a[href="#'+jQuery(this).attr('id')+'"]').addClass('active');

          }

      });

      });



        nav.find('a').on('click', function () {

          var $el = jQuery(this)

          , id = $el.attr('href');



          jQuery('html, body').animate({

            scrollTop: jQuery(id).offset().top - nav_height

        }, 100);



          return false;

      });

    });

</script>

<script>

    jQuery(window).scroll(function() {

     var hT = jQuery('#addidr').offset().top,

     hH = jQuery('#addidr').outerHeight(),

     wH = jQuery(window).height(),

     wS = jQuery(this).scrollTop()-10;

     console.log((hT-wH) , wS);

     if (wS > (hT+hH-wH)){

      jQuery(".minj").addClass("tab-fixed");

  }

  else{

    jQuery(".minj").removeClass("tab-fixed");

}

});



</script>
