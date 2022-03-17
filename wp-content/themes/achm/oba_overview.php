<?php get_header();
/*Template Name: OBA / Overview Page*/
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
             <?php the_field('oba_title');?>
            </h5>
            <br>
            <h6><?php the_field('oba_subtitle');?></h6>
            <p><?php the_field('oba_content');?>
            </p>
            <p>
              <?php the_field('oba_list_title');?>
              <!-- <ul style="padding:0px 25px;">
                <li style="list-style-type: square;">Online self-check for all IQNMs</li>
                <li style="list-style-type: square;">An orientation program for all IQNMs who are recommended to continue with the assessment process, and</li>
                <li style="list-style-type: square;">an OBA for some IQNMs</li>
              </ul> -->
              <?php the_field('oba_list_content');?>
            </p>
            <div id="accordion" class="myaccordion">
              <div class="card">
                <div class="card-header oba" id="headingOne">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between obas btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <?php the_field('dropdown_title_1');?>
                      <span class="fa-stack blue fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-arrow-alt-circle-up fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body obaa">
                    <p>
                      <!-- <ul>
                        <li style="list-style-type: square;">Stage one – It is a cognitive assessment that consists of a computer-based multiple-choice question exam (MCQ) and an objective structured clinical exam. This exam assesses the cognitive abilities through the NCLEX-RN exam</li>
                        <li style="list-style-type: square;">Stage two – In this stage, assessment of behavioral skills of IQNM will be done where they will be assessed in the form of an objective structured clinical examination (OSCE).</li>
                      </ul> -->
                      <?php the_field('dropdown_content_1');?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header oba" id="headingTwo">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between obas btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <?php the_field('dropdown_title_2');?>
                      <span class="fa-stack blue fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-arrow-alt-circle-down fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body obaa">
                    <!-- <p>
                      Outcome Based Assessment (OBA) Preparatory Program is a unique program that is designed to fully prepare Internationally Qualified Nurses and Midwives (IQNMs) to apply for nursing registration in Australia.
                    </p>
                    <p>
                      Australian College of Health and Management delivers Outcome Based Assessment (OBA) preparatory program to eligible overseas nurses who want to prepare for NCLEX RN and OSCE examination. Our OBA preparatory program is designed to provide quality OBA exam preparation services to international nurses who want to attain nursing registration in Australia.
                    </p> -->
                    <?php the_field('dropdown_content_2');?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header oba" id="headingThree">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between obas btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <?php the_field('dropdown_title_3');?>
                      <span class="fa-stack blue fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-arrow-alt-circle-down fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body obaa">
                    <!-- <p>
                      To be eligible for this course, valid overseas nursing registration is a mandatory requirement.
                    </p> -->
                    <?php the_field('dropdown_content_3');?>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header oba" id="headingfour">
                  <h4 class="mb-0">
                    <button class="d-flex align-items-center justify-content-between obas btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      <?php the_field('dropdown_title_4');?>
                      <span class="fa-stack blue fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-arrow-alt-circle-down fa-stack-1x fa-inverse"></i>
                      </span>
                    </button>
                  </h4>
                </div>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                  <div class="card-body obaa">
<!--                     <p>The total Outcome Based Assessment Preparatory Course duration is ten weeks, which includes the following modules:
                      <ul>
                        <li style="list-style-type: square;">Module I- (NCLEX RN Preparation)- 4 weeks</li>
                        <li style="list-style-type: square;">Module II- (OSCE Preparation)- 6 weeks</li>
                      </ul>
                    </p> -->
                    <?php the_field('dropdown_content_4');?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          	<?php get_sidebar();?>
            <!-- <div class="card">
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
              <!-- </div>
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