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
    <title><?php echo SITE_NAME; ?> - You Digital Partner For Technology Solutions</title>
    <meta name="description" content="<?php echo SITE_NAME; ?> - Technology & IT Solutions">
    <meta name="keywords" content="<?php echo SITE_NAME; ?>, Technology & IT Solutions, Web Development Services, Mobile App Development Services, UI/UX Services, Logo Design Services, Website Design Services">
    <meta name="robots" content="INDEX,FOLLOW">

    <?php include("includes/header-settings.php"); ?>

    <?php include("includes/css-files.php"); ?>
    
</head>

<body class="gr-bg5">

    <div class="cursor"></div>
    <div class="cursor2"></div>

    <?php include("includes/header.php"); ?>

    <?php include("includes/hero-section.php"); ?>

    <?php include("includes/about-section.php"); ?>

    <?php include("includes/numbers-counter.php"); ?>    

    <?php include("includes/why-us-section.php"); ?>    

    <?php include("includes/parallax-cta-section.php"); ?>

    <?php include("includes/services-section.php"); ?>    

    <?php include("includes/contact-cta-section.php"); ?>

    <?php include("includes/testimonial-section.php"); ?>

    <?php include("includes/clients-logo-slider.php"); ?>

    <?php include("includes/footer.php"); ?>
    
    <?php include("includes/cta-modal-popup.php"); ?>

    <?php include("includes/js-files.php"); ?>

</body>

</html>