<?php get_header();?>
<!-- main-area -->
  <main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo get_template_directory_uri()?>/assets/img/bg/breadcrumb_bg01.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content text-center">
              <h2>Follow Our News</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- blog-area -->
    <section class="blog-area gray-bg pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
            	<?php while(have_posts()) : the_post();?>
        <div class="col-md-6">
            <div class="classic-blog-post mb-50">
              <div class="blog-thumb">
                <a href="<?php the_permalink();?>"><img src="<?php echo the_post_thumbnail_url();?>" alt="img"></a>
              </div>
              <div class="blog-content">
                <div class="classic-blog-tag mb-10">
                  <ul>
                    <li><i class="far fa-user"></i></li>
                    <li class="avatar"><a href="#"><?php the_author();?></a></li>
                    <li><a href="#">KNOWLEDGE</a></li>
                  </ul>
                </div>
                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                <p><?php echo wp_trim_words(get_the_content(), 25);?></p>
                <div class="classic-blog-meta">
                  <ul>
                    <li class="blog-post-date"><i class="far fa-clock"></i><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></li>
                   <li class="blog-more-read buttonstyle">
                        <a href="<?php the_permalink();?>"><button class="btnstyle-hover color-6">Details</button></a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
        </div>
    <?php endwhile;?>
       
            <div class="pagination-wrap mt-20">
              <ul>
                <!-- <li><a href="#">first</a></li>
                <li class="active"><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">next</a></li> -->
                <?php previous_posts_link();?>
              <?php next_posts_link();?>
              </ul>
            </div>
        </div>
          </div>
          <div class="col-lg-4">
            <!-- <aside class="blog-sidebar">
              <div class="widget b-top mb-30">
                <div class="single-sidebar search-sidebar-md">
                  <div class="sidebar-title mb-25">
                    <h3>Search</h3>
                  </div>
                  <div class="sidebar-form">
                    <form action="#">
                      <input type="text" placeholder="Search type...">
                      <button><i class="fas fa-search"></i></button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="widget mb-30">
                <div class="single-sidebar white-bg">
                  <div class="sidebar-title mb-25">
                    <h3>Post Category</h3>
                  </div>
                  <div class="cat-list">
                    <ul>
                      <li><a href="#"><i class="fas fa-caret-right"></i> OBH <span>14</span></a></li>
                      <li><a href="#"><i class="fas fa-caret-right"></i> NCLEX <span>09</span></a></li>
                      <li><a href="#"><i class="fas fa-caret-right"></i> Domestic <span>03</span></a></li>
                      <li><a href="#"><i class="fas fa-caret-right"></i> International <span>02</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="widget mb-30">
                <div class="single-sidebar white-bg">
                  <div class="sidebar-title mb-25">
                    <h3>Recent Posts</h3>
                  </div>
                  <div class="rc-post">
                    <ul>
                      <li>
                        <div class="rc-post-thumb">
                          <a href="blog-details.html"><img src="img/blog/rc_post_thumb01.jpg" alt="img"></a>
                        </div>
                        <div class="rc-post-content">
                          <h5><a href="blog-details.html">High Quality Standards of Vocational Education and Training</a></h5>
                          <span>November 22, 2020</span>
                        </div>
                      </li>
                      <li>
                        <div class="rc-post-thumb">
                          <a href="blog-details.html"><img src="img/blog/rc_post_thumb02.jpg" alt="img"></a>
                        </div>
                        <div class="rc-post-content">
                          <h5><a href="blog-details.html">About Australian College of Health & Management</a></h5>
                          <span>November 22, 2020</span>
                        </div>
                      </li>
                      <li>
                        <div class="rc-post-thumb">
                          <a href="blog-details.html"><img src="img/blog/rc_post_thumb03.jpg" alt="img"></a>
                        </div>
                        <div class="rc-post-content">
                          <h5><a href="blog-details.html">Courses or qualifications offered by ACHM</a></h5>
                          <span>November 22, 2020</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="widget mb-30">
                <div class="single-sidebar white-bg">
                  <div class="sidebar-title mb-25">
                    <h3>Newsletter</h3>
                  </div>
                  <div class="sidebar-newsletter">
                    <div class="sidebar-newsletter-title">
                      <h5>Newsletter <span>Sign-Up</span></h5>
                    </div>
                    <form action="#">
                      <input type="email" placeholder="Your Email Address">
                      <button class="btn">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="widget">
                <div class="single-sidebar white-bg">
                  <div class="sidebar-title mb-25">
                    <h3>Tags Posts</h3>
                  </div>
                  <div class="tag-list">
                    <ul>
                      <li><a href="#">Education</a></li>
                      <li><a href="#">Development</a></li>
                      <li><a href="#">OBH</a></li>
                      <li><a href="#">Nursing</a></li>
                      <li><a href="#">Health</a></li>
                      <li><a href="#">Examination</a></li>
                      <li><a href="#">Courses</a></li>
                      <li><a href="#">Domestic</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </aside> -->
            <?php if(is_active_sidebar('news_sidebar') ):?>
                <?php dynamic_sidebar('news_sidebar');?>
              <?php endif;?>
          </div>
        </div>
      </div>
    </section>
    <!-- blog-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>