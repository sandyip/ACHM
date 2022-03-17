<?php get_header();?>
  <!-- main-area -->
  <main>
    <!-- slider-area -->
    <section class="slider-area banner-bg">
      <div class="slider-active">
        <?php $args = array(
          'post_type' => 'sliders',
          'posts_per_page' => -1,
          'orderby' => 'title',
          'order'   => 'ASC'
        );
        $slider = new WP_Query($args);
        while($slider->have_posts()) : $slider-> the_post();
        ?>
        <div class="single-slider slider-bg" data-background="<?php echo the_post_thumbnail_url();?>">
          <div class="container-fluid container-full">
            <div class="row">
              <div class="col-xl-7 col-lg-8">
                <div class="slider-content" data-animation="fadeInUp" data-delay=".2s">
                  <h6><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/edstudy_icon.png" alt=""> <?php the_title();?></h6>
                  <h2><?php the_content();?></h2>
                  <a href="#" class="btn">start today</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
        <!-- <div class="single-slider slider-bg" data-background="<?php echo get_template_directory_uri();?>/assets/img/slider/slider_bg02.jpg">
          <div class="container-fluid container-full">
            <div class="row">
              <div class="col-xl-7 col-lg-8">
                <div class="slider-content" data-animation="fadeInUp" data-delay=".2s">
                  <h6><img src="<?php echo get_template_directory_uri();?>/assets/img/slider/edstudy_icon.png" alt=""> Welcome Online Tutorial</h6>
                  <h2>Best <span>Education</span> For 2020</h2>
                  <a href="#" class="btn">start today</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    
    </section>
    <!-- slider-area-end -->
    <!-- intro-area -->
    <section class="courses-area fix pt-110">
      <div class="courses-overlay-text">ACHM</div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2><?php the_field('achm_title');?></h2>
            </div>
          </div>
        </div>
        <div class="row rs-vertical-bottom">
          <div class="col-lg-7 col-md-12">
            <p class="mobile-mb-50">
              <?php the_field('achm_content');?></p>
            
            <br>
            <div class="row about-signature mt-4">
              <div class="col-md-6">
                <h4><?php the_field('director_name');?></h4>
                <span><?php the_field('position');?></span>
              </div>
              <div class="col-md-6 text-right">
                <!-- <img src="<?php echo get_template_directory_uri();?>/assets/img/signature.png" alt="signature"> -->
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12">
            <div class="about-img rs-image-effect-shine">
              <?php 
                $id_image = get_field('image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  alt="img02">
              
            </div>
          </div>
        </div>
      </div>
      <div class="courses-shape"><img src="<?php echo get_template_directory_uri();?>/assets/img/courses/courses_shape01.png" alt=""></div>
      <div class="courses-shape courses-shape-2"><img src="<?php echo get_template_directory_uri();?>/assets/img/courses/courses_shape02.png" alt=""></div>
    </section>
    <!-- intro-area-end -->
    <!-- featured-courses -->
    <section class="featured-courses fix pt-110 pb-120 gray-bg">
      <div class="featured-courses-shape"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-30">
              <h2>Browse Our Top Courses</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-tabs featured-nav-tabs mb-65" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="domestic-tab" data-toggle="tab" href="#domestic" role="tab" aria-controls="domestic" aria-selected="true">Domestic</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="international-tab" data-toggle="tab" href="#international" role="tab" aria-controls="international" aria-selected="false">International</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="oba-tab" data-toggle="tab" href="#oba" role="tab" aria-controls="oba" aria-selected="false">OBA</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-content featured-tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="domestic" role="tabpanel" aria-labelledby="domestic-tab">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 order-0 order-lg-2">
                <div class="featured-courses-img">
                  <?php 
                    $id_image = get_field('domestic_image');
                    $image = wp_get_attachment_image_src($id_image, 'home');
                    ?>
                    <img src="<?php echo $image[0]; ?>"  alt="">
                  
                </div>
              </div>
              <div class="col-xl-5 col-lg-6">
                <div class="section-title featured-courses-content">
                  <span class="sub-title"><?php the_field('domestic_subtitle');?></span>
                  <h2><?php the_field('domestic_title');?></h2>
                  <p><?php the_field('domestic_content');?></p>
                  <a href="domestic.html" class="btn">start today</a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="international-tab">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 order-0 order-lg-2">
                <div class="featured-courses-img">
                 <?php 
                    $id_image = get_field('international_image');
                    $image = wp_get_attachment_image_src($id_image, 'home');
                    ?>
                    <img src="<?php echo $image[0]; ?>"  alt="">
                </div>
              </div>
              <div class="col-xl-5 col-lg-6">
                <div class="section-title featured-courses-content">
                  <span class="sub-title"><?php the_field('international_subtitle');?></span>
                  <h2><?php the_field('international_title');?></h2>
                  <p><?php the_field('international_content');?></p>
                  <a href="international.html" class="btn">start today</a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="oba" role="tabpanel" aria-labelledby="oba-tab">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 order-0 order-lg-2">
                <div class="featured-courses-img">
                 <?php 
                    $id_image = get_field('oba_image');
                    $image = wp_get_attachment_image_src($id_image, 'home');
                    ?>
                    <img src="<?php echo $image[0]; ?>"  alt="">
                </div>
              </div>
              <div class="col-xl-5 col-lg-6">
                <div class="section-title featured-courses-content">
                  <span class="sub-title"><?php the_field('oba_subtitle');?></span>
                  <h2><?php the_field('oba_title');?></h2>
                  <p><?php the_field('oba_content');?></p>
                  <a href="oba.html" class="btn">start today</a>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
            <div class="row justify-content-center">
              <div class="col-xl-5 col-lg-6 order-0 order-lg-2">
                <div class="featured-courses-img">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/courses/featured_courses_img02.jpg" alt="">
                </div>
              </div>
              <div class="col-xl-5 col-lg-6">
                <div class="section-title featured-courses-content">
                  <span class="sub-title">ingredients</span>
                  <h2>Learning Paths <span>For Nursing</span></h2>
                  <p>A good education makes an individual develop personally, socially as well as economically. Education
                    helps us to do our
                    daily life activities in the best possible ways. Education makes us dutiful. Education helps us to
                    acquire new skills
                    and knowledge that will impact.</p>
                  <a href="#" class="btn">start today</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- featured-courses-end -->
    <section class="keo_fact_bg pt-110 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="keo_number_count_wrap">
              <i class="fa fa-book-open"></i>
              <h4 class="counter"><?php the_field('courses');?></h4>
              <span>+</span>
              <h5>
                <a href="#">Courses</a>
              </h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="keo_number_count_wrap">
              <i class="fa fa-users"></i>
              <h4 class="counter"><?php the_field('student_unrolled');?></h4>
              <span>+</span>
              <h5>
                <a href="#">Student Unrolled</a>
              </h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="keo_number_count_wrap">
              <i class="fa fa-info-circle"></i>
              <h4 class="counter"><?php the_field('support');?></h4>
              <h5>
                <a href="#">Support</a>
              </h5>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="keo_number_count_wrap">
              <i class="fa fa-user-tie"></i>
              <h4 class="counter"><?php the_field('agents');?></h4>
              <span>+</span>
              <h5>
                <a href="#">Agents</a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- top-courses -->
    <section class="top-courses pt-110 pb-70">
      <div class="courses-overlay-text">Our Courses</div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2>Browse Our Courses</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="courses-menu mb-40">
              <button class="active" data-filter="*">All Courses</button>
              <?php 
              $terms = get_terms('course_category');
              foreach($terms as $term) { ?>
              <button class="" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>                
              <?php }
              ?>

              <!-- <button class="" data-filter=".cat-one">Domestic</button>
              <button class="" data-filter=".cat-two">International</button>
              <button class="" data-filter=".cat-three">OBA</button> -->
            </div>
          </div>
        </div>
        <div class="row top-courses-active">
          <?php 
          $args = array(
            'post_type' => 'courses',
            'posts_per_page' => -1
          );

          $query = new WP_Query($args);

          while($query->have_posts()) :
            $query->the_post(); 
            
            $termsArray = get_the_terms($post->ID, 'course_category');
            $termsSlug = "";
            foreach($termsArray as $term){
              $termsSlug = $term->slug . '';
            }
            ?>

          <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer <?php echo $termsSlug; ?>">
            <div class="top-courses-item mb-50">
              <div class="top-courses-thumb">
                <a href="<?php the_field('links');?>"><img src="<?php echo the_post_thumbnail_url();?>" alt=""></a>
                <div class="bestseller">Top Rated</div>
              </div>
              <div class="top-courses-content">
                <div class="top-courses-tag">
                  <span>In <a href="<?php the_field('links');?>"><?php echo $term->name; ?></a></span>
                </div>
                <h5><a href="<?php the_field('links');?>"><?php the_title();?></a></h5>
                <div class="top-courses-bottom">
                  <ul>
                    <a href="<?php the_field('links');?>" class="arrow-btn">Read More <span></span></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata();?>
          
       
        </div>
      </div>
    </section>
    <!-- top-courses-end -->
    <!-- cta-area -->
    <section class="keo_vir_counter_bg cta-deg mb-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="keo_vir_counter_list default_width">
              <h5><?php the_field('online_title');?></h5>
              <p><?php the_field('online_content');?></p>
<!--               <ul class="countdown">
                <li>
                  <span class="days">00</span>
                  <p class="days_ref">days</p>
                </li>
                <li>
                  <span class="hours">00</span>
                  <p class="hours_ref">hours</p>
                </li>
                <li>
                  <span class="minutes">00</span>
                  <p class="minutes_ref">min</p>
                </li>
                <li>
                  <span class="seconds last">00</span>
                  <p class="seconds_ref">sec</p>
                </li>
              </ul> -->
            </div>
          </div>
          <div class="col-md-5 col-sm-6">
            <div class="keo_vir_counter_form pull-right">
              <h4 class="text-center">Register Today</h4>
              <!-- <form>
                <input type="text" name="name" placeholder="Your Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="number" placeholder="Phone Number">
                <button class="text-uppercase time">Register now <i class="fa fa-long-arrow-right"></i></button>
              </form> -->
              <?php echo do_shortcode('[wpforms id="577" title="false" description="false"]');?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cta-area-end -->
    <!-- testimonial-area -->
    <section class="testimonial-area testimonial-bg pt-110 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2><?php the_field('student_title');?></h2>
              <p><?php the_field('student_subtitle');?></p>
            </div>
          </div>
        </div>
        <div class="row testimonial-active">
          <?php
            if( have_rows('student_testimonial') ):
                while( have_rows('student_testimonial') ) : the_row(); ?>
          <div class="col-xl-4">
            <div class="testimonial-item">
              <div class="testimonial-quote">
                <svg version="1.1" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve">
                  <g>
                    <polygon points="0,4 0,28 12,16 12,4" />
                    <polygon points="20,4 20,28 32,16 32,4" />
                  </g>
                </svg>
              </div>
              <div class="testimonial-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="testi-content">
                <p><?php echo get_sub_field('student_content');?></p>
                <div class="testi-avatar-wrap">
                  <div class="testi-avatar-img">
                    <img src="<?php echo get_sub_field('student_image')['url'];?>" alt="">
                  </div>
                  <div class="testi-avatar-info">
                    <h6><?php echo get_sub_field('student_name');?></h6>
                    <span><?php echo get_sub_field('student_position');?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <?php endwhile;?>
       <?php endif;?>
        </div>
      </div>
    </section>
    <!-- testimonial-area-end -->
    <!-- Blog-area -->
    <section class="blog-area position-relative pt-110 pb-90">
      <div class="blog-bg"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title full-white-title text-center mb-70">
              <h2><?php the_field('news_title');?></h2>
              <p><?php the_field('news_subtitle');?></p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php 
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby'     => 'date',
            'order'     => ''
          );
          $posts = new WP_Query($args);
          while($posts->have_posts()) : $posts -> the_post();
          ?>
          <div class="col-lg-4 col-md-6">
            <div class="blog-post-item mb-30">
              <div class="blog-post-thumb position-relative">
                <a href="<?php the_permalink();?>"><img src="<?php echo the_post_thumbnail_url();?>" alt=""></a>
                <!-- <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>Education</a> -->
              </div>
              <div class="blog-post-content">
                <div class="blog-post-meta">
                  <ul>
                    <li><i class="far fa-user"></i><a href="<?php the_permalink();?>"><?php the_author();?></a></li>
                    <li><i class="far fa-calendar-alt"></i><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></li>
                  </ul>
                </div>
                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                <p><?php echo wp_trim_words(get_the_content(), 25);?></p>
                <a href="<?php the_permalink();?>" class="arrow-btn">Read More <span></span></a>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata();?>
         <!--  <div class="col-lg-4 col-md-6">
            <div class="blog-post-item mb-30">
              <div class="blog-post-thumb position-relative">
                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog_post_thumb02.jpg" alt=""></a>
                <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>training</a>
              </div>
              <div class="blog-post-content">
                <div class="blog-post-meta">
                  <ul>
                    <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                    <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                  </ul>
                </div>
                <h4><a href="blog-details.html">Courses or qualifications offered by ACHM</a></h4>
                <p>In 2018, ACHM registered in CRICOS (Commonwealth Register of Institutions and Courses for Overseas Students) and has been approved for delivering VET courses for International students. On its scope with CRICOS, ACHM has approved to deliver CHC33015 Certificate III in Individual Support, CHC43015 Certificate IV in Ageing Support..</p>
                <a href="blog-details.html" class="arrow-btn">Read More <span></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog-post-item mb-30">
              <div class="blog-post-thumb position-relative">
                <a href="blog-details.html"><img src="<?php echo get_template_directory_uri();?>/assets/img/blog/blog_post_thumb03.jpg" alt=""></a>
                <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>creative</a>
              </div>
              <div class="blog-post-content">
                <div class="blog-post-meta">
                  <ul>
                    <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                    <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                  </ul>
                </div>
                <h4><a href="blog-details.html">About Australian College of Health & Management</a></h4>
                <p>Australian College of Health & Management is a Registered Training Organisation (RTO) established by a group of professional personnel in 2016. Since its establishment ACHM has been delivering quality Vocational and Educational Training (VET) courses to domestic students in health and community sector. On its scope of registration, ACHM has approved to deliver full qualifications ...</p>
                <a href="blog-details.html" class="arrow-btn">Read More <span></span></a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Blog-area-end -->
    <!-- Brands-area-start -->
    <section class="position-relative pb-90">
      <div class="brand-carousel section-padding owl-carousel">
         <?php 
          $args = array(
            'post_type' => 'partners',
            'posts_per_page' => 3,
            'orderby'     => 'date',
            'order'     => ''
          );
          $posts = new WP_Query($args);
          while($posts->have_posts()) : $posts -> the_post();
          ?>
        <div class="single-logo">
          <img src="<?php echo the_post_thumbnail_url();?>" alt="">
        </div>
       <?php endwhile; wp_reset_postdata();?>
      </div>
    </section>
  </main>
  <!-- main-area-end -->
  <section class="newsletter-area newsletter-bg pt-120 pb-120">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="section-title full-white-title">
            <span class="sub-title">NEWSLETTER</span>
            <h2><?php the_field('newsletter_title');?></h2>
            <p><?php the_field('newsletter_subtitle');?></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="newsletter-form">
            <label>Never miss a course.</label>
            <form action="#">
              <input type="email" placeholder="Enter your email ...">
              <button class="btn"><i class="fas fa-bell"></i> subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </div>
    <div class="newsletter-bell"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon/bell_icon.png" alt=""></div>
  </section>
  <?php get_footer();?>