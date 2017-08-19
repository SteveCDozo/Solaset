<?php include_once("navbar-links.php"); ?>
<nav class="navbar navbar-default">
  <div id="nav-wrap" style="width: 1200px; margin: 0 auto;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">
          <img alt="Solaset" src="/img/solaset.png" width="200">
        </a>
      </div>
      <ul class="nav navbar-nav navbar-center">
        <?php
          foreach ($site_menu[$portal] as $menu_item) {
            echo "<li><a href={$menu_item['link']}>{$menu_item['text']}</a></li>";
          }
        ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope-o"></i><span class="badge" style="">8</span>
          </a>
          <ul id="notifs_dropdown" class="dropdown-menu">
            <i id="no-notifs" style="display:none;text-align:center;">No new notifications</i>
            <?php
              foreach ($notifications as $notif_item) {
                if ($notif_item['owner'] == $portal && $notif_item['status'] == 'active') {
                  echo "<li><div class='row' style='display:flex;'><div class='col-xs-10'><a class='notif_link' href='{$notif_item['link']}'";
                  echo ($notif_item['link'][0]=="/") ? "" : " target='_blank'";
                  echo ">{$notif_item['text']}</a></div><div class='col-xs-2'><button type='button' class='close' value='{$notif_item['id']}'>&times;</button></div></div></li>";
                }
              }
            ?>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle name" data-toggle="dropdown" href="#">
            Hillary
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <?php
              foreach ($account_menu[$portal] as $menu_item) {
                echo "<li><a href={$menu_item['link']}>{$menu_item['text']}</a></li>";
              }
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script>
$(function() {
  // get current URL path and assign 'active' class
	var pathname = window.location.pathname;
  // show line under current page
	$('.nav > li > a[href="'+pathname+'"]').parent().addClass('active');
  // stop the dropdown menu from closing/disappearing when user clicks inside it
  $('#notifs_dropdown').click(function(e) {
    e.stopPropagation();
  });
  $("#notifs_dropdown .close").click(function() {
    $(this).closest("li").remove();
    //$.get("hide-notification.php", { id : $(this).val() });
    if ($("#notifs_dropdown").children("li").length == 0) {
      $("#no-notifs").css({"display":"block", "margin": "20px 0"});
    }
  });
  if ($("#notifs_dropdown").children("li").length == 0) {
    $("#no-notifs").css({"display":"block", "margin": "20px 0"});
  }
});
</script>
