<?php


// echo 'Success page';
// var_dump($_SESSION);
$session = array(
  'tourData' =>
  array(
    'travelers' => '1',
    'inclusive' => '0',
    'agesArray' => NULL,
    'placePrice' => '0',
    'checkInDate' => '02/20/2020',
    'discount' => '0',
    'summaryWithDiscount' => '2900',
    'tour' =>
    array(
      'name' => 'walking',
      'price' => '2900',
      'days' => '7',
      'id' => '2',
    ),
  ),
  'personals' =>
  array(
    'fullName' => 'saro maro',
    'email' => 'armen@webex.am',
    'phone' => '+37422334455',
    'messengers' => 'Viber , WhatsApp , Telegram',
  ),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Success!</title>

  <link rel="shortcut icon" href="/images/bh.ico" type="image/x-icon">
  <link rel="stylesheet" href="/plugins/swiper-master/package/css/swiper.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700">
  <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <link rel="stylesheet" href="/css/aos.css">
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="/css/jquery.timepicker.css">
  <link rel="stylesheet" href="/css/flaticon.css">
  <link rel="stylesheet" href="/css/icomoon.css">
  <link rel="stylesheet" href="/css/style.css">
  <style>
    body {
        background-image: url('payment_bg.png');
        background-repeat: repeat;
        background-size: cover;
      }
  </style>
</head>

<body>

  <nav style="z-index: 100" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="Best Holiday Logo" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="sights" class="nav-link">Sights</a></li>
          <li class="nav-item"><a href="tours" class="nav-link">Tours Packages</a></li>
          <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>





  <div class="container">
    <div class="card mt-5 mx-auto" style="max-width: 50rem">
      <div class="card-body">
      <h4 class="card-title text-success">Payment Success!</h4>
      <h6 class="card-subtitle mb-2 text-muted">Order Number: <?= $array['orderNumber']; ?></h6>
      <h6 class="card-subtitle mb-2 text-muted">Card Pan: <?= $array['cardAuthInfo']['pan']; ?></h6>
      <h6 class="card-subtitle mb-2 text-muted">Amount: <?= $array['amount']/100; ?> &euro;</h6>
      <h6 class="card-subtitle mb-2 text-muted">Pyment Date: <?= date('d-m-Y', ($array['date'])/1000 ) ?></h6>
      <p class="card-text">
        For more details check Your e-mail or contact with us.
      </p>
      <!-- <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a> -->
      <a class="card-link" href="mailto:b.holiday@gmail.com">b.holiday@gmail.com</a>
      </div>
    </div>
  </div>

  <?php
  if(!empty($_SESSION['tourData']) && !empty($_SESSION['personals']) && !empty($array)) {
    echo '<pre>';
    // var_dump($_SESSION);
    // var_dump($array);
    echo '</pre>';
    $children = $_SESSION['tourData']['agesArray'] ? count($_SESSION['tourData']['agesArray']) : 0;
    $paymentDate = date('d-m-Y', ($array['date'])/1000 );

    $clientMailBody = "<pre>
    Hi dear <em style='font-weight:600'>{$_SESSION['personals']['fullName']}</em>.
    We are very glad that you decided to spend your holidays with us. 
    Here are the details of your ordered tour package.
    -------------------------------------------------
    check-In Date - {$_SESSION['tourData']['checkInDate']}
    tour name - {$_SESSION['tourData']['tour']['name']}
    tour days - {$_SESSION['tourData']['tour']['days']}
    * * *
    adults - {$_SESSION['tourData']['travelers']}
    children - $children
    package type - {$_SESSION['tourData']['inclusive']}
    --------------------------------------------------
    Pyment Date: $paymentDate
    Order Number: {$array['orderNumber']}
    discount - {$_SESSION['tourData']['discount']}
    amount - {$_SESSION['tourData']['summaryWithDiscount']} &euro;

    </pre>";
    // echo $clientMailBody;

    $adminBody = "<pre>
    <span style='font-weight:600'>New order was successfully paid.</span>
    Client info:
    Full Name - {$_SESSION['personals']['fullName']}
    E-mail address - {$_SESSION['personals']['email']}
    Phone number - {$_SESSION['personals']['phone']}
    Alowed messengers - {$_SESSION['personals']['messengers']}

    -----------------
    Tour info:
    Tour Name - {$_SESSION['tourData']['tour']['name']}
    Tour Days - {$_SESSION['tourData']['tour']['days']}
    Check-In Date - {$_SESSION['tourData']['checkInDate']}
    Adults - {$_SESSION['tourData']['travelers']}
    Children - $children
    Place type - {$_SESSION['tourData']['placeType']}
    Package type - {$_SESSION['tourData']['inclusive']}
    
    ----------------
    Payment info:
    Card Holder Name: {$array['cardAuthInfo']['cardholderName']}
    Card PAN: {$array['cardAuthInfo']['pan']}

    Pyment Date: $paymentDate
    Order Number: {$array['orderNumber']}
    discount - {$_SESSION['tourData']['discount']}
    amount - {$_SESSION['tourData']['summaryWithDiscount']} &euro;

    </pre>";
    // echo $adminBody;

    // $transport = new Swift_SendmailTransport('/usr/sbin/exim -bs');
    // // Path to Sendmail ->	/usr/sbin/sendmail (Server information)

    // // Create a message
    // $message = (new Swift_Message('Booking confirmation'))
    //   ->setFrom(['info@best-holiday.am' => 'Best Holiday'])
    //   ->setTo([$_SESSION['personals']['email']  => $_SESSION['personals']['fullName'], 'info@best-holiday.am'])
    //   ->setBody('<pre> Hi dear Best-holiday. I write you this message</pre>', 'text/html')
    //   ;

    // // // Send the message
    // $resultClient = $mailer->send($message);
    // var_dump($resultClient);
  }
  ?>

  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.timepicker.min.js"></script>
  <script src="/js/main.js"></script>
  <script src="/plugins/swiper-master/package/js/swiper.min.js"></script>
</body>

</html>