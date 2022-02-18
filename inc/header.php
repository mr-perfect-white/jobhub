<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Jobhub - Job Board HTML Website Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/sass/pages/main.scss" />
    <!-- <link rel="stylesheet" href="assets/sass/pages/_job-listing-grid.scss" /> -->
    <link rel="stylesheet" href="assets/sass/layout/_responsive.scss">
    <link rel="stylesheet" href="assets/sass/layout/_header.scss">
    <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet"> -->
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="assets/imgs/theme/loading.gif" alt="jobhub" />
                </div>
            </div>
        </div>
    </div>
    <header class="header sticky-bar">
        <div class="container">
            <div class="main-header">
                <div class="header-left">
                    <div class="header-logo">
                        <a href="index.php" class="d-flex"><img alt="jobhub"
                                src="assets/imgs/theme/jobhub-logo.svg" /></a>
                    </div>
                    <div class="header-nav">
                        <nav class="nav-main-menu d-none d-xl-block">
                            <ul class="main-menu">
                                <li class="">
                                    <a class="a-arrow active" href="index.php">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul> -->
                                </li>
                                <li class="">
                                    <a href="about.php">About Us</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="page-about.html">About Us</a></li>
                                        <li><a href="page-service.html">Our Services</a></li>
                                        <li><a href="page-pricing.html">Pricing Plan</a></li>
                                        <li><a href="pages-faqs.html">FAQs</a></li>
                                        <li><a href="page-contact.html">Contact Us</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="has-children">
                                    <a href="job-grid.html">Browse Jobs</a>
                                    <ul class="sub-menu">
                                        <li><a href="job-grid.html">Job Grid</a></li>
                                        <li><a href="job-grid-2.html">Job Grid 2</a></li>
                                        <li><a href="job-list.html">Job List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="job-single.html">Job Single 01</a></li>
                                        <li><a href="job-single-2.html">Job Single 02</a></li>
                                        <li><a href="job-single-3.html">Job Single 03</a></li>
                                    </ul>
                                </li> -->
                                <li class="">
                                    <a href="employers.php">Employers</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="employers-grid.html">Employers Grid</a></li>
                                        <li><a href="employers-grid-2.html">Employers Grid 2</a></li>
                                        <li><a href="employers-list.html">Employers List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="employers-single.html">Employers Single 01</a></li>
                                        <li><a href="employers-single-2.html">Employers Single 02</a></li>
                                    </ul> -->
                                </li>
                                <li class="">
                                    <a href="pricing.php">Pricing</a>
                                </li>
                                <li class="">
                                    <a href="contact.php">Contact Us</a>
                                </li>
                                <li class="">
                                    <a href="faq.php">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="burger-icon burger-icon-white  d-xl-none">
                            <span class="burger-icon-top"></span>
                            <span class="burger-icon-mid"></span>
                            <span class="burger-icon-bottom"></span>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <div class="block-signin">
                        <a href="#" class="text-link-bd-btom hover-up">Apply Now</a>
                        <a href="sign-in.php" class="btn btn-default btn-shadow ml-40 me-xl-0 me-lg-5 hover-up">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar d-block d-xl-none">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="user-account">
                    <img src="assets/imgs/avatar/ava_1.png" alt="jobhub" />
                    <div class="content">
                        <h6 class="user-name">Howdy, <span class="text-brand">AliThemes</span></h6>
                        <p class="font-xs text-muted">You have 2 new messages</p>
                    </div>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" class="h-auto" placeholder="Search for items…" />
                            <i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        
                        <nav>
                            <ul class="mobile-menu font-heading">
                                <li class="has-children">
                                    <a class="active" href="index.php">Home</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul> -->
                                </li>
                                <li class="has-children">
                                    <a href="about.php">About Us</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="job-grid.html">Job Grid</a></li>
                                        <li><a href="job-grid-2.html">Job Grid 2</a></li>
                                        <li><a href="job-list.html">Job List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="job-single.html">Job Single 01</a></li>
                                        <li><a href="job-single-2.html">Job Single 02</a></li>
                                        <li><a href="job-single-3.html">Job Single 03</a></li>
                                    </ul> -->
                                </li>
                                <li class="has-children">
                                    <a href="employers.php">Employers</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="employers-grid.html">Employers Grid</a></li>
                                        <li><a href="employers-grid-2.html">Employers Grid 2</a></li>
                                        <li><a href="employers-list.html">Employers List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="employers-single.html">Employers Single 01</a></li>
                                        <li><a href="employers-single-2.html">Employers Single 02</a></li>
                                    </ul> -->
                                </li>
                                <li class="has-children">
                                    <a href="pricing.php">Pricing</a>
                                </li>
                                <li class="has-children">
                                    <a href="contact.php">Contact Us</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="candidates-grid.html">Candidates Grid</a></li>
                                        <li><a href="candidates-grid-2.html">Candidates Grid 2</a></li>
                                        <li><a href="candidates-list.html">Candidates List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="candidates-single.html">Candidates Single 01</a></li>
                                        <li><a href="candidates-single-2.html">Candidates Single 02</a></li>
                                    </ul> -->
                                </li>
                                <li class="has-children">
                                    <a href="faq.php">FAQ</a>
                                </li>
                                <!-- <li class="has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-grid-2.html">Blog Grid Sidebar</a></li>
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li class="hr"><span></span></li>
                                        <li><a href="blog-single.html">Blog Single 01</a></li>
                                        <li><a href="blog-single-2.html">Blog Single 02</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="page-about.html">About Us</a></li>
                                        <li><a href="page-service.html">Our Services</a></li>
                                        <li><a href="page-pricing.html">Pricing Plan</a></li>
                                        <li><a href="pages-faqs.html">FAQs</a></li>
                                        <li><a href="page-contact.html">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </nav>
                    </div>
                    <!-- <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">My Boosted Shots</a></li>
                            <li><a href="#">My Collections</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="mobile-social-icon mb-50">
                        <h6 class="mb-25">Follow Us</h6>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt="jobhub" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2022 © JobHub. <br />Designed by AliThemes.</div> -->
                </div>
            </div>
        </div>
    </div>
    <!--End header-->
<main class="main">