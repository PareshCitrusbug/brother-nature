<?php

/**
 * The main index template.
 *
 * @copyright  Copyright (c) 2024, Citrusbug
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>

<?php get_header() ?>
<div class="container">
    <!-- hero section start -->
    <div class="herovideobox">
        <h1>
            Welcome to<br />
            <span>Brother nature Brands</span>
        </h1>
    </div>
    <div class="video-wrapper">
        <video id="home-video" width="800px" height="526px" playsinline onclick="playPauseVideo()">
            <source src="https://cohort.demoproject.info/wp-content/uploads/2024/04/1409899-uhd_3840_2160_25fps.mp4" type="video/mp4" />
        </video>
    </div>
    <!-- hero section end -->

    <!-- aboutus section start -->
    <div class="about-section" id="about-us">
        <h1 class="about-title">About us</h1>
        <h4>“Life’s Too Short To Smoke Factory Weed”</h4>
        <p>
            Brother Nature Brands was created by fans of the flower for fans
            of the flower. We’re here because the world needs a team dedicated
            to the community of cannaseurs that value uncompromising quality.
            Our goal is to provide products that stay close to the source with
            safe farming, cultivation, and processing practices.
        </p>
        <p>
            We specialize in curating the finest top-shelf flower and all
            natural solventless cold water hash. We know that Craft Quality
            requires more expertise and care and simply can’t be matched by
            shortcut methods that focus only on high yield. We partner with
            the most ethical testing labs to avoid “THC Inflation” and provide
            full transparency on our Single Source, Never Remediated,
            Solventless hash and blends.
        </p>
        <p>
            We love our customers and fans and are dedicated to partnering
            with the finest dispensaries and processors. We pride ourselves on
            innovative product design, great customer service, and educating
            budtenders and consumers all while delivering great value for
            high-quality products.
        </p>
    </div>
    <!-- aboutus section end -->
</div>
</div>

<div class="product-wheretobuy-section" id="our-products">
    <div class="container">
        <!-- Product section start -->
        <div class="ourproduct-section">
            <div class="custom-title-box">
                <h1>Our Products</h1>
                <p>Uncompromising Cannaseur Quality</p>
            </div>

            <!-- Desktop Product list -->
            <div class="product-list desktop-productlist">
                <div class="product-item">
                    <div class="productimgwrappwer">
                        <img class="product-img" alt="productitem" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product1.png" />
                    </div>
                    <div class="product-content">
                        <h3>“Hash In Glass” Pre-Filled Chillums</h3>
                        <p>
                            Good to go and Ready to Rip. Our ½ Gram Pre-filled Chillums
                            are ready when you are. Filled with 50% Premium Ice Water
                            Hash Blended with Top Shelf Buds, no shake or trim. 
                            Available in Relaxing, Uplifting, and Balanced Custom
                            Blended Formulas. 
                        </p>
                        <h4>RECAP - REUSE - RECYCLE</h4>
                    </div>
                </div>
                <div class="product-item productalter">
                    <div class="productimgwrappwer">
                        <img class="product-img" alt="productitem" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product2.png" />
                    </div>
                    <div class="product-content">
                        <h3>Pure Ice Water Hash Coins</h3>
                        <p>
                            The original concentrate! Solventless, Single-source, Ice
                            Water Extraction. Our Bubble Hash meets only the highest
                            standards. Pressed into nifty convenient coins, sprinkle
                            into a joint or a bowl, or Top Off Your Chillum as you go. A
                            variety of flavors and effects
                        </p>
                        <h4>HASH LOVERS KNOW THE DIFFERENCE</h4>
                    </div>
                </div>
                <div class="product-item">
                    <div class="productimgwrappwer">
                        <img class="product-img" alt="productitem" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product3.png" />
                    </div>
                    <div class="product-content">
                        <h3>Hash Blend Pre Rolls</h3>
                        <p>
                            OMG! That’s what we hear from cannaseurs when they try the
                            best pre rolls on the market.  Using a blend of our
                            top-shelf curated flower and 40% Pure Ice Water Hash. It’s
                            the richest, cleanest, most satisfying smoke. No added
                            distillate, flavors, or terps- Uplifting, Relaxing, and
                            Balanced Forumlas
                        </p>
                        <h4>HASH LOVERS KNOW THE DIFFERENCE</h4>
                    </div>
                </div>
            </div>
            <!-- Desktop Product list -->

            <!-- Mobile Product list -->
            <div class="product-list owl-carousel owl-theme mobile-productlist">
                <div class="product-item item">
                    <div class="productimgwrappwer">
                        <img class="product-img" alt="productitem" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product1.png" />
                    </div>
                    <div class="product-content">
                        <h3>“Hash In Glass” Pre-Filled Chillums</h3>
                        <p>
                            Good to go and Ready to Rip. Our ½ Gram Pre-filled Chillums
                            are ready when you are. Filled with 50% Premium Ice Water
                            Hash Blended with Top Shelf Buds, no shake or trim. 
                            Available in Relaxing, Uplifting, and Balanced Custom
                            Blended Formulas. 
                        </p>
                        <h4>RECAP - REUSE - RECYCLE</h4>
                    </div>
                </div>
                <div class="product-item item">
                    <div class="productimgwrappwer">
                        <img class="product-img" alt="productitem" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product2.png" />
                    </div>
                    <div class="product-content">
                        <h3>Pure Ice Water Hash Coins</h3>
                        <p>
                            The original concentrate! Solventless, Single-source, Ice
                            Water Extraction. Our Bubble Hash meets only the highest
                            standards. Pressed into nifty convenient coins, sprinkle
                            into a joint or a bowl, or Top Off Your Chillum as you go. A
                            variety of flavors and effects
                        </p>
                        <h4>HASH LOVERS KNOW THE DIFFERENCE</h4>
                    </div>
                </div>
                <div class="product-item item">
                    <div class="productimgwrappwer">
                        <img class="product-img" alt="productitem" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/product3.png" />
                    </div>
                    <div class="product-content">
                        <h3>Hash Blend Pre Rolls</h3>
                        <p>
                            OMG! That’s what we hear from cannaseurs when they try the
                            best pre rolls on the market.  Using a blend of our
                            top-shelf curated flower and 40% Pure Ice Water Hash. It’s
                            the richest, cleanest, most satisfying smoke. No added
                            distillate, flavors, or terps- Uplifting, Relaxing, and
                            Balanced Forumlas
                        </p>
                        <h4>HASH LOVERS KNOW THE DIFFERENCE</h4>
                    </div>
                </div>
            </div>
            <!-- Mobile Product list -->
        </div>
        <!-- Product section end -->

        <!-- where to buy section start -->
        <div class="wheretobuy" id="where-to-buy">
            <div class="custom-title-box">
                <h1>Where to buy</h1>
            </div>
            <p>
                Brother Nature Brands can be found at finer provisioning centers
                across <span>Michigan</span>. We’re proud to partner with
                <span>more than 52 dispensaries</span> that are also focused on
                top-shelf quality, great value, educating bud-tenders and
                consumers, and unmatched customer service.
            </p>
            <div class="searchform">
                <label class="label">Enter Location, ZIP or City</label>
                <div class="formbox">
                    <input class="form-control" type="text" />
                    <button class="btn searchbtn">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/search.png" alt="search" />
                    </button>
                </div>
            </div>
        </div>
        <!-- where to buy section end -->
    </div>

    <!-- Map section start -->
    <div class="map-list-box">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186029.83435154!2d-86.55188183416199!3d43.23641034213622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88197cc3a93d9ed9%3A0x247e359134f72540!2sMuskegon%2C%20MI%2C%20USA!5e0!3m2!1sen!2sin!4v1716806863617!5m2!1sen!2sin" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="maplist">
            <a class="maplist-item" href="#">
                <h4>Black Market Cannabis Muskegon</h4>
                <div class="mapcontent">
                    <div class="mapleftdata">
                        <h5>Muskegon</h5>
                        <p>5.2 km</p>
                    </div>
                    <div class="direction">Get directions</div>
                </div>
            </a>
            <a class="maplist-item" href="#">
                <h4>Bodega MUSKEGON</h4>
                <div class="mapcontent">
                    <div class="mapleftdata">
                        <h5>Muskegon</h5>
                        <p>5.2 km</p>
                    </div>
                    <div class="direction">Get directions</div>
                </div>
            </a>
        </div>
    </div>
    <!-- Map section end -->
</div>

<?php get_footer() ?>