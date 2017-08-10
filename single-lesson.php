<?php get_header(); ?>
<?php the_post(); ?>
<div class="eightcol column">
  <h2 class="styleh1">
    <?php the_title(); ?>
  </h2>
  <?php the_content(); ?>
  <?php comments_template('/questions.php'); ?>
</div>
<aside class="sidebar fourcol column last">
  <?php get_template_part('sidebar', 'lesson'); ?>
</aside>
<?php get_footer(); ?>
