<?php //error_reporting(0);
    header("Connection: Keep-alive");
    //include('minify.php');
    include('includes/class.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Custom CMS Development Services - <?php echo SITE_NAME; ?></title>
    <meta name="description" content="<?php echo SITE_NAME; ?> offers custom CMS development services including WordPress, Shopify, Wix, Square, and Webflow. Manage your website content effortlessly with our tailored solutions!">
    <meta name="keywords" content="CMS development, WordPress development, Shopify development, Wix development, Square development, Webflow development, <?php echo SITE_NAME; ?>">
    <meta name="robots" content="INDEX,FOLLOW">

    <?php include("includes/header-settings.php"); ?>

    <?php include("includes/css-files.php"); ?>
    
</head>

<body class="gr-bg5">

    <div class="cursor"></div>
    <div class="cursor2"></div>

    <?php include("includes/header.php"); ?>

    <div class="th-hero-wrapper hero-4" id="hero">
        <div class="body-particle" id="body-particle"></div>
        <div class="hero-img tilt-active">
            <img src="assets/img/hero/hero_img_4_1.png" alt="Hero Image">
        </div>
        <div class="container">
            <div class="hero-style4">
                <div class="ripple-shape">
                    <span class="ripple-1"></span><span class="ripple-2"></span><span class="ripple-3"></span><span class="ripple-4"></span><span class="ripple-5"></span><span class="ripple-6"></span>
                </div>
                <span class="hero-subtitle">CMS Development Service</span>
                <h1 class="hero-title">CMS Development</h1>
                <h4>Streamline Your Website With Content Management</h4>
                <p class="hero-text">
                    Softianz specializes in CMS development to streamline and simplify your content management processes. We have CMS experts proiding the services for multiple platforms like WordPress, Shopify, Wix, Square and many other CMS. Whether you need a new CMS or enhancements to your existing system, we have the expertise to deliver scalable and efficient solutions.
                </p>
                <div class="btn-group">
                    <a href="#" class="th-btn style4 style-radius" data-bs-toggle="modal" data-bs-target="#modalContactForm">
                        Get Started<i class="fa-regular fa-arrow-right ms-2"></i>
                    </a>
                    <!--<a href="tel:+2586232325" class="th-btn style4 style-radius">Call us: +258 6232 3258</a>-->
                    
                </div>
            </div>
        </div>
        <div class="triangle-1"></div>
        <div class="triangle-2"></div>
        <div class="hero-shape2">
            <img src="assets/img/hero/hero_shape_2_2.png" alt="shape">
        </div>
        <div class="hero-shape3">
            <img src="assets/img/hero/hero_shape_2_3.png" alt="shape">
        </div>
    </div>



    <!--==============================
            Portfolio
    ==============================-->
    <section class="overflow-hidden bg-white space">
        <div class="container th-container5">
            <div class="row">
                <div class="col-xl-4">
                    <div class="title-area mb-50 text-center text-md-start">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span>
                                <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                            </div>
                            CMS Development Portfolio
                        </span>
                        <h2 class="sec-title">Empower Your Online Presence</h2>
                        <p class="section-text">
                            Efficient content management is crucial for businesses, and Softianz recognizes its significance through our comprehensive CMS Development services. We specialize in creating customize CMS solutions that empower businesses to effortlessly manage their website's digital content.
                        </p>
                        <div class="two-column customchecklist">
                            <div class="checklist style2">
                                <ul>
                                    <li><i class="far fa-check"></i> WordPress</li>
                                    <li><i class="far fa-check"></i> Wix</li>
                                    <li><i class="far fa-check"></i> Webflow</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li><i class="far fa-check"></i> Shopify</li>
                                    <li><i class="far fa-check"></i> Square</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php /*
                    <div class="project-btn">
                        <a href="#" class="th-btn style-border style-radius" data-bs-toggle="modal" data-bs-target="#modalContactForm">
                            Get Your Logo
                        </a>
                    </div>
                    <?php */ ?>
                </div>
                <div class="col-xl-8">
                    <div class="slider-area project-slider4">
                        <div class="swiper th-slider has-shadow" id="projectSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="project-box4">
                                        <div class="project-img">
                                            <img src="https://web.archive.org/web/20210417173637im_/https://www.digitrillion.com/images/logo/kingmonk-digitrillion.jpg" alt="project">
                                        </div>
                                        <div class="project-content">
                                            <div class="media-body">
                                                <h3 class="box-title"><a href="project-details.html">Technology Growth</a></h3>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="project-box4">
                                        <div class="project-img">
                                            <img src="https://web.archive.org/web/20210417173637im_/https://www.digitrillion.com/images/logo/braintech-digitrillion.jpg" alt="project">
                                        </div>
                                        <div class="project-content">
                                            <div class="media-body">
                                                <h3 class="box-title"><a href="project-details.html">IT Consultency</a></h3>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="project-box4">
                                        <div class="project-img">
                                            <img src="https://web.archive.org/web/20210417173637im_/https://www.digitrillion.com/images/logo/deepdiet-digitrillion.jpg" alt="project">
                                        </div>
                                        <div class="project-content">
                                            <div class="media-body">
                                                <h3 class="box-title"><a href="project-details.html">Technology Growth</a></h3>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="project-box4">
                                        <div class="project-img">
                                            <img src="https://web.archive.org/web/20210417173637im_/https://www.digitrillion.com/images/logo/pineapple-digitrillion.jpg" alt="project">
                                        </div>
                                        <div class="project-content">
                                            <div class="media-body">
                                                <h3 class="box-title"><a href="project-details.html">IT Consultency</a></h3>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--============================
            Choose Us Area  
    ==============================-->
    <div class="why-sec-v2" data-bg-src="assets/img/bg/why_bg_2.jpg">
        <div class="container space">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box5">
                        <img class="tilt-active" src="assets/img/normal/why_2_1.png" alt="Why">
                        <div class="year-counter">
                            <h3 class="year-counter_number"><span class="counter-number">50</span>+</h3>
                            <p class="year-counter_text">Clients Active</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35">
                        
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
                            </div>WHY CHOOSE US
                        </span>
                        <h2 class="sec-title">Revolutionize The <span class="text-theme">Content Management Solutions</span></h2>
                    </div>
                    <p class="mt-n2 mb-30 section-text">
                       Discover the power of seamless content management across WordPress, Shopify, Wix, and Square with Softianz's cutting-edge CMS Development solutions. Our expertise lies in creating bespoke CMS solutions according to your specific needs, empowering you to effortlessly update and maintain your digital content. Choose Softianz for CMS Development and unlock the potential for accelerated growth and success for your business.
                    </p>
                    <?php /*
                    <div class="about-feature-wrap">
                        <div class="about-feature">
                            <div class="about-feature_icon">
                                <img src="assets/img/icon/about_feature_1_1.svg" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about-feature_title">Certified Company</h3>
                                <p class="about-feature_text">Best Provide Skills Services</p>
                            </div>
                        </div>
                        <div class="about-feature">
                            <div class="about-feature_icon">
                                <img src="assets/img/icon/about_feature_1_2.svg" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="about-feature_title">Expert Team</h3>
                                <p class="about-feature_text">Highly Skilled Team</p>
                            </div>
                        </div>
                    </div>*/ ?>
                    <div class="feature-circle-wrap">
                        <div class="feature-circle">
                            <div class="progressbar" data-path-color="#684DF4">
                                <div class="circle" data-percent="90">
                                    <div class="circle-num">50</div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="feature-circle_title">Satisfied Clients</h3>
                                <p class="feature-circle_text">Efficiently transition top-line ideas before market.</p>
                            </div>
                        </div>
                        <div class="feature-circle">
                            <div class="progressbar" data-path-color="#684DF4">
                                <div class="circle" data-percent="95">
                                    <div class="circle-num"></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="feature-circle_title">Design Quality</h3>
                                <p class="feature-circle_text">Efficiently transition top-line ideas before market.</p>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/numbers-counter.php"); ?>



    <!--==============================
            Price Area  
    ==============================-->
    <section class="space">
        <div class="container th-container5">
            <div class="title-area text-center">
                <span class="sub-title">
                    <div class="icon-masking me-2">
                        <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span>
                        <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                    </div>
                    Pricing Plans
                </span>
                <h2 class="sec-title">Effective Pricing Plans</h2>
                <p class="section-text">
                    Is your brand ready to stand out? Check out our CMS development pricings and choose the package that suits you best! With a range of prices, you can find the perfect fit for any budget. Unleash your potential, contact us now and see how we can help!
                </p>
            </div>
            <div class="row gy-4 justify-content-center">

                <div class="col-xl-4 col-md-6">
                    <div class="price-box th-ani ">
                        <h3 class="box-title">Normal Plan</h3>
                        <span class="offer-tag"></span>
                        <h4 class="price-box_price"><span class="currency">$</span>19.00</h4>
                        <h6 class="price-box_text">Get Popular Plan From Us</h6>
                        <div class="price-box_content">
                            <div class="available-list">
                                <ul>
                                    <li>Ad Management</li>
                                    <li>Multi-Language Content</li>
                                    <li>Conversational Bots</li>
                                </ul>
                            </div>
                            <a href="contact.html" class="th-btn btn-fw style-radius" data-bs-toggle="modal" data-bs-target="#modalContactForm">
                                Choose Plan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-box th-ani active">
                        <h3 class="box-title">Standard Plan</h3>
                        <span class="offer-tag"><span class="tag">Featured</span></span>
                        <h4 class="price-box_price"><span class="currency">$</span>29.00</h4>
                        <h6 class="price-box_text">Get Popular Plan From Us</h6>
                        <div class="price-box_content">
                            <div class="available-list">
                                <ul>
                                    <li>Ad Management</li>
                                    <li>Live Chat</li>
                                    <li>Multi-Language Content</li>
                                    <li> Conversational Bots</li>
                                    <li> Programmable Chatbots</li>
                                </ul>
                            </div>
                            <a href="contact.html" class="th-btn btn-fw style-radius" data-bs-toggle="modal" data-bs-target="#modalContactForm">
                                Choose Plan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-box th-ani ">
                        <h3 class="box-title">Ultimate Plan</h3>
                        <span class="offer-tag"></span>
                        <h4 class="price-box_price"><span class="currency">$</span>39.00</h4>
                        <h6 class="price-box_text">Get Popular Plan From Us</h6>
                        <div class="price-box_content">
                            <div class="available-list">
                                <ul>
                                    <li>Ad Management</li>
                                    <li>Multi-Language Content</li>
                                    <li>Conversational Bots</li>
                                </ul>
                            </div>
                            <a href="contact.html" class="th-btn btn-fw style-radius" data-bs-toggle="modal" data-bs-target="#modalContactForm">
                                Choose Plan
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

    <?php include("includes/contact-cta-section.php"); ?>

    <?php include("includes/testimonial-section.php"); ?>

    <?php include("includes/clients-logo-slider.php"); ?>

    <?php include("includes/footer.php"); ?>
    
    <?php include("includes/cta-modal-popup.php"); ?>

    <?php include("includes/js-files.php"); ?>

</body>

</html>