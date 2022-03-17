<?php get_header();
/*Template Name: Gallery Page*/
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
        	<?php
            if( have_rows('add_gallery') ):
                while( have_rows('add_gallery') ) : the_row(); ?>
          <div class="col-lg-4 col-sm-6">
            <div class="gallery-box">
              <div><img src="<?php echo get_sub_field('gallery_image')['url'];?>" alt="" style="cursor: pointer; max-width: 100%; max-height: 100%;"></div>
            </div>
          </div>
        <?php endwhile;?>
       <?php endif;?>
          <div class="text-center col-md-12">
            <div class="pagination-wrap mt-20">
              <ul>
                <li><a href="<?php previous_posts_link();?>
              ">first</a></li>
                <li class="active"><a href="#">01</a></li>
                <li><a href="<?php next_posts_link();?>">02</a></li>
                <li><a href="#">next</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- courses-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>