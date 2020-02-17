<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tour-packages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="shortcut icon" href="images/bh.ico" type="image/x-icon">
    <link rel="stylesheet" href="/plugins/swiper-master/package/css/swiper.min.css">

    <link rel="stylesheet" href="/css/hover-show.css">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/tours_hover/style_common.css" />
    <link rel="stylesheet" href="css/tours_hover/style3.css" />
  </head>
  <body>
    
    <nav style="z-index: 100" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="Best Holiday Logo"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="sights" class="nav-link">Sights</a></li>
            <li class="nav-item active"><a href="tours" class="nav-link">Tours Packages</a></li>
            <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <!-- <canvas id="myClouds"></canvas> -->

    <?php

    $tours = [
      1 => [
        'title'=>"Author&#39;s tour: horse trekking in Armenia",
        'desc' =>"The animal and plant world of Armenia is unique and original. The reasons for such an...",
        'link'=>'/package?p=1',
        'days'=> '7',
        'price'=> '4200€',
        'image'=>'images/horse_tour/horse_tour.jpg',
      ],
      2 => [
        'title'=>"Walking tour in Armenia. Trekking “To the origins of civilization”",
        'desc' =>"Armenia is an ideal place for active recreation and lovers of hiking tours (hikes). Trekking ...",
        'link'=>'/package?p=2',
        'days'=> '7',
        'price'=> '2900€',
        'image' => "/images/walking_tour/walking_tour.jpg"
      ],
      3 => [
        'title'=>"Travelling to Armenia - Sightseeing tour to Armenia (7 days/6 nights)",
        'desc' =>"<p>Armenia is a country with a very ancient history and centuries-old traditions. During...",
        'link'=>'/package?p=3',
        'days'=> '7',
        'price'=> '3300€',
        'image' => "/images/sightseeing_tour/sightseeing_tour.jpg"
      ],
      4 => [
        'title'=>"Tour to Armenia and Nagorno-Karabakh (Artsakh) – 7 days/6 nights",
        'desc' =>"<p>We offer you to take a <strong>week-long tour to Armenia and Nagorno-Karabakh...</strong>...",
        'link'=>'/package?p=4',
        'days'=> '7',
        'price'=> '5400€',
        'image' => "/images/tour_artsakh/tour_artsakh.jpg"
      ],
      5 => [
        'title'=>"Cheap trip to Armenia – a weekend tour (3 days/2 nights)",
        'desc' =>"<p>If the holiday is still far away, but you want to have a rest and spend an unforgettable w...",
        'link'=>'/package?p=5',
        'days'=> '3',
        'price'=> '350€',
        'image' => "/images/weekend_tour/weekend_tour.jpg"
      ],
      6 => [
        'title'=>"Tours in Armenia - Excursion trip (5 days/4 nights)",
        'desc' =>"<p><strong>Cheap tour</strong> is the dream of every tourist. We present you our five-day ...",
        'link'=>'/package?p=6',
        'days'=> '5',
        'price'=> '1650€',
        'image' => "/images/excursion_tour/excursion_tour.jpg"
      ],
    ];

    ?>
    <!--     
          <section style="height: 100vh" class="">
        <div class="background w">
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="i"></div>
            <div class="container">
              <div class="text-height">
                <div class="col-md-7 col-sm-12">
                  <p class="breadcrumbs-text">
                    <span class="mr-2 border-bottom">
                      <a href="/" class="pointer white">Home</a>
                    </span>
                    <span class="border-bottom erkrordakan">Tours</span>
                  </p>
                  <h1 class="mb-3 breadcrumbs-text-h1">Tour<span class="br">&nbsp;</span>Packages</h1>
                </div>
              </div>
            </div>
          </div>
      </section> -->

  
    <div class="swiper-container display-block">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/images/92f97eb687616cef5dab946c06d48611.jpg" alt="Los Angeles" style="width:100%;">
        </div>
        <div class="swiper-slide">
          <img src="/images/d3f86375f48490115f9312be6ec0322a_1_-1_art.jpg" alt="Los Angeles" style="width:100%;">
        </div>
        <div class="swiper-slide">
          <img src="/images/92f97eb687616cef5dab946c06d48611.jpg" alt="Los Angeles" style="width:100%;">
        </div>
        <div class="swiper-slide">
          <img src="/images/d3f86375f48490115f9312be6ec0322a_1_-1_art.jpg" alt="Los Angeles" style="width:100%;">
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div class="display-none">
      <img src="/images/b9342b7c57d087a650d11b828c97447b.jpg" alt="Los Angeles" style="width:100%;">
    </div>

    <div class="container">
      <div class="text-height">
        <div class="col-md-7 col-sm-12">
          <p class="breadcrumbs-text">
            <span class="mr-2 border-bottom">
              <a href="/" class="pointer white">Home</a>
            </span>
            <span class="border-bottom erkrordakan">Tours</span>
          </p>
          <h1 class="mb-3 breadcrumbs-text-h1">Tours</h1>
        </div>
      </div>
    </div>
    <!-- END slider -->

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">

              <?php for($i = 1; $i <= 6; $i++) : ?>

              <div class="col-md-6 col-lg-6 mb-4 ftco-animate">
                <div class="view view-third text">
                    <img src="<?= $tours[$i]['image'] ?>" />
                    <div class="mask">
                        <h2><?= $tours[$i]['title'] ?></h2>
                        <p><?= $tours[$i]['desc'] ?></p>
                        <span>price: <?= $tours[$i]['price'] ?></span>
                        <span>days: <?= $tours[$i]['days'] ?></span>
                      
                        <a href="<?= $tours[$i]['link'] ?>" class="info">Read More</a>
                    </div>
                </div>
              </div>

              <?php endfor; ?>

            </div>            
          </div>
          <!-- END -->

        </div>
      </div>
    </section>

    <div id="footer"></div>

    <?php
      include("./footer.php");
    ?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/main.js"></script>
    <script src="/plugins/swiper-master/package/js/swiper.min.js"></script>

    <script>
      $("#footer").prepend( '<ul class="ftco-footer-social"><li><a class="facebook" href="https://www.facebook.com/best.holiday.399"><span class="icon-facebook"></span></a></li></ul>' );
      var swiper = new Swiper('.swiper-container', {
        speed: 2500,
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
          delay: 1500,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>

  </body>
</html>