$(document).ready(function(){
  let id1;
  $(document).on("click", ".click", function(){
    id1 = $(this).text();
    $.post( "./sights_data.php", {id: id1}, (res) => {
      $('.sights').html(res);
    });
  });
})