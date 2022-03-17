<?php get_header();
/*Template Name: Reward Us Page*/
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
                  <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- courses-area -->
    <section class="courses-area gray-bg pt-110 pb-120">
      <div class="container">

        <div class="row">
          <div class="col-12"><h4>FACEBOOK RATINGS</h4></div>
          <div class="col-md-6 col-xs-12">
            <div class="fb-page" data-href="https://www.facebook.com/achmedu" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
              <blockquote cite="https://www.facebook.com/achmedu" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/achmedu">Australian College of Health &amp; Management</a></blockquote>
            </div>
          </div>
          <div class="col-md-6 col-xs-12">
            <div class="container">
              <div class="col-12"><h4>GOOGLE RATINGS</h4></div>
              <div class="inner">
                <div class="rating">
                  <span class="rating-num">4.0</span>
                  <div class="rating-stars">
                    <span><i class="active fa fa-star"></i></span>
                    <span><i class="active fa fa-star"></i></span>
                    <span><i class="active fa fa-star"></i></span>
                    <span><i class="active fa fa-star"></i></span>
                    <span><i class="fa fa-star"></i></span>
                  </div>
                  <div class="rating-users">
                    <i class="fa fa-user"></i> 1,014,004 total
                  </div>
                </div>
                <div class="histo">
                  <div class="five histo-rate">
                    <span class="histo-star">
                      <i class="active fa fa-star"></i> 5 </span>
                    <span class="bar-block">
                      <span id="bar-five" class="bar">
                        <span>566,784</span>&nbsp;
                      </span>
                    </span>
                  </div>
                  <div class="four histo-rate">
                    <span class="histo-star">
                      <i class="active fa fa-star"></i> 4 </span>
                    <span class="bar-block">
                      <span id="bar-four" class="bar">
                        <span>171,298</span>&nbsp;
                      </span>
                    </span>
                  </div>
                  <div class="three histo-rate">
                    <span class="histo-star">
                      <i class="active fa fa-star"></i> 3 </span>
                    <span class="bar-block">
                      <span id="bar-three" class="bar">
                        <span>94,940</span>&nbsp;
                      </span>
                    </span>
                  </div>
                  <div class="two histo-rate">
                    <span class="histo-star">
                      <i class="active fa fa-star"></i> 2 </span>
                    <span class="bar-block">
                      <span id="bar-two" class="bar">
                        <span>44,525</span>&nbsp;
                      </span>
                    </span>
                  </div>
                  <div class="one histo-rate">
                    <span class="histo-star">
                      <i class="active fa fa-star"></i> 1 </span>
                    <span class="bar-block">
                      <span id="bar-one" class="bar">
                        <span>157</span>&nbsp;
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- courses-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>