<div class="contact-footer-section" id="contact-footer-section">
    <!-- Contact section start -->
    <div class="container">
        <div class="contactbox">
            <div class="contacttitle">
                <h1>Contact Us</h1>
                <p>
                    Keep in touch! Get the latest updates on new products, special
                    discounts, community updates, and events in your area: 
                </p>
            </div>
            <div class="contact-form">
                <h2>Stay Updated!</h2>

                <?php echo do_shortcode('[contact-form-7 id="39e8467" title="Footer Contact Us Form"]'); ?>
                <!-- <form class="form" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>" id="contact-form" autocomplete="off">
                    <div class="form-group">
                        <input type="text" name="name" required class="form-control" placeholder="Full Name" />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" required class="form-control" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" required class="form-control" placeholder="Phone Number" />
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="btn contactbtn">Submit</button>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
    <!-- Contact section start -->

    <!-- Footer section start -->
    <div class="container">
        <div class="footer-section">
            <img class="footer-logo" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo" />
            <div class="footer-menu">
                <?php

                $menuParameters = array(
                    'theme_location' => 'brother-footer_menu',
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                );

                echo strip_tags(wp_nav_menu($menuParameters), '<a>');

                ?>
            </div>

            <a href="#where-to-buy"><button class="btn footerbtn">Discover Location</button></a>
            <div class="footer-text">“ON A MISSION TO BE THE BEST”</div>
        </div>
    </div>
    <!-- Footer section start -->

    <!-- Copyright section start -->
    <div class="copyrightsection">
        <div class="copyrighttext">Copyright 2024</div>
        <div class="footer-social-box">
            <?php if (get_option('instagram_link')) { ?> <a href="<?php echo get_option('instagram_link') ?>" target="_blank"><i class="fab fa-instagram"></i></a> <?php } ?>
            <?php if (get_option('facebook_link')) { ?><a href="<?php echo get_option('facebook_link') ?>" target="_blank"><i class="fab fa-facebook-f"></i></a> <?php } ?>
            <?php if (get_option('linkedin_link')) { ?><a href="<?php echo get_option('linkedin_link') ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a> <?php } ?>
        </div>
    </div>
    <!-- Copyright section end -->
    <a class="scroll-to-top" href="#top"><i class="fas fa-caret-up"></i></a>
</div>
<?php wp_footer(); ?>

</div>

<!-- End of Page Wrapper -->

</body>

</html>