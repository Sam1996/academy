<?php
// Template Name: courses
get_header();

?>


<div class="banner_images">
    <?php
    $image = get_field('bannerimage');
    if (!empty($image)) {
        ?> 
        <div class="coursesbanner">
            <img src="<?php echo $image['url']; ?>" alt="banner" />

            <div class="coursestbbaner-up">
                <h1><?php echo get_field('course_name_head'); ?></h1>
                <?php } ?>
                <div class="border-new"></div>
                <p><?php echo get_field('course_name_description'); ?></p>
            </div>
        </div>


    </div>


<div class="container-fluid">
    <div class="sort-div col-xs-12 col-md-4 pull-right">
        <form action="" method="POST" name="sort-form">
            <span class="col-xs-4">
                <label for="orderby">Order by : </label>
            </span>
            <span class="col-xs-4">
                <select name="orderby">
                    <option value="ASC">A - Z</option>
                    <option value="DESC">Z - A</option>
                    <option value="DESC">Date</option>
                </select>
            </span>
            <span class="col-xs-4">
                <input type="submit" name="submit" value="Sort">
            </span>
        </form>
    </div>
</div>



<!--Specialization Courses-->
<div class="spcl-bg-new">
   <div class="full-spcl">
    <div class="section-hdg">
        <?php if (get_field('specialcourse_title') != "") { ?>
        <h1><?php echo get_field('specialcourse_title'); ?></h1>
        <?php } ?>
        <div class="border-new"></div>
        <?php if (get_field('specialcourse_description') != "") { ?>
        <p><?php echo get_field('specialcourse_description'); ?></p>
        <?php } ?>
    </div>
    <div class="container-fluid spl-cosmain">
        <div class="row">

            <?php echo do_shortcode('[courses category="138" number="8" columns="4" order="title"]'); ?>
        </div>
    </div>
</div>

</div>
</div>
<!--individual-course-->

<div class="container-fluid">
    <div class="section-hdg">
        <?php if (get_field('course_individual_title') != "") { ?>
        <h1><?php echo get_field('course_individual_title'); ?></h1>
        <?php } ?>
        <div class="border-new"></div>
        <?php if (get_field('course_individual_description') != "") { ?>
        <p><?php echo get_field('course_individual_description'); ?></p>
        <?php } ?>
    </div>

    

<div class="indv-crs">
    <div class="row">
        <?php if (get_field('courses_begining_level') != "") { ?>
        <h3 class="couser-sub-hd"><?php echo get_field('courses_begining_level'); ?></h3>
        <?php } ?>
        <?php echo do_shortcode('[courses category="131" number="4" columns="4" order="title"]');?>
    </div>
</div>
<div class="indv-crs">
    <div class="row">
        <?php if (get_field('courses_intermediate_level') != "") { ?>
        <h3 class="couser-sub-hd"><?php echo get_field('courses_intermediate_level'); ?></h3>
        <?php } ?>
        <?php echo do_shortcode('[courses category="132" number="8" columns="4" order="title"]');?>
    </div>
</div>
<div class="indv-crs">
    <div class="row">
        <?php if (get_field('courses_advance_level') != "") { ?>
        <h3 class="couser-sub-hd"><?php echo get_field('courses_advance_level'); ?></h3>
        <?php } ?>
        <?php echo do_shortcode('[courses category="130" number="8" columns="4" order="title"]');?>
    </div>
</div>
</div>


    <?php get_footer();?>


