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
                    <div class="col-md-12">
                        <h4>
                            <?php the_title();?>
                        </h4>
                    </div>
                    <div class="col-md-9">
                        <br>
                        <div class="course-top-overview">
                            <div class="d-flex overviews">
                                <div class="author"><img src="img/about.jpg" alt="">
                                    <div class="author-name">
                                        <h6>Lecturer</h6>
                                        <p><?php the_field('lecturer');?></p>
                                    </div>
                                </div>
                                <div class="category">
                                    <h6>Course</h6>
                                    <p><?php the_field('course');?></p>
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
                            if( have_rows('add_fields') ):
                                while( have_rows('add_fields') ) : the_row();
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
                        <?php if(is_active_sidebar('international_course_sidebar') ):?>
                <?php dynamic_sidebar('international_course_sidebar');?>
              <?php endif;?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- main-area-end -->
<?php get_footer();?>