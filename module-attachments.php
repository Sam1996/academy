<?php if($attachments=ThemexCore::parseMeta($post->ID, 'lesson', 'attachments')) { ?>

<div class="widget sidebar-widget">
  <div class="widget-title">
    <div class="styleh4 nomargin">
      <?php _e('Attachments', 'academy'); ?>
    </div>
  </div>
  <div class="widget-content">
    <ul class="styled-list style-4">
      <?php foreach($attachments as $attachment) { ?>
      <li class="<?php echo $attachment['type']; ?>"><a href="<?php echo $attachment['url']; ?>" target="_blank"><?php echo $attachment['title']; ?></a></li>
      <?php } ?>
    </ul>
  </div>
</div>
<?php } ?>
