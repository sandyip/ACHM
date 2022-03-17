<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Place favicon.ico in the root directory -->
  <!-- CSS here -->
  <?php wp_head();?>
</head>

<body>
  <!-- preloader  -->
  <div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>
        <div class="txt-loading">
          <span data-text-preloader="A" class="letters-loading">
            A
          </span>
          <span data-text-preloader="C" class="letters-loading">
            C
          </span>
          <span data-text-preloader="H" class="letters-loading">
            H
          </span>
          <span data-text-preloader="M" class="letters-loading">
            M
          </span>
        </div>
      </div>
      <div class="loader">
        <div class="row">
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-left">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
          <div class="col-3 loader-section section-right">
            <div class="bg"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- preloader end -->
  <!-- Scroll-top -->
  <button class="scroll-top scroll-to-target" data-target="html">
    <i class="fas fa-angle-up"></i>
  </button>
  <!-- Scroll-top-end-->
  <!-- header-area -->
  <header>
    <div class="header-top-wrap d-none d-md-block">
      <div class="container-fluid container-full">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 d-none d-md-block">
            <div class="d-flex align-items-center">
              <div class="header-top-library">
                <a href="tel:<?php echo get_theme_mod('achm_phone_handle');?>"><i class="fa fa-phone "></i> <?php echo get_theme_mod('achm_phone_handle');?></a>
              </div>
              <!-- <div class="header-top-search">
                <form action="#">
                  <input type="text" placeholder="Search...">
                  <button><i class="fas fa-search"></i></button>
                </form>
              </div> -->
              <div class="header-top-library">
                <a href="mailto:<?php echo get_theme_mod('achm_email_handle');?>"><i class="fa fa-paper-plane"></i> <?php echo get_theme_mod('achm_email_handle');?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="header-right-list">
              <div class="header-top-social d-none d-md-block">
                <ul>
                  <li>Follow us</li>
                  <li><a href="<?php echo get_theme_mod('achm_facebook_handle');?>" ><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="<?php echo get_theme_mod('achm_twitter_handle');?>"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="<?php echo get_theme_mod('achm_pinterest_handle');?>"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="<?php echo get_theme_mod('achm_linkedin_handle');?>"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <div class="header-user-login">
                <div class="dropdowns">
                  <a href="#" class="dropdown-toggle" id="dropdownMenuButtons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i>LMS Login</a>
                  <div class="dropdown-menu" style="margin-left: -50px;" aria-labelledby="dropdownMenuButtons">
                    <a class="dropdown-item" href="https://hub.achm.edu.au/user/login" style="color: #000;">Student Login</a>
                    <a class="dropdown-item" href="https://hub.achm.edu.au/instructor/login" style="color: #000;">Staff Login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="sticky-header" class="main-header menu-area transparent-header">
      <div class="container-fluid container-full">
        <div class="row">
          <div class="col-12">
            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
            <div class="menu-wrap">
              <nav class="menu-nav show">
                <div class="logo">
                  <a href="<?php echo site_url('/home');?>">
                    <!-- <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" class="logo-sticky-none" alt="Logo">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo_2.png" class="logo-sticky-block" alt="Logo"> -->
                    <?php 
                                    if(has_custom_logo() || is_customize_preview()){
                                    the_custom_logo();
                                }else{
                                    ?>
                                    ACHM
                                <?php } ?>
                  </a>
                </div>
                <div class="navbar-wrap main-menu d-none d-lg-flex">
                  <ul class="navigation">
                    <li class="current"><a href="<?php echo site_url('/home');?>">Home</a>
                    </li>
                    <li><a href="<?php echo site_url('/about');?>">About</a>
                      <ul class="submenu">
                        <li><a href="<?php echo site_url('/about');?>">About Us</a></li>
                        <li><a href="<?php echo site_url('/gallery');?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('/reward-us');?>">Reward Us</a></li>
                      </ul>
                    </li>
                    <li class="current dropdown"><a href="<?php echo site_url('/achm-cources');?>">ACHM Courses</a>
                      <ul class="submenu">
                        <li><a href="<?php echo site_url('/domestic-courses');?>">Domestic Courses</a></li>
                        <li><a href="<?php echo site_url('/international-courses');?>">International Courses</a></li>
                        <li><a href="<?php echo site_url('/outcome-bases-assessment');?>">Outcome Bases Assessment</a></li>
                      </ul>
                    </li>
                    <li class="current dropdown"><a href="#">OBA</a>
                      <ul class="submenu">
                        <li><a href="<?php echo site_url('/overview');?>">Overview</a></li>
                        <li><a href="<?php echo site_url('/nclex');?>">NCLEX Registration</a></li>
                        <li><a href="<?php echo site_url('/outcome-bases-assessment');?>">Courses</a></li>
                      </ul>
                    </li>
                    <li class="current"><a href="<?php echo site_url('/agents');?>">Agents</a></li>
                    <li class="current"><a href="<?php echo site_url('/news');?>">News</a></li>
                    <li class="current"><a href="<?php echo site_url('/contact-us');?>">Contact Us</a>
                    </li>
                  <li class="active current"><a href="#" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                  </li>
                  </ul> 
                  <?php 
                  // wp_nav_menu(
                  //   array(
                  //     'menu' => 'primary-menu',
                  //     'container' => '',
                  //     'items_wrap' => '<ul class="navigation">%3$s</ul>'
                  //   )
                  // );
                  ?>

                  
                </div>
                <div class="header-action d-none d-md-block">
                  <ul>
                    <!-- <li class="header-btn"><a href="#" class="btn" data-toggle="modal" data-target="#exampleModal">Apply Now</a></li> -->
                    <li>
                      <button class="openBtn" onclick="openSearch()" style="background-color: transparent;border: none;"><i class="fa fa-search fa-2x"></i></button></li>
                  </ul>
                </div>
              </nav>
            </div>
            <!-- Mobile Menu  -->
            <div class="mobile-menu">
              <div class="menu-backdrop"></div>
              <div class="close-btn"><i class="fas fa-times"></i></div>
              <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo/logo.png" alt="" title=""></a></div>
                <div class="menu-outer">
                  <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                  <div class="">
                  <ul class="navigation">
                    <li class="current dropdown"><a href="#">LMS Login</a>
                      <ul class="submenu">
                        <li><a href="https://hub.achm.edu.au/user/login">Student Login</a></li>
                        <li><a href="https://hub.achm.edu.au/instructor/login">Staff Login</a></li>
                      </ul>
                    </li>
                  </ul>
                  </div>
                </div>
                <div class="social-links">
                  <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    <button class="openBtn" onclick="openSearch()" style="background-color: transparent;border: none;"><i class="fa fa-search"></i></button></li>
                  </ul>
                </div>
              </nav>
            </div>
            <!-- End Mobile Menu -->
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header-area-end -->