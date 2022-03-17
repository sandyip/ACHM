<?php get_header();
/*Template Name: Abo Courses*/
?>
 <!-- main-area -->
  <main>
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content text-center">
              <h2>Contact Us</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class="section-title text-center mb-70">
              <h2>Our Contact Details Are As <span>Follows</span></h2>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row contact-info-wrap no-gutters justify-content-center">
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="img/icon/contact_icon01.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Phone Number</h5>
                    <span><a href="tel:1300 524 467"> 1300 524 467</a></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="img/icon/contact_icon02.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Find Location</h5>
                    <span>Suite 5 level 4/20 Macquarie St, Parramatta NSW 2150</span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="img/icon/contact_icon03.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Our Mail</h5>
                    <span><a href="mailto:info@achm.edu.au"> info@achm.edu.au</a></span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="contact-form text-center mb-70">
              <form action="#">
                <div class="row">
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Full Name *">
                      <i class="far fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Phone Number*" required="">
                      <i class="far fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="email" placeholder="Email Address *" required="">
                      <i class="far fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Country *" required="">
                      <i class="far fa-envelope"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="c-form-grp">
                      <input type="text" placeholder="Courses *" required="">
                      <i class="far fa-envelope"></i>
                    </div>
                  </div>
                </div>
                <div class="c-form-grp">
                  <textarea name="message" id="message" placeholder="Your Massage"></textarea>
                  <i class="far fa-envelope"></i>
                </div>
                <button class="btn">Send Message</button>
              </form>
            </div>

            <div id="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.9111527072655!2d150.9999040147764!3d-33.81460582367861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a31fbfe1eafb%3A0xd48f77210ee5bb5f!2sAustralian%20College%20of%20Health%20%26%20Management!5e0!3m2!1sen!2snp!4v1619158062299!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact-area-end -->
  </main>
  <!-- main-area-end -->
<?php get_footer();?>