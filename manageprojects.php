<?php $page_title = "Manage Projects" ?>
<?php include_once("head.php"); ?>
  <div class="container-fluid">
    <!-- filter/sort section -->
    <section style="">
      <div class="row" style="background-color:#cccccc;padding:30px 0 30px 0;margin-top:-20px;">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="text-align:center;">
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
            <div class="form-group" style="padding-left:20px;">
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
    <section style="padding-top:20px;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title"><b>500 projects</b></div>
            </div>
            <div class="panel-body">
              <div class="row" style="padding: 10px 10px 10px 10px;">
                <?php include("ghanaprojectexample.php"); ?>
                <?php include("ghanaprojectexample.php"); ?>
                <?php include("ghanaprojectexample.php"); ?>
              </div>
              <div class="row" style="padding: 10px 10px 10px 10px;">
                <?php include("ghanaprojectexample.php"); ?>
                <?php include("ghanaprojectexample.php"); ?>
                <?php include("ghanaprojectexample.php"); ?>
              </row>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </section>
  </div>
<?php include_once("end.php"); ?>
