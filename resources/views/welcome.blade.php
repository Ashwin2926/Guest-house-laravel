<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eland Guest House</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/favicon_io/favicon-16x16.png" rel="icon">
  <link href="assets/favicon_io/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="assets/img/logo.jpg" style=" border-radius: 50%" width="80" height="180" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#booking">Booking</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link   scrollto" href="#contact">Find Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>ELand <span style="color: green"> Guest </span>House</h1>
          <h2>AN OASIS OF <span style="color: green"> LUXURY </span> AND TRANQULITY</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#booking" class="btn-get-started scrollto">Book now</a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/background5.jpeg" style=" border-radius: 7%" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>An oasis of luxury and tranqulity which offers you a relaxed and sophisticated stay!!!.</p>
           </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
               <img src="assets/img/food.jpg"  class="img-fluid animated" alt="">
              <h4><a >Food when requested</a></h4>
               </div>
          </div>

          <div class="col-xl-3 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <img src="assets/img/wash.jpg"  class="img-fluid animated" alt="">
              <h4>Laundry when requested</h4>
           
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <img src="assets/img/wifi.jpg"  class="img-fluid animated" alt="">
              <h4>Free Wifi</h4>
                          </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
              <div class="icon-box">
                <img src="assets/img/wifi2.jpg"  class="img-fluid animated" alt="">
              <h4>Access to <span style="color: #a62c2b">NETFLIX</span></h4>
            
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->
 <!-- ======= Booking Section ======= -->
 <section id="booking" class="contact">
    <div class="container" data-aos="fade-up">
  
      <div class="section-title">
        <h2>Booking</h2>
        <p>Rooms are kept for 24 hours from the proposed check in dates</p>
      </div>
  
      <div class="row">
  
        <div class="col-lg-5 d-flex align-items-stretch">
          <img src="assets/img/room.jpg"  class="img-fluid animated" alt="">
  
        </div>
  
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          
         <form action="{{ route('book.store') }}" method="POST" role="form" class="php-email-form" >
                @csrf
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Phone</label>
                    <input type="number" class="form-control" name="phone" id="phone" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Number of Guests</label>
                    <input type="number" class="form-control" name="guest_list" id="guest_list" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Check in Date</label>
                    <input type="date" class="form-control" name="check_in" id="check_in" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Check out Date</label>
                    <input type="date" class="form-control" name="check_out" id="check_out" required>
                </div>
                </div>
                              
                <div class="my-3">
                    <x-validation-errors />
                    <x-success-message />
                </div>
                <div class="text-center"><button type="submit">Book Now</button></div>
          </form>
        </div>
  
      </div>
  
    </div>
  </section><!-- End Contact Section -->
  
    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>An Overview of our Guest House</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-room">Rooms</li>
          <li data-filter=".filter-outside">Outside</li>
          <li data-filter=".filter-inside">Inside</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-room">
            <div class="portfolio-img"><img src="assets/img/gallery/room1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Room</p>
              <a href="assets/img/gallery/room1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bed"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-outside">
            <div class="portfolio-img"><img src="assets/img/gallery/outside2.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Outside</p>
              <a href="assets/img/gallery/outside2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Front-Left side"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-inside">
            <div class="portfolio-img"><img src="assets/img/gallery/inside3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Inside</p>
              <a href="assets/img/gallery/inside3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Towels"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-room">
            <div class="portfolio-img"><img src="assets/img/gallery/room2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Room</p>
              <a href="assets/img/gallery/room2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bed,Television and a desk"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-outside">
            <div class="portfolio-img"><img src="assets/img/gallery/outside1.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Outside</p>
              <a href="assets/img/gallery/outside1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Room enterance"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-insert">
            <div class="portfolio-img"><img src="assets/img/gallery/inside1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Iniside</p>
              <a href="assets/img/gallery/inside1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dining room"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-room">
            <div class="portfolio-img"><img src="assets/img/gallery/room3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Room</p>
              <a href="assets/img/gallery/room3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Insuite "><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-outside">
            <div class="portfolio-img"><img src="assets/img/gallery/outside3.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Outside</p>
              <a href="assets/img/gallery/outside3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Front right side"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-inside">
            <div class="portfolio-img"><img src="assets/img/gallery/inside2.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4></h4>
              <p>Inside</p>
              <a href="assets/img/gallery/inside2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Hall way to dining"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    

        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Send us a direct message</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>895A Turf Zimplats, Mhonhoro Ngezi, Zimbabwe</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>reservations.elandguest@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+263 777 967 463</p>
                <p>+263 783 406 673</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('message.store') }}" method="POST" role="form" class="php-email-form" >
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->




    <section id="about" class="about">
      <div class="section-title">
        <h2>About Us</h2>
      </div>
      <div class="container" data-aos="fade-up">
          <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                      
                        <div class="position-relative h-100" style="width: 1000px">
                            <img class="position-absolute w-100 h-100" src="assets/img/about.jpeg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5" style="opacity: 0.89">
                        <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                         <h1 class="mb-3">We Provide Best Staying Experience within your Budget</h1>
                            <p>Add some text here</p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <img class="img-fluid" src="assets/img/gallery/room1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="assets/img/gallery/room3.jpg" alt="">
                                </div>
                            </div>
                            <a class="nav-link scrollto" href="#booking">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
           
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
           
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
           

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright" style="color: black">
        &copy; Copyright <strong><span style="color: green">ELand</span></strong>. All Rights Reserved
      </div>
      <div class="credits" style="color: black">
        
        Designed by <span style="color: green">AM </span></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader">
    
    <h1 style=" position: fixed;
    top: calc(40% - 33px);
    left: calc(36% - 40px); color:  #2C2C2B"> ELand <span style="color: #296e01"> Guest</span> House</h2>
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>