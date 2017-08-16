<?php
$page_title = "Home";
$portal = "admin";
include_once("head.php");
?>
<div class="container-fluid">
  <div class="site-wrapper content">
    <div class="row text-center">
      <div class="col-xs-12">
        <h1>Portal Select</h1>
        <br>
        <form action="/addproject.php" style="display:inline-block;">
          <button type="submit" class="btn">Admin</button>
        </form>
        <form action="/dashboard.php" style="display:inline-block;padding-bottom:20px;">
          <button type="submit" class="btn">Investor</button>
        </form>
        <hr>
        <h1>Coming Soon</h1>
        <br>
        <form action="#" style="display:inline-block;padding-bottom:20px;">
          <button type="submit" class="btn disabled">Borrower</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include_once("end.php"); ?>
