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
    <title>Contact Us - <?php echo SITE_NAME; ?></title>
    <meta name="description" content="<?php echo SITE_NAME; ?> - Our team of experts is eager to discuss your project, understand your goals, and provide tailored solutions that meet your needs. Whether you're looking for web development, digital marketing, or software solutions, we're here to help">
    <meta name="keywords" content="<?php echo SITE_NAME; ?>, Contact Us, Design Services, Development Services, Digital Marketing Solutions">
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
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
        Contact Area  
    ==============================-->
    <?php /*
    <div class="space">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">Our Office Address</h4>
                            <span class="contact-info_text">Burnsville, MN 55337 Streat, <br> United States</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">Call Us Anytime</h4>
                            <span class="contact-info_text">
                                <a href="tel:+65485965789">(+65) - 48596 - 5789</a>
                                <a href="tel:+65485965789">+65-48596-5789</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="box-title">Send An Email</h4>
                            <span class="contact-info_text">
                                <a href="mailto:info.example@gmail.com">info.example@gmail.com</a>
                                <a href="mailto:info@webteck.com">info@webteck.com</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php */ ?>

    <!--==============================
        Contact Area  
    ==============================-->

    <section class="bg-top-right bg-white overflow-hidden space" id="blog-sec" data-bg-src="assets/img/bg/blog_bg_1.png">
        <div class="container th-container5">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="title-area mb-30 text-xl-start">
                        <span class="sub-title style1">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span>
                                <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                            </div>
                            Feel free to contact!
                        </span>
                        <h2 class="sec-title">Get free IT business consultation
                            today.</h2>
                        <p class="theme-text-dark">We’re happy to answer any questions you may have and help you determine
                            which of our services best fit your needs.</p>
                    </div>

                    <div class="row space-extra3">
                        <div class="col-xl-6 col-md-6">

                            <div class="feature-wrapper style3">
                                <div class="feature-icon">
                                    <a href="tel:+18003568933"><img src="assets/img/icon/call_2.svg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <span class="header-info_label">Call us at:</span>
                                    <p class="header-info_link"><a href="tel:<?php echo str_replace("-", "", CONTACT_NO); ?>"><?php echo CONTACT_NO; ?></a></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-6 col-md-6">

                            <div class="feature-wrapper style3">
                                <div class="feature-icon">
                                    <a href="tel:+18003568933"><img src="assets/img/icon/call_2.svg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <span class="header-info_label">Email us at:</span>
                                    <p class="header-info_link"><a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="work-area">
                        <h5 class="box-title mb-30">Our Locations</h5>
                        <div class="work-item_wrapper">
                            <div class="work-item">
                                <span class="work-item_number">01</span>
                                <div>
                                    <h5 class="">KARACHI OFFICE</h5>
                                    <p class="">Suite # 336 Bhayani Center, Block M North Nazimabad Town, Karachi</p>
                                </div>
                            </div>
                            <div class="work-item">
                                <span class="work-item_number">02</span>
                                <div>
                                    <h5 class="">UAE OFFICE</h5>
                                    <p class="">OFFICE 21 LEVEL 30 H HOTEL DUBAI, 40155, DUBAI, UAE</p>
                                </div>
                            </div>
                            <?php /*
                            <div class="work-item">
                                <span class="work-item_number">02</span>
                                <div>
                                    <h5 class="">USA OFFICE</h5>
                                    <p class="">16192 COASTAL HIGHWAY, LEWES, DELAWARE 19958, COUNTRY OF SUSSEX, UNITED STATES</p>
                                </div>
                            </div>
                            */ ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="appointment-area-wrapp">
                        <h6 class="title">Please fill in the information below</h6>
                        <form action="#" method="POST" class="appointment-form3 contact_form input-smoke" id="contact_form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Full Name*</label>
                                    <input type="text" class="form-control" name="name" id="full_name" required autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Email Address*</label>
                                    <input type="email" class="form-control" name="email" id="email_address" required autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Contact Number*</label>
                                    <input type="tel" class="form-control" name="number" id="contact_number" required autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Company Website</label>
                                    <input type="text" class="form-control" name="website" id="company_website" autocomplete="off">
                                </div>
                                <input type="hidden" name="form_type" value="contact_form">
                                <input type="hidden" name="form_submit_url" value="<?php echo $current_url; ?>">
                                <div class="form-group col-12">
                                    <label for="name">About Company / Organization</label>
                                    <input type="text" class="form-control" name="about_company" id="about_company" autocomplete="off">
                                </div>
                                <div class="form-group col-12">
                                    <label for="name">Describe Your Project*</label>
                                    <textarea name="message" id="project_details" cols="30" rows="3" class="form-control" required></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button type="submit" class="th-btn btn-fw">Submit Now</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php /*
    <div class="bg-smoke space" data-bg-src="assets/img/bg/contact_bg_1.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="title-area mb-35 text-xl-start text-center">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_2.svg"></span>
                                <img src="assets/img/theme-img/title_shape_2.svg" alt="shape">
                            </div>contact with us!
                        </span>
                        <h2 class="sec-title">Have Any Questions?</h2>
                        <p class="sec-text">Enthusiastically disintermediate one-to-one leadership via business e-commerce. Dramatically reintermediate compelling process improvements rather than empowered relationships.</p>
                    </div>
                    <form action="mail.php" method="POST" class="contact-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="subject" id="subject" class="form-select">
                                    <option value="" disabled selected hidden>Select Subject</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Brand Marketing">Brand Marketing</option>
                                    <option value="UI/UX Designing">UI/UX Designing</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                </select>
                                <i class="fal fa-chevron-down"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn text-xl-start text-center col-12">
                                <button class="th-btn">Send Message<i class="fa-regular fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 

    <div class="map-sec">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sThemeholy!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>
    */ ?>

    <?php include("includes/clients-logo-slider.php"); ?>

    <?php include("includes/footer.php"); ?>
    
    <?php include("includes/js-files.php"); ?>

</body>

</html>