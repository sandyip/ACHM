<?php get_header();
/*Template Name: Contact Us Page*/
?>
 <!-- main-area -->
  <main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" style="background-image: url(<?php echo the_post_thumbnail_url();?>);">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content text-center">
              <h2><?php the_title();?></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- contact-area -->
    <section class="contact-area pt-110 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2><?php the_field('contact_details_title');?></h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row contact-info-wrap no-gutters justify-content-center">
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/contact_icon01.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Phone Number</h5>
                    <span><a href="tel:<?php the_field('phone_number');?>"> <?php the_field('phone_number');?></a></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/contact_icon02.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Find Location</h5>
                    <span><?php the_field('find_location');?></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/icon/contact_icon03.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Our Mail</h5>
                    <span><a href="mailto:<?php the_field('our_mail');?>"> <?php the_field('our_mail');?></a></span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="contact-form text-center mb-70">
              <!-- <form action="#">
                <div class="row">
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Full Name *">
                      <i class="far fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Phone Number*" required="">
                      <i class="far fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="email" placeholder="Email Address *" required="">
                      <i class="far fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Country *" required="">
                      <i class="far fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Courses *" required="">
                      <i class="far fa-envelope"></i>
                    </div>
                  </div>
                </div>
                <div class="c-form-grp">
                  <textarea name="message" id="message" placeholder="Your Massage"></textarea>
                  <i class="far fa-envelope"></i>
                </div>
                <button class="btn">Send Message</button>
              </form> -->
              <?php echo do_shortcode('[wpforms id="384" title="false" description="false"]');?>
            </div>

            <div id="contact-map">
              <?php the_field('google_maps');?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>