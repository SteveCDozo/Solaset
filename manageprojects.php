<?php
$page_title = "Manage Projects";
$portal = "admin";
$action = "edit";
include_once("head.php");
?>
<section id="manage-projects-page">
<div class="container-fluid">
  <!-- filter/sort section -->
  <section id="filter">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 text-center">
        <form class="form-inline">
          <div class="form-group">
            <label for="">Filter by: </label>
            <select class="form-control" id="">
              <option value="" selected>All</option>
              <option value="">Residential</option>
              <option value="">Commercial</option>
              <option value="">Utility</option>
              <option value="">FUNDED</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            <input type="text" id="" class="form-control" name="" placeholder="Location">
          </div>
          <div id="sort" class="form-group">
            <label for="">Sort by: </label>
            <select class="form-control" id="">
              <option value="" selected>Most Recent</option>
              <option value="">Amount Left - Low to High</option>
              <option value="">Amount Left - High to Low</option>
              <option value="">Amount - Low to High</option>
              <option value="">Amount - High to Low</option>
              <option value="">Term - Shortest to Longest</option>
              <option value="">Term - Longest to Shortest</option>
            </select>
          </div>
          <input type="reset" class="btn" value="Clear" style="margin-left:10px;color:white;background-color:#4e90cd;">
        </form>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>
  <!-- Table of projects -->
  <div style="width: 1100px; margin: 0 auto;">
    <div class="row" id="projects-table">
      <div class="well" style="border-radius: 0; padding:8px 0px 8px 12px;color:white;background-color:#4e90cd;font-size: 120%;font-weight:bold;">6 Projects</div>
      <div class="row">
        <?php
        $house_img="1.jpg";
        include("ghanaprojectexample.php");
        $house_img="2.jpg";
        include("ghanaprojectexample.php");
        $house_img="3.jpg";
        include("ghanaprojectexample.php");
        ?>
      </div>
      <div class="row">
        <?php
        $house_img="4.jpg";
        include("ghanaprojectexample.php");
        $house_img="5.jpg";
        include("ghanaprojectexample.php");
        $house_img="6.jpg";
        include("ghanaprojectexample.php");
        ?>
      </div>
    </div>
  </div>
</div>
</section>
<script>
$(function() {
  $("#projects-table article").hover(
    // over
    function() {
      $(this).find(".overlay").css("display", "flex");
    },
    // out
    function() {
      $(this).find(".overlay").css("display", "none");
    }
  );
});
</script>
<?php include_once("end.php"); ?>
