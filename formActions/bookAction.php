<?php
session_start();

if( !empty($_POST['fullName'])  && !empty($_POST['travelers']) ) {
  $_SESSION = array();

  $travelers = $_POST['travelers'];
  $inclusive = $_POST['inclusive'];
  $agesArray = $_POST['agesArray'];
  $placeType= $_POST['placeType'];
  $checkInDate = $_POST['checkInDate'];
  $discount = $_POST['discount'];
  $summaryWithDiscount = $_POST['summaryWithDiscount'];
  $tour = $_POST['tour'];

  $fullName = $_POST['fullName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $messengers = $_POST['messengers'];


  //creating order
  /* marchent Version: 2.2.22 */
  $api_name = '34542972_api'; // real -> '34542972_api'; test -> 'best-holiday_test'
  $api_pass = '$Ah0545139'; //'$Ah0545139';
  $orderNumber = strtoupper( substr( uniqid(sha1(time())), 0,12) );
  $amount = 50; // $summaryWithDiscount * 100; // 50 is 0.5
  $currency = 840; // euro - 978, dollar 840
  $lng = 'en';
  $host_name = $_SERVER["HTTP_HOST"];
  $http = $_SERVER["REQUEST_SCHEME"];
  $returnUrl = "$http://$host_name/booking/index.php?orderNumber=$orderNumber";

  $PostFields = "userName=$api_name&password=$api_pass&amount=$amount&currency=$currency&orderNumber=$orderNumber&language=$lng&returnUrl=$returnUrl";
  $api = 'https://ipay.arca.am/payment/rest/register.do';
  $api_test = 'https://ipaytest.arca.am:8445/payment/rest/register.do';

    // $CurlOptions = array(
    //   CURLOPT_URL  => $api,
    //   CURLOPT_RETURNTRANSFER=> true,					
    //   CURLOPT_SSL_VERIFYHOST => false,
    //   CURLOPT_SSL_VERIFYPEER => false,                           
    //   CURLOPT_POST => true,
    //   CURLOPT_POSTFIELDS => $PostFields,
    // );

    // $CH = curl_init();
    // if (curl_setopt_array($CH, $CurlOptions)) {
    //   $Result = curl_exec($CH);
    //   if (curl_errno($CH) > 0) {
    //     $RetStr = false;
    //   } else {
    //     $RetStr = $Result;
    //   }
    // }
    // curl_close($CH);
    // $data = json_decode($RetStr);
    // $array = json_decode(json_encode($data), true);
    // if(isset($array['errorMessage'])) {
    //   //  echo "Error message:".$array['errorMessage'];
    //    echo json_encode(['errorMessage' => $array['errorMessage']]);
    //    die;
    // }

    // if (isset($array['formUrl'])) {

    //   // 1. prepare data to send email to admin and client
    //   // 2. redurect to payment_page of ACBA
    //   // 3. waint in booking/index.php response of payment_page
    //   $_SESSION['tourData'] = compact(
    //     "travelers",
    //     "inclusive",
    //     "agesArray",
    //     "placeType",
    //     "checkInDate",
    //     "discount",
    //     "summaryWithDiscount",
    //     "tour"
    //   );
    
    //   $_SESSION['personals'] = compact(
    //     "fullName",
    //     "email",
    //     "phone",
    //     "messengers"
    //   );
      
    //   echo json_encode(['formUrl'=>$array['formUrl']]);
    //   die;
    // }


    $_SESSION['tourData'] = compact(
      "travelers",
      "inclusive",
      "agesArray",
      "placeType",
      "checkInDate",
      "discount",
      "summaryWithDiscount",
      "tour"
    );

    $_SESSION['personals'] = compact(
      "fullName",
      "email",
      "phone",
      "messengers"
    );

    echo json_encode(['formUrl'=>$returnUrl]);
}



