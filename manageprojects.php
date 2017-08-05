<?php $page_title = "Manage Projects" ?>
<?php include_once("/head.php"); ?>
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
              <option value="" selected disabled>All</option>
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
        </form>
      </div>
      <div class="col-md-2"></div>
    </div>
  </section>
  <!-- Table of projects -->
  <div class="row">
    <div id="projects-table" style="width: 1200px; margin: 0 auto;">
        <div class="well" style="border-radius: 0; padding:8px 0px 8px 12px;color:white;background-color: #6198d0;font-size: 120%;">25 Projects</div>
        <div class="row">
          <?php include("/ghanaprojectexample.php"); ?>
          <?php include("/ghanaprojectexample.php"); ?>
          <?php include("/ghanaprojectexample.php"); ?>
        </div>
        <div class="row">
          <?php include("/ghanaprojectexample.php"); ?>
          <?php include("/ghanaprojectexample.php"); ?>
          <?php include("/ghanaprojectexample.php"); ?>
        </div>
      </div>
    </div>
  </div>
</div>
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
<?php include_once("/end.php"); ?>