    <?php /*
    ==============================
            Mobile Menu
    ==============================
    */ ?>
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo SERVER; ?>"><img src="assets/img/logo-white.png" alt="<?php echo SITE_NAME; ?>"></a>
            </div>
            <div class="th-mobile-menu">
                <?php include("includes/header-navigation.php"); ?>
            </div>
        </div>
    </div>

    <?php /*
    ==============================
            HEADER AREA
    ==============================
    */ ?>
    <header class="th-header header-layout4 header-absolute">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container th-container5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a class="icon-masking" href="<?php echo SERVER; ?>">
                                    <img src="<?php echo IMAGES; ?>logo-white.png" alt="<?php echo SITE_NAME; ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu style2 d-none d-lg-inline-block">
                                <?php include("includes/header-navigation.php"); ?>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-lg-inline-block">
                            <div class="header-button">
                                <a href="#" class="th-btn style6 style-radius" data-bs-toggle="modal" data-bs-target="#modalContactForm">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>