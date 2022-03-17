<?php get_header();
/*Template Name: Outcome Bases Assessment page*/
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
                  <li class="breadcrumb-item"><a href=",?php echo site_url('/home');?>">Home</a></li>
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
    </div>>
    <!-- courses-search-end -->
    <!-- courses-area -->
    <section class="courses-area gray-bg pt-110 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2><?php the_field('oba_title');?></h2>
              <p><?php the_field('oba_subtitle');?></p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">

        	<?php 
        	$args = array(
        		'post_type' => 'obas',
        		'posts_per_page' => 2,
        		'orderby' => 'date',
        		'order' => ''
        	);
        	$posts = new WP_Query($args);
        	while($posts-> have_posts()) : $posts->the_post();
        	?>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="top-courses-item top-courses-two event-item-wrap mb-50">
              <div class="top-courses-thumb">
                <a href="<?php the_permalink();?>"><img src="<?php echo the_post_thumbnail_url();?>" alt=""></a>
                <div class="bestseller">Running</div>
              </div>
              <div class="top-courses-content">
                <div class="event-top-wrap">
                  <ul>
                    <li class="event-tag"><a href="<?php the_permalink();?>">OBA</a></li>
                  </ul>
                </div>
                <h5 style="height: 30px;"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                <!-- <p style="height: 185px;"> -->
                 <p> <?php echo wp_trim_words(get_the_content(),35);?></p>
                <div class="top-courses-bottom event-bottom">
                  <div class="event-meta">
                    <ul>
                      <a href="<?php the_permalink();?>" class="btn btn-md btn-tra-white primary-hover btn-arrow">
                        <span>Discover More <i class="fas fa-arrow-right"></i></span>
                      </a>
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>


          <?php endwhile; wp_reset_postdata();?>
        </div>
      </div>
    </section>
    <!-- courses-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>

