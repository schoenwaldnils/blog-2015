<header class="Header">
  <div class="l-maxWidth">
    <div class="Header-wrapLogo">
      <a class="Header-logo u-block" href="<?php echo get_option('home'); ?>" title="<?php echo get_option('blogname'); ?>">
        <?php echo component('svg', array('name' => 'logo')); ?>
      </a>
    </div>
    <a class="Header-title u-colorWhite u-fontTera u-fontRaleway" href="<?php echo get_option('home'); ?>" title="<?php echo get_option('blogname'); ?>">
      <?php echo get_option('blogname'); ?>
    </a>
  </div>
</header>
