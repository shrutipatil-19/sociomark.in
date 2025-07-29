@extends('Frontend.layout.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  body {
    /* background: linear-gradient(to bottom, #f0fff4, #ffffff); */
    background: linear-gradient(to bottom, rgb(250, 247, 240), #ffffff);
  }

  /* .about-badge {
        background-color: #0fa15f;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: bold;
    }

    .icon-list li::before {
        content: '\2713';
        color: #0fa15f;
        font-weight: bold;
        margin-right: 10px;
    }

    .btn-custom {
        background-color: black;
        color: white;
        padding: 10px 20px;
        border-radius: 30px;
        font-weight: bold;
    }

    .btn-custom:hover {
        background-color: #0fa15f;
    } */

  /* 3 services start*/

  .service-card {
    background: #F6F4F1;
    padding: 20px;
    border-radius: 15px;
    position: relative;
    text-align: left !important;
    transition: all 0.3s ease-in-out;
  }

  .service-card:hover {
    background: #ffefe0;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
  }

  .service-card img {
    border-radius: 10px;
    width: 13rem;
    /* width: 100%; */
    /* height: auto; */
    margin: 12px 0px;
  }

  .service-icon {
    font-size: 30px;
    color: #ff6600;
  }

  .service-number {
    position: absolute;
    top: 0px;
    right: 15px;
    font-size: 50px;
    color: rgba(0, 0, 0, 0.1);
    font-weight: bold;
  }

  .read-more {
    color: #ff6600;
    font-weight: bold;
    text-decoration: none;
  }

  .read-more:hover {
    text-decoration: underline;
  }

  /* 3 services end */

  /* company overview */
  /* body {
            background: linear-gradient(135deg, #1a0a02, #3a1d0a);
            color: white;
            font-family: Arial, sans-serif;
        } */
  .tracking-section {
    padding: 50px 0;
    text-align: center;
  }

  .tracking-title {
    font-size: 36px;
    font-weight: bold;
  }

  .stat-box {
    text-align: center;
    padding: 20px;
  }

  .stat-number {
    font-size: 40px;
    font-weight: bold;
    color: #ff8800;
  }

  .stat-text {
    font-size: 16px;
    color: #ddd;
  }

  .video-container {
    position: relative;
    display: inline-block;
  }

  .video-play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #ff8800;
    color: white;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    cursor: pointer;
  }

  /* company overview end */

  /* Our Work  */
  /* .ourwork {
    background-color: #106c97;
  }

  .gallery {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    overflow: hidden;
  }

  .gallery img {
    width: 180px;
    height: 400px;
    object-fit: cover;
    transition: all 0.5s ease;
    border-radius: 10px;
  }

  /* Active image (default expanded one) 
  .gallery img.active {
    width: 490px;
    
  }

  /* Hover effect 
  .gallery img:hover {
    width: 490px;
    
  } */

  .ourwork {
    background-color: #106c97;
    padding: 50px 0;
  }

  .content-box {
    text-align: center;
    margin-bottom: 20px;
  }

  /* Carousel Container */
  .carousel-inner {
    display: flex;
    flex-wrap: nowrap;
  }

  .carousel-item {
    display: flex;
    justify-content: center;
    gap: 10px;
    position: relative;
  }

  /* Image Styling */
  .ourwork .carousel-item img {
    width: 180px;
    height: 500px;
    object-fit: cover;
    transition: all 0.5s ease;
    border-radius: 10px;
    position: relative;
  }

  /* Default Active Image Enlarged */
  .ourwork .carousel-item img.default-active {
    width: 490px;
  }

  /* Overlay Title (Hidden by Default) */
  .ourwork .img-overlay {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    background: rgba(0, 0, 0, 0.6);
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 16px;
    border-radius: 0 0 10px 10px;
    opacity: 0;
    /* Hidden */
    transition: opacity 0.3s ease;
  }

  /* Show overlay only on the active image */
  .carousel-item img.default-active+.img-overlay {
    opacity: 1;
  }

  /* Hide all other slides except the active carousel-item */
  .carousel-inner .carousel-item {
    display: none;
  }

  .carousel-inner .carousel-item.active {
    display: flex;
  }

  /* Control Button Styling */
  .carousel-control-prev,
  .carousel-control-next {
    width: 5%;
  }

  /* end */

  /* testimonial */

  .testimonial-section {
    padding: 50px 0;
    background: #fff;
    margin-bottom: 8rem;
  }

  .fixed-review-box {
    background: linear-gradient(135deg, #1a1a1a, #2e2e2e);
    color: white;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    position: relative;
  }

  .fixed-review-box h2 {
    font-size: 2rem;
    margin-bottom: 10px;
  }

  .stars {
    color: #ffcc00;
    font-size: 18px;
    margin-bottom: 10px;
  }

  .btn-custom {
    background-color: #ff7f2a;
    color: white;
    border-radius: 20px;
    padding: 10px 20px;
    display: inline-block;
    text-decoration: none;
    transition: 0.3s;
  }

  .btn-custom:hover {
    background-color: #e6691c;
  }

  .testimonial-content {
    padding-left: 50px;
  }

  .testimonial-slider {
    position: relative;
    max-width: 600px;
    overflow: hidden;
  }

  .testimonial-slide {
    display: none;
    transition: opacity 0.8s ease-in-out;
  }

  .testimonial-slide.active {
    display: block;
  }

  .testimonial-card {
    padding: 20px;
    background: white;
    border-radius: 15px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
  }

  .testimonial-card img {
    width: 40px;
    border-radius: 50%;
    margin-right: 10px;
  }

  .testimonial-nav {
    display: flex;
    gap: 10px;
    margin-top: 15px;
  }

  .nav-btn {
    background: #ff7f2a;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 12px;
    cursor: pointer;
    transition: 0.3s;
  }

  .nav-btn:hover {
    background: #e6691c;
  }


  /* testimoial end */
  /* founder */

  .founder .img {
    width: 33rem;
    height: 34rem;
    margin-top: -6rem;
  }

  .founder .img img {
    height: 100%;
    width: 100%;
    object-fit: cover;
  }

  /* founder end */

  /* our blogs */
  .blog-section {
    text-align: center;
    padding: 50px 0;
  }

  .blog-section h2 {
    font-weight: bold;
  }

  .blog-card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
  }

  .blog-card:hover {
    transform: translateY(-5px);
  }

  .blog-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
  }

  .blog-content {
    padding: 20px;
    background: white;
  }

  .blog-date {
    background: orange;
    color: white;
    font-size: 14px;
    font-weight: bold;
    padding: 5px 10px;
    position: absolute;
    /* bottom: 10px; */
    bottom: 154px;
    left: -2px;
    /* left: 10px; */
    border-radius: 5px;
  }

  .read-more {
    color: orange;
    font-weight: bold;
    text-decoration: none;
  }

  .read-more:hover {
    text-decoration: underline;
  }

  /* our blogs end */

  /* explose start */
  .exploser {
    background: url('https://wordpress.zozothemes.com/seoinux/wp-content/uploads/sites/33/2025/01/space-bg-img.jpg');
    background-size: cover;
    background-attachment: fixed;
    width: 100%;
    height: 100vh;
  }

  .content {
    padding: 100px 50px;
  }

  .contact-btn {
    background-color: #ff7b00;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    color: white;
    font-weight: bold;
  }

  .icon-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 50px;
  }

  .icon {
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
  }

  .exploser-overlay-img {
    bottom: 1px;
    /* overflow: hidden; */
    width: 48rem;
    left: 258px;
  }

  /* exploser end */
</style>

@section('content')

<div class="">
  <!-- about us section -->
  <div class="container mb-5 py-5">
    <div class="row">
      <div class="col-xl-4 col-lg-12">
        <div class="about-thumb p-3">
          <img class="w-100" src="https://refreshsquare.com/themeforest/html/ranklab/assets/images/home-1/about-thumb1.png" alt="thumb1">
        </div>
        <div class="about-list-item p-3">
          <p>Our expertise spans a wide range of digital marketing services, including Social Media Marketing, SEO, Graphic Designing, Website Development, PPC, and Ecommerce Marketing. We understand that every business is unique, and therefore, we tailor our strategies to meet your specific goals and objectives.

            Let us help you unlock the full potential of your brand. Partner with Sociomark and experience the difference a dedicated digital marketing agency can make.</p>
          <!-- <ul>
                <li>
                Focused on Your SEO Success
                </li>
                <li>
                 Expert SEO Services for Every Business
                </li>
                <li>
                 Your Path to Better SEO Rankings
                </li>
                <li>
                Helping Businesses Thrive Online
                </li>
                <li>
                  Digital With Powerful SEO Strategies
                </li>
                <li>
                  Mark Is More Than Just An SEO Agency
                </li>
              </ul> -->
        </div>
        <div class="about-btn p-3">
          <div class="section-btn">
            <a href="about.html">More Service</a>
          </div>
          <div class="section-arrow-btn">
            <a href="about.html"><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-12">
        <div class="section-title p-3">
          <h5><i class="fa-solid fa-circle-check"></i>About Us</h5>
          <h1 class="fs-3">Hello, we are, Sociomark - Digital Marketing Company
            in Mumbai</h1>
          <p>
            In today's digital age, a strong online presence is no longer a luxury but a necessity. Sociomark is your trusted partner in navigating the tough digital landscape. As a leading Digital Marketing agency based in Navi Mumbai, we are committed to driving tangible results for your business.
          </p>
        </div>
        <div class="about-wrapper-thumb d-flex">
          <div class="about-thumb2 p-3">
            <img src="https://refreshsquare.com/themeforest/html/ranklab/assets/images/home-1/about-thumb2.png" alt="thumb2">
          </div>
          <div class="about-counter-item p-3 d-flex flex-column justify-content-evenly">
            <div class="about-counter-box upper">
              <div class="about-counter-content">
                <div class="about-icon">
                  <img src="" alt="icon">
                </div>
                <h4 class="counter">300</h4>
                <p>Exprienced Team</p>
              </div>
            </div>
            <div class="about-counter-box">
              <div class="about-counter-content">
                <div class="about-icon">
                  <img src="assets/images/home-1/counter-icon2.png" alt="icon">
                </div>
                <h4 class="counter">4</h4>
                <span>k</span>
                <p>Project Successfully</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about section end -->

  <!-- 3 service -->
  <div class="my-5 py-5 text-center" style="background-color: #106c97;">
    <div class="container">
      <h5 class="text-white">What We Do</h5>
      <h1 class="fs-3 text-white">Showcase your SEO and conversion optimization strategies</h1>
      <div class="row mt-4 px-3 py-0">
        <div class="col-md-4">
          <div class="service-card ">
            <span class="service-number">01</span>
            <div class="service-icon">📄</div>
            <h4 class="fw-bold my-2">Social Media</h4>
            <p>We create engaging content that resonates with your audience, builds strong brand communities, boosts visibility, drives results, fosters loyalty, and ensures measurable growth.</p>
            <a href="#" class="read-more">Read More ></a>
            <div class="d-flex justify-content-center">
              <img src="https://www.sociomark.in/assets/test/Untitled%20design%20(1).gif" alt="Content Marketing">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card border border-warning ">
            <div class="d-flex justify-content-center">
              <img src="https://www.sociomark.in/assets/test/seo_sem%20(1).gif" alt="SEO Optimization">
            </div>
            <span class="service-number">02</span>
            <div class="service-icon">🚀</div>
            <h4 class="fw-bold my-2">SEO</h4>
            <p>We optimize your site for higher organic search rankings, driving traffic and visibility. Our SEM strategies combine SEO and paid ads for maximum online presence and results.</p>
            <a href="#" class="read-more">Read More ></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <span class="service-number">03</span>
            <div class="service-icon my-2">📊</div>
            <h4 class="fw-bold">Website Development</h4>
            <p>We craft stunning, user-friendly websites tailored to your business needs, combining aesthetics with functionality to leave a lasting impression and drive results.</p>
            <a href="#" class="read-more">Read More ></a>
            <div class="d-flex justify-content-center">
              <img src="https://www.sociomark.in/assets/test/Website%20Development%20(1).gif" alt="Analytics & Report">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 3 services end -->

  <!-- company overview -->
  <div class="container tracking-section">
    <p class="text-warning">Sociomark Making a Mark</p>
    <h1 class="tracking-title fs-3">Tracking Progress, <br> Proof of Success in Numbers</h1>
    <div class="row align-items-center mt-4">
      <div class="col-md-6">
        <div class="video-container">
          <img src="https://via.placeholder.com/400x250" class="img-fluid rounded" alt="Video Thumbnail">
          <div class="video-play-btn">▶</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-6 stat-box">
            <p class="stat-number">98%</p>
            <p class="stat-text">Boost Rankings with Strategic Keywords</p>
          </div>
          <div class="col-6 stat-box">
            <p class="stat-number">30K+</p>
            <p class="stat-text">Keywords Driving Your Competition</p>
          </div>
          <div class="col-6 stat-box">
            <p class="stat-number">25+</p>
            <p class="stat-text">Supported Regions and Cities</p>
          </div>
          <div class="col-6 stat-box">
            <p class="stat-number">250+</p>
            <p class="stat-text">Clients Happy in the Long Term</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- company overview end -->

  <!-- Our Work -->
  <!-- <div class="ourwork">
    <div class="container py-5">
      <div class="text-center content-box">
        <h5 class="text-white">Our Work</h5>
        <h1 class="fs-3 text-white">Making a mark, one day at a time! </h1>
    
      </div>
      <div class="gallery my-4">
        <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" alt="Business Image" class="active">
        <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" alt="Meeting Image">
        <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" alt="Office Image">
        <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" alt="Work Image">
      </div>
    </div>
  </div> -->
  <div class=" my-5 py-5 ourwork">
    <div class="container">
      <div class="text-center content-box">
        <h5 class="text-white">Our Work</h5>
        <h1 class="fs-3 text-white">Making a mark, one day at a time!</h1>
      </div>

      <!-- Multi-Item Carousel -->
      <div id="galleryCarousel" class="carousel slide" data-bs-ride="false"> <!-- Disabled auto-slide -->
        <div class="carousel-inner">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block default-active" alt="Business Image">
              <div class="img-overlay">Business Image</div>
            </div>
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block" alt="Meeting Image">
              <div class="img-overlay">Meeting Image</div>
            </div>
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block" alt="Office Image">
              <div class="img-overlay">Office Image</div>
            </div>
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block" alt="Work Image">
              <div class="img-overlay">Work Image</div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block default-active" alt="Project 1">
              <div class="img-overlay">Project 1</div>
            </div>
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block" alt="Project 2">
              <div class="img-overlay">Project 2</div>
            </div>
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block" alt="Project 3">
              <div class="img-overlay">Project 3</div>
            </div>
            <div class="position-relative">
              <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg" class="d-block" alt="Project 4">
              <div class="img-overlay">Project 4</div>
            </div>
          </div>

        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </div>
  <!-- our work end -->

  <!-- Testimonial Section -->
  <div class="mt-5 py-5 px-3 container testimonial-section d-flex justify-content-center flex-column">
    <div class="header">
      <h5 class="text-muted text-center">CLIENT STORIES</h>
        <h1 class="fs-3 text-center">Success Stories How Feedback Drives Our Results</h1>
    </div>

    <div class="row align-items-center m-3">
      <!-- Fixed Review Box -->
      <div class="col-md-5">
        <div class="fixed-review-box">
          <h2>4.7</h2>
          <div class="stars">★★★★★</div>
          <p>We value your opinion: share your review with us</p>
          <a href="#" class="btn-custom">GET IN TOUCH →</a>
        </div>
      </div>

      <!-- Testimonial Slider -->
      <div class="col-md-7 testimonial-content">


        <div class="testimonial-slider">
          <!-- Slide 1 -->
          <div class="testimonial-slide active">
            <div class="testimonial-card">
              <h5><img src="https://randomuser.me/api/portraits/men/32.jpg" alt=""> Ethan Garcia</h5>
              <p class="text-muted">Graphic Designer</p>
              <p>“The team completely transformed our online presence. Our website traffic has more than doubled in just six months, and we're now ranking on the first page for all our target keywords. They were professional..”</p>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="testimonial-slide">
            <div class="testimonial-card">
              <h5><img src="https://randomuser.me/api/portraits/women/44.jpg" alt=""> Mia Hernandez</h5>
              <p class="text-muted">Global Manager</p>
              <p>“Our experience with the team was outstanding. They implemented a tailored SEO strategy that significantly boosted our conversion rates and lead generation.”</p>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="testimonial-slide">
            <div class="testimonial-card">
              <h5><img src="https://randomuser.me/api/portraits/men/45.jpg" alt=""> John Smith</h5>
              <p class="text-muted">Marketing Head</p>
              <p>“Highly skilled professionals with a customer-focused approach. They delivered beyond our expectations and helped us scale our business.”</p>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="testimonial-nav">
          <button class="nav-btn" onclick="prevSlide()">← Prev</button>
          <button class="nav-btn" onclick="nextSlide()">Next →</button>
        </div>
      </div>
    </div>
  </div>
  <!-- testimonial end -->

  <!-- our founders -->
  <div class="my-5 py-4 px-3 founder" style="background-color: #106c97;">


    <div class="container">
      <div class="row align-items-center">
        <!-- Left Section with Image and Play Button -->
        <div class="col-md-6 position-relative img">
          <img src="https://www.sociomark.in/assets/img/founders.jpg" class="img-fluid rounded" alt="Office Team">

        </div>

        <!-- Right Section with Text and Progress Bars -->
        <div class="col-md-6 text-white p-4">

          <h1 class="fs-3">Meet Our Founders</h1>
          <h5 class="text-uppercase text-warning">Mr. Vivek Baandal & Mrs. Heta Desai Baandal</h5>
          <p>Share a common goal: to help businesses thrive in the digital landscape. Their partnership, forged during their college years, has grown into a successful business venture. Together, they have built a marketing agency that is dedicated to delivering outstanding results. Their shared passion for innovation and creativity drives the agency's success.

            The agency fosters a collaborative and creative environment where ideas flourish. This culture of innovation empowers the team to develop fresh and creative work that delivers exceptional results. With a strong focus on client satisfaction, Vivek and Heta have positioned their agency as a trusted partner for businesses seeking to make a significant impact in the digital world.</p>

          <!-- Progress Bars -->
          <!-- <div class="mb-3">
            <div class="d-flex justify-content-between">
              <span>Online Marketing</span>
              <span>84%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-danger" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="mb-3">
            <div class="d-flex justify-content-between">
              <span>Digital Marketing</span>
              <span>78%</span>
            </div>
            <div class="progress">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- our founder end -->

  <!-- our blog -->

  <div class="container blog-section my-5 py-4">
    <h5 class="text-warning">Lastest Blog Posts</h5>
    <h1 class="fs-3">Some valuable Information</h1>

    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Blog Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center">

            <div class="col-md-4">
              <div class="blog-card position-relative">
                <img src="https://www.sociomark.in/images/uploads/thumbnail/20241127054541_googlelatestalgorithmupdate(1).png" class="blog-img">
                <div class="blog-date">November 9, 2024</div>
                <div class="blog-content d-flex flex-column align-items-start">
                  <h5 class="text-start">10 Proven Strategies to Boost Your Business Growth</h5>
                  <p class="text-muted">SEO, on the other hand, ensures that this...</p>
                  <a href="#" class="read-more">READ MORE →</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="blog-card position-relative">
                <img src="https://www.sociomark.in/images/uploads/thumbnail/20250123115055_SEOCompanyinMumbai(1).png" class="blog-img">
                <div class="blog-date">November 11, 2024</div>
                <div class="blog-content d-flex flex-column align-items-start">
                  <h5 class="text-start">Building a Comprehensive SEO and Digital Strategy</h5>
                  <p class="text-muted">SEO, on the other hand, ensures that this...</p>
                  <a href="#" class="read-more">READ MORE →</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="blog-card position-relative">
                <img src="https://www.sociomark.in/images/uploads/thumbnail/20241127054541_googlelatestalgorithmupdate(1).png" class="blog-img">
                <div class="blog-date">November 13, 2024</div>
                <div class="blog-content d-flex flex-column align-items-start">
                  <h5 class="text-start">Top 3 Success Stories Showcase Our Expertise</h5>
                  <p class="text-muted">SEO, on the other hand, ensures that this...</p>
                  <a href="#" class="read-more">READ MORE →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Blog Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="blog-card position-relative">
                <img src="https://www.sociomark.in/images/uploads/thumbnail/20250123115055_SEOCompanyinMumbai(1).png" class="blog-img">
                <div class="blog-date">November 15, 2024</div>
                <div class="blog-content d-flex flex-column align-items-start">
                  <h5 class="text-start">How Data-Driven Marketing Helps Brands Grow</h5>
                  <p class="text-muted">SEO, on the other hand, ensures that this...</p>
                  <a href="#" class="read-more">READ MORE →</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="blog-card position-relative">
                <img src="https://www.sociomark.in/images/uploads/thumbnail/20241127054541_googlelatestalgorithmupdate(1).png" class="blog-img">
                <div class="blog-date">November 18, 2024</div>
                <div class="blog-content d-flex flex-column align-items-start">
                  <h5 class="text-start">Why Content Strategy is Essential for SEO</h5>
                  <p class="text-muted">SEO, on the other hand, ensures that this...</p>
                  <a href="#" class="read-more">READ MORE →</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="blog-card position-relative">
                <img src="https://www.sociomark.in/images/uploads/thumbnail/20250123115055_SEOCompanyinMumbai(1).png" class="blog-img">
                <div class="blog-date">November 20, 2024</div>
                <div class="blog-content d-flex flex-column align-items-start">
                  <h5 class="text-start">Top 5 Digital Branding Trends in 2024</h5>
                  <p class="text-muted">SEO, on the other hand, ensures that this...</p>
                  <a href="#" class="read-more">READ MORE →</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
      </button>
    </div>
  </div>
  <!-- our blogs end -->

  <!-- exploser start -->
  <div class="exploser my-5 py-4 position-relative">
    <div class="container">
      <div class="row align-items-center content">
        <div class="col-md-6">
          <h5 class="text-white">Recognition From Others</h5>
          <h1 class="fs-3 text-white">The Mighty Exposure</h1>
          <!-- <p>Email marketing is one of the most powerful tools in building strong relationships with your subscribers and converting them into loyal customers.</p>
                <button class="contact-btn">CONTACT US →</button> -->
        </div>
        <div class="col-md-6 text-center">
          <div class="icon-container d-flex flex-wrap justify-content-center gap-3 z-1">
            <div class="icon z-1">⭐</div>
            <div class="icon z-1">✉️</div>
            <div class="icon z-1">📊</div>
            <div class="icon z-1">📢</div>
            <div class="icon z-1">📈</div>
            <div class="icon z-1">🎯</div>
            <div class="icon z-1">🔊</div>
          </div>
        </div>
      </div>
    </div>
    <div class="exploser-overlay-img position-absolute z-0">
      <img src="https://wordpress.zozothemes.com/seoinux/wp-content                   /uploads/sites/33/2025/01/bg-pattern-img.png" alt="Background Pattern" class="w-100 h-100 object-fit-cover">
    </div>
  </div>

  <!-- exploser end -->
  <!-- form -->
  <div class="contact my-5 py-4">
    <div class="container">
      <div class="row align-items-center  p-4 rounded">
        <!-- Left Section: Form -->
        <div class="col-md-6">
          <h3 class="mb-4">Free Consultation</h3>
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Name *" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Phone" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email *" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Subject *" required>
              </div>
              <div class="col-12">
                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-warning text-white px-4">SEND MESSAGE</button>
              </div>
            </div>
          </form>
        </div>

        <!-- Right Section: Image -->
        <div class="col-md-6">
          <img src="https://ryse.radiantthemes.com/wp-content/uploads/2020/12/marketing-agency.jpg" class="img-fluid rounded" alt="Consultation Image">
        </div>

      </div>
    </div>
  </div>
  <!-- form end -->

</div>



@endsection
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // our work
  // document.addEventListener("DOMContentLoaded", function() {
  //   const images = document.querySelectorAll(".gallery img");

  //   images.forEach((img) => {
  //     img.addEventListener("mouseenter", function() {
  //       // Remove "active" class from all images
  //       images.forEach((image) => image.classList.remove("active"));

  //       // Add "active" class to the hovered image
  //       this.classList.add("active");
  //     });
  //   });
  // });


  document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".carousel-item");

    slides.forEach((slide) => {
      const images = slide.querySelectorAll("img");

      // Ensure the first image is always active by default
      if (images.length > 0) {
        images[0].classList.add("default-active");
      }

      images.forEach((img) => {
        img.addEventListener("mouseenter", function() {
          // Remove active class from all images in the current slide
          images.forEach((image) => image.classList.remove("default-active"));

          // Add active class to the hovered image
          this.classList.add("default-active");
        });
      });
    });
  });
  // our work end

  // testimonial
  document.addEventListener("DOMContentLoaded", function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll(".testimonial-slide");

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove("active");
        if (i === index) slide.classList.add("active");
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      showSlide(currentIndex);
    }

    // Initial display
    showSlide(currentIndex);

    // Attach event listeners
    document.querySelector(".nav-btn:nth-child(1)").addEventListener("click", prevSlide);
    document.querySelector(".nav-btn:nth-child(2)").addEventListener("click", nextSlide);
  });

  // testmonial end

  // our blog
  // our blogs end
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- </script> -->