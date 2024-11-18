    <!--==============================
    Appointment (CTA) Area  
    ==============================-->
    <section class="bg-top-right bg-white overflow-hidden space" id="blog-sec" data-bg-src="assets/img/bg/blog_bg_1.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 pe-xxl-5 mb-40 mb-xl-0">
                    <div class="title-area mb-35 text-xl-start text-center">
                        <span class="sub-title">
                            <div class="icon-masking me-2">
                                <span class="mask-icon" data-mask-src="assets/img/theme-img/title_shape_1.svg"></span>
                                <img src="assets/img/theme-img/title_shape_1.svg" alt="shape">
                            </div>
                            APPOINTMENT NOW
                        </span>
                        <h2 class="sec-title">We're here to help build your <span class="text-theme">digital footprint</span></h2>
                    </div>
                    <p class="mt-n2 mb-30 text-xl-start text-center section-text">
                        Schedule an appointment with Softianz today! Our team of experts is eager to discuss your project, understand your goals, and provide best solutions that meet your needs. Simply fill out the appointment request form, and one of our representatives will get in touch with you shortly to confirm the details. <br />
                        Let's collaborate and bring your vision to life!
                    </p>
                    <?php /* Whether you're looking for design services, development solutions, or digital marketing solutions, we're here to help.  */ ?>
                    <div class="contact-feature-wrap">
                        <div class="contact-feature">
                            <div class="icon-btn">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Call Us On:</p>
                                <a href="tel:<?php echo str_replace("-", "", CONTACT_NO); ?>" class="contact-feature_link"><?php echo CONTACT_NO; ?></a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="icon-btn">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Quick Mail Us:</p>
                                <a href="mailto:<?php echo CONTACT_EMAIL; ?>" class="contact-feature_link"><?php echo CONTACT_EMAIL; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 ps-xl-4">
                    <h3 class="h4 mt-n2 mb-30 text-center">Make An Appointment</h3>
                    <form action="mail.php" method="POST" class="appoitment-form appointment_form ajax-contact">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" autocomplete="off">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" autocomplete="off">
                            </div>
                            <div class="form-group col-sm-6">
                                <select name="service" id="service" class="form-select">
                                    <option value="No Service Selected" disabled selected hidden>Select Service</option>
                                    <option value="Logo Design">Logo Design</option>
                                    <option value="Website Design">Website Design</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Website Development">Website Development</option>
                                    <option value="CMS Development">CMS Development</option>
                                    <option value="E-Commerce Development">E-Commerce Development</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="SEO / SMM">SEO / SMM</option>
                                    <option value="Paid Marketing Campaigns (PPC)">Paid Marketing Campaigns (PPC)</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number" autocomplete="off">
                            </div>
                            <input type="hidden" name="form_type" value="appointment_form">
                            <input type="hidden" name="form_submit_url" value="<?php echo $current_url; ?>">
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write Your Message" autocomplete="off"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn w-100">GET FREE CONCULTANCY</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
        </div>        
        <div class="shape-mockup" data-bottom="0" data-left="0">
            <div class="particle-2 small" id="particle-4"></div>
        </div>
    </section>
