<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
        <link type="text/plain" rel="author" href="<?php echo get_stylesheet_directory_uri(); ?>/humans.txt" />
        <title><?php bloginfo( 'name' ); ?> <?php wp_title(); ?></title>
        <meta name='viewport' content='width=device-width'>
        <link rel='pingback' href='<?php bloginfo( 'pingback_url' ); ?>' />

        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/media/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/media/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/media/favicon-160x160.png" sizes="160x160" />
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/media/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/media/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/media/favicon-16x16.png" sizes="16x16" />
        
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <a class="header--logo" href='<?php echo get_option('home'); ?>' title='<?php echo get_option('blogname'); ?>' >
                        <svg class="header--logo-svg" width="85" height="56">
                          <image xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/media/logo.svg" src="<?php echo get_stylesheet_directory_uri(); ?>/media/logo.png" width="85" height="56" />
                        </svg>
                    </a>
                </div>
                <div class="col-sm-10 col-xs-12">
                    <a class="header--blog-name" href="<?php echo get_option('home'); ?>" title="<?php echo get_option('blogname'); ?>">
                        <?php echo get_option('blogname'); ?>
                    </a>
                </div>
            </div>
        </header>
