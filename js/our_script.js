$.post("./phpText/header.php", {nav_active_link: $("#nav_active_link").val()}, (res) => {
  $("#chka").html(res);
})