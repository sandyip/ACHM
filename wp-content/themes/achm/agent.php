<?php get_header();
/*Template Name: Agent Page*/
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
                  <li class="breadcrumb-item active" aria-current="page">Agents</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- contact-area -->
    <section class="contact-area pt-110 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form action="#" method="post" novalidate="novalidate">
              <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                      <input type="text" class="form-control search-slt" placeholder="Enter Agent Name">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                      <select class="form-control search-slt" id="exampleFormControlSelect1">
                        <option>Country</option>
                        <option>Australia</option>
                        <option>Nepal</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>India</option>
                      </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                      <button type="button" class="btn btn-danger wrn-btn">Search</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
        	<?php
			if( have_rows('all_agents') ):
			    while( have_rows('all_agents') ) : the_row();
			    	?>
          <div class="col-md-4 mt-4">
            <div class="card shadow">
              <img class="card-img-top mt-3" src="<?php echo get_sub_field('image')['url'];?>" alt="Card image cap">
              <div class="card-body">
                <h6>
                  <?php echo get_sub_field('agent_company_name');?></h6>
                <p class="card-text">
                 
                  <strong>Email : </strong> <?php echo get_sub_field('email');?> <br>
                  <strong>Phone : </strong> <?php echo get_sub_field('phone');?><br>
                  <strong>Website : </strong> <?php echo get_sub_field('website');?> <br>
                  <strong>Location : </strong> <?php echo get_sub_field('location');?> <br>
                </p>
              </div>
            </div>
          </div>
      <?php endwhile;?>
  <?php endif;?>
         
        </div>
        <div class="row mt-4">
          <div class="col-md-12" style="text-align: center;">
            <a href="form_agent.html">
              <input type="image" src="<?php echo get_template_directory_uri();?>/assets/css/img/btn1.png" width="350px" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- contact-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>