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
        <li><a href="/dashboard.php"><i class="fa fa-envelope-o"></i></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle name" data-toggle="dropdown" href="#">Hillary
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
