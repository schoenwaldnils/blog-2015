<article class="Article l-contentBox l-paddingVertical30 l-marginBottom30 u-posRelative">
  <div class="l-paddingHorizontal30">
    <h1 class="Article-title">
      <a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">
        <?php the_title(); ?>
      </a>
    </h1>
    <?php if (!is_404()) { ?>
      <div class="Article-meta l-marginBottom20 u-colorRed u-fontDezi">
        <div class="Arrange">
          <div class="Arrange-sizeFit">
            <a class="Article-time u-textNoWrap" href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>" title="<?php echo get_the_date('Y-m'); ?>">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <div class="Icon Icon--calendar"></div>
                <?php echo get_the_date(); ?>
              </time>
            </a>
          </div>
          <div class="Arrange-sizeFit">
            <a class="Article-author u-textNoWrap" href="<?php echo the_author_twitter_url(); ?>" title="<?php echo the_author(); ?>" rel="author" target="_blank">
              <div class="Icon Icon--user"></div>
              <?php the_author(); ?>
            </a>
          </div>
          <?php if (has_tag()) { ?>
            <div class="Arrange-sizeFill u-textRight">
              <div class="Icon Icon--tag"></div>
              <?php the_tags(''); ?>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>
  </div>
  <?php if (has_post_thumbnail()) { ?>
    <a class="Article-banner u-block" href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">
      <figure>
        <?php the_post_thumbnail('post-banner'); ?>
      </figure>
    </a>
  <?php } ?>
  <div class="l-paddingHorizontal30 u-richText">
    <?php the_content('<span class="icon-arrow-right"></span>'); ?>
  </div>
</article>
