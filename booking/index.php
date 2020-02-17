<?php
session_start();
/*
  array(2) {
    ["orderNumber"]=>
    string(12) "14C1627DBF3E"
    ["orderId"]=>
    string(36) "7d664f9b-f7e1-47e5-accb-9566063fb43c"
  }

  http://best-hol.local/booking/index.php?orderNumber=14C1627DBF3E&orderId=7d664f9b-f7e1-47e5-accb-9566063fb43c
*/

// echo '<pre>';
// echo "---session--- \n\r";
// var_export($_SESSION);

// echo "---post--- \n\r";
// var_dump($_POST);

// echo "\n\r ---get--- \n\r";
// var_dump($_GET);
// echo '</pre>';


if(isset($_GET['orderNumber']) ) { // && isset($_GET['orderId'])
  // check payment status
  $orderNumber = $_GET['orderNumber'];
  $api_name = '34542972_api';
  $api_pass = '$Ah0545139';
  $api = "https://ipay.arca.am/payment/rest/getOrderStatusExtended.do";
  $PostFields = "userName=$api_name&password=$api_pass&orderNumber=$orderNumber&language=$lng";

  $CurlOptions = array(
    CURLOPT_URL  => $api,
    CURLOPT_RETURNTRANSFER=> true,					
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,                           
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $PostFields,
  );

  $CH = curl_init();
  curl_setopt_array($CH, $CurlOptions);
  $Result = curl_exec($CH);
  if (curl_errno($CH) > 0) {
    $RetStr = false;
  } else {
    $RetStr = $Result;
  }
  curl_close($CH);
  $array = json_decode($RetStr, true);
  // var_dump($array);


  if($array['errorCode'] > 0) {
    var_dump('<p>90% - orderNumber is not correct</p>');
    require_once('./404.php');
    die;
  }

  if($array['orderStatus'] === 2 && $array['errorCode'] === "0" && $array['actionCode'] === 0) {
    echo '<p>----- sax lava -----</p>';
    require_once('./success.php');
  }else{
    echo '<p>----- lava chi -----</p>';
    require_once('./error.php');
  }


}else{
  // or redirect, or show message - page not found.
  var_dump('<p>not set get params</p>');
  require_once('./404.php');
  die;
}

