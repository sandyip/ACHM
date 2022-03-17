<?php get_header();?>
<!-- main-area -->
  <main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo the_post_thumbnail_url();?>">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content text-center">
              <h2>Course Detail</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Course</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <section class="pt-95 pb-45 course-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-4">
            <h5>
              <?php the_title();?>
            </h5>
          </div>
          <div class="col-md-9">
            <br>
            <div class="course-top-overview">
              <div class="d-flex overviews">
                <div class="author">
                	<?php 
		                $id_image = get_field('lecturer_profile_image');
		                $image = wp_get_attachment_image_src($id_image, 'home');
		                ?>
		                <img src="<?php echo $image[0]; ?>" alt="">
                	
                  <div class="author-name">
                    <h6>Lecturer</h6>
                    <p><?php the_field('lecturer_name');?></p>
                  </div>
                </div>
                <div class="category">
                  <h6>Course</h6>
                  <p><?php the_field('course_type');?></p>
                </div>
                <div class="price">
                  <ul>
                    <li class="header-btn"><a href="#" class="btn">Enroll Now</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="accordion" class="myaccordion mb-50">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <?php the_field('field_title_1');?>
                      <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-minus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <?php the_field('field_content_1');?>
                  </div>
                </div>
              </div>
              <?php 
              if( have_rows('add_more_fields') ):
                  while( have_rows('add_more_fields') ) : the_row();
              ?>
              <div class="card">
                <div class="card-header" id="<?php the_field('collapse');?>">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#<?php echo get_sub_field('data-target');?>" aria-expanded="false" aria-controls="<?php echo get_sub_field('data-target');?>">
                      <?php echo get_sub_field('title');?>
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="<?php echo get_sub_field('data-target');?>" class="collapse" aria-labelledby="<?php the_field('collapse');?>" data-parent="#accordion">
                  <div class="card-body">
                    <?php echo get_sub_field('content');?>
                  </div>
                </div>
              </div>
            <?php endwhile;?>
          <?php endif;?>
              
            </div>
          </div>
          <div class="col-md-3">
            <!-- <div class="card">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/nursing.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Categories : Domestic</li>
                    <li class="list-group-item">Duration : 32 weeks</li>
                    <li class="list-group-item">Medium : Class</li>
                    <li class="list-group-item">Lectures : 640 Hours</li>
                    <li class="list-group-item">Fee : $3000.00</li>
                  </ul>
                </p> -->
                <!--                 <a href="#" class="btn btn-primary">Go somewhere</a> -->
              <!-- </div>
            </div>
            <div class="card mt-20">
              <div class="card-header">
                Share Course
              </div>
              <div class="card-body">
                <ul class="social list-unstyled list-inline" style="text-align: center;">
                  <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f fa-2x"></i></a></li>
                  <li class="list-inline-item"><a href=""><i class="fab fa-twitter fa-2x"></i></a></li>
                  <li class="list-inline-item"><a href=""><i class="fab fa-linkedin-in fa-2x"></i></a></li>
                  <li class="list-inline-item"><a href=""><i class="fab fa-youtube fa-2x"></i></a></li>
                </ul>
              </div>
            </div> -->
            <!-- <div class="card mt-20">
              <div class="card-header">
                Similar Courses
              </div>
              <div class="card-body" style="padding: 0px;">
                <div class="top-courses-item">
                  <div class="top-courses-thumb">
                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/courses/top_courses_thumb04.jpg" alt=""></a>
                    <div class="bestseller">Top Rated</div>
                  </div>
                  <div class="top-courses-content">
                    <div class="top-courses-tag">
                      <span>In <a href="#">Domestic</a></span>
                    </div>
                    <h5><a href="#">CHC43015 CERTIFICATE IV IN AGEING SUPPORT</a></h5>
                    <div class="top-courses-bottom">
                      <ul>
                        <a href="CHC43015_domestic.html" class="arrow-btn">Read More <span></span></a>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="top-courses-item mt-4">
                  <div class="top-courses-thumb">
                    <a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/img/courses/top_courses_thumb08.jpg" alt=""></a>
                    <div class="bestseller">Top Rated</div>
                  </div>
                  <div class="top-courses-content">
                    <div class="top-courses-tag">
                      <span>In <a href="#">Domestic</a></span>
                    </div>
                    <h5><a href="#">CHC52015 DIPLOMA OF COMMUNITY SERVICES</a></h5>
                    <div class="top-courses-bottom">
                      <ul>
                        <a href="CHC52015_domestic.html" class="arrow-btn">Read More <span></span></a>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <?php if(is_active_sidebar('domestic_course_sidebar') ):?>
                <?php dynamic_sidebar('domestic_course_sidebar');?>
              <?php endif;?>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- main-area-end -->
<?php get_footer();?>