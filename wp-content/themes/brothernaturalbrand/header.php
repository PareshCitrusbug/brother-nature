<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="initial-scale=1.0, user-scalable=no, maximum-scale=1, width=device-width" name="viewport" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="hero-section">
            <!-- header section start -->
            <header class="header">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand" href="<?= get_home_url() ?>">
                            <?php
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            if (has_custom_logo()) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="logo">';
                            } else {
                                echo "<img src='" . get_template_directory_uri() . "/assets/images/logo.png' alt='logo' class='logo' />";
                            }
                            ?>
                        </a>
                        <div class="navbar-collapse" id="navbarSupportedContent">
                            <div class="header-right-section">
                                <div class="header-right-top">
                                    <a class="btn common-btn white-btn" href="#contact-footer-section">Contact Us</a>
                                    <div class="social-icons">
                                        <?php if (get_option('instagram_link')) { ?> <a href="<?php echo get_option('instagram_link') ?>" target="_blank"><i class="fab fa-instagram"></i></a> <?php } ?>
                                        <?php if (get_option('facebook_link')) { ?><a href="<?php echo get_option('facebook_link') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a> <?php } ?>
                                        <?php if (get_option('linkedin_link')) { ?><a href="<?php echo get_option('linkedin_link') ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a> <?php } ?>
                                    </div>
                                </div>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'brother-primary-menu',
                                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0',
                                        'container' => 'ul',
                                        'add_a_class' => 'nav-link',
                                        'nav_menu_css_class' => 'nav-link',
                                    )
                                );
                                ?>
                                <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#our-products">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about-us">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#where-to-buy"> Where to Buy </a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- header section end -->