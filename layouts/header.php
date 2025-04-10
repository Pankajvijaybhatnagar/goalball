<?php
     include 'menus.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
    <title>Goalball Federation of India</title>



    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/color3.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <main>
        <div id="preloader">
            <div class="preloader-inner">
                <!-- <i class="preloader-icon thm-clr fas fas fa-medal"></i> -->
                <img src="assets/images/logo2.png" alt="">
            </div>
        </div><!-- Page Loader -->
        <header class="style3 w-100">
            <div class="top-noti scndry-bg text-center w-100">
                <div class="container">
                    <p class="mb-0">Goalball Federation of India <a class="simple-link d-inline-block"
                            href="javascript:void(0);" title="">Learn More</a></p>
                </div>
            </div>
            <div class="topbar bg-color11 w-100">
                <div class="container">
                    <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="header-contact position-relative"><i
                                class="fas fa-phone position-absolute"></i>+911234567890</div>
                        <div class="topbar-right d-inline-flex align-items-center flex-wrap">
                            <ul class="top-links mb-0 list-unstyled d-inline-flex align-items-center flex-wrap">
                                <li><a href="#" title="">Training</a></li>
                                <li><a href="#" title="">Services</a></li>
                                <li><a href="#" title="">Campus</a></li>
                            </ul>
                            <div class="social-links d-inline-flex">
                                <a href="https://twitter.com/" title="Twtiiter" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                                <a href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                            <!-- <a class="search-btn d-inline-block position-relative" href="javascript:void(0);" title=""><i class="fas fa-search"></i></a> -->
                        </div>
                    </div>
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-wrap position-relative w-100">
                <div class="container">
                    <div
                        class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                        <div class="logo v2 z1 bg-color6 shadow position-absolute text-center">
                            <h1 class="mb-0"><a class="d-block" href="index.html" title="Home"><img class="img-fluid"
                                        width="100px" src="assets/images/logo-2.png" alt="Logo"
                                        srcset="assets/images/logo-2.png"></a></h1>
                        </div><!-- Logo -->
                        <nav class="d-flex flex-wrap align-items-center justify-content-between w-100">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <?php
                                    foreach ($menus as $key => $value) {
                                        echo '<li class="menu-item' . (!empty($value['submenus']) ? '-has-children' : '') . '"><a href="' . $value['link'] . '" title="">' . $key . '</a>';
                                        
                                        if (!empty($value['submenus'])) {
                                            echo '<ul class="mb-0 list-unstyled">';
                                            foreach ($value['submenus'] as $submenuKey => $submenuValue) {
                                                echo '<li><a href="' . $submenuValue['link'] . '" title="">' . $submenuKey . '</a></li>';
                                            }
                                            echo '</ul>';
                                        }
                                        
                                        echo '</li>';
                                    }
                                    ?>
                                    <!-- <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a> -->

                                </ul>
                            </div>
                            <!-- <div class="header-right d-inline-flex flex-wrap align-items-center">
                                <a class="thm-btn v2 scndry-bg brd-rd5 d-inline-block position-relative overflow-hidden"
                                    href="#" title="">login</a>
                            </div> -->
                        </nav><!-- Navigation -->
                    </div>
                </div>
            </div><!-- Logo & Menu Wrap -->
        </header><!-- Header -->
        <div class="header-search d-flex flex-wrap align-items-center position-fixed w-100">
            <span class="search-close-btn position-absolute"><i class="fas fa-times"></i></span>
            <form class="w-100 position-relative">
                <button type="submit"><i class="fas fa-search"></i></button>
                <input type="text" placeholder="Search">
            </form>
        </div><!-- Header Search -->
        <div class="sticky-menu">
            <div class="container">
                <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo">
                        <h1 class="mb-0"><a class="d-block" href="index.html" title="Home"><img class="img-fluid"
                                    width="100px" src="assets/images/logo-2.png" alt="Logo"
                                    srcset="assets/images/logo-2.png"></a></h1>
                    </div><!-- Logo -->
                    <nav class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="header-left">
                            <ul class="mb-0 list-unstyled d-inline-flex">
                            <?php
                                    foreach ($menus as $key => $value) {
                                        echo '<li class="menu-item' . (!empty($value['submenus']) ? '-has-children' : '') . '"><a href="' . $value['link'] . '" title="">' . $key . '</a>';
                                        
                                        if (!empty($value['submenus'])) {
                                            echo '<ul class="mb-0 list-unstyled">';
                                            foreach ($value['submenus'] as $submenuKey => $submenuValue) {
                                                echo '<li><a href="' . $submenuValue['link'] . '" title="">' . $submenuKey . '</a></li>';
                                            }
                                            echo '</ul>';
                                        }
                                        
                                        echo '</li>';
                                    }
                                    ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- Sticky Menu -->
        <div class="rspn-hdr">
            <div class="rspn-mdbr">
                <div class="rspn-scil d-inline-flex flex-wrap">
                    <a class="twitter-hvr" href="https://twitter.com/" title="Twtiiter" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <a class="facebook-hvr" href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="youtube-hvr" href="https://www.youtube.com/" title="Youtube" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                    <a class="linkedin-hvr" href="https://www.linkedin.com/" title="Linkedin" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <form class="rspn-srch">
                    <input type="text" placeholder="Enter Your Keyword">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="lg-mn">
                <div class="logo">
                    <h1 class="mb-0 d-block"><a href="index.html" title="Home"><img width="140px"
                                src="assets/images/logo-2.png" alt="Logo"></a></h1>
                </div>
                <div class="rspn-cnt">
                    <span><i class="thm-clr far fa-envelope"></i><a href="mailto:info@youremailid.com"
                            title="">info@youremailid.com</a></span>
                    <span><i class="thm-clr fas fa-phone-alt"></i>+911234567890</span>
                </div>
                <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
            </div>
            <div class="rsnp-mnu">
                <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                <?php
                                    foreach ($menus as $key => $value) {
                                        echo '<li class="menu-item' . (!empty($value['submenus']) ? '-has-children' : '') . '"><a href="' . $value['link'] . '" title="">' . $key . '</a>';
                                        
                                        if (!empty($value['submenus'])) {
                                            echo '<ul class="mb-0 list-unstyled">';
                                            foreach ($value['submenus'] as $submenuKey => $submenuValue) {
                                                echo '<li><a href="' . $submenuValue['link'] . '" title="">' . $submenuKey . '</a></li>';
                                            }
                                            echo '</ul>';
                                        }
                                        
                                        echo '</li>';
                                    }
                                    ?>
                </ul>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->