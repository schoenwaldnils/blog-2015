<?php get_header(); ?>
<div class="l-maxWidth l-marginBottom30">
  <section class="Grid Grid--withGutter">
    <div class="Grid-cell u-sm-size2of3">
      <?php if (is_tag()) { ?>
        <h1 class="Tag u-fontTera l-contentBox l-padding30 l-marginBottom20">
          <?php single_tag_title(_e('Tag: '), true); ?>
        </h1>
      <?php } else if (is_archive()) { ?>
        <h1 class="Tag u-fontTera l-contentBox l-padding30 l-marginBottom20">
          <?php post_type_archive_title(_e('Archive: '), true); ?>
        </h1>
      <?php } ?>
      <?php if (have_posts()) { ?>
        <?php while (have_posts()) { ?>
          <?php the_post(); ?>
          <?php echo component('article'); ?>
        <?php } ?>
        <?php if ( comments_open() || get_comments_number() ) { ?>
          <?php comments_template(); ?>
        <?php } ?>
      <?php } ?>
    </div>
    <div class="Grid-cell u-sm-size1of3">
      <?php get_sidebar(); ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>
