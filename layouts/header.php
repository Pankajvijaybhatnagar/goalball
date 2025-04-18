<?php
include 'menus.php';
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Goalball Federation of India</title>
    <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">

    <!-- Your Original CSS Files -->
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
            <img src="assets/images/logo2.png" alt="">
        </div>
    </div>

    <header class="style3 w-100">
        <div class="top-noti scndry-bg text-center w-100">
            <div class="container">
                <p class="mb-0">Goalball Federation of India <a class="simple-link d-inline-block" href="javascript:void(0);" title="">Learn More</a></p>
            </div>
        </div>

        <div class="topbar bg-color11 w-100">
            <div class="container">
                <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="header-contact position-relative"><i class="fas fa-phone position-absolute"></i>+911234567890</div>
                    <div class="topbar-right d-inline-flex align-items-center flex-wrap">
                        <ul class="top-links mb-0 list-unstyled d-inline-flex align-items-center flex-wrap">
                            <li><a href="#" title="">Training</a></li>
                            <li><a href="#" title="">Services</a></li>
                            <li><a href="#" title="">Campus</a></li>
                        </ul>
                        <div class="social-links d-inline-flex">
                            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo and Main Menu -->
        <div class="logo-menu-wrap position-relative w-100">
            <div class="container">
                <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                    <div class="logo v2 z1 bg-color6 shadow position-absolute text-center">
                        <h1 class="mb-0"><a class="d-block" href="index.php" title="Home"><img class="img-fluid" width="100px" src="assets/images/logo-2.png" alt="Logo"></a></h1>
                    </div>
                    <nav class="d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="header-left">
                            <ul class="mb-0 list-unstyled d-inline-flex">
                                <?php
                                foreach ($menus as $key => $value) {
                                    $isActive = '';
                                    $hasSubmenus = !empty($value['submenus']);
                                    $isParentActive = false;

                                    if (!$hasSubmenus && basename($value['link']) === $currentPage) {
                                        $isActive = ' active';
                                    }

                                    if ($hasSubmenus) {
                                        foreach ($value['submenus'] as $submenuValue) {
                                            if (basename($submenuValue['link']) === $currentPage) {
                                                $isActive = ' active';
                                                $isParentActive = true;
                                                break;
                                            }
                                        }
                                    }

                                    echo '<li class="menu-item' . ($hasSubmenus ? ' menu-item-has-children' : '') . $isActive . '">';
                                    echo '<a href="' . $value['link'] . '">' . $key . '</a>';

                                    if ($hasSubmenus) {
                                        echo '<ul class="mb-0 list-unstyled">';
                                        foreach ($value['submenus'] as $submenuKey => $submenuValue) {
                                            $subActive = (basename($submenuValue['link']) === $currentPage) ? ' class="active"' : '';
                                            echo '<li' . $subActive . '><a href="' . $submenuValue['link'] . '">' . $submenuKey . '</a></li>';
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
        </div>
    </header>

    <!-- Sticky Menu -->
    <div class="sticky-menu">
        <div class="container">
            <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                <div class="logo">
                    <h1 class="mb-0"><a class="d-block" href="index.php" title="Home"><img class="img-fluid" width="100px" src="assets/images/logo-2.png" alt="Logo"></a></h1>
                </div>
                <nav class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="header-left">
                        <ul class="mb-0 list-unstyled d-inline-flex">
                            <?php
                            foreach ($menus as $key => $value) {
                                $isActive = '';
                                $hasSubmenus = !empty($value['submenus']);
                                $isParentActive = false;

                                if (!$hasSubmenus && basename($value['link']) === $currentPage) {
                                    $isActive = ' active';
                                }

                                if ($hasSubmenus) {
                                    foreach ($value['submenus'] as $submenuValue) {
                                        if (basename($submenuValue['link']) === $currentPage) {
                                            $isActive = ' active';
                                            $isParentActive = true;
                                            break;
                                        }
                                    }
                                }

                                echo '<li class="menu-item' . ($hasSubmenus ? ' menu-item-has-children' : '') . $isActive . '">';
                                echo '<a href="' . $value['link'] . '">' . $key . '</a>';

                                if ($hasSubmenus) {
                                    echo '<ul class="mb-0 list-unstyled">';
                                    foreach ($value['submenus'] as $submenuKey => $submenuValue) {
                                        $subActive = (basename($submenuValue['link']) === $currentPage) ? ' class="active"' : '';
                                        echo '<li' . $subActive . '><a href="' . $submenuValue['link'] . '">' . $submenuKey . '</a></li>';
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
    </div>

    <!-- Responsive Header -->
    <div class="rspn-hdr">
        <div class="rspn-mdbr">
            <div class="rspn-scil d-inline-flex flex-wrap">
                <a class="twitter-hvr" href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="facebook-hvr" href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="youtube-hvr" href="https://www.youtube.com/" title="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
                <a class="linkedin-hvr" href="https://www.linkedin.com/" title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <form class="rspn-srch">
                <input type="text" placeholder="Enter Your Keyword">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="lg-mn">
            <div class="logo">
                <h1 class="mb-0 d-block"><a href="index.php" title="Home"><img width="140px" src="assets/images/logo-2.png" alt="Logo"></a></h1>
            </div>
            <div class="rspn-cnt">
                <span><i class="thm-clr far fa-envelope"></i><a href="mailto:info@youremailid.com" title="">info@youremailid.com</a></span>
                <span><i class="thm-clr fas fa-phone-alt"></i>+911234567890</span>
            </div>
            <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
        </div>
        <div class="rsnp-mnu">
            <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
            <ul class="mb-0 list-unstyled w-100">
                <?php
                foreach ($menus as $key => $value) {
                    $hasSubmenus = !empty($value['submenus']);
                    $isActive = '';
                    if (!$hasSubmenus && basename($value['link']) === $currentPage) {
                        $isActive = ' active';
                    }
                    if ($hasSubmenus) {
                        foreach ($value['submenus'] as $submenuValue) {
                            if (basename($submenuValue['link']) === $currentPage) {
                                $isActive = ' active';
                                break;
                            }
                        }
                    }
                    echo '<li class="menu-item' . ($hasSubmenus ? ' menu-item-has-children' : '') . $isActive . '">';
                    echo '<a href="' . $value['link'] . '">' . $key . '</a>';
                    if ($hasSubmenus) {
                        echo '<ul class="mb-0 list-unstyled">';
                        foreach ($value['submenus'] as $submenuKey => $submenuValue) {
                            $subActive = (basename($submenuValue['link']) === $currentPage) ? ' class="active"' : '';
                            echo '<li' . $subActive . '><a href="' . $submenuValue['link'] . '">' . $submenuKey . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</main>
</body>
</html>