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
    <title>Comprehensive Digital Solutions - <?php echo SITE_NAME; ?></title>
    <meta name="description" content="Explore <?php echo SITE_NAME; ?>'s comprehensive range of digital solutions, including logo design, website design, website development, E-commerce solutinos, mobile app development, SEO, SMM, PPC, and more. Discover how we can help your business succeed online!">
    <meta name="keywords" content="logo design, website design, UI/UX design, website development, cms development, E-commerce development, mobile app development, SEO services, social media marketing, paid advertising, digital solutions, <?php echo SITE_NAME; ?>">
    <meta name="robots" content="INDEX,FOLLOW">

    <?php include("includes/header-settings.php"); ?>

    <?php include("includes/css-files.php"); ?>
    
</head>

<body class="gr-bg5">

    <div class="cursor"></div>
    <div class="cursor2"></div>

    <?php include("includes/header.php"); ?>

    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
            Service Area  
    ==============================-->
    <section class="service-sec space" id="service-sec" data-bg-src="assets/img/bg/service_bg_1.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-sm-10 px-xl-4">
                    <div class="title-area text-center">
                        <h2 class="sec-title">One window solution for Businesses seeking Digital Services</h2>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">01</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_1.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">Logo Design</a></h3>
                        <p class="service-card_text">Logo is not just a symbol, it's an identity, and we understand your identity should be unique, productive, and suitable to the corporate world.</p>
                        <a href="<?php echo SERVER; ?>logo-design" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">02</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_grid_3.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">UI/UX Design</a></h3>
                        <p class="service-card_text">UI/UX design is commonly defined as a process to design experiences and interactions with a digital or physical product that is useful</p>
                        <a href="<?php echo SERVER; ?>ui-ux-design" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">03</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_box_1.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">Website Design</a></h3>
                        <p class="service-card_text">A beautiful website is a piece of art. And to keep a website beautiful, simple and professional, a balanced distribution of content and graphic</p>
                        <a href="<?php echo SERVER; ?>website-design" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">04</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_4.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">Website Development</a></h3>
                        <p class="service-card_text">Website enables businesses to showcase their unique identity and differentiate themselves from competitors. Our experienced development team</p>
                        <a href="<?php echo SERVER; ?>website-development" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">05</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_5.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">CMS Development</a></h3>
                        <p class="service-card_text">CMS development is a cornerstone of modern digital infrastructure, offering businesses a versatile platform to manage, organize, and publish content efficiently.</p>
                        <a href="<?php echo SERVER; ?>cms-development" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">06</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_6.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">E-commerce Development</a></h3>
                        <p class="service-card_text">E-commerce is at the forefront of modern business strategies, enabling companies to expand their reach, drive sales, and create seamless shopping experience.</p>
                        <a href="<?php echo SERVER; ?>ecommerce-development" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">07</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_6.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">Mobile App Development</a></h3>
                        <p class="service-card_text">E-commerce is at the forefront of modern business strategies, enabling companies to expand their reach, drive sales, and create seamless shopping experience.</p>
                        <a href="<?php echo SERVER; ?>mobile-apps-development" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">08</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_6.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">Search Engine Optimization</a></h3>
                        <p class="service-card_text">E-commerce is at the forefront of modern business strategies, enabling companies to expand their reach, drive sales, and create seamless shopping experience.</p>
                        <a href="<?php echo SERVER; ?>seo-services" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">09</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_6.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">Social Media Marketing</a></h3>
                        <p class="service-card_text">E-commerce is at the forefront of modern business strategies, enabling companies to expand their reach, drive sales, and create seamless shopping experience.</p>
                        <a href="<?php echo SERVER; ?>smm-services" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="service-card_number">10</div>
                        <div class="shape-icon">
                            <img src="assets/img/icon/service_card_6.svg" alt="Icon">
                            <span class="dots"></span>
                        </div>
                        <h3 class="box-title"><a href="service-details.php">Paid Marketing Campaigns</a></h3>
                        <p class="service-card_text">E-commerce is at the forefront of modern business strategies, enabling companies to expand their reach, drive sales, and create seamless shopping experience.</p>
                        <a href="<?php echo SERVER; ?>paid-marketing-campaigns" class="th-btn">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        <div class="bg-shape">
                            <img src="assets/img/bg/service_card_bg.png" alt="bg">
                        </div>
                    </div>
                </div>

            </div>
           
        </div>
    </section>

    <?php include("includes/numbers-counter.php"); ?>

    <?php include("includes/testimonial-section.php"); ?>

    <?php include("includes/contact-cta-section.php"); ?>

    <?php include("includes/clients-logo-slider.php"); ?>

    <?php include("includes/footer.php"); ?>
    
    <?php include("includes/js-files.php"); ?>

</body>

</html>