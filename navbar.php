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
          foreach ($nav_menu[$portal] as $menu_item) {
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
            <li><a href="/addpartner.php">Add Partner</a></li>
            <li><a href="/verifyinvestor.php">Verify Investor</a></li>
            <li><a href="/documentcenter.php">Document Center</a></li>
            <li><a href="#">Country Information</a></li>
            <li><a href="#">Add Administrator</a></li>
            <li><a href="#">Account History</a></li>
            <li><a href="#">Databases</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
