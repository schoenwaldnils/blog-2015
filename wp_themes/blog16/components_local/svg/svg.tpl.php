<svg class="Svg" class="Svg--<?php echo $name; ?>">
  <use <?php echo 'xmlns:xlink'; ?>="http://www.w3.org/1999/xlink" <?php echo 'xlink:href'; ?>="<?php echo get_template_directory_uri() . '/build/svg_sprite/symbol/svg/sprite.symbol.svg#' . $name; ?>"></use>
</svg>
