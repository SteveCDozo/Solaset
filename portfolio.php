<?php
$page_title = "Portfolio";
$portal = "investor";
include_once("head.php");
?>
<div class="container-fluid">
  <!-- filter/sort section -->
  <section id="filter">
    <div class="row">
      <div class="col-xs-2"></div>
      <div class="col-xs-8 text-center">
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
              <option value="">Amount Invested - Low to High</option>
              <option value="">Amount Invested - High to Low</option>
              <option value="">Term - Shortest to Longest</option>
              <option value="">Term - Longest to Shortest</option>
            </select>
          </div>
          <input type="reset" class="btn" value="Clear" style="margin-left:10px;color:white;background-color:#4e90cd;">
        </form>
      </div>
      <div class="col-xs-2"></div>
    </div>
  </section>
  <!-- Table of projects -->
  <div style="width: 1100px; margin: 0 auto;">
    <div class="row" id="projects-table">
      <div class="well" style="border-radius: 0; padding:8px 0px 8px 12px;color:white;background-color:#4e90cd;font-size: 120%;font-weight:bold;">39 Projects, 2 Fully Paid, 1 in Funding, 30 Current, 2 Late, 1 Delinquent</div>
      <div class="row">
        <?php
        $progress_percent = '100';
        $progress_type = 'success';
        $progress_label = 'Current';
        $house_img="1.jpg";
        $house_name="University of Ghana";
        include("ghanaprojectexample.php");
        $progress_label = 'In Funding';
        $house_img="2.jpg";
        $house_name="Mankesim";
        include("ghanaprojectexample.php");
        $progress_label = 'Fully Paid';
        $house_img="3.jpg";
        $house_name="Labadi Beach Hotel";
        include("ghanaprojectexample.php");
        ?>
      </div>
      <div class="row">
        <?php
        $progress_type = 'info';
        $progress_label = '5 days late';
        $house_img="4.jpg";
        $house_name="Tekno Enterprise";
        include("ghanaprojectexample.php");
        $progress_type = 'info';
        $progress_label = '15 days late';
        $house_img="5.jpg";
        $house_name="Ofosu Family House";
        include("ghanaprojectexample.php");
        $progress_type = 'warning';
        $progress_label = 'Delinquent';
        $house_img="6.jpg";
        $house_name="SNITT Flats";
        include("ghanaprojectexample.php");
        ?>
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
<?php include_once("end.php"); ?>
