<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title> 
            <?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            wp_title('|', true, 'right');
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php
        wp_head();
        ?>

    </head>
    <body <?php body_class(); ?>>
        <div class="ksdjf">                    
            <div class="container-fluid">
                <div class="header">
                    <div class="row" id="header">
                        <div class="col-md-4">
                            <div class="logo">
                               <?php if (andrina_is_preview()) { ?>
                                <a class="andrina_logo" href="<?php echo home_url(); ?>"><img src="<?php echo ANDRINA_DIR_URI . 'assets/images/andrina-logo.png';?>" alt="<?php wp_kses_post(bloginfo('name')); ?>"alt="<?php
                                                                         bloginfo('name');
                                                                         _e('logo', 'andrina-lite');
                                                                         ?>"/>
                                                                        </a>
                               <?php } elseif(andrina_get_option('andrina_logo') != ''){?>
                                <a class="andrina_logo" href="<?php echo home_url(); ?>">
                                    <img src="<?php echo esc_url(andrina_get_option('andrina_logo')); ?>" alt="<?php wp_kses_post(bloginfo('name')); ?>"alt="<?php
                                            bloginfo('name');
                                            _e('logo', 'andrina-lite');
                                        ?>"/>
                                </a>                              
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1> 
                               <?php }else { ?>
                                    <hgroup>
                                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                        <h5 class="site-description"><?php bloginfo('description'); ?></h5>
                                    </hgroup>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <!--Start Menu wrapper-->
                            <div class="menu_wrapper">
                                <div id="MainNav">
                                    <?php andrina_nav(); ?>                       
                                </div>
                            </div>
                            <!--End Menu-->
                        </div>
                    </div>
                </div>
                <?php
                    product_menu();
                ?>
            </div>
            <div class="main-content container-fluid">
                