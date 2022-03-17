<?php get_header();
/*Template Name: ACHM Courses*/
?>
 <!-- main-area -->
  <main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg breadcrumb-style-two" data-background="<?php echo the_post_thumbnail_url();?>">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content text-center">
              <h2><?php the_title();?></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- courses-search -->
    <div class="courses-search-area gray-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-9 col-lg-11">
            <div class="courses-search-box" data-background="<?php echo get_template_directory_uri();?>/assets/img/bg/courses_search_bg.jpg">
              <form action="#">
                <div class="courses-form-grp">
                  <i class="fas fa-search"></i>
                  <input type="text" placeholder="What do you want to learn?">
                </div>
                <select class="custom-select">
                  <option selected="">All Courses</option>
                  <option>Domestic Courses</option>
                  <option>International Courses</option>
                  <option>OBH</option>
                </select>
                <button class="btn"><span>+</span>Find Courses</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- courses-search-end -->
    <!-- courses-area -->
    <section class="courses-area gray-bg pt-110 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2><?php the_field('top_courses__title');?></h2>
              <p><?php the_field('top_courses_subtitle');?></p>
            </div>
          </div>
        </div>
        <div class="row">
        	 <?php 
          $args = array(
            'post_type' => 'courses',
            'posts_per_page' => 8,
            'orderby'     => 'date',
            'order'     => ''
          );
          $posts = new WP_Query($args);
          while($posts->have_posts()) : $posts -> the_post();
          ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
            <div class="top-courses-item mb-50">
              <div class="top-courses-thumb">
                <a href="#"><img src="<?php echo the_post_thumbnail_url();?>" alt=""></a>
                <div class="bestseller">Top Rated</div>
              </div>
              <div class="top-courses-content">
                <div class="top-courses-tag">
                  <span>In <a href="#">Domestic</a></span>
                </div>
                <h5><a href="#"><?php the_title();?></a></h5>
                <div class="top-courses-bottom">
                  <ul>
                    <a href="CHC33015_domestic.html" class="arrow-btn">Read More <span></span></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         <?php endwhile; wp_reset_postdata();?>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="pagination-wrap courses-pagination mt-10">
              <ul>
                <li><a href="#">first</a></li>
                <li class="active"><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- courses-area-end -->
    <!-- category-area -->
    <section class="category-area category-bg pt-110 pb-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2><?php the_field('program_head_title');?></h2>
            </div>
          </div>
        </div>
        <div class="row no-gutters category-gutters justify-content-center">
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="category-item">
              <a href="#">
                <i class="flaticon-study"></i>
                <span><?php the_field('program_title_1');?></span>
              </a>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="category-item">
              <a href="#">
                <i class="flaticon-translate"></i>
                <span><?php the_field('program_title_2');?></span>
              </a>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="category-item">
              <a href="#">
                <i class="flaticon-angle"></i>
                <span><?php the_field('program_title_3');?></span>
              </a>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="category-item">
              <a href="#">
                <i class="flaticon-volume"></i>
                <span><?php the_field('program_title_4');?></span>
              </a>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="category-item">
              <a href="#">
                <i class="flaticon-quill"></i>
                <span><?php the_field('program_title_5');?></span>
              </a>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="category-item">
              <a href="#">
                <i class="flaticon-set-square"></i>
                <span><?php the_field('program_title_6');?></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- category-area-end -->
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
      <div class="newsletter-bell"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon/bell_icon.png" alt=""></div>
    </section>
    <!-- Newsletter-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>