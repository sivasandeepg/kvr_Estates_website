<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title><?= (!empty($meta_content->seo_title)) ? ucwords($meta_content->seo_title) : (!empty($project_view->seo_title)) ? ucwords($project_view->seo_title) : (!empty($blog_view->seo_title)) ? ucwords($blog_view->seo_title) : ucwords($this->uri->segment(2))  ?>  | <?= SITE_TITLE ?></title>
        <?php if (!empty($meta_content)) { ?>
            <meta name="description" content="<?= $meta_content->seo_meta_description ?>">
            <meta name="keywords" content="<?= $meta_content->seo_meta_keywords ?>">
            <meta name="author" content="<?= $meta_content->seo_author ?>">
            <?php
        } else
        if (!empty($project_view)) {
            ?>
            <meta name = "description" content = "<?= $project_view->seo_meta_description ?>">
            <meta name = "keywords" content = "<?= $project_view->seo_meta_keywords ?>">
            <meta name = "author" content = "<?= (!empty($project_view->seo_author)) ? $project_view->seo_author : $project_view->seo_title ?>">
            <?php
        } else
        if (!empty($blog_view)) {
            ?>
            <meta name = "description" content = "<?= $blog_view->seo_meta_description ?>">
            <meta name = "keywords" content = "<?= $blog_view->seo_meta_keywords ?>">
            <meta name = "author" content = "<?= (!empty($blog_view->seo_author)) ? $blog_view->seo_author : $blog_view->seo_title ?>">
        <?php }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon Start Here -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>uploads/<?= $site_settings->logo ?>">
        <!-- Bootstrap Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
        <!-- Animate Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
        <!-- Owl Carousel Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owlcarousel/owl.theme.default.min.css">
        <!-- Swiper Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/swiper-bundle.min.css" />
        <!-- Flaticon Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon/font/flaticon.css">
        <!-- Select Css Start Here -->


        <?php
        if ($this->uri->segment(1) == 'contact_us' || $this->uri->segment(1) == 'resale_corner') {
            ?>

            <?php
        } else {
            ?>
            <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
        <?php } ?>


        <!-- Animate Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
        <!-- Pop Up Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
        <!-- All min Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/all.min.css">
        <!-- Pannellum -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/pannellum.css">
        <!-- noUIrangle slider -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/noUiSlider/nouislider.min.css">
        <!-- Style Css Start Here -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
        <!-- Google Font Start Here -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

        <link href="<?= base_url() ?>assets/css/camera.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
        <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
        <script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
        </style>
    </head>

    <body class="sticky-header">

        <!--=====================================-->
        <!--=   Preloader     Start             =-->
        <!--=====================================-->
        <div id="preloader"></div>
        <!--=====================================-->
        <!--=   Preloader     End               =-->
        <!--=====================================-->
        <div class="wrapper" id="wrapper">
            <!--=====================================-->
            <!--=   Header     Start                =-->
            <!--=====================================-->

            <header class="header position-relative">
                <div id="rt-sticky-placeholder"></div>
                <div id="header-menu" class="header-menu menu-layout1 header-menu menu-layout3">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo-area">
                                    <a href="<?= base_url() ?>" class="temp-logo">
                                        <img src="<?= base_url() ?>uploads/<?= $site_settings->logo ?>" alt="logo" class="img-fluid">                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 d-flex justify-content-center position-static">
                                <nav id="dropdown" class="template-main-menu template-main-menu-3">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url() ?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>about_us">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Projects</a>
                                            <ul class="dropdown-menu-col-1">
                                                <li>
                                                    <a href="<?= base_url() ?>projects/ongoing_projects">Ongoing Projects</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url() ?>projects/upcoming_projects">Upcoming Projects</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url() ?>projects/completed_projects">Completed Projects</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>
                                            <ul class="dropdown-menu-col-1">
                                                <li>
                                                    <a href="<?= base_url() ?>photos">Photos</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url() ?>videos">Videos</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>blog">Blog</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>contact_us">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="col-xl-4 col-lg-5 d-flex justify-content-end">
                                <div class="header-action-layout1">
                                    <ul class="action-list">
                                        <li class="listing-button">

                                            <a href="<?= base_url() ?>contact_us" class="listing-btn">
                                                <span>
                                                    <i class="fas fa-headset"></i>
                                                </span>
                                                <span class="item-text">Enquiry Now</span>
                                            </a>
                                        </li>
                                        <li class="listing-button">
                                            <a href="<?= base_url() ?>resale_corner" class="listing-btn">
                                                <span>
                                                    <i class="fas fa-exchange-alt"></i>
                                                </span>
                                                <span class="item-text">Resale Corner</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div
                class="rt-header-menu mean-container position-relative"
                id="meanmenu">
                <div class="mean-bar">
                    <a href="<?= base_url() ?>">
                        <img src='<?= base_url() ?>uploads/<?= $site_settings->logo ?>' alt='logo' class='img-fluid'/>
                    </a>
                    <div class="mean-bar--right">
                        <span class="sidebarBtn">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </span>
                    </div>
                </div>
                <div class="rt-slide-nav">
                    <div class="offscreen-navigation">
                        <nav class="menu-main-primary-container">
                            <ul class="menu">
                                <li class="list menu-item-parent">
                                    <a class="animation" href="<?= base_url() ?>">Home</a>
                                </li>
                                <li class="list menu-item-parent">
                                    <a class="animation" href="<?= base_url() ?>about_us">About Us</a>
                                </li>

                                <li class="list menu-item-parent menu-item-has-children">
                                    <a class="animation" href="#">Projects</a>
                                    <ul class="main-menu__dropdown sub-menu">
                                        <li><a href="<?= base_url() ?>projects/ongoing_projects">Ongoing Projects</a></li>
                                        <li><a href="<?= base_url() ?>projects/upcoming_projects">Upcoming Projects</a></li>
                                        <li><a href="<?= base_url() ?>projects/completed_projects">Completed Proejcts</a></li>
                                    </ul>
                                </li>
                                <li class="list menu-item-parent menu-item-has-children">
                                    <a class="animation" href="#">Gallery</a>
                                    <ul class="main-menu__dropdown sub-menu">
                                        <li><a href="<?= base_url() ?>photos">Photos</a></li>
                                        <li><a href="<?= base_url() ?>videos">Videos</a></li>
                                    </ul>
                                </li>
                                <li class="list menu-item-parent">
                                    <a class="animation" href="<?= base_url() ?>blog">Blog</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--=====================================-->
            <!--=   Main Banner     Start           =-->
            <!--=====================================-->


