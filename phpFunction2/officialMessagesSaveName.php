<?php
  if( isset( $_POST['nameText'] ) ){

    $text = strtoupper( $_POST['nameText'] );
    $title_array = explode("_TEXT", $text);
    $title = reset( $title_array );
    $title = $title . "_TITLE";
    $desc_array = explode("_TEXT", $text);
    $desc = reset( $desc_array );
    $desc = $desc . "_DESC";
    // var_dump($desc);
    // var_dump($title);
    // die();
    setcookie('nameTitle', $title, time() + 86400 * 30, '/');
    setcookie('nameDesc',  $desc, time() + 86400 * 30, '/');
  }
?>