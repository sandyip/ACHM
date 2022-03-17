<!-- footer-area -->
  <footer>
    <div class="footer-top black-bg pt-95 pb-45">
      <div class="container-fluid container-full">
        <div class="row justify-content-between">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-25">
                <h5>About Us</h5>
              </div>
              <div class="fw-text">
                <p><?php echo get_theme_mod('achm_about_handle');?></p>
                <div class="footer-contact-list mt-20">
                  <div class="social-media-links">
                    <a class="social-media-link social-media-link--facebook" href="<?php echo get_theme_mod('achm_footer_facebook_handle');?>" target="_blank">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social-media-link social-media-link--twitter" href="<?php echo get_theme_mod('achm_footer_twitter_handle');?>">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a class="social-media-link social-media-link--instagram" href="<?php echo get_theme_mod('achm_instagram_handle');?>">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a class="social-media-link social-media-link--linkedin" href="<?php echo get_theme_mod('achm_footer_linkedin_handle');?>"><i class="fab fa-linkedin"></i>
                    </a>
                    <a class="social-media-link social-media-link--youtube" href="<?php echo get_theme_mod('achm_footer_youtube_handle');?>"><i class="fab fa-youtube"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-4 col-md-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-25">
                <h5>Quick Links</h5>
              </div>
              <div class="fw-links">
                <ul>
                  <li><a href="<?php echo site_url('/home');?>">Home</a></li>
                  <li><a href="<?php echo site_url('/about');?>">About Us</a></li>
                  <li><a href="<?php echo site_url('/achm-cources');?>">Courses</a></li>
                  <li><a href="<?php echo site_url('/news');?>">Blog</a></li>
                  <li><a href="<?php echo site_url('/contact-us');?>">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-25">
                <h5>Recent News</h5>
              </div>
              <div class="footer-courses">
                <ul>
                  <?php 
                  $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'orderby'     => 'date',
                    'order'     => ''
                  );
                  $posts = new WP_Query($args);
                  while($posts->have_posts()) : $posts -> the_post();
                  ?>
                  <li>
                    <div class="f-courses-thumb">
                      <a href="<?php the_permalink();?>"><img src="<?php echo the_post_thumbnail_url();?>" alt=""></a>
                    </div>
                    <div class="f-courses-content">
                      <h5><a href="#"><?php the_title();?></a></h5>
                      <span><?php the_author();?></span>
                    </div>
                  </li>
                  <?php endwhile; wp_reset_postdata();?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-25">
                <h5>Contact</h5>
              </div>
              <div class="fw-tweet-post">
                <ul>
                  <li>
                    <i class="fa fa-phone-square-alt"></i>
                    <div class="fw-tweet-post-content">
                      <p><a href="tel:<?php echo get_theme_mod('achm_footer_phone_handle');?>"> <?php echo get_theme_mod('achm_footer_phone_handle');?></a></p>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-mail-bulk"></i>
                    <div class="fw-tweet-post-content">
                      <p><a href="mailto:<?php echo get_theme_mod('achm_footer_email_handle');?>"><?php echo get_theme_mod('achm_footer_email_handle');?> </a></p>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-location-arrow"></i>
                    <div class="fw-tweet-post-content">
                      <p><?php echo get_theme_mod('achm_footer_location_handle');?></p>
                    </div>
                  </li>
                  <li>
                    <img class="maut_button-appstore-logo" src="<?php echo get_template_directory_uri();?>/assets/img/unnamed.png" alt="Get it on Google Play" width="139px">
                    <img class="maut_button-appstore-logo" src="<?php echo get_template_directory_uri();?>/assets/img/badge-example-preferred.png" alt="Get it on Google Play" width="125px" style="margin-left: 10px">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container-fluid container-full">
        <div class="row">
          <div class="col-md-6">
            <div class="copyright-text">
              <p><?php echo get_theme_mod('achm_footer_copyright_handle');?> &nbsp; || &nbsp; <a href="privacy policy.html" style="color: #fff;"> Privacy Policy</a></p>
            </div>
          </div>
          <div class="col-md-6 develop">
            <span style="display: inline-block;color: #fff;">Developed By :&nbsp;</span>
            <img src="<?php echo get_theme_mod('achm_img_handle');?>" width="95px" style="margin-top:-15px;">
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Online Application Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <a href="https://hub.achm.edu.au/domestic-form" class="btn btn-primary" role="button" aria-pressed="true">Domestic Students</a>
          <a href="https://hub.achm.edu.au/international-form" class="btn btn-primary" role="button" aria-pressed="true">International Students</a>
        </div>
      </div>
    </div>
  </div>
  <!-- footer-area-end -->
  <div id="myOverly" class="overly">
    <span class="closebtn" onclick="closeSearch()" title="Close Overly">×</span>
    <div class="overly-content">
      <form action="/action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
  <!-- JS here -->
  <?php wp_footer();?>
</body>

</html>