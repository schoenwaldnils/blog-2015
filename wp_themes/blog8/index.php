<?php get_header(); ?>
<section class="row">
    <div class="col-xs-12 col-sm-8 col-md-9">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="content">
                <h1 class="article-title">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h1>
                <?php if (!is_404()) { ?>
                    <div class="aticle-meta">
                        <div class="meta-left">
                            <a href="<?php echo get_month_link(); ?>" title="<?php echo get_the_date('Y-m'); ?>">
                                <time class="icon-calendar" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                            </a>
                            <a class="meta-author icon-user" href="https://twitter.com/#!/<?php the_author_meta('twitter'); ?>" title="<?php the_author(); ?>" rel="author" target="_blank"><?php the_author(); ?></a>
                        </div>
                        <?php if (has_tag()) { ?>
                            <div class="meta-right icon-tag"><?php the_tags('') ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php
                if(has_post_thumbnail()) { ?>
                    <a class="post-banner" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <figure>
                            <?php the_post_thumbnail('post-banner'); ?>
                        </figure>
                    </a>
                <?php } ?>
                <?php the_content('<span class="icon-arrow-right"></span>'); ?>
            </article>
            <?php if ( comments_open() || get_comments_number() ) {
                comments_template();
            } ?>
        <?php endwhile; endif;?>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3">
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
