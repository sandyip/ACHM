<?php get_header();?>
<!-- main-area -->
  <main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo get_template_directory_uri();?>/assets/img/bg/breadcrumb_bg01.jpg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content text-center">
              <h2>News Details</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">News Details</li>
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
        	<?php while(have_posts()) : the_post();?>
          <div class="col-lg-8">
            <div class="classic-blog-post blog-details-wrap">
              <div class="blog-thumb">
                <img src="<?php echo the_post_thumbnail_url();?>" alt="img">
              </div>
              <div class="blog-content">
                <h4><?php the_title();?></h4>
                <div class="blog-details-meta">
                  <ul>
                    <li><i class="far fa-user"></i><a href="#"><?php echo get_the_author();?></a></li>
                    <li><i class="far fa-calendar-alt"></i><?php echo get_the_date('M');?><?php echo get_the_date('j');?> <?php echo get_the_date('Y');?></li>
                    <li><i class="far fa-comments"></i><?php echo do_shortcode('[wpb_total_comments]');?></li>
                  </ul>
                </div>
                <?php the_content();?>
                
                <!-- <blockquote>
                  If you want to give food, you can drop it off at your local food bank, at a donation point in supermarkets across the
                  country or by hosting
                </blockquote> -->
                <div class="blog-details-img">
                  <div class="row no-gutters">
                    <div class="col-sm-6">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/Blog_details_img01.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/blog/Blog_details_img02.jpg" alt="">
                    </div>
                  </div>
                </div>
                
                <div class="classic-blog-meta">
                  <ul>
                    <li class="blog-details-tag">
                      <i class="fas fa-tag"></i>
                      <span>tags :</span>
                      <a href="#"><?php
									$posttags = get_the_tags();
									if ($posttags) {
									  foreach($posttags as $tag) {
									    echo $tag->name . ' '; 
									  }
									}
									?> 
					</a>
                     
                    </li>
                    <?php echo do_shortcode('[Sassy_Social_Share]');?>
                  </ul>
                </div>
                <div class="blog-avatar-post">
                  <div class="blog-avatar-thumb">
                    <img src="img/blog/post_avatar.jpg" alt="">
                  </div>
                  <div class="blog-avatar-content">
                    <h5><?php echo get_the_author();?></h5>
                    <p><?php the_field('author_words');?></p>
                  </div>
                </div>
                <div class="blog-comment mb-60">
                  
                  <ul>
                    <?php 
					$withcomments = "1";
					comments_template(); // Get wp-comments.php template ?>
                    
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
      <?php endwhile;?>
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
                      <li><a href="#"><i class="fas fa-caret-right"></i> Case Studies <span>14</span></a></li>
                      <li><a href="#"><i class="fas fa-caret-right"></i> OBH <span>09</span></a></li>
                      <li><a href="#"><i class="fas fa-caret-right"></i> NCLEX <span>03</span></a></li>
                      <li><a href="#"><i class="fas fa-caret-right"></i> Courses <span>02</span></a></li>
                      <li><a href="#"><i class="fas fa-caret-right"></i> Nursing <span>07</span></a></li>
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
                          <a href="#"><img src="img/blog/rc_post_thumb01.jpg" alt="img"></a>
                        </div>
                        <div class="rc-post-content">
                          <h5><a href="#">HIGH QUALITY STANDARDS OF VOCATIONAL EDUCATION AND TRAINING</a></h5>
                          <span>November 22, 2020</span>
                        </div>
                      </li>
                      <li>
                        <div class="rc-post-thumb">
                          <a href="#"><img src="img/blog/rc_post_thumb02.jpg" alt="img"></a>
                        </div>
                        <div class="rc-post-content">
                          <h5><a href="#">COURSES OR QUALIFICATIONS OFFERED BY ACHM</span>
                        </div>
                      </li>
                      <li>
                        <div class="rc-post-thumb">
                          <a href="#"><img src="img/blog/rc_post_thumb03.jpg" alt="img"></a>
                        </div>
                        <div class="rc-post-content">
                          <h5><a href="#">ABOUT AUSTRALIAN COLLEGE OF HEALTH & MANAGEMENT</a></h5>
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
                      <li><a href="#">Code</a></li>
                      <li><a href="#">Data Science</a></li>
                      <li><a href="#">Who</a></li>
                      <li><a href="#">Foundational</a></li>
                      <li><a href="#">Courses</a></li>
                      <li><a href="#">Marketing</a></li>
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