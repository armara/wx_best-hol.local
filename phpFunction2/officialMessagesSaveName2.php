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
    
echo '<div class="modal fade" id="myTextModal" role="dialog">
    <div style="width: 100vw;margin: 5vh 20vw;" class="modal-dialog">
      <div style="width: 60vw;height: 90vh;" class="modal-content">
        <div class="modal-header p-1">
          <h2 style="color: white" class="m-auto"><?= $title ?> - Terms</h2>
          <button type="button" class="m-0 close" data-dismiss="modal">&times;</button>
        </div>
        <div style="overflow-x: hidden;" class="modal-body">
          <p id="modalText"><?= $desc ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>';
  }
?>