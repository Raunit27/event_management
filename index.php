

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Event Evolution</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
  <!-- Nivo Lightbox -->
  <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">
  <!-- Animate -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- Responsive Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- sponser -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- sponser -->
</head>

<body>
  <style>
    /*  list  */

    *{
      margin:0px;
      padding:0px;
    }
    .list-bullets {
      list-style: none;
    }

    .list-bullets li {
      display: flex;
      align-items: center;
    }

    .list-bullets li::before {
      content: '';
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #5784d7;
      border: 2px solid #8fb3f5;
      display: block;
      margin-right: 1rem;
    }

    /*  list */
    .navbar-light .navbar-nav .nav-link {
      color: #000;
    }

    #demo {
      background-size: cover;
    }

    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");

    /*sponser*/
    h2 {
      text-align: center;
      padding: 20px;
    }

    /* Slider */

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-slider {
      position: relative;
      display: block;
      box-sizing: border-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-touch-callout: none;
      -khtml-user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }

    .slick-list:focus {
      outline: none;
    }

    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .slick-track {
      position: relative;
      top: 0;
      left: 0;
      display: block;
    }

    .slick-track:before,
    .slick-track:after {
      display: table;
      content: '';
    }

    .slick-track:after {
      clear: both;
    }

    .slick-loading .slick-track {
      visibility: hidden;
    }

    .slick-slide {
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
      float: right;
    }

    .slick-slide img {
      display: block;
    }

    .slick-slide.slick-loading img {
      display: none;
    }

    .slick-slide.dragging img {
      pointer-events: none;
    }

    .slick-initialized .slick-slide {
      display: block;
    }

    .slick-loading .slick-slide {
      visibility: hidden;
    }

    .slick-vertical .slick-slide {
      display: block;
      height: auto;
      border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
      display: none;
    }

    /*sponer*/
    .container {
      overflow: hidden;
     

      .slider {
        animation: slidein 30s linear infinite;
        white-space: nowrap;

        .logos {
          width: 100%;
          display: inline-block;
          margin: 0px 0;

          .fab {
            width: calc(100% / 5);
            animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;
          }
        }
      }
    }

    @keyframes slidein {
      from {
        transform: translate3d(0, 0, 0);
      }

      to {
        transform: translate3d(-100%, 0, 0);
      }
    }

    @keyframes fade-in {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    /* card Styling */
    .container-box {
  display: flex;
  flex-wrap: wrap;
  justify-content:space-between;
}

/* Responsive adjustments */
@media (max-width: 100%) {
  .container-box {
    flex-direction: column;
    align-items: center;
  }
}

/* Add more media queries as needed */

    .card-title1 {
  color: #262626;
  font-size: 1.2em;
  line-height: normal;
  font-weight: 700;
  margin-bottom: 0.5em;
}

.small-desc1 {
  font-size: 1em;
  font-weight: 400;
  line-height: 1.5em;
  color: #452c2c;
}

.small-desc1 {
  font-size: 1em;
}

.go-corner1 {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 2em;
  height: 2em;
  overflow: hidden;
  top: 0;
  right: 0;
  background: linear-gradient(135deg, #6293c8, #c9426f);
  border-radius: 0 4px 0 32px;
}

.go-arrow1 {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;
}

.card1 {
  display: block;
  position: relative;
  max-width: 300px;
  max-height: 320px;
  background-color: #f2f8f9;
  border-radius: 10px;
  padding: 2em 1.2em;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;
  background: linear-gradient(to bottom, #c3e6ec, #a7d1d9);
  font-family: Arial, Helvetica, sans-serif;
}

.card1:before{
  content: '';
  position: absolute;
  z-index: -1;
  top: -16px;
  right: -16px;
  background: linear-gradient(135deg, #f34141, #dcc3c3);
  height: 32px;
  width: 32px;
  border-radius: 32px;
  transform: scale(1);
  transform-origin: 50% 50%;
  transition: transform 0.35s ease-out;
}

.card1:hover:before {
  transform: scale(28);
}

.card1:hover .small-desc1 {
  transition: all 0.5s ease-out;
  color: rgba(17, 3, 3, 0.8);
}

.card1:hover .card-title1 {
  transition: all 0.5s ease-out;
  color: #ffffff;
}
/* card styling end */


  </style>
  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">

    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-sm navbar-light bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"> <a class="navbar-brand" href="#"><img id="MDB-logo" src="assets/img/logo11.png" 
          style="height: 50px; width: 200px;"
              draggable="false" href="index.html" /></a></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-sm-0 ml-5">
            <li class="nav-item ">
              <a class="nav-link mx-2" href="#header-wrap" style="color: white;">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#about" style="color: white;">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#intro" style="color: white;">
                Categories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#client" style="color: white;">
                clients
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#gallery" style="color: white;">
                Gallery
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#offers" style="color: white;">
                Offers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#sponsors_1" style="color: white;">
                Sponsors
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="#contact-map" style="color: white;">
                Contact
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2" href="customer_login.php" style="color: white;">
                Customer-Login
              </a>
            </li>
         
          </ul>
          
        </div>
      </div>
    </nav>




    <!-- <nav class="navbar navbar-expand-lg  bg-dark navbar-danger" style="height:70px;">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="container d-flex ">
        <div class="row">
          <div class="col-3 d-flex  mb-0 ">
            <a class="navbar-brand" href="#"><img id="MDB-logo" src="assets/img/logo1.png" 
            style="height:250px; width:300px; "
                draggable="false" href="index.html" /></a>
          </div>
          <div class="col-9 d-flex ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav align-items-center mx-auto ">

                <li class="nav-item ">
                  <a class="nav-link mx-2" href="#header-wrap">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#about">
                    About
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#schedules">
                    schedules
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#client">
                    clients
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#gallery">
                    Gallery
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#offers">
                    Offers
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#sponsors_1">
                    Sponsors
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="#contact-map">
                    Contact
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    Navbar -->
    <!-- Navbar End -->

    <!-- Hero Area Start -->

    <!-- Carousel wrapper -->
    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
          aria-label="Slide 3"></button>
      </div>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <img src="assets/img/party2.jpg" class="d-block w-100 img1" alt="#" />
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Manage your event with us</h5> -->
            <p>Everything you need to craft impactful event experiences all while staying technologically relevant, now
              and always.</p>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="assets/img/wed.jpg" class="d-block w-100 img1" alt="#" />
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Second slide label</h5> -->
            <p>From Non-profit events, to weddings, to social gatherings and
              corporate events, we can do it all!</p>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <img src="assets/img/wedding.jpeg" class="d-block w-100 img1" alt="Cliff Above a Stormy Sea" /
            style="margin-top: 53px;">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Third slide label</h5> -->
            <p>Planning you're wedding, but no idea where to start? we have you covered!
            </p>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel wrapper -->
    <!-- Hero Area End -->

  </header>


  <!-- About Section Start -->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="img-thumb  mt-5">
            <img class="img-fluid" src="assets/img/aboutUs.webp" alt="" style="border-radius: 60px;">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-xs-12">
          <div class="about-content">
            <div>
              <div class="about-text">
                <h2>About US</h2>
                <p>"At Event Evolution, we specialize in creating unforgettable experiences. With a passion for detail and a
                  flair for creativity, our team of event experts turns your vision into reality. From corporate
                  gatherings to weddings and everything in between, we take care of every detail so you can enjoy a
                  flawless event. Let's make your moments memorable with EventUp."</p>
              </div>
              <ul class="stylish-list mb-3">
                <li><i class="lni-check-mark-circle"></i>Planning and Coordination</li>
                <li><i class="lni-check-mark-circle"></i>Logistics and Execution</li>
                <li><i class="lni-check-mark-circle"></i>Budget Management</li>
                <li><i class="lni-check-mark-circle"></i>Risk Management</li>
                <li><i class="lni-check-mark-circle"></i>Client and Stakeholder Communication</li>
              </ul>
              <!-- <a class="btn btn-common" href="#">Learn More</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->


  <section id="intro" class="intro section-padding">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp " data-wow-delay="0.2s">EVENT CATEGORIES</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">Discover a diverse range of events on our website, spanning
              music and concerts that will ignite your passion for melodies, arts and culture experiences to feed your
              creative soul, thrilling sports and fitness activities to keep you active, culinary adventures for food
              enthusiasts, and enriching education and workshops to fuel your personal and professional growth—all
              conveniently curated in one place to cater to your varied interests and passions.</p>
          </div>
        </div>
      </div>
      <div class="row intro-wrapper">
        <div class="col-lg-4 col-md-6 col-xs-12">

          <div class="single-intro-text mb-70" style="background-image: url('assets/img/card/wed.jpg');" id="demo">
            <i class="lni-microphone"></i>
            <h3>Wedding Events >></h3>
            <p style="font-weight: bold;">
              Explore a world of unforgettable wedding experiences on our website, our wedding event category is your
              go-to destination for everything you need to create a day filled with love, joy, and cherished
              memories.<br><br>
            </p>
            <span class="count-number">01</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="single-intro-text" style="background-image: url('assets/img/card/birthday.jpeg');" id="demo">
            <i class="lni-users"></i>
            <h3 class="ts-title">Birthday Parties >></h3>
            <p style="font-weight: bold;">
              Delve into a realm of celebration and joy with our birthday party event category. Our birthday party
              section is your ultimate source for crafting moments of love, and lasting memories with friends
              and family.<br><br>
            </p>
            <span class="count-number">02</span>
          </div>
          <div class="border-shap left"></div>
        </div>

        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="single-intro-text mb-70" style="background-image: url('assets/img/card/festival.jpeg');"
            id="demo">
            <i class="lni-bullhorn"></i>
            <h3>Festival Events >></h3>
            <p>
              Step into a world of cultural richness and exhilarating festivities with our festival event category. Our
              festival events offer a kaleidoscope of experiences that showcase the beauty of human diversity and the
              joy of coming together in celebration.<br>
            </p>
            <span class="count-number">03</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="single-intro-text mb-70" style="background-image: url('assets/img/card/annual.jpg');" id="demo">
            <i class="lni-heart"></i>
            <h3>Annual Events >></h3>
            <p>
              Welcome to our annual functions event category, where tradition meets celebration and milestones are
              honored in style. Our annual functions are a testament to the culmination of hard work and
              dedication.<br><br>
            </p>
            <span class="count-number">04</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="single-intro-text mb-70" style="background-image: url('assets/img/card/religious.jpg');"
            id="demo">
            <i class="lni-cup"></i>
            <h3>Religious Events >></h3>
            <p>
              Step into the sacred realm of spirituality and devotion with our religious event category. Our platform is
              a sanctuary for those seeking solace, enlightenment, and community in their faith. Explore a diverse range
              of religious events here. </p>
            <span class="count-number">05</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
          <div class="single-intro-text mb-70" style="background-image: url('assets/img/card/public.jpg');" id="demo">
            <i class="lni-gallery"></i>
            <h3>Public Events >></h3>
            <p>Welcome to our public events category, your gateway to a world of community and connectivity. We believe
              that public events are the heartbeats of society, where people come together to celebrate, learn, and
              unite. <br><br>
            </p>
            <span class="count-number">06</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- intro Section End -->


  <!-- intro Section End -->

  <!-- Counter Area Start-->
  <section class="counter-section section-padding ">
    <div class="container">
      <div class="row">
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <!-- <i class="lni-mic"></i> -->
              <i class="bi bi-check-lg"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">100</div>
              <p>Successful Events</p>
            </div>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <!-- <i class="lni-bulb"></i> -->
              <i class="bi bi-person-arms-up"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">8</div>
              <p>Ongoing Events </p>
            </div>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <i class="lni-briefcase"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">5</div>
              <p>Upcoming</p>
            </div>
          </div>
        </div>
        <!-- Counter Item -->
        <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
          <div class="counter">
            <div class="icon">
              <i class="bi bi-trophy-fill"></i>
            </div>
            <div class="counter-content">
              <div class="counterUp">12</div>
              <p>Awards</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter Area End-->

  <!-- Schedule Section Start -->
 
  <!-- Schedule Section End -->

  <!-- Team Section Start -->
  <section id="client" class="section-padding text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our happy Client's</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">"Client Delight: Our Happy Customers Share Their
              Experiences, Celebrating Success with Our Services."<br> "Satisfied Clients Share Their Success Stories
              with Us!"</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-bt">
        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/clients/birthday.avif" alt="">
              <!-- <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> -->
            </div>
            <div class="info-text">
              <h3><a href="#">Vikram Kumar</a></h3>
              <p>Birthday party</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/clients/marriage-646802.jpg" alt="">
              <!-- <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> -->
            </div>
            <div class="info-text">
              <h3><a href="#">Rohan Mehta</a></h3>
              <p>Wedding</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/clients/corporate.jpg" alt="">
              <!-- <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> -->
            </div>
            <div class="info-text">
              <h3><a href="#">Neha Gupta</a></h3>
              <p>Corporate Event</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">
          <!-- Team Item Starts -->
          <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
            <div class="team-img">
              <img class="img-fluid" src="assets/img/clients/businees.jpg" alt="">
              <!-- <div class="team-overlay">
                <div class="overlay-social-icon text-center">
                  <ul class="social-icons">
                    <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div> -->
            </div>
            <div class="info-text">
              <h3><a href="#">Aryan Singh</a></h3>
              <p>Business Meeting</p>
            </div>
          </div>
          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">

          <!-- Team Item Ends -->
        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">

        </div>

        <div class="col-lg-3 col-md-6 col-xs-12">

        </div>


      </div>
    </div>
    <!-- <div>
      <a href="#" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">Meet all speakers</a>
    </div> -->
    </div>
  </section>
  <!-- Team Section End -->


  <!-- Event Slides Section Start -->
  <section id="gallery" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Gallery</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">Celebrating moments<br> Explore our event gallery, a visual
              journey through unforgettable experiences and cherished memories that speak volumes.</p>
          </div>
        </div>
      </div>


      <div class="container">


        <!-- Image Gallery -->
        <div class="row">
          <div class="col-md-3">
            <a href="#" data-toggle="modal" data-target="#imageModal1">
              <img src="assets/img/Birthday.jpg" alt="Image 1" class="img-thumbnail">
            </a>
          </div>
          <div class="col-md-3">
            <a href="#" data-toggle="modal" data-target="#imageModal2">
              <img src="assets/img/bday2.jpg" alt="Image 2" class="img-thumbnail">
            </a>
          </div>

          <div class="col-md-3">
            <a href="#" data-toggle="modal" data-target="#imageModal3">

              <img src="assets/img/function.webp" class="img-thumbnail">
            </a>
          </div>
          <div class="col-md-3 ">
            <a href="#" data-toggle="modal" data-target="#imageModal4">
              <img src="assets/img/wednew.jpg" alt="Image 4" class="img-thumbnail">
            </a>
          </div>
        </div>

        <!-- Modal for Image 1 -->
        <div class="modal fade" id="imageModal1" tabindex="-1" role="dialog" aria-labelledby="imageModal1Label"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="assets/img/wed.jpg" alt="Image 1" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for Image 2 -->
        <div class="modal fade" id="imageModal2" tabindex="-1" role="dialog" aria-labelledby="imageModal2Label"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="assets/img/bday2.jpg" alt="Image 2" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

        <!-- Modal for Image 3 -->
        <div class="modal fade" id="imageModal3" tabindex="-1" role="dialog" aria-labelledby="imageModal3Label"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="assets/img/party2.jpg" alt="Image 3" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <!-- Modal for Image 4 -->
        <div class="modal fade" id="imageModal4" tabindex="-1" role="dialog" aria-labelledby="imageModal4Label"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="assets/img/wednew.jpg" alt="Image 4" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      <<!-- <div class="row mt-5">
        <div class="col-12 text-center">
          <a href="#" class="btn btn-common">More images</a>
        </div>
    </div>
    -->
    <div class="container-fluid">
      <!-- Button to Open Image Gallery -->
      <div class="text-center">
        <button type="button" class="btn btn-common mt-30 wow fadeInUp" data-toggle="modal"
          data-target="#imageGalleryModal" style="text-align: center;">
          Open Gallery
        </button>
      </div>

      <!-- Image Gallery Modal -->
      <div class="modal fade" id="imageGalleryModal" tabindex="-1" role="dialog"
        aria-labelledby="imageGalleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <!-- Carousel for Image Gallery -->
              <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/Birthday.jpg" alt="Image 1" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/wednew.jpg" alt="Image 2" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/function.webp" alt="Image 3" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/meet.jpg" alt="Image 4" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/bday2.jpg" alt="Image 5" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/Birthday.jpg" alt="Image 6" class="d-block w-100">
                  </div>

                  <!-- Add more images as needed -->
                </div>
                <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Event Slides Section End -->



  <!-- Blog Section Start -->
  <section id="offers" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-16">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Latest Packages</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">With our exclusive offer, you can save money on high-quality
              arrangment<br> while enjoying the best customer service in the industry.</p>
          </div>
        </div>
      </div>

<div class="container-box">
      <div class="card1">
      <p class="card-title1">200-persons party Packages</p>
      <p class="small-desc1">
        <ul class="list-bullets">
          <li class="mb-2">Use centerpieces and balloons.</li>
          <li class="mb-2">Arrange for a cleanup crew.</li>
          <li class="mb-2">Choose a spacious venue.</li>
      </ul>
      </p>
      <div class="go-corner1">
        <div class="go-arrow1">→</div>
      </div>
    </div>


    <div class="card1">
      <p class="card-title1">500-persons party Packages</p>
      <p class="small-desc1">
        <ul class="list-bullets">
          <li class="mb-2">Choose a spacious venue with a large capacity.</li>
          <li class="mb-2">Send out invitations well in advance, considering the larger guest list.</li>
          <li class="mb-2">Plan a diverse and ample menu.</li>
          
      </ul>
      </p>
      <div class="go-corner1">
        <div class="go-arrow1">→</div>
      </div>
    </div>

    <div class="card1">
      <p class="card-title1">1000-persons party Packages</p>
      <p class="small-desc1">
        <ul class="list-bullets">
          <li class="mb-2">Choose a large  venue with a capacity suitable for 1000 people.</li>
          <li class="mb-2">Plan a diverse and substantial menu to cater to various preferences.</li>
          <li class="mb-2">Plan a diverse and ample menu.</li>
      </ul>
      </p>
      <div class="go-corner1">
        <div class="go-arrow1">→</div>
      </div>
    </div>

    </div>
  <!-- Blog Section End -->
   <div id="sponsors_1" style="height:100px"></div>
  <!-- Sponsors Section Start -->
  <section id="sponsors" class="section-padding" >
    <div class="overlay"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsors</h2>
            <!-- <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius
              illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p> -->
          </div>
        </div>
      </div>
      <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
        <div class="col-lg-12">
          <!-- Sponsers -->
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="container rounded">
                <div class="slider">
                <div class="logos">
    <i class="fas fa-birthday-cake fa-4x mr-5"></i> <!-- Represents bakery -->
    <i class="fas fa-utensils fa-4x mr-5"></i> <!-- Represents catering -->
    <i class="fas fa-money-bill-wave fa-4x mr-5"></i> <!-- Represents financial sponsor -->
    <i class="fas fa-coffee fa-4x mr-5"></i> <!-- Represents coffee sponsor -->
    <i class="fas fa-cocktail fa-4x"></i> <!-- Represents beverage sponsor -->
</div>
<div class="logos">
    <i class="fas fa-birthday-cake fa-4x mr-5"></i> <!-- Represents bakery -->
    <i class="fas fa-utensils fa-4x mr-5"></i> <!-- Represents catering -->
    <i class="fas fa-money-bill-wave fa-4x mr-5"></i> <!-- Represents financial sponsor -->
    <i class="fas fa-coffee fa-4x mr-5"></i> <!-- Represents coffee sponsor -->
    <i class="fas fa-cocktail fa-4x"></i> <!-- Represents beverage sponsor -->
</div>
                </div>
              </div>
            </div>

          </div>
          <!-- Sponsers -->
        </div>
      </div>
    </div>
  </section>
  <!-- Sponsors Section End -->

  <!-- Contact Us Section -->
  <section id="contact-map" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">"Connect with Us: Your Questions, Our Answers. Contact Us
              for Assistance and Information. We're Here to Help!" <br> "Get in Touch with Us: Reach Out Today!"</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-xs-12">
          <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
            <div class="form-wrapper"
              style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxXtbafDT1zX_5sKIMDgY2UtRJl_BUZ-0MhWi58CDTiuOso2EzBVrFgyHhP-_zySIc3sE&usqp=CAU); border-radius: 30px;">
              <form role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator" action="form_submit.php" method="post" >
                <div class="row">
                  <div class="col-md-6 form-line">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="First Name" required
                        data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6 form-line">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required
                        data-error="Please enter your Email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12 form-line">
                    <div class="form-group">
                      <input type="tel" class="form-control" id="msg_subject" name="number" placeholder="Mobile Number"
                        required data-error="Please enter your message subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" rows="4" id="subject" name="subject"
                      placeholder="Subject" 
                      required
                        data-error="Write your message"></textarea>
                    </div>
                    <div class="form-submit">
                      <button type="submit" class="btn btn-common" id="form-submit" name="send_msg"><i class="fa fa-paper-plane"
                          aria-hidden="true"></i> Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us Section End -->

  <!-- Map Section Start -->
  <!-- <section id="google-map-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <object style="border:0; height: 450px; width: 100%;"
            data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.9638322081764!2d79.07313627480049!3d21.19359568209748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c166b2d287c1%3A0x6f2098d1437e6381!2sACE%20TECH!5e0!3m2!1sen!2sin!4v1702198236435!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></object>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Map Section End -->

  <!-- Contact text Start -->
  <section id="contact-text">
    <div class="container">
      <div class="row contact-wrapper">
        <div class="col-lg-4 col-md-5 col-xs-12">
          <ul>
            <li>
              <i class="lni-home"></i>
            </li>
            <li><span>Cesare Rosaroll, 118 80139 Eventine</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-12">
          <ul>
            <li>
              <i class="lni-phone"></i>
            </li>
            <li><span>+789 123 456 79</span></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-12">
          <ul>
            <li>
              <i class="lni-envelope"></i>
            </li>
            <li><span>Support@example.com</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact text End -->

  <footer>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-xs-12">
          <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s" style="color:black;">
            <h2 class="subscribe-title">To Get Nearly Updates</h2>
            <form class="text-center form-inline" action="form_submit.php" method="post">

              <input class="mb-20 form-control " name="email" placeholder="Enter Your Email Here" required >
              <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30"
                name="submit" id="submit">
                <span class="ladda-label" style="color:white;/"><i class="lni-check-box"></i> Get Update</span>
              </button>
            </form>
          </div>
          <div class="footer-logo">
            <img src="assets/img/logo11.png" alt="" style="width: 300px;">
          </div>
          <div class="social-icons-footer">
            <ul>
              <li class="facebook"><a target="_blank" href="3"><i class="lni-facebook-filled"></i></a></li>
              <li class="twitter"><a target="_blank" href="3"><i class="lni-twitter-filled"></i></a></li>
              <li class="pinterest"><a target="_blank" href="3"><i class="lni-pinterest"></i></a></li>
            </ul>
          </div>
          <div class="site-info">
            <p>Designed and Developed </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
  </a>

  <div id="preloader">
    <div class="sk-circle">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="assets/js/jquery-min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/jquery.nav.js"></script>
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/nivo-lightbox.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>