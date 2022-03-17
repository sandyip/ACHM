<?php get_header();
/*Ttemplate Name: OBA / NCLEX Registration Page*/
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
                  <li class="breadcrumb-item active" aria-current="page">OBA</li>
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
          <div class="col-md-9">
            <h5>
              <?php the_field('nclex_title');?>
            </h5>
            <br>
            <p><?php the_field('nclex_content');?>
            </p>
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header oba" id="headingOne">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between obas btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <?php the_field('nclex_dropdown_title_1');?>
                      <span class="fa-stack blue fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-arrow-alt-circle-up fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body obaa">
                    <?php the_field('nclex_dropdown_content_1');?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header oba" id="headingTwo">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between obas btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <?php the_field('nclex_dropdown_title_2');?>
                      <span class="fa-stack blue fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-arrow-alt-circle-down fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body obaa">
                    <p>
                      <?php the_field('nclex_dropdown_content_2');?>
                      <br>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_a');?></div>
                        <div class="heading4">STEP A</div>
                        <div class="para"><?php the_field('step_a_content');?></div>
                      </div>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_b');?></div>
                        <div class="heading4">STEP B</div>
                        <div class="para"><?php the_field('step_b_content');?></div>
                      </div>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_c');?></div>
                        <div class="heading4">STEP C</div>
                        <div class="para"><?php the_field('step_c_content');?></div>
                      </div>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_d');?></div>
                        <div class="heading4">STEP D</div>
                        <div class="para"><?php the_field('step_d_content');?> </div>
                      </div>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_e');?></div>
                        <div class="heading4">STEP E</div>
                        <div class="para"><?php the_field('step_e_content');?></div>
                      </div>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_f');?></div>
                        <div class="heading4">STEP F</div>
                        <div class="para"><?php the_field('step_f_content');?></div>
                      </div>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_g');?></div>
                        <div class="heading4">STEP G</div>
                        <div class="para"><?php the_field('step_g_content');?></div>
                      </div>
                      <div class="infography">
                        <div class="heading3"><?php the_field('step_h');?></div>
                        <div class="heading4">STEP H</div>
                        <div class="para"><?php the_field('step_h_content');?></div>
                      </div>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">

          	<?php get_sidebar();?>
           <!--  <div class="card">
              <img src="img/nursing.jpg" class="card-img-top" alt="...">
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
           <!--    </div>
            </div>
            <div class="card mt-20">
              <div class="card-header">
                Share Course
              </div>
              <div class="card-body">
                <ul class="social list-unstyled list-inline">
                  <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                  <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                  <li class="list-inline-item"><a href=""><i class="fab fa-youtube"></i></a></li>
                  <li class="list-inline-item"><a href=""><i class="fab fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- main-area-end -->
<?php get_footer();?>