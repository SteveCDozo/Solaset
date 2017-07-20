<?php $page_title = "Funded Projects" ?>
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
              <option value="">Current</option>
              <option value="">In Funding</option>
              <option value="">Fully Paid</option>
              <option value="">Late</option>
              <option value="">Delinquent</option>
              <option value="">Auto-investments</option>
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
            <input type="text" id="" class="form-control" name="" placeholder="Project ID or Location">
          </div>
          <div id="sort" class="form-group">
            <label for="">Sort by: </label>
            <select class="form-control" id="">
              <option value="" selected>Most Recent</option>
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
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <div id="projects-table" class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title"><b>39 Projects, 2 Fully Paid, 1 in Funding, 30 Current, 2 Late, 1 Delinquent</b></div>
        </div>
        <div class="panel-body">
          <div class="row">
            <?php include("/ghanaprojectexample.php"); ?>
            <?php include("/ghanaprojectexample.php"); ?>
            <?php include("/ghanaprojectexample.php"); ?>
          </div>
          <div class="row">
            <?php include("/ghanaprojectexample.php"); ?>
            <?php include("/ghanaprojectexample.php"); ?>
            <?php include("/ghanaprojectexample.php"); ?>
          </row>
        </div>
      </div>
    </div>
    <div class="col-md-1"></div>
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
