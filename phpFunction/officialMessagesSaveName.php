<?php
  include("../phpText/constants/index.php");

  if( isset( $_POST['nameText'] ) || isset( $_COOKIE['nameText'] ) ){

    if ( isset( $_POST['nameText'] ) ){
        $text = $_POST['nameText'];
        setcookie('nameText', $text, time() + 86400 * 30, '/');
      // }
    }
    else{
      $text = $_COOKIE['nameText'];
    }
  }
?>