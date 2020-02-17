<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Best-holiday</title>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <link rel="shortcut icon" href="images/bh.ico" type="image/x-icon">
    <link rel="stylesheet" href="/plugins/swiper-master/package/css/swiper.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700">
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

            <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>

            <li class="nav-item"><a href="about" class="nav-link">About</a></li>

            <li class="nav-item"><a href="sights" class="nav-link">Sights</a></li>

            <li class="nav-item"><a href="tours" class="nav-link">Tours Packages</a></li>

            <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>

          </ul>

        </div>

      </div>

    </nav>
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
    <section style="padding: 50px 50px 0 50px;" class="ftco-section-2">

      <div class="container-fluid d-flex">

        <div class="section-2-blocks-wrapper row no-gutters">

          <div class="imgArarat img col-sm-12 col-lg-6" style="background-image: url('images/YER1_1_AEGEEYerevancopyrightedbyVardanPetrosyanphotographhy.jpg');">

            <a href="https://www.youtube.com/watch?v=Uy2PzVtUEEU" class="button popup-vimeo vimeo"><span class="ion-ios-play"></span></a>

          </div>

          <div style="padding-top: 15px; padding-bottom: 0" class="text col-lg-6 ftco-animate">

            <div class="text-inner align-self-start">

              

              <h3><a href="/about">How it all started</a></h3>

              <p><strong>Homeland</strong>  is a place where we were born, live, learn and work. There are many people living on the Earth and they are all from different countries. And they all have their own homeland. <strong>Our homeland is Armenia</strong>. We love our country because we feel comfortable here as well as for its <strong>nature and beauty</strong><span style="text-decoration: underline"> Armenia is one of the oldest countries in the world </span>which is rich in its ancient and diverse culture, and the Armenian people have always stood out with their warmth and hospitality.</p>

              <p>Initially we talked about Armenia, <strong>introduced its sights, cultural centers</strong> and just <strong>beautiful places</strong>, treated to <span>delicious food</span>  to our relatives and friends from other countries who had come to Armenia for the first time. During the organization of <strong>tours in Armenia</strong>, we delved into all the details, to cover as many places of interest as possible, and judging by the feedback and memories of our guests we had it pretty well.</p>



            </div>

          </div>

        </div>

      </div>

    </section>
    <div id="footer"></div>
    <section class="ftco-section">

      <div class="container">

        <div class="row">

          <?php

            $hash = ['Yerevan', 'Tsaghkadzor', 'Goris', 'Jermuk'];
            $title_array = ['Yerevan', 'Tsaghkadzor', 'Goris', 'Jermuk'];

            $image_array = ['YEREVAN/images%20(33).jpg', 'TSAGHKADZOR/images%20(1).jpg', 'Goris/images%20(8).jpg', 'Jermuk/images%20(7).jpg'];

            $link_array  = ['/sights?page=3', '/sights?page=3', '/sights?page=1', '/sights?page=2'];

            for($i = 0; $i < 4; $i++){

              $sights_image = $image_array[$i];

              $sights_link  = $link_array[$i] . "#" . $hash[$i];

              $sights_title = $title_array[$i];

          ?>

              <div class="col-lg-3 promo ftco-animate">

                <a href="<?= $sights_link ?>" class="promo-img mb-4" style="background-image: url('images/<?= $sights_image ?>');"></a>

                <div class="text text-center">

                  <h2><?= $sights_title ?></h2>

                  <a href="<?= $sights_link ?>" class="read">Read more</a>

                </div>

              </div>

          <?php

            }

          ?>

        </div>

      </div>

    </section>
    <section class="ftco-section bg-light">

      <div class="container">

        <div class="row justify-content-center mb-5 pb-5">

          <div class="col-md-7 text-center heading-section ftco-animate">

            <h2>Our Services</h2>

          </div>

        </div>

        <div class="row">

          <?php

            $text_title_array  = ['Special Activities', 'Travel Arrangements', 'Private Guide', 'Location Manager'];

            $text_desc_array   = ['Our large team is professional managers, administrators, licensed drivers and guides, and your', 'Impressions are the main goal of our work! Our task is to ensure that every tourist who comes to us', 'Receives prompt feedback, excursion service at the highest level and, of course, that he imbued with the', 'Splendor of our wonderful country and would definitely want to come back here'];

            $text_icon_array   = ['flaticon-sailboat', 'flaticon-around', 'flaticon-compass', 'flaticon-map-of-roads'];

            for($i = 0; $i < 4; $i++){

              $text_title = $text_title_array[$i];

              $text_desc  = $text_desc_array[$i];

              $text_icon  = $text_icon_array[$i];

          ?>

            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">

              <div class="media block-6 services d-block text-center">

                <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center <?= $text_icon ?>"></span></div></div>

                <div class="media-body p-2">

                  <h3 class="heading"><?= $text_title ?></h3>

                  <p><?= $text_desc ?></p>

                </div>

              </div>      

            </div>

          <?php

            }

          ?>

        </div>

      </div>

    </section>
    <section class="ftco-section bg-light">

      <div class="container">

        <div class="row justify-content-center mb-5 pb-5">

          <div class="col-md-7 text-center heading-section ftco-animate">

            <h2>Our Tours</h2>

          </div>

        </div>



        <div class="row ftco-animate">

          <div class="carousel1 owl-carousel ftco-owl">

            <?php

              $tours = [

                1 => [

                  'title'=>"Author&#39;s tour: horse trekking in Armenia",

                  'desc' =>"The animal and plant world of Armenia is unique and original. The reasons for such an amazing...",

                  'link'=>'/package?p=1',

                  'days'=> '7',

                  'price'=> '4200€',

                  'image'=>'/images/horse_tour/horse_tour.jpg',

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

                  'desc' =>"<p>Armenia is a country with a very ancient history and centuries-old traditions. During the ...",

                  'link'=>'/package?p=3',

                  'days'=> '7',

                  'price'=> '3300€',

                  'image' => "/images/sightseeing_tour/sightseeing_tour.jpg"

                ],

                4 => [

                  'title'=>"Tour to Armenia and Nagorno-Karabakh (Artsakh) – 7 days/6 nights",

                  'desc' =>"<p>We offer you to take a week-long tour to Armenia and Nagorno-Karabakh (Artsakh). During th...",

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

                  'desc' =>"<p>Cheap tour is the dream of every tourist. We present you our five-day budgetary trip in Ar...",

                  'link'=>'/package?p=6',

                  'days'=> '5',

                  'price'=> '1650€',

                  'image' => "/images/excursion_tour/excursion_tour.jpg"

                ],

              ];

            

              for($i = 1; $i <= 6; $i++){

                $toursImage = $tours[$i]['image'];

                $toursLink = $tours[$i]['link'];

                $toursDesc = $tours[$i]['desc'];

            ?>

              <div class="item">

                <div class="blog-entry">
                  <a href="<?= $toursLink ?>"><img class="block-20" src="<?= $toursImage ?>" /></a>

                  <div class="text p-4">

                    <div class="meta">

                    </div>

                    <h3 class="heading"><a href="<?= $toursLink ?>"><?= $toursDesc ?></a></h3>

                    <p class="clearfix">

                      <a href="<?= $toursLink ?>" class="float-left">Read more</a>

                    </p>

                  </div>

                </div>

              </div>

            <?php

              }

            ?>

          </div>

        </div>

      </div>

    </section>
    <?php
      include("./footer.php");
    ?>
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>
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