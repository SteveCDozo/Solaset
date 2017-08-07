<?php
$page_title = "Verify Investor";
$command = true;
include_once("/head.php");
?>
<section id="verify-investor-page">
<!-- project information -->
<div class="container-fluid">
  <h3 class="page-header text-center">Verify Investor</h3>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <h4 class="panel-header text-center"><b>Check Investor Status</b></h4>
          <div class="row" style="padding-bottom: 20px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <form>
                <div class="form-group">
                  <label for="">Investor Name</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Investor Account Number</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="form-group">
                  <label for="">Investor Email</label>
                  <input type="text" id="" class="form-control" name="">
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="Search">
                </div>
              </form>
            </div>
            <div class="col-md-2"></div>
          </div>
          <hr>
          <h4 class="panel-header text-center"><b>Search Results</b></h4>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <table id="results-table" class="table table-hover">
                <tbody>
                  <tr>
                    <td>John Stockton</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn">Accredited</button>
                        <button type="button" class="btn btn-primary">Not-Accredited</button>
                        <button type="button" class="btn">Foreign</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Mary Applegate</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">Accredited</button>
                        <button type="button" class="btn">Not-Accredited</button>
                        <button type="button" class="btn">Foreign</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Greg McHughson</td>
                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn">Accredited</button>
                        <button type="button" class="btn">Not-Accredited</button>
                        <button type="button" class="btn btn-primary">Foreign</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
<?php include_once("/end.php"); ?>
