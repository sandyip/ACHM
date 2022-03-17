<?php get_header();
/*Template Name: About Page*/


?>
<!-- main-area -->
  <main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo the_post_thumbnail_url();?>">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content text-center">
              <h2><?php the_content();?></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php the_title();?></li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- about-courses -->
    <div class="about-section section section-padding-top-190 section-padding-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="about-content mt-sm-50 mt-xs-50">
              <h2 class="title mb-20"><?php the_field('welcome_title');?></h2>
              <?php the_field('welcome_content');?>
              <a class="link link-lg" href="JavaScript:Void(0);"> Have questions?​ <mark>Get Free Form <i class="far fa-long-arrow-right"></i></mark></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="about-image">
              <div class="about-image-one">
              	 <?php 
                $id_image = get_field('welcome_image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  class="image" alt="about01" style="width: 100%;">
                
              </div>
              <!-- Animation Shape Start -->
              <div class="shape shape-1 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="4" style="transform: translate3d(16.3px, -23.4px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">shape 1</span>
              </div>
              <div class="shape shape-2 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="4" style="transform: translate3d(41.2px, -49.6px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="<?php echo get_template_directory_uri();?>/assets/img/about-shape-1.png" alt=""></span>
              </div>
              <div class="shape shape-3 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="4" style="transform: translate3d(34.4px, -48.1px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="<?php echo get_template_directory_uri();?>/assets/img/nwesletter-shape-2.png" alt=""></span>
              </div>
              <!-- Animation Shape End -->
            </div>
          </div>
        </div>
      </div>
    </div> <!-- about-courses-end -->
    <div class="about-video-section section section-padding-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-xs-12">
            <!-- About Me Video Wrapper Start -->
            <div class="about-me-video-wrapper about-us-one-video pr-55 pr-sm-0 pr-xs-0">
              <!-- About Me Video Start -->
              <a href="" class="about-me-video video-popup aos-init aos-animate" data-aos="fade-up">
              	<?php 
                $id_image = get_field('about_image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  class="image" alt="" >
                
              </a>
              <!-- About Me Video End -->
              <!-- Animation Shape Start -->
              <div class="shape shape-1 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="3" style="transform: translate3d(36.8px, -49.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 395 397" version="1.1" width="395px" height="397px" data-inject-url="https://live.hasthemes.com/html/4/maxcoach-preview/maxcoach/images/shape-animation/shape-2.svg" class="svgInject">
                    <g transform="translate(-51.000000, -1390.000000)">
                      <g transform="translate(-28.000000, 963.000000)">
                        <path d="M353.907509,817.715288 C386.112868,835.281848 455.192882,815.572841 468.907509,740.715288 C483.008804,663.747218 442.907509,661.715288 449.907509,633.715288 C478,592 483.008804,538.76355 453.907509,506.715288 C381.907509,431.715288 363.907509,521.715288 303.907509,466.715288 C279.650772,442.458551 242.907509,413.715288 189.907509,433.715288 C114.974471,461.991907 132.907509,521.005066 132.907509,563.715288 C132.907509,578.753612 85.1423289,607.023718 79.9075093,645.715288 C73.306976,694.501115 103.907509,758.715288 132.907509,780.715288 C178.907509,832.715288 249.907509,820.715288 281.907509,802.715288 C309.384918,787.259246 331.907509,805.715288 353.907509,817.715288 Z" style="stroke-dasharray: 1348, 1350; stroke-dashoffset: 0;"></path>
                      </g>
                    </g>
                  </svg>
                </span>
              </div>
              <div class="shape shape-2 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="-3" style="transform: translate3d(-39.5px, 52.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="<?php echo get_template_directory_uri();?>/assets/img/shape-3.png" alt=""></span>
              </div>
              <div class="shape shape-3 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="4" style="transform: translate3d(17.7px, -23.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">shape 3</span>
              </div>
              <div class="shape shape-4 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="4" style="transform: translate3d(50.3px, -67.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="<?php echo get_template_directory_uri();?>/assets/img/shape-1.png" alt=""></span>
              </div>
              <!-- Animation Shape End -->
            </div>
            <!-- About Me Video Wrapper End -->
          </div>
          <div class="col-lg-5 offset-md-1 col-md-5 col-xs-12">
            <div class="about-content mt-sm-50 mt-xs-50">
              <span class="sub-title">ABOUT ACHM</span>
              <h2 class="title"><?php the_field('about_title');?></h2>
              <?php the_field('about_content');?>
              <a class="link link-lg" href="JavaScript:Void(0);"><mark>Download free guidebook <i class="far fa-long-arrow-right"></i></mark></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-video-section section section-padding-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <!-- About Me Video Wrapper Start -->
            <div class="about-me-video-wrapper about-us-one-video pr-55 pr-sm-0 pr-xs-0">
            	<?php $link = get_field('achm_video');?>
              <!-- About Me Video Start -->
              <?php if($link):?>
              <a href="<?php echo $link['url'];?>" target ="<?php echo $link['url'];?>" class="about-me-video video-popup aos-init aos-animate" data-aos="fade-up">
              <?php endif;?>
              	<?php 
                $id_image = get_field('achm_video_thumbnail');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  class="image" alt="" >
                
                <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/icon-youtube-play.png" alt="">
              </a>
              <!-- About Me Video End -->
              <!-- Animation Shape Start -->
              <div class="shape shape-1 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="3" style="transform: translate3d(36.8px, -49.2px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 395 397" version="1.1" width="395px" height="397px" data-inject-url="https://live.hasthemes.com/html/4/maxcoach-preview/maxcoach/images/shape-animation/shape-2.svg" class="svgInject">
                    <g transform="translate(-51.000000, -1390.000000)">
                      <g transform="translate(-28.000000, 963.000000)">
                        <path d="M353.907509,817.715288 C386.112868,835.281848 455.192882,815.572841 468.907509,740.715288 C483.008804,663.747218 442.907509,661.715288 449.907509,633.715288 C478,592 483.008804,538.76355 453.907509,506.715288 C381.907509,431.715288 363.907509,521.715288 303.907509,466.715288 C279.650772,442.458551 242.907509,413.715288 189.907509,433.715288 C114.974471,461.991907 132.907509,521.005066 132.907509,563.715288 C132.907509,578.753612 85.1423289,607.023718 79.9075093,645.715288 C73.306976,694.501115 103.907509,758.715288 132.907509,780.715288 C178.907509,832.715288 249.907509,820.715288 281.907509,802.715288 C309.384918,787.259246 331.907509,805.715288 353.907509,817.715288 Z" style="stroke-dasharray: 1348, 1350; stroke-dashoffset: 0;"></path>
                      </g>
                    </g>
                  </svg>
                </span>
              </div>
              <div class="shape shape-2 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="-3" style="transform: translate3d(-39.5px, 52.8px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="<?php echo get_template_directory_uri();?>/assets/img/shape-3.png" alt=""></span>
              </div>
              <div class="shape shape-3 scene" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: none;">
                <span data-depth="4" style="transform: translate3d(17.7px, -23.7px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;">shape 3</span>
              </div>
              <!-- Animation Shape End -->
            </div>
            <!-- About Me Video Wrapper End -->
          </div>
          <div class="col-lg-4">
            <div class="about-content mt-sm-50 mt-xs-50">
              <span class="sub-title">ACHM Video</span>
              <h2 class="title"><?php the_field('achm_title');?></h2>
              <?php the_field('achm_content');?>
              <a class="link link-lg" href="JavaScript:Void(0);"><mark>Download free guidebook <i class="far fa-long-arrow-right"></i></mark></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- cta-area -->
    <section class="cta-area cta-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="section-title white-title text-center mb-15">
              <h2><?php the_field('lower_title');?></h2>
              <p><?php the_field('lower_subtitle');?></p>
            </div>
            <div class="cta-btn text-center">
              <a href="#" class="btn"><span>+</span> <?php the_field('lower_button_text_1');?></a>
              <a href="#" class="btn transparent-btn"><?php the_field('lower_button_text_1');?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- cta-area-end -->
    <div class="faq-section section section-padding position-relative pt-120" data-bg-color="#f5f7fa" style="background-color: rgb(245, 247, 250);">
      <div class="container">
        <div class="row row-cols-lg-2 row-cols-1 align-items-center">
          <div class="col">
            <div class="faq-left-image">
            	<?php 
                $id_image = get_field('main_image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>"  alt="about" style="width: 100%;" >
             
            </div>
          </div>
          <div class="col">
            <div class="faq-content-area">
              <!-- Section Title Start -->
              <div class="section-title text-left mb-50 mt-sm-50 mt-xs-50 aos-init aos-animate" data-aos="fade-up">
                <span class="sub-title" style="color: #8c89a2;">Misson Vision & Strategy</span>
                <h2 class="title fz-48"><?php the_field('main_title');?></h2>
              </div>
              <div id="accordion" class="myaccordion mb-50">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h4 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="color: #f67625;">
                        MISSION
                        <span class="fa-stack fa-sm">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-stack-1x fa-inverse fa-plus"></i>
                        </span>
                      </button>
                    </h4>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                    <div class="card-body">
                      <p>
                        <?php the_field('mission');?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h4 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #f67625;">
                        VALUES
                        <span class="fa-stack fa-2x">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h4>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      <p><?php the_field('values');?></p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingeight">
                    <h4 class="mb-0">
                      <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight" style="color: #f67625;">
                        STRATEGY
                        <span class="fa-stack fa-2x">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                        </span>
                      </button>
                    </h4>
                  </div>
                  <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
                    <div class="card-body">
                      <p><?php the_field('strategy');?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- testimonial-area -->
    <section class="testimonial-area testimonial-bg pt-110 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2>
              	<?php 
              	$data = get_page_by_title('Home');
              	$title = apply_filters(the_field('student_title'), $data->student_title);
              	echo $title;
              	?>
              </h2>
              <?php 
              	$data = get_page_by_title('Home');
              	$content = apply_filters(the_field('student_subtitle'), $data->student_subtitle);
              	echo $content;
              	?>
            </div>
          </div>
        </div>
        <div class="row testimonial-active">
        <?php 
          $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => -1,
            'orderby'     => 'date',
            'order'     => ''
          );
          $posts = new WP_Query($args);
          while($posts->have_posts()) : $posts -> the_post();
          ?>
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
                <p><?php the_content();?></p>
                <div class="testi-avatar-wrap">
                  <div class="testi-avatar-img">
                    <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                  </div>
                  <div class="testi-avatar-info">
                    <h6><?php the_title();?></h6>
                    <span>Student</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
       <?php endwhile; wp_reset_postdata();?>
      </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- Newsletter-area -->
    <section class="newsletter-area newsletter-bg pt-120 pb-120">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="section-title full-white-title">
              <span class="sub-title">NEWSLETTER</span>
              <h2>
              	<?php 
              	$data = get_page_by_title('Home');
              	$title = apply_filters(the_field('newsletter_title'), $data->newsletter_title);
              	echo $title;
              	?>
              	</h2>
              <p>
              	<?php 
              	$data = get_page_by_title('Home');
              	$title = apply_filters(the_field('newsletter_subtitle'), $data->newsletter_subtitle);
              	echo $title;
              	?>
              </p>
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
      <div class="newsletter-bell"><img src="img/icon/bell_icon.png" alt=""></div>
    </section>
    <!-- Newsletter-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>